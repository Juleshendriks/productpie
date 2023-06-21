<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryService
{
    public function store(array $data): Category
    {
        $data['user_id'] = Auth::id();
        return Category::create($data);
    }

    public function update(array $data, Category $category): Category
    {
        $category->update($data);
        return $category;
    }

    public function destroy(Category $category): bool
    {
        return $category->delete();
    }

}
