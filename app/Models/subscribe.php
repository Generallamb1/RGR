<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class subscribe extends Model
{
    use HasFactory;
    protected $table = 'subscribes';
    protected $guarded = false;
 
    public static function thereSubscription($myUserId, $authorId)
    {
        $thereSubscribes = DB::table('subscribes')
            ->select('subscribes.id AS subscribesId')
            ->where('subscribes.user_id', '=', $myUserId)
            ->where('subscribes.author_id', '=', $authorId)
            ->get();

        if ($thereSubscribes->count() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public static function makeSubscription($myUserId, $authorId)
    {
        $thereSubscription = subscribe::thereSubscription($myUserId, $authorId);
        if ($thereSubscription == false) {
            $subscribe = new subscribe();
            $subscribe->user_id = $myUserId;
            $subscribe->author_id = $authorId;            
            $subscribe->save(); 
        } else {
            subscribe::where('subscribes.user_id', '=', $myUserId)
            ->where('subscribes.author_id', '=', $authorId)
            ->delete();    
        }
    }
}
