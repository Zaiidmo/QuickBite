<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    protected $userRepository;

    public function __construct(){
        
    }
    public function index(){
        return view('Auth.register');
    }
    public function register(){

    }
}
