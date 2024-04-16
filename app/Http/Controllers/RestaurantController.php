<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use App\Models\Restaurant;
use App\Repositories\MealRepository;
use App\Repositories\RestaurantRepositoryInterface;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    protected $restaurantRepository;

    public function __construct(RestaurantRepositoryInterface $restaurantRepository)
    {
        $this->middleware('auth')->except(['index', 'show']);
        $this->restaurantRepository = $restaurantRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $user = auth()->user();
        $restaurants = $this->restaurantRepository->all();
        $ownedRestaurants = $this->restaurantRepository->findByOwner(auth()->user()->id);
        return view('Admin.restaurants', compact('restaurants', 'ownedRestaurants'));
    }

    public function index()
    {
        return view('restaurants.index', [
            'restaurants' => Restaurant::all(),
        ]);
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
    public function store(StoreRestaurantRequest $request)
    {
        $user = $request->user();
        $data = $request->validated();

        if ($data['email'] === null) {
            $data['email'] = $user->email;
        }

        if ($request->hasFile('cover')) {
            $fileName = time() . '_' . $request->file('cover')->getClientOriginalName();
            $request->cover->storeAs('public/uploads/restaurants', $fileName);
            $data['cover'] = $fileName;
        }
        

        if ($user->hasRole('super-admin') || $user->hasRole('admin') || $user->hasRole('restaurant-owner') || $user->can('create-restaurant')) {
            $data['user_id'] = $user->id;

            $restaurant = $this->restaurantRepository->create($data);

            if ($restaurant) {
                return back()->with('success', 'Restaurant Has Been Created Successfully !');
            }

            // return back()->with('error', 'Failed To Create Restaurant !');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $meals = $this->restaurantRepository->menu($id);
        $restaurant = $this->restaurantRepository->findById($id);
        if ($restaurant) {
            return view('restaurants.show', compact('restaurant', 'meals'));
        }
        return back()->with('error', 'Restaurant Not Found !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        $user = $request->user();
        $data = $request->validated();

        if ($request->hasFile('cover')) {
            $fileName = time() . '_' . $request->file('cover')->getClientOriginalName();
            $request->cover->storeAs('public/uploads/restaurants', $fileName);
            $data['cover'] = $fileName;
        }

        if($user->hasRole('super-admin') || $user->hasRole('admin') || $user->hasRole('restaurant-owner') || $user->can('update-restaurant')) {
            if($restaurant->user_id !== $user->id) {
                return back()->with('error', 'Unauthorized access');
            }
            
            $restaurant = $this->restaurantRepository->edit($restaurant, $data);
            return back()->with('success', 'Restaurant Has Been Updated Successfully !');
        }
        return back()->with('error', 'Unauthorized access');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Restaurant $restaurant)
    {
        $user = $request->user();
        if ($user->hasRole('super-admin') || $user->hasRole('admin') || $user->hasRole('restaurant-owner') || $user->can('delete-restaurant')) {
            if ($restaurant->user_id === $user->id || $user->hasRole('super-admin')) {
                $restaurant = $this->restaurantRepository->kill($restaurant);
                return back()->with('success', 'Restaurant Has Been Deleted Successfully !');
            } else {
                return back()->with('error', 'Unauthorized access');
            }
        }
        return back()->with('error', 'Unauthorized access');
    }
}
