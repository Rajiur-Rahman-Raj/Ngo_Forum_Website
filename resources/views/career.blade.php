@extends('layouts.frontendmaster')

@section('frontend_main')
  <style>
  		.latest_banner{
  			background-image: url({{ asset('frontend_assets') }}/images/banner-2.jpg);
  			background-position: top left;
  			background-size: cover;
  			background-repeat: no-repeat;
  			background-attachment: fixed;
  			height: 450px;
  			position: relative;
  			z-index: 1;
  		}
  		.latest_banner:before{
  			content: "";
  			position: absolute;
  			top: 0;
  			left: 0;
  			height: 100%;
  			width: 100%;
  			background-color: rgba(0, 0, 0, 0.8);
  			z-index: -1;
  		}
  		.latest_banner .latest_banner_text{
  			text-align: center;
  			padding-top: 170px;
  		}
  		.latest_banner_text h2{
  			font-family: 'Raleway', sans-serif;
  			font-weight: 600;
  			color: white;
  			font-size: 45px;
  			text-shadow: 10px 10px 15px black;
  		}
  		.latest_banner_text h5{
  			font-family: 'Lato', sans-serif;
  			font-weight: 500;
  			color: #42B8D4;
  			font-size: 18px;
  		}
  		.publish_banner_text{
  			position: absolute;
  			bottom: 0;
  			left: 100px;
  			border-radius: 10px 10px 0px 0px;
  			padding: 20px;
  			width: 300px;
  			background-color: #42B8D4
  		}
  		.publish_banner_text h3{
  			font-family: 'Lato', sans-serif;
  			font-weight: 800;
  			font-size: 20px;
  			color: white;
  		}
  		.publish_banner_text p{
  			font-family: 'Raleway', sans-serif;
  			font-weight: 500;
  			color: #1e1e1e;
  			font-size: 15px;
  			margin-top: 20px;
  		}
  		.carrer{
  			padding-top: 60px;
  			padding-bottom: 60px;
  		}
  		.carrer .career_content{
  			padding-top: 50px;
  		}
  		.career_content table th{
  			background-color: #42B8D4;
  			text-align: left;
  			padding-left: 10px;
  			height: 30px;
  			color: #1e1e1e;
  		}
  		.career_content table td{
  			height: 35px;
  			background-color: rgba(108, 131, 154, 0.3);
  			padding-left: 10px;
  			font-family: 'Lato', sans-serif;
  			font-weight: 500;
  			color: #1e1e1e;
  		}
  	</style>
  </head>

  <body>
  	<!--latest Banner start-->
  	<section>
  		<div class="latest_banner">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-12">
  						<div class="latest_banner_text">
  							<h2>Career</h2>
  							<h5>Job 0pportutnities</h5>
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="publish_banner_text">
  				<h3>Carrer</h3>
  				<h3>Opportunities</h3>
  				<p>
  					Internship, Consultancy, Part Time &amp; Full Time
  				</p>
  			</div>
  		</div>
  	</section>
  	<!--Latest Banner end-->


  	<!--publication start-->
  	<section>
  		<div class="carrer">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-12">
  						<div class="section_header">
  							<h2><span>|| </span>Available Jobs</h2>
  						</div>
  					</div>
  				</div>
  				<div class="career_content mb-5">
  					<div class="container">
  						<div class="row">
  							<div class="col-lg-12">
  								<table class="w-100">
  									<tr>
  										<th>Job Title </th>
  										<th>Type </th>
  										<th>Location </th>
  										<th>Salary </th>
  										<th>Deadline </th>
  										<th>Link</th>
  									</tr>
                    @foreach ($career_info as $career_inf)

  									<tr>
  										<td>{{ $career_inf->job_tatile }} </td>
  										<td>{{ $career_inf->Type }}</td>
  										<td>{{ $career_inf->Location }}</td>
  										<td>Tk.{{ $career_inf->Salary }}</td>
  										<td>{{ $career_inf->Deadline }}</td>
  										<td><a href="{{ $career_inf->link }}" target="_blank">View</a></td>
                    </tr>
                    @endforeach

  								</table>
  							</div>
  						</div>
  					</div>
  				</div>

  			</div>
  		</div>
  	</section>
  	<!--publication end-->


@endsection
