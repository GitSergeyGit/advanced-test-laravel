<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use Hillel\Geo\Test\GeoServiceInterface;

class GeoIpController extends Controller
{
    public function index(GeoServiceInterface $reader)
    {
//        $userAgent = request()->userAgent();
        $ip = request()->ip();
        if($ip == '127.0.0.1') {
            $ip = request()->server->get('HTTP_X_FORWARDED_FOR');
        }

        $reader->parse($ip);
        $isoCode = $reader->getIsoCode();
        $country = $reader->getCountry();
        dd($isoCode, $country, $ip);
//        if (!empty($isoCode) && !empty($country)) {
//            Visit::create([
//                'ip' => $ip,
//                'country_code' => $country,
//                'continent_code' => $isoCode,
//            ]);
//        }
    }
}
