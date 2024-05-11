<?php
if (!function_exists('static_asset')){
    function static_asset($src){
        return asset('assets/images/'.$src);
    }
}
