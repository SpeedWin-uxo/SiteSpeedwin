<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

use App\Slide;
use App\Instalation;
use App\Reference;

class SlideController extends Controller
{
    //
   public function index()
   {
      $slides = Slide::all();
      $instalations = Instalation::all();
      $refrences = Reference::all();
      return view('backend.homeadmin', ['slides' => $slides,'instalations' => $instalations,'refrences' => $refrences]);



    }




     public function store(Request $request){

       $slide = new Slide();




           $slide->image =$request->image->store('uploads');
      $slide->save();



        }


}
