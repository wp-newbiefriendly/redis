<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;

Route::get('/',[HomeController::class,'index']);

Route::view('/products', 'add-products');
Route::post('/products/create', [ProductsController::class, 'create']);
Route::get('/products/flush', [ProductsController::class, 'flush'])->name('flush');
