<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;


class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
    }

    public function show(Category $category)
    {
//        dd($category->load('items'));
        return view('categories.show', ['category' => $category->load('items')]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category]);
    }

    public function store(CreateCategoryRequest $request, CategoryService $categoryService)
    {
        $categoryService->store($request->validated());
        return redirect()->route('categories.index')->with('status', 'Category created');;
    }

    public function update(UpdateCategoryRequest $request, CategoryService $categoryService, Category $category)
    {
        $category = $categoryService->update($request->validated(), $category);
        return redirect()->route('categories.show', $category);
    }

    public function destroy(Category $category, CategoryService $categoryService)
    {
        $categoryService->destroy($category);
        return redirect()->route('categories.index')->with('status', 'Category deleted');
    }
}
