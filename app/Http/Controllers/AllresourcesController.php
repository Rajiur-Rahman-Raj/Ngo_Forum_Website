<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\resourcesCategory;
use App\Allresources;
use Carbon\Carbon;
use Image;
use PDF;

class AllresourcesController extends Controller
{
  function allresources(){
    $category_resources_details = resourcesCategory::all();
    $all_resources_details = Allresources::orderBy('id','desc')->get();
    return view('backend/resources/all_resources', compact('category_resources_details', 'all_resources_details'));
  }

  function allresourcesinsert(Request $request){
    $request->validate([
        'resources_category_id' => 'required',
        'image_title' => 'required'
      ],[
        'resources_category_id.required' => 'please select your categroy name!',
        'image_title.required' => 'image_title must be required!',
      ]);

      $lastinsertedid = Allresources::insertGetId([
        'resources_category_id' => $request->resources_category_id,
        'image_title' => $request->image_title,
        'ck_description' => $request->ck_description,
        'created_at' => Carbon::now()
      ]);


      if($request->hasFile('resources_image')){
        $uploaded_image = $request->resources_image;
        $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
        $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
        Image::make($uploaded_image)->resize(446, 599)->save(base_path('public/uploads/all_resources_image/'.$new_img_name));

        Allresources::find($lastinsertedid)->update([
          'resources_image' => $new_img_name,
        ]);
      }

      if($request->hasFile('file_download'))
          {
              $fileName = time().'.'.$request->file_download->extension();
              $request->file_download->move(public_path('uploads/all_resources_image'), $fileName);

              Allresources::find($lastinsertedid)->update([
                'file_download' => $fileName,
              ]);
          }

      return back()->with('success_message', 'Your News Added Sudccessfully!');
  }

  function singleresourceseditinsert(Request $request){
    Allresources::find($request->resources_id)->update([
    'resources_category_id' => $request->category_id,
    'image_title' => $request->image_title,
    'created_at' => Carbon::now()
  ]);

  if($request->hasFile('resources_image')){
    if(Allresources::find($request->resources_id)->resources_image !='default_new_image.jpg'){
      $nametodelete = Allresources::find($request->resources_id)->resources_image;
      unlink(base_path('public/uploads/all_resources_image/'.$nametodelete));
    }
  }

  $uploaded_image = $request->resources_image;
  $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
  $new_img_name = $request->resources_id.'.'.$our_uploaded_img_extension;
  Image::make($uploaded_image)->resize(446, 599)->save(base_path('public/uploads/all_resources_image/'.$new_img_name));

   Allresources::find($request->resources_id)->update([
    'resources_image' => $new_img_name,
  ]);

  return back()->with('success_message', 'News updated successfully!');
  }

  function resourcesdelete($resources_id){
    $news_image_name =  Allresources::findOrFail($resources_id)->resources_image;
    if($news_image_name != 'default_new_image.jpg'){
      unlink(base_path('public/uploads/all_resources_image/'.$news_image_name));
    }
    Allresources::findOrFail($resources_id)->Delete();
    return back()->with('success_message', 'Your News deleted successfully!');
  }
}
