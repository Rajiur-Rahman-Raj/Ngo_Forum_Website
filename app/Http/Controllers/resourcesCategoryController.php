<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\resourcesCategory;
use App\Allresources;

class resourcesCategoryController extends Controller
{
  function resourcescategory(){
    $resources_categories = resourcesCategory::all();
    $all_resources_details = Allresources::all();
    return view('backend/resources/resources_category', compact('resources_categories', 'all_resources_details'));
  }

  function categoryresourcesinsert(Request $request){
    $request->validate([
          'category_name'=>'required',
        ],[
          'category_name.required' => 'Category name is must be required',
        ]);

        resourcesCategory::insert([
          'category_name' => $request->category_name,
          'created_at' => Carbon::now(),
        ]);
        return back()->with('success_message', 'Your Category add successfully!');
  }

  function categoryresourcesdelete($category_id){
        resourcesCategory::findOrFail($category_id)->delete();
        return back()->with('success_message', 'category deleted successfully!');
  }

  function categoryresourceseditinsert(Request $request){
        resourcesCategory::findOrFail($request->category_id)->update([
          'category_name' => $request->category_name,
        ]);
        return back()->with('success_message', 'category name update successfully!..');
  }
}
