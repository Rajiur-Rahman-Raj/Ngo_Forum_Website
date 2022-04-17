<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Ataglancecategory;

class AtaglancecategoryController extends Controller
{
  function ataglancecategory(){
    $at_a_glance_categorys = Ataglancecategory::all();
    return view('backend/programme_status/at_a_glance_category', compact('at_a_glance_categorys'));
  }

  function ataglancecategoryinsert(Request $request){
    $request->validate([
          'category_name'=>'required',
        ],[
          'category_name.required' => 'Category name is must be required',
        ]);

        Ataglancecategory::insert([
          'category_name' => $request->category_name,
          'created_at' => Carbon::now(),
        ]);
        return back()->with('success_message', 'Your Category add successfully!');
  }

  function ataglancecategorydelete($category_id){
        Ataglancecategory::findOrFail($category_id)->delete();
        return back()->with('success_message', 'category deleted successfully!');
  }

  function ataglancecategoryeditinsert(Request $request){
        Ataglancecategory::findOrFail($request->category_id)->update([
          'category_name' => $request->category_name,
        ]);
        return back()->with('success_message', 'category name update successfully!..');
  }
}
