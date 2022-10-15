<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Pagination\Paginator;

class UserController
{
    public function index()
    {
//        $users = User::paginate(15);
        $users = User::with(['orders', 'orders.products'])->get();
        return view('user/index', compact('users'));
    }

    public function orders($id)
    {
        $user = User::find($id);
        $orders = $user->orders()->paginate(10);
        return view('user/orders', compact('user', 'orders'));
    }
}
