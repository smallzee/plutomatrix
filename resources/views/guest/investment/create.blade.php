@extends('layouts.guest.app')

@push('content')

    <div class="pt-20 pb-80">
        <div class="tf-container">

            <div class="grid grid-cols-3">
                @foreach($packages as $value)
                    <a href="">
                        <div class="accent-box-v5 bg-menuDark mb-3 active">
                            <div class="mt-12">
                                <h5 class="mb-3">{{ $value->name }}</h5>
                                <ol>
                                    <li>Minimum Deposit</li>
                                    <li>${{ number_format($value->min_deposit,2) }}</li>
                                </ol>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
    </div>
@endpush
