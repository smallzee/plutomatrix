@extends('layouts.guest.app')

@push('content')
    <div class="tf-container mt-3   ">
        <div class="accent-box-v2 bg-menuDark">
            <script>
                new TradingView.widget(
                    {
                        "width": "100%",
                        "height": 460,
                        "symbol": "BITSTAMP:BTCUSD",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "dark",
                        "style": "1",
                        "locale": "en",
                        "toolbar_bg": "#f1f3f6",
                        "enable_publishing": false,
                        "withdateranges": true,
                        "hide_side_toolbar": false,
                        "allow_symbol_change": true,
                        "show_popup_button": true,
                        "popup_width": "1000",
                        "popup_height": "650",
                        "container_id": "tradingview_e8053"
                    }
                );
            </script>
        </div>
    </div>
@endpush
