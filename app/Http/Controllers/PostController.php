<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\comments;

class PostController extends Controller
{
    public function allPosts()
    {
        return view('posts.allPosts', [
            "blogRecords" => posts::allPosts()->paginate(5)
        ]);
    }
    public function myPosts(Request $request)
    {
        $userId = $request->user()->id;
        return view('posts.allPosts', [
            "blogRecords" => posts::myPosts($userId)->paginate(5)
        ]);
    }
    public function show(posts $post, Request $request)
    {
        $idPost = $post->id;
        $comments = comments::getComentsForPost($idPost)->all();
        $result = posts::getDataForViewPost($idPost);
        $myUserId = $request->user()->id;
        if ($request->user()->email == $result->email) {
            return view('posts.postAndEdit', [
                "Post" => $result,
                "comments" => $comments,
                "myUserId" => $myUserId,
            ]);
        } else {
            return view('posts.post', [
                "Post" => $result,
                "comments" => $comments,
                "myUserId" => $myUserId,
            ]);
        }
    }
    public function create()
    {
        return view('posts.postCreate');
    }
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        $post = new posts();
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->active = 127;
        $post->author_id = $request->user()->id;
        $post->save();
        return redirect()->route('posts.allPosts');
    }
    public function edit(UpdatePostRequest $request, posts $post)
    {
        $data = $request->validated();
        $post->update($data);
        return redirect()->route('posts.allPosts');
    }
    public function delite(posts $post)
    {
        $post->active = 0;
        $post->update();
        return redirect()->route('posts.allPosts');
    }
}
