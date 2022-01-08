<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', [ItemController::class, 'index']);
    Route::get('/items', [ItemController::class, 'index']);
    Route::get('/items/create', [ItemController::class, 'create']);
    Route::post('/items', [ItemController::class, 'store']);

    Route::post('transactions', [TransactionController::class, 'store']);

    Route::get('/items/{item}/stats', [StatController::class, 'show']);
});


