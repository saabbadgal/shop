@extends('user.layouts.app')
@section('content')  
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
<div class="container">
<div class="row">
<div class="col-12">
<div class="breadcrumb_content">
<h3>My Account</h3>
<ul>
<li><a href="index.html">home</a></li>
<li>My account</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!--breadcrumbs area end-->
<!-- my account start  -->
<section class="main_content_are">
<div class="container ">
<div class="account_dashboard my-5">
<div class="row">
<div class="col-sm-12 col-md-2 col-lg-3">
<!-- Nav tabs -->
<div class="dashboard_tab_button">
<ul role="tablist" class="nav flex-column dashboard-list">
    <li> <a href="{{route('profile.orders')}}"  class="nav-link ">Orders</a></li>
    <li><a href="{{route('profile.index')}}" class="nav-link active">Addresses</a></li>
    <li><a href="{{route('profile.create')}}"  class="nav-link  ">Create Address</a></li>
</ul>
</div>
</div>
<div class="col-sm-12 col-md-10 col-lg-9">
    <div class="tab-content dashboard_content">
        <div class="tab-pane fade show active">
            <div class="row">
                @foreach($user->addresses as $address)
                <div class="col-md-4">
                    <div class="panel-default"> 
                                <div class=" blue-grey lighten-5 py-3 px-3 mr-2 mb-2"> 
                                    <ul class="list-group">
                                        <div>
                                            <a href="{{route('profile.edit',$address->id)}}" class=" "><button class="btn  btn-success p-1 text-white">Edit</button></a>
                                            <form action="{{route('profile.destroy',$address->id)}}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="btn  btn-danger p-1 text-white   ">Delete</button>
                                            </form>
                                        </div> 
                                        <li class="list-group-item  elegant">{{$address->name}}</li>
                                        <li class="list-group-item">{{Str::ucfirst($address->city)}}</li>
                                        <li class="list-group-item">{{Str::ucfirst($address->state)}}</li>
                                        <li class="list-group-item">{{Str::ucfirst($address->pin)}}</li>
                                        <li class="list-group-item">{{Str::ucfirst($address->country)}}</li>
                                        <li class="list-group-item">{{Str::ucfirst($address->phone)}}</li>
                                      </ul>  
                        </div>
            </div>
        </div>
        @endforeach
       </div>
    </div>
    </div>

<!-- Tab panes -->
<div class="tab-content dashboard_content">
<div class="tab-pane active show" id="address"> 
    {{-- <div class="row">
        @foreach($user->addresses as $address)
        <div class="col-md-4 blue-grey lighten-5 py-3 px-3 mr-2 mb-2"> 
            <h5 class="text-uppercase">Address {{$loop->iteration}} </h5>
                <a href="{{route('profile.edit',$address->id)}}" class="d-inline float-right"><button class="btn btn-sm btn-success p-1 text-white d-inline">Edit</button></a> 
                <form action="{{route('profile.destroy',$address->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger p-1 text-white d-inline float-right">Delete</button>
                </form>
           
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
            <i class="fas fa-home mr-3"></i> {{$address->name}}
            </p>
            <p>
            <i class="fas fa-home mr-3"></i>{{Str::ucfirst($address->city)}}</p>
            <p>
            <p>
            <i class="fas fa-home mr-3"></i>{{Str::ucfirst($address->state)}}</p>
            <p>
            <p>
            <i class="fas fa-home mr-3"></i>{{Str::ucfirst($address->pin)}}</p>
            <p>
            <p>
            <i class="fas fa-home mr-3"></i>{{Str::ucfirst($address->country)}}</p>
            <p>
            <p>
            <i class="fas fa-home mr-3"></i>{{Str::ucfirst($address->phone)}}</p>
            <p>  
                </div>
                @endforeach
           
            </div>  --}}
            @if($user->addresses->count() < 1)
            <div><a href="{{route('profile.create')}}"><button type="button" class="shop-now mdb-color text-white" style="min-width: 150px;">Create Address</button></a></div> 
            <h3>&nbsp; &nbsp; ! No Address Found</h2> 
            @endif 
        </div>
    </div>
</div>
</div>
</div>
</div> 
</section>
 
@endsection