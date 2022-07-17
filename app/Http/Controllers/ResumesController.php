<?php

namespace App\Http\Controllers;

use App\Models\Age;
use App\Models\Education;
use App\Models\Objective;
use App\Models\Perso_detail;
use Illuminate\Http\Request;

class ResumesController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        $perso_details = Perso_detail::where('id', '1')->first();
        $obj = Objective::where('id', '1')->first();
        $a = Age::where('id', '1')->first();
        return view("cv", compact('perso_details', 'educations', 'obj', 'a'));
    }
}
