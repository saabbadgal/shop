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
<div class="w-sm-100 mr-auto"><h4 class="mb-0">All Products</h4>  </div>
<ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Dashboard</li>
</ol>
</div>
</div>
</div> --}}
<!-- END: Breadcrumbs-->
<!-- START: Card Data-->
@php
// dd(auth()->user()->email);
@endphp
<div class="row">
<div class="col-12 mt-3">
<div class="card">
    <div class="card-header">
<h4 class="card-title float-left">All Products</h4>
<a href="{{route('admin.product.create')}}"><button class="float-right btn btn-outline-secondary btn sm">Create Product</button></a>
</div>
<div class="card-body">
<div class="row">
	@foreach($products as $product )
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="position-relative">
            @if($product->primary_image)
            <a href={{route('admin.product.show',$product->id)}}><img src="{{asset($product->primary_image)}}" alt="" class="img-fluid" ></a>
            @else
            <img src="{{asset('images/'. 'demo.jpeg')}}" alt="" class="img-fluid">
            @endif
            <div class="pt-2">
            	 <a href={{route('admin.product.edit',$product->id)}} ><button class="btn btn-outline-secondary btn-sm">Edit</button></a>
            	 <a href={{route('admin.product.show',$product->id)}} ><button class="btn btn-outline-dark  btn-sm">View</button></a>
            </div> 
        </div>
        <div class="pt-3">
            <p class="mb-2"><a href="#" class="font-weight-bold text-primary">{{$product->name}}</a></p>
            <div class="clearfix">
                @if($product->discountPriceFormat() !== '$')
                <div class="d-inline-block"><del>{{$product->priceFormat()}}  </del></div>
                <div class="d-inline-block text-danger pl-2"> {{$product->discountPriceFormat()}}</div>
                @else
                <div class="d-inline-block text-danger">{{$product->priceFormat()}}</div>
                @endif
               {{--  <ul class="list-inline mb-0 mt-2">
                    <li class="list-inline-item"><a href="#" class="text-primary"><i class="icon-star"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-primary"><i class="icon-star"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-primary"><i class="icon-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="icon-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="icon-star"></i></a></li>
                </ul> --}}
            </div>
        </div>
    </div>
    @endforeach  
{{-- <div class="row">
    <div class="col-12 col-sm-12">
        <nav>
            <ul class="pagination float-right">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div> --}}
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