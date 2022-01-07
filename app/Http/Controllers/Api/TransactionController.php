<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\TransactionService;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public static function index($owner, $item_id)
    {
        $transactions = TransactionService::allForItem($owner, $item_id);
        return response()->json($transactions);
    }

    public static function store($owner, Request $request)
    {
        TransactionService::store($owner, $request);
        return response('created', 201);
    }
}
