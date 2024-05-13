@extends('layouts.guest.app')

@push('content')
    <div class="bg-menuDark tf-container">
        <div class="pt-12 pb-12 mt-4">
            <div class="wrap-filter-swiper">
                <h5><a href="#" class="cryptex-rating">{{ $page_title }}</a></h5>
                <!-- </div> -->
            </div>
            <div class="tab-content mt-8">
                <div class="tab-pane fade show active " id="favorites" role="tabpanel">
                    <div class="d-flex justify-content-between">
                        Name
                        <p class="d-flex gap-8">
                            <span>Amount</span>
                            <span>Reference</span>
                            <span>Expiry Date</span>
                            <span>Status</span>
                        </p>
                    </div>
                    <ul class="mt-16">
                        @foreach($investments as $value)
                            <li>
                                <a href="{{route('investment.show',base64_encode($value->id))}}" class="coin-item style-2 gap-12">
                                    <div class="content mb-3">
                                        <div class="title">
                                            <p class="mb-4 text-button">{{ ucwords($value->package->name) }}</p>
                                            <span class="text-secondary">{{ date('d-m-Y H:i:s:a',strtotime($value->updated_at)) }}</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-12">
                                            <span class="text-small">${{ number_format($value->amount,2) }}</span>
                                            <span class="text-small">{{ $value->reference }}</span>
                                            <span class="text-small">{{ date('Y-m-d',$value->duration) }}</span>
                                            <span class="coin-btn decrease">{{ ucwords($value->status) }}</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    {{ $investments->links() }}
                </div>
            </div>
        </div>
    </div>
@endpush
