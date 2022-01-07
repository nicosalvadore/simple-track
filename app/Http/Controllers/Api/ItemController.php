<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\ItemService;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public static function index($owner)
    {
        $items = ItemService::all($owner);
        return response()->json($items);
    }

    public static function store($owner, Request $request)
    {
        ItemService::store($owner, $request);
        return response('created', 201);
    }
}
