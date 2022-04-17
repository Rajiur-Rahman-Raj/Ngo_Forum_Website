<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\What;
use App\Video;
use App\Photocategory;
use App\Photoclicked;
use App\Globalevent;
use App\Foundingagency;
use Image;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    function what()
    {
      $home_infos = What::all();
      return view('backend/Home_page/what', compact('home_infos'));
    }
    function whatinsert(Request $request){
      $request->validate([
          'icon_link' => 'required',
          'title' => 'required',
          'description' => 'required',
        ],[
          'icon_link.required' => 'icon_link field must be required!',
          'title.required' => 'title  field must be required!',
          'description.required' => 'description field must be required!',
        ]);

        $lastinsertedid = What::insertGetId([
          'icon_link' => $request->icon_link,
          'title' => $request->title,
          'description' => $request->description,
          'created_at' => Carbon::now()
        ]);
        return back()->with('success_message', 'Your Added Sudccessfully!');
    }

    function whateditinsert(Request $request){
        What::find($request->what_id)->update([
        'icon_link' => $request->icon_link,
        'title' => $request->title,
        'description' => $request->description,
        'created_at' => Carbon::now()
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function whatdelete($what_id){
      What::findOrFail($what_id)->Delete();
      return back()->with('success_message', 'Your  deleted successfully!');
    }
    function video()
    {
      $video_infos = Video::all();
      return view('backend/Home_page/video', compact('video_infos'));
    }

    function welcomevideoinsert(Request $request){

        $lastinsertedid = Video::insertGetId([
          'video_link' => $request->video_link,
          'created_at' => Carbon::now()
        ]);
          if($request->hasFile('bg_image')){
            $uploaded_details_image = $request->bg_image;
            $our_uploaded_details_img_extension = $uploaded_details_image->getClientOriginalExtension();
            $new_details_img_name = $lastinsertedid.'.'.$our_uploaded_details_img_extension;
            Image::make($uploaded_details_image)->resize(1920, 1080)->save(base_path('public/uploads/what_image/'.$new_details_img_name));

            Video::find($lastinsertedid)->update([
              'bg_image' => $new_details_img_name,
            ]);
          }

        return back()->with('success_message', 'Your video Added Sudccessfully!');
    }

    function welcomevideoeditinsert(Request $request){
        Video::find($request->welcome_video_id)->update([
        'video_link' => $request->video_link,
        'created_at' => Carbon::now()
      ]);

      if($request->hasFile('bg_image')){
        if(Video::find($request->welcome_video_id)->bg_image !='bg_image.jpg'){
          $nametodelete_details_img = Video::find($request->welcome_video_id)->bg_image;
          unlink(base_path('public/uploads/what_image/'.$nametodelete_details_img));
        }
      }
      $uploaded_details_new_image = $request->bg_image;
      $our_uploaded_detail_img_extension = $uploaded_details_new_image->getClientOriginalExtension();
      $new_detail_img_name = rand().'.'.$our_uploaded_detail_img_extension;
      Image::make($uploaded_details_new_image)->resize(1920, 1080)->save(base_path('public/uploads/what_image/'.$new_detail_img_name));

       Video::find($request->welcome_video_id)->update([
        'bg_image' => $new_detail_img_name,
      ]);

      return back()->with('message', 'updated successfully!');
    }

    function welcomevideodelete($welcome_video_id){
      $bg_image =  Video::findOrFail($welcome_video_id)->bg_image;
      if($bg_image != 'bg_image.jpg'){
        unlink(base_path('public/uploads/what_image/'.$bg_image));
      }
      Video::findOrFail($welcome_video_id)->Delete();
      return back()->with('success_message', 'Your  deleted successfully!');
    }
    function aboutcategory(){
      $photo_categories = Photocategory::all();
      $all_photo_details = Photoclicked::all();
      return view('backend/Home_page/photo_category', compact('photo_categories', 'all_photo_details'));
    }

    function categoryphotoinsert(Request $request){
      $request->validate([
            'category_name'=>'required',
          ],[
            'category_name.required' => 'Category name is must be required',
          ]);

          Photocategory::insert([
            'category_name' => $request->category_name,
            'created_at' => Carbon::now(),
          ]);
          return back()->with('success_message', 'Your Category add successfully!');
    }

    function categoryphotodelete($category_id){
          Photocategory::findOrFail($category_id)->delete();
          return back()->with('success_message', 'category deleted successfully!');
    }

    function categoryphotoeditinsert(Request $request){
          Photocategory::findOrFail($request->category_id)->update([
            'category_name' => $request->category_name,
          ]);
          return back()->with('success_message', 'category name update successfully!..');
    }
    function photoclicked(){
      $category_photo_details = Photocategory::all();
      $all_photo_details = Photoclicked::all();
      return view('backend/Home_page/photo_clicked', compact('category_photo_details', 'all_photo_details'));
    }

    function photoclickedinsert(Request $request){
      $request->validate([
          'photo_category_id' => 'required',
          'photoclicked_image' => 'required',

        ],[
          'photo_category_id.required' => 'please select your categroy name!',
          'photoclicked_image.required' => 'photoclicked_image must be required!',
        ]);

        $lastinsertedid = Photoclicked::insertGetId([
          'photo_category_id' => $request->photo_category_id,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('photoclicked_image')){
          $uploaded_image = $request->photoclicked_image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(3872, 2592)->save(base_path('public/uploads/photoclicked_image/'.$new_img_name));

          Photoclicked::find($lastinsertedid)->update([
            'photoclicked_image' => $new_img_name,
          ]);
        }
        return back()->with('success_message', 'Your Added Sudccessfully!');
    }

    function photoclickededitinsert(Request $request){
      Photoclicked::find($request->photo_id)->update([
      'photo_category_id' => $request->category_id,
      'created_at' => Carbon::now()
    ]);

    if($request->hasFile('photoclicked_image')){
      if(Photoclicked::find($request->photo_id)->photoclicked_image !='photoclicked_image.jpg'){
        $nametodelete = Photoclicked::find($request->photo_id)->photoclicked_image;
        unlink(base_path('public/uploads/photoclicked_image/'.$nametodelete));
      }
    }

    $uploaded_image = $request->photoclicked_image;
    $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
    $new_img_name = $request->photo_id.'.'.$our_uploaded_img_extension;
    Image::make($uploaded_image)->resize(3872, 2592)->save(base_path('public/uploads/photoclicked_image/'.$new_img_name));

     Photoclicked::find($request->photo_id)->update([
      'photoclicked_image' => $new_img_name,
    ]);

    return back()->with('success_message', 'about updated successfully!');
    }

    function photoclickeddelete($photo_id){
      $news_image_name =  Photoclicked::findOrFail($photo_id)->photoclicked_image;
      if($news_image_name != 'photoclicked_image.jpg'){
        unlink(base_path('public/uploads/photoclicked_image/'.$news_image_name));
      }
      Photoclicked::findOrFail($photo_id)->Delete();
      return back()->with('success_message', 'Your deleted successfully!');
    }
    function global()
    {
      $global_info = Globalevent::all();
      return view('backend/Home_page/global', compact('global_info'));
    }
    function globalinsert(Request $request){
      $request->validate([

          'date' => 'required',
          'manth' => 'required',
          'title' => 'required',
          'description' => 'required',
        ],[

          'date.required' => 'date  field must be required!',
          'manth.required' => 'manth field must be required!',
          'title.required' => 'title field must be required!',
          'description.required' => 'description field must be required!',
        ]);

        $lastinsertedid = Globalevent::insertGetId([
          'date' => $request->date,
          'manth' => $request->manth,
          'title' => $request->title,
          'description' => $request->description,
          'created_at' => Carbon::now()
        ]);

        return back()->with('success_message', 'Your About ngo Added Sudccessfully!');
    }

    function globaleditinsert(Request $request){
        Globalevent::find($request->global_id)->update([
        'date' => $request->date,
        'manth' => $request->manth,
        'title' => $request->title,
        'description' => $request->description,
        'created_at' => Carbon::now()
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function globaldelete($global_id){
      Globalevent::findOrFail($global_id)->Delete();
      return back()->with('success_message', 'Your  deleted successfully!');
    }

    function foundingagency(){
      $all_founding_agencies = Foundingagency::all();
      return view('backend/Home_page/foundingagency', compact('all_founding_agencies'));
    }

    function foundingagencyinsert(Request $request){
        $lastinsertedid = Foundingagency::insertGetId([
          'title' => 'sample title',
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('agency_logo')){
          $uploaded_image = $request->agency_logo;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(500, 450)->save(base_path('public/uploads/agency_image/'.$new_img_name));

          Foundingagency::find($lastinsertedid)->update([
            'agency_logo' => $new_img_name,
          ]);
        }
        return back()->with('success_message', 'Your data has added Sudccessfully!');
    }

    function agencyeditinsert(Request $request){

    if($request->hasFile('agency_logo')){
      if(Foundingagency::find($request->agency_id)->agency_logo !='agency_logo.jpg'){
        $nametodelete = Foundingagency::find($request->agency_id)->agency_logo;
        unlink(base_path('public/uploads/agency_image/'.$nametodelete));
      }
    }

    $uploaded_image = $request->agency_logo;
    $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
    $new_img_name = $request->agency_id.'.'.$our_uploaded_img_extension;
    Image::make($uploaded_image)->resize(450, 300)->save(base_path('public/uploads/agency_image/'.$new_img_name));

     Foundingagency::find($request->agency_id)->update([
      'agency_logo' => $new_img_name,
    ]);

    return back()->with('success_message', 'Data updated successfully!');
    }

    function agencydelete($agency_id){
      $news_image_name =  Foundingagency::findOrFail($agency_id)->agency_logo;
      if($news_image_name != 'agency_logo.jpg'){
        unlink(base_path('public/uploads/agency_image/'.$news_image_name));
      }
      Foundingagency::findOrFail($agency_id)->Delete();
      return back()->with('success_message', 'Your data deleted successfully!');
    }
}
