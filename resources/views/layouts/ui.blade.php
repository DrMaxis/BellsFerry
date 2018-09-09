
<!--
  @WeatherTeam 2018
  @StudioUnwanted 2018
  Unwanted.kr
-->

<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="JJ International - Delivering Quality and Style around the globe." />
    <meta name="keywords" content="International Shipping, Wholesale, Drop Shipping, Furniture, Patio, JJ, Free Shipping" />
    
   <!-- 
         START STYLE DEPENDANTS

-->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Main  -->
	<link rel="stylesheet" href="css/style.css">


    <title>{{config('app.name', 'bpb')}}</title>

	</head>
    <body>
<div id="jj-container">
		<nav class="jj-nav" role="navigation">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-xs-2">
							<div id="jj-logo">

								<a href="#">
									<img src="#">
									JJ International
								</a>
							</div>

						</div>

						<div class="col-md-6 col-xs-6 text-center menu-1">
							<ul>
								<li>
									<a href="#">About</a>
								</li>
								<li class="has-dropdown">
									<a href="#">Products</a>
									<ul class="dropdown">
										<li><a href="#">Prodcut Type 1</a></li>
										<li><a href="#">Prodcut Type 2</a></li>
										<li><a href="#">Prodcut Type 3</a></li>
										<li><a href="#">Prodcut Type 4</a></li>
									</ul>
								</li>
								<li>
								<a href="#">
									Contact Us
								</a>
								</li>
							</ul>
						</div>

					</div> <!-- End Row -->
					
				</div> <!-- End Container -->
			</nav> <!-- End Nav -->


</div> <!-- End JJ Container -->








	@yield('content')














<!--

	START JAVASCRIPT DEPENDS


-->


<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>


<!-- FOR IE9 below -->

<!--[if lt IE 9]>

<script src="js/respond.min.js"></script>
<![endif]

-->


	</body>