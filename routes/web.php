<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainNutritionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $user = auth()->user();

    if ($user->hasRole('admin')) {
        return redirect()->route('admin-dash');
    } elseif ($user->hasRole('customer')) {
        return redirect()->route('customer-dash');
    } elseif ($user->hasRole('trainer')) {
        return redirect()->route('trainer-dash');
    } else {
        // Handle other roles or a default dashboard view
        return redirect('/customer-dashboard');
    }
})->middleware(['auth'])->name('dashboard');

Route::get('/admin-dashboard', function () {
    return view('admin.admin-dashboard');
})->middleware(['auth', 'role:admin'])->name('admin-dash');

Route::get('/customer-dashboard', function () {
    return view('customer.customer-dashboard');
})->middleware(['auth', 'role:customer'])->name('customer-dash');

Route::get('/trainer-dashboard', function () {
    return view('trainer.trainer-dashboard');
})->middleware(['auth', 'role:trainer'])->name('trainer-dash');

Route::middleware('auth')->group(function () {
    Route::get('/profile/{user}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    //beslenme planları
    Route::get('/nutrition-plan/{user}', [TrainNutritionController::class, 'index'])->name('nutrition.index');
    Route::post('/nutrition-plan', [TrainNutritionController::class, 'store'])->name('nutrition.store');
});

//admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/create-new-user', [UserController::class, 'index'])->name('create-index');
    Route::post('/create-new-user', [UserController::class, 'store'])->name('create-store');
    Route::get('/trainers', [UserController::class, 'trainers'])->name('trainers-list');
    Route::get('/customers', [UserController::class, 'customers'])->name('customers-list');

    //diger user islemleri
    Route::get('user-disable/{user}', [UserController::class, 'disableUser'])->name('user.disable');
    Route::get('user-enable/{user}', [UserController::class, 'enableUser'])->name('user.enable');
    Route::get('user-delete/{user}', [UserController::class, 'deleteUser'])->name('user.delete');





});

require __DIR__ . '/auth.php';
