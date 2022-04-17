<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    function banner(){
      $all_banner_images = Banner::all();
      return view('backend/banner/banner', compact('all_banner_images'));
    }
    // HERE

    function bannerimageinsert(Request $request){

        $lastinsertedid = Banner::insertGetId([
          'title' => $request->title,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('image')){
          $uploaded_image = $request->image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(1920, 1080)->save(base_path('public/uploads/banner_image/'.$new_img_name));

          Banner::find($lastinsertedid)->update([
            'image' => $new_img_name,
          ]);
        }

        return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function bannerimageeditinsert(Request $request){
        Banner::find($request->category_id)->update([
        'title' => $request->title,
        'created_at' => Carbon::now()
      ]);
      if($request->hasFile('image')){
        if(Banner::find($request->category_id)->image !='banner_image.jpg'){
          $nametodelete = Banner::find($request->category_id)->image;
          unlink(base_path('public/uploads/banner_image/'.$nametodelete));
        }
      }
      $uploaded_image = $request->image;
      $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
      $new_img_name = $request->category_id.'.'.$our_uploaded_img_extension;
      Image::make($uploaded_image)->resize(1920, 1080)->save(base_path('public/uploads/banner_image/'.$new_img_name));

       Banner::find($request->category_id)->update([
        'image' => $new_img_name,
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function bannerimagedelete($banner_id){
      $banner_image =  Banner::findOrFail($banner_id)->image;
      if($banner_image != 'banner_image.jpg'){
        unlink(base_path('public/uploads/banner_image/'.$banner_image));
      }
      Banner::findOrFail($banner_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }
    
    
    
    public function videoGalleryPage(){
        $videos = DB::table('video_gallery')->get();
        return view('backend.gallery.video',compact('videos'));
    }
    
    public function addNewVideoToGallery(Request $request){
        DB::table('video_gallery')->insert([
           'title' => $request->title,
           'caption' => $request->caption,
           'video_link' => $request->video
        ]);
        
        return back();
    }
    
    public function deleteVideoFromGallery($id){
        DB::table('video_gallery')->where('id',$id)->delete();
        return back();
    }

}
