@extends('admin.master')
@section('admin')


<div class="container">
    <h1>Add Coupon</h1>

<form action="{{ route('coupons.store')}}" method="POST">
    @csrf

    <div class="col-md-6">
        <label class="form-label">Coupon Name</label>
        <input type="text" class="form-control" name="coupon" required>

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Discount</label>
        <input type="number" class="form-control" name="discount" required>

      </div>
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>


</form>
</div>

@endsection

