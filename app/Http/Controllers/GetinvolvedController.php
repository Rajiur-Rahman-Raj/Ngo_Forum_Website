<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CellsDepartments;
use App\Regionaloffice;
use App\Career;
use Image;
use App\Projectoffice;
use App\Contactoffice;
use Carbon\Carbon;
use Auth;

class GetinvolvedController extends Controller
{
    function contactview()
    {
       return view('backend/get_Involved/contact');
    }
    function callview()
    {
        $celldepartments = CellsDepartments::all();
        return view('backend/get_Involved/call', compact('celldepartments'));
    }
    function cellsdepartmentinsert(Request $request){

    CellsDepartments::insert([
      'position_name' => $request->position_name,
      'name' => $request->name,
      'position' => $request->position,
      'email' => $request->email,
      'created_at' => Carbon::now()
    ]);
    return back();
    }
    function celldepartmenteditinsert(Request $request){
      CellsDepartments::find($request->celldepartment_id)->update([
        'position_name' => $request->position_name,
        'name' => $request->name,
        'position' => $request->position,
        'email' => $request->email,
      ]);
      return back();
    }
    function celldepartmentdelete($celldepartment_id){
        CellsDepartments::find($celldepartment_id)->delete();
        return back();
   }
    function regionalview()
    {
       $regionaloffices = Regionaloffice::all();
       return view('backend/get_Involved/regional', compact('regionaloffices'));
    }
    function regionalinsert(Request $request){

    Regionaloffice::insert([
      'region' => $request->region,
      'person' => $request->person,
      'street_address' => $request->street_address,
      'phone' => $request->phone,
      'email' => $request->email,
      'district_covergae' => $request->district_covergae,
      'created_at' => Carbon::now()
    ]);
    return back();
    }
    function regionalofficeeditinsert(Request $request){
      Regionaloffice::find($request->regionaloffice_id)->update([
        'region' => $request->region,
        'person' => $request->person,
        'street_address' => $request->street_address,
        'phone' => $request->phone,
        'email' => $request->email,
        'district_covergae' => $request->district_covergae,
      ]);
      return back();
    }
    function regionalofficedelete($regionaloffice_id){
        Regionaloffice::find($regionaloffice_id)->delete();
        return back();
   }
    function projectview()
    {
       $project_office = Projectoffice::all();
       return view('backend/get_Involved/project', compact('project_office'));
    }
    function projectinsert(Request $request){
      $request->validate([
          'project_location' => 'required',
          'project_name' => 'required',
          'funded_logo' => 'required',
        //   'contact_parson' => 'required',
        //   'address' => 'required',
        //   'phone' => 'required',
        //   'email' => 'required'
        ],[
          'project_location.required' => 'project_location field must be required!',
          'project_name.required' => 'project_name field must be required!',
          'funded_logo.required' => 'funded_logo field must be required!',
        //   'contact_parson.required' => 'contact_parson field must be required!',
        //   'address.required' => 'address field must be required!',
        //   'phone.required' => 'phone field must be required!',
        //   'email.required' => 'email field must be required!',
        ]);

        $Projectoffices = Projectoffice::insertGetId([
          'project_location' => $request->project_location,
          'project_name' => $request->project_name,
          'funded_logo' => $request->funded_logo,
          'contact_parson' => $request->contact_parson,
          'address' => $request->address,
          'phone' => $request->phone,
          'email' => $request->email,
          'created_at' => Carbon::now(),
        ]);

        if($request->hasFile('funded_logo')){
          $uploaded_image = $request->funded_logo;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $Projectoffices.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(450,280)->save(base_path('public/uploads/project_office_logo/'.$new_img_name));

          Projectoffice::find($Projectoffices)->update([
            'funded_logo' => $new_img_name,
          ]);
        }
        return back()->with('success_message', 'Your Existing Project Added Sudccessfully!');
    }
    function projectofficeeditinsert(Request $request){
        Projectoffice::find($request->project_id)->update([
        'project_location' => $request->project_location,
        'project_name' => $request->project_name,
        'contact_parson' => $request->contact_parson,
        'address' => $request->address,
        'phone' => $request->phone,
        'email' => $request->email,
        'created_at' => Carbon::now()
      ]);


      if($request->hasFile('funded_logo')){
        if(Projectoffice::find($request->project_id)->funded_logo !='funded_logo.png'){
          $nametodelete = Projectoffice::find($request->project_id)->funded_logo;
          unlink(base_path('public/uploads/project_office_logo/'.$nametodelete));
        }
      }

      $uploaded_image = $request->funded_logo;
      $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
      $new_img_name = $request->project_id.'.'.$our_uploaded_img_extension;
      Image::make($uploaded_image)->resize(450,280)->save(base_path('public/uploads/project_office_logo/'.$new_img_name));

       Projectoffice::find($request->project_id)->update([
        'funded_logo' => $new_img_name,
      ]);

      return back()->with('message', 'Existing project updated successfully!');
    }
    function projectdelete($project_id){
      $funded_logo =  Projectoffice::findOrFail($project_id)->funded_logo;
      if($funded_logo != 'funded_logo.png'){
        unlink(base_path('public/uploads/project_office_logo/'.$funded_logo));
      }
      Projectoffice::findOrFail($project_id)->Delete();
      return back()->with('success_message', 'Your project deleted successfully!');
    }


