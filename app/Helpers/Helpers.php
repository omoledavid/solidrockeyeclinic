<?php

use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;

function gs($key = null)
{
    $general = Cache::get('GeneralSetting');
    if (!$general) {
        $general = GeneralSetting::first();
        Cache::put('GeneralSetting', $general);
    }
    if ($key) {
        return @$general->$key;
    }

    return $general;
}
function logo()
{
    if (Schema::hasTable('general_settings')) {
        return gs('dark_logo') ? env('APP_URL') . '/storage/' . gs('logo') : asset('assets/images/logo.png');
    }

    return asset('assets/images/logo.png');
}
function whiteLogo()
{
    if (Schema::hasTable('general_settings')) {
        return gs('logo') ? env('APP_URL') . '/storage/' . gs('logo') : asset('assets/images/logo-white.png');
    }

    return asset('assets/images/logo-white.png');
}
function favicon()
{
    if (Schema::hasTable('general_settings')) {
        return gs('favicon') ? env('APP_URL') . '/storage/' . gs('favicon') : asset('assets/images/favicon.png');
    }

    return asset('assets/images/favicon.png');
}
