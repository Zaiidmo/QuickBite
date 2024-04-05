<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginView () {
        return view('Auth.login');
    }
    public function registerView () {
        return view('Auth.register');
    }
}