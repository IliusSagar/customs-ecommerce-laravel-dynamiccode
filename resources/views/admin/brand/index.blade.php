@extends('admin.master')
@section('admin')


<div class="container">
    <h1>List Brand </h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Brand Name</th>
        <th scope="col">Brand Logo</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>

        @foreach($brand as $key=> $row)

      <tr>

        <td>{{ $key +1}}</td>
        <td>{{ $row->brand_name}}</td>
        <td><img src="{{ URL::to($row->brand_logo)}}" alt="" style="height: 40px;"></td>
        <td><a href="{{ route('brands.edit',$row->id)}}">Edit</a></td>
        <td><a href="{{ route('brands.delete',$row->id)}}">Delete</a></td>

      </tr>

      @endforeach

    </tbody>
  </table>
</div>

@endsection

