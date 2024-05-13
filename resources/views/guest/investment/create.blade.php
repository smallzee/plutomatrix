@extends('layouts.guest.app')

@push('content')

    <div class="pt-20 pb-80">
        <div class="tf-container">

            <div class="swiper tf-swiper swiper-wrapper-r mt-12" data-space-between="12" data-preview="1.3" data-tablet="2.3" data-desktop="3">
                <div class="swiper-wrapper">



                </div>
            </div>

            <div class="grid grid-cols-3">
                @foreach($packages as $value)
                    <div class="swiper-slide">
                        <div class="accent-box-v5 bg-menuDark active">
                            <span class="icon-box bg-icon1"><i class="icon-book"></i></span>
                            <div class="mt-12">
                                <a href="#" class="text-small">Set up your wallet</a>
                                <p class="mt-4">Click Create and set up your collection.
                                    Add social links, a description, profile & banner images, and set a secondary sales fee.</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endpush
