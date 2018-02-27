<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show(Message $message){
    	// Uso la función FIND del modelo Message
    	//$message = Message::find($id);

    	//Siempre que en la VIEW pongamos un punto (.)
    	//messages(.)show, significar que "messages es una carpeta" (punto) función
    	return view('messages.show', ['message' => $message]);

    }

    public function create(CreateMEssageRequest $request){

        $user = $request->user();
    	
        $message = Message::create([
            'user_id' => $user->id,
    		'content' => $request->input('message'),
    		'image' => 'https://picsum.photos/600/338?image=6'.mt_rand(0,100)
    	]);

    	return redirect('/messages/'.$message->id);
    }
}
