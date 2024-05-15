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
        <link rel="stylesheet" href="{{asset('assets/guest/css/swiper-bundle.min.css')}}">
        <link rel="shortcut icon" href="{{static_asset('logo.png')}}" type="image/x-icon">

        <script type="text/javascript" src="{{asset('assets/guest/js/jquery.min.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
        <script type="text/javascript" src="{{asset('assets/guest/js/tradingview.js')}}"></script>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
                async>
            {
                "colorTheme":"light"
            }
        </script>

    {{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    </head>
    <body>

    @include('flash')

    <div class="header-style2 fixed-top bg-menuDark">
        <div class="d-flex justify-content-between align-items-center">
            <a class="box-account" href="{{url('user/dashboard')}}">
                <img src="{{static_asset('avt/avt2.jpg.png')}}" alt="img" class="avt">
                <div class="info">
                    <p class="text-xsmall text-secondary">Welcome back!</p>
                    <h6>{{ ucwords(auth()->user()->name) }} - {{ $page_title }}</h6>
                </div>
            </a>
        </div>
    </div>

    <div class="pt-68 pb-80">
        <div class="bg-menuDark tf-container">

            <coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,eos,dogecoin,ripple,litecoin,tron" currency="usd" background-color="#fff" locale="en"></coingecko-coin-price-marquee-widget>
            <div class="pt-12 pb-12 ">
                <h5><span>Balance</span></h5>
                <h1 class="mt-16"><a href="#">${{ number_format(auth()->user()->wallet->balance,2) }}</a></h1>
                <ul class="mt-16 grid-4 m--16">
                    <li>
                        <a href="{{route('investment.create')}}" class="tf-list-item d-flex flex-column gap-8 align-items-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i class="icon icon-way"></i></span>
                            Invest
                        </a>
                    </li>
                    <li>
                        <a href="{{route('withdraw.index')}}" class="tf-list-item d-flex flex-column gap-8 align-items-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i class="icon icon-way2"></i></span>
                            Withdraw
                        </a>
                    </li>
                    <li>
                        <a href="{{route('deposits.create')}}" class="tf-list-item d-flex flex-column gap-8 align-items-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i class="icon icon-wallet"></i></span>
                            Make Deposit
                        </a>
                    </li>
                    <li>
                        <a href="{{route('referral.index')}}" class="tf-list-item d-flex flex-column gap-8 align-items-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i class="icon icon-exchange"></i></span>
                            Referral
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bg-menuDark tf-container">
            <div class="pt-12  pb-12 mt-3">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="#" class="coin-box d-block mb-3">
                            <div class="coin-logo">
                                <div class="title">
                                    <h6>Deposit</h6>
                                </div>
                            </div>
                            <div class="mt-8 mb-8 coin-chart">
                                <div id="line-chart-1"></div>
                            </div>
                            <div class="coin-price d-flex justify-content-between">
                                <h5>${{ number_format(auth()->user()->wallet->deposit,2) }}</h5>
                            </div>
                            <div class="blur bg1">
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="#" class="coin-box d-block mb-3">
                            <div class="coin-logo">
                                <div class="title">
                                    <h6>ROI</h6>
                                </div>
                            </div>
                            <div class="mt-8 mb-8 coin-chart">
                                <div id="line-chart-1"></div>
                            </div>
                            <div class="coin-price d-flex justify-content-between">
                                <h5>${{ number_format(auth()->user()->wallet->profit,2) }}</h5>
                            </div>
                            <div class="blur bg4">
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="#" class="coin-box d-block mb-3">
                            <div class="coin-logo">
                                <div class="title">
                                    <h6>Active Investment</h6>
                                </div>
                            </div>
                            <div class="mt-8 mb-8 coin-chart">
                                <div id="line-chart-2"></div>
                            </div>
                            <div class="coin-price d-flex justify-content-between">
                                <h5>${{ number_format(auth()->user()->wallet->active_investment,2) }}</h5>
                            </div>
                            <div class="blur bg2">
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="#" class="coin-box d-block mb-3">
                            <div class="coin-logo">
                                <div class="title">
                                    <h6>Withdrawn</h6>
                                </div>
                            </div>
                            <div class="mt-8 mb-8 coin-chart">
                                <div id="line-chart-3"></div>
                            </div>
                            <div class="coin-price d-flex justify-content-between">
                                <h5>${{ number_format(auth()->user()->wallet->total_withdrawn,2) }}</h5>
                            </div>
                            <div class="blur bg3">
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        @stack('content')
    </div>

    @include('layouts.guest.footer')

    <script type="text/javascript" src="{{asset('assets/guest/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/guest/js/swiper-bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/guest/js/carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/guest/js/apexcharts.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/guest/js/chart.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/guest/js/line-chart.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/guest/js/main.js')}}"></script>
    </body>
    </html>
