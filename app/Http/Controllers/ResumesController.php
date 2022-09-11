<?php

namespace App\Http\Controllers;

use App\Models\Age;
use App\Models\Activity;
use App\Models\Language;
use App\Models\Education;
use App\Models\Formation;
use App\Models\HardSkill;
use App\Models\Objective;
use App\Models\SoftSkill;
use App\Models\Experience;
use App\Models\Perso_detail;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;    

class ResumesController extends Controller
{
    public function index()
    {
        $h_skill = HardSkill::with('User')->where('user_id', auth()->user()->id)->get();
        $formations = Formation::with('User')->where('user_id', auth()->user()->id)->get();
        $experiences = Experience::with('User')->where('user_id', auth()->user()->id)->get();
        $languages = Language::with('User')->where('user_id', auth()->user()->id)->get();
        $s_skill = SoftSkill::with('User')->where('user_id', auth()->user()->id)->get();
        $activities = Activity::with('User')->where('user_id', auth()->user()->id)->get();
        $educations = Education::with('User')->where('user_id', auth()->user()->id)->get();
        $obj = Objective::with('User')->where('user_id', auth()->user()->id)->get();
        $a = Age::with('User')->where('user_id', auth()->user()->id)->get();

        $perso_details = Perso_detail::with('User')->where('user_id', auth()->user()->id)->get();
        if ($perso_details->isNotEmpty()) 
        {
            return view("resume.index", compact('perso_details', 'educations', 'obj', 'a', 's_skill', 'activities', 'languages', 'experiences','formations','h_skill'));    
        }
        return view('resume.nothing');
    }

    public function download_pdf()
    {
        $not_working = 'It is not working yet';
        return redirect()->route('resume')->with('error', $not_working);
    }

}
