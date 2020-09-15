@extends('user.layouts.app')
@section('content') 
   <!--Section: Content-->
   <div class="md-stepper-horizontal">
	<div class="md-step active editable">
		<div class="md-step-circle"><span>1</span></div>
		<div class="md-step-title">Base Shoe</div>
		<div class="md-step-bar-left"></div>
		<div class="md-step-bar-right"></div>
	</div>
	<div class="md-step  ">
		<div class="md-step-circle"><span>2</span></div>
		<div class="md-step-title">Select Size</div>
		{{-- <div class="md-step-optional">Optional</div> --}}
		<div class="md-step-bar-left"></div>
		<div class="md-step-bar-right"></div>
	</div>
	<div class="md-step  ">
		<div class="md-step-circle"><span>3</span></div>
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


<div class="col-12 mb-4">
<div class="product_header">
<div class="section_title pb-0 mb-1">
    <h2>Select <span>Base Shoe</span></h2>
</div>
</div>
</div>

<div class="container">
<div class="row shop_wrapper">
@foreach($products as $product)
<div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
    <article class="single_product">
        <figure>
            <div class="product_thumb">
                {{-- <div class="label_product">
                    <span class="label_new">new</span>
                    <span class="label_sale">10%</span>
                </div> --}}
                {{-- @foreach($product->images as $image) --}}
                <a class="primary_img" href="{{ route('base.shoe',$product->id)}} "><img src="{{asset($product->images[0]->name)}} " alt=" "></a>
                <a class="secondary_img" href="{{ route('base.shoe',$product->id)}}"><img src="assets/img/product/product4.jpg" alt=""></a>
                {{-- @endforeach --}}
                {{-- <div class="action_links">
                    <ul>
                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon icon-Eye"></i></a></li>
                        <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon icon-Heart"></i></a></li>
                        <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon icon-MusicMixer"></i></a></li>
                    </ul>
                </div> --}}
            </div>
            <div class="product_content grid_content">
                <div class="product_rating">
                    <h4 class="product_name"><a href="{{ route('base.shoe',$product->id)}}">{{$product->name}} </a></h4>
                    <div class="price_box">
                        @if($product->discountPriceFormat() !== "$")
                        <span class="current_price">{{ $product->priceFormat() }} </span>
                        <span class="old_price">{{$product->discountPriceFormat()}}</span>
                        @else
                        <span class="current_price">{{ $product->priceFormat() }} </span>
                        @endif
                    </div>
                    <div class="add_to_cart">
                    <a href="{{ route('base.shoe',$product->id)}}" title="" data-original-title="Add to cart">Select this</a>
                    </div>
                    
                </div>
            </div>
        </figure>
    </article>
</div>
@endforeach
</div>
</div>  
@endsection