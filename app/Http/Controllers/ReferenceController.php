<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

use App\Reference;

class ReferenceController extends Controller
{
    //

      public function store(Request $request){

        $reference = new Reference();




            $reference->image =$request->image->store('uploads');
       $reference->save();

        return redirect('homeadmin');



         }

      public function delete($id){
     /*   $slide = Slide::find($id);
        $slide->delete();
        return redirect('backend.homeadmin');*/

      DB::table('references')->where('id' , $id)->delete();

      return redirect('homeadmin');
      }



}
