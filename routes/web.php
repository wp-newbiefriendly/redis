<?php

use App\Http\Controllers\ProductsController;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

//    $users = User::all();
//
//    dd(Cache::get('users'));

    return view('welcome');
});

    Route::view('/products', 'add-products');
    Route::post('/products/create', [ProductsController::class, 'create']);
