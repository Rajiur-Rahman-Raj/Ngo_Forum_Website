<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('frontend_assets') }}/images/icon1.png">
	<title>NGO Forum</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Open+Sans:300,400,600,700,800|Raleway:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=DM+Serif+Display|Exo+2:400,500,600,700,800,900|Lato:400,700,900|Open+Sans:400,600,700,800|Oswald:400,500,600,700|Raleway:400,500,600,700,800,900|Roboto:400,500,700,900|Rubik:400,500,700,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display|Exo+2:400,500,600,700,800,900|Lato:400,700,900|Open+Sans:400,600,700,800|Oswald:400,500,600,700|Raleway:400,500,600,700,800,900|Roboto:400,500,700,900|Rubik:400,500,700,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bad+Script|Berkshire+Swash|Bungee+Inline|Caveat+Brush|Chewy|Fredericka+the+Great|Grenze:400,500,600,700,800,900|Patrick+Hand&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:400,500,600,700|Fira+Sans+Extra+Condensed:400,500,600,700|Fira+Sans:400,500,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kalam|Lobster&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/animate.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/slick.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/venobox.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/style.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/responsive.css">

	@yield('header_css')


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
	<!--Top Button Start-->
	<div class="top_btn">
		<i class="fas fa-arrow-up"></i>
	</div>
	<!--Top button End-->



	<script src="{{ asset('frontend_assets') }}/js/jquery-1.12.4.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/popper.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/slick.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/venobox.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/mixitup.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/waypoints.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/wow.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/jquery.counterup.min.js"></script>
	@yield('custom_js')
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script src="{{ asset('frontend_assets/Programme') }}/js/custom.js"></script>
	<script src="https://kit.fontawesome.com/c218529370.js"></script>
	@yield('data_table')
</body>

</html>
