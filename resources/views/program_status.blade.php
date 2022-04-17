@extends('layouts.frontendmaster')

@section('frontend_main')
  <style>
  		/*banner css start*/
  		.banner_part {
  			background-image: url({{ asset('frontend_assets') }}/About/images/regional5.jpg);
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
  			padding-top: 220px;
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

  		/*section header css start*/
  		.section_heading {
  			padding-top: 20px;
  			padding-bottom: 10px;
  		}

  		.section_heading h3 {
  			font-family: 'Lobster', cursive;
  			color: #1e1e1e;
  			font-size: 28px;
  		}

  		/*section header css end*/



  		/*hardware css start*/
  		.hardware {
  			padding-top: 30px;
  			padding-bottom: 60px;
  		}

  		.hardware .hardware_headeing h3 {
  			font-family: 'Oswald', sans-serif;
  			font-size: 32px;
  			font-weight: 600;
  			color: #2d3436;
  			margin-bottom: 20px;
  		}

  		.hardware .hardware_headeing h3 span {
  			color: #0984e3;
  		}

  		.hardware .hardware_text p {
  			font-family: 'Rubik', sans-serif;
  			font-size: 16px;
  			color: #2d3436;
  			text-align: justify;
  		}

  		/*hardware css end*/

  		/*water css start*/
  		.water {
  			padding-bottom: 80px;
  		}

  		.water_img {
  			position: relative;
  		}

  		.water_img_overlay {
  			position: absolute;
  			top: 0;
  			left: 0;
  			height: 100%;
  			width: 100%;
  			background-color: rgba(0, 0, 0, 0.6);
  			opacity: 0;
  			transition: all .2s linear;
  			padding-top: 140px;
  			text-align: center;
  		}

  		.water_img_overlay i {
  			color: ghostwhite;
  			font-size: 50px;
  		}

  		.water_img:hover .water_img_overlay {
  			opacity: 1;
  		}

  		.water_text h5 {
  			font-family: 'Oswald', sans-serif;
  			font-size: 25px;
  			font-weight: 700;
  			color: #2d3436;
  			margin-bottom: 20px;
  		}

  		.water_text h5 span {
  			color: #0984e3
  		}

  		.water_text p {
  			font-family: 'Rubik', sans-serif;
  			font-size: 14px;
  			color: #2d3436;
  			text-align: justify;
  			margin-bottom: 30px;
  		}

  		.water_text a {
  			display: inline-block;
  			padding: 10px 20px;
  			background-color: #0984e3;
  			color: white;
  			border-radius: 10px;
  			box-shadow: 10px 10px 15px gray;
  			font-family: 'DM Serif Display', serif;
  			font-size: 15px;
  			transition: all .2s linear;
  		}

  		.water_text a:hover {
  			box-shadow: none;
  		}


  		/*water css end*/



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
  							<h3>Programme Status</h3>
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
  			<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
  			<li class="breadcrumb-item active" aria-current="page">Programme Status</li>
  		</ol>
  	</nav>
  	<!--link part end-->



  	<!--software part start-->
    @foreach ($addprogramme_status_details as $addprogramme_status_detail)

  	<section>
  		<div class="hardware">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-12">
  						<div class="hardware_headeing">
  							<h3>{{ $addprogramme_status_detail->title }}</h3>
  						</div>
  					</div>
  				</div>
  				<div class="row">
  					<div class="col-lg-12">
  						<div class="hardware_text">
  							<p>
  								{{ $addprogramme_status_detail->description }}
  							</p>
                <div class="another_des">
                  {{ $addprogramme_status_detail->another_des }}
                </div>
  						</div>
  					</div>
  				</div>
  				<div class="row">
  					<div class="col-lg-12 text-center pt-4">
  						<img src="{{ asset('uploads/programme_status_img') }}/{{ $addprogramme_status_detail->image }}" alt="" class="img-fluid w-75">
  					</div>
  				</div>
  			</div>
  		</div>
    </section>
    @endforeach
  	<!--software part end-->








@endsection
