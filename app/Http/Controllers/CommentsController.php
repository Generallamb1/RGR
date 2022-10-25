<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCommentRequest;
use App\Models\comments;

class CommentsController extends Controller
{
    public function addCommentsForPosst(StoreCommentRequest $request)
    { 
        //StoreCommentRequest $request
        $data = $request->validated();  
        $comment = new comments();        
        $comment->body = $data['body'];
        $comment->on_post = $data['on_post'];
        $comment->from_user = $data['from_user'];
        $comment->save();
        return redirect()->route('posts.show', $data['on_post']);             
    }
}
