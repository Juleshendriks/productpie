<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class ItemService
{
    public function store(array $data): Item
    {
        $data['user_id'] = Auth::id();
        return Item::create($data);
    }

    public function update(array $data, Item $item): Item
    {
        $item->update($data);
        return $item;
    }

    public function destroy(Item $item): bool
    {
        return $item->delete();
    }

}
