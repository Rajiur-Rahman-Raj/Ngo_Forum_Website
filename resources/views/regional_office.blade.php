@extends('layouts.frontendmaster')

@section('frontend_main')
  <style>
  		/*Banner css start*/
  		.banner_part {
  			background-image: url({{ asset('frontend_assets') }}/images/regional2.jpg);
  			background-position: bottom left;
  			background-size: cover;
  			background-attachment: fixed;
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
			padding-top: 180px;
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


		/*Training Center CSS Start*/
		/*
		.training_center {
			padding-top: 30px;
			padding-bottom: 60px;
		}

		.training_center h3 {
			font-family: 'Oswald', sans-serif;
			font-weight: 500;
			font-size: 30px;
			color: #303952;
			margin-top: 10px;
			margin-bottom: 40px;
		}

		.center_address {
			box-shadow: 10px 10px 15px gray;
			transition: all .3s linear;
		}

		.center_address:hover {
			box-shadow: 0px 0px 0px white;
		}

		.center_address i {
			font-size: 40px;
			margin-top: 25px;
			margin-bottom: 12px;
		}

		.center_address h4 {
			font-family: 'Lato', sans-serif;
			font-weight: 800;
			font-size: 20px;
			color: #34495e;
			margin-top: 10px;
			margin-bottom: 40px;
		}

		.center_address span {
			color: #303952;
			font-family: 'Lato', sans-serif;
			font-weight: 700;
			font-size: 15px;
			display: block;
		}

		.center_address p {
			font-family: 'Open Sans', sans-serif;
			font-size: 13px;
			color: #515b71;
		}

		.barisal {
			border-top: 2px solid #16a085;
			border-left: 2px solid #16a085;
			height: 150px;
			overflow: hidden;
		}

		.barisal i {
			color: #16a085;
		}

		.cumilla {
			border-top: 2px solid #B53471;
			border-left: 2px solid #B53471;
			height: 170px;
		}

		.cumilla i {
			color: #B53471;
		}

		.bogura {
			border-top: 2px solid #f0932b;
			border-left: 2px solid #f0932b;
			height: 170px;
			overflow: hidden;
		}

		.bogura i {
			color: #f0932b;
		}

		.chattagram {
			border-top: 2px solid #be2edd;
			border-left: 2px solid #be2edd;
			height: 170px;
			overflow: hidden;
		}

		.chattagram i {
			color: #be2edd;
		}

		.dinajpur {
			border-top: 2px solid #A3CB38;
			border-left: 2px solid #A3CB38;
			height: 155px;
			overflow: hidden;
		}

		.dinajpur i {
			color: #A3CB38;
		}

		.faridpur {
			border-top: 2px solid #1289A7;
			border-left: 2px solid #1289A7;
			height: 155px;
			overflow: hidden;
		}

		.faridpur i {
			color: #1289A7;
		}

		.tangail {
			border-top: 2px solid #82589F;
			border-left: 2px solid #82589F;
			height: 155px;
		}

		.tangail i {
			color: #82589F;
		}

		.jashore {
			border-top: 2px solid #FD7272;
			border-left: 2px solid #FD7272;
			height: 160px;
		}

		.jashore i {
			color: #FD7272;
		}

		.khulna {
			border-top: 2px solid #58B19F;
			border-left: 2px solid #58B19F;
			height: 160px;
		}

		.khulna i {
			color: #58B19F;
		}

		.mymensingh {
			border-top: 2px solid #7158e2;
			border-left: 2px solid #7158e2;
			height: 170px;
		}

		.mymensingh i {
			color: #7158e2;
		}

		.rangpur {
			border-top: 2px solid #3dc1d3;
			border-left: 2px solid #3dc1d3;
			height: 155px;
		}

		.rangpur i {
			color: #3dc1d3;
		}

		.dhaka {
			border-top: 2px solid #009432;
			border-left: 2px solid #009432;
			height: 170px;
			overflow: hidden
		}

		.dhaka i {
			color: #009432
		}

		.rajshahi {
			border-top: 2px solid #ffd32a;
			border-left: 2px solid #ffd32a;
			height: 170px;
		}

		.rajshahi i {
			color: #ffd32a
		}

		.sylhet {
			border-top: 2px solid #05c46b;
			border-left: 2px solid #05c46b;
			height: 155px;
		}

		.sylhet i {
			color: #05c46b
		}
*/

		/*Training Center CSS End*/

		.map_img img {
			border-radius: 20px;
			overflow: hidden;
			height: 450px;
		}


		/*test part*/
		
		.region{
			margin-bottom: 60px;
			margin-top: 20px;
		}

		.region .heading_row {
			background: #C33764;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #1D2671, #C33764);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #1D2671, #C33764);
			border-radius: 10px 10px 0px 0px;
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}

		.region .heading {
			padding-top: 15px;
			padding-bottom: 15px;
		}

		.region .heading h3 {
			font-family: 'Oswald', sans-serif;
			font-weight: 400;
			font-size: 20px;
			color: white;
		}

		.barisal {
			padding-top: 12px;
			padding-bottom: 15px;
			background: rgba(248, 194, 145, 0.4);
			border-bottom: 1px solid #16a085;
		}
		
		.barisal_person{
			padding-left: 18px;
		}
		.barisal_person h5{
		    font-family: 'Oswald', sans-serif;
		}

		.barisal h5 {
			font-family: 'Berkshire Swash', cursive;
			font-weight: 400;
			font-size: 18px;
			text-shadow: 10px 10px 15px gray;
		}
		
		.barisal h5 span{
			font-family: 'Grenze', serif;
			font-size: 20px;
			font-weight: 400;
			text-shadow: 10px 10px 15px transparent;
		}

		.barisal p {
			font-family: 'Open Sans Condensed', sans-serif;
			font-size: 16px;
			font-weight: 700;
			text-shadow: 10px 10px 15px darkgray;
			
		}

		.barisal ul li {
			font-family: 'Open Sans Condensed', sans-serif;
			font-size: 16px;
			font-weight: 700;
			text-shadow: 10px 10px 15px gray;
		}
		.barisal i{
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
  							<h1>Address of Regional Offices</h1>
  							<p><span><a href="index.html">Home</a> </span>|<span> <a href="regional_office.html">Regional Offices</a></span></p>
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
  						<p><span><a href="{{ url('/') }}">Home</a> </span><span> | </span> <a href="regional_office.html">Address of Regional Offices</a></p>
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
  					<div class="col-lg-1">
  						<div class="heading">
  							<h3>Region</h3>
  						</div>
  					</div>
  					<div class="col">
  						<div class="heading">
  							<h3>&nbsp;&nbsp;&nbsp;Contact Person</h3>
  						</div>
  					</div>
  					<div class="col-lg-3">
  						<div class="heading">
  							<h3>Street Address</h3>
  						</div>
  					</div>
  					<div class="col">
  						<div class="heading">
  							<h3>Phone</h3>
  						</div>
  					</div>
  					<div class="col">
  						<div class="heading">
  							<h3>Email</h3>
  						</div>
  					</div>
  					<div class="col">
  						<div class="heading">
  							<h3>District Covergae</h3>
  						</div>
  					</div>
  				</div>
          @foreach ($regionaloffice_infos as $regionaloffice_info)

  				<div class="row barisal">
  					<div class="col-lg-1">
  						<div class="barisal_region wow fadeInRight" data-wow-duration="1.6s">
  							<h5>{{ $regionaloffice_info->region }}</h5>
  						</div>
  					</div>
  					<div class="col-lg-2">
  						<div class="barisal_person wow fadeInRight">
  							<h5 style="font-family: 'Grenze', serif;">{{ $regionaloffice_info->person }}</h5>
  						</div>
  					</div>
  					<div class="col-lg-3">
  						<div class="barisal_address wow fadeInRight" data-wow-duration="1.6s">
  							<p>{{ $regionaloffice_info->street_address }}</p>
  						</div>
  					</div>
  					<div class="col-lg-2">
  						<div class="barisal_phone wow fadeInRight" data-wow-duration="1.6s">
  							<ul>
  								<li><i class="fas fa-mobile-alt"></i> &nbsp; {{ $regionaloffice_info->phone }}</li>
  							</ul>
  						</div>
  					</div>
  					<div class="col-lg-2">
  						<div class="barisal_email wow fadeInRight" data-wow-duration="1.6s">
  							<p><i class="far fa-envelope"></i> {{ $regionaloffice_info->email }}</p>
  						</div>
  					</div>
  					<div class="col-lg-2">
  						<div class="district wow fadeInRight" data-wow-duration="1.6s">
  							<p>{{ $regionaloffice_info->district_covergae }}</p>
  						</div>
  					</div>
          </div>
          @endforeach

  			</div>
  		</div>
  	</section>


@endsection
