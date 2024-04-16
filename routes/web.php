<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MealController;
use App\Http\Controllers\PermissionController;
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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.store');
    Route::post('/login', [LoginController::class, 'login'])->name('login.connect');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
});

Route::group(['middleware' => 'role:super-admin'], function () {
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions');
    Route::post('/permissions', [PermissionController::class, 'store'])->name('permissions.store');
    Route::delete('/deleteRole/{role}', [PermissionController::class, 'destroy'])->name('permissions.kill');

});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [DashboardController::class, 'users'])->name('usersManagement');
    Route::get('/payments', [DashboardController::class, 'payments'])->name('payments');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');
});

Route::group(['prefix' => 'restaurants'], function () {
    Route::get('/', [RestaurantController::class, 'index'])->name('restaurants');
    Route::post('/storingRestaurant', [RestaurantController::class, 'store'])->name('restaurants.store');
    Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'show'])->name('restaurants.show');
    Route::put('/restaurants/{restaurant}', [RestaurantController::class, 'update'])->name('restaurants.update');
    Route::delete('/destroyingRestaurant/{restaurant}', [RestaurantController::class, 'destroy'])->name('restaurants.kill');
    Route::get('/restaurantsManagement', [RestaurantController::class, 'dashboard'])->name('restaurantsManagement');
});
Route::group(['prefix' => 'meals'], function () {
    Route::get('/', [MealController::class, 'index'])->name('meals');
    Route::get('/mealsManagement', [MealController::class, 'dashboard'])->name('mealsManagement');
    Route::post('/storingMeal', [MealController::class, 'store'])->name('meals.store');
    Route::delete('/destroyingMeal/{meal}', [MealController::class, 'destroy'])->name('meals.kill');
    Route::put('/meals/{meal}', [MealController::class, 'update'])->name('meals.update');
    // Route::get('/meals/{Meal}', [MealController::class, 'show'])->name('meals.show');
});
