
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
	
	<!-- Animations -->
	<link rel="stylesheet" href="css/animations.css">
    <!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Carousel  -->
	<link rel="stylesheet" href="css/carousel.css">
	<!-- Main  -->
	<link rel="stylesheet" href="css/jj-main.css">


  <!-- 
        END STYLE DEPENDANTS

-->
	

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
									<img src="{{asset('storage/inc/logo-small.png')}}">
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

	START JAVASCRIPT DEPENDANTS

-->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- Jquery JS -->
{{-- <script src="{{asset('js/jquery.js')}}"></script> --}}


<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>



<!-- Modernizr JS -->
{{-- <script src="{{asset('js/modernizer262.js')}}"></script> --}}
<!-- BootStrap JS -->
{{-- <script src="{{asset('js/bootstrap.min.js')}}"></script> --}}


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--Carousel JS -->
<script src="{{asset('js/carousel.js')}}"></script>
<!-- Counter JS -->
<script src="{{asset('js/counter.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('js/jj-main.js')}}"></script>




<!-- FOR IE9 below -->

<!--[if lt IE 9]>

<script src="js/respond.min.js"></script>
<![endif]

-->

<!--

	END JAVASCRIPT DEPENDANTS


-->



	</body>