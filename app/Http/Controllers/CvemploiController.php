<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\File;
use App\Cvemploi;
use Storage;
use App\MAilfile;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

use App\Mail\PostuleMessageCreated;

class CvemploiController extends Controller
{
    //
    public function index()
    {

      $cvemplois= Cvemploi::all();


      return view('backend.cv', ['cvemplois' => $cvemplois]);


     }


    public function store(Request $request){

      $cvemploi = new Cvemploi();


    $cvemploi->Nom=$request->input('name');
    $cvemploi->mail=$request->input('Email');
    $cvemploi->Numéro=$request->input('num');
    $cvemploi->offre=$request->input('offre');
    $cvemploi->message = request('message');

    $this->validate($request,[
      'fichier' => 'required|file|max:200000'
    ]);

   $cvemploi->fichier =$request->fichier->store('uploads/cv');

     $cvemploi->save();


     $postule = array(
            'name' => $request->name,
             'Email' => $request->Email,
             'num' => $request->num,
           'offre' => $request->offre,
           'num' => $request->num,
           'message' => $request->message,
           'fichier' => $request->fichier


     );
      $mailable= new PostuleMessageCreated($postule);
      /*  Mail::to('ounissa.fichier@gmail.com')->attachFromStorage($postule['fichier'])->send($mailable);*/
        MAil::send('emails.messages.postule',$postule, function($message) use ($postule)
        {
          $message->to('ounissa.fichier@gmail.com');
          $message->subject($postule['offre']);
          $message->from('uxo.digital@gmail.com');
          $message->attach($postule['fichier']->getRealPath(),array(
            'as' => 'fichier' . $postule['fichier']->getClientOriginalExtension(),
            'mime' => $postule['fichier']->getMimeType())
          );
        });

   return redirect('recrutement');

       }













       public function delete($id){
      /*   $slide = Slide::find($id);
         $slide->delete();
         return redirect('backend.homeadmin');*/

       DB::table('cvemplois')->where('id' , $id)->delete();

       return redirect('cv');
       }
       public function show($id)
       {
         $dl = Cvemploi::find($id);
         return Storage::download($dl->fichier);
       }

}
