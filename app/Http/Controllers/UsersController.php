<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function notifications()
    {

    
        // auth()->user()->unreadNotification->markAsRead();
        auth()->user()->unreadNotifications->where('id', auth()->user()->id)->markAsRead();
        // auth()->user()->unreadNotifications->first()->markAsRead();
        
        return view('users.notifications',[

            'notifications'=>auth()->user()->notifications()->paginate(5)
        ]);
    }
}
