@extends('layouts.guest.app')

@push('content')
    <div class="mt-5">
        <div class="tf-container">
            <div class=" accent-box-v2 bg-menuDark">
                <div class="d-flex justify-content-between align-items-center">
                    <span>Deposit Amount:</span>
                </div>
                <div class="mt-12 box-input-field">
                    <input type="text" value="50" required class="clear-ip value_input ip-style2">
                    <i class="icon-close"></i>
                </div>
            </div>
            <h5 class="mt-20">Amount Money</h5>
            <ul class="grid-3 gap-12 mt-16">
                <li><a href="javascript:void(0);" class="tag-money active text-small">$50</a></li>
                <li><a href="javascript:void(0);" class="tag-money text-small">$100</a></li>
                <li><a href="javascript:void(0);" class="tag-money text-small">$200</a></li>
                <li><a href="javascript:void(0);" class="tag-money text-small">$500</a></li>
                <li><a href="javascript:void(0);" class="tag-money text-small">$1000</a></li>
                <li><a href="javascript:void(0);" class="tag-money text-small">$2000</a></li>
            </ul>

            <div class="mt-5">
                <div class="inner-bar">
                    <a href="payment-confirm.html" class="tf-btn lg primary">Confirm</a>
                </div>
            </div>
        </div>
    </div>


@endpush
