<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(){
    	// Message -> es el nombre de la tabla en singular. Laravel aumenta la S
    	// Si la tabla tiene un nombre con 2 palabras, en Laravel sería MessageType
    	// En la base de datos, el nombre de la tabla debería ser: message_types
    	// La función "all", devuelve todos los métodos de ese modelo.
    	$messages = Message::latest()->paginate(10);

    	//dd($messages);

    	return view('welcome', ['messages' => $messages]);
    }
}
