<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Item;

class TransactionService
{
    public static function allForItem($item_id)
    {
        $transactions = Transaction::where('item_id', $item_id)->get();
        return $transactions;
    }

    public static function allForItemSince($item_id, $since)
    {
        $transactions = Transaction::where('item_id', $item_id)->where('created_at', '>=', $since);
        return $transactions;
    }

    public static function store(Request $request)
    {
        $item = Item::find($request->item_id);

        $transaction = new Transaction();
        $transaction->quantity = $request->quantity;
        $transaction->item_id = $request->item_id;
        $transaction->save();

    }
}