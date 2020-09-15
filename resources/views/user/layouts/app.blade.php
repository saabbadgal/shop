<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Krea Shoes Shop Online </title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <script src="{{ asset('user/css/fontawesome.js') }}" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/font.awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/slinky.menu.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/plugins.css') }}"> 
    <link rel="stylesheet" href="{{ asset('user/css/maxbhi.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
  </head> 

   @yield('custom-css')

  <body id="main-container" class="default">

    @include('user.layouts.header')

      @yield('content')

    @include('user.layouts.footer')

    <script src="{{ asset('js/app.js') }}"></script> 
    <script src="{{ asset('user/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('user/js/popper.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/js/slick.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script> 
    <script src="{{ asset('user/js/jquery.ui.js') }}"></script>
    <script src="{{ asset('user/js/jquery.elevatezoom.js') }}"></script> 
    <script src="{{ asset('user/js/plugins.js') }}"></script> 
    <script src="{{ asset('user/js/mdb.min.js') }}" type="b52386749c15614db8b655e0-text/javascript"></script>  
    <script src="{{ asset('user/js/maxbhi.js') }}"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>


   @yield('custom-js')
  </body>
</html>