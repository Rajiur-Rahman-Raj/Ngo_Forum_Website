@extends('layouts.frontendmaster')

@section('frontend_main')
  <style>
		.contact_banner{
			background-image: url({{ asset('frontend_assets') }}/images/regional2.jpg);
			background-position: top left;
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			height: 300px;
			position: relative;
			z-index: 1;
		}
		.contact_banner:before{
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background-color: rgba(0, 0, 0, 0.6);
			z-index: -1;
		}
		.contact_banner .contact_banner_text{
			text-align: center;
			padding-top: 160px;
		}
		.contact_banner_text h2{
			font-family: 'Oswald', sans-serif;
			font-weight: 500;
			color: white;
			font-size: 40px;
			text-shadow: 10px 10px 15px black;
		}
		.contact_banner_text h5{
			font-family: 'Open Sans', sans-serif;
			font-weight: 500;
			color: #42B8D4;
			font-size: 16px;
			margin-top: 10px;
		}
		.dhaka_office{
			padding-top: 60px;
			padding-bottom: 60px;
		}
		.dhaka_office h2{
			font-family: 'Raleway', sans-serif;
			font-weight: 700;
			color: #1e1e1e;
			font-size: 30px;
		}
		.dhaka_office h5{
			font-family: 'Oswald', sans-serif;
			font-weight: 500;
			color: #2181d3;
			font-size: 35px;
			margin-bottom: 25px;
			margin-top: 30px;
		}
		.dhaka_office span{
			font-family: 'Raleway', sans-serif;
			font-weight: 500;
			font-size: 14px;
			color: #1e1e1e;
			margin-bottom: 5px;
			display: block;
		}
		.dhaka_office p{
			font-family: 'Oswald', sans-serif;
			font-weight: 700;
			font-size: 16px;
			color: #2884d3;
			margin: 20px 0px;
		}
		.dhaka_office a{
			display: inline-block;
			background-color: #42B8D4;
			padding: 8px 20px;
			font-family: 'Lato', sans-serif;
			font-weight: 600;
			font-size: 16px;
			color: #1e1e1e;
			margin-top: 25px;
			border-radius: 5px;
			margin-right: 15px;
			transition: all .3s linear;
		}
		.dhaka_office a:hover{
			box-shadow: 5px 5px 15px black;
		}
		.map{
			margin-bottom: -6px;
		}
		.dhaka_office_img{
			padding: 0px 50px;
		}
		.office_building{
			text-align: center;
			padding: 20px;
			box-sizing: border-box;
		}
		.office_building img{
			height: 460px;
			widows: 350px;
		}
	</style>
</head>

<body>

	<section>
		<div class="contact_banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="contact_banner_text">
							<h2>NGO Forum for Public Health</h2>
							<h5>Contact Us</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="dhaka_office">
			<div class="container">
				<div class="row">
          @foreach ($contact_infos as $contact_info)
					<div class="col-lg-6">
						<div class="dhaka_office_img">
							<div class="office_building">
								<img src="{{ asset('uploads/contact_image') }}/{{ $contact_info->image }}" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="col-lg-6">

              <div class="dhaka_office_text">
							<h5>Central Office</h5>
							<h2></h2>
							<span>
								{{ $contact_info->office_location }}
							</span>
							<span>
								Phone: {{ $contact_info->office_phone }}
							</span>
							<span>
								Fax: {{ $contact_info->office_fax }}
							</span>
							<span>
								E-mail: {{ $contact_info->office_email }}
							</span>
							<span>
								Website: {{ $contact_info->office_website }}
							</span>
							<p>
								Name of Designated Officer as per RTI Act, 2009: <br>@if($contact_info->name != null){{ $contact_info->name }},@endif<br>
								{{ $contact_info->designation }}
							</p>
							<span>
								Phone: {{ $contact_info->phone }}
							</span>
							<span>
								Fax: {{ $contact_info->fax }}
							</span>
							<span>
								E-mail: {{ $contact_info->email }}
							</span>

							<a href="{{ url('departments') }}">Cells Department</a>
							<a href="{{ url('regional_office') }}">Regional Offices</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="map">
			<iframe src="{{ $contact_info->map_link }}" width="100%" height="420px" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
    @endforeach
	</section>
@endsection
