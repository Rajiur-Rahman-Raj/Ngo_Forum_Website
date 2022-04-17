<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsCategory;
use App\AllNews;
use Carbon\Carbon;
use Image;

class AllnewsController extends Controller
{
    function addallnewses(){
      $category_news_details = NewsCategory::orderBy('id','desc')->get();
      $all_news_details = AllNews::orderBy('id','desc')->get();
      return view('backend/news/allnewes', compact('category_news_details', 'all_news_details'));
    }

    function allnewsinsert(Request $request){
      $request->validate([
          'news_category_id' => 'required',
          'news_title' => 'required',
          'news_image' => 'required',
          'created_at' => 'required'
        ],[
          'news_category_id.required' => 'please select your categroy name!',
          'news_title.required' => 'news_title must be required!',
          'news_image.required' => 'news_image must be required!',
          'created_at.required' => 'News Date must be required!',
        ]);

        $lastinsertedid = AllNews::insertGetId([
          'news_category_id' => $request->news_category_id,
          'news_title' => $request->news_title,
          'news_description' => $request->news_description,
          'ck_description' => $request->ck_description,
          'created_at' => $request->created_at." 00:00:00"
        ]);

        if($request->hasFile('news_image')){
          $uploaded_image = $request->news_image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(980, 550)->save(base_path('public/uploads/all_news_image/'.$new_img_name));

          AllNews::find($lastinsertedid)->update([
            'news_image' => $new_img_name,
          ]);
        }
        return back()->with('success_message', 'Your News Added Sudccessfully!');
    }

    function singlenewseditinsert(Request $request){
      AllNews::find($request->news_id)->update([
      'news_category_id' => $request->category_id,
      'news_title' => $request->news_title,
      'news_description' => $request->news_description,
      'created_at' => Carbon::now()
    ]);

    if($request->hasFile('news_image')){
      if(AllNews::find($request->news_id)->news_image !='default_new_image.jpg'){
        $nametodelete = AllNews::find($request->news_id)->news_image;
        unlink(base_path('public/uploads/all_news_image/'.$nametodelete));
      }
    }

    $uploaded_image = $request->news_image;
    $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
    $new_img_name = $request->news_id.'.'.$our_uploaded_img_extension;
    Image::make($uploaded_image)->resize(980, 550)->save(base_path('public/uploads/all_news_image/'.$new_img_name));

     AllNews::find($request->news_id)->update([
      'news_image' => $new_img_name,
    ]);

    return redirect('add/all/newses')->with('success_message', 'News updated successfully!');
    }

    function newsdelete($news_id){
      $news_image_name =  AllNews::findOrFail($news_id)->news_image;
      if($news_image_name != 'default_new_image.jpg'){
          if(file_exists(base_path('public/uploads/all_news_image/'.$news_image_name))){
              unlink(base_path('public/uploads/all_news_image/'.$news_image_name));
          }
      }
      AllNews::findOrFail($news_id)->Delete();
      return back()->with('success_message', 'Your News deleted successfully!');
    }
    //news deactive active method
    function newsdeactive($news_id){
      AllNews::findOrFail($news_id)->update([
        'news_status' => 'deactive'
      ]);
      return back();
    }

    function newsactive($news_id){
      AllNews::findOrFail($news_id)->update([
        'news_status' => 'active'
      ]);
      return back();
    }
}
