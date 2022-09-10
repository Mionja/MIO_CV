<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    public function index()
    {
        $educations = Education::with('User')->where('user_id', auth()->user()->id)->paginate(3);
        return view('education.index', compact('educations'));
    }

    public function create()
    {
        return view('education.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'degree' =>  'required'  ,
            'school' => 'required'   ,
            'grade'  => 'required'   ,
            'year'   => 'required'   ,
            'user_id'=> 'required'    
        ]);


        $degree = $request-> degree;
        $school = $request-> school;
        $grade = $request-> grade;
        $year = $request-> year;
        $user_id = $request-> user_id;

        Education::create([
            'user_id' => $user_id,
            'degree' => $degree,
            'school' => $school,
            'grade' => $grade,
            'year' => $year,
        ]);

        return redirect()->route('education.index')->with('success', "Enregistré");
    }

    public function edit($id)
    {
        $education = Education::find($id);
        return view('education.edit', compact('education'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'degree' =>  'required'  ,
            'school' => 'required'   ,
            'grade'  => 'required'   ,
            'year'   => 'required'    
        ]);


        $education = Education::find($id);

        $degree = $request-> degree;
        $school = $request-> school;
        $grade= $request-> grade;
        $year = $request-> year;

        $education -> update(['degree'=>$degree,'school'=>$school, 'grade'=> $grade, 'year'=> $year ]);

        return redirect() -> route('education.index')->with('success', "Modifié");
    }

    public function destroy($id)
    {
        Education::find($id) -> delete();
        return redirect() -> route('education.index');
    }
    
    
}
