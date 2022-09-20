<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json([
            'products' => Product::all()
        ]);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json([
            'products' => $product
        ], 201);
    }

    public function show(Product $product)
    {
        return response()->json([
            'products' => $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return response()->json([
            'products' => $product
        ], 200);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }
}
