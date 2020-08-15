@extends('user.layouts.app')
@section('content') 
<div class="shopping_cart_area"  style="min-height: 79vh;">
  <div class="container">
    <div class="row"> 
      {{-- @if(isset($carts) == false || isset($carts->totalQty) == 0 ) --}}
      @empty($carts)
      
      <div class="col-12 text-center mt-lg-5">
        <img src="{{asset('media/empty-cart.png')}}" class="img-fluid pt-lg-5" alt="">
      </div>
      
      @endempty
{{--        @if(isset($carts) == true)
     @if(isset($carts->totalQty) !== 0) --}}
     @empty(!$carts)
      <div class="col-12">
        <div class="table_desc">
          <div class="cart_page table-responsive">
            <table>
              <thead>
                <tr>
                  <th class="product_remove">X</th>
                  <th class="product_thumb">Image</th>
                  <th class="product_name">Name</th>
                  <th class="product_quantity">Size</th>
                  <th class="product-price">Price</th>
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
                        <input type="hidden" name="size" value="{{$product['size']}}" >
                        <button class="btn btn-sm btn-danger px-3" type="submit"><i class="fa fa-trash-o"></i></button>
                      </form>
                    </td>
                    <td class="product_thumb"><a href="#"><img src="{{asset($product['product']->images[0]->name)}} " alt=""></a></td>
                    <td class="product_name">{{$product['product']->name}}</td>
                    <td class="product_quantity"> {{$product['size']}} </td>
                    @if($product['product']->discountPrice !== null)
                    <td class="product-price"> {{"$" .$product['product']->discountPrice}} </td>
                    @else
                    <td class="product-price"> {{"$" .$product['product']->price}} </td>
                    @endif
                    <td class="product_quantity">
                      <form method="POST" action="{{route('cart.update',$product)}}">
                        @csrf
                        {{-- <label>quantity</label> --}}
                        <input type="hidden" name="size" value="{{$product['size']}}">
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
     
      
  
    <!--coupon code area start-->
    <div class="coupon_area">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          {{--  <div class="coupon_code left">
            <h3>Coupon</h3>
            <div class="coupon_inner">
              <p>Enter your coupon code if you have one.</p>
              <input placeholder="Coupon code" type="text">
              <button type="submit">Apply coupon</button>
            </div>
          </div> --}}
        </div>
      
        <div class="col-lg-6 col-md-6">
          <div class="coupon_code right">
            <h3>Cart Totals</h3>
            <div class="coupon_inner">
              {{-- <div class="cart_subtotal">
                <p>Subtotal</p>
                @empty(!$carts)
                <p class="cart_amount">{{"$".$carts->getTotalPrice()}}</p>
                @endempty
              </div>
              <div class="cart_subtotal ">
                <p>Shipping</p>
                <p class="cart_amount" style="color: green;"><span>Flat Rate:</span> Free</p>
              </div>
              <a href="#">Calculate shipping</a> --}}
              <div class="cart_subtotal">
                <p>Total</p>
                <p class="cart_amount">{{"$".$carts->getTotalPrice()}}</p>
              </div>
              <div class="checkout_btn">
                <a href="{{route('checkout.index')}}">Proceed to Checkout</a>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
    @endempty
</div>
</div>
</div> 
@endsection