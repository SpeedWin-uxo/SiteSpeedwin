<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

use App\Capacity;

class CapacityController extends Controller
{
    //

 

    public function store(Request $request){

      $capacity = new Capacity();

        $capacity->nbrfenetre=$request->input('fenetre');
        $capacity->nbrsolution=$request->input('solution');
        $capacity->nbrclient=$request->input('client');
        $capacity->nbrshowroom=$request->input('showroom');



     $capacity->save();

return redirect('homeadmin');

       }




}
