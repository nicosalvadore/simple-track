<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\TransactionService;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public static function index($item_id)
    {
        $transactions = TransactionService::allForItem($item_id);
        return response()->json($transactions);
    }

    public static function store(Request $request)
    {
        TransactionService::store($request);
        return response('created', 201);
    }
}
