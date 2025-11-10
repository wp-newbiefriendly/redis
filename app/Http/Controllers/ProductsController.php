<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create(CreateProductRequest $request)
    {
        Products::create($request->validated());

        return redirect()->back()->with('success', 'Product created!');
    }
}
