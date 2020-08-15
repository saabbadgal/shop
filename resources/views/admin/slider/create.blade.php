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
<div class="w-sm-100 mr-auto"><h4 class="mb-0">Create Product</h4>  </div>
<ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Dashboard</li>
</ol>
</div>
</div>
</div> --}}
<!-- END: Breadcrumbs-->
<!-- START: Card Data-->
<div class="row">
<div class="col-12 col-sm-12  mt-4">
<div class="card">
<div class="card-header">
<h6 class="card-title">Create Slider</h6>
</div>
<div class="card-content">
<div class="card-body">
<div class="row">
<div class="col-md-12">
	<form action="{{route('admin.slider.store')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-5">
				<label for="inputEmail4">Image</label>
				<input  name="image" type="file" value="" class="form-control rounded" id="inputEmail4" placeholder="Heading one">
				@error('heading_one')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="col-md-7"></div>
			<div class="form-group col-md-5">
				<label for="inputEmail4">Heading 1</label>
				<input  name="heading_one" type="text" value="{{old('heading_one')}}" class="form-control rounded" id="inputEmail4" placeholder="Heading one">
				@error('heading-one')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="col-md-7"></div>
			<div class="form-group col-md-5">
				<label for="inputEmail4">Heading 2</label>
				<input  name="heading_two" type="text" value="{{old('heading_two')}}" class="form-control rounded" id="inputEmail4" placeholder="Heading two">
				@error('heading_two')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="col-md-7"></div>
			<div class="form-group col-md-5">
				<label for="inputEmail4">Heading 3</label>
				<input  name="heading_three" type="text" value="{{old('heading_one')}}" class="form-control rounded" id="inputEmail4" placeholder="Heading Three">
				@error('heading_three')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="col-md-7"></div>
			<div class="form-group col-md-5">
				<label for="inputEmail4">Button Link</label>
				<input  name="button_link" type="text" value="{{old('button_link')}}" class="form-control rounded" id="inputEmail4" placeholder="Button Link">
				@error('button_link')
				<div class="alert alert-danger mt-2" role="alert">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="col-md-7"></div>
			 
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