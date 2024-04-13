<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    // public function all();

    // public function find($id);

    public function create(array $data);

    public function connect(array $data);
    public function disconnect();

    // public function update(array $data, $id);

    // public function delete($id);
}