<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Quên mật khẩu | Kế hoạch điện tử</title>
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
                                        <a href="" class="">
                                            <img src="{{asset('assets/images/logoreset.png')}}" alt="" height="24" class="auth-logo logo-dark mx-auto">
                                            <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="24" class="auth-logo logo-light mx-auto">
                                        </a>
                                    </div>
                                    <!-- end row -->
                                    <h4 class="font-size-18 text-muted mt-2 text-center">Đặt lại mật khẩu</h4>
                                    <p class="mb-5 text-center">Đặt lại mật khẩu của bạn với kế hoạch điện tử.</p>
                                    <form class="form-horizontal" action="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-warning alert-dismissible">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    Nhập <b>Email</b> của bạn để được cấp lại mật khẩu!
                                                </div>

                                                <div class="mt-4">
                                                    <label class="form-label" for="useremail">Email</label>
                                                    <input type="email" class="form-control" id="useremail" placeholder="Nhập email">
                                                </div>
                                                <div class="d-grid mt-4">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Gởi mail</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p class="text-white-50">quay về đăng nhập<a href="{{ route('login.Get') }}" class="fw-medium text-primary"> Đăng nhập </a> </p>
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
