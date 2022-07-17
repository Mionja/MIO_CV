<?php

namespace App\Http\Controllers;

use App\Models\SoftSkill;
use Illuminate\Http\Request;

class Soft_skillsController extends Controller
{
    public function index()
    {
        $s_skill = SoftSkill::orderBy('id')->paginate(5);
        return view('soft_skill.index', compact('s_skill'));
    }
    public function create()
    {
        return view('soft_skill.add');
    }

    public function store(Request $request)
    {
        $name = $request-> name;;

        SoftSkill::create([
            'name'=>$name,
        ]);

        return redirect()->route('s_skill.index');
    }

    public function edit($id)
    {
        $s_skill = SoftSkill::find($id);
        
        return view('soft_skill.edit',compact('s_skill'));
    }

    public function show(Request $request, $id)
    {
        $s_skill = SoftSkill::find($id);

        $name = $request-> name;

        $s_skill->update(['name'=>$name,]);

        return redirect()->route('s_skill.index');
    }


    public function destroy($id)
    {
        $act = SoftSkill::find($id);
        $act->delete();

        return redirect()->route('s_skill.index');
    }
}



