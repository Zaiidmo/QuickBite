<?php 

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function all()
    {
        return Category::all();
    }

    public function kill(Category $category)
    {
        return $category->delete();
    }

    public function create( $data)
    {
        return Category::create($data);
    }

    public function update(Category $category, $data)
    {
        return $category->update($data);
    }
}