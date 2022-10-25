<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $guarded = false;

    public static function getDataForViewPost($id)
    {
        $result = DB::table('posts')            
            ->leftJoin('users', 'users.id', '=', 'posts.author_id')
            ->select('posts.id AS postId', 'posts.title', 'posts.body',
            'posts.created_at', 'users.name', 'users.email', 'users.id as userId')
            ->where('posts.id', '=', $id)
            ->get();  

        return $result[0];
    }
    public static function allPosts()
    {  
        $result = DB::table('posts')            
            ->leftJoin('users', 'users.id', '=', 'posts.author_id')
            ->select('posts.id AS postId', 'posts.title',
            'posts.created_at', 'users.name', 'users.email', 'users.id as userId')
            ->where('posts.active', '>', 0)->orderBy('posts.updated_at', 'DESC');       
        return $result;
    }
    public static function myPosts($userId)
    {   
        $result = DB::table('posts')            
            ->leftJoin('users', 'users.id', '=', 'posts.author_id')
            ->select('posts.id AS postId', 'posts.title',
            'posts.created_at', 'users.name', 'users.email', 'users.id as userId')
            ->where('posts.active', '>', 0)
            ->where('posts.author_id', '=', $userId)
            ->orderBy('posts.updated_at', 'DESC');       
        return $result;             
    }

    public static function getPostsSubscribe($userId)
    {
        $result = DB::table('subscribes')
            ->leftJoin('posts', 'subscribes.author_id', '=', 'posts.author_id')
            ->leftJoin('users', 'subscribes.user_id', '=', 'users.id')
            ->select(
                'posts.id AS postId',
                'posts.title',
                'posts.body',
                'posts.body',
                'posts.created_at',
                'users.name',
                'users.email',
                'users.id as userId'
            )
            ->where('subscribes.user_id', '=', $userId)
            ->orderBy('posts.updated_at', 'DESC')
            ->paginate(5);

        return $result;
    }

}
