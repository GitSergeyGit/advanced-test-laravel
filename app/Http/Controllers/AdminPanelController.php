<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminPanelController
{

    public function index()
    {
        $user = request()->user();
//        $user = Auth::user();
        dd($user);
        return view('admin/welcome');
    }
}