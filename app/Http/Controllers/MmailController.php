<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Mail\DevisMessageCreated;





class MmailController extends Controller
{
    //

      public function index(){

    return view('frontend.cont');
      }

      public function affiche(){

    return view('/');
      }
    public function store(Request $request){


      $data = array(
             'name' => $request->name,
              'email' => $request->email,
              'msg' => $request->msg

      );
       $mailable= new ContactMessageCreated($data);
         Mail::to('ounissa.fichier@gmail.com')->send($mailable);
          return redirect('cont');

    }



    public function send(Request $request){


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
