@extends('layouts.frontendmaster')

@section('frontend_main')
  <style>
  		.contact_banner {
  			background-image: url({{ asset('frontend_assets') }}/images/banner-2.jpg);
  			background-position: top left;
  			background-size: cover;
  			background-repeat: no-repeat;
  			background-attachment: fixed;
  			height: 300px;
  			position: relative;
  			z-index: 1;
  		}

  		.contact_banner:before {
  			content: "";
  			position: absolute;
  			top: 0;
  			left: 0;
  			height: 100%;
  			width: 100%;
  			background-color: rgba(0, 0, 0, 0.8);
  			z-index: -1;
  		}

  		.contact_banner .contact_banner_text {
  			text-align: center;
  			padding-top: 160px;
  		}

  		.contact_banner_text h2 {
  			font-family: 'Oswald', sans-serif;
  			font-weight: 500;
  			color: white;
  			font-size: 40px;
  			text-shadow: 10px 10px 15px black;
  		}

  		.contact_banner_text h5 {
  			font-family: 'Open Sans', sans-serif;
  			font-weight: 500;
  			color: #42B8D4;
  			font-size: 16px;
  			margin-top: 10px;

  		}

  		/*cells css start*/
  		.card-header {
  			background: #544a7d;
  			/* fallback for old browsers */
  			background: -webkit-linear-gradient(to right, #ffd452, #544a7d);
  			/* Chrome 10-25, Safari 5.1-6 */
  			background: linear-gradient(to right, #ffd452, #544a7d);
  			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  			padding: 20px 0px;
  		}

  		.card-header h3 {
  			font-family: 'Oswald', sans-serif;
  			font-size: 23px;
  			margin-bottom: 5px;
  			color: white;
  			text-shadow: 10px 10px 15px black
  		}

  		.card-header h5 {
  			font-family: 'Oswald', sans-serif;
  			font-size: 16px;
  			font-weight: 400;
  			color: white;
  			text-shadow: 10px 10px 15px black
  		}

  		.card-body .row {
  			border-bottom: 1px solid rgba(255, 0, 0, 0.4);
  		}

  		.card-body h4 {
  			font-family: 'Oswald', sans-serif;
  			font-size: 18px;
  			font-weight: 400;
  			margin-bottom: 5px;
  			border-bottom: 1px solid gray;
  			display: inline-block;
  			color: #273c75;
  			text-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3)

  		}

  		.card-body h3 {
  			font-family: 'Oswald', sans-serif;
  			font-size: 20px;
  			font-weight: 400;
  			margin-bottom: 5px;
  		}

  		.card-body p {
  			font-family: 'Open Sans', sans-serif;
  			font-size: 14px;
  		}


  		.wing h3{
  			color: white;
  			text-shadow: 10px 10px 15px black
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
  							<h2>Departments / Cells / Units</h2>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

  	<section>
  		<div class="department">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-12">
  						<div class="card mt-5 mb-5">
  							<div class="card-header text-center">
  								<h3>Mr. S.M.A. Rashid </h3>
  								<h5>Executive Director</h5>
  							</div>
  							<div class="card-body">


  								<div class="row">
                  @foreach ($CellsDepartments_infos as $CellsDepartments_info)
  									<div class="col-lg-6 border-bottom pl-5 pt-4 pb-4" style="background: rgba(178, 190, 195, 0.6)">
  										<h4>{{ $CellsDepartments_info->position_name }}</h4>
  										<h3>{{ $CellsDepartments_info->name }}</h3>
  										<p>{{ $CellsDepartments_info->position }}</p>
  										<p><i class="far fa-envelope" style="margin-right: 5px;"></i>E-mail :{{ $CellsDepartments_info->email }}</p>
  									</div>
                  @endforeach
                  </div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

@endsection
