<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Services\TransactionService;

class StatService
{
    public static function get($item)
    {
        Transaction::where('item_id', $item);
    }
}