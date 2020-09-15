@extends('user.layouts.app')
@section('content') 
 
<div class="container">
<div class="product_details mt-100 mb-100">
<div class="container">
<div class="row">
 
  <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                    	
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                            	@foreach($product->images as $image)
                            	@if($loop->iteration == 1)
                                <img id="zoom1" src="{{asset($image->name)}}" data-zoom-image="{{asset($image->name)}}" alt="big-1">
                                @endif
                                 @endforeach
                            </a>
                        </div>

                     
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            	@foreach($product->images as $image)
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="{{asset($image->name)}}" data-image="{{asset($image->name)}}" data-zoom-image="{{asset($image->name)}}">
                                        <img src="{{asset($image->name)}}" alt="zo-th-1"/>
                                    </a>

                                </li>
                                 @endforeach 
                            </ul>
                        </div>
                    </div>
                </div>
<div class="col-lg-6 col-md-6">
	<div class="product_d_right">
	 
			
			{{-- <h1><a href="#">{{$product->name}}</a></h1> --}}
			{{-- <div class="product_nav">
				<ul>
					<li class="prev"><a href="product-details.html"><i class="fa fa-angle-left"></i></a></li>
					<li class="next"><a href="variable-product.html"><i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div> --}}
			<div class=" product_ratting">
				<ul> 
				<h1 class="ty-product-block-title"><bdi>{{$product->name}}</bdi></h1> 
					<li class="review"><a href="#">{{$product->model}} ({{$product->color}}) </a></li>
				</ul>
				
			</div>
			<div class="price_box">
				@if($product->discountPriceFormat() !== "$")
				<span class="current_price">{{ $product->discountPriceFormat()}}</span>
				<span class="old_price">{{$product->priceFormat()}}</span><br>
				@else
				
				<span class="current_price" >{{$product->priceFormat()}}</span><br>
				@endif
				<div style="color: green; padding-bottom: 10px;">inclusive of all taxes</div>
				<h6 style="color: black; font-size: 18px;">SELECT SIZE :    <span id="size_error" class="d-none" style="color: red">Please Choose Size</span></h6>

				<div class=" ">
				@foreach($product->sizes as $size)
                <button style="font-size: 13px;" value="{{$size->size}}"  type="button" class="btn btn-light btn-sm size px-3 py-2">{{$size->size}} </button> 
				@endforeach
			</div> 
			 @if($product->type == 'Without Design')
			<div class="product_variant quantit"> 
			 <form method="POST" action="{{route('selectproduct',$product)}}">
					@csrf
					<input type="hidden" name="size" id="size" value="">  
					{{-- <button id="button_cart_432095_buy_now" class="" type="submit" name="dispatch[checkout.add]">BUY NOW</button>  --}}
				   <button name="submit" id="cart_submit" class="ty-btn__secondary ty-btn__add-to-cart ty-btn" type="submit">Select Design</button>  
			</form> 
			</div>
			@endif
            @if($product->type == 'With Design') 			 
			<div class="product_variant quantity "> 
			 <form method="POST" action="{{route('addToCart',$product->id)}}">
					@csrf
					<input type="hidden" name="size" id="size" value="">   
					<label>quantity</label>
					<input name="qty" min="1" max="7" value="1" type="number">
				   <button name="submit" id="cart_submit" class="button" type="submit">Add to cart</button>  
			</form>   
				  {{-- <a href="{{route('addToCart',$product)}} ">Add<button id="cart_submit" class="button">add to cart</button></a>     --}}
			</div>	 
			@endif

		 	  
						
			</div> 
			{{-- <div class=" product_d_action">
				<ul>  
					<li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li> 
				</ul>
			</div>  --}}
			<div class="product_desc">
				{!!$product->description !!}
			</div>
			<div class="product_variant color">
				{{-- <button class="btn btn-mdb-color ml-0 mb-2">Product Details</button>  --}}
				<div class="product_meta">
				<span>Ideal For: <a href="#">{{$product->idealFor}}</a></span>
			     </div>
				<div class="product_meta">
				<span>Outer Material:<a href="#">{{$product->outerMaterial}}</a></span>
			     </div>
				<div class="product_meta">
				<span>Sole Material:<a href="#">{{$product->soleMaterial}}</a></span>
			     </div>
				<div class="product_meta">
				<span>Uppper Pattern:<a href="#">{{$product->upperPattern}}</a></span>
			     </div>  
			</div>
            
			
			
		 
	{{-- 	<div class="priduct_social">
			<ul>
				<li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
				<li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
				<li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>
				<li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>
				<li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>
			</ul>
		</div> --}}
	</div>
</div>
</div>
</div>
</div>
</div>
<form action="{{route('cart.store')}}"></form> 

@section('custom-js')

<script>
	$(document).ready(function() {
	$('.size').click(function() {
	var size =  $(this).val();
	$('#size').attr('value', size);
	$('.size').removeClass('btn btn-danger btn-sm');
	$('.size').addClass('btn btn-light btn-sm');
	$(this).removeClass('btn btn-light btn-sm');
	$(this).addClass('btn btn-danger btn-sm');
	});
	$('#cart_submit').click(function(){
	if($('#size').val()){
	 console.log('saab');
	}else{
	event.preventDefault();
	$('#size_error').removeClass('d-none');
	}
	});
	});
  </script>
@endsection
@endsection