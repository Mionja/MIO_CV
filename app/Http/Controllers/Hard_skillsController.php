<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hard_skillsController extends Controller
{
    public function index()
    {
        return view('hard_skill.index');
    }
}
