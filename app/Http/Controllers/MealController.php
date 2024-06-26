<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMealRequest;
use App\Http\Requests\UpdateMealRequest;
use App\Models\Category;
use App\Models\Meal;
use App\Repositories\MealRepositoryInterface;
use App\Repositories\RestaurantRepository;
use Illuminate\Http\Request ;

class MealController extends Controller
{
    protected $mealRepository;

    public function __construct(MealRepositoryInterface $mealRepository)
    {
        $this->middleware('auth')->except('index', 'show');
        $this->mealRepository = $mealRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meals = $this->mealRepository->all();
        return view('meals.index', [ 'meals' => $meals]);
    }

    public function dashboard()
    {
        $user = auth()->user();
        $meals = $this->mealRepository->all();
        $restaurants = RestaurantRepository::all();
        $categories = Category::all();
        $ownedRestaurants = RestaurantRepository::findByOwner($user->id);
        $ownedMeals = $this->mealRepository->findByOwner($user->id);
        return view('Admin.meals', compact('meals', 'ownedMeals', 'restaurants', 'ownedRestaurants', 'categories'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMealRequest $request)
    {
        $user = $request->user();
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->image->storeAs('public/uploads/meals', $fileName);
            $data['image'] = $fileName;
        }        

        if ($user->hasRole('super-admin') || $user->hasRole('admin') || $user->hasRole('restaurant-owner') || $user->can('create-meal')) {
            $data['user_id'] = $user->id;

            $restaurant = $this->mealRepository->create($data);

            if ($restaurant) {
                return back()->with('success', 'Meal Has Been Created Successfully !');
            }
            // return back()->with('error', 'Failed To Create Restaurant !');

        } 
        return back()->with('error', 'You Are Not Authorized To Create Meals !');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $meal = $this->mealRepository->findById($id);
        $relatedItems = $this->mealRepository->findRelated($meal->restaurant_id, $meal->category_id);
        $restaurants = $relatedItems['restaurantMeals'];
        $category = $relatedItems['categoryMeals'];
        return view('meals.show',  compact('meal', 'restaurants', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meal $Meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMealRequest $request, Meal $meal)
    {
        $user = $request->user();
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->image->storeAs('public/uploads/meals', $fileName);
            $data['image'] = $fileName;
        }

        if($user->hasRole('super-admin') || $user->hasRole('admin') || $user->hasRole('restaurant-owner') || $user->can('update-meal')) {
            if($meal->user_id !== $user->id) {
                return back()->with('error', 'Unauthorized access 1');
            }
            
            $meal = $this->mealRepository->edit($meal, $data);
            return back()->with('success', 'Restaurant Has Been Updated Successfully !');
        }
        return back()->with('error', 'Unauthorized access 2');
        
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request ,Meal $meal)
    {
        $user = $request->user();
        if ($user->hasRole('super-admin') || $user->hasRole('admin') || $user->hasRole('restaurant-owner') || $user->can('delete-meal')) {
            if ($meal->user_id === $user->id || $user->hasRole('super-admin')) {
                $meal = $this->mealRepository->kill($meal);
                return back()->with('success', 'Meal Has Been Deleted Successfully !');
            } else {
                return back()->with('error', 'Unauthorized access');
            }
        }
        return back()->with('error', 'Unauthorized access');
    }
}
