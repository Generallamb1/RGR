<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\subscribe;

class UserController extends Controller
{
    public function myUser(Request $request)
    {
        $myUserId = $request->user()->id;        
        return redirect()->route('users.user', $myUserId);
    }
    public function getUser(Request $request, User $user)
    {  
        $myUserId = $request->user()->id;
        $viewUserId = $user->id;
        $thereSubscription = subscribe::thereSubscription($myUserId, $viewUserId);
        $boxSubscription = [
            'thereSubscription' => $thereSubscription,
            'myUserId' => $myUserId,
            'viewUserId' => $viewUserId
        ];
        return view('users.user', [
            'boxSubscription' => $boxSubscription,
            'User' => $user,            
        ]);
    }

}
