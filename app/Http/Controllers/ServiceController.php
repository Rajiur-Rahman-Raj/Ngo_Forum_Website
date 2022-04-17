<?php

namespace App\Http\Controllers;

use App\Training;
use App\Center;
use App\Centerdetail;
use App\Servicecategory;
use App\Allservice;
use App\ICE;
use Image;
use App\Metarialscategory;
use App\Allmetarials;
use App\Wqtl;
use App\Wqtltestrate;
use App\Allwqtltestrate;
use App\Specialpackege;
use App\Coxlab;
use App\Coxlabtestrate;
use App\Coxlabservice;
use App\Microkit;
use App\Microkitvideo;
use App\Wqtlhome;
use App\Wqtlhomeimage;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function trainingview()
    {
      $training_infos = Training::all();
      return view('backend/service/training', compact('training_infos'));
    }

    function traininginsert(Request $request){
      $request->validate([
          'training_image' => 'required',
          'title' => 'required',
          'description' => 'required',
          'name' => 'required',
          'designation' => 'required',
          'phone' => 'required',
          'email' => 'required',
          'location' => 'required',
        ],[
          'training_image.required' => 'training image field must be required!',
          'title.required' => 'title  field must be required!',
          'description.required' => 'description field must be required!',
          'name.required' => 'name field must be required!',
          'designation.required' => 'designation field must be required!',
          'phone.required' => 'phone field must be required!',
          'email.required' => 'email field must be required!',
          'location.required' => 'location field must be required!',
        ]);

        $lastinsertedid = Training::insertGetId([
          'title' => $request->title,
          'description' => $request->description,
          'name' => $request->name,
          'designation' => $request->designation,
          'phone' => $request->phone,
          'email' => $request->email,
          'location' => $request->location,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('training_image')){
          $uploaded_image = $request->training_image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(5312, 3520)->save(base_path('public/uploads/training_image/'.$new_img_name));

          Training::find($lastinsertedid)->update([
            'training_image' => $new_img_name,
          ]);
        }

        return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function trainingeditinsert(Request $request){
        Training::find($request->training_id)->update([
        'title' => $request->title,
        'name' => $request->name,
        'designation' => $request->designation,
        'phone' => $request->phone,
        'email' => $request->email,
        'location' => $request->location,
        'created_at' => Carbon::now()
      ]);
      if($request->hasFile('training_image')){
        if(Training::find($request->training_id)->training_image !='training_image.jpg'){
          $nametodelete = Training::find($request->training_id)->training_image;
          unlink(base_path('public/uploads/training_image/'.$nametodelete));
        }
      }
      $uploaded_image = $request->training_image;
      $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
      $new_img_name = $request->training_id.'.'.$our_uploaded_img_extension;
      Image::make($uploaded_image)->resize(5312, 3520)->save(base_path('public/uploads/training_image/'.$new_img_name));

       Training::find($request->training_id)->update([
        'training_image' => $new_img_name,
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function trainingdelete($training_id){
      $training_image =  Training::findOrFail($training_id)->training_image;
      if($training_image != 'training_image.jpg'){
        unlink(base_path('public/uploads/training_image/'.$training_image));
      }
      Training::findOrFail($training_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }

    //Training Centers Mathod//

    function centerview()
    {
      $center_infos = Center::all();
      return view('backend/service/center', compact('center_infos'));
    }

    function centerinsert(Request $request){
      $request->validate([
          'region' => 'required',
          'person' => 'required',
          'address' => 'required',
          'email' => 'required',
        ],[
          'region.required' => 'region field must be required!',
          'person.required' => 'person  field must be required!',
          'address.required' => 'address field must be required!',
          'email.required' => 'email field must be required!',
        ]);

          Center::insert([
          'region' => $request->region,
          'person' => $request->person,
          'designation' => $request->designation,
          'address' => $request->address,
          'tel_phone' => $request->tel_phone,
          'number' => $request->number,
          'email' => $request->email,
          'fax' => $request->fax,
          'created_at' => Carbon::now()
        ]);
        return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function centereditinsert(Request $request){
        Center::find($request->center_id)->update([
        'region' => $request->region,
        'person' => $request->person,
        'designation' => $request->designation,
        'address' => $request->address,
        'tel_phone' => $request->tel_phone,
        'number' => $request->number,
        'email' => $request->email,
        'fax' => $request->fax,
        'created_at' => Carbon::now()
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function centerdelete($center_id){
      Center::findOrFail($center_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }

    function centerviewdetails()
    {
      $center_details = Center::take(3)->get();
      $training_center_detail_infos = Centerdetail::all();
      return view('backend/service/centerviewdetails', compact('training_center_detail_infos', 'center_details'));
    }

    function training_center_detailinsert(Request $request){
      $request->validate([
          'center_category_id' => 'required',
          'category_name' => 'required',
          'description' => 'required',
          'rates' => 'required'
        ],[
          'center_category_id.required' => 'this field must be required!',
          'category_name.required' => 'category_name field must be required!',
          'description.required' => 'description field must be required!',
          'rates.required' => 'rates field must be required!'
        ]);

        Centerdetail::insert([
        'center_category_id' => $request->center_category_id,
        'category_name' => $request->category_name,
        'description' => $request->description,
        'capacity' => $request->capacity,
        'rates' => $request->rates,
        'created_at' => Carbon::now()
      ]);
      return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function center_detaileditinsert(Request $request){
        Centerdetail::find($request->center_id)->update([
        'center_category_id' => $request->center_category_id,
        'category_name' => $request->category_name,
        'description' => $request->description,
        'capacity' => $request->capacity,
        'rates' => $request->rates,
        'created_at' => Carbon::now()
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function center_detailsdelete($center_id){
      Centerdetail::findOrFail($center_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }

    //i am here
    function cateringservicecategory(){
      $service_categorys = Servicecategory::all();
      $all_servicer = Allservice::all();
      return view('backend/service/cateringservicecategory', compact('service_categorys', 'all_servicer'));
    }

    function categoryserviceinsert(Request $request){
      $request->validate([
            'category_name'=>'required',
          ],[
            'category_name.required' => 'Category name is must be required',
          ]);

          Servicecategory::insert([
            'category_name' => $request->category_name,
            'created_at' => Carbon::now(),
          ]);
          return back()->with('success_message', 'Your Category add successfully!');
    }

    function categoryservicedelete($category_id){
          Servicecategory::findOrFail($category_id)->delete();
          return back()->with('success_message', 'category deleted successfully!');
    }

    function categoryserviceeditinsert(Request $request){
          Servicecategory::findOrFail($request->category_id)->update([
            'category_name' => $request->category_name,
          ]);
          return back()->with('success_message', 'category name update successfully!..');
    }
    function Allservice(){
      $all_servicer = Servicecategory::all();
      $all_service_details = Allservice::all();
      return view('backend/service/allservice', compact('all_servicer', 'all_service_details'));
    }

    function allserviceinsert(Request $request){
      $request->validate([
          'service_category_id' => 'required',
          'meals' => 'required',
          'rates' => 'required',
          'food' => 'required',
        ],[
          'service_category_id.required' => 'please select your categroy name!',
          'meals.required' => 'meals must be required!',
          'rates.required' => 'rates must be required!',
          'food.required' => ' food field must be required!',
        ]);

        $lastinsertedid = Allservice::insert([
          'service_category_id' => $request->service_category_id,
          'meals' => $request->meals,
          'rates' => $request->rates,
          'food' => $request->food,
          'created_at' => Carbon::now()
        ]);
        return back()->with('success_message', 'Your About Added Sudccessfully!');
    }

    function allserviceeditinsert(Request $request){
      Allservice::find($request->category_id)->update([
      'category_name' => $request->category_name,
      'meals' => $request->meals,
      'rates' => $request->rates,
      'food' => $request->food,


      'created_at' => Carbon::now()
    ]);
    return back()->with('success_message', 'about updated successfully!');
    }

    function allservicedelete($service_id){
      Allservice::findOrFail($service_id)->Delete();
      return back()->with('success_message', 'Your about deleted successfully!');
    }


    function iceview()
    {
      $ice_infos = ICE::all();
      return view('backend/service/ice', compact('ice_infos'));
    }

    function iceinsert(Request $request){
      $request->validate([
          'description_one' => 'required',
          'name' => 'required',
          'designation' => 'required',
          'phone' => 'required',
          'email' => 'required',
          'ice_image' => 'required',
          'description_two' => 'required',
          'description_three' => 'required',
        ],[
          'description_one.required' => 'description_one field must be required!',
          'name.required' => 'name  field must be required!',
          'designation.required' => 'designation field must be required!',
          'phone.required' => 'phone field must be required!',
          'email.required' => 'email field must be required!',
          'ice_image.required' => 'ice_image field must be required!',
          'description_two.required' => 'description_two field must be required!',
          'description_three.required' => 'description_three field must be required!',
        ]);

        $lastinsertedid = ICE::insertGetId([
          'description_one' => $request->description_one,
          'name' => $request->name,
          'designation' => $request->designation,
          'phone' => $request->phone,
          'email' => $request->email,
          'description_two' => $request->description_two,
          'description_three' => $request->description_three,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('ice_image')){
          $uploaded_image = $request->ice_image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(1235, 731)->save(base_path('public/uploads/ice_image/'.$new_img_name));

          ICE::find($lastinsertedid)->update([
            'ice_image' => $new_img_name,
          ]);
        }

        return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function iceeditinsert(Request $request){
        ICE::find($request->ice_id)->update([
        'description_one' => $request->description_one,
        'name' => $request->name,
        'designation' => $request->designation,
        'phone' => $request->phone,
        'email' => $request->email,
        'description_two' => $request->description_two,

        'created_at' => Carbon::now()
      ]);
      if($request->hasFile('ice_image')){
        if(ICE::find($request->ice_id)->ice_image !='ice_image.jpg'){
          $nametodelete = ICE::find($request->ice_id)->ice_image;
          unlink(base_path('public/uploads/ice_image/'.$nametodelete));
        }
      }
      $uploaded_image = $request->ice_image;
      $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
      $new_img_name = $request->ice_id.'.'.$our_uploaded_img_extension;
      Image::make($uploaded_image)->resize(1235, 731)->save(base_path('public/uploads/ice_image/'.$new_img_name));

       ICE::find($request->ice_id)->update([
        'ice_image' => $new_img_name,
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function icedelete($ice_id){
      $ice_image =  ICE::findOrFail($ice_id)->ice_image;
      if($ice_image != 'ice_image.jpg'){
        unlink(base_path('public/uploads/ice_image/'.$ice_image));
      }
      ICE::findOrFail($ice_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }

    // development metarials method
    function developmentmetarialscategory(){
      $metarials_categories = Metarialscategory::all();
      return view('backend/service/developmentmetarialscategory', compact('metarials_categories'));

    }

    function developmentcategoryinsert(Request $request){

          Metarialscategory::insert([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'created_at' => Carbon::now(),
          ]);
          return back()->with('success_message', 'Your Category add successfully!');
    }

    function metarialscategoryeditinsert(Request $request){
          Metarialscategory::findOrFail($request->metarials_id)->update([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
          ]);
          return back()->with('success_message', 'category category update successfully!..');
    }

    function metarialcategorydelete($metarials_id){
          Metarialscategory::findOrFail($metarials_id)->delete();
          return back()->with('success_message', 'category deleted successfully!');
    }

    function alldevelopmentmetarials(){
      $metarial_catagories = Metarialscategory::all();
      $metarials_details = Allmetarials::all();
      return view('backend/service/alldevelopmentmetarials', compact('metarial_catagories', 'metarials_details'));
    }

    function developmentmetarialscategoryinsert(Request $request){

        $lastinsertedid = Allmetarials::insertGetId([
          'metarials_category_id' => $request->metarials_category_id,
          'metarials_title' => 'example title',
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('image')){
          $uploaded_image = $request->image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(2941, 4441)->save(base_path('public/uploads/metarials_img/'.$new_img_name));

          Allmetarials::find($lastinsertedid)->update([
            'image' => $new_img_name,
          ]);
        }
        return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function developmentmetarialscategoryeditinsert(Request $request){
      Allmetarials::find($request->metarials_id)->update([
      'metarials_category_id' => $request->category_id,
      'created_at' => Carbon::now()
    ]);

    if($request->hasFile('image')){
      if(Allmetarials::find($request->metarials_id)->image !='metarials_image.jpg'){
        $nametodelete = Allmetarials::find($request->metarials_id)->image;
        unlink(base_path('public/uploads/metarials_img/'.$nametodelete));
      }
    }

    $uploaded_image = $request->image;
    $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
    $new_img_name = $request->metarials_id.'.'.$our_uploaded_img_extension;
    Image::make($uploaded_image)->resize(2941, 4441)->save(base_path('public/uploads/metarials_img/'.$new_img_name));

     Allmetarials::find($request->metarials_id)->update([
      'image' => $new_img_name,
    ]);

    return back()->with('success_message', 'Your Data updated successfully!');
    }

    function developmentmetarialcategorydelete($metarials_id){
      $news_image_name =  Allmetarials::findOrFail($metarials_id)->image;
      if($news_image_name != 'metarials_image.jpg'){
        unlink(base_path('public/uploads/metarials_img/'.$news_image_name));
      }
      Allmetarials::findOrFail($metarials_id)->Delete();
      return back()->with('success_message', 'Your about deleted successfully!');
    }

    //wqtl and coxlab microkit
    function wqtl_homeaddview()
    {
      $wqtl_home_infos = Wqtlhome::all();
      $wqtl_home_images = Wqtlhomeimage::all();
      return view('backend/service/wqtl_homeaddview', compact('wqtl_home_infos', 'wqtl_home_images'));
    }

    function updatewqtl_homeinsert(Request $request){
      Wqtlhome::find($request->wqtl_id)->update([
      'description' => $request->description,
      'created_at' => Carbon::now()
    ]);

    return back()->with('success_message', 'Your Data updated successfully!');
    }




    function wqtladdview()
    {
      $wqtl_infos = Wqtl::all();
      $all_wqtl_testrates = Wqtltestrate::all();
      $wqtl_test_rate_contents = Allwqtltestrate::all();
      $all_packeges = Specialpackege::all();
      return view('backend/service/wqtl', compact('wqtl_infos', 'all_wqtl_testrates', 'wqtl_test_rate_contents', 'all_packeges'));
    }

    function coxlabaddview()
    {
      $coxlab_infos = Coxlab::all();
      $coxlab_test_rate_contents = Coxlabtestrate::all();
      $coxlab_other_services = Coxlabservice::all();
      return view('backend/service/coxlabaddview', compact('coxlab_infos', 'coxlab_test_rate_contents', 'coxlab_other_services'));
    }
    function microkitaddview()
    {
      $microkit_infos = Microkit::all();
      $video_links = Microkitvideo::all();
      return view('backend/service/microkitaddview', compact('microkit_infos', 'video_links'));
    }

    function updatewqtlinsert(Request $request){
      Wqtl::find($request->wqtl_id)->update([
      'description' => $request->description,
      'name' => $request->name,
      'designation' => $request->designation,
      'phone' => $request->phone,
      'email' => $request->email,
      'location' => $request->location,
      'focal_name' => $request->focal_name,
      'focal_designation' => $request->focal_designation,
      'focal_phone' => $request->focal_phone,
      'focal_email' => $request->focal_email,
      'focal_location' => $request->focal_location,
      'created_at' => Carbon::now()
    ]);

    if($request->hasFile('logo')){
      if(Wqtl::find($request->wqtl_id)->logo !='wqtl_logo.jpg'){
        $nametodelete = Wqtl::find($request->wqtl_id)->logo;
        unlink(base_path('public/uploads/wqtl_image/'.$nametodelete));
      }
    }

    $uploaded_image = $request->logo;
    $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
    $new_img_name = $request->wqtl_id.'.'.$our_uploaded_img_extension;
    Image::make($uploaded_image)->resize(258, 339)->save(base_path('public/uploads/wqtl_image/'.$new_img_name));

     Wqtl::find($request->wqtl_id)->update([
      'logo' => $new_img_name,
    ]);

    return back()->with('success_message', 'Your Data updated successfully!');
    }

    function updatecoxlabinsert(Request $request){
      Coxlab::find($request->coxlab_id)->update([
      'title' => $request->title,
      'description' => $request->description,
      'name' => $request->name,
      'designation' => $request->designation,
      'phone' => $request->phone,
      'email' => $request->email,
      'location' => $request->location,
      'focal_name' => $request->focal_name,
      'focal_designation' => $request->focal_designation,
      'focal_phone' => $request->focal_phone,
      'focal_email' => $request->focal_email,
      'focal_location' => $request->focal_location,
      'created_at' => Carbon::now()
    ]);

    if($request->hasFile('logo')){
      if(Coxlab::find($request->coxlab_id)->logo !='coxlab_logo.jpg'){
        $nametodelete = Coxlab::find($request->coxlab_id)->logo;
        unlink(base_path('public/uploads/coxlab_image/'.$nametodelete));
      }
    }

    $uploaded_image = $request->logo;
    $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
    $new_img_name = $request->coxlab_id.'.'.$our_uploaded_img_extension;
    Image::make($uploaded_image)->resize(506, 165)->save(base_path('public/uploads/coxlab_image/'.$new_img_name));

     Wqtl::find($request->coxlab_id)->update([
      'logo' => $new_img_name,
    ]);

    return back()->with('success_message', 'Your Data updated successfully!');
    }

    //i am here
    function updatemicrokitinsert(Request $request){
      Microkit::find($request->microkit_id)->update([
      'description' => $request->description,
      'qualitative' => $request->qualitative,
      'origin' => $request->origin,
      'location' => $request->location,
      'created_at' => Carbon::now()
    ]);

    if($request->hasFile('logo')){
      if(Microkit::find($request->microkit_id)->logo !='microkit_logo.jpg'){
        $nametodelete = Microkit::find($request->microkit_id)->logo;
        unlink(base_path('public/uploads/microkit_image/'.$nametodelete));
      }
    }

    $uploaded_image = $request->logo;
    $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
    $new_img_name = $request->microkit_id.'.'.$our_uploaded_img_extension;
    Image::make($uploaded_image)->resize(483, 235)->save(base_path('public/uploads/microkit_image/'.$new_img_name));

     Microkit::find($request->microkit_id)->update([
      'logo' => $new_img_name,
    ]);

    return back()->with('success_message', 'Your Data updated successfully!');
    }

    function testratecategoryinsert(Request $request){
      Wqtltestrate::insert([
        'category_name' => $request->category_name,
        'created_at' => Carbon::now(),
      ]);
      return back()->with('success_message', 'Your Category added successfully!');
    }

    function testrateeditinsert(Request $request){
      Wqtltestrate::find($request->testrate_id)->update([
      'category_name' => $request->category_name,
      'created_at' => Carbon::now()
    ]);

    return back()->with('success_message', 'Your Data updated successfully!');
    }

    function testratedelete($testrate_id){
      Wqtltestrate::findOrFail($testrate_id)->Delete();
      return back()->with('success_message', 'Your data deleted successfully!');
    }

// wqtl test rate method
    function wqtl_test_rateinsert(Request $request){
      Allwqtltestrate::insert([
        'testrate_category_id' => $request->testrate_category_id,
        'serial_number' => $request->serial_number,
        'parameters' => $request->parameters,
        'method' => $request->method,
        'cost' => $request->cost,
        'created_at' => Carbon::now()
      ]);
      return back()->with('success_message', 'Your test rate content added successfully!');
    }

    function wqtl_test_rate_contenteditinsert(Request $request){
      Allwqtltestrate::find($request->testrate_id)->update([
        'testrate_category_id' => $request->testrate_category_id,
        'serial_number' => $request->serial_number,
        'parameters' => $request->parameters,
        'method' => $request->method,
        'cost' => $request->cost,
        'created_at' => Carbon::now()
    ]);

    return back()->with('success_message', 'Your Data updated successfully!');
    }

    function wqtl_test_rate_contentdelete($testrate_id){
      Allwqtltestrate::findOrFail($testrate_id)->Delete();
      return back()->with('success_message', 'Your data deleted successfully!');
    }

// coxlab test rate method
function coxlab_test_rateinsert(Request $request){
  Coxlabtestrate::insert([
    'serial_number' => $request->serial_number,
    'parameters' => $request->parameters,
    'method' => $request->method,
    'cost' => $request->cost,
    'created_at' => Carbon::now()
  ]);
  return back()->with('success_message', 'Your test rate content added successfully!');
}

function coxlab_test_rate_contenteditinsert(Request $request){
  Coxlabtestrate::find($request->testrate_id)->update([
    'serial_number' => $request->serial_number,
    'parameters' => $request->parameters,
    'method' => $request->method,
    'cost' => $request->cost,
    'created_at' => Carbon::now()
]);

return back()->with('success_message', 'Your Data updated successfully!');
}

function coxlab_test_rate_contentdelete($testrate_id){
  Coxlabtestrate::findOrFail($testrate_id)->Delete();
  return back()->with('success_message', 'Your data deleted successfully!');
}

// i am here
function videoinsert(Request $request){
  Microkitvideo::insert([
    'video_link' => $request->video_link,
    'created_at' => Carbon::now()
  ]);
  return back()->with('success_message', 'Your microkit video added successfully!');
}

function videoeditinsert(Request $request){
  Microkitvideo::find($request->video_id)->update([
    'video_link' => $request->video_link,
    'created_at' => Carbon::now()
]);

return back()->with('success_message', 'Your Data updated successfully!');
}

function videodelete($video_id){
  Microkitvideo::findOrFail($video_id)->Delete();
  return back()->with('success_message', 'Your data deleted successfully!');
}

function coxlabotherserviceinsert(Request $request){
  Coxlabservice::insert([
    'service' => $request->service,
    'created_at' => Carbon::now(),
  ]);
  return back()->with('success_message', 'Your Cox lab service added successfully!');
}
function coxlab_test_rate_service_contentdelete($testrate_id){
  Coxlabservice::findOrFail($testrate_id)->Delete();
  return back()->with('success_message', 'Your data deleted successfully!');
}


//special packege
    function packegeinsert(Request $request){
      Specialpackege::insert([
        'name' => $request->name,
        'price' => $request->price,
        'parameters' => $request->parameters,
        'created_at' => Carbon::now()
      ]);
      return back()->with('success_message', 'Your special packege added successfully!');
    }

    function packegeeditinsert(Request $request){
      Specialpackege::find($request->packege_id)->update([
        'name' => $request->name,
        'price' => $request->price,
        'parameters' => $request->parameters,
        'created_at' => Carbon::now()
    ]);

    return back()->with('success_message', 'Your Data updated successfully!');
    }

    function packegedelete($packege_id){
      Specialpackege::findOrFail($packege_id)->Delete();
      return back()->with('success_message', 'Your data deleted successfully!');
    }

    //i am here

    function wqtlhomeimageinsert(Request $request){

        $lastinsertedid = Wqtlhomeimage::insertGetId([
          'title' => 'sample title',
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('image')){
          $uploaded_image = $request->image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(3840, 2160)->save(base_path('public/uploads/wqtlhome_image/'.$new_img_name));

          Wqtlhomeimage::find($lastinsertedid)->update([
            'image' => $new_img_name,
          ]);
        }
        return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function wqtlhomeimageeditinsert(Request $request){

    if($request->hasFile('image')){
      if(Wqtlhomeimage::find($request->homeimage_id)->image !='wqtlhome_image.jpg'){
        $nametodelete = Wqtlhomeimage::find($request->homeimage_id)->image;
        unlink(base_path('public/uploads/wqtlhome_image/'.$nametodelete));
      }
    }

    $uploaded_image = $request->image;
    $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
    $new_img_name = $request->homeimage_id.'.'.$our_uploaded_img_extension;
    Image::make($uploaded_image)->resize(3840, 2160)->save(base_path('public/uploads/wqtlhome_image/'.$new_img_name));

     Wqtlhomeimage::find($request->homeimage_id)->update([
      'image' => $new_img_name,
    ]);

    return back()->with('success_message', 'Your Data updated successfully!');
    }

    function wqtl_home_imagedelete($homeimage_id){
      $news_image_name =  Wqtlhomeimage::findOrFail($homeimage_id)->image;
      if($news_image_name != 'wqtlhome_image.jpg'){
        unlink(base_path('public/uploads/wqtlhome_image/'.$news_image_name));
      }
      Wqtlhomeimage::findOrFail($homeimage_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }

}
