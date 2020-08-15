@extends('admin.layouts.app')
@section('content')
@include('admin.layouts.header')
<!-- START: Main Content-->
<main>
<div class="container-fluid site-width"> 
 <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">                               
                                <h4 class="card-title">Details</h4> 
                            </div>
                            <div class="card-body">
                                <dl class="row mb-0 redial-line-height-2_5">
                                    <dt class="col-sm-5">Order ID:</dt>
                                    <dd class="col-sm-7">{{$order->order_number}} </dd>

                                    <dt class="col-sm-5">Purchased On:</dt>
                                    <dd class="col-sm-7">{{$order->created_at}}</dd>

                                    <dt class="col-sm-5">Client Name:</dt>
                                    <dd class="col-sm-7">{{$order->user->name}} </dd>

                                    <dt class="col-sm-5">Items:</dt>
                                    <dd class="col-sm-7">{{$order->total_qty}}</dd>

                                    <dt class="col-sm-5">Amount:</dt>
                                    <dd class="col-sm-7">{{$order->total_price}}</dd>

                                    <dt class="col-sm-5">Shipment:</dt>
                                    <dd class="col-sm-7">04/10/2017</dd>

                                    <dt class="col-sm-5">Status:</dt>
                                    <dd class="col-sm-7"> 
                                      
                                        <form action="{{route('admin.order.update',$order->id)}}" method="post">
                                    @csrf
                                    @method('PATCH')
                       <select name="status"  data-select2-id="1" tabindex="-1" class="select2-hidden-accessible form-control rounded bg-white p-0" aria-hidden="true" style="width: 80px;" onchange="submitForm(this)"> 
                        
                            <option {{$order->status == "Ordered" ? "selected" : ""}} value="Ordered">Ordered</option>
                            <option {{$order->status == "Packed" ? "selected" : ""}} value="Packed">Packed</option>
                            <option {{$order->status == "Shipped" ? "selected" : ""}} value="Shipped">Shipped</option>
                            <option {{$order->status == "Delivered" ? "selected" : ""}} value="Delivered">Delivered</option>
                        </select>
                        <button id="status" type="submit" class="d-none">Submit</button> 
                      </form>
                                    </dd>
                                                        
                                    {{-- <dt class="col-sm-5">Status</dt>
                                    <dd class="col-sm-7"><span class="badge badge-primary text-white">{{$order->status}}</span></dd> --}}
                                </dl>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">                               
                                <h4 class="card-title">Customer</h4> 
                            </div>
                            <div class="card-body">
                                <dl class="row mb-0 redial-line-height-2_5">
                                    <dt class="col-sm-5">Client ID :</dt>
                                    <dd class="col-sm-7">{{$order->user->id}} </dd>

                                    <dt class="col-sm-5">Name:</dt>
                                    <dd class="col-sm-7">{{$order->user->name}}</dd>

                                    <dt class="col-sm-5">Email:</dt>
                                    <dd class="col-sm-7">{{$order->user->email}}</dd>

                                    <dt class="col-sm-5">Company:</dt>
                                    <dd class="col-sm-7">{{$order->user->name}}</dd>

                                    <dt class="col-sm-5">Phone:</dt>
                                    <dd class="col-sm-7">{{$order->user->phone}}</dd>

                                    <dt class="col-sm-5">Status:</dt>
                                    <dd class="col-sm-7"><span class="badge badge-danger text-white">Active</span></dd> 
                                </dl>
                            </div>
                        </div>
                    </div> 
                    <div class="col-12 col-md-5 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">                               
                                <h4 class="card-title">Shipping Address</h4> 
                            </div>
                            <div class="card-body">
                                <dl class="row mb-0 redial-line-height-2_5">
                                    <dt class="col-sm-5">Full Name:</dt>
                                    <dd class="col-sm-7">{{$order->address->name}}</dd> 

                                    <dt class="col-sm-5">Address:</dt>
                                    <dd class="col-sm-7">{{$order->address->address}}</dd>
                                    
                                    <dt class="col-sm-5">City:</dt>
                                    <dd class="col-sm-7">{{$order->address->city}}</dd>

                                    <dt class="col-sm-5">State</dt>
                                    <dd class="col-sm-7">{{$order->address->state}}</dd>
                                      


                                    <dt class="col-sm-5">ZIP/Post Code</dt>
                                    <dd class="col-sm-7">{{$order->address->pin}}</dd>

                                    <dt class="col-sm-5">Country</dt>
                                    <dd class="col-sm-7">{{$order->address->country}}</dd>

                                    <dt class="col-sm-5">Phone</dt>
                                    <dd class="col-sm-7">{{$order->address->phone}}</dd>
                                </dl>
                            </div>
                        </div>


                    </div>
              @php
              // dd($order->products);
              @endphp
                <!-- END: Card DATA--> 
                 <div class="col-12 col-md-7 mt-3">
                     <!-- START: Card Data-->
               
                        <div class="card">
                            <div class="card-body"> 
                                        <table class="table table-bordered mb-0 table-responsive d-block border-bottom-0 border-top-0 border-left-0 border-right-0">
                                            <thead>
                                                <tr class="bg-transparent">
                                                    <th class="border-bottom-0">Image</th>
                                                    <th class="border-bottom-0">Product</th>
                                                    <th class="border-bottom-0">Size</th>
                                                    <th class="border-bottom-0">Color</th>
                                                    <th class="border-bottom-0">Quantity</th>
                                                    <th class="border-bottom-0">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($order->products as $product)
                                                <tr>
                                                    <td><img src="{{asset($product->primary_image)}}" alt="" class="img-fluid" width="60"></td>
                                                    <td class="align-middle">{{$product->name}}</td> 
                                                    <td class="align-middle">{{$product->pivot->size}}</td> 
                                                    <td class="align-middle">{{$product->pivot->color}}</td> 
                                                    <td class="align-middle">{{$product->pivot->qty}}</td>  
                                                    <td class="align-middle">{{$product->pivot->price}}</td>  
                                                     
                                                    {{-- <td class="align-middle"><a href="#"><i class="icon-trash"></i></a></td> --}}
                                                </tr>
                                                @endforeach 
                                            </tbody>
                                        </table> 
 
                            </div>
                        </div>
                <!-- END: Card DATA--> 

                 </div>
                   </div>
                            @php
   // dd($order);
   @endphp
</div>
<div class="form-group col-md-3 d-none">
          <label for="inputEmail4">Outer Material</label>
          <select  data-select2-id="1" tabindex="-1" class="select2-hidden-accessible form-control rounded" aria-hidden="true" >
            <option  disabled="true" selected="true" label="Choose on thing" data-select2-id="3">Outer Material</option>
            <option value=" " data-select2-id="35">Synthetics</option>
            <option value=" " data-select2-id="36">Rubber</option>
            <option value="   " data-select2-id="37">Foam</option>
          </select>
        </div>
</main>
<!-- END: Content-->
<script>
      function submitForm(elem) {
          if (elem.value) {
              elem.form.submit();
          }
      }
  </script>
@include('admin.layouts.footer')
@endsection