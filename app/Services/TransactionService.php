<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Item;

class TransactionService
{
    public static function allForItem($owner, $item_id)
    {
        $item = Item::find($item_id);
        if($item->owner == $owner) {
            return $item->transactions;
        } else {
            return abort(401);
        }
    }

    public static function store($owner, Request $request)
    {
        $item = Item::find($request->item_id);
        if($item->owner == $owner) {
            $transaction = new Transaction();
            $transaction->quantity = $request->quantity;
            $transaction->item_id = $request->item_id;
            $transaction->save();
        } else {
            return abort(401);
        }


    }
}