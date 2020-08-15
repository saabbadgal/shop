<div class="off_canvars_overlay">
</div>
<div class="offcanvas_menu">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="canvas_open">
<a href="javascript:void(0)"><i class="ion-navicon"></i></a>
</div>
<div class="offcanvas_menu_wrapper">
<div class="canvas_close">
<a href="javascript:void(0)"><i class="ion-android-close"></i></a>
</div>
<div class="logo">
    <a href="{{route('shop.index')}}" class="h3">{{-- <img src="{{asset('user/img/logo/logo.png')}}" alt=""> --}}Krea Shoes </a>
</div>
<div id="menu" class="text-left ">
<ul class="offcanvas_main_menu">
    <li class="menu-item-has-children">
        <li><a class="{{ (request()->is('/')) ? 'active' : '' }} " href="{{route('shop.index')}}">Home</a></li>
            <li><a class="{{ (request()->is('gallery')) ? 'active' : '' }} " href="{{route('shop.gallery')}}">Gallery</a></li>
            <li><a class="{{ (request()->is('konzept')) ? 'active' : '' }} " href="{{route('shop.konzept')}}">Konzept</a></li>
            <li><a class="{{ (request()->is('about')) ? 'active' : '' }} " href="{{route('shop.about')}}">About</a></li> 
            @if(request()->is('cart*'))  
            <li><a class="{{ (request()->is('cart')) ? 'active' : '' }} " href="{{route('cart.index')}}">Cart</a></li> 
            @endif 
            <a href="{{route('cart.index')}}">
        <button style="font-size: 14px"  class="btn btn-elegant btn-sm  px-2 py-1"><i class="fas fa-shopping-cart"></i>Cart<span class="badge badge-danger ml-2"> {{Session::get('cart') !== null ? Session::get('cart')->getTotalQty() : ''}}</span></button></a>
        @guest
        <a href="{{ route('login') }}">
            <button style="font-size: 14px" type="button" class="btn btn-danger btn-sm waves-effect px-2 py-1">Login</button>
            {{-- {{ __('Logout') }} --}}
        </a>

        {{-- <a href="{{ route('register') }}">
            <button style="font-size: 14px"  type="button" class="btn btn-info btn-sm waves-effect px-2 py-1">Register</button>
        </a> --}}
        @else
         

        
            <div style="font-size: 14px"  class="dropdown-toggle mr-4 d-inline noselect" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">My Account</div> 
  <div class="dropdown-menu">
  <a class="dropdown-item" href="{{route('profile.orders')}}"><i class="fas fa-box-open">&nbsp;&nbsp;&nbsp;</i>Orders</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="{{route('profile.index')}}"><i class="far fa-address-card">&nbsp;&nbsp;&nbsp;</i>Addresses</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="fas fa-power-off">&nbsp;&nbsp;&nbsp;</i>Logout </a> 
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
</div>


         {{-- <a class="" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <button style="font-size: 14px"  class="btn btn-info btn-sm waves-effect px-2 py-1"> Logout</button>
        </a>  --}}

  {{--       <a class="" href="{{route('profile.index')}}">
            <button style="font-size: 14px"  class="btn btn-info btn-sm waves-effect px-2 py-1"> Profile</button>
            
        </a> --}}
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
   {{-- 
    <div class="header_account-list  mini_cart_wrapper">
        <a href=" "><button class="btn btn-outline-secondary btn-sm">Profile</button></a>
    </div> --}}
    @endguest

    </li> 
</ul>
</div>
<div class="offcanvas_footer">
<span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
<ul>
    <li><a href="{{ $social->facebook }}"><i class="ion-social-facebook"></i></a></li>
    <li><a href="{{ $social->instagram }}"><i class="ion-social-instagram"></i></a></li>
    <li><a href="mailTO:{{ $social->gmail }}"><i class="ion-social-googleplus"></i></a></li>
    <li><a href="tel:{{ $social->phone }}"><i class="ion-android-call"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<!--offcanvas menu area end-->
