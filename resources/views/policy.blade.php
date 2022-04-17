@extends('layouts.frontendabout')

@section('frontend_main')

  <style>
		/*banner css start*/
		.banner_part {
			background-image: url({{ asset('frontend_assets/about') }}/images/regional5.jpg);
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			height: 350px;
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
			padding-top: 180px;
		}

		.banner_text h3 {
			font-family: 'Oswald', sans-serif;
			font-size: 35px;
			font-weight: 600;
			color: #e7e7e7;
			margin-top: 10px;
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

		/*ec member css start*/
		.ec {
			padding-top: 20px;
			padding-bottom: 40px;
		}

		.ec_heading h3 {
			font-family: 'Oswald', sans-serif;
			font-size: 28px;
			color: #212121;
		}

		.ec_heading h3 span {
			color: #008bbf
		}

		.ec_content {
			padding-top: 50px;
		}

		.ec_member {
			box-shadow: 10px 10px 15px gray;
			border-top: 2px solid #008bbf;
			border-left: 2px solid #008bbf;
			border-right: 2px solid gray;
			border-bottom: 2px solid gray;
			text-align: center;
			border-radius: 5px;
			transition: all .3s linear;
		}

		.ec_member:hover {
			box-shadow: 0px 0px 0px white;
			border-right: 2px solid #008bbf;
			border-bottom: 2px solid #008bbf;
		}

		.ec_member:hover .ec_img .ec_img_overlay {
			opacity: 1;
		}

		.ec_img {
			height: 130px;
			width: 120px;
			border-radius: 50%;
			margin: auto;
			margin-top: 20px;
			margin-bottom: 20px;
			overflow: hidden;
			position: relative;
		}

		.ec_img .ec_img_overlay {
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background-color: rgba(0, 0, 0, 0.4);
			opacity: 0;
			transition: all .3s linear;
		}

		.ec_img .ec_img_overlay i {
			line-height: 150px;
			font-size: 25px;
			color: white;
			cursor: pointer;
		}

		.ec_img img {
			height: 130px;
			width: 120px;
			transition: all .2s linear;
		}

		.ec_text {
			background: #c3c3c3;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.ec_text h5 {
			font-family: 'Oswald', sans-serif;
			color: #1e1e1e;
			font-size: 18px;
		}

		.ec_text p {
			font-family: 'Open Sans', sans-serif;
			font-size: 14px;
			color: #272727;
			margin-bottom: 5px;
			margin-top: 3px;
		}

		.ec_text span {
			font-family: 'Exo 2', sans-serif;
			font-size: 16px;
			font-weight: 600;
			color: #0076a2
		}

		/*ec member css end*/

		/*gc css start*/
		.gc{
background: #403A3E;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #BE5869, #403A3E);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #BE5869, #403A3E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

			padding-top: 70px;
			padding-bottom: 50px;
		}
		.gc_heading h3 {
			font-family: 'Oswald', sans-serif;
			font-size: 28px;
			color: white;
		}

		.gc_heading h3 span {
			color: #1e90ff
		}
		.gc_content{
			padding-top: 45px;
		}
		.gc_members{
			padding-bottom: 25px;
		}
		.gc_members h5{
			font-family: 'DM Serif Display', serif;
			font-weight: 600;
			font-size: 18px;
			color: ghostwhite;
		}
		.gc_members p{
			font-family: 'Open Sans', sans-serif;
			font-size: 13px;
			color: #f1f2f6;
			margin-top: 5px;
		}
		/*gc css end*/

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
							<h3>Policy Formulating Structure</h3>
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
			<li class="breadcrumb-item"><a href="{{ url('aboutus') }}">About Us</a></li>
			<li class="breadcrumb-item active" aria-current="page">Policy Formulating Structure</li>
		</ol>
	</nav>
	<!--link part end-->

	<!--ec members part start-->
	<section>
		<div class="ec">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="ec_heading">
							<h3>|| Executive Committee <span>Members</span> of <span>NGO Forum</span></h3>
						</div>
					</div>
				</div>
				<div class="ec_content">
					<div class="row">
            @foreach ($all_policy_infos as $all_policy_info)
						<div class="col-lg-3 mb-5">
							<div class="ec_member">
								<div class="ec_img">
									<img src="{{ asset('uploads/policy_image') }}/{{ $all_policy_info->mamber_image }}" alt="" class="img-fluid">
									<div class="ec_img_overlay">
										<a class="venobox" href="{{ asset('uploads/policy_image') }}/{{ $all_policy_info->mamber_image }}"><i class="fas fa-search-plus"></i></a>
									</div>
								</div>
								<div class="ec_text">
									<h5>{{ $all_policy_info->mamber_name }}</h5>
									@if($all_policy_info->mamber_title == "Advocate, Supreme Court, Bangaldesh")
									    <p style="padding-left: 5px;padding-right: 5px;">{{ $all_policy_info->mamber_title }}</p>
									@else
									    <p>{{ $all_policy_info->mamber_title }}</p>
									@endif
									<span>{{ $all_policy_info->possession }}</span>
								</div>
							</div>
            </div>
            @endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--ec member part end-->

	<!--gc part start-->
	<section>
		<div class="gc">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="gc_heading">
							<h3 style="text-shadow: 5px 5px 15px black">|| General Committee Members of <span>NGO Forum</span></h3>
						</div>
					</div>
				</div>
				<div class="gc_content">
					<div class="row">
            @foreach ($general_info as $general_infos)

						<div class="col-lg-4">
							<div class="gc_members">
								<h5 style="text-shadow: 5px 5px 15px black">{{ $general_infos->general_name }}</h5>
								<p style="text-shadow: 5px 5px 15px black">{{ $general_infos->description }}</p>
							</div>
            </div>
            @endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--gc part end-->

	<!--footer start-->
				</div>
			</div>
		</div>
	</section>
	<!--footer End-->

@endsection
