<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public static function store(ProductStoreRequest $request)
    {
        $validated = $request->validated();

        $product = Product::create($validated);

        return response([
            'product' => $product
        ]);
    }

    public static function search()
    {
        
    }
}
