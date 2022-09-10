<?php

namespace App\Http\Controllers;

use App\Models\Perso_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Perso_detailsController extends Controller
{

    public function index()
    {
        $perso_details = Perso_detail::with('User')->where('user_id', auth()->user()->id)->get();
        if ($perso_details->isNotEmpty()) 
        {
            return view('perso_details.index', compact('perso_details'));
        }
        
        return view('perso_details.create');
    }

    public function store (Request $request)
    {
        $nom = $request->nom;
        $address = $request->address;
        $email = $request->email;
        $num = $request->num;
        $user_id = $request->user_id;

        if ($request->hasFile('photo')) 
        {
            $name = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move('img/profile_pic/', $name);

            Perso_detail::create(['user_id'=>$user_id, 'nom'=>$nom, 'address'=>$address, 'email'=>$email, 'num'=>$num, 'photo'=>$name]);            
        }
        else
        {
            $photo = '';
            Perso_detail::create(['user_id'=>$user_id, 'nom'=>$nom, 'address'=>$address, 'email'=>$email, 'num'=>$num, 'photo'=>$photo]);            
        }

        


        return redirect()->route('perso_details.index');
    }
   
    public function update (Request $request, $id=1)
    {
        $perso_details = Perso_detail::find($id);

        $nom = $request->nom;
        $address = $request->address;
        $email = $request->email;
        $num = $request->num;

        if ($request->hasFile('photo')) 
        {
            $destination = "img/profile_pic/".$perso_details->photo; 
            File::delete($destination); 

            $name = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move('img/profile_pic/', $name);

            $perso_details->update(['nom'=>$nom, 'address'=>$address, 'email'=>$email, 'num'=>$num, 'photo'=>$name]);            
        }
        else
        {
            $perso_details->update(['nom'=>$nom, 'address'=>$address, 'email'=>$email, 'num'=>$num]);            
        }

        


        return redirect()->route('perso_details.index');
    }

}
