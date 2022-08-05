<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use Illuminate\Http\Request;

class ObjectivesController extends Controller
{
    public function index($id = 1)
    {
        $obj = Objective::find($id);
        return view('objective.index', compact('obj'));
    }

    public function update(Request $request, $id = 1)
    {
        $request->validate([
            'objective' =>  'required'  
        ]);

        $obj = Objective::find($id);

        $objective = $request->objective;
        $obj->update(['objective'=> $objective]);

        return redirect()->route('objective.index')->with('success', "Enregistré");
    }
}
