<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;





class MmailController extends Controller
{
    //

      public function index(){

    return view('frontend.cont');
      }

    public function store(Request $request){

      /*$mailable= new ContactMessageCreated($request->name, $request->email, $request->msg );
      Mail::to('uxo.digital@gmail.com')->send($mailable);
      return 'done';*/
      $data = array(
             'name' => $request->name,
              'msg' => $request->msg

      );
       $mailable= new ContactMessageCreated($data);
        Mail::to('ounissa.fichier@gmail.com')->send($mailable);


    }
}
