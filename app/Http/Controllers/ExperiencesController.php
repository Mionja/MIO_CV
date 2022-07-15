<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    public function index()
    {
        return view('experience.index');
    }
}
