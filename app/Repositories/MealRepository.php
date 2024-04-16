<?php

namespace App\Repositories;

use App\Models\Meal;

class MealRepository implements MealRepositoryInterface
{
    public static function all()
    {
        return Meal::all();
    }
    public function findById($id)
    {
        return Meal::find($id);
    }
    public function findByOwner($id)
    {
        return Meal::where('user_id', $id)->get();
    }

    public static function findByRestaurant($id){
        return Meal::where('restaurant_id', $id)->get();
    }
    
    public function create($data)
    {
        return Meal::create($data);
    }

    public function kill(Meal $meal)
    {

        return $meal->delete();
    }

    public function edit(Meal $meal, $data)
    {
        return $meal->update($data);
    }

    
}
