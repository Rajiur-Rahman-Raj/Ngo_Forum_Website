<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programestatus;
use Image;
use Carbon\Carbon;

class ProgrameststusController extends Controller
{
    function addprogramme_status()
    {
      $addprogramme_status_info = Programestatus::all();
      return view('backend/programme_status/programme_status', compact('addprogramme_status_info'));
    }
    function addprogramme_statusinsert(Request $request){
      $request->validate([
          'title' => 'required',
          'description' => 'required',
          'image' => 'required',
        ],[
          'title.required' => 'title field must be required!',
          'description.required' => 'description  field must be required!',
          'image.required' => 'programestatuses Image  must be required!',
        ]);

        $lastinsertedid = Programestatus::insertGetId([
          'title' => $request->title,
          'description' => $request->description,
          'another_des' => $request->another_des,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('image')){
          $uploaded_image = $request->image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(1276, 357)->save(base_path('public/uploads/programme_status_img/'.$new_img_name));

          Programestatus::find($lastinsertedid)->update([
            'image' => $new_img_name,
          ]);
        }

        return back()->with('success_message', 'Your Programe status Added Sudccessfully!');
    }

    function programme_statuseditinsert(Request $request){
        Programestatus::find($request->programe_id)->update([
        'title' => $request->title,
        'description' => $request->description,
        'created_at' => Carbon::now()
      ]);


      if($request->hasFile('image')){
        if(Programestatus::find($request->programe_id)->image !='programestatuses_img.jpg'){
          $nametodelete = Programestatus::find($request->programe_id)->image;
          unlink(base_path('public/uploads/programme_status_img/'.$nametodelete));
        }
      }

      $uploaded_image = $request->image;
      $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
      $new_img_name = $request->programe_id.'.'.$our_uploaded_img_extension;
      Image::make($uploaded_image)->resize(1276, 357)->save(base_path('public/uploads/programme_status_img/'.$new_img_name));

       Programestatus::find($request->programe_id)->update([
        'image' => $new_img_name,
      ]);

      return redirect('add/programme_status')->with('message', 'Programe status updated successfully!');
    }

    function addprogramme_statusdelete($programe_id){
      $existing_image_name =  Programestatus::findOrFail($programe_id)->image;
      if($existing_image_name != 'programestatuses_img.jpg'){
        unlink(base_path('public/uploads/programme_status_img/'.$existing_image_name));
      }
      Programestatus::findOrFail($programe_id)->Delete();
      return back()->with('success_message', 'Your programe statuses deleted successfully!');
    }
}
