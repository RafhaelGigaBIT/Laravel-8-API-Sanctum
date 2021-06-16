<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Public Routes
// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);

Route::resource('products', ProductController::class);

//Private Routes

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
