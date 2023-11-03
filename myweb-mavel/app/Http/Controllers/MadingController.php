<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MadingController extends Controller
{
    public function index()
    {
        return view('settings.mading');
    }
}
