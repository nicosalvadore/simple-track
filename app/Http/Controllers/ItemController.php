<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ItemService;

class ItemController extends Controller
{
    public static function index()
    {
        $items = ItemService::allWithTransactions();
        return view('items.index', ['items' => $items]);
    }

    public static function create()
    {
        return view('items.create');
    }

    public static function store(Request $request)
    {
        ItemService::store($request);
        return redirect('/');
    }
}
