<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin.category.index',compact('category'));
    } // End Method

    public function add(){
        return view('admin.category.add');
    } // End Method

    public function store(Request $request){
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();

        return Redirect()->back();
    } // End Method

    public function delete($id){
        DB::table('categories')->where('id',$id)->delete();
        return Redirect()->back();
    }

    public function edit($id){
        $category = DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request,$id){
        $data=array();
        $data['category_name'] = $request->category_name;
        $update=DB::table('categories')->where('id',$id)->update($data);
        return Redirect()->back();
    }
}
