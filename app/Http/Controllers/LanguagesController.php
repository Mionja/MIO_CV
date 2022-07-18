<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function index()
    {
        $languages = Language::orderBy('id')->paginate(5);
        return view('language.index', compact('languages'));
    }
    public function create()
    {
        return view('language.add');
    }

    public function store(Request $request)
    {
        $name = $request-> name;;

        Language::create([
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



