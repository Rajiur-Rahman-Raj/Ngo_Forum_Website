@extends('layouts.frontenddevcom')

@section('frontend_main')
<style>
  /*banner css start*/
  .banner_1 {
    background-image: url({{ asset('frontend_assets/devcom') }}/images/devcombg_1.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 660px;
    position: relative;
    z-index: 1;
  }

  .banner_1:before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.5);
    z-index: -1;
  }

  .banner_2 {
    background-image: url({{ asset('frontend_assets/devcom') }}/images/devcombg_2.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 660px;
    position: relative;
    z-index: 1;
  }

  .banner_2:before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.5);
    z-index: -1;
  }

  .banner_3 {
    background-image: url({{ asset('frontend_assets/devcom') }}/images/devcombg_3.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 660px;
    position: relative;
    z-index: 1;
  }

  .banner_3:before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.5);
    z-index: -1;
  }

  .banner_4 {
    background-image: url({{ asset('frontend_assets/devcom') }}/images/devcombg_4.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 660px;
    position: relative;
    z-index: 1;
  }

  .banner_4:before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.5);
    z-index: -1;
  }

  .banner_part {
    position: relative;
  }

  .banner_part .b_left_arrow {
    position: absolute;
    top: 50%;
    left: 50px;
    color: white;
    font-size: 35px;
    z-index: 20;
    cursor: pointer;
    transition: all .3s linear;
  }

  .banner_part .b_right_arrow {
    position: absolute;
    top: 50%;
    right: 50px;
    color: white;
    font-size: 35px;
    z-index: 20;
    cursor: pointer;
    transition: all .3s linear;
  }

  .banner_text {
    text-align: center;
    padding-top: 300px;
  }

  .banner_text h3 {
    font-family: 'Roboto', sans-serif;
    font-size: 38px;
    font-weight: 600;
    color: #e7e7e7;
    margin-bottom: 10px;
    letter-spacing: 1px;
    text-shadow: 10px 10px 15px black;
  }

  .banner_text h3 span {
    color: #00AEEF;
  }

  .banner_text p {
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: ghostwhite;
  }

  .banner_text p span {
    color: #00AEEF;
  }

  /*banner css end*/

  /*intro css start*/
  .intro {
    padding-top: 30px;
    padding-bottom: 60px;
  }

  .intro .intro_headeing h3 {
    font-family: 'Oswald', sans-serif;
    font-size: 28px;
    font-weight: 600;
    color: #2d3436;
    margin-bottom: 20px;
  }

  .intro .intro_headeing h3 span {
    color: #0984e3;
  }

  .intro .intro_text p {
    font-family: 'Rubik', sans-serif;
    font-size: 15px;
    color: #2d3436;
    text-align: justify;
    margin-bottom: 10px;
  }

  .intro .intro_text p span {
    color: #0984e3;
    font-weight: 600;
  }

  .intro .intro_text2 p {
    font-family: 'Rubik', sans-serif;
    font-size: 15px;
    color: #2d3436;
    text-align: justify;
    margin-bottom: 10px;
  }

  .intro .intro_text2 p span {
    color: #0984e3;
    font-weight: 600;
  }

  .intro_text2 a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #0984e3;
    color: white;
    border-radius: 10px;
    box-shadow: 10px 10px 15px gray;
    font-family: 'DM Serif Display', serif;
    font-size: 15px;
    transition: all .2s linear;
    margin-top: 10px;
  }

  .intro_text2 a:hover {
    box-shadow: none;
  }

  .intro_img {
    position: relative;
  }

  .intro_img_overlay {
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

  .intro_img_overlay i {
    color: ghostwhite;
    font-size: 50px;
  }

  .intro_img:hover .intro_img_overlay {
    opacity: 1;
  }

  /*intro css end*/

  /*part1 css start*/
  .part1 {
    padding-bottom: 60px;
  }

  .part1_text p {
    font-family: 'Rubik', sans-serif;
    font-size: 15px;
    color: #2d3436;
    text-align: justify;
    margin-bottom: 10px;
  }

  .part1_text p span {
    color: #0984e3;
    font-weight: 600;
  }

  /*part1 css end*/



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
  .devcom_contact h5 i{
    margin-right: 10px;
  }
  .devcom_contact p{
    font-family: 'Oswald', sans-serif;
    font-size: 16px;
    font-weight: 400;
    padding-left: 20px;
  }
  .devcom_contact p i{
    margin-right: 5px;
  }

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
									<!--<a class="dropdown-item" href="{{ url('contact') }}">Contact</a>-->
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
									<a class="dropdown-item" href="{{ url('login') }}">MIS Login</a>
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
    <div class="banner_1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_text">
              <h3><span>D</span>evelopment <span>C</span>ommunication</h3>
              <p>Manual <span>|</span> Flash Card <span>|</span> Poster <span>|</span> Flyer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="banner_2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_text">
              <h3><span>D</span>evelopment <span>C</span>ommunication</h3>
              <p>Manual <span>|</span> Flash Card <span>|</span> Poster <span>|</span> Flyer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="banner_3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_text">
              <h3><span>D</span>evelopment <span>C</span>ommunication</h3>
              <p>Manual <span>|</span> Flash Card <span>|</span> Poster <span>|</span> Flyer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="banner_4">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_text">
              <h3><span>D</span>evelopment <span>C</span>ommunication</h3>
              <p>Manual <span>|</span> Flash Card <span>|</span> Poster <span>|</span> Flyer</p>
            </div>
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
    <li class="breadcrumb-item"><a href="#">Service</a></li>
    <li class="breadcrumb-item active" aria-current="page">Development Communication</li>
  </ol>
</nav>
<!--link part end-->

<!--intro start-->
@foreach ($ice_infos as $ice_info)

<section>
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="intro_headeing">
            <h3><span>Development</span> Communication</h3>
          </div>
          <div class="intro_text">
            <p>{{ $ice_info->description_one }}</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card devcom_contact">
            <div class="card-header">
              <h4 class="text-center"> <i class="far fa-address-card" style="font-size: 20px;margin-right: 5px"></i> Contact Information</h4>
            </div>
            <div class="card-body pb-4" style="background: rgb(104, 109, 224, .2)">
              <h5><i class="fas fa-user-tie"></i> {{ $ice_info->name }}</h5>
              <p class="mb-3">{{ $ice_info->designation }}</p>
              <p>&nbsp;<i class="fas fa-mobile-alt"></i> Mobile : {{ $ice_info->phone }}</p>
              <p><i class="far fa-envelope"></i> E-mail :{{ $ice_info->email }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="row">
          <div class="col-lg-6">
            <div class="intro_img">
              <img src="{{ asset('uploads/ice_image') }}/{{ $ice_info->ice_image }}" alt="" class="img-fluid">
              <div class="intro_img_overlay">
                <a class="venobox" href="{{ asset('uploads/ice_image') }}/{{ $ice_info->ice_image }}"><i class="fas fa-search-plus"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="intro_text2">
              <p class="pt-5">
               {{ $ice_info->description_two }}
              </p>
              <a href="{{ url('development/metarials') }}">See Developed Materials</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Intro end-->

<!--part1 start-->
<section>
  <div class="part1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="part1_text">
            <p>{!! $ice_info->description_three !!}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
@endsection
<!--part1 end-->
