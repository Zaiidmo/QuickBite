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
        unset($data['user_type']);
        $user = User::create($data);
        if($user) {
            $user->roles()->attach($role);
            dd('$user');
            // auth()->login($user);
            return true;
        } return false ;

    }
}