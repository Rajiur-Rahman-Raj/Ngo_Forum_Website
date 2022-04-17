@extends('layouts.frontendmaster')

@section('frontend_main')
  	<style>
  		/*Banner css start*/
  		.banner_part {
  			background-image: url({{ asset('frontend_assets') }}/images/p-43.jpg);
  			background-position: center;
  			background-size: cover;
  			background-repeat: no-repeat;
  			height: 400px;
  			position: relative;
  			z-index: 1;
  		}

  		.banner_part:before {
  			content: "";
  			position: absolute;
  			top: 0;
  			left: 0;
  			height: 100%;
  			width: 100%;
  			background: rgba(0, 0, 0, 0.7);
  			z-index: -1;
  		}

  		.banner_part .banner_text {
  			padding-top: 200px;
  			text-align: center;
  		}

  		.banner_part .banner_text h1 {
  			font-family: 'Lato', sans-serif;
  			font-weight: 700;
  			color: #e7e7e7;
  			font-size: 40px;
  			margin-bottom: 5px;
  			letter-spacing: 2px;
  			text-shadow: 10px 10px 15px #727272;
  		}

  		.banner_part .banner_text h1 span {
  			color: #55AAF2
  		}

  		.banner_part .banner_text p {
  			color: white;
  			margin-top: 15px;
  		}

  		.banner_part .banner_text p span a {
  			color: #55AAF2;
  			padding: 0px 10px;
  			font-family: 'Lato', sans-serif;
  			font-weight: 400;
  			font-size: 16px;
  			cursor: pointer;
  		}

  		/*Banner css end*/

  		/*Header link CSS start*/
  		.header_link {
  			padding-top: 20px;
  			padding-bottom: 20px;
  		}

  		.header_link p {
  			font-family: 'Open Sans', sans-serif;
  			font-weight: 600;
  			font-size: 15px;
  			color: #1e1e1e;
  		}

  		.header_link p a {
  			color: #1e1e1e;
  		}

  		.header_link p span {
  			color: #149aba;
  		}

  		.header_link .header_icon span {
  			margin-right: 20px;
  			font-family: 'Open Sans', sans-serif;
  			font-weight: 600;
  			font-size: 15px;
  			color: #1e1e1e;
  		}

  		.header_link .header_icon a {
  			display: inline-block;
  			margin-right: 10px;
  		}

  		.header_link .header_icon a i {
  			height: 30px;
  			width: 30px;
  			line-height: 30px;
  			text-align: center;
  			background-color: #427ad4;
  			border-radius: 50%;
  			color: white;
  			transition: all .2s linear;

  		}

  		.header_link .header_icon a i.youtube {
  			background-color: #e01e1e;
  		}

  		.header_link .header_icon a i:hover {
  			color: #427ad4;
  			background: white;
  			transform: scale(1.1);
  		}

  		.header_link .header_icon a i.youtube:hover {
  			background-color: white;
  			color: #e01e1e;
  			transform: scale(1.1);
  		}

  		/*Header link CSS End*/


  		/*test part*/

  		.region {
  			margin-bottom: 60px;
  			margin-top: 20px;
  		}

  		.region .heading_row {
  			background: #0B486B;
  			/* fallback for old browsers */
  			background: -webkit-linear-gradient(to right, #F56217, #0B486B);
  			/* Chrome 10-25, Safari 5.1-6 */
  			background: linear-gradient(to right, #F56217, #0B486B);
  			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  			border-radius: 10px 10px 0px 0px;
  		}

  		.region .heading {
  			padding-top: 15px;
  			padding-bottom: 15px;
  		}

  		.region .heading h3 {
  			font-family: 'Oswald', sans-serif;
  			font-weight: 400;
  			font-size: 18px;
  			color: white;
  		}

  		.donor img{
  			width: 120px;
  			margin-top: 10px;
  		}

  		.barisal {
  			padding-top: 12px;
  			padding-bottom: 15px;
  			background: rgba(248, 194, 145, 0.4);
  			border-bottom: 1px solid #16a085;
  		}

  		.barisal h5 {
  			font-family: 'Berkshire Swash', cursive;
  			font-weight: 400;
  			font-size: 18px;
  			text-shadow: 10px 10px 15px gray;
  		}

  		.barisal h5 span {
  			font-family: 'Grenze', serif;
  			font-size: 18px;
  			font-weight: 500;
  			text-shadow: 10px 10px 15px transparent;
  		}

  		.barisal p {
  			font-family: 'Open Sans Condensed', sans-serif;
  			font-size: 15px;
  			font-weight: 700;
  			text-shadow: 10px 10px 15px darkgray;

  		}

  		.barisal ul li {
  			font-family: 'Open Sans Condensed', sans-serif;
  			font-size: 15px;
  			font-weight: 700;
  			text-shadow: 10px 10px 15px gray;
  		}

  		.barisal i {
  			color: #16a085;
  		}

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
  							<h1>Address of Project Offices</h1>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<!--Banner Part End-->

  	<!--link part start-->
  	<section>
  		<div class="header_link">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-8">
  						<p><span><a href="{{ url('/') }}">Home</a> </span><span> | </span> <a href="project_office.html">Address of Project Offices</a></p>
  					</div>
  					<div class="col-lg-4 text-right">
  						<div class="header_icon">
  							<span>Important links : </span>
  							<a href="#"><i class="fab fa-facebook-f"></i></a>
  							<a href="https://www.youtube.com/channel/UCe1YOUKvOPf6JnwG6bvjKiA" target="_blank"><i class="fab fa-youtube youtube"></i></a>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<!--link part end-->
  	<section>
  		<div class="region">
  			<div class="container">
  				<div class="row heading_row">
  					<div class="col-lg-2">
  						<div class="heading">
  							<h3>Project Locatoin</h3>
  						</div>
  					</div>
  					<div class="col-lg-2">
  						<div class="heading">
  							<h3>Project Name</h3>
  						</div>
  					</div>
  					<div class="col-lg-2">
  						<div class="heading">
  							<h3>Funded By</h3>
  						</div>
  					</div>
  					<div class="col-lg-2">
  						<div class="heading">
  							<h3>Contact Person</h3>
  						</div>
  					</div>
  					<div class="col-lg-2">
  						<div class="heading">
  							<h3>Street Address</h3>
  						</div>
  					</div>
  					<div class="col-lg-2">
  						<div class="heading">
  							<h3>Phone &amp; Email</h3>
  						</div>
  					</div>
  				</div>

          @foreach ($all_project_office as $all_project_offices)

  				<div class="row barisal">
  					<div class="col-lg-2">
  						<div class="barisal_region wow fadeInRight" data-wow-duration="1.6s">
  							<h5>{{ $all_project_offices->project_location }}</h5>
  						</div>
  					</div>
  					<div class="col-lg-2">
  						<div class="project_name wow fadeInRight" data-wow-duration="1.6s">
  							<p>{{ $all_project_offices->project_name }}</p>
  						</div>
  					</div>
  					<div class="col-lg-2">
  						<div class="donor">
  							<img src="{{ asset('uploads/project_office_logo') }}/{{ $all_project_offices->funded_logo }}" alt="UNHCR" class="img-fluid">
  						</div>
  					</div>
  					<div class="col-lg-2">
  						<div class="barisal_person wow fadeInRight" data-wow-duration="1.6s">
  							<h5><span>{{ $all_project_offices->contact_parson }}</span></h5>
  						</div>
  					</div>
  					<div class="col-lg-2">
  						<div class="barisal_address wow fadeInRight" data-wow-duration="1.6s">
  							<p>{{ $all_project_offices->address }}</p>
  						</div>
  					</div>
  					<div class="col-lg-2">
  						<div class="barisal_phone wow fadeInRight" data-wow-duration="1.6s">
  							<ul>
  								<li><i class="fas fa-mobile-alt"></i> &nbsp;Mob :{{ $all_project_offices->phone }}</li>
  								<li><i class="far fa-envelope"></i> &nbsp;{{ $all_project_offices->email }}<b@gmail.com</li>
  							</ul>
  						</div>
  					</div>
          </div>
          @endforeach



  			</div>
  		</div>
  	</section>

@endsection
