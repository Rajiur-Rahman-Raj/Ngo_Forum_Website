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
  			font-size: 40px;
  			z-index: 20;
  			cursor: pointer;
  			transition: all .3s linear;
  		}

  		.banner_part .b_right_arrow {
  			position: absolute;
  			top: 50%;
  			right: 50px;
  			color: white;
  			font-size: 40px;
  			z-index: 20;
  			cursor: pointer;
  			transition: all .3s linear;
  		}

  		.banner_text {
  			text-align: center;
  			padding-top: 300px;
  		}

  		.banner_text h3 {
  			font-family: 'Oswald', sans-serif;
  			font-size: 45px;
  			font-weight: 500;
  			color: #e7e7e7;
  			margin-bottom: 10px;
  		}

  		.banner_text h3 span {
  			color: #00AEEF;
  		}

  		.banner_text p {
  			font-family: 'Roboto', sans-serif;
  			font-size: 18px;
  			font-weight: 400;
  			color: ghostwhite;
  		}

  		.banner_text p span {
  			color: #00AEEF;
  		}

  		/*banner css end*/

  		/*poster css start*/
  		.poster {
  			padding-top: 30px;
  			padding-bottom: 40px;
  		}

  		.poster .poster_heading h3 {
  			font-family: 'Oswald', sans-serif;
  			font-size: 32px;
  			font-weight: 600;
  			color: #2d3436;
  			margin-bottom: 15px;
  		}

  		.poster .poster_heading h3 span {
  			color: #0984e3;
  		}
  		
  		.poster_heading p{
  		    font-family: 'Rubik', sans-serif;
  			font-size: 14px;
  			color: #2d3436;
  			text-align: justify;
  		}

  		.poster p {
  			font-family: 'Rubik', sans-serif;
  			font-size: 16px;
  			color: #2d3436;
  			text-align: justify;
  		}

  		.poster_img {
  			position: relative;
  		}

  		.poster_img_overlay {
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

  		.poster_img_overlay i {
  		    position: absolute;
  			top: 50%;
  			left: 50%;
  			transform: translate(-50%,-50%);
  			color: ghostwhite;
  			font-size: 30px;
  		}

  		.poster_img:hover .poster_img_overlay {
  			opacity: 1;
  		}

  		/*poster css end*/

  		/*hygin css start*/
  		.hygin {
  			padding-bottom: 60px;
  		}
  		.hygin .hygin_heading h3 {
  			font-family: 'Oswald', sans-serif;
  			font-size: 32px;
  			font-weight: 600;
  			color: #2d3436;
  			margin-bottom: 20px;
  		}
  		.hygin .hygin_heading h3 span {
  			color: #0984e3;
  		}
  		.hygin p {
  			font-family: 'Rubik', sans-serif;
  			font-size: 16px;
  			color: #2d3436;
  			text-align: justify;
  		}
  		.hygin_img {
  			position: relative;
  		}
  		.hygin_img_overlay {
  			position: absolute;
  			top: 0;
  			left: 0;
  			height: 100%;
  			width: 100%;
  			background-color: rgba(0, 0, 0, 0.6);
  			opacity: 0;
  			transition: all .2s linear;
  			padding-top: 40px;
  			text-align: center;
  		}
  		.hygin_img_overlay i {
  			color: ghostwhite;
  			font-size: 30px;
  		}
  		.hygin_img:hover .hygin_img_overlay {
  			opacity: 1;
  		}
  		/*hygin css end*/

  		/*Manual css start*/
  		.manual {
  			padding-bottom: 60px;
  		}
  		.manual .manual_heading h3 {
  			font-family: 'Oswald', sans-serif;
  			font-size: 32px;
  			font-weight: 600;
  			color: #2d3436;
  			margin-bottom: 20px;
  		}
  		.manual .manual_heading h3 span {
  			color: #0984e3;
  		}
  		.manual p {
  			font-family: 'Rubik', sans-serif;
  			font-size: 16px;
  			color: #2d3436;
  			text-align: justify;
  		}
  		.manual_img {
  			position: relative;
  		}
  		.manual_img_overlay {
  			position: absolute;
  			top: 0;
  			left: 0;
  			height: 100%;
  			width: 100%;
  			background-color: rgba(0, 0, 0, 0.6);
  			opacity: 0;
  			transition: all .2s linear;
  			padding-top: 80px;
  			text-align: center;
  		}
  		.manual_img_overlay2 {
  			position: absolute;
  			top: 0;
  			left: 0;
  			height: 100%;
  			width: 100%;
  			background-color: rgba(0, 0, 0, 0.6);
  			opacity: 0;
  			transition: all .2s linear;
  			padding-top: 75px;
  			text-align: center;
  		}
  		.manual_img_overlay i {
  			color: ghostwhite;
  			font-size: 30px;
  		}
  		.manual_img_overlay2 i {
  			color: ghostwhite;
  			font-size: 32px;
  		}
  		.manual_img:hover .manual_img_overlay {
  			opacity: 1;
  		}
  		.manual_img:hover .manual_img_overlay2 {
  			opacity: 1;
  		}
  		/*Manual css end*/

  		/*flash css start*/
  		.flash {
  			padding-top: 10px;
  			padding-bottom: 60px;
  		}
  		.flash .flash_heading h3 {
  			font-family: 'Oswald', sans-serif;
  			font-size: 32px;
  			font-weight: 600;
  			color: #2d3436;
  			margin-bottom: 20px;
  		}
  		.flash .flash_heading h3 span {
  			color: #0984e3;
  		}
  		.flash p {
  			font-family: 'Rubik', sans-serif;
  			font-size: 16px;
  			color: #2d3436;
  			text-align: justify;
  		}
  		.flash_img {
  			position: relative;
  		}
  		.flash_img_overlay {
  			position: absolute;
  			top: 0;
  			left: 0;
  			height: 100%;
  			width: 100%;
  			background-color: rgba(0, 0, 0, 0.6);
  			opacity: 0;
  			transition: all .2s linear;
  			padding-top: 50px;
  			text-align: center;
  		}
  		.flash_img_overlay i {
  			color: ghostwhite;
  			font-size: 30px;
  		}
  		.flash_img:hover .flash_img_overlay {
  			opacity: 1;
  		}
  		/*flash css end*/

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
									<a class="dropdown-item" href="Admin/page-login.html">MIS Login</a>
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

<!--poster start-->
@foreach ($metarials_categories as $metarials_category)
  <section>
  <div class="poster">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="poster_heading">
            <h3><span>{{ $metarials_category->category_name }}</span></h3>
            <p style="font-family: 'Rubik', sans-serif; font-size: 15px; color: #2d3436; text-align: justify;">
               {{ $metarials_category->category_description }}
            </p>
          </div>
        </div>
      </div>

      @php
        $metarials_images = App\Allmetarials::where('metarials_category_id', $metarials_category->id)->get();
      @endphp

      <div class="row">
        @foreach ($metarials_images as $metarials_image)
          <div class="col-lg-2 pt-4">
          <div class="poster_img">
            <img src="{{ asset('uploads/metarials_img') }}/{{ $metarials_image->image }}" alt="" class="img-fluid">
            <div class="poster_img_overlay">
              <a class="venobox2" href="{{ asset('uploads/metarials_img') }}/{{ $metarials_image->image }}"><i class="fas fa-search-plus"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endforeach
<!--poster end-->

@endsection
<!--part1 end-->
