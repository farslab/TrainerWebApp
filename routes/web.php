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
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth');
});

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
//trainer routes
Route::middleware(['auth'])->group(function () {
    Route::get('/t_customers', [TrainNutritionController::class, 'tCustomers'])->name('t_customers');
    Route::get('/t_training-program/{user}', [TrainNutritionController::class, 'trainingIndex'])->name('training.index');
    Route::post('/trainingStore',[TrainNutritionController::class, 'trainingStore'])->name('training.store');
    Route::get('/trainingDelete/{trainingProgram}',[TrainNutritionController::class, 'trainingDelete'])->name('trainingDelete');
});
Route::middleware(['auth'])->group(function (){
    Route::get('/create-new-pr', [TrainNutritionController::class, 'progressRecordsIndex'])->name('pr.index');
    Route::post('/create-new-pr', [TrainNutritionController::class, 'progressRecordsAdd'])->name('pr.add');

});
require __DIR__ . '/auth.php';
