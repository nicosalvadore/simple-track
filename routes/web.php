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

Route::get('/', [HomeController::class, 'home']);
Route::post('/', [HomeController::class, 'go']);

Route::get('/{owner}', [ItemController::class, 'index']);
Route::get('/{owner}/items', [ItemController::class, 'index']);
Route::get('/{owner}/items/create', [ItemController::class, 'create']);
Route::post('/{owner}/items', [ItemController::class, 'store']);

Route::post('/{owner}/transactions', [TransactionController::class, 'store']);

Route::get('/{owner}/items/{item}/stats', [StatController::class, 'show']);