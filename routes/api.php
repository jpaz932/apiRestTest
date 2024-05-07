<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatrgoryController;
use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('movies', MovieController::class)->middleware('auth:sanctum');
Route::apiResource('categories', CatrgoryController::class)->middleware('auth:sanctum');

Route::post('login',[AuthController::class, 'login']);