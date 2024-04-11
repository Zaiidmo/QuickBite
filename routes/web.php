<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\RestaurantController;
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

Route::resource('meals', MealController::class);

Route::get('/register', [RegisterController::class, 'index'])->name('regiter');
Route::post('/registering', [RegisterController::class, 'register'])->name('registering');
Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');


Route::group(['middleware' => 'guest', 'prefix' => 'Admin'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [DashboardController::class, 'users'])->name('usersManagement');
    Route::get('/restaurants', [DashboardController::class, 'restaurants'])->name('restaurantsManagement');
    Route::get('/payments', [DashboardController::class, 'payments'])->name('payments');
    Route::get('/meals', [DashboardController::class, 'meals'])->name('mealsManagement');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
});

Route::resource('restaurants', RestaurantController::class);