<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Permission;
use App\Models\Role;
use App\Repositories\MealRepository;
use App\Repositories\OrderRepository;
use App\Repositories\RestaurantRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $usersCount = UserRepository::all()->count();
        $restaurantsCount = RestaurantRepository::all()->count();
        $mealsCount = MealRepository::all()->count();
        $ordersCount = Order::all()->count();
        $topUsers = OrderRepository::mostOrdersByUser();
        $topRestaurants = RestaurantRepository::topRestaurants();
        return view('Admin.index', compact('usersCount', 'restaurantsCount', 'mealsCount', 'ordersCount', 'topUsers', 'topRestaurants'));
    }

    public function users()
    {
        $users = UserRepository::all();
        $customers = UserRepository::findByRole('customer');
        $restaurants = UserRepository::findByRole('restaurant-owner');
        $riders = UserRepository::findByRole('driver');
        return view('Admin.users', compact('users', 'customers', 'restaurants', 'riders'));
    }

    public function payments()
    {
        return view('Admin.payments');
    }
    public function settings()
    {
        return view('Admin.settings');
    }
    public function profile()
    {
        $user = auth()->user();
        $ordersHistory = OrderRepository::ordersHistory(auth()->user()->id);
        $placedOrders = OrderRepository::placedOrders(auth()->user()->id);
        $ordersToDeliver = OrderRepository::ordersToDeliver();
        $myDeliveries = OrderRepository::myDeliveries(auth()->user()->id);
        $recommendedMeals = MealRepository::tastyFood();
        return view('profile.index', compact('ordersHistory', 'recommendedMeals', 'user', 'placedOrders', 'ordersToDeliver', 'myDeliveries'));
    }
}
