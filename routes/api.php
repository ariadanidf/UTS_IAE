<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\KamarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('pesan', [PemesananController::class,'index']);
Route::post('pesan', [PemesananController::class,'store']);
Route::get('pesan/{id}', [PemesananController::class,'show']);
Route::put('pesan/{id}', [PemesananController::class,'update']);
Route::delete('pesan/{id}', [PemesananController::class,'destroy']);

Route::get('kamar', [KamarController::class,'index']);
Route::get('kamar/{id}', [KamarController::class,'show']);