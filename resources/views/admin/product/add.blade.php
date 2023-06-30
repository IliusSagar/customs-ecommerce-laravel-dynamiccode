@extends('admin.master')


@section('admin')

<link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> --}}

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<style>
    .bootstrap-tagsinput .tag {
  margin-right: 2px;
  color: white;
  background: blue;
  padding: 2px;
    }
</style>


<div class="container">
    <h1>Add Product</h1>

<form action="{{ route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf


    <div class="col-md-6">
        <label class="form-label">Product Name</label>
        <input type="text" class="form-control" name="product_name" >

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Product Code</label>
        <input type="text" class="form-control" name="product_code" >

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Product Quantity</label>
        <input type="text" class="form-control" name="product_quantity" >

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Category</label>
        <select name="category_id" class="form-control">
            @foreach ($category as $row)
            <option value="{{ $row->id}}">{{ $row->category_name}}</option>
            @endforeach

        </select>

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Sub Category</label>
        <select name="subcategory_id" class="form-control">
            @foreach ($subcategory as $row)
            <option value="{{ $row->id}}">{{ $row->subcategory_name}}</option>
            @endforeach
        </select>

      </div>
      <br>

{{--
      <div class="col-lg-4">
        <div class="form-group mg-b-10-force">
          <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
<select class="form-control select2" data-placeholder="Choose country" name="category_id">
            <option label="Choose Category"></option>
            @foreach($category as $row)
            <option value="{{ $row->id }}">{{ $row->category_name }}</option>
            @endforeach
          </select>
        </div>
      </div>


      <div class="col-lg-4">
        <div class="form-group mg-b-10-force">
          <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
<select class="form-control select2" data-placeholder="Choose country" name="subcategory_id">

          </select>
        </div>
      </div> --}}



      <div class="col-md-6">
        <label class="form-label">Brand</label>
        <select name="brand_id" class="form-control">
            @foreach ($brand as $row)
            <option value="{{ $row->id}}">{{ $row->brand_name}}</option>
            @endforeach
        </select>

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Product Size</label>
        <input type="text" class="form-control" name="product_size" id="size" data-role="tagsinput" >

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Product Color</label>
        <input type="text" class="form-control" name="product_color" id="color" data-role="tagsinput" >

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Selling Price</label>
        <input type="text" class="form-control" name="selling_price"  >

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Product Details</label>
        {{-- <input type="text" class="form-control" name="product_details"  id="summernote"> --}}
        <textarea name="product_details" id="summernote" cols="30" rows="10"></textarea>

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Video Link</label>
        <input type="text" class="form-control" name="video_link"  >

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Image One(Main Thumbnail)</label>
        <input type="file" id="file" class="form-control" name="image_one"  >

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Image Two</label>
        <input type="file" id="file" class="form-control" name="image_two"  >

      </div>
      <br>

      <div class="col-md-6">
        <label class="form-label">Image Three</label>
        <input type="file" id="file" class="form-control" name="image_three"  >

      </div>
      <br>

      <div class="row">

        <div class="col-md-6">
          <label class="ckbox">
            <input type="checkbox" name="main_slider" value="1">
          </label>
          <span>Main Slider</span>
        </div>

        <div class="col-md-6">
          <label class="ckbox">
            <input type="checkbox" name="hot_new" value="1">
          </label>
          <span>Hot Deal</span>
        </div>

        <div class="col-md-6">
          <label class="ckbox">
            <input type="checkbox" name="best_rated" value="1">
          </label>
          <span>Best Rated</span>
        </div>

        <div class="col-md-6">
          <label class="ckbox">
            <input type="checkbox" name="mid_slider" value="1">
          </label>
          <span>Mid Slider</span>
        </div>

        <div class="col-md-6">
          <label class="ckbox">
            <input type="checkbox" name="trend" value="1">
          </label>
          <span>Trend Product</span>
        </div>

      </div>


      <br>
      <button type="submit" class="btn btn-primary">Submit</button>


</form>
</div>



<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>


<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>

{{-- // Subcategory Ajax  --}}

{{-- <script type="text/javascript">
    $(document).ready(function(){
   $('select[name="category_id"]').on('change',function(){
        var category_id = $(this).val();
        if (category_id) {

          $.ajax({
            url: "{{ url('/get/subcategory/') }}/"+category_id,
            type:"GET",
            dataType:"json",
            success:function(data) {
            var d =$('select[name="subcategory_id"]').empty();
            $.each(data, function(key, value){

            $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');

            });
            },
          });

        }else{
          alert('danger');
        }

          });


    });

</script> --}}



@endsection

