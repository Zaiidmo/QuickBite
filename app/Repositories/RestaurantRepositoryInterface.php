<?php

namespace App\Repositories;

use App\Models\Restaurant;

interface RestaurantRepositoryInterface
{
    public static function all();

    public static function findByOwner($id);
    
    public function findById($id);

    public function create($data);

    public function kill(Restaurant $restaurant);

    public function edit(Restaurant $restaurant, $data);

}