<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

use App\Mail\DevisMessageCreated;


class MailpostuleControler extends Controller
{
    //


    public function index(){

  return view('frontend.recrutement');
    }





  public function store(Request $request){


    $postule = array(
           'name' => $request->name,
            'Email' => $request->Email,
            'num' => $request->num,
          'offre' => $request->offre,
          'num' => $request->num,
          'message' => $request->message,
          'fichier' => $request->fichier


    );
     $mailable= new DevisMessageCreated($postule);
       Mail::to('ounissa.fichier@gmail.com')->attachFromStorage($postule['fichier'])->send($mailable);
        return redirect('/');

  }

}
