<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::get();
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function store(Request $request)
    {
        $request->validate ([
            'name' => 'required|string|min:3',
            'price' => 'required|integer|min:0',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string'
        ]);

        $product = new Product();

        $product->name = $request->get('name');
        $product->amount = $request->get('price');
        $product->image_path = $request->get('image_path');

        $product->save();
        $product->refresh();
        return $product;
    }

    public function update(Request $request, Product $product)
    {
        $request->validate ([
            'name' => 'nullable|string|min:3',
            'price' => 'nullable|integer|min:0',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->has('name')) $product->name = $request->get('name');
        if ($request->has('price')) $product->amount = $request->get('price');
        if ($request->has('image_path')) $product->image_path = $request->get('image_path');
        $product->save();
        $product->refresh();
        return $product;
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return ["message" => "delete successfully"];
    }
}
