<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\DB;
use App\Showroom;




class MmailController extends Controller
{
    //

      public function index(){
          $showrooms = DB::table('showrooms')->get();

    return view('frontend.cont', ['showrooms' => $showrooms]);

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




}
