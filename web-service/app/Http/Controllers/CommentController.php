<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function add_comment($id, Request $request)
    {
        $comment = new Comment();
        $comment->product_id = $id;
        $comment->sender_name = $request->name;
        $comment->sender_email = $request->email;
        $comment->sender_avatar = $request->avatar;
        $comment->score = $request->score;
        $comment->comment = $request->comment;
        $comment->save();

        return response()->json(["status" => 201, "success" => true, "message" => "Adding Comment Done"], 201);
    }

    public function index($id)
    {
        $comment = Comment::where('product_id', $id)->get();
        return response()->json(["status" => 200, "success" => true, "comments" => $comment], 200);
    }
}
