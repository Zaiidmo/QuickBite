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
}