@extends('user.layouts.app')
@section('content') 
{{-- @include('user.layouts.slider') --}} 
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
    <section class="main_content_area">
        <div class="container">   
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list"> 
                                <li> <a href="{{route('profile.orders')}}"  class="nav-link active">Orders</a></li> 
                                <li><a href="{{route('profile.index')}}" class="nav-link " >Address</a></li>
    <li><a href="{{route('profile.create')}}"  class="nav-link  ">Create Address</a></li>
                            </ul>
                        </div>    
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content"> 
                            <div class="tab-pane fade show active" id="orders">
                                <h3>Orders</h3>
                                @empty($orders->count())
                                 <h1>No Orders found</h1>
                                @endempty
                                @if($orders->count())
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order Number</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total Qty.</th>
                                                <th>Total Price</th>
                                                {{-- <th>Actions</th>         --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                                <td>{{$order->order_number}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td><span class="success">{{$order->status}}</span></td>
                                                <td>{{$order->total_qty}}</td>
                                                <td>{{$order->total_price}}  </td>
                                                {{-- <td><a href="cart.html" class="view">view</a></td> --}}
                                            </tr> 
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                            </div>  
                        </div>
                    </div>
                </div>
            </div>  
        </div>          
    </section>      
    <!-- my account end   -->  
	@endsection