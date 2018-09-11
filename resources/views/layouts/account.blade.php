<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Bitxx Account Page</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('/img/icon.png') }}" type="image/x-icon" />

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="{{ url('/back/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ url('/back/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/plugins/bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/css/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/fonts/webfont/cryptocoins.css') }}" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->
    @yield('css')
    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="{{ url('/back/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/back/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" ">
    <!-- START TOPBAR -->
    <div class='page-topbar '>
        <div class='logo-area'>

        </div>
        <div class='quick-area'>
            <div class='pull-left'>
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>

                    
                </ul>
            </div>
            <div class='pull-right'>
                <ul class="info-menu right-links list-inline list-unstyled">
                    <li class="profile">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <img src="{{ url('/img/icon2.png') }}" alt="user-image" class="img-circle img-inline" />
                            <span>{{ Auth::user()->username }} <i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu profile animated fadeIn">

                            <li class="last">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>

    </div>
    <!-- END TOPBAR -->
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">

        <!-- SIDEBAR - START -->

        <div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="">
                        <a href="{{ url('/account') }}">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('/account/ico') }}">
                            <i class="fa fa-flash"></i>
                            <span class="title">ICO</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('/account/deposit') }}">
                            <i class="fa fa-credit-card"></i>
                            <span class="title">Deposit</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('/account/transfer') }}">
                            <i class="fa fa-credit-card"></i>
                            <span class="title">Transfer</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('/account/withdraw') }}">
                            <i class="fa fa-credit-card"></i>
                            <span class="title">Withdraw</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('/account/history') }}">
                            <i class="fa fa-credit-card"></i>
                            <span class="title">History</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('/account/referral') }}">
                            <i class="fa fa-crosshairs"></i>
                            <span class="title">Referral</span>
                        </a>
                    </li>
                    {{-- <li class="">
                        <a href="{{ url('/account/security') }}">
                            <i class="fa fa-lock"></i>
                            <span class="title">Security</span>
                        </a>
                    </li> --}}
                    <li class="">
                        <a href="{{ url('/account/setting') }}">
                            <i class="fa fa-gear"></i>
                            <span class="title">Setting</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('/account/support') }}">
                            <i class="fa fa-info"></i>
                            <span class="title">Support</span>
                        </a>
                    </li>
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
        <!--  SIDEBAR - END -->
        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" style=''>
                @yield('konten')
                

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
        </section>
        <!-- END CONTENT -->
        
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->
    <script src="{{ url('/back/js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ url('/back/js/jquery.easing.min.js') }}"></script>
    <script src="{{ url('/back/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/back/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ url('/back/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('/back/plugins/viewport/viewportchecker.js') }}"></script>
    <script>
        window.jQuery || document.write('<script src="{{ url('/back/js/jquery-1.11.2.min.js') }}"><\/script>');
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- CORE JS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    @yield('js')
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE TEMPLATE JS - START -->
    <script src="{{ url('/back/js/scripts.js') }}"></script>
    <!-- END CORE TEMPLATE JS - END -->

</body>

</html>