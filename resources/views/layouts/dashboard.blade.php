<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- Bootstrap-->
    <link href="/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Common Plugins CSS -->
    <link href="/css/plugins/plugins.css" rel="stylesheet">
    <!--fonts-->
    <link href="/lib/line-icons/line-icons.css" rel="stylesheet">
    <link href="/lib/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="/lib/chartist/chartist.min.css" rel="stylesheet" />
    <link href="/css/chartist-custom.css" rel="stylesheet" />
    <!-- jvectormap -->
    <link href="/lib/vector-map/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>

<div class="page-wrapper" id="page-wrapper">
    <aside id="page-aside" class=" page-aside aside-fixed">
        <div class="sidenav darkNav">
            <a href="/index.html" class="app-logo d-flex flex flex-row align-items-center overflow-hidden justify-content-center">
                <i class="icon-Paper-Plane inline-icon rounded avatar32 d-inline-flex align-items-center justify-content-center"></i>
                <span class="logo-text d-inline-flex"> <span class='font700 d-inline-block mr-1'>ASSAN</span> UI</span>
            </a>
            <div class="flex">
                <div class="aside-content slim-scroll">
                    <ul class="metisMenu" id="metisMenu">
                        <li class="nav-title">Main<span class="nav-thumbnail">MN</span></li>


                        <li>
                            <a href="{{ route('users.index') }}">

                                        <span class="nav-text">
                                            Users
                                        </span>
                            </a>
                        </li><!--Menu-item-->


                    </ul>
                </div><!-- aside content end-->
            </div><!-- aside hidden scroll end-->
            <div class="aside-footer p-3 pl-25">
                <div class="">
                    App Version - 1.0
                </div>
            </div><!-- aside footer end-->
        </div><!-- sidenav end-->
    </aside><!-- page-aside end-->
    <main class="content">
        <header class="navbar page-header whiteHeader navbar-expand-lg">
            <ul class="nav flex-row mr-auto">
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link sidenav-btn h-lg-down">
                        <span class="navbar-toggler-icon"></span>
                    </a>
                    <a class="nav-link sidenav-btn h-lg-up" href="#page-aside"  data-toggle="dropdown" data-target="#page-aside">
                        <span class="navbar-toggler-icon"></span>
                    </a>
                </li>

            </ul>
            <ul class="nav flex-row order-lg-2 ml-auto nav-icons">



                <li class="nav-item dropdown user-dropdown align-items-center">
                    <a class="nav-link" href="#" id="dropdown-user" role="button" data-toggle="dropdown">
                                <span class="user-states states-online">
                                    <img src="/images/avatar6.jpg" width="35" alt="" class=" img-fluid rounded-circle">
                                </span>
                        <span class="ml-2 h-lg-down dropdown-toggle">
                                    Hi, {{ auth()->user()->name }}
                                </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <div class="text-center p-3 pt-0 b-b mb-5">
                            <span class="mb-0 d-block font300 text-title fs-1x">Hi! <span class="font700">Sarah Taylor</span></span>
                            <span class="fs12 mb-0 text-muted">Administrator</span>
                        </div>
                        <a class="dropdown-item" href="#"><i class="icon-User"></i>My Profile</a>
                        <a class="dropdown-item" href="#"><i class="icon-Newspaper"></i> Tasks</a>
                        <a class="dropdown-item" href="#"><i class="icon-Speach-Bubble4 "></i> Messages <span class="badge badge-text text-primary-active bg-primary-light ml-2">5 New</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="icon-Gear"></i> Settings<span class="badge badge-text text-danger-active bg-danger-light ml-2">Update</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-Power"></i> logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="h-lg-up nav-item">
                    <a href="#" class=" nav-link collapsed" data-toggle="collapse" data-target="#navbarToggler" aria-expanded="false">
                        <i class="icon-Magnifi-Glass2"></i>
                    </a>
                </li>
            </ul>

        </header>
        <div class="page-subheader mb-30">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="list">
                            <div class="list-item pl-0">
                                <div class="list-thumb ml-0 mr-3 pr-3  b-r text-muted">
                                    <i class="icon-Home"></i>
                                </div>
                                <div class="list-body">
                                    <div class="list-title fs-2x">
                                        <h3>Welcome <strong>{{ auth()->user()->name }}</strong></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-end h-md-down">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb no-padding bg-trans mb-0">
                                <li class="breadcrumb-item"><a href="/index.html"><i class="icon-Home mr-2 fs14"></i></a></li>
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item active">Default </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- page-sub-Header end-->
        <div class="page-content d-flex flex">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <footer class="content-footer bg-light b-t">
            <div class="d-flex flex align-items-center pl-15 pr-15">
                <div class="d-flex flex p-3 ml-auto">
                    <div>
                        <a href="#" class="d-inline-flex pl-0 pr-2 b-r">Contact</a>
                        <a href="#" class="d-inline-flex pl-2 pr-2 b-r">Storage</a>
                        <a href="#" class="d-inline-flex pl-2 pr-2 ">Privacy</a>
                    </div>
                </div>
                <div class="d-flex flex p-3 mr-auto justify-content-end">
                    <div class="text-muted">© Copyright 2014-2018. Assan</div>
                </div>
            </div>
        </footer><!-- footer end-->
    </main><!-- page content end-->
</div><!-- app's main wrapper end -->
<!-- Common plugins -->
<script type="text/javascript" src="/js/plugins/plugins.js"></script>
<script type="text/javascript" src="/js/appUi-custom.js"></script>
<script type="text/javascript" src="/lib/chartjs/dist/chart.min.js"></script>
<script type="text/javascript" src="/lib/peity/jquery.peity.min.js"></script>
<script src="/lib/chartist/chartist.min.js"></script>
<script src="/lib/chartist/chartist-tooltip.js"></script>
<!-- jvectormap -->
<script src="/lib/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/lib/vector-map/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="/js/dashboard.custom.js"></script>
</body>
</html>
