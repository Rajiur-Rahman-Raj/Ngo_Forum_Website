<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\NewsCategory;

class NewsCategoryController extends Controller
{
  function addnewscategory(){
    $news_categories = NewsCategory::all();
    return view('backend/news/add_category_news', compact('news_categories'));
  }

  function categorynewsinsert(Request $request){
    $request->validate([
          'category_name'=>'required',
        ],[
          'category_name.required' => 'Category name is must be required',
        ]);

        NewsCategory::insert([
          'category_name' => $request->category_name,
          'created_at' => Carbon::now(),
        ]);
        return back()->with('success_message', 'Your Category add successfully!');
  }

  function categorynewsdelete($category_id){
        NewsCategory::findOrFail($category_id)->delete();
        return back()->with('success_message', 'category deleted successfully!');
  }

  function categorynewseditinsert(Request $request){
        NewsCategory::findOrFail($request->category_id)->update([
          'category_name' => $request->category_name,
        ]);
        return back()->with('success_message', 'category name update successfully!..');
  }
}
