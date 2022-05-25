<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>
   
    <!-- Dropzone.js -->
    <link href="{{asset('assets/admin/vendors/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets/admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('assets/admin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('assets/admin/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">



    <!-- Custom Theme Style -->
    <link href="{{asset('assets/admin/build/css/custom.min.css')}}" rel="stylesheet">

       <!-- Custom Theme Style -->
       <link href="{{asset('assets/admin/build/css/style.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
  

<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>
            @include('dashboard.includes.side-bar')
          </div>
        </div>

        <!-- top navigation -->
        @include('dashboard.includes.top-navbar')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        @include('dashboard.includes.footer')
        <!-- /footer content -->
      </div>
    </div>





  <!-- Dropzone.js -->
    <script src="{{asset('/assets/admin/vendors/dropzone/dist/min/dropzone.min.js')}}"></script>
    <!-- jQuery -->
    <script src="{{asset('assets/admin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('assets/admin/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('assets/admin/vendors/nprogress/nprogress.js')}}"></script>

    <!-- Chart.js -->
    <script src="{{asset('assets/admin/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('assets/admin/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('assets/admin/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('assets/admin/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('assets/admin/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('assets/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('assets/admin/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('assets/admin/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
     <script src="{{asset('assets/admin/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>




  <!-- Custom Theme Scripts -->
  <script src="{{asset('assets/admin/build/js/custom.min.js')}}"></script>
{{-- ******************************************************************************************** --}}

    	<!-- bootstrap-wysiwyg -->
	<script src="{{asset('assets/admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/google-code-prettify/src/prettify.js')}}"></script>
	<!-- jQuery Tags Input -->
	<script src="{{asset('assets/admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
	<!-- Switchery -->
	<script src="{{asset('assets/admin/vendors/switchery/dist/switchery.min.js')}}"></script>
	<!-- Select2 -->
	<script src="{{asset('assets/admin/vendors/select2/dist/js/select2.full.min.js')}}"></script>
	{{-- <!-- Parsley -->
	<script src="{{asset('assets/admin/vendors/parsleyjs/dist/parsley.min.js')}}"></script> --}}
	<!-- Autosize -->
	<script src="{{asset('assets/admin/vendors/autosize/dist/autosize.min.js')}}"></script>
	<!-- jQuery autocomplete -->
	<script src="{{asset('assets/admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
	<!-- starrr -->
  <script src="{{asset('assets/admin/vendors/starrr/dist/starrr.js')}}"></script>




<script>
  function show1(){
    document.getElementById('cats_list').style.display ='none';
    }
    function show2(){
    document.getElementById('cats_list').style.display = 'block';
    }
</script>

@yield('script')

 
  </body>
</html>
