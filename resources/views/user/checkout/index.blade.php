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
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="checkout_form">
    <form action="{{route('checkout.store')}} " method="post"> 
        @csrf
<div class="row">
    <div class="col-lg-6 col-md-6">
        <h3>Shipping Details</h3>
        <div class="tab-content dashboard_content">
            <div class="tab-pane fade show active">
                <div class="row">
                    @foreach($user->addresses as $address)
                    
                    <div class="col-md-12">
                        <div class="panel-default">
                            <input {{$loop->iteration == 1 ? "checked" : ""}} id="payment{{$address->id}}" value="{{$address->id}}" name="address_id" type="radio" data-target="createp_account" />
                            <label for="payment{{$address->id}}" data-toggle="collapse" data-target="#method{{$address->id}}" aria-controls="method"><h5 class="text-uppercase">Address {{$loop->iteration}} </h5></label>
                            <div id="method{{$address->id}}" class="collapse one {{$loop->iteration == 1 ? "show" : ""}} " data-parent="#accordion">
                                <div class="card-body1">
                                    <div class="col-md-5 blue-grey lighten-5 py-3 px-3 mr-2 mb-2">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
         
        <div class="col-lg-5 col-md-4">
            
            <h3>Your order</h3>
            <div class="order_table table-responsive">
                <table>
                    <tbody>
                    </tbody>
                    <tfoot class="float-left">
                    <tr> 
                        <th class="px-5">Price({{$carts->getTotalQty(). " items"}})</th>
                        <td class="px-5">{{"$".$carts->getTotalPrice()}}</td>
                    </tr>
                    <tr>
                        <th class="px-5">Shipping</th>
                        <td class="px-5"><strong>$0.00</strong></td>
                    </tr>
                    <tr class="order_total">
                        <th class="px-5">Order Total</th>
                        <td class="px-5"><strong>{{"$".$carts->getTotalPrice()}}</strong></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <div class="payment_method">
              {{--   <div class="panel-default">
                    <input id="payment" name="check_method" type="radio" data-target="createp_account" />
                    <label for="payment" data-toggle="collapse" data-target="#method" aria-controls="method">Create an account?</label>
                    <div id="method" class="collapse one" data-parent="#accordion">
                        <div class="card-body1">
                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-default">
                    <input id="payment_defult" name="check_method" type="radio" data-target="createp_account" />
                    <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult">PayPal <img src="assets/img/icon/papyel.png" alt=""></label>
                    <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                        <div class="card-body1">
                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                        </div>
                    </div>
                </div> --}}
                <div class="order_button">
                    <button  type="submit" class="float-right">Proceed to Order</button>
                </div>
            </div>
            
        </div>
    </div>
</form>
</div>
</div>
<div class="col-sm-12 col-md-9 col-lg-9">
</div>
</div>
</div>
</div>
</section>
<!-- my account end   --> 
@endsection