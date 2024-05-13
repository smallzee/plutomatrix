@extends('layouts.guest.app')

@push('content')

    <div class="pt-20 pb-80">
        <div class="tf-container">
            <div class="row">
                @foreach($packages as $value)
                    <div class="col-sm-6">
                        <div class="accent-box-v5 bg-menuDark mb-3 active">
                            <div class="mt-12">
                                <h4 class="mb-3 text-center">{{ ucwords($value->name) }}</h4>
                                <table class="table table-bordered text-white">
                                    <tr>
                                        <td>Minimum Deposit : </td>
                                        <td>${{ number_format($value->min_deposit,2) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Maximum Deposit : </td>
                                        <td>${{ number_format($value->max_deposit,2) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Return : </td>
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

                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="" class="tf-btn lg primary">Invest Now</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#" data-interest="{{ $value->interest }}" class="tf-btn lg primary">RIO Calculator</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endpush
