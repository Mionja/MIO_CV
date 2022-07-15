<?php

namespace App\Http\Controllers;

use App\Models\Perso_detail;
use Illuminate\Http\Request;

class Perso_detailsController extends Controller
{

    public function index()
    {
        $perso_details = Perso_detail::where('id', '1')-> first();
        return view('perso_details.index', compact('perso_details'));
    }
   
    public function update (Request $request, $id=1)
    {
        $perso_details = Perso_detail::find($id);

        $nom = $request->nom;
        $address = $request->address;
        $email = $request->email;
        $num = $request->num;

        $perso_details->update(['nom'=>$nom, 'address'=>$address, 'email'=>$email, 'num'=>$num]);

        return redirect()->route('perso_details.index');
    }

}
