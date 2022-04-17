<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LatestNews;
use Carbon\Carbon;
use Image;

class NewsController extends Controller
{
    function latestnews(){
      $latest_news_details = LatestNews::all();
      return view('backend/news/latest_news', compact('latest_news_details'));
    }

    function latestnewsinsert(Request $request){
        $lastinsertedid = LatestNews::insertGetId([
          'news_title' => $request->news_title,
          'news_description' => $request->news_description,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('news_image')){
          $uploaded_image = $request->news_image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(980, 550)->save(base_path('public/uploads/latest_news_image/'.$new_img_name));

          LatestNews::find($lastinsertedid)->update([
            'news_image' => $new_img_name,
          ]);
        }
        return back()->with('success_message', 'Your Latest News Added Sudccessfully!');
    }

    function latestnewsdelete($news_id){
      $news_image_name =  LatestNews::findOrFail($news_id)->news_image;
      if($news_image_name != 'latest_news_image.jpg'){
        unlink(base_path('public/uploads/latest_news_image/'.$news_image_name));
      }
      LatestNews::findOrFail($news_id)->Delete();
      return back()->with('success_message', 'Your latest news deleted successfully!');
    }

    function latestnewseditinsert(Request $request){
      LatestNews::find($request->news_id)->update([
      'news_title' => $request->news_title,
      'news_description' => $request->news_description,
      'created_at' => Carbon::now()
    ]);


    if($request->hasFile('news_image')){
      if(LatestNews::find($request->news_id)->news_image !='latest_news_image.jpg'){
        $nametodelete = LatestNews::find($request->news_id)->news_image;
        unlink(base_path('public/uploads/latest_news_image/'.$nametodelete));
      }
    }

    $uploaded_image = $request->news_image;
    $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
    $new_img_name = $request->news_id.'.'.$our_uploaded_img_extension;
    Image::make($uploaded_image)->resize(980, 550)->save(base_path('public/uploads/latest_news_image/'.$new_img_name));

     LatestNews::find($request->news_id)->update([
      'news_image' => $new_img_name,
    ]);

    return redirect('latest/news')->with('message', 'Latest News updated successfully!');
    }

    }
}
