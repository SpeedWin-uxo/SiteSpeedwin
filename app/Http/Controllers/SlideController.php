<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

use App\Slide;
use App\Instalation;
use App\Reference;
use App\Capacity;

class SlideController extends Controller
{
    //
   public function index()
   {
      $slides = Slide::all();
      $instalations = Instalation::all();
      $refrences = Reference::all();
      return view('backend.homeadmin', ['slides' => $slides,'instalations' => $instalations,'references' => $refrences]);



    }

    public function Affiche()
    {
       $slides = Slide::all();
       $instalations = Instalation::all();
       $references = Reference::all();
       $capacities = Capacity::all();



return view('frontend.welcome', ['slides' => $slides,'instalations' => $instalations,'references' => $references,'capacities' => $capacities  ]);

     }


     public function store(Request $request){

       $slide = new Slide();




           $slide->image =$request->image->store('uploads');
      $slide->save();

       return redirect('homeadmin');



        }

     public function delete($id){
    /*   $slide = Slide::find($id);
       $slide->delete();
       return redirect('backend.homeadmin');*/

     DB::table('slides')->where('id' , $id)->delete();

     return redirect('homeadmin');
     }


}
