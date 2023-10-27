<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;

class CartController extends Controller
{
    public function index(Request $request): view
    {
        return view('layouts.cart.index', [
            'user' => $request->user(),
        ]);
    }
}