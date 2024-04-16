<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->categoryRepository->all();
        return view('Admin.categories', compact('categories'));
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
    public function store(StoreCategoryRequest $request)
    {
        $user = $request->user();
        $data = $request->validated();

        $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
        $request->image->storeAs('public/uploads/categories', $fileName);
        $data['image'] = $fileName;

        if ($user->hasRole('super-admin') || $user->hasRole('admin') || $user->hasRole('restaurant-owner') || $user->can('create-category')) {
            $category = $this->categoryRepository->create($data);
            if ($category) {
                return redirect()->back()->with('success', 'Category created successfully.');
            } else {
                return redirect()->back()->with('error', 'There were an error creating the category, please try again later');
            }
        } else {
            return redirect()->back()->with('error', 'You are not authorized to create a category.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $user = $request->user();
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->image->storeAs('public/uploads/categories', $fileName);
            $data['image'] = $fileName;
        } else {
            $data['image'] = $category->image;
        }

        if ($user->hasRole('super-admin') || $user->hasRole('admin') || $user->hasRole('restaurant-owner') || $user->can('update-category')) {
            $category = $this->categoryRepository->update($category, $data);
            // dd($category, $data)
            if ($category) {
                return redirect()->back()->with('success', 'Category updated successfully.');
            } else {
                return redirect()->back()->with('error', 'There were an error updating the category, please try again later');
            }
        } else {
            return redirect()->back()->with('error', 'You are not authorized to create a category.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $this->categoryRepository->kill($category);
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }
}
