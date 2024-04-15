<?php

namespace App\Repositories;

use App\Models\Restaurant;

interface MealRepositoryInterface
{
    public function all();
    
    public function findById($id);

    // public function create($data);

    // public function kill(Restaurant $restaurant);

    // public function edit(Restaurant $restaurant, $data);

}