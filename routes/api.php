<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//login api
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

//products api
Route::apiResource('api-products', App\Http\Controllers\Api\ProductController::class)->middleware('auth:sanctum');

//categories api
Route::apiResource('api-categories', App\Http\Controllers\Api\CategoryController::class)->middleware('auth:sanctum');
