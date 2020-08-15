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
                                <li> <a href="{{route('profile.orders')}}"  class="nav-link ">Orders</a></li> 
                                <li><a href="{{route('profile.index')}}" class="nav-link " >Address</a></li>
    <li><a href="{{route('profile.create')}}"  class="nav-link  ">Create Address</a></li>
                            </ul>
                        </div>    
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">   
                            <div class="tab-pane fade  show active" id=""> 
                              {{-- @isset($user->address->name) --}}
                                <h3>Edit Address </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="{{route('profile.update',$address->id)}}" method="post">
                                            @csrf
                                            @method('PATCH')
                            <label>Email</label>
                            <input disabled="true" name="email" value="{{auth()->user()->email}} ">
                            <label>Full name </label>
                            <input type="text" name="name" value="{{$address->name}}">
                            @error('name')
                            <div class="alert-danger">{{$message}} </div>
                            @enderror
                            <label>Address</label>
                            <input type="text" name="address"value="{{$address->address}}">
                             @error('address')
                            <div class="alert-danger">{{$message}} </div>
                            @enderror
                            <label>Town/City</label>
                            <input type="text" name="city" value="{{$address->city}}">
                             @error('city')
                            <div class="alert-danger">{{$message}} </div>
                            @enderror
                            <label>State</label>
                            <input type="text" name="state" value="{{$address->state}}">
                            <label>PIN code</label>
                            <input type="text" name="pin" value="{{$address->pin}}">
                             @error('pin')
                            <div class="alert-danger">{{$message}} </div>
                            @enderror
                            <label>Country</label>
                            <input type="text" name="country" value="{{$address->country}}">
                            <label>Mobile number</label>
                            <input type="text" name="phone" value="{{auth()->user()->phone}}">
                            <button class="btn btn-danger" type="submit">Save</button>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- @endisset --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>          
    </section>       
	@endsection