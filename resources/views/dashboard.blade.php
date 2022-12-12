
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Trang Chủ | THACO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" /> -->
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favico.ico')}}">

    <!-- jvectormap -->
    <link href="{{asset('assets/libs/jqvmap/jqvmap.min.css')}}" rel="stylesheet" />

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">
    <div class="right-bar">
        <div data-simplebar="init" class="h-100">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: -16.6667px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <div class="rightbar-title d-flex align-items-center px-3 py-4">

                                    <h5 class="m-0 me-2">Chế độ</h5>

                                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                                        <i class="mdi mdi-close noti-icon"></i>
                                    </a>
                                </div>

                                <!-- Settings -->
                                <hr class="mt-0">
                                <h6 class="text-center mb-0">Chọn bố cục</h6>

                                <div class="p-4">
                                    <div class="mb-2">
                                        <img src="assets/images/layouts/layout-1.png" class="img-thumbnail"
                                            alt="layout-1">
                                    </div>

                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input theme-choice" type="checkbox"
                                            id="light-mode-switch" checked="">
                                        <label class="form-check-label" for="light-mode-switch">Chế độ sáng</label>
                                    </div>

                                    <div class="mb-2">
                                        <img src="assets/images/layouts/layout-2.png" class="img-thumbnail"
                                            alt="layout-2">
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input theme-choice" type="checkbox"
                                            id="dark-mode-switch" data-bsstyle="assets/css/bootstrap-dark.min.css"
                                            data-appstyle="assets/css/app-dark.min.css">
                                        <label class="form-check-label" for="dark-mode-switch">Chế độ tối</label>
                                    </div>

                                    <div class="mb-2">
                                        <img src="assets/images/layouts/layout-3.png" class="img-thumbnail"
                                            alt="layout-3">
                                    </div>
                                    <div class="form-check form-switch mb-5">
                                        <input class="form-check-input theme-choice" type="checkbox"
                                            id="rtl-mode-switch" data-appstyle="assets/css/app-rtl.min.css">
                                        <label class="form-check-label" for="rtl-mode-switch">Chế độ RTL</label>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 850px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="transform: translate3d(0px, 0px, 0px); display: block; height: 118px;"></div>
            </div>
        </div> <!-- end slimscroll-menu-->
    </div>

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">

                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box text-center">
                        <a href="dashboard.php" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{asset('assets/images/logo-sm1.png')}}" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('assets/images/logo-dark1.png')}}" alt="logo-dark" height="35">
                            </span>
                        </a>

                        <a href="dashboard.php" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{asset('assets/images/logo-sm1.png')}}" alt="logo-sm-light" height="25">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('assets/images/logo-dark1.png')}}" alt="logo-light" height="63">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>

                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="mb-3 m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="ri-search-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block user-dropdown">
                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>
                        <div class="dropdown d-inline-block">



                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="{{asset('assets/images/users/avatar-2.jpg')}}" alt="Header Avatar">

                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="profile.php"><i
                                    class="ri-user-line align-middle me-1"></i>Thông tin người dùng</a>
                            <a class="dropdown-item" href="resetpass.php"><i class="ri-lock-line"
                                    style="margin-right:4%;"></i>Đổi mật khẩu</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="logout.php"><i
                                    class="ri-shut-down-line align-middle me-1 text-danger"></i>Đăng xuất</a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="mdi mdi-cog"></i>
                        </button>
                    </div>

                </div>

        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Mục lục</li>

                        <li>
                            <a href="#" class="waves-effect">
                                <i class="mdi mdi-home-variant-outline"></i>
                                <span>Trang Chủ</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fas fa-box"></i>
                                <span>Quản lý phòng ban</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="listDepartments.php">Danh sách phòng ban</a></li>
                                <li><a href="addDepartments.php">Thêm phòng ban</a></li>
                                <li><a href="addPersonnelAdmin.php">Thêm nhân sự</a></li>
                                <li><a href="listPersonnelAdmin.php">Danh sách nhân sự</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-book-account"></i>
                                <span>Quản lý nhân sự</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="listPersonnel.php">Danh sách nhân sự</a></li>
                                <li><a href="addPersonnel.php">Thêm nhân sự</a></li>
                                <li><a href="listGroup.php">Danh sách nhóm</a></li>
                                <li><a href="addGroup.php">Thêm nhóm</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-book-read-fill"></i>
                                <span>Kế Hoạch Ngày</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="listPlan.php">Danh Sách Kế Hoạch</a></li>

                                <li><a href="createPlan.php">Tạo Kế Hoạch Ngày</a></li>

                                <li><a href="categoryWork.php">Tạo hạng mục công việc</a></li>
                                <li><a href="listCategoryWork.php">Danh sách hạng mục</a></li>


                                <!-- <li><a href="email-compose.html">Email Compose</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->


                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Trang chủ</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->



                    <!-- end row -->


                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- end page title -->


            <script src="assets/libs/jquery/jquery.min.js"></script>
            <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/libs/metismenu/metisMenu.min.js"></script>
            <script src="assets/libs/simplebar/simplebar.min.js"></script>
            <script src="assets/libs/node-waves/waves.min.js"></script>

            <!-- apexcharts js -->
            <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

            <!-- jquery.vectormap map -->
            <script src="assets/libs/jqvmap/jquery.vmap.min.js"></script>
            <script src="assets/libs/jqvmap/maps/jquery.vmap.usa.js"></script>


            <script src="assets/js/pages/dashboard.init.js"></script>

            <script src="assets/js/app.js"></script>

