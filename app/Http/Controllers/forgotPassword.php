<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgotPassword extends Controller
{
    public function forgotPass(){
        return view('ForgotPassword.forgotPassword');
    }
}
