<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMealRequest;
use App\Http\Requests\UpdateMealRequest;
use App\Models\Meal;
use App\Repositories\MealRepositoryInterface;

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('Meal.show');
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
    public function update(UpdateMealRequest $request, Meal $Meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meal $Meal)
    {
        //
    }
}
