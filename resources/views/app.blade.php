<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Troovami - Motors</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
{!! Html::style('autostars/css/bootstrap.css') !!} 
{!! Html::style('autostars/css/bootstrap-theme.css') !!} 
{!! Html::style('autostars/css/style.css') !!} 
{!! Html::style('autostars/vendor/prettyphoto/css/prettyPhoto.css') !!} 
{!! Html::style('autostars/vendor/owl-carousel/css/owl.carousel.css') !!} 
{!! Html::style('autostars/vendor/owl-carousel/css/owl.theme.css') !!} 
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
{!! Html::style('autostars/css/custom.css') !!} <!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
{!! Html::style('autostars/colors/color1.css') !!} 
{!! Html::style('autostars/style-switcher/css/style-switcher.css') !!} 
<!-- SCRIPTS
  ================================================== -->
{!! Html::script('autostars/js/modernizr.js') !!} <!-- Modernizr -->
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

</head>
<body class="home" onload="camposPublicar()">

	<div class="body">
	
		@include('cabeza')
		@include('login')
		@yield('content')
		@include('pie')
		
		<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
	
	</div>

	{!! Html::script('autostars/js/jquery-2.0.0.min.js') !!}  <!-- Jquery Library Call -->
	{!! Html::script('autostars/vendor/prettyphoto/js/prettyphoto.js') !!}  <!-- PrettyPhoto Plugin -->
	{!! Html::script('autostars/js/ui-plugins.js') !!}  <!-- UI Plugins -->
	{!! Html::script('autostars/js/helper-plugins.js') !!}  <!-- Helper Plugins -->
	{!! Html::script('autostars/vendor/owl-carousel/js/owl.carousel.min.js') !!}  <!-- Owl Carousel -->
	{!! Html::script('autostars/vendor/password-checker.js') !!}  <!-- Password Checker -->
	{!! Html::script('autostars/js/bootstrap.js') !!}  <!-- UI -->
	<!-- {!! Html::script('autostars/js/init.js') !!}   All Scripts -->
	{!! Html::script('autostars/vendor/flexslider/js/jquery.flexslider.js') !!}  <!-- FlexSlider -->
	{!! Html::script('http://maps.googleapis.com/maps/api/js?sensor=false') !!} 
	{!! Html::script('autostars/style-switcher/js/jquery_cookie.js') !!} 
	{!! Html::script('autostars/style-switcher/js/script.js') !!} 
	
	<!-- Propios -->
	{!! Html::script('autostars/js/init_cars.js') !!}  <!-- All Scripts -->
	{!! Html::script('autostars/js/ajaxCars.js') !!}  <!-- Ajax -->
		
</body>
</html>