<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductsController extends Controller
{
    public function create(CreateProductRequest $request)
    {
        Products::create($request->validated());
        Cache::forget('allProducts');

        return redirect()->back()->with('success', 'Product created!');
    }
    public function flush()
    {
        Cache::forget('allProducts');
        return redirect('/')->with('success', 'Cache cleared!');
    }
}
