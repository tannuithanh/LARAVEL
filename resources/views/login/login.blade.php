<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Đăng nhập | Kế hoạch điện tử</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favico.ico')}}">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->

    </head>

    <body class="bg-pattern">
        <div class="bg-overlay"></div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="">
                                    <div class="text-center">
                                        <a href="index.html" class="">
                                            <img src="{{asset('assets/images/logoreset.png')}}" alt="" height="24" class="auth-logo logo-dark mx-auto">
                                            <img src="" alt="" height="24" class="auth-logo logo-light mx-auto">
                                        </a>
                                    </div>
                                    <!-- end row -->
                                    <h4 class="font-size-18 text-muted mt-2 text-center">Chào mừng bạn !</h4>
                                    <p class="mb-5 text-center">Đăng nhập để tiếp tục với Kế Hoạch Điện Tử.</p>
                                    <form class="form-horizontal" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label" for="username">Nhập mã số nhân viên</label>
                                                    <input type="text" class="form-control" id="username" name="MSNV" placeholder="Nhập mã số nhân viên">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="userpassword">Mật khẩu</label>
                                                    <input type="password" class="form-control" id="userpassword" name="password"  placeholder="Nhập mật khẩu">
                                                </div>
                                                    <div class="d-grid mt-4">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Đăng nhập</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p class="text-white-50">Bạn quên mật khẩu ? <a href="{{ route('forgotPass.Get') }}" class="fw-medium text-primary"> Lấy lại mật khẩu </a> </p>
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> Kế hoạch điện tử <i style="color:rgb(5, 9, 247)"><i class="mdi mdi-car"></i></i> R&D Ô Tô</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html>
