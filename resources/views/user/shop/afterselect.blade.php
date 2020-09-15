@extends('user.layouts.app')
@section('content') 
<div class="container my-5">
  

    <!-- Section: Block Content -->
    <section>
      
      {{-- <h3 class="font-weight-bold text-center dark-grey-text mb-5">Electronics</h3> --}}
  
      <!-- Grid row -->
      <div class="row"> 
        <!-- Grid column -->
        <div class="col-md-4 mb-4">
  
          <!-- Card -->
          <div class="card card-ecommerce"> 
            <!-- Grid row -->
            <div class="row">
  
              <!-- Grid column -->
              <div class="col-12 col-sm-6 col-md-12 col-lg-6 d-flex align-items-center">
  
                <div class="view overlay">
                  <img src="{{ asset($product->primary_image) }}" class="img-fluid" alt="Sample image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
  
              </div>
              <!-- Grid column -->
  
              <!-- Grid column -->
              <div class="col-12 col-sm-6 col-md-12 col-lg-6 pl-sm-0 px-md-3 pl-lg-0">
  
                <div class="card z-depth-0">
                  <div class="card-body">
                    <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">{{ $product->name }}</a></strong></h5>
                    
                    <div class="card-footer pb-0">
                      <div class="row mb-0">
                        <span class="float-left"><strong>{{ '$'.$product->price }}</strong></span> 
                      </div>
                    </div>
                  </div>
                </div>
  
              </div>
              <!-- Grid column -->
  
            </div>
            <!-- Grid row -->
  
          </div>
          <!-- Card -->
  
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-md-4 mb-4">
  
          <!-- Card -->
          <div class="card card-ecommerce"> 
            <!-- Grid row -->
            <div class="row">
  
              <!-- Grid column -->
              <div class="col-12 col-sm-6 col-md-12 col-lg-6 d-flex align-items-center">
  
                <div class="view overlay">
                  <img src="{{ asset($design->primary_image) }}" class="img-fluid" alt="Sample image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
  
              </div>
              <!-- Grid column -->
  
              <!-- Grid column -->
              <div class="col-12 col-sm-6 col-md-12 col-lg-6 pl-sm-0 px-md-3 pl-lg-0">
  
                <div class="card z-depth-0">
                  <div class="card-body">
                    <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">{{ $design->name }}</a></strong></h5>
                    
                    <div class="card-footer pb-0">
                      <div class="row mb-0">
                        <span class="float-left"><strong>{{ '$'.$design->designPrice }}</strong></span> 
                      </div>
                    </div>
                  </div>
                </div>
  
              </div>
              <!-- Grid column -->
  
            </div>
            <!-- Grid row -->
  
          </div>
          <!-- Card -->
  
        </div>
        <!-- Grid column --> 
  
      </div>
      <!-- Grid row -->
      <div class="row">
        <div class="col-lg-5 col-md-5 pt-4">
            <form action="{{ route('addToCart',[$product,$design,$total]) }}" method="post"> 
              @csrf   
                <h3 class="text-center">Your order</h3> 
                <div class="order_table table-responsiv">
                    <table class="text-center">
                        <thead>
                            <tr>
                                <th>Items</th>
                                <th>Price</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Item Price</th>
                                <td>{{ '$'.$product->price }}</td>
                            </tr>
                            <tr>
                                <th>Design Price</th>
                                <td>{{ '$'.$design->designPrice }}</td>
                            </tr> 
                            <tr>
                                <th>Total Price</th>
                                <td>{{ '$'.$total }}</td>
                            </tr> 
                        </tbody> 
                    </table>
                    <button name="submit" class="shop-now float-right" type="submit">Add to Cart</button>     
                </div> 
            </form>         
        </div>

      </div>
  
    </section>
    <!-- Section: Block Content -->
    
  
  </div>
@endsection