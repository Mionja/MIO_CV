<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgesController extends Controller
{
    public function index()
    {
        return view('age');
    }
}
