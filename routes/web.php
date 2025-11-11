<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
=======
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);

Route::view('/products', 'add-products');
Route::post('/products/create', [ProductsController::class, 'create']);
Route::get('/products/flush', [ProductsController::class, 'flush']);
>>>>>>> 8266db9b9b3e89b6ff8a9ca33b000eff4764f954
