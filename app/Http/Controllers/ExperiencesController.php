<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{

    public function index()
    {
        $experiences = Experience::orderBy('id')->paginate(3);
        return view('experience.index', compact('experiences'));
    }  


    public function create()
    {
        return view('experience.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company' =>  'required'  ,
            'job' => 'required'   ,
            'start'  => 'required'   ,
            'end'   => 'required'   ,
            'details' => 'required'  
        ]);

        $company = $request-> company;
        $job = $request-> job;
        $start = $request-> start;
        $end = $request-> end;
        $details = $request-> details;

        Experience::create([
            'company'=>$company,
            'job'=>$job,
            'start'=>$start,
            'end'=>$end,
            'details'=>$details,
        ]);

        return redirect()->route('experience.index')->with('success', "Enregistré");
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $exp = Experience::find($id);
        
        return view('experience.edit',compact('exp'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'company' =>  'required'  ,
            'job' => 'required'   ,
            'start'  => 'required'   ,
            'end'   => 'required'   ,
            'details' => 'required'  
        ]);

        $exp = Experience::find($id);

        $company = $request-> company;
        $job = $request-> job;
        $start = $request-> start;
        $end = $request-> end;
        $details = $request-> details;

        $exp->update([
            'company'=>$company,
            'job'=>$job,
            'start'=>$start,
            'end'=>$end,
            'details'=>$details,
        ]);

        return redirect()->route('experience.index')->with('warning', "Modifié");
    }


    public function destroy($id)
    {
        $exp = Experience::find($id);
        $exp->delete();

        return redirect()->route('experience.index');
    }
}
