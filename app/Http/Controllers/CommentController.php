<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function postCreate(Request $request, $id) {
    	$comment = new Comment;
    	$comment->author = $request->author;
    	$comment->content = $request->content;
    	$comment->product_id = $id;
    	$comment->save();
    	return back();
    }
}
