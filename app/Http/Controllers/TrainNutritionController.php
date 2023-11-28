<?php

namespace App\Http\Controllers;

use App\Models\TrainingProgram;
use Auth;
use App\Models\NutritionPlan;
use App\Models\User;
use Illuminate\Http\Request;

class TrainNutritionController extends Controller
{
    public function trainingDelete(TrainingProgram $trainingProgram){

        $trainingProgram->delete();
        return redirect()->back()->with('success','Antrenman Programı Silindi.');

    }

    public function tCustomers(User $user){
        $user= Auth::user();
        $customers=$user->trainer->customers;

        return view('trainer.tCustomers', compact('customers'));

    }
    public function trainingStore(Request $request){
        $user=User::find($request->input('user_id'));

        $customer=$user->customer;
        
        TrainingProgram::create([
            'customer_id'=>$customer->id,
            'exercise_name'=> $request->exercise_name,
            'target'=> $request->target,
            'sets'=>$request->sets,
            'reps'=>$request->reps,
            'video_guide'=>$request->video_guide,
            'start_date'=>$request->start_date,
            'duration'=>$request->duration,

        ]);
        return redirect()->back()->with('Success','Antrenman Programı Oluşturuldu.');

    }
    public function trainingIndex(User $user){

        return view('trainer.training-program', compact('user'));
    }
    public function index(User $user)
    {
        if($user->id!=auth()->user()->id && $user->customer->trainer->user_id != auth()->user()->id && !auth()->user()->hasRole('admin')){
            abort(403,'BU SAYFA GORUNTULENEMIYOR');
        }

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
                ]
            );
        }


        return redirect()->route('nutrition.index', $customer->user->id)->with('success', 'Beslenme Planı Kaydedildi.');
    }
}
