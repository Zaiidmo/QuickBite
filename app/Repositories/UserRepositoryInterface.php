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
}