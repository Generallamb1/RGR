<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subscribe;
use App\Models\posts;

class SubscribeController extends Controller
{
    public function mySubscribe(Request $request)
    {
        $userId = $request->user()->id;        
        return view('posts.allPosts', [
            "blogRecords" => posts::getPostsSubscribe($userId)
        ]);
    }
    public function makeSubscription(Request $request)
    {
        $user_id = $request->input('user_id');        
        $author_id = $request->input('author_id');
        subscribe::makeSubscription($user_id, $author_id);
        return redirect()->route('users.user',  $author_id);;
    }
}
