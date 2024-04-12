<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index() {
        return view('Auth.register');
    }

    public function register(RegisterRequest $request) {
        $data = $request->validated();
        dd($data);
        
        $this->userRepository->create($data);
        // return redirect()->route('login');
    }
}
