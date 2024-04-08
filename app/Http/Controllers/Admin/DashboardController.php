<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index ()
    {
        return view('Admin.index');
    }

    public function users () {
        return view('Admin.users');
    }
    public function restaurants () {
        return view('Admin.restaurants');
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
}
