<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;





class Login extends Controller
{

    public function getLogin(){
        return view('login.login');
    }

    public function users(){

    }

    public function postLogin(Request $request){
        $usersts = DB::table('users')->get();
        dd($usersts);
        $users = [
            'MSNV' => $request->MSNV,
            'password' => $request->password,

        ];
        // dd(Auth::attempt($users));
        if (Auth::attempt($users)) {
            return redirect()->route('dashBoard.Get');
        } else {
            dd('tài khoản và mật khẩu chưa chính xác');
            //...code tùy chọn
            //đăng nhập thất bại hiển thị đăng nhập thất bại
        }
        // dd($users);
    }
}

