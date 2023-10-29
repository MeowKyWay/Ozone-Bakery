<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function getImage($image)
{
    $path = public_path('image/product/' . $image);

    if (file_exists($path)) {
        return response()->file($path);
    } else {
        return response()->json(['error' => 'Image not found'], 404);
    }
}
}
