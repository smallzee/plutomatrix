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
@endpush
