@extends('admin.master')
@section('admin')


<div class="container">
    <h1>Add Brand</h1>

<form action="{{ route('brands.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="col-md-6">
        <label class="form-label">Brand Name</label>
        <input type="text" class="form-control" name="brand_name" required>

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Brand Logo</label>
        <input type="file" class="form-control" name="brand_logo" >

      </div>
      <br>

      <button type="submit" class="btn btn-primary">Submit</button>


</form>
</div>

@endsection

