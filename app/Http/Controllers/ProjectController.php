<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExistingProjects;
use App\Implemented;
use Image;
use Carbon\Carbon;

class ProjectController extends Controller
{
    function exising_project(){
       $existing_project_info = ExistingProjects::all();
       return view('backend/project/existing_project', compact('existing_project_info'));
    }

    function existingprojectinsert(Request $request){
      $request->validate([
          'existing_title' => 'required',
          'description_one' => 'required',
          'existing_period' => 'required',
          'existing_donar' => 'required',
          'total_baget' => 'required',
          'location' => 'required',
        ],[
          'existing_title.required' => 'title field must be required!',
          'description_one.required' => 'description one field must be required!',
          'existing_period.required' => 'existing_period field must be required!',
          'existing_donar.required' => 'existing_donar period field must be required!',
          'total_baget.required' => 'total_baget field must be required!',
          'location.required' => 'location field must be required!',
        ]);

        $lastinsertedid = ExistingProjects::insertGetId([
          'existing_title' => $request->existing_title,
          'description_one' => $request->description_one,
          'existing_period' => $request->existing_period,
          'existing_donar' => $request->existing_donar,
          'total_baget' => $request->total_baget,
          'location' => $request->location,
          'existing_description' => $request->existing_description,
          'focal_name' => $request->focal_name,
          'focal_designation' => $request->focal_designation,
          'focal_phone' => $request->focal_phone,
          'focal_email' => $request->focal_email,
          'related_link' => $request->related_link,
          'related_document' => $request->related_document,
          'existing_image' => null,
          'existing_details_image' => null,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('existing_image')){
          $uploaded_image = $request->existing_image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(598, 84)->save(base_path('public/uploads/existing_project_img/'.$new_img_name));

          ExistingProjects::find($lastinsertedid)->update([
            'existing_image' => $new_img_name,
          ]);

          if($request->hasFile('existing_details_image')){
            $uploaded_details_image = $request->existing_details_image;
            $our_uploaded_details_img_extension = $uploaded_details_image->getClientOriginalExtension();
            $new_details_img_name = rand().'.'.$our_uploaded_details_img_extension;
            Image::make($uploaded_details_image)->resize(3872, 2592)->save(base_path('public/uploads/existing_project_img/'.$new_details_img_name));

            ExistingProjects::find($lastinsertedid)->update([
              'existing_details_image' => $new_details_img_name,
            ]);
          }
        }

        return back()->with('success_message', 'Your Existing Project Added Sudccessfully!');
    }

    function existingprojecteditinsert(Request $request){
        ExistingProjects::find($request->existing_id)->update([
        'existing_title' => $request->existing_title,
        'description_one' => $request->description_one,
        'existing_period' => $request->existing_period,
        'existing_donar' => $request->existing_donar,
        'total_baget' => $request->total_baget,
        'location' => $request->location,
        'focal_name' => $request->focal_name,
        'focal_designation' => $request->focal_designation,
        'focal_phone' => $request->focal_phone,
        'focal_email' => $request->focal_email,
        'related_link' => $request->related_link,
        'related_document' => $request->related_document,
        'existing_image' => null,
        'existing_details_image' => null,
        'created_at' => Carbon::now()
      ]);


      if($request->hasFile('existing_image')){
        if(ExistingProjects::find($request->existing_id)->existing_image != null){
          $nametodelete = ExistingProjects::find($request->existing_id)->existing_image;
          unlink(base_path('public/uploads/existing_project_img/'.$nametodelete));
        }
          $uploaded_image = $request->existing_image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $request->existing_id.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(350, 200)->save(base_path('public/uploads/existing_project_img/'.$new_img_name));
    
           ExistingProjects::find($request->existing_id)->update([
            'existing_image' => $new_img_name,
          ]);
      }



      if($request->hasFile('existing_details_image')){
        if(ExistingProjects::find($request->existing_id)->existing_details_image != null){
          $nametodelete_details_img = ExistingProjects::find($request->existing_id)->existing_details_image;
          unlink(base_path('public/uploads/existing_project_img/'.$nametodelete_details_img));
        }
        $uploaded_details_new_image = $request->existing_details_image;
        $our_uploaded_detail_img_extension = $uploaded_details_new_image->getClientOriginalExtension();
        $new_detail_img_name = rand().'.'.$our_uploaded_detail_img_extension;
        Image::make($uploaded_details_new_image)->resize(3872, 2592)->save(base_path('public/uploads/existing_project_img/'.$new_detail_img_name));

         ExistingProjects::find($request->existing_id)->update([
          'existing_details_image' => $new_detail_img_name,
        ]);
      }else{

      }
      return redirect('existing/project')->with('message', 'Existing project updated successfully!');
    }

    function existingprojectdelete($existing_id){
      $existing_image_name =  ExistingProjects::findOrFail($existing_id)->existing_image;
      $existing_details_image_name =  ExistingProjects::findOrFail($existing_id)->existing_details_image;
      if($existing_image_name != 'existing_img.jpg'){
        unlink(base_path('public/uploads/existing_project_img/'.$existing_image_name));
      }
      if($existing_details_image_name != 'existing_details_img.jpg'){
        unlink(base_path('public/uploads/existing_project_img/'.$existing_details_image_name));
      }
      ExistingProjects::findOrFail($existing_id)->Delete();
      return back()->with('success_message', 'Your existing project deleted successfully!');
    }
    
    function implementedview(){
      $implemented_all_infos = Implemented::all();
      return view('backend/project/implemented', compact('implemented_all_infos'));
    }
    
    function implementedinsert(Request $request){

      $request->validate([
          'project_name' => 'required',
          'project_duration' => 'required',
          'year' => 'required',
          'project_donor' => 'required',
          'thematic_area' => 'required'
        ],[
          'project_name.required' => 'project name field must be required!',
          'project_duration.required' => 'project duration field must be required!',
          'year.required' => 'year field required!',
          'project_donor.required' => 'project donor field must be required!',
          'thematic_area.required' => 'thematic area field must be required!'
        ]);

        $last_inserted_id = Implemented::insertGetId([
          'project_name' => $request->project_name,
          'short_description' => $request->short_description,
          'project_duration' => $request->project_duration,
          'year' => $request->year,
          'project_donor' => $request->project_donor,
          'thematic_area' => $request->thematic_area,
          'total_baget' => $request->total_baget,
          'location' => $request->location,
          'details_description' => $request->details_description,
          'focal_name' => $request->focal_name,
          'focal_designation' => $request->focal_designation,
          'focal_phone' => $request->focal_phone,
          'focal_email' => $request->focal_email,
          'related_link' => $request->related_link,
          'related_document' => $request->related_document,
            'project_logo' => null,
            'details_image' => null,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('project_logo')){
          $uploaded_implement_image = $request->project_logo;
          $our_uploaded_implemented_img_extension = $uploaded_implement_image->getClientOriginalExtension();
          $new_implemented_img_name = $last_inserted_id.'.'.$our_uploaded_implemented_img_extension;
          Image::make($uploaded_implement_image)->resize(350, 200)->save(base_path('public/uploads/implemented_project_img/'.$new_implemented_img_name));

          Implemented::find($last_inserted_id)->update([
            'project_logo' => $new_implemented_img_name,
          ]);

          if($request->hasFile('details_image')){
            $uploaded_details_image = $request->details_image;
            $our_uploaded_details_img_extension = $uploaded_details_image->getClientOriginalExtension();
            $new_details_img_name = rand().'.'.$our_uploaded_details_img_extension;
            Image::make($uploaded_details_image)->resize(3872, 2592)->save(base_path('public/uploads/implemented_project_img/'.$new_details_img_name));

            Implemented::find($last_inserted_id)->update([
              'details_image' => $new_details_img_name,
            ]);
          }
        }

        return back()->with('success_message', 'Your Implemented Project Added Sudccessfully!');
    }

    function implementededit(Request $request){
      Implemented::find($request->implemented_id)->update([
        'project_name' => $request->project_name,
        'short_description' => $request->short_description,
        'project_duration' => $request->project_duration,
        'year' => $request->year,
        'project_donor' => $request->project_donor,
        'thematic_area' => $request->thematic_area,
        'total_baget' => $request->total_baget,
        'location' => $request->location,
        'focal_name' => $request->focal_name,
        'focal_designation' => $request->focal_designation,
        'focal_phone' => $request->focal_phone,
        'focal_email' => $request->focal_email,
        'related_link' => $request->related_link,
        'related_document' => $request->related_document,
        'project_logo' => null,
        'details_image' => null,
        'created_at' => Carbon::now()
      ]);

      if($request->hasFile('project_logo')){
        if(Implemented::find($request->implemented_id)->project_logo != null){
          $nametodelete = Implemented::find($request->implemented_id)->project_logo;
          unlink(base_path('public/uploads/implemented_project_img/'.$nametodelete));
        }
          $uploaded_image = $request->project_logo;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $request->implemented_id.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(350, 200)->save(base_path('public/uploads/implemented_project_img/'.$new_img_name));
    
           Implemented::find($request->implemented_id)->update([
            'project_logo' => $new_img_name,
          ]);
      }

      


      if($request->hasFile('details_image')){
        if(Implemented::find($request->implemented_id)->details_image != null){
          $nametodelete_details_img = Implemented::find($request->implemented_id)->details_image;
          unlink(base_path('public/uploads/implemented_project_img/'.$nametodelete_details_img));
        }
        $uploaded_details_new_image = $request->details_image;
        $our_uploaded_detail_img_extension = $uploaded_details_new_image->getClientOriginalExtension();
        $new_detail_img_name = rand().'.'.$our_uploaded_detail_img_extension;
        Image::make($uploaded_details_new_image)->resize(3872, 2592)->save(base_path('public/uploads/implemented_project_img/'.$new_detail_img_name));

         Implemented::find($request->implemented_id)->update([
          'details_image' => $new_detail_img_name,
        ]);
      }else{

      }
      return redirect('implemented/view')->with('message', 'Implemented project updated successfully!');
    }


    function implementeddelete($implemented_id){
      $implemented_image_name =  Implemented::findOrFail($implemented_id)->project_logo;
      $implemented_details_image_name =  Implemented::findOrFail($implemented_id)->details_image;
      if($implemented_image_name != 'implemented_logo_image.jpg'){
        unlink(base_path('public/uploads/implemented_project_img/'.$implemented_image_name));
      }
      if($implemented_details_image_name != 'implemented_details_image.jpg'){
        unlink(base_path('public/uploads/implemented_project_img/'.$implemented_details_image_name));
      }
      Implemented::findOrFail($implemented_id)->Delete();
      return back()->with('success_message', 'Your implemented project deleted successfully!');
    }
    
    public function existingProjectSearch(Request $request){
        if($request->ajax())
        {
            $output = "";
            $projects = DB::table('existing_projects ')->where('existing_title','LIKE','%'.$request->search."%")->OrderBy('sl_no','desc')->get();

            if($products)
            {
                foreach ($products as $key => $product) {

                    $output.='<tr class="searchTable">'.
                    '<td>'.$product->id.'</td>'.
                    '<td>'.$product->product_name.'</td>'.
                    '<td>'.'<a class="btn btn-sm btn-info rounded mb-1" href="/add/product/to/before/buy/'.$product->id.'">'.'<i class="far fa-plus-square"></i>'.'</a>'.'</td>'.
                    '</tr>';
                }
                return Response($output);
            }
        }
    }

}
