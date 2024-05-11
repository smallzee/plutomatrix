<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title }} - {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{static_asset('logo.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('assets/backend/dist/css/vendors/litepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/dist/css/vendors/tippy.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/dist/css/vendors/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/dist/css/themes/waveform.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/dist/css/app.css')}}"> <!-- END: CSS Assets-->
</head>
<body>

@include('flash')


@include('layouts.backend.header')

@stack('content')

@include('layouts.backend.footer')


<!-- BEGIN: Vendor JS Assets-->
<script src="{{asset('assets/backend/dist/js/vendors/dom.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/tailwind-merge.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/lucide.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/dayjs.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/litepicker.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/tippy.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/tab.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/popper.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/dropdown.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/simplebar.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/chartjs.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/transition.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/modal.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/base/theme-color.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/base/lucide.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/base/litepicker.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/base/tippy.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/utils/colors.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/utils/helper.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/report-line-chart-1.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/report-bar-chart-1.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/report-line-chart-2.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/report-donut-chart-1.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/themes/waveform.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/quick-search.js')}}"></script> <!-- END: Vendor JS Assets-->
<!-- BEGIN: Pages, layouts, components JS Assets-->
<!-- END: Pages, layouts, components JS Assets-->
</body>
</html>
