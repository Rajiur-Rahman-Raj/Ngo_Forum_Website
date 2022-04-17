@extends('layouts.frontendmaster')
@section('frontend_main')

  <style>
		.latest_banner {
			background-image: url({{ asset('frontend_assets/images/p-24.jpg') }});
			background-attachment: fixed;
			background-position: center;
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
			padding-top: 190px;
		}

		.latest_banner_text h2 {
			font-family: 'Raleway', sans-serif;
			font-weight: 600;
			color: white;
			font-size: 38px;
		}

		.latest_banner_text h5 {
			font-family: 'Lato', sans-serif;
			font-weight: 500;
			color: #42B8D4;
			font-size: 20px;
		}

		.publish_banner_text {
			position: absolute;
			bottom: 0;
			left: 100px;
			border-radius: 10px 10px 0px 0px;
			padding: 20px;
			width: 300px;
			background-color: #42B8D4
		}

		.publish_banner_text h3 {
			font-family: 'Lato', sans-serif;
			font-weight: 800;
			font-size: 20px;
			color: white;
		}

		.publish_banner_text p {
			font-family: 'Raleway', sans-serif;
			font-weight: 500;
			color: #1e1e1e;
			font-size: 15px;
			margin-top: 20px;
		}


		/*hardware css start*/
		.hardware {
			padding-top: 30px;
			padding-bottom: 40px;
		}

		.hardware .hardware_headeing h3 {
			font-family: 'Oswald', sans-serif;
			font-size: 28px;
			font-weight: 500;
			color: #009432;
			transition: all .3s linear;

		}
		.hardware .hardware_headeing h3:hover{
		    color: #17a2b8;
		}

		.hardware .hardware_headeing h3 span {
			color: #0984e3;
		}

		.hardware .hardware_text p {
			font-family: 'Rubik', sans-serif;
			font-size: 16px;
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
			overflow: hidden;
			height: 380px;
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
			padding-top: 150px;
			text-align: center;
		}

		.water_img_overlay i {
			color: ghostwhite;
			font-size: 40px;
		}

		.water_img:hover .water_img_overlay {
			opacity: 1;
		}

		.water_text {
			padding-top: 0px;
		}

		.water_text h5 {
			font-family: 'Oswald', sans-serif;
			font-size: 25px;
			font-weight: 700;
			color: #2d3436;
			margin-bottom: 20px;
		}

		.water_text h5 span {
			color: #0984e3
		}

		.water_text p {
			font-family: 'Fira Sans Condensed', sans-serif;
			font-size: 16px;
			color: #222f3e;
			text-align: justify;
			margin-bottom: 30px;
			margin-top: 10px;
		}

		.water_text a {
		    font-family: 'Oswald', sans-serif;
			display: inline-block;
			padding-top: 5px;
			padding-bottom: 5px;
			padding-left: 10px;
			padding-right: 10px;
			background-color: transparent;
			color: #17a2b8;
			border-radius: 5px;
			font-size: 14px;
			transition: all .2s linear;
			border: 2px solid #17a2b8;
			margin-top: 30px;
		}
		.water_text a i{
		    color: #17a2b8;
		    font-size: 14px;
		    transition: all .2s linear;
		}

		.water_text a:hover {
			box-shadow: 10px 10px 15px gray;
			background: #17a2b8;
			color: white;
		}
		.water_text a:hover i{
		    color:white;
		}

		.water_text i{
			color: #0984e3;
			margin-right: 5px;
			font-size: 18px;
		}

		.water_text ul li{
			margin-bottom: 10px;
		}

		.water_text ul li span{
			font-family: 'Rubik', sans-serif;
			font-size: 16px;
			color: #2d3436;
			text-align: justify;
		}


		/*water css end*/

		.card-header{
			background: rgba(52, 152, 219, 0.3)
		}

		.card-body a{
			font-family: 'Fira Sans Condensed', sans-serif;
			display: block;
			margin-bottom: 10px;
			font-size: 14px;
			font-weight: 500;
			color: #2d3436;
			text-align: justify;
			transition: all .2s linear;
			text-shadow: 5px 5px 15px rgba(0, 0, 0, 0.8);
		}

		.card-body a:hover{
			text-shadow: none;
			color: #17a2b8;
		}

		.card-header h5{
			font-family: 'Oswald', sans-serif;
			font-size: 18px;
			font-weight: 500;
			color: #2d3436;

		}
		
		.links .card-header{
			background: rgba(0, 148, 50, 0.45);
		}
		.links .card-body{
		    background: rgba(0, 148, 50, 0.1);
		}
		.document .card-header{
			background: rgba(255, 159, 67, 0.8);
		}
		.document .card-body{
		    background: rgba(255, 159, 67, 0.1);
		}
		.person .card-header{
			background: rgba(217, 128, 250, 0.45)
		}
		.person .card-body{
		    background: rgba(217, 128, 250, 0.1)
		}
		.person .card-body h3{
			font-family: 'Oswald', sans-serif;
			font-size: 20px;
			margin-bottom: 10px;
		}
		.person .card-body p{
			font-family: 'Fira Sans Condensed', sans-serif;
			font-size: 15px;
		}
		
		.box-heading{
		    background: #60a3bc;
		    padding-top: 10px;
		    padding-bottom: 10px;
		    padding-left: 10px;
		    color: ghostwhite;
		    border-bottom: 1px solid ghostwhite;
		    text-shadow: 5px 5px 15px black;
		    border-radius: 3px;
		}
	    .box-heading i{
	        color: ghostwhite;
	        font-size: 15px;
	    }
	    .box-text{
	        background:rgba(96, 163, 188, 0.4);
	        padding-top: 10px;
		    padding-bottom: 10px;
		    padding-left: 10px;
		    border-bottom: 1px solid ghostwhite;
		    font-size: 15px;
		    font-weight: 600;
		    transition: all .3s linear;
	    }
	    .box-text:hover {
	        text-shadow: 10px 10px 15px black;
	    }

	</style>
  <!--latest Banner start-->
  	<section>
  		<div class="latest_banner">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-12">
  						<div class="latest_banner_text">
  							<h2>Project Details</h2>
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
  			<li class="breadcrumb-item"><a href="#">Home</a></li>
  			<li class="breadcrumb-item active" aria-current="page">Existing Project Details</li>
  		</ol>
  	</nav>
  	
  	<!--link part end-->
    <section>
		<div class="hardware">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="hardware_headeing">
						    <h3>
							    <table>
							        <tr>
							            <td style="display: inline-block;vertical-align: top; padding-right: 10px;"><i style="color:#e67e22 " class="fas fa-bars"></i></td>
							            <td> {{ $single_existing_project_details->existing_title }}</td>
							        </tr>
							    </table>
							</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  	<!--hardware part start-->
    <section>
		<div class="water mb-4">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
                        @if ($single_existing_project_details->existing_details_image != null)
                        <div class="water_img mb-5">
  							<img src="{{ asset('uploads/existing_project_img') }}/{{ $single_existing_project_details->existing_details_image }}" alt="" class="img-fluid w-100">
  							<div class="water_img_overlay">
  								<a class="venobox" href="{{ asset('uploads/existing_project_img') }}/{{ $single_existing_project_details->existing_details_image }}"><i class="fas fa-search-plus"></i></a>
  							</div>
  						</div>
                        @endif
                        
						<div class="water_text">
						    
						    @if($single_existing_project_details->existing_donar != null)
						    <div class="row">
					           <div class="col-md-3 box-heading">
					               <i class="fas fa-handshake"></i><b>Funding Agency :</b>
					           </div>
					           <div class="col-md-9 box-text">
					                {{ $single_existing_project_details->existing_donar }}
					           </div>
						    </div>
						    @endif
						    
						    @if($single_existing_project_details->existing_period != null)
						    <div class="row">
					           <div class="col-md-3 box-heading">
					              <i class="fas fa-history"></i><b>Proejct Period :</b>
					           </div>
					           <div class="col-md-9 box-text">
					                {{ $single_existing_project_details->existing_period }}
					           </div>
						    </div>
						    @endif
						    
						    @if($single_existing_project_details->total_baget != null)
						    <div class="row">
					           <div class="col-md-3 box-heading">
					               <i class="fas fa-hand-holding-usd"></i><b>Total Budget :</b>
					           </div>
					           <div class="col-md-9 box-text">
					                {{ $single_existing_project_details->total_baget }}
					           </div>
						    </div>
						    @endif
						    
						    @if($single_existing_project_details->location != null)
						    <div class="row">
					           <div class="col-md-3 box-heading">
					               <i class="fas fa-map-marker-alt"></i> <b> Location : </b> 
					           </div>
					           <div class="col-md-9 box-text">
					                {{ $single_existing_project_details->location }}
					           </div>
						    </div>
						    @endif
						    
							<div class="row mt-5">
							    <div class="col-md-12" style="font-size:18px">
							        <i style="color:#e67e22 " class="fas fa-bars"></i><b style="color:#009432"> Project Objective & Goal :</b>
							    </div>
							    <div class="col-md-12">
							        <p>
							            {!! $single_existing_project_details->description_one !!}
							        </p>
							    </div>
							    <div class="col-md-12">
                                     {!! $single_existing_project_details->existing_description !!}
                                 </div>
							</div>
							<a href="{{ url('existing_projects') }}"><i class="fas fa-arrow-left"></i> Back to Existing Projects</a>
						</div>
					</div>
					
					<div class="col-lg-4">
						<div class="row">
						    
						    @if($single_existing_project_details->focal_name != null)
    						<div class="col-lg-12">
    							<div class="card person">
    								<div class="card-header">
    									<h5>Focal Person</h5>
    								</div>
    								<div class="card-body">
    									<ol style="list-style: disc; padding-left: 7px;">
    										<h3>{{ $single_existing_project_details->focal_name }}</h3>
    										<p>{{ $single_existing_project_details->focal_designation }}</p>
    										<p>NGO Forum for Public Health</p>
    										<p><i class="fas fa-phone-alt"></i> {{ $single_existing_project_details->focal_phone }}</p>
    										<p><i class="far fa-envelope"></i> {{ $single_existing_project_details->focal_email }}</p>
    									</ol>
    								</div>
    							</div>
    						</div>
    						@endif
    						
                            @if($single_existing_project_details->related_link != null)
                            <div class="col-lg-12 mb-5">
              					<div class="card links">
              						<div class="card-header">
              							<h5>Related Links :</h5>
              						</div>
              						<div class="card-body">
              							<ol style="list-style: disc; padding-left: 7px;">
              								{!! $single_existing_project_details->related_link !!}
              							</ol>
              						</div>
              					</div>
              				</div>
                            @endif
    
                            @if($single_existing_project_details->related_document != null)
                            <div class="col-lg-12 mb-5">
            					<div class="card document">
            						<div class="card-header">
            							<h5>Related Documents :</h5>
            						</div>
            						<div class="card-body">
            							<ol style="list-style: disc; padding-left: 7px;">
            								{!! $single_existing_project_details->related_document !!}
            							</ol>
            						</div>
            					</div>
                            </div>
                            @endif
                            
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
  	<!--hardware part end-->



@endsection
