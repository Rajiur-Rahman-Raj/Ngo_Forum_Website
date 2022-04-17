<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\programme_categorie;
use App\all_programme;
use Carbon\Carbon;
use Image;

class ProgrammeController extends Controller
{
    function All_Programme_Category(){
      $category_pogramme_details = Programme_categorie::all();
      $all_pogramme_details = All_programme::all();
      return view('backend/programme/All_Programme_Category', compact('category_pogramme_details', 'all_pogramme_details'));
    }

    function allprogrammeinsert(Request $request){
    //   $request->validate([
    //       'programme_category_id' => 'required',
    //       'programme_title' => 'required',
    //       'programme_image' => 'required',
    //       'image_description' => 'required',
    //     ],[
    //       'programme_category_id.required' => 'please select your categroy name!',
    //       'programme_title.required' => 'programme title must be required!',
    //       'programme_image.required' => 'programme_image must be required!',
    //       'image_description.required' => 'image description field must be required!',
    //     ]);

        $lastinsertedid = All_programme::insertGetId([
          'programme_category_id' => $request->programme_category_id,
          'programme_title' => $request->programme_title,
          'image_description' => $request->image_description,
          'ck_description' => $request->ck_description,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('programme_image')){
          $uploaded_image = $request->programme_image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(3872, 2247)->save(base_path('public/uploads/all_programme_image/'.$new_img_name));

          All_programme::find($lastinsertedid)->update([
            'programme_image' => $new_img_name,
          ]);
        }
        return back()->with('success_message', 'Your News Added Sudccessfully!');
    }

    function categoryprogrammeeditinsert(Request $request){
      all_programme::find($request->programme_id)->update([
      'programme_category_id' => $request->category_id,
      'programme_title' => $request->programme_title,
      'image_description' => $request->image_description,
      'created_at' => Carbon::now()
    ]);

    if($request->hasFile('programme_image')){
      if(All_programme::find($request->programme_id)->programme_image !='default_new_image.jpg'){
        $nametodelete = All_programme::find($request->programme_id)->programme_image;
        unlink(base_path('public/uploads/all_programme_image/'.$nametodelete));
      }
    }

    $uploaded_image = $request->programme_image;
    $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
    $new_img_name = $request->programme_id.'.'.$our_uploaded_img_extension;
    Image::make($uploaded_image)->resize(3872, 2247)->save(base_path('public/uploads/all_programme_image/'.$new_img_name));

     All_programme::find($request->programme_id)->update([
      'programme_image' => $new_img_name,
    ]);

    return back()->with('success_message', 'News updated successfully!');
    }

    function allprogrammedelete($programme_id){
      $news_image_name =  all_programme::findOrFail($programme_id)->programme_image;
    //   if($news_image_name != 'default_new_image.jpg'){
    if(file_exists(base_path('public/uploads/all_programme_image/'.$news_image_name))){
        unlink(base_path('public/uploads/all_programme_image/'.$news_image_name));
    }
    //   }
      all_programme::findOrFail($programme_id)->Delete();
      return back()->with('success_message', 'Your News deleted successfully!');
    }
}
