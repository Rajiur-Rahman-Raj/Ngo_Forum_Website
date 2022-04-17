@extends('layouts.frontendprogarmme')

@section('frontend_main')
	<style>
		/*banner css start*/
		.banner_part {
			background-image: url({{ asset('frontend_assets/Programme') }}/images/banani-2978376_960_720.jpg);
			background-position: top left;
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

		/*water css start*/
		.water {
			padding-top: 30px;
			padding-bottom: 80px;
		}

		.water .water_headeing h3 {
			font-family: 'Oswald', sans-serif;
			font-size: 32px;
			font-weight: 600;
			color: #2d3436;
			margin-bottom: 20px;
		}

		.water .water_headeing h3 span {
			color: #0984e3;
		}

		.water .water_text p {
			font-family: 'Rubik', sans-serif;
			font-size: 16px;
			color: #2d3436;
			text-align: justify;
		}

		/*water css end*/

		/*process1 css start*/
		.process1 {
			padding-bottom: 60px;
		}

		.process1_text {
			padding-top: 0px;
		}

		.process1_text h3 {
			font-family: 'Oswald', sans-serif;
			font-size: 25px;
			font-weight: 700;
			color: #2d3436;
			margin-bottom: 20px;
		}

		.process1_text h3 span {
			color: #0984e3;
		}

		.process1_text p {
			font-family: 'Rubik', sans-serif;
			font-size: 15px;
			color: #2d3436;
			text-align: justify;
		}

		/*process1 css end*/


	</style>
</head>

<body>

	<!--Header Part Start-->
	<section id="header_part">
		<div class="header wow bounceInDown" data-wow-duration="1.6s">
			<div class="container">
				<nav class="navbar navbar-expand-lg p-0">
					<a class="navbar-brand" href="{{ url('/') }}">
						<img src="{{ asset('frontend_assets') }}/images/NGOF_Logo_white.png" alt="NGO Forum" class="img-fluid pt-2">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#about_part" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Who We Are
								</a>
								<div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ url('aboutus') }}">About Us</a>
									<a class="dropdown-item" href="{{ url('policy') }}">Policy Formulating Structure</a>
									<a class="dropdown-item" href="{{ url('network_affiliation') }}">Network Affiliation</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Programme
								</a>

									@php
											$programme_categories = App\programme_categorie::all();
									@endphp
									<div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
										@foreach ($programme_categories as $programme_categorie)
											<a class="dropdown-item" href="{{ url('category/wise/programme') }}/{{ $programme_categorie->id }}">{{ $programme_categorie->category_name }}</a>
										@endforeach
<!--
									<a class="dropdown-item" href="Programme/resources.html">Resource Management and Mobilization</a>
									<a class="dropdown-item" href="About/programe_implementation_approach.html">Programme Implementation Approach</a>
-->
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Services
								</a>
								<div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ url('training') }}"> Training Service &amp; Facilities</a>
									<a class="dropdown-item" href="{{ url('wqtl') }}">Water Quality Testing Laboratory</a>
									<a class="dropdown-item" href="{{ url('iec') }}">IEC / BCC Material Development</a>
								</div>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Projects
								</a>
								<div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ url('existing_projects') }}">Existing Projects</a>
									<a class="dropdown-item" href="{{ url('prev_project') }}">Implemented Projects</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Resources
								</a>
								@php
										$resources_categories = App\resourcesCategory::all();
								@endphp
								<div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
									
										<a class="dropdown-item" href="{{ url('resources')}}">Publications</a>
									
									<a class="dropdown-item" href="{{ url('photo') }}">Photo Galleries</a>
									<a class="dropdown-item" href="#">Videos</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									News &amp; Media
								</a>
								@php
										$NewsCategories = App\NewsCategory::all();
								@endphp
								<div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
									@foreach ($NewsCategories as $NewsCategory)
										<a class="dropdown-item" href="{{ url('category/wise/news') }}/{{ $NewsCategory->id }}">{{ $NewsCategory->category_name }}</a>
									@endforeach
									{{-- <a class="dropdown-item" href="{{ url('pressmedia') }}">Press &amp; Media</a> --}}

								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Get Involved
								</a>
								<div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ url('contact') }}">Contact</a>
									<a class="dropdown-item" href="{{ url('contact') }}">Central Office</a>
									<a class="dropdown-item" href="{{ url('departments') }}">Cell/Department</a>
									<a class="dropdown-item" href="{{ url('regional_office') }}">Regional Offices</a>
									<a class="dropdown-item" href="{{ url('project_office') }}">Project Offices</a>
									<a class="dropdown-item" href="{{ url('career') }}">Career</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Login
								</a>
								<div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
									<!--<a class="dropdown-item" href="{{ url('program_status') }}">Programme Status</a>-->
									<!--<a class="dropdown-item" href="{{ url('at_a_glances') }}">At a Glance</a>-->
									<a class="dropdown-item" href="{{ url('login') }}">User Login</a></a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</section>
	<!--Header Part End-->

	<!--banner part start-->
	<section>
		<div class="banner_part">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="banner_text">
							<h3>{{ $single_category_programme_details->programme_title }}</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--banner part end-->

	<!--link Part start-->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">{{ App\programme_categorie::find($need_category_name)->category_name }}</li>
			<li class="breadcrumb-item active" aria-current="page">{{ $single_category_programme_details->programme_title }}</li>
		</ol>
	</nav>
	<!--link part end-->


	<!--process1 start-->
	<section>
		<div class="process1">
			<div class="container">
				<div class="row pt-5">
					<div class="col-lg-6">
						<div class="process1_img pt-3">
							<img src="{{ asset('uploads/all_programme_image')}}/{{ $single_category_programme_details->programme_image }}" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="process1_text">
							<p>{{ $single_category_programme_details->image_description }}</p>
						</div>
					</div>
					<div class="col-lg-12 pt-5">
					    {!! $single_category_programme_details->ck_description !!}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--process1 end-->

@section('data-table')
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('#table_id').DataTable();
		});
	</script>
<!--	<script src="js/custom.js"></script>-->
	<script src="https://kit.fontawesome.com/c218529370.js"></script>
@endsection

@endsection
