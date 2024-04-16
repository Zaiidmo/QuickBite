<?php

namespace App\Repositories;

use App\Models\Meal;

interface MealRepositoryInterface
{
    public static function all();
    
    public function findById($id);
    
    public function findByOwner($id);

    public static function findByRestaurant($id);
    
    public function create($data);

    public function kill(Meal $meal);

    public function edit(Meal $meal, $data);

}