<header>
<div class="main_header sticky-header">
<div class="container-fluid">
<div class="header_container">
<div class="row align-items-center">
<div class="col-lg-2">
<div class="logo">
    <a href="{{route('shop.index')}}" class="h3">{{-- <img src="{{asset('user/img/logo/logo.png')}}" alt=""> --}}Krea Shoes </a>
</div>
</div>
<div class="col-lg-7">
<!--main menu start-->
<div class="main_menu menu_position">
    <nav>
        <ul>

            <li><a class="{{ (request()->is('/')) ? 'active' : '' }} " href="{{route('shop.index')}}">Home</a></li>
            <li><a class="{{ (request()->is('gallery')) ? 'active' : '' }} " href="{{route('shop.gallery')}}">Gallery</a></li>
            <li><a class="{{ (request()->is('konzept')) ? 'active' : '' }} " href="{{route('shop.konzept')}}">Konzept</a></li>
            <li><a class="{{ (request()->is('about')) ? 'active' : '' }} " href="{{route('shop.about')}}">About</a></li> 
            @if(request()->is('cart*'))  
            <li><a class="{{ (request()->is('cart')) ? 'active' : '' }} " href="{{route('cart.index')}}">Cart</a></li> 
            @endif  
            <a href="{{route('shop.shop')}}"><button type="button" class="shop-now float-right" style="min-width: 150px;"><i class="fas fa-shopping-bag" aria-hidden="true">&nbsp;</i>Shop Now</button></a>
            {{-- <button class="btn btn-mdb-color float-right">Shop</button> --}}
        </ul>
    </nav>
</div>
<!--main menu end-->
</div>
<div class="col-lg-3">
<div class="header_account_area">
    <div class="header_account-list search_bar d-inline">
        
        @guest
        <a href="{{ route('login') }}">
            <button style="font-size: 14px" type="button" class="btn btn-danger btn-sm btn-rounded waves-effect px-2 py-1">Login</button>
            {{-- {{ __('Logout') }} --}}
        </a>

        {{-- <a href="{{ route('register') }}">
            <button style="font-size: 14px"  type="button" class="btn btn-info btn-sm waves-effect px-2 py-1">Register</button>
        </a> --}}
        @else
         

        
            <div style="font-size: 14px"  class="dropdown-toggle mr-4 d-inline noselect" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">My Account</div> 
  <div class="dropdown-menu">
  <a class="dropdown-item" href="{{route('profile.orders')}}"><i class="fas fa-box-open">&nbsp;&nbsp;&nbsp;</i>Orders</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="{{route('profile.index')}}"><i class="far fa-address-card">&nbsp;&nbsp;&nbsp;</i>Addresses</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="fas fa-power-off">&nbsp;&nbsp;&nbsp;</i>Logout </a> 
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
</div>


         {{-- <a class="" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <button style="font-size: 14px"  class="btn btn-info btn-sm waves-effect px-2 py-1"> Logout</button>
        </a>  --}}

  {{--       <a class="" href="{{route('profile.index')}}">
            <button style="font-size: 14px"  class="btn btn-info btn-sm waves-effect px-2 py-1"> Profile</button>
            
        </a> --}}
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
   {{-- 
    <div class="header_account-list  mini_cart_wrapper">
        <a href=" "><button class="btn btn-outline-secondary btn-sm">Profile</button></a>
    </div> --}}
    @endguest
    <a href="{{route('cart.index')}}">
        <button style="font-size: 14px"  class="btn btn-elegant btn-sm  px-2 py-1"><i class="fas fa-shopping-cart">&nbsp;</i>Cart<span class="badge badge-primary my-0 ml-1" style="font-size: 14px;">{{Session::get('cart') !== null ? Session::get('cart')->getTotalQty() : ''}}</span></button></a>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>
<!--header area end-->