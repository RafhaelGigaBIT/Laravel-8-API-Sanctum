<?php

use App\Http\Controllers\ProductController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Public Routes
// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{name}', [ProductController::class, 'show']);
Route::get('/products/search/{name}', [ProductController::class, 'search']);

//Private Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{}', [ProductController::class, 'destroy']);
});

Route::middleware('auth:api')->get('/user', function(Request $request) {
    return $request -> user();
});
