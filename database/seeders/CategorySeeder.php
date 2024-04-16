<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Fast Food', 'image' => 'fast_food.jpg'],
            ['name' => 'Italian Cuisine', 'image' => 'italian_cuisine.jpg'],
            ['name' => 'Asian Fusion', 'image' => 'asian_fusion.jpg'],
            ['name' => 'Vegetarian/Vegan', 'image' => 'vegetarian_vegan.jpg'],
            ['name' => 'Seafood', 'image' => 'seafood.jpg'],
            ['name' => 'Mexican Cuisine', 'image' => 'mexican_cuisine.jpg'],
            ['name' => 'Desserts & Sweets', 'image' => 'desserts_sweets.jpg'],
            ['name' => 'Barbecue & Grilling', 'image' => 'barbecue_grilling.jpg'],
            ['name' => 'Breakfast & Brunch', 'image' => 'breakfast_brunch.jpg'],
            ['name' => 'Healthy Eating', 'image' => 'healthy_eating.jpg'],
        ];

         // Insert data into the categories table
         foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
