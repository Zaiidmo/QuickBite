<?php

namespace App\Repositories;


interface RestaurantRepositoryInterface
{
    public static function all();

    public static function findByOwner($id);

    public function create($data);
}