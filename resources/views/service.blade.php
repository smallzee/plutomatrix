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
