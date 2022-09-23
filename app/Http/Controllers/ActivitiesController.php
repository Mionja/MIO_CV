<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        $activity = Activity::with('User')->where('user_id', auth()->user()->id)->paginate(5);
        return view('activity.index', compact('activity'));
    }
    
    public function create()
    {
        return view('activity.add');
    }

    public function store(Request $request)
    {
        $name = $request-> name;
        $user_id = $request-> user_id;

        activity::create([
            'name'=>$name,
            'user_id' => $user_id,
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



