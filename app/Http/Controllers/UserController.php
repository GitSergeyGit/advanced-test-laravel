<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

class UserController
{
    public function index()
    {
        $url = Storage::disk('gcs')->temporaryUrl(
            'privet_example.txt', now()->addMinutes(1)
        );
        dd($url);
//        Storage::prepend('example.txt', 'Prepended Text');
//
//        Storage::append('example.txt', 'Appended Text');
//
////        return Storage::disk('local')->download('product.json');
////        echo asset('storage/example.txt');
//        $url = Storage::url('example.txt');
//        dd($url);

//        Storage::disk('public')->put('example.txt', 'Contents');
//
////        $users = User::paginate(15);
//        $users = User::with(['orders', 'orders.products'])->get();
//        return view('user/index', compact('users'));
    }

    public function orders($id)
    {
        $user = User::find($id);
        $orders = $user->orders()->paginate(10);
        return view('user/orders', compact('user', 'orders'));
    }
}