    function careerview()
    {
       $careers = Career::all();
       return view('backend/get_Involved/career', compact('careers'));
    }
    function careerinsert(Request $request){

    Career::insert([
      'job_tatile' => $request->job_tatile,
      'Type' => $request->Type,
      'Location' => $request->Location,
      'Salary' => $request->Salary,
      'Deadline' => $request->Deadline,
      'link' => $request->link,
      'created_at' => Carbon::now()
    ]);
    return back();
    }
    function careereditinsert(Request $request){
      Career::find($request->career_id)->update([
        'job_tatile' => $request->job_tatile,
        'Type' => $request->Type,
        'Location' => $request->Location,
        'Salary' => $request->Salary,
        'Deadline' => $request->Deadline,
        'link' => $request->link,
      ]);
      return back();
    }
    function careerdelete($career_id){
        Career::find($career_id)->delete();
        return back();
   }

   //contact method
   function addcontactinsert(Request $request){
     $lastinsertedid = Contactoffice::insertGetId([
       'user_id' => Auth::id(),
       'office_location' => $request->office_location,
       'office_phone' => $request->office_phone,
       'office_fax' => $request->office_fax,
       'office_email' => $request->office_email,
       'office_website' => $request->office_website,
       'name' => $request->name,
       'designation' => $request->designation,
       'phone' => $request->phone,
       'fax' => $request->fax,
       'email' => $request->email,
       'map_link' => $request->map_link,
       'created_at' => Carbon::now()
     ]);

     if($request->hasFile('image')){
       $uploaded_image = $request->image;
       $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
       $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
       Image::make($uploaded_image)->resize(623, 930)->save(base_path('public/uploads/contact_image/'.$new_img_name));

       Contactoffice::find($lastinsertedid)->update([
         'image' => $new_img_name,
       ]);
     }
     return back()->with('success_message', 'Your contact information added Sudccessfully!');
   }

   function updatecontactinsert(Request $request){
     Contactoffice::find($request->user_contact_id)->update([
        'office_location' => $request->office_location,
        'office_phone' => $request->office_phone,
        'office_fax' => $request->office_fax,
        'office_email' => $request->office_email,
        'office_website' => $request->office_website,
        'name' => $request->name,
        'designation' => $request->designation,
        'phone' => $request->phone,
        'fax' => $request->fax,
        'email' => $request->email,
        'map_link' => $request->map_link,
        'created_at' => Carbon::now(),
      ]);

      if($request->hasFile('image')){
        $uploaded_image = $request->image;
        $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
        $new_img_name = $request->user_contact_id.'.'.$our_uploaded_img_extension;
        Image::make($uploaded_image)->resize(623, 930)->save(base_path('public/uploads/contact_image/'.$new_img_name));

         Contactoffice::find($request->user_contact_id)->update([
          'image' => $new_img_name,
        ]);
      }
      return back()->with('success_message', 'Your contact information updated successfully!');
   }
}
