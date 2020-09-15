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
<div class="w-sm-100 mr-auto"><h4 class="mb-0">Product Detail</h4>  </div>
<ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
</div>
</div>
</div> --}}
<!-- END: Breadcrumbs-->
@php
    // dd($product->id);
@endphp
<!-- START: Card Data-->
<div class="row">
<div class="col-12 mt-3">
<div class="card">
<div class="card-header">
    <h6 class="card-title d-inline">Product Details </h6>
    <div class="btn-group float-right"> 
        <a href="{{route('admin.product.edit',$product->id)}} "><button type="button" class="btn btn-outline-secondary d-inline  ml-2">Edit</button></a>
        <form action="{{route('admin.product.destroy',$product->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger d-inline ml-2">Delete</button>
        </form>
    </div>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-12 col-lg-5">
          <div class="col-12 mb-3">
 <form method="post" action="{{route('admin.product.images.store',$product->id) }}" enctype="multipart/form-data">
        @csrf
       <div class="input-group control-group increment">
          <input type="file" name="images[]" class="form-control p-0" style="height: 26px;">
          <div class="input-group-btn"> 
            <button class="btn btn-success py-1" type="button"><i class="glyphicon glyphicon-plus"></i>Add More</button>
          </div>
        </div>
        <div style="display: none;">
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="images[]" class="form-control p-0"  style="height: 26px;">
            <div class="input-group-btn"> 
              <button class="btn btn-danger  py-1" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Add Images</button> 

  </form>  
          </div> 
       {{--      <div class="col-12 mb-3">
                <form method="post" action="{{route('admin.product.images.store',$product->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group control-group increment" >
                        <input type="file" name="image" class="form-control">
                        <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-check"></i> Upload</button>
                    </div>
                    
                </form>
            </div> --}}
            <div class="row">
            @if($product->images->count())
            @foreach($product->images as $image)
            @if($image->name == $product->primary_image)
            @continue
            @endif
            <div class="col-6 mb-3">
                <div class="modImage text-center">
                    <img src="{{ asset($image->name)}}" alt="" class="portfolioImage img-fluid">
                    
                    <form action="{{route('admin.product.image.delete',$image->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger d-inline m-1 p-1">Delete</button>
                    </form>
                    
                </div>
            </div>
            
            @endforeach
            @elseif($product->images->count() == '')
            <div class="col-12 text-center">
                <h3 class="mt-5">No Images </h3>
            </div>
            @endif
            </div>
        </div>
    
    {{-- <div class="col-md-12 col-lg-5">
        <img class="img-fluid" alt="product detail" src="{{asset('admin/images/ecommerce-img1.jpg')}}">
    </div> --}}
    <div class="col-md-12 col-lg-7">
        <div class="card-body border brd-gray border-top-0 border-right-0 border-left-0">
            <img class="portfolioImage img-fluid" src="{{ asset($product->primary_image)}}" alt="" style="max-width: 200px;">
        </div>
        <div class="card-body border brd-gray border-top-0 border-right-0 border-left-0">
            <h4 class="mb-0">{{$product->name}}</a></h4>
        </div>
        <div class="card-body border brd-gray border-top-0 border-right-0 border-left-0">
            <h4 class="mb-0">Model : {{$product->model}}</a></h4>
        </div>
        <div class="card-body border brd-gray border-top-0 border-right-0 border-left-0">
            <h4 class="mb-0">Type : {{$product->type}}</a></h4>
        </div>{{--
        <div class="card-body border border-top-0 border-right-0 border-left-0">
            <div class="clearfix">
                <div class="float-left mr-2">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="text-primary"><i class="icon-star"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="text-primary"><i class="icon-star"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="text-primary"><i class="icon-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="icon-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="icon-star"></i></a></li>
                    </ul>
                </div>
                <span>(3 customer reviews)</span>
            </div>
        </div> --}}
        <div class="card-body border brd-gray border-top-0 border-right-0 border-left-0">
            <div class="row">
                <div class="col-12">
                    <h4 class="lato-font mb-0 text-danger">
                    @if($product->discountPriceDollar() !== "$")
                         {{ $product->discountPriceDollar()}} 
                         <del>{{$product->priceDollar() }} </del> 
                    @else 
                     {{ $product->priceDollar()}} 
                    @endif
                     + {{"$".$product->designPrice}} = {{ "$".$product->totalPrice }} </h4>
                </div>
            </div>
        </div>
        <div class="card-body border brd-gray border-top-0 border-right-0 border-left-0">
            <p class="mb-0" lang="ca">{!! $product->description !!}  </p>
        </div>
        <div class="card-body border brd-gray border-top-0 border-right-0 border-left-0">
            <div class="d-inline-block">
                <p class="dark-color f-weight-600">Size:&nbsp; </p>
            </div>
            <div class="d-inline-block">
                @foreach($product->sizes as $size)
                <span class="badge p-2 badge-light mb-1 ml-2">{{$size->size}}</span>
                @endforeach
            </div>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="font-weight-bold dark-color mb-2">Ideal For : <span class="body-color font-weight-normal">{{$product->idealFor}}</span>
                </li><li class="font-weight-bold dark-color mb-2">Color : <span class="body-color font-weight-normal">{{$product->color}}</span>
            </li>
            <li class="font-weight-bold dark-color mb-2">Outer Material : <span class="body-color font-weight-normal"> {{$product->outerMaterial}}</span>
        </li>
        <li class="font-weight-bold dark-color mb-2">Sole Material : <span class="body-color font-weight-normal">{{$product->soleMaterial}}</span>
    </li>
    <li class="font-weight-bold dark-color mb-2">Upper Pattern : <span class="body-color font-weight-normal">{{$product->upperPattern}}</span>
</li>
</ul>
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