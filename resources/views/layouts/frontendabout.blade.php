<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('frontend_assets/about') }}/images/icon1.png">
	<title>About Us</title>
	<link href="https://fonts.googleapis.com/css?family=DM+Serif+Display|Exo+2:400,500,600,700,800,900|Lato:400,700,900|Open+Sans:400,600,700,800|Oswald:400,500,600,700|Raleway:400,500,600,700,800,900|Roboto:400,500,700,900|Rubik:400,500,700,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('frontend_assets/about') }}/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets/about') }}/css/animate.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets/about') }}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets/') }}/css/style.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets/about') }}/css/responsive.css">


	<style>
		/*banner css start*/
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
			font-family: 'Roboto', sans-serif;
			font-size: 35px;
			font-weight: 600;
			color: #e7e7e7;
			margin-bottom: 10px;
		}

		.banner_text p {
			font-family: 'Lato', sans-serif;
			font-size: 15px;
			font-weight: 600;
			color: ghostwhite;
		}

		.banner_text p span {
			color: #00AEEF;
		}

		/*banner css end*/

		/*about css start*/
		.about_us {
			padding-top: 30px;
			padding-bottom: 60px;
		}

		.about_img {
			overflow: hidden;
			margin-top: 10px;
			text-align: center;
			border-radius: 10px;
			transition: all .2s linear;

		}

		.about_img:hover{
			box-shadow: none;
		}

