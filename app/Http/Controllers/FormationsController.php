<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationsController extends Controller
{
    public function index()
    {
        return view('formation.index');
    }
}
