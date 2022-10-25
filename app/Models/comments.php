<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class comments extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $guarded = false;

    public static function getComentsForPost($idPost)
    {
        $result = DB::table('comments')                        
            ->where('on_post', '=', $idPost)
            ->leftJoin('users', 'users.id', '=', 'comments.from_user')
            ->select('comments.body', 'comments.from_user', 'comments.on_post','users.name')
            ->get();  

        return $result;
    }
}