/*
		.about_img img {
			height: 500px;
		}
*/

		.about_text h3 {
			font-family: 'Rubik', sans-serif;
			font-size: 30px;
			margin-bottom: 30px;
			margin-top: 20px;
			color: #212121;
		}

		.about_text h3 span {
			color: #008bbf
		}

		.about_text p {
			margin-bottom: 20px;
			font-family: 'Rubik', sans-serif;
			text-align: justify;
			font-style: italic;
			font-size: 15px;
		}

		.about_text p span {
			color: #0083b4;
			font-style: normal;
			font-weight: 600;
			font-size: 15px;
		}

		/*about css end*/

		/*Vision css start*/


		.vision:before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background-color: rgba(0, 0, 0, 0.5)
		}

		.vision_title h3 {
			font-family: 'DM Serif Display', serif;
			font-size: 45px;
			color: antiquewhite;
			letter-spacing: 2px;
			line-height: 250px;
			font-style: italic;
		}

		.vision_text p {
			font-family: 'Oswald', sans-serif;
			color: #00baff;
			font-size: 34px;
			line-height: 250px;
			text-shadow: 10px 10px 15px black;
		}

		/*vision css end*/

		/*mission css start*/
		.mission {
			margin-top: 80px;
			margin-bottom: 50px;
		}

		.mission_title {
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
			height: 360px;
			position: relative;
		}

		.mission_title .mission_overlay {
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background-color: rgba(0, 0, 0, 0.45);
			text-align: center;
		}

		.mission_overlay h3 {
			line-height: 360px;
			font-family: 'DM Serif Display', serif;
			font-size: 48px;
			color: antiquewhite;
			letter-spacing: 2px;
			font-style: italic;
			text-shadow: 10px 10px 15px black;
		}

		.mission_text {
			padding-right: 100px;
			padding-left: 50px;
		}

		.mission_text ul{
		    padding-left: 20px;
		}
		.mission_text ul li{
		    font-family: 'Rubik', sans-serif;
			font-size: 14px;
			font-weight: 500;
			margin-bottom: 10px;
			color: #1e1e1e;
			text-align: justify;
			transition: all .2s linear;
			text-shadow: 10px 10px 15px gray;
		}

		.mission_text p {
			font-family: 'Rubik', sans-serif;
			font-size: 15px;
			font-weight: 500;
			margin-bottom: 20px;
			color: #1e1e1e;
			text-align: justify;
			transition: all .2s linear;
			text-shadow: 10px 10px 15px gray;
		}
		.mission_text p:hover{
			text-shadow: none;
			color: white;
		}

		/*mission css end*/

		/*goal css start*/
		.goal {
			margin-bottom: 70px;
		}

		.goal_title .goal_overlay {
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background-color: rgba(0, 0, 0, 0.45);
			text-align: center;
		}

		.goal_overlay h3 {
			line-height: 360px;
			font-family: 'DM Serif Display', serif;
			font-size: 48px;
			color: antiquewhite;
			letter-spacing: 2px;
			font-style: italic;
			text-shadow: 10px 10px 15px black;
		}

		.goal_text {
			padding-right: 60px;
			padding-top: 80px;
		}

		.goal_text i{
			font-weight: 600;
			font-size: 18px;
			color: #008BBF
		}

		.goal_text p {
			font-family: 'Rubik', sans-serif;
			font-size: 18px;
			margin-bottom: 20px;
			color: #1e1e1e;
			text-align: justify;
			text-shadow: 10px 10px 15px black;
			font-weight: 500;
			transition: all .2s linear;
		}
		.goal_text p:hover{
			color: #008BBF
		}

		/*goal css end*/

		/*core value css start*/
		.core {
			margin-bottom: 70px;
		}

		.core_title {

			background-image: url({{ asset('frontend_assets/about') }}/images/core%20value.jpg);
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
			/*
			background: #c94b4b;
			background: -webkit-linear-gradient(to right, #4b134f, #c94b4b);
			background: linear-gradient(to right, #4b134f, #c94b4b);
*/
			height: 400px;
			position: relative;
			clip-path: polygon(0 0, 73% 0, 100% 100%, 0% 100%);
		}

		.core_title .core_overlay {
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background-color: rgba(0, 0, 0, 0.45);
			clip-path: polygon(0 0, 73% 0, 100% 100%, 0% 100%);
			text-align: center;
		}

		.core_overlay h3 {
			line-height: 400px;
			font-family: 'DM Serif Display', serif;
			font-size: 48px;
			color: antiquewhite;
			letter-spacing: 2px;
			font-style: italic;
			text-shadow: 10px 10px 15px black;
		}

		.core_text {
			padding-right: 60px;
			padding-top: 40px;
		}

		.core_text i{
			font-weight: 600;
			font-size: 18px;
			color: #008BBF
		}

		.core_text p {
			font-family: 'Rubik', sans-serif;
			font-size: 16px;
			margin-bottom: 15px;
			color: #1e1e1e;
			text-align: justify;
			text-shadow: 10px 10px 15px black;
			font-weight: 500;
			transition: all .2s linear;
		}
		.core_text p:hover{
			color: #008BBF
		}

		/*core value css end*/

		/*network css start*/
		.network_title {

			background-image: url({{ asset('frontend_assets/about') }}/images/networks.jpg);
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
			/*
			background: #c94b4b;
			background: -webkit-linear-gradient(to right, #4b134f, #c94b4b);
			background: linear-gradient(to right, #4b134f, #c94b4b);
*/
			height: 300px;
			position: relative;
		}

		.network_title .network_overlay {
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background-color: rgba(0, 0, 0, 0.6);
			text-align: center;
		}

		.network_overlay h3 {
			line-height: 300px;
			font-family: 'DM Serif Display', serif;
			font-size: 48px;
			color: antiquewhite;
			letter-spacing: 2px;
			font-style: italic;
			text-shadow: 10px 10px 15px black;
		}

		.network_text {
			padding-right: 70px;
			padding-top: 50px;
			padding-left: 20px;
		}

		.network_text p {
			font-family: 'Rubik', sans-serif;
			font-size: 16px;
			color: #1e1e1e;
			text-align: justify;
			color: white;
		}
		.network_text_bg{
			background-color: #0082b2
		}
		/*network css end*/

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
									@foreach ($resources_categories as $resourcesCategory)
										<a class="dropdown-item" href="{{ url('category_wise_resources') }}/{{ $resourcesCategory->id }}">{{ $resourcesCategory->category_name }}</a>
									@endforeach
									<a class="dropdown-item" href="{{ url('photo') }}">Photo Gallery</a>
									<a class="dropdown-item" href="{{url('video/gallery')}}">Video Gallery</a>
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
									<!--MIS Portal-->
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

