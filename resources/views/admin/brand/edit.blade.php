@extends('admin.master')
@section('admin')


<div class="container">
    <h1>Edit Brand</h1>

<form action="{{ route('brands.update',$brand->id)}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="col-md-6">
        <label class="form-label">Brand Name</label>
        <input type="text" class="form-control" name="brand_name" required value="{{ $brand->brand_name}}">

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Brand Logo</label>
        <input type="file" class="form-control" name="brand_logo" value="{{ $brand->brand_name}}">

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Old Brand Logo</label>
        <img src="{{ URL::to($brand->brand_logo)}}" alt="" style="height: 40px;">
        <input type="hidden" class="form-control" name="old_logo" value="{{ $brand->brand_logo}}">

      </div>
      <br>

      <button type="submit" class="btn btn-primary">Update</button>


</form>
</div>

@endsection

