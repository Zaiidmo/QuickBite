<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MealController;
use App\Http\Controllers\RestaurantController;
use App\Models\Restaurant;
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

Route::get('/', [Controller::class, 'index'])->name('home');

Route::resource('meals', MealController::class);

Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.store');
    Route::post('/login', [LoginController::class, 'login'])->name('login.connect');
});

Route::group(['middleware' => 'auth'], function(){
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
});

Route::group(['middleware' => 'role:super-admin'], function(){

});


Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [DashboardController::class, 'users'])->name('usersManagement');
    Route::get('/payments', [DashboardController::class, 'payments'])->name('payments');
    Route::get('/mealsManagement', [DashboardController::class, 'meals'])->name('mealsManagement');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/restaurants', [RestaurantController::class, 'index'])->name('restaurants');
    Route::post('/storingRestaurant', [RestaurantController::class, 'store'])->name('restaurants.store');
    Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'show'])->name('restaurants.show');
    Route::get('/restaurantsManagement', [RestaurantController::class, 'dashboard'])->name('restaurantsManagement');
});