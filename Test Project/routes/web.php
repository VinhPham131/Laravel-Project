<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('v1')->group(function () {
    Route::apiResource('categories', \App\Http\Controllers\CategoryController::class);
    Route::apiResource('products', \App\Http\Controllers\ProductController::class);
});

use App\Http\Controllers\API\CategoryController;
Route::get('/categories', [CategoryController::class, 'index']);

use App\Http\Controllers\API\ProductController;
Route::get('/products', [ProductController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');