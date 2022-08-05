<?php

namespace App\Http\Controllers;

use App\Models\Age;
use Illuminate\Http\Request;

class AgesController extends Controller
{
    public function index($id = 1)
    {
        $age = Age::find($id);
        //dd($age);
        return view('age', compact('age'));
    }
    
    public function update(Request $request, $id = 1)
    {
        $request->validate([
            'age' =>  'required'  
        ]);
        $a = Age::find($id);

        $age = $request -> age;
        $a -> update(['age'=> $age]);
        
        return redirect()->route('age')->with('success', "Enregistré");
    }
}