</body>

</html>
{{--
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Trang Chủ | THACO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" /> -->
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favico.ico')}}">

    <!-- jvectormap -->
    <link href="{{asset('assets/libs/jqvmap/jqvmap.min.css')}}" rel="stylesheet" />

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">
    <div class="right-bar">
        <div data-simplebar="init" class="h-100">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: -16.6667px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <div class="rightbar-title d-flex align-items-center px-3 py-4">

                                    <h5 class="m-0 me-2">Chế độ</h5>

                                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                                        <i class="mdi mdi-close noti-icon"></i>
                                    </a>
                                </div>

                                <!-- Settings -->
                                <hr class="mt-0">
                                <h6 class="text-center mb-0">Chọn bố cục</h6>

                                <div class="p-4">
                                    <div class="mb-2">
                                        <img src="assets/images/layouts/layout-1.png" class="img-thumbnail"
                                            alt="layout-1">
                                    </div>

                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input theme-choice" type="checkbox"
                                            id="light-mode-switch" checked="">
                                        <label class="form-check-label" for="light-mode-switch">Chế độ sáng</label>
                                    </div>

                                    <div class="mb-2">
                                        <img src="assets/images/layouts/layout-2.png" class="img-thumbnail"
                                            alt="layout-2">
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input theme-choice" type="checkbox"
                                            id="dark-mode-switch" data-bsstyle="assets/css/bootstrap-dark.min.css"
                                            data-appstyle="assets/css/app-dark.min.css">
                                        <label class="form-check-label" for="dark-mode-switch">Chế độ tối</label>
                                    </div>

                                    <div class="mb-2">
                                        <img src="assets/images/layouts/layout-3.png" class="img-thumbnail"
                                            alt="layout-3">
                                    </div>
                                    <div class="form-check form-switch mb-5">
                                        <input class="form-check-input theme-choice" type="checkbox"
                                            id="rtl-mode-switch" data-appstyle="assets/css/app-rtl.min.css">
                                        <label class="form-check-label" for="rtl-mode-switch">Chế độ RTL</label>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 850px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="transform: translate3d(0px, 0px, 0px); display: block; height: 118px;"></div>
            </div>
        </div> <!-- end slimscroll-menu-->
    </div>

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">

                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box text-center">
                        <a href="dashboard.php" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{asset('assets/images/logo-sm1.png')}}" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('assets/images/logo-dark1.png')}}" alt="logo-dark" height="35">
                            </span>
                        </a>

                        <a href="dashboard.php" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{asset('assets/images/logo-sm1.png')}}" alt="logo-sm-light" height="25">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('assets/images/logo-dark1.png')}}" alt="logo-light" height="63">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>

                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="mb-3 m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="ri-search-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block user-dropdown">
                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>
                        <div class="dropdown d-inline-block">



                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="{{asset('assets/images/users/avatar-2.jpg')}}" alt="Header Avatar">

                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="profile.php"><i
                                    class="ri-user-line align-middle me-1"></i>Thông tin người dùng</a>
                            <a class="dropdown-item" href="resetpass.php"><i class="ri-lock-line"
                                    style="margin-right:4%;"></i>Đổi mật khẩu</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="logout.php"><i
                                    class="ri-shut-down-line align-middle me-1 text-danger"></i>Đăng xuất</a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="mdi mdi-cog"></i>
                        </button>
                    </div>

                </div>

        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Mục lục</li>

                        <li>
                            <a href="#" class="waves-effect">
                                <i class="mdi mdi-home-variant-outline"></i>
                                <span>Trang Chủ</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fas fa-box"></i>
                                <span>Quản lý phòng ban</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="listDepartments.php">Danh sách phòng ban</a></li>
                                <li><a href="addDepartments.php">Thêm phòng ban</a></li>
                                <li><a href="addPersonnelAdmin.php">Thêm nhân sự</a></li>
                                <li><a href="listPersonnelAdmin.php">Danh sách nhân sự</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-book-account"></i>
                                <span>Quản lý nhân sự</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="listPersonnel.php">Danh sách nhân sự</a></li>
                                <li><a href="addPersonnel.php">Thêm nhân sự</a></li>
                                <li><a href="listGroup.php">Danh sách nhóm</a></li>
                                <li><a href="addGroup.php">Thêm nhóm</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-book-read-fill"></i>
                                <span>Kế Hoạch Ngày</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="listPlan.php">Danh Sách Kế Hoạch</a></li>

                                <li><a href="createPlan.php">Tạo Kế Hoạch Ngày</a></li>

                                <li><a href="categoryWork.php">Tạo hạng mục công việc</a></li>
                                <li><a href="listCategoryWork.php">Danh sách hạng mục</a></li>


                                <!-- <li><a href="email-compose.html">Email Compose</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->


                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Trang chủ</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->




                    <!-- end row -->


                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- end page title -->


            <script src="assets/libs/jquery/jquery.min.js"></script>
            <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/libs/metismenu/metisMenu.min.js"></script>
            <script src="assets/libs/simplebar/simplebar.min.js"></script>
            <script src="assets/libs/node-waves/waves.min.js"></script>

            <!-- apexcharts js -->
            <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

            <!-- jquery.vectormap map -->
            <script src="assets/libs/jqvmap/jquery.vmap.min.js"></script>
            <script src="assets/libs/jqvmap/maps/jquery.vmap.usa.js"></script>


            <script src="assets/js/pages/dashboard.init.js"></script>

            <script src="assets/js/app.js"></script>

