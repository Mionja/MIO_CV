<?php

namespace App\Http\Controllers;

use App\Models\Age;
use Illuminate\Http\Request;

class AgesController extends Controller
{
    public function index()
    {
        $age = Age::with('User')->where('user_id', auth()->user()->id)->get();
        if ($age->isNotEmpty()) 
        {
            return view('age.edit', compact('age'));    
        }
        
        return view('age.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'age' =>  'required'  
        ]);

        $formFields['user_id'] = auth()->user()->id;
        Age::create($formFields);
        
        return redirect()->route('age.index')->with('success', "Old thing XD");
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'age' =>  'required'  
        ]);
        $a = Age::find($id);

        $age = $request -> age;
        $a -> update(['age'=> $age]);
        
        return redirect()->route('age.index')->with('success', "Edited");
    }
}
