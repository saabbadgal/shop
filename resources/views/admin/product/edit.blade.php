@extends('admin.layouts.app')
@section('content')
@include('admin.layouts.header')
<!-- START: Main Content-->
<main>
<div class="container-fluid site-width">
<!-- START: Breadcrumbs-->
{{-- <div class="row">
<div class="col-12  align-self-center">
<div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
<div class="w-sm-100 mr-auto"><h4 class="mb-0">Product : {{$product->name}} | Model :  {{$product->model}}  </h4>  </div>

</div>
</div>
</div> --}}
<!-- END: Breadcrumbs-->
<!-- START: Card Data-->


<div class="row">
<div class="col-12 col-sm-12  mt-4">
<div class="card">
<div class="card-header">
<h6 class="card-title">Edit Product</h6>
</div>
<div class="card-content">
<div class="card-body">
<div class="row">
<div class="col-md-12">
	<form action="{{route('admin.product.update',$product->id)}}" method="post"  enctype="multipart/form-data">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-5">
				<label for="inputState">Choose Primary Image (Only if you want to update)</label>
				<input type="file" name="image" id="input-b1" name="input-b1"  class="file" data-browse-on-zone-click="true">
				@error('image')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-7">
				
				<img class="portfolioImage img-fluid float-right" src="{{ asset($product->primary_image)}}" alt="" style="max-width: 220px;">
			</div>
			<div class="form-group col-md-5">
				<label for="inputEmail4">Name</label>
				<input  name="name" type="name" value="{{$product->name}}" class="form-control rounded" id="inputEmail4" placeholder="Name">
				@error('name')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-5">
				<label for="inputEmail4">Model</label>
				<input name="model" type="name" value="{{$product->model}}" class="form-control rounded" id="inputEmail4" placeholder="Model">
				@error('model')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-2">
				<label for="inputEmail4">Color</label>
				<input name="color" type="name" value="{{$product->color}}" class="form-control rounded" id="inputEmail4" placeholder="Color">
				@error('color')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-2">
				<label for="inputEmail4">Price</label>
				<input name="price" value="{{$product->price}}" class="form-control rounded" id="inputEmail4" placeholder="Price">
				@error('price')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-2">
				<label for="inputEmail4">Discount Price</label>
				<input name="discountPrice" value="{{$product->discountPrice}}" class="form-control rounded" id="inputEmail4" placeholder="Discount Price">
				@error('discountPrice')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
			</div> 
			<div class="form-group col-md-2">
				<label for="inputEmail4">Ideal For</label>
				<select name="idealFor" data-select2-id="1" tabindex="-1" class="select2-hidden-accessible form-control rounded" aria-hidden="true">
					<option  disabled="true" selected="true" label="Choose on thing" data-select2-id="3">Ideal For</option>
					<option {{ $product->idealFor == 'men' ? "selected" : ""}} value="men" data-select2-id="35">Men</option>
					<option {{ $product->idealFor == 'women' ? "selected" : ""}} value="women" data-select2-id="36">Women</option>
					<option {{ $product->idealFor == 'babyBoy' ? "selected" : ""}} value="babyBoy" data-select2-id="37">Baby Boy</option>
					<option {{ $product->idealFor == 'babyGirl' ? "selected" : ""}} value="babyGirl" data-select2-id="38">Baby Girl</option>
				</select>
				@error('idealFor')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
			</div>
			@foreach($product->sizes as $ps)
			@php
			$s[] = $ps->id;
			@endphp
			@endforeach
			<div class="form-group col-md-5  ml-md-3">
				<label for="inputEmail4">Size : &nbsp;</label><br>
				@foreach($sizes as $size)
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox"  name="sizes[]"  class="custom-control-input"  id="outlineinfo{{$size->id}}" value="{{$size->id}}" {{in_array($size->id, $s) ? "checked" : ""}}>
					<label class="custom-control-label checkbox-info outline" for="outlineinfo{{$size->id}}">{{$size->size}}</label>
				</div>
				@endforeach
				@error('sizes')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
			</div>

			<div class="form-group col-md-3">
					<label for="inputEmail4">Stock</label>
					 	<input  name="stock" type="name" value="{{$product->stock}}" class="form-control rounded" id="inputEmail4" placeholder="Stock">
					@error('stock')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div> 
				<div class="form-group col-md-3">
					<label for="inputEmail4">Outer Material</label>
				     <input  name="outerMaterial" type="name" value="{{$product->outerMaterial}}" class="form-control rounded" id="inputEmail4" placeholder="Outer Material">
					@error('outerMaterial')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div>
				<div class="form-group col-md-3">
					<label for="inputEmail4">Sole Material</label>
					 <input  name="soleMaterial" type="name" value="{{$product->soleMaterial}}" class="form-control rounded" id="inputEmail4" placeholder="Sole Material">
					@error('soleMaterial')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div>
				<div class="form-group col-md-3">
					<label for="inputEmail4">Upper Pattern</label>
					<input  name="upperPattern" type="name" value="{{$product->upperPattern}}" class="form-control rounded" id="inputEmail4" placeholder="Upper Pattern">
					@error('upperPattern')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div>
				<div class="form-group col-md-3 d-none">
					<label for="inputEmail4">Outer Material</label>
					<select  data-select2-id="1" tabindex="-1" class="select2-hidden-accessible form-control rounded" aria-hidden="true">
						<option  disabled="true" selected="true" label="Choose on thing" data-select2-id="3">Outer Material</option>
						<option value=" " data-select2-id="35">Synthetics</option>
						<option value=" " data-select2-id="36">Rubber</option>
						<option value="   " data-select2-id="37">Foam</option>
					</select>
				</div>
			<div class="form-group col-md-12">
				<label for="inputEmail4">Description</label>
				<textarea name="description" class="summernote-inline border theme-border" style="display: none;">{{$product->description}}</textarea>
				@error('description')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
			</div>
			
			<div class="form-group col-md-3 ">
				<label for="inputEmail4">Select Type</label>
				<select id="selected" name="type" data-select2-id="1" tabindex="-1" class="select2-hidden-accessible form-control rounded" aria-hidden="true"> 
					<option value="without_design" {{  $product->type == "Without Design" ? "selected" : ""}} data-select2-id="36">Without Design</option>
					<option value="with_design" {{  $product->type == "With Design" ? "selected" : ""}} data-select2-id="35">With Design</option> 
				</select> 
			</div>  
			<div class="form-group col-md-3" id="design_box">
				<label for="inputEmail4">Design Price</label>
				<input id="dp"  name="design_price" type="number" value="{{$product->designPrice}}" class="form-control rounded" id="inputEmail4" placeholder="Design Price">
				@error('design_price')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
		</div>   
		
		<div class="form-group col-md-3 d-none">
			<label for="inputEmail4">Add Type</label>
			<select  data-select2-id="1" tabindex="-1" class="select2-hidden-accessible form-control rounded" aria-hidden="true">
				
			</select>
		</div>
			<div class="form-group col-md-12">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</div>
	</form>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<!-- END: Card DATA-->
</div>
</main>
<!-- END: Content-->

@include('admin.layouts.footer')
@endsection

@section('vue')
<script>
$(document).ready(function() {
if($("#design_box").val() == 'With Design'){
	$("design_box").show();
	}else{
    $("#select").hide();
	}

$('#selected').on('change', function (e) {
	// alert('hello');
    var valueSelected = this.value;
	if(this.value == "without_design"){
     $("#design_box").hide();
	 $('#dp').val('');
	}else{
	 $("#design_box").show();
	//  $("#dp").val({{ $product->designPrice }});
	}
    
});
});
 
// new Vue({
// 	el: '#app',
// 	data: {
// 	  selected: '0',
// 	}
//   });
</script>
	
@endsection