<?php

namespace App\Http\Controllers\Admin\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use DB;

class SubCategoryController extends Controller
{


    public function index(){
        $category = DB::table('categories')->get();
        $subcat = DB::table('sub_categories')
                    ->join('categories','sub_categories.category_id','categories.id')
                    ->select('sub_categories.*','categories.category_name')
                    ->get();

        return view('admin.subcategory.index',compact('category','subcat'));
    } // End Method

    public function add(){
        $category = DB::table('categories')->get();
        $subcat = DB::table('sub_categories')
                    ->join('categories','sub_categories.category_id','categories.id')
                    ->select('sub_categories.*','categories.category_name')
                    ->get();

        return view('admin.subcategory.add',compact('category','subcat'));
    } // End Method

    public function store(Request $request){
        $subcategory = new SubCategory();
        $subcategory->category_id = $request->category_id;
        $subcategory->subcategory_name = $request->subcategory_name;
        $subcategory->save();

        return Redirect()->back();
    } // End Method

    public function delete($id){
        DB::table('sub_categories')->where('id',$id)->delete();
        return Redirect()->back();
    }

    public function edit($id){
        $subcat = DB::table('sub_categories')->where('id',$id)->first();
        $category = DB::table('categories')->get();
        return view('admin.subcategory.edit',compact('category','subcat'));
    }

    public function update(Request $request,$id){
        $data=array();
        $data['category_id'] = $request->category_id;
        $data['subcategory_name'] = $request->subcategory_name;
        DB::table('sub_categories')->where('id',$id)->update($data);

        return Redirect()->back();

    } // End Method


}
