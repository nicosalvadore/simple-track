<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Services\TransactionService;

class StatController extends Controller
{
    public static function show($item)
    {
        $transactions = TransactionService::allForItem($item);
        return view('stats.show', ['transactions' => $transactions]);
    }
}
