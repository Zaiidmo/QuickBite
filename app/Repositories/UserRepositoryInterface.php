<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public static function all();

    public static function findByRole($role);
    
    public function create(array $data);

    public function connect(array $data);
    public function disconnect();

    // public function update(array $data, $id);

    // public function delete($id);

    public static function findByEmail($email);

    public function forgotPassword($user);

    public function updatePassword($user, $password);
}