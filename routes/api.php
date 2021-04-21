<?php

use App\Http\Controllers\TransaksiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// bila route berbeda nama
Route::get('/transaksi', [TransaksiController::class, 'index' ]);
Route::post('/transaksi', [TransaksiController::class, 'store' ]);
Route::get('/transaksi/{id}', [TransaksiController::class, 'show']);
Route::put('/transaksi/{id}', [TransaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy']);
// untuk route semua
// Route::resource('/transaksi ', TransaksiController::class)->except(['create','edit']);