<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PAYGUARD SYSTEM</title>

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <!-- third party css -->
        <link href="{{ asset('assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/vendor/select.bootstrap5.css')}}" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
        <link href="{{ asset('assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style">
    
        @livewireStyles
    </head>

    <body class="loading" id="app" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.partials.leftmenu')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    @include('layouts.partials.topbar')
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        {{ $slot }}
                    </div> 
                    <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('layouts.partials.footer')
                <!-- end Footer -->
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        
        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- bundle -->
        <script src="{{ asset('assets/js/vendor.min.js')}}"></script>
        <script src="{{ asset('assets/js/app.min.js')}}"></script>
        
        <!-- third party js -->
        <script src="{{ asset('assets/js/vendor/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.bootstrap5.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/responsive.bootstrap5.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.select.min.js')}}"></script>
        
        <!-- demo app -->
        <script src="{{ asset('assets/js/pages/demo.datatable-init.js') }}"></script>
        <!-- end demo js-->
        @livewireScripts
    </body>
</html>