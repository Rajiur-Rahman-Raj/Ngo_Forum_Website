<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\all_programme;
use App\Human;
use App\programme_categorie;
use App\Humanproject;
use Image;

class ProgrammeCategoryController extends Controller
{

  function AllProgramme(){
    $programme_categories = Programme_categorie::all();
    $all_pogramme_details = All_programme::all();
    $human_infos = Human::all();
    $human_project_infos = Humanproject::all();
    return view('backend/programme/all_programme', compact('programme_categories', 'all_pogramme_details',  'human_infos', 'human_project_infos'));
  }

  function categoryprogrammeinsert(Request $request){
        Programme_categorie::insert([
          'category_name' => $request->category_name,
          'category_description' => $request->category_description,
          'created_at' => Carbon::now(),
        ]);
        return back()->with('success_message', 'Your Category add successfully!');
  }

  function categoryprogrammedelete($category_id){
        Programme_categorie::findOrFail($category_id)->delete();
        return back()->with('success_message', 'category deleted successfully!');
  }

  function categoryprogrammeeditinsert(Request $request){
        Programme_categorie::findOrFail($request->category_id)->update([
          'category_name' => $request->category_name,
          'category_description' => $request->category_description,
        ]);
        return back()->with('success_message', 'category name update successfully!..');
  }

  function updatehumaninsert(Request $request){
        Human::find($request->human_id)->update([
        'description' => $request->description,
        'ck_description' => $request->ck_description,
        'created_at' => Carbon::now()
      ]);
    
      if($request->hasFile('image')){
        if(Human::find($request->human_id)->image !='human_image.jpg'){
          $nametodelete = Human::find($request->human_id)->image;
          unlink(base_path('public/uploads/human_image/'.$nametodelete));
        }
          $uploaded_image = $request->image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $request->human_id.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(3872, 2592)->save(base_path('public/uploads/human_image/'.$new_img_name));
        
           Human::find($request->human_id)->update([
            'image' => $new_img_name,
          ]);
      }
    
      return back()->with('success_message', 'Your Data updated successfully!');
  }



  //i am here
  function humanprojectinsert(Request $request){
      Humanproject::insert([
        'project_name' => $request->project_name,
        'project_duration' => $request->project_duration,
        'year' => $request->year,
        'project_donor' => $request->project_donor,
        'thematic_area' => $request->thematic_area,
        'created_at' => Carbon::now()
      ]);
      return back()->with('success_message', 'Your Data Added Sudccessfully!');
      }

      function humanprojecteditinsert(Request $request){
        Humanproject::find($request->human_id)->update([
          'project_name' => $request->project_name,
          'project_duration' => $request->project_duration,
          'year' => $request->year,
          'project_donor' => $request->project_donor,
          'thematic_area' => $request->thematic_area,
          'created_at' => Carbon::now()
        ]);
        return back()->with('success_message', 'Your Data Updated Sudccessfully!');
        // return redirect('implemented/view')->with('message', 'Implemented project updated successfully!');
      }


      function humanprojectdelete($human_id){
        Humanproject::findOrFail($human_id)->Delete();
        return back()->with('success_message', 'Your Data deleted successfully!');
      }

  }
