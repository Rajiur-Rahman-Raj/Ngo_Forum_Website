<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('frontend_assets/devcom') }}/images/icon1.png">
	<title>Development Communication</title>
	<link href="https://fonts.googleapis.com/css?family=Courgette|DM+Serif+Display|Exo+2|Lato|Lobster+Two|Open+Sans|Oswald|Raleway|Roboto|Rubik&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('frontend_assets/devcom') }}/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets/devcom') }}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets/devcom') }}/css/slick.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets/') }}/css/style.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets/devcom') }}/css/venobox.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets/devcom') }}/css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed&display=swap" rel="stylesheet"> 

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
	<script src="{{ asset('frontend_assets/devcom') }}/js/jquery-1.12.4.min.js"></script>
	<script src="{{ asset('frontend_assets/devcom') }}/js/popper.min.js"></script>
	<script src="{{ asset('frontend_assets/devcom') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('frontend_assets/devcom') }}/js/slick.min.js"></script>
	<script src="{{ asset('frontend_assets/devcom') }}/js/venobox.min.js"></script>
	<script src="https://kit.fontawesome.com/c218529370.js"></script>
	<script src="{{ asset('frontend_assets/devcom') }}/js/custom.js"></script>

</body>

</html>
