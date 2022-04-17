<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PressMedia;
use Image;
use Carbon\Carbon;

class PressmediaController extends Controller
{
    function pressmedianews(){
      $pressmedia_news_details = PressMedia::all();
      return view('backend/pressmedia/pressmedianews', compact('pressmedia_news_details'));
    }

    function pressmedianewsinsert(Request $request){
      $lastinsertedid = PressMedia::insertGetId([
        'news_title' => $request->news_title,
        'news_description' => $request->news_description,
        'created_at' => Carbon::now()
      ]);

      if($request->hasFile('news_image')){
        $uploaded_image = $request->news_image;
        $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
        $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
        Image::make($uploaded_image)->resize(960, 639)->save(base_path('public/uploads/pressmedia_news_image/'.$new_img_name));

        PressMedia::find($lastinsertedid)->update([
          'news_image' => $new_img_name,
        ]);
      }
      return back()->with('success_message', 'Your pressmedia News Added Sudccessfully!');
    }

    function pressmedianewsdelete($news_id){
      $news_image_name =  PressMedia::findOrFail($news_id)->news_image;
      if($news_image_name != 'press_news_image.jpg'){
        unlink(base_path('public/uploads/pressmedia_news_image/'.$news_image_name));
      }
      PressMedia::findOrFail($news_id)->Delete();
      return back()->with('success_message', 'Your latest news deleted successfully!');
    }

    function pressmedianewseditinsert(Request $request){
      PressMedia::find($request->news_id)->update([
      'news_title' => $request->news_title,
      'news_description' => $request->news_description,
      'created_at' => Carbon::now()
    ]);


    if($request->hasFile('news_image')){
      if(PressMedia::find($request->news_id)->news_image !='press_news_image.jpg'){
        $nametodelete = PressMedia::find($request->news_id)->news_image;
        unlink(base_path('public/uploads/pressmedia_news_image/'.$nametodelete));
      }
    }

    $uploaded_image = $request->news_image;
    $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
    $new_img_name = $request->news_id.'.'.$our_uploaded_img_extension;
    Image::make($uploaded_image)->resize(960, 639)->save(base_path('public/uploads/pressmedia_news_image/'.$new_img_name));

     PressMedia::find($request->news_id)->update([
      'news_image' => $new_img_name,
    ]);

    return redirect('press-media/news')->with('message', 'Latest News updated successfully!');
    }
}
