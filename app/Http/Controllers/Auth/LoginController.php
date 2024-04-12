<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryInterface;

class LoginController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index() {
        return view('Auth.login');
    }

    public function login() {
        $credentials = $request->validated()
    }

}
