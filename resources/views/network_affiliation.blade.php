@extends('layouts.frontendabout')

@section('frontend_main')
  <style>
  		/*banner css start*/
  		.banner_part {
  			background-image: url({{ asset('frontend_assets/about') }}/images/regional4.jpg);
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
  			height: 400px;
  			position: relative;
  		}

  		.banner_part:before {
  			content: "";
  			position: absolute;
  			top: 0;
  			left: 0;
  			height: 100%;
  			width: 100%;
  			background-color: rgba(0, 0, 0, 0.5);
  		}

  		.banner_text {
  			text-align: center;
  			padding-top: 200px;
  		}

  		.banner_text h3 {
  			font-family: 'Roboto', sans-serif;
  			font-size: 38px;
  			font-weight: 600;
  			color: #e7e7e7;
  			margin-bottom: 10px;
  		}

  		.banner_text p {
  			font-family: 'Lato', sans-serif;
  			font-size: 16px;
  			font-weight: 600;
  			color: ghostwhite;
  		}

  		.banner_text p span {
  			color: #00AEEF;
  		}

  		/*banner css end*/

  		/*development css start*/
  		.dev_partners {
  			padding-top: 30px;
  			padding-bottom: 70px;
  		}

  		.dev_heading h3 {
  			font-family: 'Lobster', cursive;
  			font-size: 38px;
  		}

  		.dev_partners_img {
  			padding-top: 20px;
  		}

  		/*development css end*/

  		/*networking css start*/
  		.net_partners {
  			padding-top: 30px;
  			padding-bottom: 70px;
  		}

  		.net_heading h3 {
  			font-family: 'Lobster', cursive;
  			font-size: 38px;
  		}

  		.net_partners_img {
  			padding-top: 20px;
  			padding-bottom: 40px;
  		}

  		/*networking css end*/

  	</style>
  </head>

  <body>

  	<!--Banner Part start-->
  	<section>
  		<div class="banner_part">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-12">
  						<div class="banner_text">
  							<h3>
  								Network Affiliation
  							</h3>
  							<p>Development Partners <span class="ml-1 mr-1">|</span> Networking Partners</p>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<!--Banner Part end-->

  	<!--link Part start-->
  	<nav aria-label="breadcrumb">
  		<ol class="breadcrumb">
  			<li class="breadcrumb-item"><a href="about_us.html">Home</a></li>
  			<li class="breadcrumb-item active" aria-current="page">Network Affiliation</li>
  		</ol>
  	</nav>
  	<!--link part end-->

  	<!--development part start-->
  	<section>
  		<div class="dev_partners">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-12">
  						<div class="dev_heading text-center">
  							<h3>Development Partners</h3>
  							<p>------ <span><i class="fab fa-get-pocket"></i></span> ------</p>
  						</div>
  					</div>
  				</div>
  				<div class="row">
  					<div class="col-lg-12">
  						<div class="dev_partners_img text-center">
                @foreach ($network_infos as $network_info)
                  <img src="{{ asset('uploads/network_image') }}/{{ $network_info->development_image }}" alt="" class="img-fluid w-100">
                @endforeach
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<!--development part end-->

  	<!--networking partner part start-->
  	<section>
  		<div class="net_partners">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-12">
  						<div class="net_heading text-center">
  							<h3>Networking Partners</h3>
  							<p>------ <span><i class="fab fa-get-pocket"></i></span> ------</p>
  						</div>
  					</div>
  				</div>
  				<div class="row pt-3">
  					<div class="col-lg-12">
  						<div class="net_partners_img text-center">
                @foreach ($network_infos as $network_info)
                  <img src="{{ asset('uploads/network_image') }}/{{ $network_info->networking_image }}" alt="" class="img-fluid w-100">
                @endforeach
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<!--networking partner part end-->

  @endsection
	<!--gc part end-->
