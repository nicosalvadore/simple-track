<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\ItemService;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public static function index()
    {
        $items = ItemService::all();
        return response()->json($items);
    }

    public static function store(Request $request)
    {
        ItemService::store($request);
        return response('created', 201);
    }
}
