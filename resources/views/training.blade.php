@extends('layouts.frontendmaster')

@section('frontend_main')

  <style>
		/*Banner css start*/
		.banner_part {
			background-image: url({{ asset('frontend_assets/Training') }}/images/PANO_20190918_173359.jpg);
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
			background: rgba(0, 0, 0, 0.4);
			z-index: -1;
		}

		.banner_part .banner_text {
			padding-top: 180px;
			text-align: center;
		}

		.banner_part .banner_text h1 {
			font-family: 'Oswald', sans-serif;
			font-weight: 500;
			color: #e7e7e7;
			font-size: 40px;
			margin-bottom: 5px;
			letter-spacing: 2px;
			text-shadow: 10px 10px 15px black;
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
			text-shadow: 10px 10px 15px black
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

		/*Training Part start*/
		.training_text h3 {
			font-family: 'Lato', sans-serif;
			font-weight: 800;
			font-size: 25px;
			color: #303952;
			margin-top: 20px;
			margin-bottom: 15px;
		}

		.training_text p {
			font-family: 'Fira Sans', sans-serif;
			font-size: 14px;
			color: #1e1e1e;
			text-align: justify;
			margin-bottom: 15px;
			transition: all .2s linear;
		}

		.training_text p:hover {
			text-shadow: 5px 5px 15px black;
		}

		.training_text p span {
			font-family: 'Lato', sans-serif;
			font-size: 16px;
			color: #427ad4;
			text-align: justify;
			margin-bottom: 15px;
			font-style: italic;
			font-weight: 600;
		}

		.training_contact h3 {
			font-family: 'Lato', sans-serif;
			font-weight: 600;
			font-size: 25px;
			color: #303952;
			margin: 10px 0px;
		}

		.training_contact h5 {
			font-family: 'Lato', sans-serif;
			font-weight: 600;
			font-size: 20px;
			color: #427ad4;
			margin-top: 20px;
			margin-bottom: 15px;
			margin-top: 0px;
		}

		.training_contact p {
			font-family: 'Open Sans', sans-serif;
			font-size: 15px;
			color: #1e1e1e;
			text-align: justify;
			font-weight: 600;
		}

		.training_map h3 {
			font-family: 'Lato', sans-serif;
			font-weight: 600;
			font-size: 25px;
			color: #303952;
			margin: 6px 0px;
		}
		
        .training_rates{
            box-shadow: 10px 10px 15px gray
        }
		.training_rates h3 {
			font-family: 'Oswald', sans-serif;
			font-weight: 700;
			font-size: 22px;
			color: #303952;
		}

		.training_rates a {
			display: inline-block;
			background-color: #035c45;
			color: white;
			font-family: 'Lato', sans-serif;
			font-weight: 600;
			font-size: 18px;
			padding: 10px 15px;
			border-radius: 5px;
			box-shadow: 10px 10px 15px gray;
			transition: all .3s linear;
		}

		.training_rates a:hover {
			box-shadow: 0px 0px 0px white;
		}

		/*Training Part end*/

		/*Training Center CSS Start*/
		.training_center {
			padding-top: 60px;
			padding-bottom: 60px;
		}

		.training_center h3 {
			font-family: 'Oswald', sans-serif;
			font-weight: 500;
			font-size: 26px;
			color: #303952;
		}

		/*Training Center CSS End*/


		.card-header h3,h5 {
			font-family: 'Oswald', sans-serif;
			font-size: 20px;
		}

		.card-body h5 {
			font-family: 'Oswald', sans-serif;
			font-size: 18px;
		}

		.card-body p {
			font-family: 'Open Sans', sans-serif;
			font-size: 13px;
		}



        .training_map{
            box-shadow: 10px 10px 15px gray
        }
		.devcom_contact {
			box-shadow: 10px 10px 15px gray
		}

		.devcom_contact .card-header {
			background: #2C3E50;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #4CA1AF, #2C3E50);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #4CA1AF, #2C3E50);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			overflow: hidden;
		}

		.devcom_contact h4 {
			font-family: 'Oswald', sans-serif;
			font-size: 22px;
			color: white
		}

		.devcom_contact h4 i {
			color: white
		}

		.devcom_contact h5 {
			font-family: 'Oswald', sans-serif;
			margin-bottom: 10px;
			padding-left: 20px;
		}

		.devcom_contact h5 i {
			margin-right: 10px;
		}

		.devcom_contact p {
			font-family: 'Oswald', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding-left: 20px;
		}

		.devcom_contact p i {
			margin-right: 5px;
		}

		/*test part*/

		.region {
			margin-bottom: 60px;
		}

		.region .heading_row {
			background: #c0392b;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #8e44ad, #c0392b);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #8e44ad, #c0392b);
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

		.barisal h5 {
			font-family: 'Berkshire Swash', cursive;
			font-weight: 400;
			font-size: 18px;
			text-shadow: 10px 10px 15px gray;
		}

		.barisal h5 span {
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
							<h1>Training Service <span>&amp;</span> Facilities</h1>
							<p><span><a href="{{ url('/') }}">Home</a> </span>|<span> <a href="#">Facilities with rates</a></span></p>
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
						<p><span><a href="{{ url('/') }}">Home</a> </span><span> | </span> <a href="#">Training Service &amp; Facilities </a></p>
					</div>
					<!--<div class="col-lg-4 text-right">-->
					<!--	<div class="header_icon">-->
					<!--		<span>Important links : </span>-->
					<!--		<a href="#"><i class="fab fa-facebook-f"></i></a>-->
					<!--		<a href="https://www.youtube.com/channel/UCe1YOUKvOPf6JnwG6bvjKiA" target="_blank"><i class="fab fa-youtube youtube"></i></a>-->
					<!--	</div>-->
					<!--</div>-->
				</div>
			</div>
		</div>
	</section>
	<!--link part end-->


	<!--Training part start-->
	<section>
		<div class="training_part">
			<div class="container">
				<div class="row">
          @foreach ($training_infos as $training_info)
					<div class="col-lg-8">
						<div class="training_description">
							<img src="{{ asset('uploads/training_image') }}/{{ $training_info->training_image }}" alt="not found" class="img-fluid w-100" style="height: 400px">
							<div class="training_text">
								<h3>{{ $training_info->title }}</h3>
								<p>{!! $training_info->description !!}</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="row mb-4">
							<div class="col-lg-12">
								<div class="card devcom_contact">
									<div class="card-header">
										<h4 class="text-center"> <i class="far fa-address-card" style="font-size: 22px;margin-right: 5px"></i> Contact Information</h4>
									</div>
									<div class="card-body pb-4" style="background: rgb(104, 109, 224, .2)">
										<h5><i class="fas fa-user-tie"></i> {{ $training_info->name }}</h5>
										<p class="mb-3">{{ $training_info->designation }}</p>
										<p>&nbsp;<i class="fas fa-mobile-alt"></i> Mobile :{{ $training_info->phone }}</p>
										<p><i class="far fa-envelope"></i> E-mail :{{ $training_info->email }}</p>
									</div>
								</div>
							</div>
						</div>
            <div class="row">
							<div class="col-lg-12">
								<div class="card mt-4 mb-5 training_map">
									<div class="card-header text-center text-white" style="background: #2C3E50; background: -webkit-linear-gradient(to right, #FD746C, #2C3E50); background: linear-gradient(to right, #FD746C, #2C3E50);
">
										<h5><i class="fas fa-map-marker-alt"></i> Location</h5>
									</div>
									<div class="card-body p-2" style="background: rgb(253, 116, 108,.2)">
										<iframe src="{{ $training_info->location }}" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
          @endforeach
						<div class="row">
							<div class="col-lg-12">
								<div class="card training_rates">
									<div class="card-header text-center" style="background: #00bf8f; background: -webkit-linear-gradient(to right, #001510, #00bf8f); background: linear-gradient(to right, #001510, #00bf8f);">
										<h3 class="text-white"><i class="far fa-edit"></i> Visit for More</h3>
									</div>
									<div class="card-body text-center" style="background: rgb(0, 191, 143,.3)">
										<a href="{{ url('training/rate') }}">Facilities with Charges</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Training part end-->


	<!--Training Center part start-->
	<section>
		<div class="training_center">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3 style="text-shadow:10px 10px 15px gray"> <i class="fas fa-map-marker-alt" style="color: #427AD4"></i> Address of Training Centers :</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Training center part end-->




	<section>
		<div class="region">
			<div class="container">
				<div class="row heading_row">
					<div class="col-lg-2">
						<div class="heading">
							<h3>Region</h3>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="heading">
							<h3>Contact Person</h3>
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
							<h3>Email &amp; Fax</h3>
						</div>
					</div>
				</div>
        @foreach ($center_infos as $center_info)

				<div class="row barisal">
					<div class="col-lg-2">
						<div class="barisal_region wow fadeInRight" data-wow-duration="1.6s">
							<h5>{{ $center_info->region }}</h5>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="barisal_person wow fadeInRight" data-wow-duration="1.6s">
							<h5><span>{{ $center_info->person }}</span></h5>
							@if($center_info->designation != null)
							<p>({{ $center_info->designation }})</p>
							@endif
						</div>
					</div>
					<div class="col-lg-3">
						<div class="barisal_address wow fadeInRight" data-wow-duration="1.6s">
							<p>{{ $center_info->address }}</p>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="barisal_phone wow fadeInRight" data-wow-duration="1.6s">
							<ul>
								<li><i class="fas fa-phone-volume"></i> Tel: {{ $center_info->tel_phone }}</li>
								<li><i class="fas fa-mobile-alt"></i>&nbsp; Mob: {{ $center_info->number }}</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="barisal_email wow fadeInRight" data-wow-duration="1.6s">
							<p><i class="far fa-envelope"></i> {{ $center_info->email }}</p>
							@if($center_info->fax != null)
							<p><i class="fas fa-fax"></i> {{ $center_info->fax }} </p>
							@endif
						</div>
					</div>
				</div>
      @endforeach

			</div>
		</div>
	</section>


@endsection
