<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\dashBoard;
use App\Http\Controllers\forgotPassword;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;

//ĐĂNG NHẬP
Route::get('/login',[Login::class,'getLogin'])->name('login.Get');
Route::post('/login',[Login::class,'postLogin'])->name('login.Post');

//Quên mật khẩu
Route::get('/forgotpass',[forgotPassword::class,'forgotPass'])->name('forgotPass.Get');

//Trang chủ
Route::get('/dashBoard',[dashBoard::class,'dashBoard'])->name('dashBoard.Get');

