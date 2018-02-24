<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function homepage(){
    	return view('welcome');
    }
    public function docentes(){
    	return view('docentes');
    }
}
