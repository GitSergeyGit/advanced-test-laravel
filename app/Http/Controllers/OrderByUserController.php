<?php

namespace App\Http\Controllers;

use App\Models\User;

class OrderByUserController
{
    public function __invoke($id)
    {
        $user = User::find($id);
        $orders = $user->orders()->paginate(10);
        echo view('user/orders', compact('user', 'orders'));
    }
}
