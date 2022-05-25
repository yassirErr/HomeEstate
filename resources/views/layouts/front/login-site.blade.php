<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>XERO - Real Estate HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('assets/front/css/skins/default.css')}}"> -->
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/jquery.selectBox.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/dropzone.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/rangeslider.cs')}}s">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/animate.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/leaflet.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/slick.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/slick-theme.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/map.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/jquery.mCustomScrollbar.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/fonts/flaticon/font/flaticon.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('assets/front/img/favicon.ico')}}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
    
</head>
<body id="top" class="index-body">


<!-- Top header start -->
@include('front.includes.top-header')
<!-- Top header end -->


<main class="py-4">
            @yield('content')
</main>


<!-- Footer start -->
@include('front.includes.footer')
<!-- Footer end -->


</body>
</html>