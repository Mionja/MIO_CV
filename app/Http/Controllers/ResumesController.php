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
        try
        {
            $pdf = \App::make('dompdf.wrapper')->setPaper('a4', 'landscape');
            $pdf->loadHtml($this->view_pdf());

            return $pdf->stream();
        } 
        catch(\ Exception $e)
        {
            return redirect()->route('resume')->with("error", $e);
        }
    }

    public function view_pdf()
    {
        $age = Age::with('User')->where('user_id', auth()->user()->id)->get();
        $perso_details = Perso_detail::with('User')->where('user_id', auth()->user()->id)->get();

        $output = '
        <head>
        <meta charset="utf-8">
        <title>Mio_CV</title>

        <link href="css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bracket.css">
        <link href="css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/styleCV.css">
        <link rel="stylesheet" href="css/orbit-1.css">
        <script src="js/all.min.js}"></script>
        </head>
        <body>
        <div class="wrapper mt-lg-5">
            <div class="sidebar-wrapper">
                <div class="profile-container">
        ';

        foreach($perso_details as $perso_details)
        {
            if($perso_details->photo)
            {
                $output .= '<img src="img/profile_pic/'.$perso_details->photo.'" alt="photo" class="mr-3 mt-3 rounded-circle border" width="200" height="200">';
            }
            $output .= '<h2 class="name">'.$perso_details->nom.'</h2>';
        
        
            if($age->isNotEmpty())
            {
                foreach($age as $a)
                {
                    $output .= '<h3 class="tagline">'.$a->age.'</h3>';
                }       
            }

            $output .= '</div>';
            $output .= '<div class="contact-container container-block">
                <ul class="list-unstyled contact-list">

                    <li class="email"><i class="fa-solid fa-envelope"></i><a href="mailto: '.$perso_details->email.'">'.$perso_details->email.'</a></li>
                    <li class="phone"><i class="fa-solid fa-phone"></i><a href="tel:{{$perso_details->num}}">0'.$perso_details->num.'</a></li>
                    <li class="linkedin"><i class="fa-brands fa-linkedin-in"></i><a href="#" target="_blank">linkedin.com/in/Mionj</a></li>
                    <li class="github"><i class="fa-brands fa-github"></i><a href="#" target="_blank">github.com/Mionja</a></li>
                    <li class="address"><i class="fa-brands fa-location"></i>'.$perso_details->address.'</li>
                </ul>
            </div>';
        }

        $output .= 'test';
        $output .= '
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bracket.js"></script>
        </body>';
    
        return $output;
    }

}
