<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Krea Shoes Shop Online </title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-ui/jquery-ui.theme.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons/css/simple-line-icons.css') }}">    
  {{--    <link rel="stylesheet" href="{{ asset('admin/vendors/flags-icon/css/flag-icon.min.css') }}">  
      <link rel="stylesheet" href="{{ asset('admin/vendors/chartjs/Chart.min.css') }}">   
    <link rel="stylesheet" href="{{ asset('admin/vendors/morris/morris.css') }}"> 
     <link rel="stylesheet" href="{{ asset('admin/vendors/weather-icons/css/pe-icon-set-weather.min.css') }}">   
      <link rel="stylesheet" href="{{ asset('admin/vendors/starrr/starrr.css') }}">   
    <link rel="stylesheet" href="{{ asset('admin/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/ionicons/css/ionicons.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2/css/select2.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2/css/select2-bootstrap.min.css') }}">   
    <link rel="stylesheet" href="{{ asset('admin/vendors/summernote/summernote-bs4.css') }}">  
    <link rel="stylesheet" href="{{ asset('admin/vendors/materialdesign-webfont/css/materialdesignicons.min.css') }}">    
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatable/css/dataTables.bootstrap4.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatable/buttons/css/buttons.bootstrap4.min.css') }}">   --}}
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    {{-- <link rel="stylesheet" href="{{ asset('admin/css/fileinput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/fileinput-rtl.min.css') }}">--}}

    {{-- <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}"> --}}
    <!-- END: Custom CSS-->
<style>
  .fileinput-upload{
    display: none !important;
  }
  .file-preview-image{
    max-width: 70px !important;
  }
  .file-caption-info{

    display: none !important;
  }
</style>
@yield('style')
</head>
<body id="main-container" class="default">
 
 
            @yield('content')
        
    </div>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}


<script src="{{ asset('admin/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('admin/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('admin/js/moment.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap.bundle.min.js')}}"></script>    
<script src="{{ asset('admin/js/jquery.slimscroll.min.js')}}"></script> 
{{-- Datatable  Scripts--}} 
        <script src="{{ asset('admin/js/jquery.dataTables.min.js')}}"></script> 
        <script src="{{ asset('admin/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('admin/js/jszip.min.js')}}"></script>
        <script src="{{ asset('admin/js/pdfmake.min.js')}}"></script>
        <script src="{{ asset('admin/js/vfs_fonts.js')}}"></script>
        <script src="{{ asset('admin/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('admin/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('admin/js/buttons.colVis.min.js')}}"></script>
        <script src="{{ asset('admin/js/buttons.flash.min.js')}}"></script>
        <script src="{{ asset('admin/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('admin/js/buttons.print.min.js')}}"></script>      
        <script src="{{ asset('admin/js/datatable.script.js')}}"></script>
{{-- Datatable  Scripts End--}}
<script src="{{ asset('admin/js/app.js')}}"></script> 
<script src="{{ asset('admin/js/raphael.min.js')}}"></script>
<script src="{{ asset('admin/js/morris.min.js')}}"></script>
<script src="{{ asset('admin/js/Chart.min.js')}}"></script>
<script src="{{ asset('admin/js/starrr.js')}}"></script>
<script src="{{ asset('admin/js/jquery.canvaswrapper.js')}}"></script>
<script src="{{ asset('admin/js/jquery.colorhelpers.js')}}"></script>
<script src="{{ asset('admin/js/jquery.flot.js')}}"></script>
<script src="{{ asset('admin/js/jquery.flot.saturated.js')}}"></script>
<script src="{{ asset('admin/js/jquery.flot.browser.js')}}"></script>
<script src="{{ asset('admin/js/jquery.flot.drawSeries.js')}}"></script>
<script src="{{ asset('admin/js/jquery.flot.uiConstants.js')}}"></script>
<script src="{{ asset('admin/js/jquery.flot.legend.js')}}"></script>
<script src="{{ asset('admin/js/jquery.flot.pie.js')}}"></script>        
<script src="{{ asset('admin/js/Chart.min.js')}}"></script>  
<script src="{{ asset('admin/js/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{ asset('admin/js/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{ asset('admin/js/jquery-jvectormap-de-merc.js')}}"></script>
<script src="{{ asset('admin/js/jquery-jvectormap-us-aea.js')}}"></script>
<script src="{{ asset('admin/js/apexcharts.min.js')}}"></script> 
<script src="{{ asset('admin/js/select2.full.min.js')}}"></script>
<script src="{{ asset('admin/js/select2.script.js')}}"></script>
<script src="{{ asset('admin/js/summernote-bs4.js')}}"></script>
<script src="{{ asset('admin/js/summernote.script.js')}}"></script>
<script src="{{ asset('admin/js/dropzone.js')}}"></script> 
<script src="{{ asset('admin/js/fileinput.min.js')}}"></script>
<script src="{{ asset('admin/js/home.script.js')}}"></script> 
{{-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> --}}
{{-- <script src="{{ asset('js/all.js') }}"></script> --}}
@yield('vue')
<script>    
   $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });
</script>
@yield('javascript')

</body>
</html>
