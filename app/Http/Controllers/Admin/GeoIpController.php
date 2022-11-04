<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\TestEmail;
use App\Mail\WelcomeMail;
use App\Models\Visit;
use Hillel\Geo\Test\GeoServiceInterface;
use Illuminate\Support\Facades\Mail;

class GeoIpController extends Controller
{
    public function index(GeoServiceInterface $reader)
    {
//        Mail::to('some@text.com')->send(new WelcomeMail('Serhii'));
//        Mail::to('some@text.com')->queue(new WelcomeMail('Serhii'));
//        $mail = (new WelcomeMail('Serhii'))->onQueue('mail-welcome');
//        Mail::to('some@text.com')->queue($mail);
//        TestEmail::dispatch('test message');

////        $userAgent = request()->userAgent();
//        $ip = request()->ip();
//        if($ip == '127.0.0.1') {
//            $ip = request()->server->get('HTTP_X_FORWARDED_FOR');
//        }
//
//        $reader->parse($ip);
//        $isoCode = $reader->getIsoCode();
//        $country = $reader->getCountry();
//        dd($isoCode, $country, $ip);
////        if (!empty($isoCode) && !empty($country)) {
////            Visit::create([
////                'ip' => $ip,
////                'country_code' => $country,
////                'continent_code' => $isoCode,
////            ]);
////        }
    }
}
