<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('frontend_assets/Programme') }}/images/icon1.png">
	<title>Programme</title>
	
	
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
	<link href="https://fonts.googleapis.com/css?family=Courgette|DM+Serif+Display|Exo+2|Lato|Lobster+Two|Open+Sans|Oswald|Raleway|Roboto|Rubik&display=swap" rel="stylesheet">
	
	
	<link rel="stylesheet" href="{{ asset('frontend_assets/Programme') }}/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets/Programme') }}/css/animate.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets/Programme') }}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets/Programme') }}/css/venobox.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/style.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets/Programme') }}/css/responsive.css">
	<style>
		/*banner css start*/
		.banner_part {
			background-image: url({{ asset('frontend_assets/Programme') }}/images/banani-2978376_960_720.jpg);
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			height: 480px;
			position: relative;
		}

		.banner_part:before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background-color: rgba(0, 0, 0, 0.55);
		}

		.banner_text {
			text-align: center;
			padding-top: 190px;
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
			border-bottom: 2px solid #00AEEF;
		}

		.banner_text p {
			font-family: 'Lato', sans-serif;
			font-size: 16px;
			font-weight: 500;
			color: ghostwhite;
		}

		.banner_text p a {
			color: ghostwhite
		}

		.banner_text p span {
			color: #00AEEF;
		}

		/*banner css end*/

		/*hardware css start*/
		.hardware {
			padding-top: 30px;
			padding-bottom: 60px;
		}

		.hardware .hardware_headeing h3 {
			font-family: 'Oswald', sans-serif;
			font-size: 30px;
			font-weight: 600;
			color: #0984e3;
			margin-bottom: 20px;
		}

		.hardware .hardware_headeing h3 span {
			color: #0984e3;
		}
		.hardware .hardware_headeing p{
		    font-family: 'Rubik', sans-serif;
			font-size: 15px;
			color: #2d3436;
			text-align: justify;
		}

		.hardware .hardware_text p {
			font-family: 'Rubik', sans-serif;
			font-size: 15px;
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
			font-size: 22px;
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
			color: #1e1e1e;
			text-shadow: 10px 10px 15px black;
			font-family: 'DM Serif Display', serif;
			font-size: 15px;
			transition: all .2s linear;
			position: relative;
		}
		.water_text a:before{
		    content:"";
		    position: absolute;
		    bottom: -5px;
		    left: 0;
		    height: 2px;
		    width: 0px;
		    background: #0984e3;
		    transition: all .2s linear;
		}
		
		.water_text a:hover::before{
		    width: 92px;
		}
		
		.water_text a.extra_btn:hover::before{
		    width: 140px;
		}
		
		.water_text a:hover {
			text-shadow: none;
		}

		.water_key_line {
			padding-top: 40px;
			padding-left: 35px;
			padding-right: 35px;
			padding-bottom: 30px;
		}

		.water_key_line p {
			font-family: 'DM Serif Display', serif;
			font-size: 25px;
			font-weight: 600;
			text-align: center;
		}

		.water_key_line p span {
			color: #0984e3;
			margin-left: 5px;
			margin-right: 5px;
			font-size: 28px;
		}

		/*water css end*/


		/*sanitation css start*/
		.sanitation {
			padding-bottom: 60px;
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

		.sanitation_key_line {
			padding-top: 40px;
			padding-left: 35px;
			padding-right: 35px;
			padding-bottom: 30px;
		}

		.sanitation_key_line p {
			font-family: 'DM Serif Display', serif;
			font-size: 25px;
			font-weight: 400;
			text-align: center;
		}

		.sanitation_key_line p span {
			color: #0984e3;
			margin-left: 5px;
			margin-right: 5px;
			font-size: 28px;
		}

		/*water css end*/
		
		.card-header h3 {
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
		.card-body a {
			display: inline-block;
			background-color: #427ad4;
			color: white;
			font-family: 'Lato', sans-serif;
			font-weight: 700;
			font-size: 18px;
			padding: 12px 15px;
			border-radius: 10px;
			box-shadow: 10px 10px 15px gray;
			transition: all .3s linear;
		}

		.card-body a:hover {
			box-shadow: 0px 0px 0px white;
		}

	</style>
</head>

<body>

	<!--Header Part Start-->
@yield('frontend_main')
	<!--sanitation marketing end-->


	<div class="mb-4">

	</div>


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




	<script src="{{ asset('frontend_assets/Programme') }}/js/jquery-1.12.4.min.js"></script>
	<script src="{{ asset('frontend_assets/Programme') }}/js/popper.min.js"></script>
	<script src="{{ asset('frontend_assets/Programme') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('frontend_assets/Programme') }}/js/venobox.min.js"></script>
	<script src="{{ asset('frontend_assets/Programme') }}/js/waypoints.min.js"></script>
	<script src="{{ asset('frontend_assets/Programme') }}/js/wow.min.js"></script>
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('#table_id').DataTable();
		});

	</script>
	<script src="{{ asset('frontend_assets/Programme') }}/js/custom.js"></script>
	<script src="https://kit.fontawesome.com/c218529370.js"></script>


	   @yield('data-table')
</body>

</html>
