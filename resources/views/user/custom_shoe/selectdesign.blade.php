@extends('user.layouts.app')
@section('custom-css') 
@endsection
@section('content') 
<div class="md-stepper-horizontal">
	<div class="md-step active done">
		<div class="md-step-circle"><span>1</span></div>
		<div class="md-step-title">Base Shoe</div>
		<div class="md-step-bar-left"></div>
		<div class="md-step-bar-right"></div>
	</div>
	<div class="md-step active done">
		<div class="md-step-circle"><span>2</span></div>
		<div class="md-step-title">Select Size</div>
		{{-- <div class="md-step-optional">Optional</div> --}}
		<div class="md-step-bar-left"></div>
		<div class="md-step-bar-right"></div>
	</div>
	<div class="md-step active editable">		
    <div class="md-step-circle"><span>2</span></div>
		<div class="md-step-title">Select Design</div>
		{{-- <div class="md-step-optional">Optional</div> --}}
		<div class="md-step-bar-left"></div>
		<div class="md-step-bar-right"></div>
	</div>
	<div class="md-step ">
		<div class="md-step-circle"><span>4</span></div>
		<div class="md-step-title">Add to cart</div>
		<div class="md-step-bar-left"></div>
		<div class="md-step-bar-right"></div>
	</div> 
	</div>
    <div class="container py-5">
        <!--Section: Content-->
        <section class="text-center">
          <!--Grid row-->
          <div class="row">
            @foreach ($products as $design)
            <!--Grid column-->
            <div class="col-lg-3 col-md-12 mb-4">
                <!-- Card -->
                <div class="card">
                    <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="{{ asset($design->primary_image) }}"
                    alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body">
                        <p class="mb-1"><a href="" class="  black-text">{{ $design->name }}</a></p>
                        <h4 class="mb-1">{{ "$".$design->designPrice }}</h4>
                 <form action="{{ route('base.shoe.design',[$product->id,$design->id]) }}" method="post">
                  @csrf
                  <button type="submit" class="ty-btn__primary ty-btn">Select this</button> 
                </form>
                </div>
            </div>
              <!-- Card -->
            </div>
            <!--Grid column-->
            @endforeach
        </div>
        <!--Grid row-->
        
    </section>
    <!--Section: Content-->
    
    
      </div>
@endsection