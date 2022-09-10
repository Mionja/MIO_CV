<?php

namespace App\Http\Controllers;

use App\Models\SoftSkill;
use Illuminate\Http\Request;

class Soft_skillsController extends Controller
{
    public function index()
    {
        $s_skill = SoftSkill::with('User')->where('user_id', auth()->user()->id)->paginate(5);
        return view('soft_skill.index', compact('s_skill'));
    }
    public function create()
    {
        return view('soft_skill.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required'     ,
            'name' =>  'required'  
        ]);
        $user_id = $request-> user_id;
        $name = $request-> name;;

        SoftSkill::create([
            'user_id' => $user_id,
            'name'=>$name,
        ]);


        return redirect()->route('s_skill.index')->with('success', "Vita le insertion");
    }

    public function edit($id)
    {
        $s_skill = SoftSkill::find($id);
        
        return view('soft_skill.edit',compact('s_skill'));
    }

    public function show(Request $request, $id)
    {
        $request->validate([
            'name' =>  'required'  
        ]);

        $s_skill = SoftSkill::find($id);

        $name = $request-> name;

        $s_skill->update(['name'=>$name,]);

        return redirect()->route('s_skill.index')->with('success', "Modifié");
    }


    public function destroy($id)
    {
        $act = SoftSkill::find($id);
        $act->delete();

        return redirect()->route('s_skill.index')->with('error', "Une ligne a été supprimé");
    }
}