</body>

</html> --}}
{{-- <!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Trang Chủ | THACO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" /> -->
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favico.ico')}}">

        <!-- jvectormap -->
        <link href="{{asset('assets/libs/jqvmap/jqvmap.min.css')}}" rel="stylesheet" />

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box text-center">
                            <a href="dashboard.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/logo-sm1.png')}}" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/logo-dark1.png')}}" alt="logo-dark" height="35">
                                </span>
                            </a>

                            <a href="dashboard.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/logo-sm1.png')}}" alt="logo-sm-light" height="25">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/logo-dark1.png')}}" alt="logo-light" height="63">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item" data-bs-toggle="collapse"
                            data-bs-target="#topnav-menu-content">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-search-line"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="mb-3 m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="ri-search-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-notification-3-line"></i>
                                <span class="noti-dot"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="ri-shopping-cart-line"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                        <i class="ri-checkbox-circle-line"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <div class="d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                            <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-2.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1">Kevin</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i
                                        class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i> Lock
                                    screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i
                                        class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-cog"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </header>

            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">
                                        <i class="mdi mdi-home-variant-outline me-2"></i> Trang chủ
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button">
                                        <i class="fas fa-box me-2"></i>Quản lý phòng ban <div class="arrow-down"></div>
                                    </a>

                                    <div class="dropdown-menu mega-dropdown-menu px-4"
                                        aria-labelledby="topnav-uielement">
                                        <div class="row">
                                           <div class="col-lg-2">
                                                <div>
                                                    <a href="ui-progressbars.html" class="dropdown-item">Danh sách phòng ban</a>
                                                    <a href="ui-sweet-alert.html" class="dropdown-item">Thêm phòng ban</a>
                                                    <a href="ui-tabs-accordions.html" class="dropdown-item">Thêm nhân sự</a>
                                                    <a href="ui-typography.html" class="dropdown-item">Danh sách nhân sự</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">

                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.png" class="img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.png" class="img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.png" class="img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>


                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- apexcharts js -->
        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- jquery.vectormap map -->
        <script src="{{asset('assets/libs/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('assets/libs/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

        <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html> --}}
