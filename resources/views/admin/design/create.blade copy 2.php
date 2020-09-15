@extends('admin.layouts.app')
@section('content')
@include('admin.layouts.header')
<!-- START: Main Content-->
<main id="app">
<div class="container-fluid site-width"> 
<!-- START: Card Data-->
<div class="row">
<div class="col-12 col-sm-12  mt-4">
<div class="card">
<div class="card-header">
<h6 class="card-title">Create Design For {{ $product->name }} </h6>
</div>
<div class="card-content">
<div class="card-body">
<div class="row">
	<div class="col-md-12">
        <form action="{{route('admin.product.design.store',$product->id)}}" method="post"  enctype="multipart/form-data">
			@csrf
			<div class="form-row">
				<div class="form-group col-md-5">
                <label for="inputState">Choose Design Image</label>
                <input type="file" name="design_image" id="input-b1" name="input-b1"  class="file" data-browse-on-zone-click="true">
                @error('design_image')
					<div class="alert alert-danger mt-2" role="alert">
						{{$message}}
					</div>
			  @enderror
			</div>
			<div class="form-group col-md-7">
            </div>
            <div class="form-group col-md-5">
                <label for="inputEmail4">Design Name</label>
                <input  name="design_name" type="name" value="{{old('design_name')}}" class="form-control rounded" id="inputEmail4" placeholder="Design Name">
                @error('design_name')
                <div class="alert alert-danger mt-2" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
			<div class="form-group col-md-7">
            </div>
            <div class="form-group col-md-5">
                <label for="inputEmail4">Design Price</label>
                <input  name="design_price" type="number" value="{{old('design_price')}}" class="form-control rounded" id="inputEmail4" placeholder="Design Price">
                @error('design_price')
                <div class="alert alert-danger mt-2" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
			<div class="form-group col-md-7">
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
</div>
</main>