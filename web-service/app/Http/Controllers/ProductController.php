<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(["status" => 200, "success" => true, "products" => $products], 200);
    }

    public function get_product($id)
    {
        $product = Product::findORFail($id);
        return response()->json(["status" => 200, "success" => true, "product" => $product], 200);
    }

    public function get_feature()
    {
        $featured = Product::where('isFeatured', '1')->get();
        return response()->json(["status" => 200, "success" => true, "featured" => $featured], 200);
    }

    public function edit_product(Request $request, $id)
    {
        $product = Product::findORFail($id);
        $product->title = $request->title;
        $product->content = $request->content;
        $product->image_url = $request->image;
        $product->price = $request->price;
        $product->score = $request->score;
        $product->isFeatured = $request->isFeatured;
        $product->save();

        return response()->json(["status" => 200, "success" => true, "message" => "Editing Product Done"], 200);
    }

    public function add_product(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->content = $request->content;
        $product->image_url = $request->image;
        $product->price = $request->price;
        $product->score = $request->score;
        $product->isFeatured = $request->isFeatured;
        $product->save();

        return response()->json(["status" => 201, "success" => true, "message" => "Adding Product Done"], 201);
    }

    public function delete_product($id)
    {
        $product = Product::where('id', $id)->first();
        $comments = Comment::where('product_id', $id);

        $product->delete();
        $comments->delete();

        return response()->json(["status" => 202, "success" => true, "message" => "Deleting Product Done"], 202);
    }
}
