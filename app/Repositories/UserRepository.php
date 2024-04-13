<?php

namespace App\Repositories;

use App\Models\Role;
use App\Models\User;

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
    
}
