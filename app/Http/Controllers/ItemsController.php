<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Category;
use App\Models\Item;
use App\Services\ItemService;


class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', ['items' => $items]);
    }

    public function show(Item $item)
    {
        return view('items.show', ['item' => $item]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('items.create', ['categories' => $categories]);
    }

    public function edit(Item $item)
    {
        return view('items.edit', ['item' => $item]);
    }

    public function store(CreateItemRequest $request, ItemService $itemService)
    {
        $itemService->store($request->validated());
        return redirect()->route('items.index')->with('status', 'Item created');
    }

    public function update(UpdateItemRequest $request, ItemService $itemService, Item $item)
    {
        $item = $itemService->update($request->validated(), $item);
        return redirect()->route('items.show', $item);
    }

    public function destroy(Item $item, ItemService $itemService)
    {
        $itemService->destroy($item);
        return redirect()->route('items.index')->with('status', 'Item deleted');
    }
}
