@extends('admin.master')
@section('admin')


<div class="container">
    <h1>Add Sub Category</h1>

<form action="{{ route('subcategories.store')}}" method="POST">
    @csrf

    <div class="col-md-6">
        <label class="form-label">Sub Category Name</label>
        <input type="text" class="form-control" name="subcategory_name" required>

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Category Name</label>

        <select name="category_id" class="form-control" required>

            @foreach ($category as $row)
                <option value="{{ $row->id}}">{{ $row->category_name}}</option>
            @endforeach


        </select>

      </div>
      <br>

      <button type="submit" class="btn btn-primary">Submit</button>


</form>
</div>

@endsection

