<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\ItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/{owner}', [DashboardController::class, 'show']);
Route::get('/{owner}/items', [ItemController::class, 'index']);
Route::get('/{owner}/items/create', [ItemController::class, 'create']);
Route::post('/{owner}/items', [ItemController::class, 'store']);
Route::post('/{owner}/transactions', [TransactionController::class, 'store']);
Route::get('/{owner}/transactions/{item_id}', [TransactionController::class, 'index']);