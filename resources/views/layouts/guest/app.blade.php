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
    <link rel="shortcut icon" href="{{static_asset('logo.png')}}" type="image/x-icon">
</head>
<body>

@include('flash')

<div class="header-style2 fixed-top bg-menuDark">
    <div class="d-flex justify-content-between align-items-center gap-14">
        <div class="box-account style-2">
            <a href="{{route('dashboard.index')}}">
                <img src="{{static_asset('avt/avt2.jpg.png')}}" alt="img" class="avt">
            </a>
        </div>
    </div>
</div>

<div class="pt-68 pb-80">
    <div class="bg-menuDark tf-container">
        <div class="pt-12 pb-12 mt-4">
            <h5><span>Balance</span></h5>
            <h1 class="mt-16"><a href="#">$2159,34</a></h1>
        </div>
    </div>
</div>


@include('layouts.guest.footer')

<script type="text/javascript" src="{{asset('assets/guest/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/guest/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/guest/js/swiper-bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/guest/js/carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/guest/js/apexcharts.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/guest/js/chart.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/guest/js/line-chart.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/guest/js/main.js')}}"></script>
</body>
</html>
