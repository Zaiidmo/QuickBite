<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MealController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
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
    Route::put('/updateRole/{role}', [PermissionController::class, 'update'])->name('roles.update');
    Route::put('/updatePermissions/{user}', [PermissionController::class, 'updatePermissions'])->name('permissions.update');

});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::delete('/destroyingCategories/{category}', [CategoryController::class, 'destroy'])->name('categories.kill');
    Route::post('/storingCategories', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
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
    Route::get('/{meal}', [MealController::class, 'show'])->name('meals.show');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('/ordering', [OrderController::class, 'store'])->name('place.order');
    Route::post('/payment/{order}/paying', [PaymentController::class, 'preparePayment'])->name('payment');
    Route::post('/payment/success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
});
