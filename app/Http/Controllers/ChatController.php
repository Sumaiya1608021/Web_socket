<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Message;
class ChatController extends Controller
{
    public function loadChatView(){

        return view('chat');

    }
    public function broadcastMessage(Request $request){

       event(new Message($request->username,$request->message)) ;
    }
}
