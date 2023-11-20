<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\NutritionPlan;
use App\Models\User;
use Illuminate\Http\Request;

class TrainNutritionController extends Controller
{
    public function trainingIndex(){

    }
    public function index(User $user)
    {
        $days = ['Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi', 'Pazar'];

        $customer = $user->customer;
        $nutritionPlan=$customer->nutritionPlan;
        return view('trainer.nutrition-plan', compact('days', 'nutritionPlan', 'user'));
    }
    public function store(Request $request)
    {
        $data = $request->except('_token');


        $customer = User::find($request->user_id)->customer;
        if ($request->input('clear')) {
            foreach ($data['day'] as $key => $day) {
                $nutritionPlan = NutritionPlan::updateOrCreate(
                    ['customer_id' => $customer->id, 'day' => $day],
                    [
                        'target' => "",
                        'calorie' => "",
                        'meal_1' => "",
                        'meal_2' => "",
                        'meal_3' => "",
                    ]
                );
            }
            return redirect()->route('nutrition.index', $customer->user->id)->with('success', 'Beslenme Planı Sıfırlandı.');
        }
        foreach ($data['day'] as $key => $day) {
            $nutritionPlan = NutritionPlan::updateOrCreate(
                ['customer_id' => $customer->id, 'day' => $day],
                [
                    'target' => $data['targets'][$key],
                    'calorie' => $data['calories'][$key],
                    'meal_1' => $data['meals_1'][$key],
                    'meal_2' => $data['meals_2'][$key],
                    'meal_3' => $data['meals_3'][$key],
                    // Diğer öğünler için benzer şekilde devam edebilirsiniz
                ]
            );
        }


        return redirect()->route('nutrition.index', $customer->user->id)->with('success', 'Beslenme Planı Kaydedildi.');
    }
}
