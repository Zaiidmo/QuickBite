<?php

namespace App\Repositories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserRepository implements UserRepositoryInterface
{
    public function create(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        $role = Role::where('slug', $data['user_type'])->get();

        $user = User::create($data);
        if ($user) {
            $user->roles()->attach($role);
            // dd($user);
            // auth()->login($user);
            return true;
        }
        return false;
    }

    public function connect(array $data)
    {
        if (auth()->attempt($data)) {
            // dd($data);
            request()->session()->regenerate();
            return true;
        }
        return false;
    }

    public function disconnect()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return true;
    }

    public static function all() {
        return User::all();
    }

    public static function findByRole($role) {
        return User::whereHas('roles', function ($query) use ($role) {
            $query->where('slug', $role);
        })->get();
    }

    public static function find($id) {
        return User::find($id);
    }

    public static function findByEmail($email){
        return User::where('email', $email)->first();
    }

    public function forgotPassword($user){
        // Generate a new remember token
        $user->update(['remember_token' => Str::random(30)]);

        // Send the password reset email
        $user->sendPasswordResetNotification($user->remember_token);

        // return redirect()->back()->with('success', 'Please check your email and reset your password');
        return true;
    }

    public function updatePassword($user, $password){
        $user->password = Hash::make($password);
        $user->remember_token = Str::random(30);
        return $user->save();
    }
    
}
