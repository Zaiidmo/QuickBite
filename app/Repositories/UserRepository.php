<?php 

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function create(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        $role = $data['user_type'];
        unset($data['user_type']);
        $user = User::create($data);
        if($user) {
            $user->roles()->attach($role);
            auth()->login($user);
            return true;
        } return false ;

    }
}