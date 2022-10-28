<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoping</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets/frontend2/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend2/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend2/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend2/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend2/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend2/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend2/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend2/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('layouts.front_end2.header')

    {{-- @include('layouts.front_end2.hero') --}}

    @yield('content')

    @include('layouts.front_end2.footer')

    <!-- Js Plugins -->
    <script src="{{ asset('assets/frontend2/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('assets/frontend2/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/frontend2/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('assets/frontend2/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('assets/frontend2/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('assets/frontend2/js/mixitup.min.js')}}"></script>
    <script src="{{ asset('assets/frontend2/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/frontend2/js/main.js')}}"></script>
