<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
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

    public function login(LoginRequest $request) {
        // dd($request);
        $credentials = $request->validated();
        $try = $this->userRepository->connect($credentials);
        if($try) {
            return redirect()->route('home');
        } return back()->with('error', 'Invalid credentials');
    }

    public function logout() {
        $out = $this->userRepository->disconnect();
        if($out) {
            return redirect()->route('login');
        } return back()->with('error', 'Something went wrong');
    }

}
