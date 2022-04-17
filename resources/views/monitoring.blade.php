@extends('layouts.frontendprogarmme')

@section('frontend_main')
<style>
		/*banner css start*/
		.banner_part {
			background-image: url(images/research_banner.jpg);
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			height: 300px;
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
			font-size: 42px;
			font-weight: 600;
			color: #e7e7e7;
			margin-bottom: 10px;
			display: inline-block;
			text-shadow: 10px 10px 15px black;
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
			padding-top: 30px;
			padding-bottom: 40px;
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
			font-size: 15px;
			color: #2d3436;
			text-align: justify;
			margin-bottom: 15px;
		}

		.hardware .hardware_text p span {
			color: #0984e3;
			font-weight: 600;
		}

		/*hardware css end*/

		/*water css start*/
		.water {
			padding-bottom: 60px;
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

		.water_text {
			padding-top: 25px;
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


		/*sanitation css start*/
		.sanitation {
			padding-bottom: 10px;
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
			padding-top: 170px;
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
			font-size: 23px;
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

		.sanitation_text li {
			font-family: 'Kalam', cursive;
			font-weight: 500;
			font-size: 15px;
			margin-bottom: 5px;
		}



		.sanitation_text p span {
			color: #0984e3;
			font-weight: 600;
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
							<h3>Monitoring &amp; Evaluation</h3>
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
			<li class="breadcrumb-item"><a href="software.html">Health & Hygiene Promotion</a></li>
			<li class="breadcrumb-item active" aria-current="page">Monitoring &amp; Evaluation</li>
		</ol>
	</nav>
	<!--link part end-->

	<!--hardware part start-->
	<section>
		<div class="hardware">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="hardware_text">
							<p>
								<span>NGO Forum</span> has a comprehensive M & E set-up with potential personnel for conducting monitoring and evaluation activities as per requirement of the organization. The Forum develops a comprehensive M&E plan for measuring the project process, outputs, objectives and goal and also fulfills the information need of the organization and donor.
							</p>
							<p>
								<span>NGO Forum</span> conducts monitoring to measure process, outputs and outcomes level by using qualitative and quantitative method. For each of the level, the indicators are defined firstly, and then different tools and techniques are developed for monitoring conduction. The monitoring system is designed and administered to keep the work on track, to let management know when things are going wrong or right, to what extend the progress happened and whether activities are conducting according to plan.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--hardware part end-->

	<!--Research start-->
	<section>
		<div class="sanitation">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="sanitation_img">
							<img src="{{ asset('frontend_assets/Programme') }}/images/in-house-training-2-1024x768.jpg" alt="" class="img-fluid w-100" style="height: 350px;">
							<div class="sanitation_img_overlay">
								<a class="venobox" href="images/in-house-training-2-1024x768.jpg"><i class="fas fa-search-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="sanitation_text pt-5">
							<p>Out-set of a project, <span>NGO Forum</span> conducts a detail baseline survey by using quantitative and qualitative method. The baseline design is developed considering the project activities, outputs, outcomes/effects and goal. Through baseline survey, the initial situation of the implementing area of the project is captured which indicate the implementation planners necessary information on where to give emphasis. Baseline survey findings also serve as a basis for measuring outcome of project in different duration.</p>
							<p>
								<span>NGO Forum</span> conducts formative & summative evaluation for each of the project by the external firm/ consultant (s). For each types of evaluation, NGO Forum develops a ToR to draw up sensible proposal to meet the needs of the project evaluation.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Research Support end-->




	<section>
		<div class="sanitation">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="sanitation_text pt-5">
							<h5><span>Formative evaluation</span> is conducted in considering the objectives</h5>
							<ul style="list-style: square; padding-left: 32px;" class="mb-3">
								<li>The capacity of the project to achieve what it set-out to do</li>
								<li>It address management and implementation in terms of relevance, effectiveness, efficiency and potential sustainability and</li>
								<li>It assess the strength of the implementing institution in terms of its ability to sustain the project.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<section>
		<div class="sanitation">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="sanitation_text pt-2">
							<h5><span>Summative evaluation</span> is conducted in considering the objectives</h5>
							<ul style="list-style: square; padding-left: 32px;" class="mb-3">
								<li>To assess whether or not the project achieved its goal</li>
								<li>To assess changes (positive & negative) in the lives of the targeted beneficiaries</li>
								<li>It assess the strength of the implementing institution in terms of its ability to sustain the project.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section>
		<div class="sanitation">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="sanitation_text pt-2">
							<p>After developing ToR, the organization requests for EOI from the eligible firm/ consultant(s) to submit the technical and financial proposals. Proposal evaluation team reviews the entire submitted proposal and prepare a proposal evaluation report. Then according to organizational procurement policy, the eligible firm/ consultant(s) is assigned to carry out the assignment.</p>
							<p>
								As per project proposal and donor agreement, the organization develops different types of reports and according to time frame the report is sent to the donor and the stakeholders. In the interim period, monitoring findings are summarized in a written report and it is shared with donor. Similarly the full written evaluation report with executive summary or a special version, focused on donor concerns and interests is shared with donor. These sorts of reports are also shared with management team, staff and beneficiaries level in different ways, sometimes in written form, sometimes verbally.
							</p>
							<p class="mb-5">
								<span>NGO Forum</span> develops a number of print materials such as Annual Report, Organization Brochure, Newsletter, Bulletin, Information Pocket Book, Success Story Book and so on with a view to disseminating WatSan and organizational information effectively among a wider range of stakeholders
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
