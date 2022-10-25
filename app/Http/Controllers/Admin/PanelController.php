<?php

namespace App\Http\Controllers\Admin;

use App\Http\Middleware\TrimStrings;

class PanelController
{
    protected $objectTrimString;
    public function __construct(){
        $this->objectTrimString = new TrimStrings();
    }

    public function index()
    {
        return view('admin/welcome');
    }
}