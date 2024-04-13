<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\RestaurantRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index ()
    {
        return view('Admin.index');
    }

    public function users () {
        $users = UserRepository::all();
        $customers = UserRepository::findByRole('customer');
        $restaurants = UserRepository::findByRole('restaurant-owner');
        $riders = UserRepository::findByRole('driver');
        return view('Admin.users', compact('users', 'customers', 'restaurants', 'riders'));
    }
    public function restaurants () {
    }
    public function payments () {
        return view('Admin.payments');
    }
    public function meals () {
        return view('Admin.meals');
    }
    public function settings () {
        return view('Admin.settings');
    }
    public function profile () {
        return view('profile.index');
    }
}
