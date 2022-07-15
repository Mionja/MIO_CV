<?php

namespace App\Http\Controllers;

use App\Models\Perso_detail;
use Illuminate\Http\Request;

class ResumesController extends Controller
{
    public function index()
    {
        $perso_details = Perso_detail::where('id', '1')->first();
        return view("cv.index", compact('perso_details'));
    }
}
