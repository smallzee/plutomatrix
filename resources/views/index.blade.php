@extends('layouts.frontend.app')

@push('content')


    <!-- Banner Top -->
    <section class="banner-top style-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="banner-top__content">
                        <div class="sale-top">
                            <a href="#">75% SAVE</a>
                            <p>For the Black Friday weekend</p>
                        </div>
                        <h2 class="title">Powering Data for the new equity blockchain.</h2>
                        <p class="desc">The platform helps investors to make easy to purchase and sell their tokens</p>

                        <div class="button">
                            <a class="btn-action" href="{{route('register')}}"><span>REGISTER & BUY TOKEN NOW</span><span class="icon-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Banner Top -->
@endpush
