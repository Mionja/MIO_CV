<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationsController extends Controller
{
    public function index()
    {
        $formations = Formation::with('User')->where('user_id', auth()->user()->id)->paginate(3);
        return view('formation.index', compact('formations'));
    }
    public function create()
    {
        return view('formation.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>  'required'    ,
            'about' => 'required'         ,
            'start'  => 'required'      ,
            'end'   => 'required'       
        ]);
        $name = $request-> name;
        $about = $request-> about;
        $start = $request-> start;
        $end = $request-> end;
        $user_id = $request-> user_id;

        Formation::create([
            'user_id' => $user_id,
            'name'=>$name,
            'about'=>$about,
            'start'=>$start,
            'end'=>$end,
        ]);

        return redirect()->route('formation.index')->with('success', "Registered");
    }

    public function edit($id)
    {
        $frm = Formation::find($id);
        
        return view('formation.edit',compact('frm'));
    }


    public function update(Request $request, $id)
    {
        $frm = Formation::find($id);

        $name = $request-> name;
        $about = $request-> about;
        $start = $request-> start;
        $end = $request-> end;

        $frm->update([
            'name'=>$name,
            'about'=>$about,
            'start'=>$start,
            'end'=>$end,
        ]);
        return redirect()->route('formation.index')->with('success', "Edited");
    }


    public function destroy($id)
    {
        $frm = Formation::find($id);
        $frm->delete();

        return redirect()->route('formation.index');
    }
}


