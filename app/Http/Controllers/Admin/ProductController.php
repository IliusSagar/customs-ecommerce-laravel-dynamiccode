<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{


    public function index(){
        $product = Product::all();
        return view('admin.product.index',compact('product'));
    } // End Method

    public function add(){
        $category = DB::table('categories')->get();
        $subcategory = DB::table('sub_categories')->get();
        $brand = DB::table('brands')->get();
        return view('admin.product.add',compact('category','brand','subcategory'));
    } // End Method

//     public function GetSubcat($category_id){
//    	$cat = DB::table('sub_categories')->where('category_id',$category_id)->get();
//    	return json_encode($cat);

//    }

public function store(Request $request){

        $data['product_name'] = $request->product_name;
        $data['product_code'] = $request->product_code;
        $data['product_quantity'] = $request->product_quantity;
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['brand_id'] = $request->brand_id;
        $data['product_size'] = $request->product_size;
        $data['product_color'] = $request->product_color;
        $data['selling_price'] = $request->selling_price;
        $data['product_details'] = $request->product_details;
        $data['video_link'] = $request->video_link;
        $data['main_slider'] = $request->main_slider;
        $data['hot_deal'] = $request->hot_deal;
        $data['best_rated'] = $request->best_rated;
        $data['trend'] = $request->trend;
        $data['mid_slider'] = $request->mid_slider;
        $data['hot_new'] = $request->hot_new;
        $data['status'] = 1;

        $image_one = $request->image_one;
        $image_two = $request->image_two;
        $image_three = $request->image_three;

        // return response($data);

        if($image_one && $image_two && $image_three){

            $image_one_name = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
            $data['image_one'] = 'public/media/product/'.$image_one_name;

            $image_two_name = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(300,300)->save('public/media/product/'.$image_two_name);
            $data['image_two'] = 'public/media/product/'.$image_two_name;

            $image_three_name = hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
            Image::make($image_three)->resize(300,300)->save('public/media/product/'.$image_three_name);
            $data['image_three'] = 'public/media/product/'.$image_three_name;

            $product = DB::table('products')->insert($data);
            return Redirect()->back();
        }

        // $product = DB::table('products')->insert($data);
        //     return Redirect()->back();



    }


}
