@extends('layouts.frontend.app')

@push('content')
    <!-- Banner Top -->
    <section class="banner-top style-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="banner-top__content">

                        <h2 class="title">Powering Data for the new equity blockchain.</h2>
                        <p class="desc">The platform helps investors to make easy to purchase and sell their tokens</p>

                        <div class="button">
                            <a class="btn-action" href="{{route('register')}}"><span>REGISTER & BUY PACKAGE</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Banner Top -->

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
                            <h3 class="title">What is ICO?</h3>
                            <p>The world first platform to reward investors and traders build on ICO</p>
                        </div>

                        <div class="list-icon-box" data-aos="fade-up" data-aos-duration="800">
                            <div class="icon-box">
                                <div class="icon"><span class="icon-users"></span></div>
                                <div class="content">
                                    <h5>Decentralized Platform</h5>
                                    <p class="fs-14">The platform helps investors to make easy to purchase and sell their tokens</p>
                                </div>
                            </div>
                            <div class="icon-box">
                                <div class="icon"><span class="icon-internet"></span></div>
                                <div class="content">
                                    <h5>Crowd Wisdom</h5>
                                    <p class="fs-14">The process of taking into account the collective opinion of a group</p>
                                </div>
                            </div>
                            <div class="icon-box">
                                <div class="icon"><span class="icon-users"></span></div>
                                <div class="content">
                                    <h5>Decentralized Platform</h5>
                                    <p class="fs-14">The platform helps investors to make easy to purchase and sell their tokens</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Features -->

    <!-- Section Choose -->
    <section class="features" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-text center">
                        <h3 class="title">
                            Why Choose Our Token?
                        </h3>
                        <p class="fs-17 mt-12">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui official
                        </p>
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
                                <h5 class="h5">Mobie Payment</h5>
                                <p class="mt-9">The process of taking into account the collective opinion of a group</p>
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
                                <h5 class="h5">Investment Projects</h5>
                                <p class="mt-9">The platform helps investors to make easy to purchase and sell their tokens</p>
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
                                <h5 class="h5">Protect the identity</h5>
                                <p class="mt-9">The platform helps investors to make easy to purchase and sell their tokens</p>
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
                                <h5 class="h5">Security your money</h5>
                                <p class="mt-9">The process of taking into account the collective opinion of a group</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Choose -->
@endpush
