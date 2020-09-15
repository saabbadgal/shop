@extends('user.layouts.app')
@section('content')
<div class="shopping_cart_area"  style="min-height: 79vh;">
  <div class="container">
    <div class="row">
      @empty($carts)
      <div class="col-12 text-center mt-lg-5">
        <img src="{{asset('media/empty-cart.png')}}" class="img-fluid pt-lg-5" alt="">
      </div>
      @endempty
      @empty(!$carts)
      @php
        
      @endphp
      <div class="col-12 mt-5">
        <div class="table_desc">
          <div class="cart_page table-responsive">
            <table>
              <thead>
                <tr>
                  <th class="product_remove">X</th>
                  <th class="product_thumb">Image</th>
                  <th class="product_thumb">Design</th>
                  <th class="product_name">Name</th>
                  <th class="product_quantity">Size</th>
                  <th class="product-price">Price</th>
                  <th class="product-price">Design Price</th>
                  <th class="product_quantity">Qty.</th>
                  <th class="product_total">Total</th>
                </tr>
              </thead>
              <tbody>
                @foreach($carts->getContents() as $slug => $product) 
                <tr>
                  <td class="product_remove px-0">
                    <form action="{{route('cart.remove',$product)}} " method="post">
                      @csrf
                      @php
                      if(isset($product['design'])){
                      $design_id = $product['design']->id;
                   
                      }else{
                      $design_id = null;
                      }
                      @endphp
                      @if(!empty($product['design']))
                      <input type="hidden" name="design" value="{{$design_id}}">
                      @endif
                      
                      <input type="hidden" name="size" value="{{ $product['size'] }}" >
                      <button class="btn btn-sm btn-danger px-3" type="submit"><i class="fa fa-trash-o"></i></button>
                    </form>
                  </td>
                  <td class="product_thumb"><img src="{{asset($product['product']->images[0]->name)}} " alt=""></td>
                  @if(isset($product['design']))
                  <td class="product_thumb"><img src="{{asset($product['design']->primary_image)}} " alt=""></td>
                  @else
                  <td class="product_name">{{$product['product']->name}}</td>
                  @endif
                  <td class="product_name">{{$product['product']->name}}</td>
                  <td class="product_quantity"> {{$product['size']}} </td>
                  {{-- @if($product['product']->discountPrice !== null) --}}
                  <td class="product-price"> {{"$" .$product['product']->price}} </td>
                  @if($product['design_price'] == null)
                  <td class="product_name">Without Design</td>
                  @else
                  <td class="product-price"> {{"$" .$product['design_price']}} </td>
                  @endif
                  {{-- @else --}}
                  {{-- <td class="product-price"> {{"$" .$product['product']->price}} </td> --}}
                  {{-- @endif --}}
                  <td class="product_quantity">
                    <form method="POST" action="{{route('cart.update',$product)}}">
                      @csrf
                      {{-- <label>quantity</label> --}}
                      <input type="hidden" name="size" value="{{$product['size']}}">
                      <input type="hidden" name="design" value="{{$design_id}}">
                      <input name="qty" type="number" min="1" max="10" value="{{$product['qty']}}" style="height: 30px;">
                      <button name="submit" id="cart_submi" class="button px-2" style="height: 30px; line-height:20px;border: none;" type="submit">Update</button>
                      
                    </form>
                  </td>
                  <td class="product-price"> {{"$" .$product['price']}} </td>
                  {{--  <td class="product_quantity"><label>Quantity</label>
                  <form action="{{route('cart.destroy',$cart->id)}}" method="post">
                    <input min="1" max="100" value="1" type="number">
                    <button type="hidden" name="submit">Update</button>
                  </form>
                  
                </td> --}}
                {{-- <td class="product_total"> </td> --}}
              </tr>
              @endforeach
              
              @empty($carts)
              <h3>Cart Is Empty</h3>
              
              @endempty
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row"> 
      <div class="col-lg-12 col-md-12">
      {{-- <h3>Select Shipping Address</h3>
      <div class="tab-content dashboard_content">
          <div class="tab-pane fade show active">
              <div class="row">
                  @foreach(auth()->user()->addresses as $address)
                  <div class="col-md-4">
                      <div class="panel-default"> 
                                  <div class=" blue-grey lighten-5 py-3 px-3 mr-2 mb-2"> 
                                      <ul class="list-group">
                                          <li class="list-group-item  elegant">{{$address->name}}</li>
                                          <li class="list-group-item">{{Str::ucfirst($address->city)}}</li>
                                          <li class="list-group-item">{{Str::ucfirst($address->state)}}</li>
                                          <li class="list-group-item">{{Str::ucfirst($address->pin)}}</li>
                                          <li class="list-group-item">{{Str::ucfirst($address->country)}}</li>
                                          <li class="list-group-item">{{Str::ucfirst($address->phone)}}</li>
                                        </ul> 
                              <form action="{{ route('checkout.store') }}" method="post" >
                                  @csrf
                              <input type="hidden" name="address_id" value="{{$address->id}}">
                                  <button type="submit" class="btn btn-elegant btn-block text-white">Deliver to this address</button> 
                              </form>
                          </div>
              </div>
          </div>
          @endforeach
      </div>
      </div>
      </div> --}}
      </div>
      
      </div> 
    
    <div class="col-md-6"></div>
    
    <div class="col-lg-6 col-md-6">
      <div class="coupon_code right">
        <h3>Cart Totals</h3>
        <div class="coupon_inner">
          <div class="cart_subtotal">
            <p>Total</p>
            <p class="cart_amount">{{"$".$carts->getTotalPrice()}}</p>
          </div>
          <div class="checkout_btn">
            <a href="{{route('checkout.index')}}">Proceed to Buy</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endempty
</div>
</div>

 
@endsection