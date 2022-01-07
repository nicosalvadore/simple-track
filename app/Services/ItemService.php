<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemService
{
    public static function all($owner)
    {
        $items = Item::where('owner', $owner)->get();
        return $items;
    }

    public static function store($owner, Request $request)
    {
        $item = new Item();
        $item->name = $request->name;
        $item->unit = $request->unit;
        $item->default_quantity = $request->default_quantity;
        $item->owner = $owner;
        $item->save();
    }

    public static function allWithTransactions($owner)
    {
        $itemsQuantity = array();

        $items = self::all($owner);
        foreach($items as $item) {
            $sum = $item->transactions->sum('quantity');

            // $quantity = 0;
            // foreach($transactions as $transaction) {
            //     $quantity += $transaction->quantity;
            // }

            $itemsQuantity[] = ["item" => $item, "sum" => $sum];
        }
        return $itemsQuantity;
    }
}