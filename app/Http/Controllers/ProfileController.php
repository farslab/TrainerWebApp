<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(User $user)
    {
        $loggedInUser = auth()->user();
        

        if ($loggedInUser->role != "admin" && $loggedInUser->id != $user->id && $loggedInUser->id != $user->customer->trainer->user_id) {
            return redirect(route("profile.edit", $loggedInUser->id));
        }
        $userRole = $user->role;
        return view('profile.edit', [
            'user' => $user, 'userRole' => $userRole,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {

        $user = User::find($request->user_id);

        if ($user->role == 'trainer') {
            if ($request->hasFile('profile_photo')) {
                $file = $request->file('profile_photo');
                $fileName = uniqid() . '-fitlife-' . $user->email . '.' . $file->getClientOriginalExtension();
                $pp_path = $file->storeAs('public/profile_photos', $fileName);
                $user->trainer->pp_path = $pp_path;
                $user->trainer->save();
            }

            $user->name = $request->name;
            $user->trainer->phone = $request->phone;
            $user->trainer->experiences = $request->experiences;
            $user->trainer->save();
            $user->save();
        }
        if ($user->role == 'customer') {
            if ($request->hasFile('profile_photo')) {
                $file = $request->file('profile_photo');
                $fileName = uniqid() . '-fitlife-' . $user->email . '.' . $file->getClientOriginalExtension();
                $pp_path = $file->storeAs('public/profile_photos', $fileName);
                $user->customer->pp_path = $pp_path;
                $user->customer->save();
            }

            $user->name = $request->name;
            $user->customer->phone_number = $request->phone;
            $user->customer->save();
            $user->save();
        }



        return redirect()->back()->with('success', 'Profil Bilgileri Güncellendi.');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request) : RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
