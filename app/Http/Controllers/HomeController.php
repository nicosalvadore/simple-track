<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public static function home()
    {
        $owner = Str::lower(Str::random(6));
        return view('home',['owner' => $owner]);
    }

    public static function go(Request $request)
    {
        return redirect('/'.$request->owner);
    }
}
