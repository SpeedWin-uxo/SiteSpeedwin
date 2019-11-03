<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

use App\Recrutement;
class RecrutementController extends Controller
{
    //
    public function index()
    {
      $recrutements = DB::table('recrutements')->get();

        return view('backend.recrutadmin', ['recrutements' => $recrutements]);
     }


    public function store(Request $request){

      $recrutement = new Recrutement();


      $recrutement->titre=$request->input('titre');
      $recrutement->description = request('description');

    $recrutement->file=$request->file->store('uploads');

     $recrutement->save();

return redirect('recrutadmin');

       }
       
public function delete($id){
      /*   $slide = Slide::find($id);
         $slide->delete();
         return redirect('backend.homeadmin');*/

       DB::table('recrutements')->where('id' , $id)->delete();

       return redirect('recrutadmin');
  }


}
