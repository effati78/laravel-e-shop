<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store($id, Request $request) {
        $comment = new Comment();
        $comment->product_id = $id;
        $comment->sender_name = $request->name;
        $comment->sender_email = $request->email;
        $comment->sender_avatar = $request->avatar;
        $comment->score = $request->score;
        $comment->comment = $request->comment;
        $comment->save();

        return response()->json(['message' => 'Comment is added successfully.'], 200);
    }

    public function index($id)
    {
        $comment = Comment::where('product_id', $id)->get();
        return response()->json(['message' => ['comments' => $comment]], 200);
    }
}
