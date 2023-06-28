@extends('admin.master')
@section('admin')


<div class="container">
    <h1>List Coupon </h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Coupon Code</th>
        <th scope="col">Coupon Percentage</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>

        @foreach($coupon as $key=> $row)

      <tr>

        <td>{{ $key +1}}</td>
        <td>{{ $row->coupon}}</td>
        <td>{{ $row->discount}}</td>
        <td><a href="{{ route('coupons.edit',$row->id)}}">Edit</a></td>
        <td><a href="{{ route('coupons.delete',$row->id)}}">Delete</a></td>

      </tr>

      @endforeach

    </tbody>
  </table>
</div>

@endsection

