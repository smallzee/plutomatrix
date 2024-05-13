@extends('layouts.frontend.app')

@push('content')
    <!-- Banner Top -->
    <section class="banner-top style-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="banner-top__content">

                        <h2 class="title">The most secure crypto currency</h2>

                        <div class="button">
                            <a class="btn-action" href="{{route('register')}}"><span>REGISTER & BUY PACKAGE</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Banner Top -->
    <coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,eos,dogecoin,ripple,litecoin,tron" currency="usd" background-color="#fff" locale="en"></coingecko-coin-price-marquee-widget>

    <!-- Section Features -->
    <section class="about style-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-12">
                    <div class="about__image">
                        <img src="{{static_asset('layout/Graphic.png')}}" alt="ICOLand">
                    </div>
                </div>
                <div class="col-xl-5 col-md-12">
                    <div class="about__content">
                        <div class="block-text">
                            <h3 class="title">What is {{ config('app.name') }}?</h3>
                        </div>

                        <div class="list-icon-box" data-aos="fade-up" data-aos-duration="800">
                            <div class="icon-box">
                                <div class="icon"><span class="icon-internet"></span></div>
                                <div class="content">
                                    <p class="fs-14">{{ config('app.name') }} is a cryptocurrency investment company that is responsive with trades and mining of various cryptocurrencies we offer returns of good amount of profits daily helping us in paying participants. Created in 2016 to help cater for the need for verified investment companies, {{ config('app.name') }} also partners with industry leading companies to provide our customers with the best return plans in the investment market. Be sure to get the best because we are the best.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Features -->

    <!-- Section features -->
    <section class="features style-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-text center">
                        <h3 class="heading">
                            {{ config('app.name') }} Investment Package
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach(\App\Models\Packages::all() as $value)
                    <div class="col-xl-3 col-md-6 mb-5">
                        <div class="features-box-4 center">
                            <div class="icon">
                                <span class="icon-code1"></span>
                            </div>
                            <div class="features-box-content">
                                <a href="#" class="h5 title">{{ ucwords($value->name) }} </a>
                                <table class="table table-borderless text-white">
                                    <tr>
                                        <td>Minimum Amount : </td>
                                        <td>${{ number_format($value->min_deposit,2) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Maximum Amount : </td>
                                        <td>${{ number_format($value->max_deposit,2) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Percentage : </td>
                                        <td>{{ $value->interest }}%</td>
                                    </tr>
                                    <tr>
                                        <td>Duration : </td>
                                        <td>{{ $value->duration }}</td>
                                    </tr>
                                    <tr>
                                        <td>Referral Percentage : </td>
                                        <td>{{ $value->referral_percentage }}%</td>
                                    </tr>
                                </table>
                                <a href="{{route('investment.edit',base64_encode($value->id))}}" class="action">Invest Now<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.4297 5.92999L20.4997 12L14.4297 18.07" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.5 12H20.33" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Section features -->
    <!-- Section Choose -->
    <section class="features" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-text center">
                        <h3 class="title">
                            Why Choose {{ config('app.name') }}?
                        </h3>
                        What we are offering our clients
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="choose__box" data-aos="fade-up" data-aos-duration="800">
                        <div class="choose__box-icon center">
                            <div class="icon">
                                <span class="icon-mobile"></span>
                            </div>
                            <div class="content">
                                <h5 class="h5">BITCOIN TRANSACTION</h5>
                                <p class="mt-9">A transaction is a transfer of Bitcoin value that is broadcast to the network and collected into blocks.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="choose__box" data-aos="fade-up" data-aos-duration="1000">
                        <div class="choose__box-icon center">
                            <div class="icon">
                                <span class="icon-startup"></span>
                            </div>
                            <div class="content">
                                <h5 class="h5">BITCOIN MINING</h5>
                                <p class="mt-9">Mining is the process by which transactions are verified and added to the public ledger, known as the block chain, and also the means through which new bitcoin are released.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="choose__box" data-aos="fade-up" data-aos-duration="1200">
                        <div class="choose__box-icon center">
                            <div class="icon">
                                <span class="icon-vuesax"></span>
                            </div>
                            <div class="content">
                                <h5 class="h5">BITCOIN INVESTMENT</h5>
                                <p class="mt-9">We are one of the few companies that provide our investors with unmatchable returns on investment.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="choose__box" data-aos="fade-up" data-aos-duration="1400">
                        <div class="choose__box-icon center">
                            <div class="icon">
                                <span class="icon-mobile"></span>
                            </div>
                            <div class="content">
                                <h5 class="h5">Covered By Insurance</h5>
                                <p class="mt-9">An escrow is a legal concept where a financial instrument or an asset is held by a third party on behalf of two other parties that are in the process of completing a transaction.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Choose -->
@endpush
