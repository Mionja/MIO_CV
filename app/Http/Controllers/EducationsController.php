<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationsController extends Controller
{
    public function index()
    {
        return view('education.index');
    }

    public function create()
    {
        return view('education.add');
    }
}
