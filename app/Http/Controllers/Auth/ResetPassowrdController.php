<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class ResetPassowrdController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository){
        $this->userRepository = $userRepository;
    }
    public function index(){
        return view('Auth.reset-password');
    }

    public function resetPassword(Request $request){
        $request->validate([
            'email' => 'required|email', 
            'password' => 'required|min:8',
        ]);
        $user = $this->userRepository->findByEmail($request->email);
        if (!$user) {
            return redirect()->back()->with('error', 'Invalid token or email');
        }

        // Update the password
        $user = $this->userRepository->updatePassword($user, $request->password);

        return redirect('/login')->with('success', 'Password updated successfully');
    }
}
