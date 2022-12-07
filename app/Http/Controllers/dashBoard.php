<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashBoard extends Controller
{
   
    public function dashBoard(){
        return view('dashboard');
    }
}
