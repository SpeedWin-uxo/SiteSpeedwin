<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

use App\Slide;


class SlideController extends Controller
{
    //
   public function index()
   {
        $slides = DB::table('slides')->get();

       return view('backend.homeadmin', ['slides' => $slides]);
    }




     public function store(Request $request){

       $slide = new Slide();




           $slide->image =$request->image->store('uploads');
      $slide->save();



        }


}
