<?php

namespace App\Http\Controllers;

use App\User;
use App\Events\EventChat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function chat()
    {
        return view('chat');
    }

    // public function send()
    // {
    //     $user = User::find(auth()->user()->id);
    //     event(new EventChat($user, request()->message));
    // }

    public function send()
    {
        $msg = "Hey";
        $user = User::find(auth()->user()->id);
        event(new EventChat($user, $msg));
    }
}
