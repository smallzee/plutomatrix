<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title }} -  {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{asset('assets/frontend/app/dist/app.css')}}">
    <link rel="shortcut icon" href="{{static_asset('logo.png')}}" type="image/x-icon">
</head>
<body class="home-main header-fixed" data-magic-cursor="show" >

<!-- Preloading -->
<div class="preloader">
    <div class=" loader">
        <div class="square"></div>
        <div class="path">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class="text-load">Loading :</p>
    </div>
</div>
<!-- End Preloading -->

<!-- MAGIC CURSOR -->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<!-- /MAGIC CURSOR -->

@include('layouts.frontend.header')

@stack('content')

@include('layouts.frontend.footer')

<script src="{{asset('assets/frontend/app/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/frontend/app/js/jquery.easing.js')}}"></script>
<script src="{{asset('assets/frontend/app/js/app.js')}}"></script>
<script src="{{asset('assets/frontend/app/js/count-down.js')}}"></script>
<script src="{{asset('assets/frontend/app/js/aos.js')}}"></script>
<script src="{{asset('assets/frontend/app/js/chart.js')}}"></script>
<script>
    AOS.init();
</script>

<script>
    let  numberPercent = document.querySelectorAll('.countbar')
    let getPercent = Array.from(numberPercent)
    getPercent.map((items) => {
        let startCount = 0
        let progressBar = () => {
            startCount ++
            items.style.width = `${startCount}%`
            if(startCount == items.dataset.percentnumber) {
                clearInterval(stop)
            }
        }
        let stop = setInterval(() => {
            progressBar()
        },25)
    })

</script>
<script>
    const data1 = {
        labels: [
            'Marketing',
            'Bussiness Development',
            'Product Development',
            'Reserve',
            'Reserve',
            'Token Sale'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [25, 25, 10 , 10 , 10 , 20],
            backgroundColor: [
                '#3D88FB',
                '#5637C8',
                '#00D199',
                '#C87B07',
                '#A92535',
                '#9116CD'
            ],
        }]
    };

    const config1 = {
        type: 'doughnut',
        data: data1,
        width:240,
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: false // Hide legend
            },
            scales: {
                y: {
                    display: false // Hide Y axis labels
                },
                x: {
                    display: false // Hide X axis labels
                }
            }
        }
    };

    const myChart1 = new Chart(
        document.getElementById('myChart1'),
        config1
    );
    const myChart2 = new Chart(
        document.getElementById('myChart2'),
        config1
    );
</script>

<script src="{{asset('assets/frontend/app/js/mouse.js')}}"></script>

</body>
</html>
