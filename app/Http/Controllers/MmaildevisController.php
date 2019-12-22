<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

use App\Mail\DevisMessageCreated;





class MmaildevisController extends Controller
{
    //




      public function index(){

    return view('frontend.welcome');
      }





    public function store(Request $request){


      $devis = array(
             'name' => $request->name,
              'phone' => $request->phone,
              'service' => $request->service

      );
       $mailable= new DevisMessageCreated($devis);
         Mail::to('ounissa.fichier@gmail.com')->send($mailable);
          return redirect('/');

    }
}
