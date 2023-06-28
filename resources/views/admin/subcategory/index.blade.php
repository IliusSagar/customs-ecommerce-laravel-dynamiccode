@extends('admin.master')
@section('admin')


<div class="container">
    <h1>List Sub Category </h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Sub Category Name</th>
        <th scope="col">Category Name</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>

        @foreach($subcat as $key=> $row)

      <tr>

        <td>{{ $key +1}}</td>
        <td>{{ $row->subcategory_name}}</td>
        <td>{{ $row->category_name}}</td>
        <td><a href="{{ route('subcategories.edit',$row->id)}}">Edit</a></td>
        <td><a href="{{ route('subcategories.delete',$row->id)}}">Delete</a></td>

      </tr>

      @endforeach

    </tbody>
  </table>
</div>

@endsection

