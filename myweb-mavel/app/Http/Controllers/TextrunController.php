<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextrunController extends Controller
{
    public function index()
    {
        return view('settings.textrun');
    }
}
