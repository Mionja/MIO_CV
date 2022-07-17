<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    public function index()
    {
        $educations = Education::orderBy('id')->paginate(5);
        return view('education.index', compact('educations'));
    }

    public function create()
    {
        return view('education.add');
    }

    public function store(Request $request)
    {
        $degree = $request-> degree;
        $school = $request-> school;
        $grade = $request-> grade;
        $year = $request-> year;

        Education::create([
            'degree' => $degree,
            'school' => $school,
            'grade' => $grade,
            'year' => $year,
        ]);
        return redirect()->route('education.index');
    }

    public function edit($id)
    {
        $education = Education::find($id);
        return view('education.edit', compact('education'));
    }

    public function update(Request $request, $id)
    {
        $education = Education::find($id);

        $degree = $request-> degree;
        $school = $request-> school;
        $grade= $request-> grade;
        $year = $request-> year;

        $education -> update(['degree'=>$degree,'school'=>$school, 'grade'=> $grade, 'year'=> $year ]);

        return redirect() -> route('education.index');
    }

    public function destroy($id)
    {
        Education::find($id) -> delete();
        return redirect() -> route('education.index');
    }
    
    
}
