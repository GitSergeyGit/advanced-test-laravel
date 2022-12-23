<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return view('admin/todo/index', [
            'todos' => Todo::paginate(5)
        ]);
    }
}
