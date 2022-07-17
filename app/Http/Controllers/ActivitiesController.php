<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        $activity = Activity::orderBy('id')->paginate(5);
        return view('activity.index', compact('activity'));
    }
    public function create()
    {
        return view('activity.add');
    }

    public function store(Request $request)
    {
        $name = $request-> name;;

        activity::create([
            'name'=>$name,
        ]);

        return redirect()->route('activity.index');
    }

    public function edit($id)
    {
        $activity = activity::find($id);
        
        return view('activity.edit',compact('activity'));
    }

    public function show(Request $request, $id)
    {
        $activity = activity::find($id);

        $name = $request-> name;

        $activity->update(['name'=>$name,]);

        return redirect()->route('activity.index');
    }


    public function destroy($id)
    {
        $frm = activity::find($id);
        $frm->delete();

        return redirect()->route('activity.index');
    }
}



