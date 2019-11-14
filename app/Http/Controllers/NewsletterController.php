<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

use App\Newsletter;
class NewsletterController extends Controller
{
    //

    public function index()
    {
       $newsletters= Newsletter::all();


       return view('backend.newsletter', ['newsletters' => $newsletters]);



     }

    public function store(Request $request){

      $newsletter = new Newsletter();


      $newsletter ->email=$request->input('email');



     $newsletter->save();

    return redirect('/');

       }

       public function delete($id){
      /*   $slide = Slide::find($id);
         $slide->delete();
         return redirect('backend.homeadmin');*/

       DB::table('newsletters')->where('id' , $id)->delete();

       return redirect('newsletter');
       }

}
