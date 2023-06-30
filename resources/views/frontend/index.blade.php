@extends('frontend.master')
@section('frontend')

@php
    $featured = DB::table('products')->where('status',1)->orderBy('id','desc')->limit(8)->get();

    $trend = DB::table('products')->where('status',1)->where('trend',1)->orderBy('id','desc')->limit(8)->get();

    $best = DB::table('products')->where('status',1)->where('best_rated',1)->orderBy('id','desc')->limit(8)->get();
@endphp

<div class="container ">
    <div class="row">

        <center><h1>Featured Products</h1></center>


@foreach ($featured as $row)

<div class="col-md-3">
    <h3>{{ $row->product_name}}</h3>
    <img src="{{ asset($row->image_one)}}" alt="" style="width: 70px; height: 70px;">

    @if ($row->discount_price == NULL)
        <p>${{ $row->selling_price}}</p>
    @else
        <p>${{ $row->discount_price}} <span>${{ $row->selling_price}}</span> </p>
    @endif

    {{-- // Discount percentage new  --}}
    @if ($row->discount_price == NULL)
        <p style="color: red;">New</p>
    @else
        <p style="color: blue;">
            @php
                $amount = $row->selling_price - $row->discount_price;
                $discount = $amount/$row->selling_price*100;
            @endphp

            {{ intval($discount) }}%
        </p>
    @endif

    <button class="btn btn-info">Add to cart</button>

</div>

@endforeach

    </div>
</div>



<div class="container mt-5">
    <div class="row">

        <center><h1>Trend Products</h1></center>


@foreach ($trend as $row)

<div class="col-md-3">
    <h3>{{ $row->product_name}}</h3>
    <img src="{{ asset($row->image_one)}}" alt="" style="width: 70px; height: 70px;">

    @if ($row->discount_price == NULL)
        <p>${{ $row->selling_price}}</p>
    @else
        <p>${{ $row->discount_price}} <span>${{ $row->selling_price}}</span> </p>
    @endif

    {{-- // Discount percentage new  --}}
    @if ($row->discount_price == NULL)
        <p style="color: red;">New</p>
    @else
        <p style="color: blue;">
            @php
                $amount = $row->selling_price - $row->discount_price;
                $discount = $amount/$row->selling_price*100;
            @endphp

            {{ intval($discount) }}%
        </p>
    @endif

    <button class="btn btn-info">Add to cart</button>

</div>

@endforeach

    </div>
</div>




<div class="container mt-5">
    <div class="row">

        <center><h1>Best Rated Products</h1></center>


@foreach ($best as $row)

<div class="col-md-3">
    <h3>{{ $row->product_name}}</h3>
    <img src="{{ asset($row->image_one)}}" alt="" style="width: 70px; height: 70px;">

    @if ($row->discount_price == NULL)
        <p>${{ $row->selling_price}}</p>
    @else
        <p>${{ $row->discount_price}} <span>${{ $row->selling_price}}</span> </p>
    @endif

    {{-- // Discount percentage new  --}}
    @if ($row->discount_price == NULL)
        <p style="color: red;">New</p>
    @else
        <p style="color: blue;">
            @php
                $amount = $row->selling_price - $row->discount_price;
                $discount = $amount/$row->selling_price*100;
            @endphp

            {{ intval($discount) }}%
        </p>
    @endif

    <button class="btn btn-info">Add to cart</button>

</div>

@endforeach

    </div>
</div>



@endsection
