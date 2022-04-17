@extends('layouts.frontendprogarmme')

@section('frontend_main')
  <!--Header Part Start-->
	<style>
	ul {
    list-style: disc;
    padding-left: 30px;
}
		/*banner css start*/
		.banner_part {
			background-image: url({{asset('frontend_assets/Programme')}}/images/humanitarian_img_1.jpg);
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
			padding-bottom: 30px;
		}

		.hardware .hardware_headeing h3 {
			font-family: 'Oswald', sans-serif;
			font-size: 32px;
			font-weight: 600;
			color: #2d3436;
			margin-bottom: 0px;
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
			text-align: center;
		}

		.water_img_overlay i {
			color: ghostwhite;
			font-size: 28px;
			margin-top: 30px;
		}

		.water_img:hover .water_img_overlay {
			opacity: 1;
		}

		.water_text {
			padding-top: 25px;
		}

		.water_text h5 {
			font-family: 'Oswald', sans-serif;
			font-size: 15px;
			font-weight: 700;
			color: #2d3436;
			margin-bottom: 25px;
		}

		.water_text h5 span {
			color: #0984e3
		}

		.water_text p {
			font-family: 'Rubik', sans-serif;
			font-size: 14px;
			color: #2d3436;
			margin-bottom: 30px;
		}

		.water_text a {
			color: #1e1e1e;
			font-family: 'Rubik', sans-serif;
			font-size: 14px;
			transition: all .2s linear;
			margin-bottom: 25px;
			text-shadow: none;
		}

		.water_text a:hover {
			box-shadow: none;
		}

		.water_text a:hover::before{
		    width: 60px;
		}

	</style>
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
									@foreach ($resources_categories as $resourcesCategory)
										<a class="dropdown-item" href="{{ url('category_wise_resources') }}/{{ $resourcesCategory->id }}">{{ $resourcesCategory->category_name }}</a>
									@endforeach
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
									<a class="dropdown-item" href="{{ url('login') }}">MIS In</a>
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
								<h3>Humanitarian & Emergency Support</h3>
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
				<li class="breadcrumb-item active" aria-current="page">Humanitarian & Emergency Support</li>
			</ol>
		</nav>
		<!--link part end-->


		<!--hardware part start-->
		<section>
			<div class="hardware">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="hardware_headeing">
								<h3><span>Humanitarian </span>& Emergency Support</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="hardware_text">
								<p class="pt-4">
									{{ $human_infos->description }}
								</p>
							</div>
						</div>
						<div class="col-lg-6 text-center pt-4">
							<img src="{{asset('uploads/human_image')}}/{{ $human_infos->image }}" alt="" class="img-fluid" style="width: 90%" ;>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="hardware_text">
								<p class="pt-4">
									{!! $human_infos->ck_description !!}
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--hardware part end-->


        @php
            $category_wise_programme =  DB::table('all_programmes')->where('id', 32)->get();
        @endphp

        <section>
            <div class="water">
                <div class="container">
                    @foreach ($category_wise_programme as $programme_categorie)
                    <div class="row mb-5">

                        <div class="col-lg-6">
                            <div class="water_img wow bounceInLeft" data-wow-duration="1.6s">
                                <img src="{{ asset('uploads/all_programme_image') }}/{{ $programme_categorie->programme_image }}" alt="" class="img-fluid w-100">
                                <div class="water_img_overlay">
                                    <a class="venobox" href="{{ asset('uploads/all_programme_image') }}/{{ $programme_categorie->programme_image }}"><i class="fas fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="water_text wow bounceInRight" data-wow-duration="1.6s">
                                <h5>{{ $programme_categorie->programme_title }}</h5>
                                <p>{{substr($programme_categorie->image_description,0,620)}}...</p>

                                @if($programme_categorie->programme_title == "Development Communication")
                                    <a href="{{ url('iec') }}"><i class="fas fa-bars" style="color: #0984e3; margin-right: 5px;"></i> Read More</a>
                                @elseif($programme_categorie->programme_title == "MIS & Knowledge Management")
                                    <a href="{{url('nrc/page/view')}}"><i class="fas fa-bars" style="color: #0984e3; margin-right: 5px;"></i> Read More</a>
                                @else
                                    <a href="{{ url('category_wise/programme/details') }}/{{ $programme_categorie->id }}"><i class="fas fa-bars" style="color: #0984e3; margin-right: 5px;"></i> Read More</a>
                                @endif

                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </section>


@endsection
