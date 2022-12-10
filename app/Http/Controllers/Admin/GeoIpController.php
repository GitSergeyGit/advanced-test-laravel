<?php

namespace App\Http\Controllers\Admin;

use App\Events\CreatedOrder;
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
        // event
        CreatedOrder::dispatch(1, 21);

//        Mail::to('some@text.com')->send(new WelcomeMail('Serhii'));
//        Mail::to('some@text.com')->queue(new WelcomeMail('Serhii'));
//        $mail = (new WelcomeMail('Serhii'))->onQueue('mail-welcome');
//        Mail::to('some@text.com')->queue($mail);
//        TestEmail::dispatch('test message');
//

//        $ip = request()->ip();
//        if($ip == '127.0.0.1') {
//            $ip = request()->server->get('HTTP_X_FORWARDED_FOR');
//        }
//

    }
}
