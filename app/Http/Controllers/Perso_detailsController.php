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
        dd($request['photo']);
        $perso_details = Perso_detail::find($id);

        $nom = $request->nom;
        $address = $request->address;
        $email = $request->email;
        $num = $request->num;
        $photo = $request['photo'];

        // $i_tmpname = $_FILES[$photo]['tmp_name'];
        // $i_name = $_FILES[$photo]['name'];
        // $i_size = $_FILES[$photo]['size'];

        // $tabExtension = explode('.', $i_name);
        // $extension = strtolower(end($tabExtension));
        // $maxSize = 400000;

        // $extensions = ['jpg', 'png', 'jpeg', 'gif'];

        // if (in_array($extension,$extensions) && $i_size <= $maxSize) 
        // {
        //     move_uploaded_file($i_tmpname, "{{asset('img/". $photo ." ')}}");

        //     $perso_details->update(['nom'=>$nom, 'address'=>$address, 'email'=>$email, 'num'=>$num, 'photo'=>$photo]);            
        // }


        // return redirect()->route('perso_details.index');
    }

}
