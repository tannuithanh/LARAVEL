
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



                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title">Overview</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div>
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    ALL
                                                </button>
                                                <button type="button" class="btn btn-soft-primary btn-sm">
                                                    1M
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    6M
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm active">
                                                    1Y
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="position: relative;">
                                        <div id="mixed-chart" class="apex-charts" dir="ltr"
                                            style="min-height: 365px;">
                                            <div id="apexchartshmz726cy"
                                                class="apexcharts-canvas apexchartshmz726cy apexcharts-theme-light"
                                                style="width: 1449px; height: 350px;"><svg id="SvgjsSvg1345"
                                                    width="1449" height="350" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.com/svgjs"
                                                    class="apexcharts-svg apexcharts-zoomable"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG1347" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(63.93350441325794, 30)">
                                                        <defs id="SvgjsDefs1346">
                                                            <clipPath id="gridRectMaskhmz726cy">
                                                                <rect id="SvgjsRect1353" width="1392.0468740463255"
                                                                    height="283.348" x="-22.63142044414173"
                                                                    y="-0.5" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMaskhmz726cy">
                                                                <rect id="SvgjsRect1354" width="1350.7840331580421"
                                                                    height="286.348" x="-2" y="-2"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine1352" x1="0" y1="0"
                                                            x2="0" y2="282.348" stroke="#b6b6b6"
                                                            stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                                            x="0" y="0" width="1"
                                                            height="282.348" fill="#b1b9c4" filter="none"
                                                            fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG1381" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1382" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"><text id="SvgjsText1384"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="0" y="311.348"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1385">Jan</tspan>
                                                                    <title>Jan</title>
                                                                </text><text id="SvgjsText1387"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="122.43491210527654" y="311.348"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1388">Feb</tspan>
                                                                    <title>Feb</title>
                                                                </text><text id="SvgjsText1390"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="244.86982421055308" y="311.348"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1391">Mar</tspan>
                                                                    <title>Mar</title>
                                                                </text><text id="SvgjsText1393"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="367.30473631582964" y="311.348"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1394">Apr</tspan>
                                                                    <title>Apr</title>
                                                                </text><text id="SvgjsText1396"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="489.7396484211062" y="311.348"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1397">May</tspan>
                                                                    <title>May</title>
                                                                </text><text id="SvgjsText1399"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="612.1745605263828" y="311.348"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1400">Jun</tspan>
                                                                    <title>Jun</title>
                                                                </text><text id="SvgjsText1402"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="734.6094726316594" y="311.348"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1403">Jul</tspan>
                                                                    <title>Jul</title>
                                                                </text><text id="SvgjsText1405"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="857.044384736936" y="311.348"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1406">Aug</tspan>
                                                                    <title>Aug</title>
                                                                </text><text id="SvgjsText1408"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="979.4792968422125" y="311.348"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1409">Sep</tspan>
                                                                    <title>Sep</title>
                                                                </text><text id="SvgjsText1411"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="1101.914208947489" y="311.348"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1412">Oct</tspan>
                                                                    <title>Oct</title>
                                                                </text><text id="SvgjsText1414"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="1224.3491210527654" y="311.348"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1415">Nov</tspan>
                                                                    <title>Nov</title>
                                                                </text><text id="SvgjsText1417"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="1346.784033158042" y="311.348"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1418">Dec</tspan>
                                                                    <title>Dec</title>
                                                                </text></g>
                                                            <line id="SvgjsLine1419" x1="-20.13142044414173"
                                                                y1="283.348" x2="1366.9154536021836" y2="283.348"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-width="1"></line>
                                                        </g>
                                                        <g id="SvgjsG1438" class="apexcharts-grid">
                                                            <g id="SvgjsG1439"
                                                                class="apexcharts-gridlines-horizontal">
                                                                <line id="SvgjsLine1453" x1="-20.13142044414173"
                                                                    y1="0" x2="1366.9154536021838"
                                                                    y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1454" x1="-20.13142044414173"
                                                                    y1="40.33542857142857" x2="1366.9154536021838"
                                                                    y2="40.33542857142857" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1455" x1="-20.13142044414173"
                                                                    y1="80.67085714285714" x2="1366.9154536021838"
                                                                    y2="80.67085714285714" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1456" x1="-20.13142044414173"
                                                                    y1="121.00628571428572" x2="1366.9154536021838"
                                                                    y2="121.00628571428572" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1457" x1="-20.13142044414173"
                                                                    y1="161.3417142857143" x2="1366.9154536021838"
                                                                    y2="161.3417142857143" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1458" x1="-20.13142044414173"
                                                                    y1="201.67714285714285" x2="1366.9154536021838"
                                                                    y2="201.67714285714285" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1459" x1="-20.13142044414173"
                                                                    y1="242.01257142857142" x2="1366.9154536021838"
                                                                    y2="242.01257142857142" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1460" x1="-20.13142044414173"
                                                                    y1="282.348" x2="1366.9154536021838"
                                                                    y2="282.348" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline">
                                                                </line>
                                                            </g>
                                                            <g id="SvgjsG1440" class="apexcharts-gridlines-vertical">
                                                            </g>
                                                            <line id="SvgjsLine1441" x1="0" y1="283.348"
                                                                x2="0" y2="289.348" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-xaxis-tick">
                                                            </line>
                                                            <line id="SvgjsLine1442" x1="122.43491210527655"
                                                                y1="283.348" x2="122.43491210527655" y2="289.348"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1443" x1="244.8698242105531"
                                                                y1="283.348" x2="244.8698242105531" y2="289.348"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1444" x1="367.30473631582964"
                                                                y1="283.348" x2="367.30473631582964" y2="289.348"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1445" x1="489.7396484211062"
                                                                y1="283.348" x2="489.7396484211062" y2="289.348"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1446" x1="612.1745605263827"
                                                                y1="283.348" x2="612.1745605263827" y2="289.348"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1447" x1="734.6094726316593"
                                                                y1="283.348" x2="734.6094726316593" y2="289.348"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1448" x1="857.0443847369359"
                                                                y1="283.348" x2="857.0443847369359" y2="289.348"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1449" x1="979.4792968422124"
                                                                y1="283.348" x2="979.4792968422124" y2="289.348"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1450" x1="1101.914208947489"
                                                                y1="283.348" x2="1101.914208947489" y2="289.348"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1451" x1="1224.3491210527654"
                                                                y1="283.348" x2="1224.3491210527654" y2="289.348"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1452" x1="1346.784033158042"
                                                                y1="283.348" x2="1346.784033158042" y2="289.348"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1462" x1="0" y1="282.348"
                                                                x2="1346.7840331580421" y2="282.348"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine1461" x1="0" y1="1"
                                                                x2="0" y2="282.348" stroke="transparent"
                                                                stroke-dasharray="0"></line>
                                                        </g>
                                                        <g id="SvgjsG1355"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG1356" class="apexcharts-series"
                                                                seriesName="Maintenance" data:longestSeries="true"
                                                                rel="1" data:realIndex="1">
                                                                <path id="SvgjsPath1359"
                                                                    d="M 0 282.348L 0 104.87211428571428C 42.85221923684679 104.87211428571428 79.58269286842976 60.50314285714285 122.43491210527655 60.50314285714285C 165.28713134212336 60.50314285714285 202.0176049737063 116.97274285714286 244.8698242105531 116.97274285714286C 287.7220434473999 116.97274285714286 324.4525170789829 112.9392 367.3047363158297 112.9392C 410.1569555526765 112.9392 446.8874291842594 193.61005714285716 489.7396484211062 193.61005714285716C 532.591867657953 193.61005714285716 569.322341289536 108.90565714285714 612.1745605263828 108.90565714285714C 655.0267797632296 108.90565714285714 691.7572533948126 197.6436 734.6094726316594 197.6436C 777.4616918685061 197.6436 814.1921655000891 116.97274285714286 857.0443847369359 116.97274285714286C 899.8966039737827 116.97274285714286 936.6270776053657 56.469599999999986 979.4792968422124 56.469599999999986C 1022.3315160790592 56.469599999999986 1059.0619897106421 173.44234285714288 1101.914208947489 173.44234285714288C 1144.7664281843358 173.44234285714288 1181.4969018159188 108.90565714285714 1224.3491210527657 108.90565714285714C 1267.2013402896125 108.90565714285714 1303.9318139211953 173.44234285714288 1346.7840331580421 173.44234285714288C 1346.7840331580421 173.44234285714288 1346.7840331580421 173.44234285714288 1346.7840331580421 282.348M 1346.7840331580421 173.44234285714288z"
                                                                    fill="rgba(239,242,247,0.25)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="1"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M 0 282.348L 0 104.87211428571428C 42.85221923684679 104.87211428571428 79.58269286842976 60.50314285714285 122.43491210527655 60.50314285714285C 165.28713134212336 60.50314285714285 202.0176049737063 116.97274285714286 244.8698242105531 116.97274285714286C 287.7220434473999 116.97274285714286 324.4525170789829 112.9392 367.3047363158297 112.9392C 410.1569555526765 112.9392 446.8874291842594 193.61005714285716 489.7396484211062 193.61005714285716C 532.591867657953 193.61005714285716 569.322341289536 108.90565714285714 612.1745605263828 108.90565714285714C 655.0267797632296 108.90565714285714 691.7572533948126 197.6436 734.6094726316594 197.6436C 777.4616918685061 197.6436 814.1921655000891 116.97274285714286 857.0443847369359 116.97274285714286C 899.8966039737827 116.97274285714286 936.6270776053657 56.469599999999986 979.4792968422124 56.469599999999986C 1022.3315160790592 56.469599999999986 1059.0619897106421 173.44234285714288 1101.914208947489 173.44234285714288C 1144.7664281843358 173.44234285714288 1181.4969018159188 108.90565714285714 1224.3491210527657 108.90565714285714C 1267.2013402896125 108.90565714285714 1303.9318139211953 173.44234285714288 1346.7840331580421 173.44234285714288C 1346.7840331580421 173.44234285714288 1346.7840331580421 173.44234285714288 1346.7840331580421 282.348M 1346.7840331580421 173.44234285714288z"
                                                                    pathFrom="M -1 282.348L -1 282.348L 122.43491210527655 282.348L 244.8698242105531 282.348L 367.3047363158297 282.348L 489.7396484211062 282.348L 612.1745605263828 282.348L 734.6094726316594 282.348L 857.0443847369359 282.348L 979.4792968422124 282.348L 1101.914208947489 282.348L 1224.3491210527657 282.348L 1346.7840331580421 282.348">
                                                                </path>
                                                                <path id="SvgjsPath1360"
                                                                    d="M 0 104.87211428571428C 42.85221923684679 104.87211428571428 79.58269286842976 60.50314285714285 122.43491210527655 60.50314285714285C 165.28713134212336 60.50314285714285 202.0176049737063 116.97274285714286 244.8698242105531 116.97274285714286C 287.7220434473999 116.97274285714286 324.4525170789829 112.9392 367.3047363158297 112.9392C 410.1569555526765 112.9392 446.8874291842594 193.61005714285716 489.7396484211062 193.61005714285716C 532.591867657953 193.61005714285716 569.322341289536 108.90565714285714 612.1745605263828 108.90565714285714C 655.0267797632296 108.90565714285714 691.7572533948126 197.6436 734.6094726316594 197.6436C 777.4616918685061 197.6436 814.1921655000891 116.97274285714286 857.0443847369359 116.97274285714286C 899.8966039737827 116.97274285714286 936.6270776053657 56.469599999999986 979.4792968422124 56.469599999999986C 1022.3315160790592 56.469599999999986 1059.0619897106421 173.44234285714288 1101.914208947489 173.44234285714288C 1144.7664281843358 173.44234285714288 1181.4969018159188 108.90565714285714 1224.3491210527657 108.90565714285714C 1267.2013402896125 108.90565714285714 1303.9318139211953 173.44234285714288 1346.7840331580421 173.44234285714288"
                                                                    fill="none" fill-opacity="1" stroke="#eff2f7"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="1" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="1"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M 0 104.87211428571428C 42.85221923684679 104.87211428571428 79.58269286842976 60.50314285714285 122.43491210527655 60.50314285714285C 165.28713134212336 60.50314285714285 202.0176049737063 116.97274285714286 244.8698242105531 116.97274285714286C 287.7220434473999 116.97274285714286 324.4525170789829 112.9392 367.3047363158297 112.9392C 410.1569555526765 112.9392 446.8874291842594 193.61005714285716 489.7396484211062 193.61005714285716C 532.591867657953 193.61005714285716 569.322341289536 108.90565714285714 612.1745605263828 108.90565714285714C 655.0267797632296 108.90565714285714 691.7572533948126 197.6436 734.6094726316594 197.6436C 777.4616918685061 197.6436 814.1921655000891 116.97274285714286 857.0443847369359 116.97274285714286C 899.8966039737827 116.97274285714286 936.6270776053657 56.469599999999986 979.4792968422124 56.469599999999986C 1022.3315160790592 56.469599999999986 1059.0619897106421 173.44234285714288 1101.914208947489 173.44234285714288C 1144.7664281843358 173.44234285714288 1181.4969018159188 108.90565714285714 1224.3491210527657 108.90565714285714C 1267.2013402896125 108.90565714285714 1303.9318139211953 173.44234285714288 1346.7840331580421 173.44234285714288"
                                                                    pathFrom="M -1 282.348L -1 282.348L 122.43491210527655 282.348L 244.8698242105531 282.348L 367.3047363158297 282.348L 489.7396484211062 282.348L 612.1745605263828 282.348L 734.6094726316594 282.348L 857.0443847369359 282.348L 979.4792968422124 282.348L 1101.914208947489 282.348L 1224.3491210527657 282.348L 1346.7840331580421 282.348">
                                                                </path>
                                                                <g id="SvgjsG1357"
                                                                    class="apexcharts-series-markers-wrap"
                                                                    data:realIndex="1">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1468" r="0"
                                                                            cx="0" cy="0"
                                                                            class="apexcharts-marker wj2kdo2ah"
                                                                            stroke="#ffffff" fill="#0bb197"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9"
                                                                            default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1361"
                                                            class="apexcharts-bar-series apexcharts-plot-series">
                                                            <g id="SvgjsG1362" class="apexcharts-series"
                                                                rel="1" seriesName="Expenses"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath1364"
                                                                    d="M -11.01914208947489 282.348L -11.01914208947489 189.5765142857143L 11.01914208947489 189.5765142857143L 11.01914208947489 189.5765142857143L 11.01914208947489 282.348L 11.01914208947489 282.348z"
                                                                    fill="rgba(11,177,151,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M -11.01914208947489 282.348L -11.01914208947489 189.5765142857143L 11.01914208947489 189.5765142857143L 11.01914208947489 189.5765142857143L 11.01914208947489 282.348L 11.01914208947489 282.348z"
                                                                    pathFrom="M -11.01914208947489 282.348L -11.01914208947489 282.348L 11.01914208947489 282.348L 11.01914208947489 282.348L 11.01914208947489 282.348L -11.01914208947489 282.348"
                                                                    cy="189.5765142857143" cx="11.01914208947489"
                                                                    j="0" val="23"
                                                                    barHeight="92.77148571428572"
                                                                    barWidth="22.03828417894978"></path>
                                                                <path id="SvgjsPath1365"
                                                                    d="M 111.41577001580166 282.348L 111.41577001580166 237.9790285714286L 133.45405419475145 237.9790285714286L 133.45405419475145 237.9790285714286L 133.45405419475145 282.348L 133.45405419475145 282.348z"
                                                                    fill="rgba(11,177,151,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M 111.41577001580166 282.348L 111.41577001580166 237.9790285714286L 133.45405419475145 237.9790285714286L 133.45405419475145 237.9790285714286L 133.45405419475145 282.348L 133.45405419475145 282.348z"
                                                                    pathFrom="M 111.41577001580166 282.348L 111.41577001580166 282.348L 133.45405419475145 282.348L 133.45405419475145 282.348L 133.45405419475145 282.348L 111.41577001580166 282.348"
                                                                    cy="237.9790285714286" cx="133.45405419475145"
                                                                    j="1" val="11"
                                                                    barHeight="44.368971428571435"
                                                                    barWidth="22.03828417894978"></path>
                                                                <path id="SvgjsPath1366"
                                                                    d="M 233.85068212107822 282.348L 233.85068212107822 193.61005714285716L 255.88896630002802 193.61005714285716L 255.88896630002802 193.61005714285716L 255.88896630002802 282.348L 255.88896630002802 282.348z"
                                                                    fill="rgba(11,177,151,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M 233.85068212107822 282.348L 233.85068212107822 193.61005714285716L 255.88896630002802 193.61005714285716L 255.88896630002802 193.61005714285716L 255.88896630002802 282.348L 255.88896630002802 282.348z"
                                                                    pathFrom="M 233.85068212107822 282.348L 233.85068212107822 282.348L 255.88896630002802 282.348L 255.88896630002802 282.348L 255.88896630002802 282.348L 233.85068212107822 282.348"
                                                                    cy="193.61005714285716" cx="255.88896630002802"
                                                                    j="2" val="22"
                                                                    barHeight="88.73794285714287"
                                                                    barWidth="22.03828417894978"></path>
                                                                <path id="SvgjsPath1367"
                                                                    d="M 356.2855942263548 282.348L 356.2855942263548 173.44234285714288L 378.3238784053046 173.44234285714288L 378.3238784053046 173.44234285714288L 378.3238784053046 282.348L 378.3238784053046 282.348z"
                                                                    fill="rgba(11,177,151,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M 356.2855942263548 282.348L 356.2855942263548 173.44234285714288L 378.3238784053046 173.44234285714288L 378.3238784053046 173.44234285714288L 378.3238784053046 282.348L 378.3238784053046 282.348z"
                                                                    pathFrom="M 356.2855942263548 282.348L 356.2855942263548 282.348L 378.3238784053046 282.348L 378.3238784053046 282.348L 378.3238784053046 282.348L 356.2855942263548 282.348"
                                                                    cy="173.44234285714288" cx="378.3238784053046"
                                                                    j="3" val="27"
                                                                    barHeight="108.90565714285715"
                                                                    barWidth="22.03828417894978"></path>
                                                                <path id="SvgjsPath1368"
                                                                    d="M 478.7205063316313 282.348L 478.7205063316313 229.91194285714286L 500.7587905105811 229.91194285714286L 500.7587905105811 229.91194285714286L 500.7587905105811 282.348L 500.7587905105811 282.348z"
                                                                    fill="rgba(11,177,151,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M 478.7205063316313 282.348L 478.7205063316313 229.91194285714286L 500.7587905105811 229.91194285714286L 500.7587905105811 229.91194285714286L 500.7587905105811 282.348L 500.7587905105811 282.348z"
                                                                    pathFrom="M 478.7205063316313 282.348L 478.7205063316313 282.348L 500.7587905105811 282.348L 500.7587905105811 282.348L 500.7587905105811 282.348L 478.7205063316313 282.348"
                                                                    cy="229.91194285714286" cx="500.7587905105811"
                                                                    j="4" val="13"
                                                                    barHeight="52.436057142857145"
                                                                    barWidth="22.03828417894978"></path>
                                                                <path id="SvgjsPath1369"
                                                                    d="M 601.1554184369079 282.348L 601.1554184369079 193.61005714285716L 623.1937026158577 193.61005714285716L 623.1937026158577 193.61005714285716L 623.1937026158577 282.348L 623.1937026158577 282.348z"
                                                                    fill="rgba(11,177,151,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M 601.1554184369079 282.348L 601.1554184369079 193.61005714285716L 623.1937026158577 193.61005714285716L 623.1937026158577 193.61005714285716L 623.1937026158577 282.348L 623.1937026158577 282.348z"
                                                                    pathFrom="M 601.1554184369079 282.348L 601.1554184369079 282.348L 623.1937026158577 282.348L 623.1937026158577 282.348L 623.1937026158577 282.348L 601.1554184369079 282.348"
                                                                    cy="193.61005714285716" cx="623.1937026158577"
                                                                    j="5" val="22"
                                                                    barHeight="88.73794285714287"
                                                                    barWidth="22.03828417894978"></path>
                                                                <path id="SvgjsPath1370"
                                                                    d="M 723.5903305421845 282.348L 723.5903305421845 133.10691428571428L 745.6286147211342 133.10691428571428L 745.6286147211342 133.10691428571428L 745.6286147211342 282.348L 745.6286147211342 282.348z"
                                                                    fill="rgba(11,177,151,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M 723.5903305421845 282.348L 723.5903305421845 133.10691428571428L 745.6286147211342 133.10691428571428L 745.6286147211342 133.10691428571428L 745.6286147211342 282.348L 745.6286147211342 282.348z"
                                                                    pathFrom="M 723.5903305421845 282.348L 723.5903305421845 282.348L 745.6286147211342 282.348L 745.6286147211342 282.348L 745.6286147211342 282.348L 723.5903305421845 282.348"
                                                                    cy="133.10691428571428" cx="745.6286147211342"
                                                                    j="6" val="37"
                                                                    barHeight="149.24108571428573"
                                                                    barWidth="22.03828417894978"></path>
                                                                <path id="SvgjsPath1371"
                                                                    d="M 846.0252426474609 282.348L 846.0252426474609 197.6436L 868.0635268264107 197.6436L 868.0635268264107 197.6436L 868.0635268264107 282.348L 868.0635268264107 282.348z"
                                                                    fill="rgba(11,177,151,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M 846.0252426474609 282.348L 846.0252426474609 197.6436L 868.0635268264107 197.6436L 868.0635268264107 197.6436L 868.0635268264107 282.348L 868.0635268264107 282.348z"
                                                                    pathFrom="M 846.0252426474609 282.348L 846.0252426474609 282.348L 868.0635268264107 282.348L 868.0635268264107 282.348L 868.0635268264107 282.348L 846.0252426474609 282.348"
                                                                    cy="197.6436" cx="868.0635268264107"
                                                                    j="7" val="21" barHeight="84.7044"
                                                                    barWidth="22.03828417894978"></path>
                                                                <path id="SvgjsPath1372"
                                                                    d="M 968.4601547527375 282.348L 968.4601547527375 104.87211428571428L 990.4984389316872 104.87211428571428L 990.4984389316872 104.87211428571428L 990.4984389316872 282.348L 990.4984389316872 282.348z"
                                                                    fill="rgba(11,177,151,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M 968.4601547527375 282.348L 968.4601547527375 104.87211428571428L 990.4984389316872 104.87211428571428L 990.4984389316872 104.87211428571428L 990.4984389316872 282.348L 990.4984389316872 282.348z"
                                                                    pathFrom="M 968.4601547527375 282.348L 968.4601547527375 282.348L 990.4984389316872 282.348L 990.4984389316872 282.348L 990.4984389316872 282.348L 968.4601547527375 282.348"
                                                                    cy="104.87211428571428" cx="990.4984389316872"
                                                                    j="8" val="44"
                                                                    barHeight="177.47588571428574"
                                                                    barWidth="22.03828417894978"></path>
                                                                <path id="SvgjsPath1373"
                                                                    d="M 1090.8950668580142 282.348L 1090.8950668580142 193.61005714285716L 1112.933351036964 193.61005714285716L 1112.933351036964 193.61005714285716L 1112.933351036964 282.348L 1112.933351036964 282.348z"
                                                                    fill="rgba(11,177,151,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M 1090.8950668580142 282.348L 1090.8950668580142 193.61005714285716L 1112.933351036964 193.61005714285716L 1112.933351036964 193.61005714285716L 1112.933351036964 282.348L 1112.933351036964 282.348z"
                                                                    pathFrom="M 1090.8950668580142 282.348L 1090.8950668580142 282.348L 1112.933351036964 282.348L 1112.933351036964 282.348L 1112.933351036964 282.348L 1090.8950668580142 282.348"
                                                                    cy="193.61005714285716" cx="1112.933351036964"
                                                                    j="9" val="22"
                                                                    barHeight="88.73794285714287"
                                                                    barWidth="22.03828417894978"></path>
                                                                <path id="SvgjsPath1374"
                                                                    d="M 1213.3299789632908 282.348L 1213.3299789632908 161.3417142857143L 1235.3682631422407 161.3417142857143L 1235.3682631422407 161.3417142857143L 1235.3682631422407 282.348L 1235.3682631422407 282.348z"
                                                                    fill="rgba(11,177,151,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M 1213.3299789632908 282.348L 1213.3299789632908 161.3417142857143L 1235.3682631422407 161.3417142857143L 1235.3682631422407 161.3417142857143L 1235.3682631422407 282.348L 1235.3682631422407 282.348z"
                                                                    pathFrom="M 1213.3299789632908 282.348L 1213.3299789632908 282.348L 1235.3682631422407 282.348L 1235.3682631422407 282.348L 1235.3682631422407 282.348L 1213.3299789632908 282.348"
                                                                    cy="161.3417142857143" cx="1235.3682631422407"
                                                                    j="10" val="30"
                                                                    barHeight="121.00628571428572"
                                                                    barWidth="22.03828417894978"></path>
                                                                <path id="SvgjsPath1375"
                                                                    d="M 1335.7648910685673 282.348L 1335.7648910685673 209.74422857142858L 1357.8031752475172 209.74422857142858L 1357.8031752475172 209.74422857142858L 1357.8031752475172 282.348L 1357.8031752475172 282.348z"
                                                                    fill="rgba(11,177,151,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M 1335.7648910685673 282.348L 1335.7648910685673 209.74422857142858L 1357.8031752475172 209.74422857142858L 1357.8031752475172 209.74422857142858L 1357.8031752475172 282.348L 1357.8031752475172 282.348z"
                                                                    pathFrom="M 1335.7648910685673 282.348L 1335.7648910685673 282.348L 1357.8031752475172 282.348L 1357.8031752475172 282.348L 1357.8031752475172 282.348L 1335.7648910685673 282.348"
                                                                    cy="209.74422857142858" cx="1357.8031752475172"
                                                                    j="11" val="18"
                                                                    barHeight="72.60377142857143"
                                                                    barWidth="22.03828417894978"></path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1376"
                                                            class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG1377" class="apexcharts-series"
                                                                seriesName="Profit" data:longestSeries="true"
                                                                rel="1" data:realIndex="2">
                                                                <path id="SvgjsPath1380"
                                                                    d="M 0 161.3417142857143C 42.85221923684679 161.3417142857143 79.58269286842976 181.50942857142857 122.43491210527655 181.50942857142857C 165.28713134212336 181.50942857142857 202.0176049737063 137.14045714285714 244.8698242105531 137.14045714285714C 287.7220434473999 137.14045714285714 324.4525170789829 161.3417142857143 367.3047363158297 161.3417142857143C 410.1569555526765 161.3417142857143 446.8874291842594 100.83857142857141 489.7396484211062 100.83857142857141C 532.591867657953 100.83857142857141 569.322341289536 141.174 612.1745605263828 141.174C 655.0267797632296 141.174 691.7572533948126 24.201257142857116 734.6094726316594 24.201257142857116C 777.4616918685061 24.201257142857116 814.1921655000891 72.60377142857143 857.0443847369359 72.60377142857143C 899.8966039737827 72.60377142857143 936.6270776053657 44.36897142857143 979.4792968422124 44.36897142857143C 1022.3315160790592 44.36897142857143 1059.0619897106421 137.14045714285714 1101.914208947489 137.14045714285714C 1144.7664281843358 137.14045714285714 1181.4969018159188 125.03982857142856 1224.3491210527657 125.03982857142856C 1267.2013402896125 125.03982857142856 1303.9318139211953 76.63731428571427 1346.7840331580421 76.63731428571427"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(255,61,96,1)" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="1"
                                                                    stroke-dasharray="5" class="apexcharts-line"
                                                                    index="2"
                                                                    clip-path="url(#gridRectMaskhmz726cy)"
                                                                    pathTo="M 0 161.3417142857143C 42.85221923684679 161.3417142857143 79.58269286842976 181.50942857142857 122.43491210527655 181.50942857142857C 165.28713134212336 181.50942857142857 202.0176049737063 137.14045714285714 244.8698242105531 137.14045714285714C 287.7220434473999 137.14045714285714 324.4525170789829 161.3417142857143 367.3047363158297 161.3417142857143C 410.1569555526765 161.3417142857143 446.8874291842594 100.83857142857141 489.7396484211062 100.83857142857141C 532.591867657953 100.83857142857141 569.322341289536 141.174 612.1745605263828 141.174C 655.0267797632296 141.174 691.7572533948126 24.201257142857116 734.6094726316594 24.201257142857116C 777.4616918685061 24.201257142857116 814.1921655000891 72.60377142857143 857.0443847369359 72.60377142857143C 899.8966039737827 72.60377142857143 936.6270776053657 44.36897142857143 979.4792968422124 44.36897142857143C 1022.3315160790592 44.36897142857143 1059.0619897106421 137.14045714285714 1101.914208947489 137.14045714285714C 1144.7664281843358 137.14045714285714 1181.4969018159188 125.03982857142856 1224.3491210527657 125.03982857142856C 1267.2013402896125 125.03982857142856 1303.9318139211953 76.63731428571427 1346.7840331580421 76.63731428571427"
                                                                    pathFrom="M -1 282.348L -1 282.348L 122.43491210527655 282.348L 244.8698242105531 282.348L 367.3047363158297 282.348L 489.7396484211062 282.348L 612.1745605263828 282.348L 734.6094726316594 282.348L 857.0443847369359 282.348L 979.4792968422124 282.348L 1101.914208947489 282.348L 1224.3491210527657 282.348L 1346.7840331580421 282.348">
                                                                </path>
                                                                <g id="SvgjsG1378"
                                                                    class="apexcharts-series-markers-wrap"
                                                                    data:realIndex="2">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1469" r="0"
                                                                            cx="0" cy="0"
                                                                            class="apexcharts-marker wpzk9qjs3i"
                                                                            stroke="#ffffff" fill="#ff3d60"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9"
                                                                            default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1358" class="apexcharts-datalabels"
                                                                data:realIndex="1"></g>
                                                            <g id="SvgjsG1363" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                            <g id="SvgjsG1379" class="apexcharts-datalabels"
                                                                data:realIndex="2"></g>
                                                        </g>
                                                        <line id="SvgjsLine1463" x1="-20.13142044414173"
                                                            y1="0" x2="1366.9154536021838" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1464" x1="-20.13142044414173"
                                                            y1="0" x2="1366.9154536021838" y2="0"
                                                            stroke-dasharray="0" stroke-width="0"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1465" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1466" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1467" class="apexcharts-point-annotations"></g>
                                                        <rect id="SvgjsRect1470" width="0" height="0"
                                                            x="0" y="0" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-zoom-rect"></rect>
                                                        <rect id="SvgjsRect1471" width="0" height="0"
                                                            x="0" y="0" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-selection-rect"></rect>
                                                    </g>
                                                    <rect id="SvgjsRect1351" width="0" height="0"
                                                        x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG1420" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(9.802083969116211, 0)">
                                                        <g id="SvgjsG1421" class="apexcharts-yaxis-texts-g"><text
                                                                id="SvgjsText1422"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="31.7" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1423">70</tspan>
                                                            </text><text id="SvgjsText1424"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="72.03542857142857"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1425">60</tspan>
                                                            </text><text id="SvgjsText1426"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="112.37085714285713"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1427">50</tspan>
                                                            </text><text id="SvgjsText1428"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="152.70628571428568"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1429">40</tspan>
                                                            </text><text id="SvgjsText1430"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="193.04171428571425"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1431">30</tspan>
                                                            </text><text id="SvgjsText1432"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="233.37714285714281"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1433">20</tspan>
                                                            </text><text id="SvgjsText1434"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="273.7125714285714"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1435">10</tspan>
                                                            </text><text id="SvgjsText1436"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="314.04799999999994"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1437">0</tspan>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG1348" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 175px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(11, 177, 151);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-label"></span><span
                                                                    class="apexcharts-tooltip-text-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(239, 242, 247);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-label"></span><span
                                                                    class="apexcharts-tooltip-text-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 3;">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(255, 61, 96);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-label"></span><span
                                                                    class="apexcharts-tooltip-text-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                    <div class="apexcharts-xaxistooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 1450px; height: 351px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-body -->

                                <div class="card-body border-top">
                                    <div class="text-muted text-center">
                                        <div class="row">
                                            <div class="col-4 border-end">
                                                <div>
                                                    <p class="mb-2"><i
                                                            class="mdi mdi-circle font-size-12 text-primary me-1"></i>
                                                        Expenses</p>
                                                    <h5 class="font-size-16 mb-0">$ 8,524 <span
                                                            class="text-success font-size-12"><i
                                                                class="mdi mdi-menu-up font-size-14 me-1"></i>1.2
                                                            %</span></h5>
                                                </div>
                                            </div>
                                            <div class="col-4 border-end">
                                                <div>
                                                    <p class="mb-2"><i
                                                            class="mdi mdi-circle font-size-12 text-light me-1"></i>
                                                        Maintenance</p>
                                                    <h5 class="font-size-16 mb-0">$ 8,524 <span
                                                            class="text-success font-size-12"><i
                                                                class="mdi mdi-menu-up font-size-14 me-1"></i>2.0
                                                            %</span></h5>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>
                                                    <p class="mb-2"><i
                                                            class="mdi mdi-circle font-size-12 text-danger me-1"></i>
                                                        Profit</p>
                                                    <h5 class="font-size-16 mb-0">$ 8,524 <span
                                                            class="text-success font-size-12"><i
                                                                class="mdi mdi-menu-up font-size-14 me-1"></i>0.4
                                                            %</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->





                        <!-- end col -->
                    </div>
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
