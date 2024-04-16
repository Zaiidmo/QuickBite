<?php 

namespace App\Repositories;

use App\Models\Category;

interface CategoryRepositoryInterface
{
    public function all();
    public function kill(Category $category);
    // public function find($id);
    public function create($data);

    public function update(Category $category, $data);
}