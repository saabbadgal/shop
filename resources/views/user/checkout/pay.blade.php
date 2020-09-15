@extends('user.layouts.app') 
@section('custom-css')
@endsection
@section('custom-css')
@endsection
@section('content')
 
<section class="main_content_area py-2">
<div class="container">
<div class="account_dashboard">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="checkout_form">
    
<div class="row" onload="myFun()"> 
<div class="col-lg-12 col-md-12">
    <form action="{{ route('checkout.pay') }}" method="POST"> 
     @csrf
     <button type="submit" name="submit">Submit</button>
    </form>
    <meta name="_token" content="{{ csrf_token() }}">
    <button id="checkout-button">Checkout</button>
</div>

</div> 
</div>
</div> 
</div>
</div>
</div>
</section>

<script src="https://js.stripe.com/v3/"></script>
 <script>  
    
    // Create an instance of the Stripe object with your publishable API key
    var stripe = Stripe("pk_test_51HNZlOGtpgjQ6THyaeHACOGCb3ylEpPd9e6mRRqSOXgrBsHiWiSrntHz2vPllYeilpVoBNyvct5IEipEw6sZJHFB005dtaxL8F");
    var checkoutButton = document.getElementById("checkout-button");
    var url = '{{ route("checkout.pay") }}';
    // console.log(url);
    checkoutButton.addEventListener("click", function () {
      fetch(url, {
        method: "POST",
        headers: {
        'X-CSRF-TOKEN' : document.querySelector('meta[name="_token"]').content
        }
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (session) {
          return stripe.redirectToCheckout({ sessionId: session.id });
        })
        .then(function (result) {
          // If redirectToCheckout fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using error.message.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function (error) {
          console.error("Error:", error);
        });
    });
</script>
<!-- my account end   -->
@endsection
@section('custom-js')

@endsection      