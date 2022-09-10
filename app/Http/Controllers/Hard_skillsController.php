<?php

namespace App\Http\Controllers;

use App\Models\HardSkill;
use Illuminate\Http\Request;

class Hard_skillsController extends Controller
{
    public function index()
    {
        $h_skill = HardSkill::with('User')->where('user_id', auth()->user()->id)->get();
        return view('hard_skill.index', compact('h_skill'));
    }
    public function create()
    {
        return view('hard_skill.add');
    }

    public function store(Request $request)
    {
        $name = $request-> name;
        $level = $request-> level;
        $user_id = $request-> user_id;

        HardSkill::create([
            'user_id' => $user_id,
            'name'=>$name,
            'level'=>$level,
        ]);

        return redirect()->route('h_skill.index');
    }

    public function edit($id)
    {
        $h_skill = HardSkill::find($id);
        
        return view('hard_skill.edit',compact('h_skill'));
    }

    public function show(Request $request, $id)
    {
        $h_skill = HardSkill::find($id);

        $name = $request-> name;
        $level = $request-> level;

        $h_skill->update(['name'=>$name, 'level'=>$level,]);

        return redirect()->route('h_skill.index');
    }


    public function destroy($id)
    {
        HardSkill::find($id)->delete();

        return redirect()->route('h_skill.index');
    }
}



