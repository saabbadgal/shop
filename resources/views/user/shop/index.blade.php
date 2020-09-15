@extends('user.layouts.app')
@section('custom-css')
<style>
    @media screen and (max-width: 600px) { 

        .how_it{
            font-size:7vw;
        }
    }
</style>
@endsection
@section('content') 
@include('user.layouts.slider')
<!--Section: Content-->
 
@php
    // dd($social);
@endphp
<div class="container">
<!-- Grid row -->
<div class="row">
<div class="col-12">
<div class="card " style="box-shadow: none;">
<div class="card-body p-0">
<div class="row mx-0">
    <div class="col-lg-12 accent-3 rounded-right py-4 px-md-5">
        <div class="row text-center">
            <div class="col-md-8  d-md-block pb-md-3">
                <div class="section_titl p-0 m-0 section_saab">
                    <h1 class="mb-1 how_it">How it <span style="font-weight: 600; color: #F53737;">Works</span></h2>
                </div>
            </div>
            <div class="col-md-4  ">
                <a href="{{route('shop.shop')}}"><button type="button"  class="shop-now "><i class="fas fa-shopping-bag">&nbsp;</i>Shop Now</button></a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--banner area start-->
<div class="banner_area home1_banner ">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-6">
<figure class="single_banner">
<div class="banner_thumb">
    <a href="{{route('shop.shop')}}"><img src="{{asset('user/img/bg/banner1.jpg')}}" alt=""></a>
</div>
</figure>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<figure class="single_banner">
<div class="banner_thumb">
    <a href="{{route('shop.shop')}}"><img src="{{asset('user/img/bg/banner2.jpg')}}" alt=""></a>
</div>
</figure>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-6">
<figure class="single_banner">
<div class="banner_thumb">
    <a href="{{route('shop.shop')}}"><img src="{{asset('user/img/bg/banner3.jpg')}}" alt=""></a>
</div>
</figure>
</div>
</div>
</div>
</div>
<!--banner area end-->

<!-- Grid row -->
<!--Section: Content-->

<div class="col-12 my-5">
<div class="product_header">
<div class="section_title">
<h2>New <span>Arrivals</span></h2>
<p>Lorem ipsum dolor sit amet, consectetur elit.</p>
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
    <a class="primary_img" href="{{$product->path()}} "><img src="{{asset($product->images[0]->name)}} " alt=" "></a>
    <a class="secondary_img" href="{{$product->path()}}"><img src="assets/img/product/product4.jpg" alt=""></a>
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
        <h3 class="product_name"><a href="{{$product->path()}}">{{$product->name}} </a></h3>
        <div class="price_box">
            @if($product->discountPriceFormat() !== "$")
            <span class="current_price">{{ $product->priceFormat() }} </span>
            <span class="old_price">{{$product->discountPriceFormat()}}</span>
            @else
            <span class="current_price">{{ $product->priceFormat() }} </span>
            @endif
        </div>
        <div class="add_to_cart">
            <a href="{{$product->path()}}" title="" data-original-title="Add to cart">Add to Cart</a>
        </div>
        
    </div>
    <div class="product_content list_content">
        <h4 class="product_name"><a href="product-details.html">quidem totam, voluptatem quae quasi possimus</a></h4>
        <div class="product_desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco…</p>
        </div>
        <div class="price_box">
            <span class="current_price">$145.00</span>
            <span class="old_price">$178.00</span>
        </div>
        
        <div class="action_links list_action_right  mt-5">
            <ul>
                <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart">Add to Cart</a></li>
                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon icon-Eye"></i></a></li>
                <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon icon-Heart"></i></a></li>
                <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon icon-MusicMixer"></i></a></li>
            </ul>
        </div>
    </div>
</div>
</figure>
</article>
</div>
@endforeach
</div>
</div>
<!--testimonial area start-->
<div class="testimonial_area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-5 col-md-12">
<div class="section_title testileft_title">
<p>Welcome to my personal presentation</p>
<h2>What our <span>Clients say</span></h2>
</div>
</div>
<div class="col-lg-7 col-md-12">
<div class="testimonial_container">
<div class="testimonial_carousel testimonial_column1 owl-carousel">
    <div class="single-testimonial">
        <div class="testimonial_thumb">
            <a href="#"><img src="{{asset('user/img/about/testimonial1.png')}}" alt=""></a>
        </div>
        <div class="testimonial_content">
            <div class="testimonial-rating">
                <ul>
                    <li><a href="#"><i class="icon icon-Star"></i></a></li>
                    <li><a href="#"><i class="icon icon-Star"></i></a></li>
                    <li><a href="#"><i class="icon icon-Star"></i></a></li>
                    <li><a href="#"><i class="icon icon-Star"></i></a></li>
                    <li><a href="#"><i class="icon icon-Star"></i></a></li>
                </ul>
            </div>
            <p>“ Perfect Themes and the best of all that you have many options to choose! Best Support team ever!Very fast responding and experts on their fields! Thank you very much! ”</p>
            
            <div class="testimonial_author">
                <a href="#">- Lindsy Neloms</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--testimonial area end--> 
@endsection