@yield('frontend_main')

	<!--footer start-->
	<section>
		<div class="footer">
			<div class="container">
				<div class="footer_content">
					<div class="row">
						<div class="col-lg-3">
							<div class="footer_1">
								<img src="{{asset('frontend_assets/images/logo.png')}}" alt="" class="img-fluid mb-4" style="width: 220px">
								<p><i class="fas fa-map-marker-alt"></i>4/6, Block - E, Lalmatia,<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dhaka-1207,Bangladesh. </p>
								<p><i class="fas fa-phone-alt"></i>+880-2-58154273-4</p>
								<p><i class="fas fa-phone-alt"></i>+880-2- 8128258-9 </p>
								<p><i class="fas fa-envelope-open-text"></i>ngof@bangla.net</p>
								<h5>For any issue/feedback :</h5>
								<p><i class="fas fa-envelope-open-text"></i>info@ngof.org</p>

								<h5><a href="{{ url('career') }}" style="color: #42B8D4"><i class="fas fa-briefcase"></i> Career</a></h5>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="footer_2">
								<h5>Knowledge Hub</h5>
								@php
										$resources_categories = App\resourcesCategory::all();
								@endphp
								@foreach ($resources_categories as $resourcesCategory)
										<a href="{{ url('category_wise_resources') }}/{{ $resourcesCategory->id }}">{{ $resourcesCategory->category_name }}</a>
									@endforeach
								<a href="http://ngof.org/wdb_new/" target="_blank">PHED</a>
								<a href="http://www.ngof.org/nrc/olis/ " target="_blank">LIS</a>

								<h5 class="mt-5">Projects</h5>
								<a href="{{ url('existing_projects') }}">Existing Projects</a>
								<a href="{{ url('prev_project') }}">Implemented Projects</a>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="footer_2">
								<h5>News &amp; Media</h5>
								@foreach ($NewsCategories as $NewsCategory)
									<a href="{{ url('category/wise/news') }}/{{ $NewsCategory->id }}">{{ $NewsCategory->category_name }}</a>
								@endforeach

								<h5 class="mt-4">Contact</h5>
								<a href="{{ url('contact') }}">Central Office</a>
								<a href="{{ url('regional_office') }}">Regional Offices</a>
								<a href="{{ url('project_office') }}">Project Offices</a>


							</div>
						</div>
						<div class="col-lg-3">
							<div class="footer_3">
								<h5 class="mb-4"><a href="https://mail.ngof.org/mail/" target="_blank" style="font-size: 20px"><i class="fas fa-mail-bulk" style="margin-right: 8px;"></i> WebMail</a></h5>
								<h5>NGO Forum Newsletter</h5>
								<form>
									<input type="email" name="email" placeholder="Email">
									<button type="submit"><i class="fas fa-paper-plane"></i></button>
								</form>

								<h5 class="mt-4">Social Media :</h5>
								<p>
									<a href="https://www.facebook.com/ngoforum.publichealth/?ref=br_rs" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.youtube.com/channel/UCdRm_-rdnR3SbGDlBctnYug"><i class="fab fa-youtube"></i></a>
								</p>
								<h5 class="mt-4">Useful Link :</h5>
								<p><img src="{{ asset('frontend_assets') }}/images/footer_logo.png" alt="" class="img-fluid" style="height: 26px;width: 26px; margin-right: 10px;"><a href="https://www.bangladesh.gov.bd/index.php?lang=en" target="_blank">National Web Portal</a></p>
								<p><img src="{{ asset('frontend_assets') }}/images/footer_logo.png" alt="" class="img-fluid" style="height: 26px;width: 26px; margin-right: 10px;"><a href="https://lgd.gov.bd/" target="_blank">Ministry of Local Government</a></p>
								<p><img src="{{ asset('frontend_assets') }}/images/footer_logo.png" alt="" class="img-fluid" style="height: 26px;width: 26px; margin-right: 10px;"><a href="http://www.ngoab.gov.bd/" target="_blank">NGO Affairs Bureau</a></p>
								<p><img src="{{ asset('frontend_assets') }}/images/footer_logo.png" alt="" class="img-fluid" style="height: 26px;width: 26px; margin-right: 10px;"><a href="https://mowr.gov.bd/" target="_blank">Ministry of Water Resources</a></p>

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="footer_bottom">
							    <div class="row">
							        <div class="col-lg-4 pb-1">
							            <p><span>Design & Concept :</span> Mr. Kazi Tanvir Ahmed</p>
							        </div>
							         <div class="col-lg-4 pb-1">
							            <p>Copyright <span>&copy;</span> 2019 NGO Forum for Public Health</p>
							        </div>
							        <div class="col-lg-4 pb-1">
							            <p><span>Developed By :</span> Md. Fahim Hossain</p>
							        </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--footer End-->



	<script src="{{ asset('frontend_assets/about') }}/js/jquery-1.12.4.min.js"></script>
	<script src="{{ asset('frontend_assets/about') }}/js/popper.min.js"></script>
	<script src="{{ asset('frontend_assets/about') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('frontend_assets/about') }}/js/waypoints.min.js"></script>
	<script src="{{ asset('frontend_assets/about') }}/js/wow.min.js"></script>
	<script src="{{ asset('frontend_assets/about') }}/js/custom.js"></script>
	<script src="{{ asset('frontend_assets/about') }}///kit.fontawesome.com/c218529370.js"></script>
</body>

</html>
