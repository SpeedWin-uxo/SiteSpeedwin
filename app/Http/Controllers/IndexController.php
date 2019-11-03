<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Slide;

class IndexController extends Controller
{
    //
    public function index()
    {
      $recrutements = DB::table('recrutements')->get();

        return view('backend.recrutadmin', ['recrutements' => $recrutements]);
     }


}
