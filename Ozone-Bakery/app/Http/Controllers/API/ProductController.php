<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return $products;
        // $products = Product::get();

        // return view('layouts.products.index', [
        //     'products' => $products
        // ]);

    }

    public function show(Product $product)
    {
        return $product;
        
    }

    public function store(Request $request)
    {
        $request->validate ([
            'name' => 'required|string|min:3',
            'price' => 'required|integer|min:0'
        ]);

        $product = new Product();

        $product->name = $request->get('name');
        $product->amount = $request->get('price');

        $product->save();
        $product->refresh();
        return $product;
    }

    public function update(Request $request, Product $product)
    {
        $request->validate ([
            'name' => 'nullable|string|min:3',
            'price' => 'nullable|integer|min:0'
        ]);

        if ($request->has('name')) $product->name = $request->get('name');
        if ($request->has('price')) $product->amount = $request->get('price');

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
