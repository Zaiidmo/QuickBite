<?php

namespace App\Repositories;

use App\Models\Meal;
use App\Models\Restaurant;

interface MealRepositoryInterface
{
    public function all();
    
    public function findById($id);
    
    public function findByOwner($id);
    public function create($data);

    public function kill(Meal $meal);

    // public function edit(Restaurant $restaurant, $data);

}