<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/Admin_panel2/vendors/mdi/css/materialdesignicons.min.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/Admin_panel2/vendors/css/vendor.bundle.base.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/Admin_panel2/vendors/css/vendor.bundle.base.css')}}">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/Admin_panel2/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/Admin_panel2/images/favicon.ico')}}" />
</head>

<body>
    <div class="container-scroller">



        @include('layout_admin2.navbar')

        <div class="container-fluid page-body-wrapper">

            @include('layout_admin2.sidebar')

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-home"></i>
                            </span>@yield('titel')
                        </h3>

                    </div>

                    @yield('content')

                </div>

                @include('layout_admin2.footer')

            </div>
        </div>
    </div>


    <!-- plugins:js -->
    <script src="{{asset('assets/Admin_panel2/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/Admin_panel2/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/Admin_panel2/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/Admin_panel2/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/Admin_panel2/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/Admin_panel2/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets/Admin_panel2/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/Admin_panel2/js/todolist.js')}}"></script>
    <!-- End custom js for this page -->
</body>

</html>
