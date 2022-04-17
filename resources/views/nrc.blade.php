@extends('layouts.frontendprogarmme')

@section('frontend_main')
<style>
		/*banner css start*/
		.banner_part {
			background-image: url({{ asset('frontend_assets/Programme') }}/images/dhaka-city.jpg);
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			height: 440px;
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
			font-size: 42px;
			font-weight: 600;
			color: #e7e7e7;
			margin-bottom: 10px;
			display: inline-block;
			text-shadow: 10px 10px 15px black;
			padding-bottom: 10px;
		}

		.banner_text p {
			font-family: 'Lato', sans-serif;
			font-size: 16px;
			font-weight: 500;
			color: ghostwhite;
		}

		.banner_text p span {
			color: #00AEEF;
		}

		/*banner css end*/

		/*hardware css start*/
		.hardware {
			padding-top: 0px;
			padding-bottom: 30px;
		}

		.hardware .hardware_headeing h3 {
			font-family: 'Oswald', sans-serif;
			font-size: 32px;
			font-weight: 600;
			color: #2d3436;
			margin-bottom: 10px;
		}

		.hardware .hardware_headeing h3 span {
			color: #0984e3;
		}

		.hardware .hardware_text p {
			font-family: 'Rubik', sans-serif;
			font-size: 14px;
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


		/*sanitation css start*/
		.sanitation {
			padding-bottom: 80px;
		}

		.sanitation_img {
			position: relative;
		}

		.sanitation_img_overlay {
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

		.sanitation_img_overlay i {
			color: ghostwhite;
			font-size: 50px;
		}

		.sanitation_img:hover .sanitation_img_overlay {
			opacity: 1;
		}

		.sanitation_text {
			padding-top: 5px;
		}

		.sanitation_text h5 {
			font-family: 'Oswald', sans-serif;
			font-size: 25px;
			font-weight: 700;
			color: #2d3436;
			margin-bottom: 20px;
		}

		.sanitation_text h5 span {
			color: #0984e3
		}

		.sanitation_text p {
			font-family: 'Rubik', sans-serif;
			font-size: 14px;
			color: #2d3436;
			text-align: justify;
			margin-bottom: 30px;
		}

		.sanitation_text a {
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

		.sanitation_text a:hover {
			box-shadow: none;
		}

		/*water css end*/

	</style>

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
										<a class="dropdown-item" href="{{ url('humanitarian') }}">Humanitarian & Emergency Support</a>
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
									MIS Portal
								</a>
								<div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ url('program_status') }}">Programme Status</a>
									<a class="dropdown-item" href="{{ url('at_a_glances') }}">At a Glance</a>
									<a class="dropdown-item" href="{{ url('login') }}">Log In</a>
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
							<h3>National Resource Centre (NRC)</h3>
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
			<li class="breadcrumb-item"><a href="../index.html">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Programme</a></li>
			<li class="breadcrumb-item"><a href="advocacy.html">Advocacy &amp; Information</a></li>
			<li class="breadcrumb-item active" aria-current="page">NRC</li>
		</ol>
	</nav>
	<!--link part end-->

	<!--software part start-->
	<section>
		<div class="hardware pt-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="hardware_text">
							<p>
								The concept for the NRC, under the umbrella of NGO Forum was developed in January 2001, and it commenced full operation in mid 2002. Since that time it has been providing multi dimensional support services (information database, research, documentation, advisory and referral services, dissemination of knowledge & technology) to various stakeholders, including government agencies, national and international NGOs, academic institutions, donor bodies, international agencies, research foundations, local and foreign consultants, expatriates and allied institutions engaged in WASH activities.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--software part end-->

	<!--promoting part start-->
	<section>
		<div class="water">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="water_img text-center pt-3">
							<img src="{{ asset('frontend_assets/Programme') }}/images/nrc%20logo.png" alt="" class="img-fluid" style="width: 200px">
						</div>
					</div>
					<div class="col-lg-7">
						<div class="water_text">
							<h5 style="font-size: 32px;"><span>Mission :</span></h5>
							<p>
								<b style="margin-bottom: 10px; display: block">|| Enhancing the knowledge base and capabilities</b>
								<b style="margin-bottom: 10px; display: block">|| Act as a national archive and media centre in Public Health sector.</b>
								<b style="margin-bottom: 10px; display: block">|| Managing information & achieving equitable access to information.</b>
								<b style="margin-bottom: 10px; display: block">|| Enhancing and protecting quality of life as a centre for disseminating data and information.</b>

							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--pro,oting part end-->


	<section>
		<div class="hardware">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="hardware_headeing">
							<h3>Support<span> ICT Facilities</span> :</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!--nrc start-->
	<section>
		<div class="sanitation">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="sanitation_img text-center">
							<img src="{{ asset('frontend_assets/Programme') }}/images/MIS_image_for_wiki.png" alt="" class="img-fluid w-75" style="height: 400px;">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="sanitation_text">
							<h5>Management Information System <span>( MIS )</span></h5>
							<p>
								In order to support the project management to undertake appropriate decisions and preparing report on the overall project progress in a timely manner, the Management Information System (MIS) has been developed and maintained which is supporting through ensuring the smooth flow of information and keeping track of current activities and information. It is also generating issue focused information on different programmatic aspects enabling the programme management to formulation of relevant operational reports and following some activities perform in regular basis.
							</p>
							<ol style="list-style: square; padding-left: 20px; font-family: 'Oswald', sans-serif;; font-size: 17px; font-weight: 300">
								<li><b>Web / Mail / & MIS Server Administration</b></li>
								<li><b>Organizational Website & Social Media page updating and maintenance</b></li>
								<li><b>Organizational various type of Data and Information digitally archived</b></li>
								<li><b>Information Collection Tools Development</b></li>
								<li><b>Periodical Report Generation</b></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--nrc end-->


	<section>
		<div class="sanitation">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="sanitation_img">
							<img src="{{ asset('frontend_assets/Programme') }}/images/Design-it-min.png" alt="" class="img-fluid w-100" style="height: 300px;">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="sanitation_text pt-5">
							<h5>System<span> Management support</span></h5>
							<ol style="list-style: square; padding-left: 20px; font-family: 'Oswald', sans-serif;; font-size: 17px; font-weight: 300">
								<li><b>Maintaining Office Networking</b></li>
								<li><b>Maintaining Internet connectivity</b></li>
								<li><b>Hardware and Software related support</b></li>
								<li><b>Procurement of IT Equipment</b></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!--software part start-->
	<!--<section>-->
	<!--	<div class="hardware">-->
	<!--		<div class="container">-->
	<!--			<div class="row">-->
	<!--				<div class="col-lg-12">-->
	<!--					<div class="hardware_headeing">-->
	<!--						<h3>Major<span> Initiative</span> :</h3>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</section>-->
	<!--software part end-->

	<!--Library start-->
	<section>
		<div class="sanitation mb-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 offset-1">
						<div class="sanitation_text">
							<h5><span>Library</span></h5>
							<ol style="list-style: square; padding-left: 20px; font-family: 'Oswald', sans-serif;; font-size: 17px; font-weight: 300">
								<li><b style="margin-bottom: 10px;">A collection of more than 4,500 WatSan, Environment and Health related books, reports and documents</b></li>
								<li><b style="margin-bottom: 10px;">A spacious room for reading</b></li>
								<li><b style="margin-bottom: 10px;">Photo Gallery</b></li>
								<li><b style="margin-bottom: 10px;">News Gallery</b></li>
								<li><b style="margin-bottom: 10px;">Online Library Information System (LIS)</b></li>
							</ol>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="sanitation_img text-center">
							<img src="{{ asset('frontend_assets/Programme') }}/images/library.jpg" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Library end-->


	<!--News start-->
<!--
	<section>
		<div class="sanitation">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="sanitation_img text-center">
							<img src="images/news_gallery.png" alt="" class="img-fluid w-75">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="sanitation_text">
							<h5>News<span> Gallery</span></h5>
							<p>
								<b style="margin-bottom: 10px; display: block">News Gallery has been established with the objective to preserve current national and international newspapers, magazines, journals, newsletters, etc for the library users.</b>
								<b style="margin-bottom: 10px; display: block">The library users always get free access to the News Gallery and can take the opportunity to look at the collections.</b>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
-->
	<!--News end-->

	<!--Photo start-->
<!--
	<section>
		<div class="sanitation">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 offset-1">
						<div class="sanitation_text">
							<h5>Photo <span>Gallery</span></h5>
							<p>
								<b style="margin-bottom: 10px; display: block">Contains WatSan and hygiene related photographs and slides. Providing the users with these items that can be used for various purposes to enhance the effective implementation of their programmatic initiatives</b>
							</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="sanitation_img text-center">
							<img src="images/photo_gallery.jpg" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
-->
	<!--Photo end-->






	<!--

	<section>
		<div class="hardware">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="hardware_headeing">
							<h3>Networking with the <span>Sector Partners</span></h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="hardware_text pt-4">
							<p>
								NRC has established links with other organizations through creating alliances and networks. It maintains a strong networking relationship with a number of agencies around the world engaged in WatSan, environment & Public Health issues. NRC continued its role representing the organization in the UNICEF-led WaSH Cluster initiative maintaining partnership and communication channels among UN-agencies, international and national organizations for enhancing the role of the UN initiative.
							</p>
						</div>
					</div>
					<div class="col-lg-4 text-center">
						<img src="images/nrc_partner.JPG" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>

-->


@endsection
