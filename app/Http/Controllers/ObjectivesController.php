<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use Illuminate\Http\Request;

class ObjectivesController extends Controller
{
    public function index()
    {
        $obj = Objective::with('User')->where('user_id', auth()->user()->id)->get();
        if ($obj->isNotEmpty()) 
        {
            return view('objective.index', compact('obj'));    
        }
        return view('objective.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'objective' =>  'required'  ,
            'user_id' => 'required'   
        ]);

        $user_id = $request-> user_id;
        $objective = $request->objective;

        Objective::create(['user_id' => $user_id,'objective'=> $objective]);

        return redirect()->route('objective.index')->with('success', "saved");
    }

    public function update(Request $request, $id = 1)
    {
        $request->validate([
            'objective' =>  'required'  
        ]);

        $obj = Objective::find($id);

        $objective = $request->objective;
        $obj->update(['objective'=> $objective]);

        return redirect()->route('objective.index')->with('success', "Edited");
    }
}
