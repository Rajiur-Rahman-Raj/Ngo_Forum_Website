<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abouutnogform;
use App\Aboutcategory;
use App\Allabout;
use App\Allpolicy;
use App\Allgeneral;
use Image;
use App\Aboutnetwork;
use Carbon\Carbon;

class WhoweareController extends Controller
{
    function aboutview()
    {
      $about_ngo_forms = Abouutnogform::all();
      return view('backend/who_we_are/about', compact('about_ngo_forms'));
    }

    function aboutngoinsert(Request $request){
      $request->validate([
          'about_ngo_image' => 'required',
          'about_ngo_description' => 'required',
          'about_ngo_vision_title' => 'required',
          'about_ngo_vision_bg_image' => 'required',
        ],[
          'about_ngo_image.required' => 'image field must be required!',
          'about_ngo_description.required' => 'description  field must be required!',
          'about_ngo_vision_title.required' => 'vision field must be required!',
          'about_ngo_vision_bg_image.required' => 'image field must be required!',
        ]);

        $lastinsertedid = Abouutnogform::insertGetId([
          'about_ngo_description' => $request->about_ngo_description,
          'about_ngo_description_two' => $request->about_ngo_description_two,
          'about_ngo_vision_title' => $request->about_ngo_vision_title,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('about_ngo_image')){
          $uploaded_image = $request->about_ngo_image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(1898, 1600)->save(base_path('public/uploads/about_ngo_image/'.$new_img_name));

          Abouutnogform::find($lastinsertedid)->update([
            'about_ngo_image' => $new_img_name,
          ]);

          if($request->hasFile('about_ngo_vision_bg_image')){
            $uploaded_details_image = $request->about_ngo_vision_bg_image;
            $our_uploaded_details_img_extension = $uploaded_details_image->getClientOriginalExtension();
            $new_details_img_name = rand().'.'.$our_uploaded_details_img_extension;
            Image::make($uploaded_details_image)->resize(3200, 600)->save(base_path('public/uploads/about_ngo_image/'.$new_details_img_name));

            Abouutnogform::find($lastinsertedid)->update([
              'about_ngo_vision_bg_image' => $new_details_img_name,
            ]);
          }
        }

        return back()->with('success_message', 'Your About ngo Added Sudccessfully!');
    }

    function aboutngoeditinsert(Request $request){
        Abouutnogform::find($request->about_ngo_id)->update([
        'about_ngo_description' => $request->about_ngo_description,
        'about_ngo_description_two' => $request->about_ngo_description_two,
        'about_ngo_vision_title' => $request->about_ngo_vision_title,
        'created_at' => Carbon::now()
      ]);
      if($request->hasFile('about_ngo_image')){
        if(Abouutnogform::find($request->about_ngo_id)->about_ngo_image !='about_ngo_image.jpg'){
          $nametodelete = Abouutnogform::find($request->about_ngo_id)->about_ngo_image;
          unlink(base_path('public/uploads/about_ngo_image/'.$nametodelete));
        }
      }
      $uploaded_image = $request->about_ngo_image;
      $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
      $new_img_name = $request->about_ngo_id.'.'.$our_uploaded_img_extension;
      Image::make($uploaded_image)->resize(1898, 1600)->save(base_path('public/uploads/about_ngo_image/'.$new_img_name));

       Abouutnogform::find($request->about_ngo_id)->update([
        'about_ngo_image' => $new_img_name,
      ]);


      if($request->hasFile('about_ngo_vision_bg_image')){
        if(Abouutnogform::find($request->about_ngo_id)->about_ngo_vision_bg_image !='about_ngo_vision_bg_image.jpg'){
          $nametodelete_details_img = Abouutnogform::find($request->about_ngo_id)->about_ngo_vision_bg_image;
          unlink(base_path('public/uploads/about_ngo_image/'.$nametodelete_details_img));
        }
      }

      $uploaded_details_new_image = $request->about_ngo_vision_bg_image;
      $our_uploaded_detail_img_extension = $uploaded_details_new_image->getClientOriginalExtension();
      $new_detail_img_name = rand().'.'.$our_uploaded_detail_img_extension;
      Image::make($uploaded_details_new_image)->resize(3200, 600)->save(base_path('public/uploads/about_ngo_image/'.$new_detail_img_name));

       Abouutnogform::find($request->about_ngo_id)->update([
        'about_ngo_vision_bg_image' => $new_detail_img_name,
      ]);

      return back()->with('message', 'updated successfully!');
    }

    function aboutngodelete($about_ngo_id){
      $about_ngo_image =  Abouutnogform::findOrFail($about_ngo_id)->about_ngo_image;
      $about_ngo_vision_bg_image =  Abouutnogform::findOrFail($about_ngo_id)->about_ngo_vision_bg_image;
      if($about_ngo_image != 'about_ngo_image.jpg'){
        unlink(base_path('public/uploads/about_ngo_image/'.$about_ngo_image));
      }
      if($about_ngo_vision_bg_image != 'about_ngo_vision_bg_image.jpg'){
        unlink(base_path('public/uploads/about_ngo_image/'.$about_ngo_vision_bg_image));
      }
      Abouutnogform::findOrFail($about_ngo_id)->Delete();
      return back()->with('success_message', 'Your  deleted successfully!');
    }
    function aboutcategory(){
      $about_categories = Aboutcategory::all();
      $all_about_details = Abouutnogform::all();
      return view('backend/who_we_are/about_category', compact('about_categories', 'all_about_details'));
    }

    function categoryaboutinsert(Request $request){
      $request->validate([
            'category_name'=>'required',
          ],[
            'category_name.required' => 'Category name is must be required',
          ]);

          Aboutcategory::insert([
            'category_name' => $request->category_name,
            'created_at' => Carbon::now(),
          ]);
          return back()->with('success_message', 'Your Category add successfully!');
    }

    function categoryaboutdelete($category_id){
          Aboutcategory::findOrFail($category_id)->delete();
          return back()->with('success_message', 'category deleted successfully!');
    }

    function categoryabouteditinsert(Request $request){
          Aboutcategory::findOrFail($request->category_id)->update([
            'category_name' => $request->category_name,
          ]);
          return back()->with('success_message', 'category name update successfully!..');
    }
    function Allabout(){
      $category_about_details = Aboutcategory::all();
      $all_about_details = Allabout::all();
      return view('backend/who_we_are/all_about', compact('category_about_details', 'all_about_details'));
    }

    function allaboutinsert(Request $request){
      $request->validate([
          'about_category_id' => 'required',

          'bg_image' => 'required',

        ],[
          'about_category_id.required' => 'please select your categroy name!',

          'bg_image.required' => 'bg_image must be required!',
          'description.required' => 'image description field must be required!',
        ]);

        $lastinsertedid = Allabout::insertGetId([
          'about_category_id' => $request->about_category_id,


          'ck_description' => $request->ck_description,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('bg_image')){
          $uploaded_image = $request->bg_image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(3512, 2055)->save(base_path('public/uploads/about_ngo_image/'.$new_img_name));

          Allabout::find($lastinsertedid)->update([
            'bg_image' => $new_img_name,
          ]);
        }
        return back()->with('success_message', 'Your About Added Sudccessfully!');
    }

    function allabouteditinsert(Request $request){
      Allabout::find($request->about_id)->update([
      'about_category_id' => $request->category_id,


      'created_at' => Carbon::now()
    ]);

    if($request->hasFile('bg_image')){
      if(Allabout::find($request->about_id)->bg_image !='default_bg_image.jpg'){
        $nametodelete = Allabout::find($request->about_id)->bg_image;
        unlink(base_path('public/uploads/about_ngo_image/'.$nametodelete));
      }
    }

    $uploaded_image = $request->bg_image;
    $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
    $new_img_name = $request->about_id.'.'.$our_uploaded_img_extension;
    Image::make($uploaded_image)->resize(3512, 2055)->save(base_path('public/uploads/about_ngo_image/'.$new_img_name));

     Allabout::find($request->about_id)->update([
      'bg_image' => $new_img_name,
    ]);

    return back()->with('success_message', 'about updated successfully!');
    }

    function allaboutdelete($about_id){
      $news_image_name =  Allabout::findOrFail($about_id)->bg_image;
      if($news_image_name != 'default_bg_image.jpg'){
        unlink(base_path('public/uploads/about_ngo_image/'.$news_image_name));
      }
      Allabout::findOrFail($about_id)->Delete();
      return back()->with('success_message', 'Your about deleted successfully!');
    }
    function policyview()
    {
      $policy_info = Allpolicy::all();
      return view('backend/who_we_are/policy', compact('policy_info'));
    }
    function policyinsert(Request $request){
      $request->validate([
          'mamber_image' => 'required',
          'mamber_name' => 'required',
          'mamber_title' => 'required',
          'possession' => 'required',
        ],[
          'mamber_image.required' => 'mamber image field must be required!',
          'mamber_name.required' => 'mamber name  field must be required!',
          'mamber_title.required' => 'mamber title field must be required!',
          'possession.required' => 'possession field must be required!',
        ]);

        $lastinsertedid = Allpolicy::insertGetId([
          'mamber_name' => $request->mamber_name,
          'mamber_title' => $request->mamber_title,
          'possession' => $request->possession,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('mamber_image')){
          $uploaded_image = $request->mamber_image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(633, 839)->save(base_path('public/uploads/policy_image/'.$new_img_name));

          Allpolicy::find($lastinsertedid)->update([
            'mamber_image' => $new_img_name,
          ]);
        }
        return back()->with('success_message', 'Your About ngo Added Sudccessfully!');
    }

    function policyeditinsert(Request $request){
        Allpolicy::find($request->policy_id)->update([
        'mamber_name' => $request->mamber_name,
        'mamber_title' => $request->mamber_title,
        'possession' => $request->possession,
        'created_at' => Carbon::now()
      ]);
      if($request->hasFile('mamber_image')){
        if(Allpolicy::find($request->policy_id)->mamber_image !='mamber_image.jpg'){
          $nametodelete = Allpolicy::find($request->policy_id)->mamber_image;
          unlink(base_path('public/uploads/policy_image/'.$nametodelete));
        }
      }
      $uploaded_image = $request->mamber_image;
      $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
      $new_img_name = $request->about_ngo_id.'.'.$our_uploaded_img_extension;
      Image::make($uploaded_image)->resize(633, 839)->save(base_path('public/uploads/policy_image/'.$new_img_name));

       Allpolicy::find($request->policy_id)->update([
        'mamber_image' => $new_img_name,
      ]);

      return back()->with('message', 'updated successfully!');
    }

    function policydelete($policy_id){
      $policy_image =  Allpolicy::findOrFail($policy_id)->mamber_image;
      if($policy_image != 'mamber_image.jpg'){
        unlink(base_path('public/uploads/policy_image/'.$policy_image));
      }
      Allpolicy::findOrFail($policy_id)->Delete();
      return back()->with('success_message', 'Your  deleted successfully!');
    }
    function generalmamber()
    {
      $general_info = Allgeneral::all();
      return view('backend/who_we_are/general_mamber', compact('general_info'));
    }
    function generalinsert(Request $request){
      $request->validate([
          'general_name' => 'required',
          'description' => 'required',
        ],[
          'general_name.required' => 'general_name field must be required!',
          'description.required' => 'description field must be required!',
        ]);
        $lastinsertedid = Allgeneral::insertGetId([
          'general_name' => $request->general_name,
          'description' => $request->description,
          'created_at' => Carbon::now()
        ]);
        return back()->with('success_message', 'Your  Added Sudccessfully!');
      }

        function generaleditinsert(Request $request){
            Allgeneral::find($request->general_id)->update([
            'general_name' => $request->general_name,
            'description' => $request->description,
            'created_at' => Carbon::now()
          ]);
          return back()->with('message', 'updated successfully!');
      }
        function generaldelete($general_id){
          Allgeneral::findOrFail($general_id)->Delete();
          return back()->with('success_message', 'Your  deleted successfully!');
        }
// network
    function networkaddview()
    {
      $network_info = Aboutnetwork::all();
      return view('backend/who_we_are/network', compact('network_info'));
    }

    function networkinsert(Request $request){
      $request->validate([
          'development_image' => 'required',
          'networking_image' => 'required'
        ],[
          'development_image.required' => 'this field is required!',
          'networking_image.required' => 'this field is required!'
        ]);

        $lastinsertedid = Aboutnetwork::insertGetId([
          'title' => 'sample title',
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('development_image')){
          $uploaded_image = $request->development_image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(855, 579)->save(base_path('public/uploads/network_image/'.$new_img_name));

          Aboutnetwork::find($lastinsertedid)->update([
            'development_image' => $new_img_name,
          ]);
        }

        if($request->hasFile('networking_image')){
          $networking_img = $request->networking_image;
          $our_networking_img_extension = $networking_img->getClientOriginalExtension();
          $networking_img_name = rand().'.'.$our_networking_img_extension;
          Image::make($networking_img)->resize(855, 579)->save(base_path('public/uploads/network_image/'.$networking_img_name));

          Aboutnetwork::find($lastinsertedid)->update([
            'networking_image' => $networking_img_name,
          ]);
        }
        return back()->with('success_message', 'Your network affiliation added sudccessfully!');
    }

    function networkeditinsert(Request $request){
        Aboutnetwork::find($request->network_id)->update([
        'created_at' => Carbon::now()
      ]);
      if($request->hasFile('development_image')){
        if(Aboutnetwork::find($request->network_id)->development_image !='development.jpg'){
          $nametodelete = Aboutnetwork::find($request->network_id)->development_image;
          unlink(base_path('public/uploads/network_image/'.$nametodelete));
        }
        $uploaded_dev_image = $request->development_image;
        $our_uploaded_dev_img_extension = $uploaded_dev_image->getClientOriginalExtension();
        $new_dev_img_name = $request->network_id.'.'.$our_uploaded_dev_img_extension;
        Image::make($uploaded_dev_image)->resize(855, 579)->save(base_path('public/uploads/network_image/'.$new_dev_img_name));

         Aboutnetwork::find($request->network_id)->update([
          'development_image' => $new_dev_img_name,
        ]);
      }

      if($request->hasFile('networking_image')){
        if(Aboutnetwork::find($request->network_id)->networking_image !='networking.jpg'){
          $nameto_net_delete = Aboutnetwork::find($request->network_id)->networking_image;
          unlink(base_path('public/uploads/network_image/'.$nameto_net_delete));
        }

        $uploaded_net_image = $request->networking_image;
        $our_uploaded_net_img_extension = $uploaded_net_image->getClientOriginalExtension();
        $new_net_img_name = rand().'.'.$our_uploaded_net_img_extension;
        Image::make($uploaded_net_image)->resize(855, 579)->save(base_path('public/uploads/network_image/'.$new_net_img_name));

         Aboutnetwork::find($request->network_id)->update([
          'networking_image' => $new_net_img_name,
        ]);
      }
      return back()->with('message', 'updated successfully!');
    }

    function networkdelete($network_id){
      $development_image =  Aboutnetwork::findOrFail($network_id)->development_image;
      $networking_image =  Aboutnetwork::findOrFail($network_id)->networking_image;
      if($development_image != 'development.jpg'){
        unlink(base_path('public/uploads/network_image/'.$development_image));
      }

      if($networking_image != 'networking.jpg'){
        unlink(base_path('public/uploads/network_image/'.$networking_image));
      }

      Aboutnetwork::findOrFail($network_id)->Delete();
      return back()->with('success_message', 'Your data deleted successfully!');
    }
}
