@extends('user.layouts.app')
@section('custom-css')
 <style>
.list-group-item{
    padding: 0.50rem 1rem;
}
 </style>

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
    @if($user->addresses->count() > 0)
<div class="row"> 
<div class="col-lg-12 col-md-12">
<h3>Select Shipping Address</h3>
<div class="tab-content dashboard_content">
    <div class="tab-pane fade show active">
      
      
        <div class="row">
            @foreach($user->addresses as $address)
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
</div>
</div>

</div> 
@else
<div class="row">
    <div class="col-md-5">
     
     <h3>Create Address </h3>
     <div class="login">
         <div class="login_form_container">
             <div class="account_login_form">
                 <form action="{{route('profile.store')}}" method="post">
                     @csrf
                     <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                     <label>Email</label>
                     <input disabled="true" name="email" value="{{auth()->user()->email}} ">
                     <label>Full name </label>
                     <input type="text" name="name" >
                     @error('name')
                     <div class="alert-danger">{{$message}} </div>
                     @enderror
                     <label>Address</label>
                     <input type="text" name="address">
                      @error('address')
                     <div class="alert-danger">{{$message}} </div>
                     @enderror
                     <label>Town/City</label>
                     <input type="text" name="city" >
                      @error('city')
                     <div class="alert-danger">{{$message}} </div>
                     @enderror
                     <label>State</label>
                     <input type="text" name="state" >
                     <label>PIN code</label>
                     <input type="text" name="pin" >
                      @error('pin')
                     <div class="alert-danger">{{$message}} </div>
                     @enderror
                     <label>Country</label>
                     <input type="text" name="country" >
                     <label>Mobile number</label>
                     <input type="text" name="phone" value="{{auth()->user()->phone}}">
                     <button class="btn btn-danger" type="submit">Save</button>
                 </form>
             </div>
         </div>
     </div>
  </div>
  </div>
@endif
</div>
</div> 
</div>
</div>
</div>
</section>
<!-- my account end   -->
@endsection
@section('custom-js')

@endsection      