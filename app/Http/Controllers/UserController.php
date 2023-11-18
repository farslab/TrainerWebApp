<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Trainer;
use Illuminate\Validation\Rules;
use Exception;


class UserController extends Controller
{
    public function disableUser(User $user){
        $user->update(['is_active' => 0]);
        return redirect()->back()->with('success', 'Kullanıcı devre dışı bırakıldı.');

    }
    public function deleteUser(User $user){
        $user->delete();
        return redirect()->back()->with('success', 'Kullanıcı Başarıyla Silindi.');

    }
    public function enableUser(User $user){
        $user->update(['is_active' => 1]);
        return redirect()->back()->with('success', 'Kullanıcı Aktif Hale Getirildi.');
    }
    public function index()
    {
        return view("admin.create-new-user");
    }
    public function store(Request $request)
    {

        if ($request->input('role') == 'trainer') {


            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'experiences' => 'required',
                'phone' => 'required',
            ]);
            // Kullanıcı oluştur
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'role' => $request->input('role'),
            ]);

            // Trainer oluştur
            $trainer = Trainer::create([
                'name' => $user->name,
                'user_id' => $user->id,
                'email' => $user->email,
                'specialty' => $request->input('specialty'),
                'experiences' => $request->input('experiences'),
                'phone' => $request->input('phone'),
                'pp_path'=> 'public/profile_photos/avatar.png',

            ]);

            return redirect()->back()->with('success', 'Antrenör Başarıyla Oluşturuldu.');
        }

        if ($request->input('role') == 'customer') {

            try {
                $trainerId = $this->getTrainerId($request->input('customer_target'));
            } catch (\Throwable $th) {
                return redirect()->back()->with('error', 'Hesap Oluşturulamadı: Yetersiz Antrenör.');
            }


            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'customer_birth_date' => 'required|date',
                'phone_number' => 'required',
            ]);
            // Kullanıcı oluştur
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'role' => $request->input('role'),

            ]);

            // pp verilmediyse default avatar
            if ($request->hasFile('profile_photo')) {
                $dosya = $request->file('profile_photo');
                $dosyaAdi = uniqid() . '-fitlife-' . $user->email . '.' . $dosya->getClientOriginalExtension();
                $pp_path = $dosya->storeAs('public/profile_photos', $dosyaAdi);
            } else {
                // Varsayılan avatar yolunu belirle
                $pp_path = 'public/profile_photos/avatar.png';
            }

            // Customer oluştur
            $customer = Customer::create([
                'user_id' => $user->id,
                'trainer_id' => $trainerId,
                'customer_target' => $request->input('customer_target'),
                'birth_date' => $request->input('customer_birth_date'),
                'gender' => $request->input('gender'),
                'phone_number' => $request->input('phone_number'),
                'pp_path' => $pp_path,
            ]);

            if ($customer) {
                if ($request->is('register')) {
                    return redirect()->route('login')->with('success', 'Hesap Başarıyla Oluşturuldu. Giriş Yapabilirsiniz.');
                } elseif ($request->is('create-new-user')) {
                    return redirect()->back()->with('success', 'Danışan Başarıyla Oluşturuldu.');
                }
            } else {
                $user->delete();
                return redirect()->back()->with('error', 'Hesap oluşturulurken bir hata oluştu.');

            }
        }


    }
    public function getTrainerId($customerTarget)
    {
        $trainers = Trainer::where('specialty', $customerTarget)->get();

        // En az müşteriye sahip olan trainer
        $selectedTrainer = $trainers->sortBy(function ($trainer) {
            return $trainer->customers->count();
        })->first();
        if ($selectedTrainer->customers->count() >= 5) {
            throw new \Exception("Antrenörlerin Hepsi Danışan Sayısına Ulaştı");
        }
        return $selectedTrainer->id;
    }
    public function trainers()
    {
        $trainers = Trainer::orderBy("created_at", "desc")->get();

        return view('admin.trainers-table', compact('trainers'));

    }
    public function customers()
    {
        $customers = Customer::orderBy("created_at", "desc")->get();

        return view('admin.customers-table', compact('customers'));

    }

}
