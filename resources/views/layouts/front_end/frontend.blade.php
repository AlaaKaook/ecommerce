<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>E Shop</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/templatemo-hexashop.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lightbox.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">


</head>


<body>

    <div>
        @include('layouts.front_end.navbar')
    </div>

    <div>
        @yield('content')
    </div>

    <div>
        @include('layouts.front_end.footer')
    </div>



    <!-- jQuery -->
    <script src="{{ asset('assets/frontend/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/frontend/js/popper.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/frontend/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/slick.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/isotope.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>
