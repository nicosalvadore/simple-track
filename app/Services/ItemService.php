<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class ItemService
{
    public static function all()
    {
        $items = Item::where('user_id', Auth::id())->get();
        return $items;
    }

    public static function store(Request $request)
    {
        $item = new Item();
        $item->name = $request->name;
        $item->unit = $request->unit;
        $item->default_quantity = $request->default_quantity;
        $item->user_id = Auth::id();
        $item->save();
    }

    public static function allWithTransactions()
    {
        $itemsQuantity = array();

        $items = self::all();
        foreach($items as $item) {
            $sum = $item->transactions->sum('quantity');
            $itemsQuantity[] = ["item" => $item, "sum" => $sum];
        }
        return $itemsQuantity;
    }
}