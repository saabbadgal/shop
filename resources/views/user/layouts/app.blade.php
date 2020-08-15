<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dorno – Fashion eCommerce HTML Template  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Mdb Css --}}
    <script src="{{ asset('user/css/fontawesome.js') }}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('mdb/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mdb/css/mdb.min.css') }}">
    {{-- End MDB --}}
    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/font.awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/slinky.menu.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/plugins.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
  </head>
  <style>
  .dropdown-item{
  font-weight: 300;
  font-size: 12px;
  padding: 0.3rem 1rem;
  }
  .dropdown-divider{
  margin: 0;
  }
  .dropdown-menu{
  padding: 0;
  min-width: 0;
  }
  .noselect {
  -webkit-touch-callout: none; /* iOS Safari */
  -webkit-user-select: none; /* Safari */
  -khtml-user-select: none; /* Konqueror HTML */
  -moz-user-select: none; /* Old versions of Firefox */
  -ms-user-select: none; /* Internet Explorer/Edge */
  user-select: none; /* Non-prefixed version, currently
  supported by Chrome, Edge, Opera and Firefox */
  }
 

 
  </style>
  <body id="main-container" class="default">
    
    @include('user.layouts.header')
    @yield('content')
    @include('user.layouts.footer')
    
    <script src="{{ asset('user/vendors/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('user/js/vendor/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('user/js/popper.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/js/slick.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script>
    {{-- <script src="{{ asset('user/js/jquery.counterup.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('user/js/jquery.countdown.js') }}"></script> --}}
    <script src="{{ asset('user/js/jquery.ui.js') }}"></script>
    <script src="{{ asset('user/js/jquery.elevatezoom.js') }}"></script>
    {{-- <script src="{{ asset('user/js/isotope.pkgd.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('user/js/slinky.menu.js') }}"></script> --}}
    <script src="{{ asset('user/js/plugins.js') }}"></script>
    {{-- Mdb Script --}}
   {{--  <script src="{{ asset('mdb/js/popper.min.js') }}" type="b52386749c15614db8b655e0-text/javascript"></script> --}}
    <script src="{{ asset('mdb/js/mdb.min.js') }}" type="b52386749c15614db8b655e0-text/javascript"></script>
   {{--  <script src="{{ asset('mdb/js/bootstrap.min.js') }}" type="b52386749c15614db8b655e0-text/javascript"></script> --}}
    {{-- End MDB --}}
    <!-- Main JS -->
    <script src="{{ asset('user/js/main.js') }}"></script>
    <script>
    
    
    $(document).ready(function() {
    $('.size').click(function() {
    var size =  $(this).val();
    $('#size').attr('value', size);
    $('.size').removeClass('btn btn-danger btn-sm');
    $('.size').addClass('btn btn-light btn-sm');
    $(this).removeClass('btn btn-light btn-sm');
    $(this).addClass('btn btn-danger btn-sm');
    });
    $('#cart_submit').click(function(){
    if($('#size').val()){
    
    console.log('saab');
    }else{
    event.preventDefault();
    $('#size_error').removeClass('d-none');
    }
    });
    });
    
    
    </script>
  </body>
</html>