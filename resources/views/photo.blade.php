@extends('layouts.frontendmaster')

@section('frontend_main')

  <style>
  		.latest_banner {
  			background-image: url({{ asset('frontend_assets') }}/images/banner-2.jpg);
  			background-position: top left;
  			background-size: cover;
  			background-repeat: no-repeat;
  			background-attachment: fixed;
  			height: 300px;
  			position: relative;
  			z-index: 1;
  		}

  		.latest_banner:before {
  			content: "";
  			position: absolute;
  			top: 0;
  			left: 0;
  			height: 100%;
  			width: 100%;
  			background-color: rgba(0, 0, 0, 0.8);
  			z-index: -1;
  		}

  		.latest_banner .latest_banner_text {
  			text-align: center;
  			padding-top: 160px;
  		}

  		.latest_banner_text h2 {
  			font-family: 'Raleway', sans-serif;
  			font-weight: 800;
  			color: white;
  			font-size: 45px;
  			text-shadow: 10px 10px 15px black;
  		}

  		.latest_banner_text h5 {
  			font-family: 'Lato', sans-serif;
  			font-weight: 500;
  			color: #42B8D4;
  			font-size: 20px;
  		}

  		.gallery{
  			padding-bottom: -20px;
  		}



  	</style>
  </head>

  <body>

  	<!--latest Banner start-->
  	<section>
  		<div class="latest_banner">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-12">
  						<div class="latest_banner_text">
  							<h2>Photo Gallery</h2>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<!--Latest Banner end-->


  	<section>
  		<div class="container">
  			<div class="row mt-5 mb-5">
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p1.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p1.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p2.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p2.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p3.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p3.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p4.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p4.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p5.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p5.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p6.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p6.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p-10.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p-10.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p-12.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p-12.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p-13.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p-13.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p-14.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p-14.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>



  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p-20.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p-20.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p-21.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p-21.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p-22.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p-22.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p-24.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p-24.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p-25.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p-25.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p-26.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p-26.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-3 pt-3 pb-3">
  					<div class="img">
  						<a href="{{ asset('frontend_assets') }}/images/p-27.jpg">
  							<img src="{{ asset('frontend_assets') }}/images/p-27.jpg" alt="" class="img-fluid">
  						</a>
  					</div>
  				</div>

  			</div>
  		</div>
  	</section>



@endsection
