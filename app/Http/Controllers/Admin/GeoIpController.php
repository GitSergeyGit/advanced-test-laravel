<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use App\Services\Geo\GeoServiceInterface;

class GeoIpController extends Controller
{
    public function index(GeoServiceInterface $reader)
    {

        $dawdawd = Order::getDefaultOrder();


        $userAgent = request()->userAgent();
        dd($userAgent);
        $ip = request()->ip();
        if($ip == '127.0.0.1') {
            $ip = request()->server->get('HTTP_X_FORWARDED_FOR');
        }

        $reader->parse($ip);
        $isoCode = $reader->getIsoCode();
        $country = $reader->getCountry();
        if (!empty($isoCode) && !empty($country)) {
            Visit::create([
                'ip' => $ip,
                'country_code' => $country,
                'continent_code' => $isoCode,
            ]);
        }
    }
}
