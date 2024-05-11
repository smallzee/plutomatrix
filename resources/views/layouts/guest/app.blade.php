<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title }} - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{asset('assets/guest/fonts/fonts.css')}}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/guest/fonts/font-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/guest/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/guest/css/styles.css')}}"/>
</head>
<body>

<!-- preloade -->
<div class="preload preload-container">
    <div class="preload-logo" style="background-image: url('images/logo/144.png')">
        <div class="spinner"></div>
    </div>
</div>
<!-- /preload -->

<div class="header-style2 fixed-top bg-menuDark">
    <div class="d-flex justify-content-between align-items-center gap-14">
        <div class="box-account style-2">
            <a href="{{route('dashboard.index')}}">
                <img src="images/avt/avt2.jpg.png" alt="img" class="avt">
            </a>
        </div>

    </div>
</div>

@include('layouts.guest.footer')

<script type="text/javascript" src="{{asset('assets/guest/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/guest/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/guest/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/guest/js/swiper-bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/guest/js/carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/guest/js/apexcharts.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/guest/js/chart.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/guest/js/line-chart.js')}}"></script>
</body>
</html>
