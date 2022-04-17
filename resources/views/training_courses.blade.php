@extends('layouts.frontendprogarmme')

@section('frontend_main')
<style>

	/*banner css start*/
	.banner_part {
		background-image: url({{ asset('frontend_assets/Programme') }}/images/Capacity%20building.jpg);
		background-attachment: fixed;
		background-position: top left;
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
		font-size: 20px;
		font-weight: 700;
		color: #00AEEF;
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
		margin-bottom: 20px;
	}

	.hardware .hardware_headeing h3 span {
		color: #0984e3;
	}

	.hardware .card-header{
		background: rgba(52, 152, 219, 0.3)
	}

	.hardware .card-body{
		background: rgba(123, 237, 159, 0.2)
	}

	.hardware .card-body p{
		font-family: 'Roboto', sans-serif;
	}

	.hardware .card-header h5{
		font-family: 'Oswald', sans-serif;
		font-size: 20px;
		font-weight: 500;
		color: #2d3436;

	}

	/*hardware css end*/

	/*organization css start*/
	.organization {
		padding-top: 30px;
		padding-bottom: 30px;
	}

	.organization .organization_headeing h3 {
		font-family: 'Oswald', sans-serif;
		font-size: 32px;
		font-weight: 600;
		color: #2d3436;
		margin-bottom: 20px;
	}

	.organization .organization_headeing h3 span {
		color: #0984e3;
	}

	.organization .card-header h5{
		font-family: 'Oswald', sans-serif;
		font-size: 20px;
		font-weight: 500;
		color: #2d3436;

	}

	.organization .card-header{
		background: rgba(211, 84, 0, 0.3)
	}

	.organization .card-body{
		background: rgba(255, 107, 129, 0.1)
	}

	.organization .card-body p{
		font-family: 'Roboto', sans-serif;
	}

	/*organization css end*/

	/*others css start*/
	.others{
		padding-bottom: 80px;
	}

	.others .card-header h5{
		font-family: 'Oswald', sans-serif;
		font-size: 20px;
		font-weight: 500;
		color: #2d3436;

	}

	.others .card-header{
		background: rgba(0, 148, 50, 0.3)
	}

	.others .card-body{
		background: rgba(46, 213, 115, 0.1);
	}

	.others .card-body p{
		font-family: 'Roboto', sans-serif;
	}
	/*others css end*/
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
							<h3>Training Courses</h3>
							<p>Tailor made courses </p>
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
			<li class="breadcrumb-item"><a href="#">Capacity Building Initiatives</a></li>
			<li class="breadcrumb-item active" aria-current="page">Training courses to be offered by NGO Forum</li>
		</ol>
	</nav>
	<!--link part end-->

	<!--hardware part start-->
	<section>
		<div class="hardware">
			<div class="container">
				<div class="row mb-3">
					<div class="col-lg-12">
						<div class="hardware_headeing">
							<h3>Proposed Training Courses for <span>GO, NGO &amp; Training Professionals</span></h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 table-responsive hardware_text">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th scope="col" style="width: 5%">Serial</th>
									<th scope="col" style="width: 20%">Training Course Title</th>
									<th scope="col">Duration</th>
									<th scope="col">Participants</th>
									<th scope="col">Major Focus</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td><b>Training of Trainers (TOT)</b></td>
									<td><span>5 Days</span></td>
									<td>Trainers, (who are working as trainer or interested to work in training) Supervisors</td>
									<td>
										Concepts on training, learning adult learning principles, learning domain, identifying different learning style, training principles, responsive training environment creation, Training need assessment, Training methods and techniques, facilitation skill, training evaluation and report writing
									</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td><b>Advance training management for Facilitation &amp; presentation skills</b></td>
									<td><span>3 Days</span></td>
									<td>Sr. Management / Mid level managers</td>
									<td>
										Art of facilitation and presentation, Explorative/participatory learning methodology instrumentation and written, visual, digital and oral and sign symbol presentation techniques development, content based presentation theme demonstration
									</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td><b>Learning organization development and management approach</b></td>
									<td><span>5 Days</span></td>
									<td>Senior &amp; mid level development managers</td>
									<td>
										Concept of organizational development and Management Conflict Management, Team building, Time management, Development of leadership and external relation, Organizational Culture and values, Networking and advocacy.
									</td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td><b>Demand responsive Project design and Management</b></td>
									<td><span>5 Days</span></td>
									<td>Senior &amp; mid level development managers</td>
									<td>
										Technical team development, Participation process in project development, need based budget preparation, fund management, Implementation &amp; project evaluation approach
									</td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td><b>WaSH Governance</b></td>
									<td><span>4 Days</span></td>
									<td>Midlevel managers, supervisors working in private organization, GO & NGOs</td>
									<td>
										WaSH services in locality-local government entity, water resources and WatSan technology promotion for hard to reach areas WaSH policy framework, Components of WaSH governance, Strategic planning for WaSH services, Financing WASH services-WatSan budget utilization and cost sharingKey stakeholders at local level
									</td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td><b>Supportive Supervision and Monitoring</b></td>
									<td><span>5 Days</span></td>
									<td> Sr. Management / Mid level managers</td>
									<td>
										Supervision concept: difference between manager and supervisor, Super visionary role, Leadership in Supervision: style, role, ways of motivating staff, Training Communication in Supervision, Monitoring: concept; tools, techniques and method, Relation between monitoring & supervision
									</td>
								</tr>
								<tr>
									<th scope="row">7</th>
									<td><b>Result based Monitoring/log frame analysis</b></td>
									<td><span>3 Days</span></td>
									<td>Midlevel managers, supervisors working in private organization, GO & NGOs</td>
									<td>
										To lining with the organizational strategic direction to operational approach for a better outcome and impact, Hierarchical/vertical log frame analysis, External factors assumption and risk prioritization, evidence collection, monitoring instrument, justify the project sustainability
									</td>
								</tr>
								<tr>
									<th scope="row">8</th>
									<td><b>Disaster Preparedness and Management Focus on WaSH</b></td>
									<td><span>3 Days</span></td>
									<td>Midlevel managers, supervisors working in private organization, GO & NGOs</td>
									<td>
										Concept of Disaster, Bangladesh and Disaster, Vulnerability and Capacity Analysis, Training Communication with communities, Disaster Risk Reduction, Participatory Disaster Risk assessment (PDRA) tools, Mapping and Assessment
									</td>
								</tr>
								<tr>
									<th scope="row">9</th>
									<td><b>Report writing skill</b></td>
									<td><span>2 Days</span></td>
									<td>mid level managers private organizations, GOs and NGOs </td>
									<td>
										Techniques of quantitative and narrative report writing skills, result based framework wise reporting, Graph/chart/Trends/picture presentation and English vocabulary development
									</td>
								</tr>
								<tr>
									<th scope="row">10</th>
									<td><b>Basic Techniques of Advocacy</b></td>
									<td><span>3 Days</span></td>
									<td>Managers or officers of NGOs, CBOs and CSOs</td>
									<td>
										Concept of advocacy and its importance, Elements of advocacy, Selection & importance of advocacy tools, Implementation process of advocacy, Grass root advocacy and its art of implementation, Way and technique of programme direction (practical)
									</td>
								</tr>
								<tr>
									<th scope="row">11</th>
									<td><b>Finance Management & Procurement</b></td>
									<td><span>3 Days</span></td>
									<td>ED/Sr. level Management/ Accounts Officer</td>
									<td>
										Finance and Accounting basics, budget Preparation techniques of budgetary control, Explain the internal control, its importance and its components; understand on statutory compliance like VAT, Tax, and Stamp Act and NGOAB requirements. Procurement act policies 2006, 2009
									</td>
								</tr>
								<tr>
									<th scope="row">12</th>
									<td><b>Microfinance Operations and Management</b></td>
									<td><span>5 Days</span></td>
									<td>ED/Sr. & Mid level Management</td>
									<td>
										Microfinance and micro credit: Realize and analyze the present situation of Microfinance, different service methods, portfolio and analyze ratio, Manage defaulter analyze risk, Maintain MIS and conduct monitoring
									</td>
								</tr>
								<tr>
									<th scope="row">13</th>
									<td><b>Leadership Development Course</b></td>
									<td><span>3 Days</span></td>
									<td>Senior level managers from GO/NGO/Private organization</td>
									<td>
										Development & Approaches Emergence of NGOs, Rights & DevelopmentLeadership Skills and application
									</td>
								</tr>
								<tr>
									<th scope="row">14</th>
									<td><b>Managing High Performing Team</b></td>
									<td><span>5 Days</span></td>
									<td>Supervisors, field level workers </td>
									<td>
										Expectation/Theme on Team development, Dynamic team approach, Nurturing team Cohesion, Human behaviour in team functioning, Ways of Building team Synergistic approach, Team Spirit for shared organizational Vision Team Culture, Team performance
									</td>
								</tr>
								<tr>
									<th scope="row">15</th>
									<td><b>Disaster resilient WaSH Development</b></td>
									<td><span>2 Days</span></td>
									<td>Supervisors, field level workers</td>
									<td>
										Climate impact on water resources, water crisis and WaSH challenges, resilience and coping with vulnerability
									</td>
								</tr>
								<tr>
									<th scope="row">16</th>
									<td><b>Communication/promotional skills</b></td>
									<td><span>5 Days</span></td>
									<td>Senior level managers from GO/NGO/Private organization</td>
									<td>
										Awareness building communication Behavioural change communication Nonverbal communication, Confidence building and crisis handling, support sharing, emergency supply & news dissemination, Gender responsive communication, Advocacy, Public mobilization, message development
									</td>
								</tr>
								<tr>
									<th scope="row">17</th>
									<td><b>Human Training Communication skills development</b></td>
									<td><span>2 Days</span></td>
									<td>Mid level managers from GO/NGO/Private organization</td>
									<td>
										Effective Training Communication, Interpersonal Training Communication, Effective Training Communication dimension with Emotional intelligence, Art on presentation, Training Communication skills Link with verbal, nonverbal, written and mobile, Email, SMS, MMS, skype, online, linkedIn network. Ethics-Issues: Secrets, disclosure, diffusion and privacy, Self & Team induction at working place, Whistle blowing & Leaking information
									</td>
								</tr>
								<tr>
									<th scope="row">18</th>
									<td><b>Participatory Hygiene & Sanitation Transformation (PHAST) Course</b></td>
									<td><span>4 Days</span></td>
									<td>Front Line staff/ field facilitator</td>
									<td>
										Introduce with Rights to WaSH, Hygiene promotion tools/techniques Situation Analysis and Problem Identification Community action plan and resource management Program Implementation, Monitoring and Evaluation
									</td>
								</tr>
								<tr>
									<th scope="row">19</th>
									<td><b>Community Managed Sustainable WaSH Programme</b></td>
									<td><span>3 Days</span></td>
									<td>Field facilitators/union extension worker/Front line staff</td>
									<td>
										To practice the community led sustainable WaSH activities for ensuring strong sustainability. Community Management PRA tools utilization, village development committee development, Action for planning and result performance
									</td>
								</tr>
								<tr>
									<th scope="row">20</th>
									<td><b>Arsenic Awareness and Water Quality</b></td>
									<td><span>5 Days</span></td>
									<td>Field workers and supervisors involved in arsenic mitigation and WaSH programme</td>
									<td>
										Water quality and arsenic contamination in water, Health hazards of the parameters exist in water, causes for contamination of ground water by arsenic, Use of field test kit to detect arsenic in water, Technologies and process of arsenic removal from water, Testing of bacteria
									</td>
								</tr>
								<tr>
									<th scope="row">21</th>
									<td><b>Strategic direction for Sustainable development on WatSan project</b></td>
									<td><span>3 Days</span></td>
									<td>Senior level managers from GO/NGO/Private organization</td>
									<td>
										sustainable development goal and strategy formulation on Eco friendly sanitation, water sources management, pollution control, waste management, water & sanitation based product development and human compost marketing
									</td>
								</tr>
								<tr>
									<th scope="row">22</th>
									<td><b>Green Development</b></td>
									<td><span>2 Days</span></td>
									<td>Senior level managers from GO/NGO/Private organization</td>
									<td>
										Green development emergence and potentiality in sustainable development,Strategic direction for natural resource conservation and efficiency, Utilize the local resource, energy saving, pollution control and green marketing
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--hardware part end-->

@endsection
