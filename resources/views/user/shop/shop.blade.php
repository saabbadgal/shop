@extends('user.layouts.app')
@section('content') 
   <!--Section: Content-->
<div class="col-12">
<div class="product_header">
<div class="section_title">
    <h2>New <span>Arrivals</span></h2>
    <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
</div>
<div class="product_tab_btn">
    <ul class="nav" role="tablist">
        <li>
            <a class="{{ (request()->is('shop/men')) ? 'active' : '' }}  show" href="{{route('shop.category','men')}}">
                Men
            </a>
        </li>
        <li>
            <a class="{{ (request()->is('shop/women')) ? 'active' : '' }} show" href="{{route('shop.category','women')}}">
                Women
            </a>
        </li>
    </ul>
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
                    <h4 class="product_name"><a href="{{$product->path()}}">{{$product->name}} </a></h4>
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
            </div>
        </figure>
    </article>
</div>
@endforeach
</div>
</div>  
@endsection