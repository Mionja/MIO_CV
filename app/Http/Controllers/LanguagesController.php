<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function index()
    {
        $languages = Language::with('User')->where('user_id', auth()->user()->id)->paginate(5);
        return view('language.index', compact('languages'));
    }
    public function create()
    {
        return view('language.add');
    }

    public function store(Request $request)
    {
        $name = $request-> name;
        $user_id = $request-> user_id;

        Language::create([
            'user_id' => $user_id,
            'name'=>$name,
        ]);

        return redirect()->route('language.index');
    }

    public function edit($id)
    {
        $language = Language::find($id);
        
        return view('language.edit',compact('language'));
    }

    public function show(Request $request, $id)
    {
        $language = Language::find($id);

        $name = $request-> name;

        $language->update(['name'=>$name,]);

        return redirect()->route('language.index');
    }


    public function destroy($id)
    {
        $lng = Language::find($id)->delete();

        return redirect()->route('language.index');
    }
}



