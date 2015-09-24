<?php header('Access-Control-Allow-Origin: *'); ?>
<html>
    <head>
        <title>Jenkins Dashboard</title>
        <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon" />
        <link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('/js/jquery-2.1.0.js') }}"></script>

    </head>
    <body class="dark_theme fixed_header atm-spmenu-push left_nav_hide">
        <!-- wrapper Start -->
        <div class="wrapper">
            <div class="header_bar">
                <!-- header Start -->
                <div class="brand">
                    <!-- brand Start -->
                    <div class="logo" style="display:block"><span class="theme_color">Jenkins</span> Dashboard</div>
                    <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
                </div>
                <!-- brand end -->
                <div class="header_top_bar">
                    <!-- header top bar start -->
                        <!-- brand Start -->
                        <div class="logo" style="display:block"><span class="theme_color">Jenkins</span> Dashboard</div>


                    <div class="top_right_bar">
                    </div>
                </div>
                <!-- header top bar end -->
            </div>
            <!-- header end -->
            <div class="inner">
                <!-- inner start -->
                <div class="left_nav">

                    <div class="left_nav_slidebar">
                        <ul>
                            <li class="left_nav_active theme_border"><a href="javascript:void(0);"><i class="fa fa-home"></i> DASHBOARD <span class="left_nav_pointer"></span> <span class="plus"></i></span> </a></li>
                        </ul>
                    </div>
                </div>
                <!-- left_nav end -->
                <div class="contentpanel">
                    <!-- contentpanel start -->
                    <div class="pull-left breadcrumb_admin clear_both">
                        <div class="pull-left page_title theme_color">
                            <h1>Dashboard</h1>
                            <h2 class="">Builds</h2>
                        </div>
                    </div>
                    <div class="container clear_both padding_fix">
                        <!-- container  start -->
                        @yield('content')
                    </div>
                    <!-- container  end -->
                </div>
                <!-- content panel end -->
            </div>
            <!-- inner end -->
        </div>
        <!-- wrapper end -->

        <!-- BEGIN JAVASCRIPTS -->

        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.sparkline.js') }}"></script>
        <script src="{{ asset('/js/jenkins_builder.js') }}"></script>

        <script src="{{ asset('/js/jPushMenu.js') }}"></script>
        <script src="{{ asset('/js/side-chats.js') }}"></script>
        <script src="{{ asset('/js/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('/plugins/scroll/jquery.nanoscroller.js') }}"></script>
        <!-- END JAVASCRIPT -->

    </body>
</html>
