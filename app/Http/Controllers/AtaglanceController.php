<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ataglancecategory;
use App\Ataglance;
use Carbon\Carbon;

class AtaglanceController extends Controller
{
  function ataglance(){
    $category_at_a_glance_details = Ataglancecategory::all();
    $all_at_a_glance_details = Ataglance::all();
    return view('backend/programme_status/at_a_glance', compact('category_at_a_glance_details', 'all_at_a_glance_details'));
  }

  function allataglanceinsert(Request $request){
    $request->validate([
        'at_a_glance_category_id' => 'required',
        'title' => 'required',
        'amount' => 'required',
      ],[
        'at_a_glance_category_id.required' => 'please select your categroy name!',
        'title.required' => 'title must be required!',
        'amount.required' => 'amount must be required!',
      ]);

      $lastinsertedid = Ataglance::insertGetId([
        'at_a_glance_category_id' => $request->at_a_glance_category_id,
        'title' => $request->title,
        'amount' => $request->amount,
        'ck_description' => $request->ck_description,
        'created_at' => Carbon::now()
      ]);
      return back()->with('success_message', 'Your glance Added Sudccessfully!');
  }

  function ataglanceeditinsert(Request $request){
    Ataglance::find($request->at_a_glance_id)->update([
    'at_a_glance_category_id' => $request->category_id,
    'title' => $request->title,
    'amount' => $request->amount,
    'created_at' => Carbon::now()
  ]);

  return back()->with('success_message', 'glance updated successfully!');
  }

  function ataglancedelete($at_a_glance_id_id){
      Ataglance::find($at_a_glance_id_id)->delete();
      return back();
 }
}
