<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

use App\Showroom;

class ContactController extends Controller
{
    //
    public function index()
    {
      $showrooms = DB::table('showrooms')->get();

        return view('backend.contact', ['showrooms' => $showrooms]);
     }


    public function store(Request $request){

      $showroom = new Showroom();


      $showroom->Nom=$request->input('nom');
      $showroom->Telephone=$request->input('tel');
      $showroom->email=$request->input('email');
      $showroom->adresse=$request->input('adresse');
      $showroom->ifr=$request->input('ifr');


     $showroom->save();

   return redirect('contact');

       }
       public function delete($id){
      /*   $slide = Slide::find($id);
         $slide->delete();
         return redirect('backend.homeadmin');*/

       DB::table('showrooms')->where('id' , $id)->delete();

       return redirect('contact');
       }



}
