<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

use App\Instalation;


class InstalationController extends Controller
{
    //

 /*public function index()
    {
         $instalations = Instalation::all();

        return view('backend.homeadmin', ['instalations' => $instalations]);
     }*/


    public function store(Request $request){

      $instalation = new Instalation();


      $instalation->titre=$request->input('titre');

    $instalation->image=$request->image->store('uploads');

     $instalation->save();



       }

}
