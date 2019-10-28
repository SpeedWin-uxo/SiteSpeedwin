<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

use App\Recrutement;
class RecrutementController extends Controller
{
    //
    public function index()
    {
      $recrutements = DB::table('recrutements')->get();

        return view('backend.recrutadmin', ['recrutements' => $recrutements]);
     }


    public function store(Request $request){

      $recrutement = new Recrutement();


      $recrutement->titre=$request->input('titre');
      $recrutement->description=$request->input('description');

    $recrutement->file=$request->file->store('uploads');

     $recrutement->save();



       }


}
