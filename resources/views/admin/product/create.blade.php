@extends('admin.layouts.app')
@section('content')
@include('admin.layouts.header')
<!-- START: Main Content-->
<main>
<div class="container-fluid site-width"> 
<!-- START: Card Data-->
<div class="row">
<div class="col-12 col-sm-12  mt-4">
<div class="card">
<div class="card-header">
<h6 class="card-title">Create Product</h6>
</div>
<div class="card-content">
<div class="card-body">
<div class="row">
	<div class="col-md-12">
		<form action="{{route('admin.product.store')}}" method="post"  enctype="multipart/form-data">
			@csrf
			<div class="form-row">
				<div class="form-group col-md-5">
                <label for="inputState">Choose Primary Image</label>
                <input type="file" name="image" id="input-b1" name="input-b1"  class="file" data-browse-on-zone-click="true">
                @error('image')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
			  @enderror
			</div>
				<div class="form-group col-md-7">
					 
			</div>
				<div class="form-group col-md-5">
					<label for="inputEmail4">Name</label>
					<input  name="name" type="name" value="{{old('name')}}" class="form-control rounded" id="inputEmail4" placeholder="Name">
					@error('name')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div>
				<div class="form-group col-md-5">
					<label for="inputEmail4">Model</label>
					<input name="model" type="name" value="{{old('model')}}" class="form-control rounded" id="inputEmail4" placeholder="Model">
					@error('model')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div>
				<div class="form-group col-md-2">
					<label for="inputEmail4">Color</label>
					<input name="color" type="name" value="{{old('color')}}" class="form-control rounded" id="inputEmail4" placeholder="Color">
					@error('color')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div>
				<div class="form-group col-md-2">
					<label for="inputEmail4">Price</label>
					<input name="price" value="{{old('price')}}"  class="form-control rounded" id="inputEmail4" placeholder="Price">
					@error('price')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div>
				<div class="form-group col-md-2">
					<label for="inputEmail4">Discount Price</label>
					<input name="discountPrice" value="{{old('discountPrice')}}"   class="form-control rounded" id="inputEmail4" placeholder="Discount Price">
					@error('discountPrice')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div>{{--
				<div class="form-group col-md-6">
					<label for="inputEmail4">Categories</label>
					<select name="categories[]" multiple="" data-allow-clear="1" data-select2-id="4" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
						@foreach($categories as $category)
						
						<option value="{{$category->id}}"  {{in_array($category->id, old("categories") ? : [] ) ? "selected": ""}}>{{$category->name}}</option>
						
						@if(in_array($category->id, old("categories") ? : [] ) ))
						@continue
						
						<option value="{{$category->id}}" {{ old('categories->id') == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
						@endif
						@endforeach
					</select>
					@error('categories')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div> --}}
				<div class="form-group col-md-2">
					<label for="inputEmail4">Ideal For</label>
					<select name="idealFor" data-select2-id="1" tabindex="-1" class="select2-hidden-accessible form-control rounded" aria-hidden="true">
						<option  disabled="true" selected="true" label="Choose on thing" data-select2-id="3">Ideal For</option>
						<option {{old('idealFor') == 'men' ? "selected" : ""}} value="men" data-select2-id="35">Men</option>
						<option {{old('idealFor') == 'women' ? "selected" : ""}} value="women" data-select2-id="36">Women</option>
						<option {{old('idealFor') == 'babyBoy' ? "selected" : ""}} value="babyBoy" data-select2-id="37">Baby Boy</option>
						<option {{old('idealFor') == 'babyGirl' ? "selected" : ""}} value="babyGirl" data-select2-id="38">Baby Girl</option>
					</select>
					@error('idealFor')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div> 
				<div class="form-group col-md-5 ml-md-3">
					<label for="inputEmail4">Size : &nbsp;</label><br>
					@foreach($sizes as $size)
					<div class="custom-control custom-checkbox custom-control-inline">
						<input type="checkbox" name="sizes[]"  class="custom-control-input"  id="outlineinfo{{$size->id}}" value="{{$size->id}}" {{ (is_array(old('sizes')) and in_array($size->id, old('sizes'))) ? ' checked' : '' }} >
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
					 	<input  name="stock" type="name" value="{{old('stock')}}" class="form-control rounded" id="inputEmail4" placeholder="Stock">
					@error('stock')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div> 
				<div class="form-group col-md-3">
					<label for="inputEmail4">Outer Material</label>
				     <input  name="outerMaterial" type="name" value="{{old('outerMaterial')}}" class="form-control rounded" id="inputEmail4" placeholder="Outer Material">
					@error('outerMaterial')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div>
				<div class="form-group col-md-3">
					<label for="inputEmail4">Sole Material</label>
					 <input  name="soleMaterial" type="name" value="{{old('soleMaterial')}}" class="form-control rounded" id="inputEmail4" placeholder="Sole Material">
					@error('soleMaterial')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div>
				<div class="form-group col-md-3">
					<label for="inputEmail4">Upper Pattern</label>
					<input  name="upperPattern" type="name" value="{{old('upperPattern')}}" class="form-control rounded" id="inputEmail4" placeholder="Upper Pattern">
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
			{{-- 	<div class="form-group col-md-6">
					<label for="inputEmail4">Size &nbsp;</label>
					
					<select name="sizes[]" multiple="" data-allow-clear="1" data-select2-id="5" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
						@foreach($sizes as $size)
						
						<option value="{{$size->id}}"  {{in_array($size->id, old("sizes") ? : [] ) ? "selected": ""}}>{{$size->size}}</option>
						
						@if(in_array($size->id, old("sizes") ? : [] ) ))
						@continue
						<option value="{{$size->id}}" {{ old('sizes->id') == $size->id ? 'selected' : '' }}>{{$size->size}}</option>
						@endif
						@endforeach
					</select>
					@error('sizes')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror --}}
					
					{{--  <option value="{{$category->id}}"  {{in_array($category->id, old("categories") ? : [] ) ? "selected": ""}}>{{$category->name}}</option>
					
					@if(in_array($category->id, old("categories") ? : [] ) ))
					@continue
					
					<option value="{{$category->id}}" {{ old('categories->id') == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
					@endif --}}
					{{--
					@foreach($sizes as $size)
					<div class="custom-control custom-checkbox custom-control-inline">
						<input type="checkbox" {{in_array($size->id,old('size') ? : [] ) ? "checked" : "" }}  name="size[]" value="{{$size->id}}" class="custom-control-input" id="customCheck{{$size->id}}">
						<label class="custom-control-label" for="customCheck{{$size->id}}">{{$size->size}} </label>
					</div>
					@if(in_array($size->id,old('size') ? : [] ))
					
					@continue
					<div class="custom-control custom-checkbox custom-control-inline">
						<input type="checkbox"  name="size[]" value="{{$size->id}}" class="custom-control-input" id="customCheck{{$size->id}}">
						<label class="custom-control-label" for="customCheck{{$size->id}}">{{$size->size}} </label>
					</div>
					@endif
					
					@endforeach
					
					@error('size')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror --}}
				{{-- </div> --}}
				<div class="form-group col-md-12">
					<label for="inputEmail4">Description</label>
					<textarea name="description" class="summernote-inline border theme-border" style="display: none;">{{old('description')}} </textarea>
					@error('description')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
					@enderror
				</div>
				<div class="form-group col-md-12">
					<button type="submit" class="btn btn-primary">Save</button>
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