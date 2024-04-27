<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use App\Repositories\MealRepository;
use App\Repositories\RestaurantRepository;
use App\Repositories\TestimonialRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        $tastyFood = MealRepository::tastyFood();
        $categories = CategoryRepository::getPopularCategories();
        $restaurants = RestaurantRepository::all();
        $testimonials = TestimonialRepository::approvedTestimonials();
        return view('welcome', compact('tastyFood', 'categories', 'restaurants', 'testimonials'));
    }
}
