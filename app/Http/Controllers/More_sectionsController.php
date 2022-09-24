<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\More_section;


class More_sectionsController extends Controller
{
    public function index()
    {
        $more_section = More_section::with('User')->where('user_id', auth()->user()->id)->paginate(5);
        return view('more_section.index', compact('more_section'));
    }

    public function create()
    {
        return view('more_section.add');
    }

    public function store(Request $request)
    {
        $title = $request-> title;
        $description = $request-> description;
        $user_id = $request-> user_id;

        More_section::create([
            'user_id' => $user_id,
            'title'=>$title,
            'description'=>$description
        ]);

        return redirect()->route('more_section.index');
    }

    public function show($id)
    {
        $more_section = More_section::find($id);
        
        return view('more_section.detail',compact('more_section'));
    }

    public function edit($id)
    {
        $more_section = More_section::find($id);
        
        return view('more_section.edit',compact('more_section'));
    }

    public function update(Request $request, $id)
    {
        $more_section =More_section::find($id);

        $title = $request-> title;
        $description = $request-> description;

        $more_section->update(['title'=>$title,'description'=>$description]);

        return redirect()->route('more_section.index');
    }

    public function destroy($id)
    {
        More_section::find($id)->delete();

        return redirect()->route('more_section.index');
    }
}
