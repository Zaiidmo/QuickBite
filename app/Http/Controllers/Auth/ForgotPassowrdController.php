<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class ForgotPassowrdController extends Controller
{

    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(){
        return view('Auth.forgot-password');
    }
    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = UserRepository::findByEmail($request->email);

        if ($user) {
            $this->userRepository->forgotPassword($user);
            return redirect()->back()->with('success', 'Password reset link sent on your email id.');
        }

        return redirect()->back()->with('error', 'User not found');
    }
}
