@extends('admin.master')
@section('admin')


<div class="container">
    <h1>Edit Category</h1>

<form action="{{ route('categories.update',$category->id)}}" method="POST">
    @csrf

    <div class="col-md-6">
        <label class="form-label">Category Name</label>
        <input type="text" class="form-control" name="category_name" required value="{{ $category->category_name}}">

      </div>
      <br>
      <button type="submit" class="btn btn-primary">Update</button>


</form>
</div>

@endsection

