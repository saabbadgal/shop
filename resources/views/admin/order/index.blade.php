@extends('admin.layouts.app')
@section('content')
@include('admin.layouts.header')
<!-- START: Main Content-->
<main>
<div class="container-fluid site-width">
@php
// dd(auth()->user()->email);
@endphp
<div class="row">
    <div class="col-12 mt-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title float-left">All Orders</h4>
                {{-- <a href=" "><button class="float-right btn btn-outline-secondary btn sm">Create Product</button></a> --}}
            </div>
            @php
            // dd($orders);
            @endphp
            <div class="card-body">
                <div class="table-responsive text-center">
                    <table id="example" class="display table dataTable table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Order Number</th>
                                <th>Address</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->created_at->format('d-m-Y')}}</td>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->order_number}}</td>
                                <td>{{$order->address->pin}},{{$order->address->city}},{{$order->address->house}}</td>
                                <td>{{$order->total_qty}}</td>
                                <td>{{$order->total_price}}</td>
                                <td class="px-0">
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
                            </td>
                            <td>
                              <a href="{{route('admin.order.show',$order->id)}} ">
                              <button class="badge badge-primary text-white">View</button>
                              </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Order Number</th>
                        <th>Address</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- END: Card DATA-->

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