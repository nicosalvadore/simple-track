<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ItemService;

class ItemController extends Controller
{
    public static function index($owner)
    {
        $items = ItemService::allWithTransactions($owner);
        return view('items.index', ['items' => $items, 'owner' => $owner]);
    }

    public static function create($owner)
    {
        return view('items.create', ['owner' => $owner]);
    }

    public static function store($owner, Request $request)
    {
        ItemService::store($owner, $request);
        return redirect('/'.$owner);
    }
}
