@extends('admin.master')
@section('admin')


<div class="container">
    <h1>Add Category</h1>

<form action="{{ route('categories.store')}}" method="POST">
    @csrf

    <div class="col-md-6">
        <label class="form-label">Category Name</label>
        <input type="text" class="form-control" name="category_name" required>

      </div>
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>


</form>
</div>

@endsection
