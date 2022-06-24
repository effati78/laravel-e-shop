<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return response()->json(['message' => ['products' => $products]], 200);
    }

    public function get_product($id) {
        $product = Product::findORFail($id);
        return response()->json(['message' => ['products' => $product]], 200);
    }

    public function get_feature(){
        $featured = Product::where('isFeatured', '1')->get();
        return response()->json(['message' => ['featured' => $featured]], 200);
    }
}
