@extends('admin.master')
@section('admin')


<div class="container">
    <h1>Edit Coupon</h1>

<form action="{{ route('coupons.update',$coupon->id)}}" method="POST">
    @csrf

    <div class="col-md-6">
        <label class="form-label">Coupon Name</label>
        <input type="text" class="form-control" name="coupon" required value="{{ $coupon->coupon}}">

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Discount</label>
        <input type="number" class="form-control" name="discount" required value="{{ $coupon->discount}}">

      </div>
      <br>
      <button type="submit" class="btn btn-primary">Update</button>


</form>
</div>

@endsection


