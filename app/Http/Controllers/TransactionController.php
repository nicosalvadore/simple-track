<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TransactionService;

class TransactionController extends Controller
{
    public static function store(Request $request)
    {
        TransactionService::store($request);
        return redirect('/');
    }
}
