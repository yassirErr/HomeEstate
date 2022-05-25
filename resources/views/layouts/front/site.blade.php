<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>XERO - Real Estate HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/jquery.selectBox.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/dropzone.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/rangeslider.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/animate.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/leaflet.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/slick.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/slick-theme.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/map.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/jquery.mCustomScrollbar.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/fonts/flaticon/font/flaticon.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('assets/front/css/skins/default.css')}}">

</head>
<body id="top" class="index-body">


<!-- Top header start -->
@include('front.includes.top-header')
<!-- Top header end -->

<!-- main header start -->
@include('front.includes.main-header')
<!-- main header end -->

<!-- Banner start -->
@include('front.includes.banner')
<!-- banner end -->


<!-- content start -->  
    @yield('content')
<!-- content end -->


<!-- Footer start -->
@include('front.includes.footer')
<!-- Footer end -->


<!-- External JS libraries -->
<script src="{{asset('assets/front/js/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper.min.js')}}"></script>
<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.selectBox.js')}}"></script>
<script src="{{asset('assets/front/js/rangeslider.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.filterizr.js')}}"></script>
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script src="{{asset('assets/front/js/backstretch.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.countdown.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.scrollUp.js')}}"></script>
<script src="{{asset('assets/front/js/particles.min.js')}}"></script>
<script src="{{asset('assets/front/js/typed.min.js')}}"></script>
<script src="{{asset('assets/front/js/dropzone.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{asset('assets/front/js/leaflet.js')}}"></script>
<script src="{{asset('assets/front/js/leaflet-providers.js')}}"></script>
<script src="{{asset('assets/front/js/leaflet.markercluster.js')}}"></script>
<script src="{{asset('assets/front/js/slick.min.js')}}"></script>
<script src="{{asset('assets/front/js/maps.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script src="{{asset('assets/front/js/ie-emulation-modes-warning.js')}}"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>
</html>