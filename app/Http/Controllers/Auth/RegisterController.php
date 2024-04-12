<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

    public function register(Request $request) {
        $data = $request->all();
        dd($data);
        // $this->userRepository->create($data);
        // return redirect()->route('login');
    }
}
