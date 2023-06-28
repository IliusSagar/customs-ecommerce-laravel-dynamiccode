<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use DB;

class CouponController extends Controller
{
    public function index(){
        $coupon = DB::table('coupons')->get();
        return view('admin.coupon.index',compact('coupon'));
    }

    public function add(){
        return view('admin.coupon.add');
    } // End Method

    public function store(Request $request){
        $category = new Coupon();
        $category->coupon = $request->coupon;
        $category->discount = $request->discount;
        $category->save();

        return Redirect()->back();
    } // End Method

    public function delete($id){
        DB::table('coupons')->where('id',$id)->delete();
        return Redirect()->back();
    }

    public function edit($id){
        $coupon = DB::table('coupons')->where('id',$id)->first();
        return view('admin.coupon.edit',compact('coupon'));
    }

    public function update(Request $request,$id){
        $data=array();
        $data['coupon'] = $request->coupon;
        $data['discount'] = $request->discount;
        $update=DB::table('coupons')->where('id',$id)->update($data);
        return Redirect()->back();
    }
}
