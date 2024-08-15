<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('v1')->group(function () {
    Route::apiResource('categories', \App\Http\Controllers\API\CategoryController::class);
    Route::apiResource('products', \App\Http\Controllers\API\ProductController::class);
});

