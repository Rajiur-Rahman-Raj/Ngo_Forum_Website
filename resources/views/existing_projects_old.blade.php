@extends('layouts.frontendmaster')

@section('frontend_main')

  <style>
		.latest_banner {
			background-image: url({{ asset('frontend_assets') }}/images/p-41.jpg);
			background-attachment: fixed;
			background-position: top left;
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			height: 350px;
			position: relative;
			z-index: 1;
		}

		.latest_banner:before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background-color: rgba(0, 0, 0, 0.6);
			z-index: -1;
		}

		.latest_banner .latest_banner_text {
			text-align: center;
			padding-top: 180px;
		}

		.latest_banner_text h2 {
			font-family: 'Fira Sans', sans-serif;
			font-weight: 600;
			color: white;
			font-size: 35px;
		}

		.hardware {
			padding-top: 20px;
			padding-bottom: 40px;
		}

		.hardware .hardware_headeing h3 {
			font-family: 'Oswald', sans-serif;
			font-size: 28px;
			font-weight: 600;
			color: #2d3436;
			margin-bottom: 10px;
			text-shadow: 10px 10px 15px gray;
		}

		.hardware .hardware_headeing h3 span {
			color: #0984e3;
			text-shadow: 10px 10px 15px gray;
			
		}

		.water{
			margin-bottom: 40px;
		}

		.water_img {
			text-align:center;
			padding-top:60px;
		}

		.water_img img{
		    width: 80%;
		    margin: auto;
		}

		.water_text h5 {
			font-family: 'Oswald', sans-serif;
			font-size: 22px;
			font-weight: 700;
			color: #009432;
			margin-bottom: 20px;
			transition:all .3s linear;
			text-align:justify;
			text-shadow: 10px 10px 15px gray;
		}
		.water_text h5:hover{
		    color: #2980b9;
		    text-shadow: 10px 10px 15px gray;
		}
		.water_text h5:hover span{
		    transition: .2s linear;
		}
		.water_text h5:hover span{
		    color: #2d3436;
		}


		.water_text h5 span {
			color: #181718;
			font-size:20px;
		}

		.water_text p {
			font-family: 'Rubik', sans-serif;
			font-size: 14px;
			color: #2d3436;
			text-align: justify;
			padding-left: 32px;
			margin-bottom: 10px;
		}

		.water_text a {
			display: inline-block;
			color: #009432;
			border-radius: 10px;
			font-family: 'Rubik', sans-serif;
			font-size: 14px;
			font-weight: 500;
			transition: all .2s linear;
			margin-top: 15px;
			margin-left: 32px;
			position: relative;
		}
		.water_text a:before{
		    content:"";
		    position:absolute;
		    bottom: -5px;
		    width: 0px;
		    left: 0;
		    height:2px;
		    background-color: #009432;
		    transition: .3s linear all;
		}

		.water_text a:hover::before {
			width:90px;
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
							<h2>Existing Projects</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Latest Banner end-->


	<!--link Part start-->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Existing Projects</li>
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
						    <h3>Overview of <span>Existing Projects </span>:</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--hardware part end-->


	<!-- Existing project part start-->

<?php $sl=1; ?>
  @foreach ($all_existing_project_infoes as  $all_existing_project_info)
    <section>
  		<div class="water">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-12">
  						<div class="water_text">
  						    <table>
  						        <tr>
  						            <td style="vertical-align:top;width: 20px"><h5><span style:"font-size:12px">{{$sl}}.</span></h5></td>
  						            <td style="padding-left:10px"><h5>{{ $all_existing_project_info->existing_title }}</h5></td>
  						        </tr>
  						    </table>
  							<p>
  								<b><i class="far fa-clock" style="width: 20px;margin :auto"></i> Project Period :</b> {{ $all_existing_project_info->existing_period }}
  							</p>
  							<p>
  								<b><i class="far fa-handshake" style="width: 20px;margin :auto"></i> Funding Agency :</b> {{ $all_existing_project_info->existing_donar }}
  							</p>
  							<a href="{{ url('existing/project/details') }}/{{ $all_existing_project_info->id }}"><i style="color:#f0932b" class="fas fa-bars"></i>  Read More</a>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<?php $sl++ ?>
  @endforeach

	<!--project part end-->


  @section('custom_js')
    <script src="{{ asset('frontend_assets') }}/js/custom.js"></script>
  @endsection

@endsection
