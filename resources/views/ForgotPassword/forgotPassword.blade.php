<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>THACO AUTO</title>
        <meta charset="UTF-8">
        <title>THACO AUTO</title>
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <link href="{{asset('assets/css/login.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="{{asset('assets/images/favico.ico')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">

        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/Style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert2.css')}}">
        <link href="{{asset('css/login.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    </head>
    <body  class="container bg-thaco" data-spy="scroll" data-target=".navbar" data-offset="50">
    <form method="POST">
        @csrf
    <div style="text-align: center;color:#033E8C; font-weight: bold; font-size: 40px">R&D Ô TÔ</div>
    <div style=" text-align: center;color:#DC143C; font-weight: bold; font-size: 30px">PHẦN MỀM KẾ HOẠCH ĐIỆN TỬ</div>
    <hr>
    <div id="formchangepass" style="width: max-content;
        display: none;
        z-index: 1;
        position: fixed;
        margin: auto;
        font-family: Tahoma;
        background-color: rgba(0, 0, 0, 0.4);
        right: 0;
        left: 0;">
    <div>
      </div>
    </div>
    </div>
    </div>

    <div id="loginmain" style="background-color: rgba(255, 255, 255, 0.523);padding: 10px; text-align:center">
        <div id ="loginmain1" class="col-12">
            <div class="input-group flex-nowrap mb-2" style="align-items: baseline">
                <i class="fa fa-user mr-1" aria-hidden="true" style="width: 20px"></i>
                <h6 class="font-weight-bold mr-2" style="color:#033E8C; width: 100px">Mail:</h6>
                <input id="username" name="MSNV" type="text" class="form-control" placeholder="Nhập tên mail" aria-label="Tài khoản" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap mb-2" style="align-items: baseline">
                <div style="width: 120px" class="mr-3"></div>
                <button id="login" name="login" class="btn btn-success" type="submit">gởi</button>
                <a href="{{ route('login.Get') }}" class="btn btn-link" style="font-size:15px;color:#033E8C;font-style: italic;">Quay về đăng nhập</a>
            </div>
        </div>
    </div>

    </form>


    </body>
        <nav class="fixed-bottom" style="height: 50px;background-color:#033E8C; text-align: center">

            <h6 style="margin-top: 20px;font-weight: bold; color:#FFFFFF">2022 @ Phát triển bởi: Nhóm CNTT R&D Ô TÔ</h6>
        </nav>
    </html>
