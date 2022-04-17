@extends('layouts.frontendwqtl')

@section('frontend_main')
  <style>
		/*Banner CSS start*/
		.banner_part {
            background-image: url(<?php echo url('frontend_assets/WQTL/images/banner1.jpg') ?>);
			background-position: top left;
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			height: 350px;
			position: relative;
			z-index: -1;
		}

		.banner_part:before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background: rgba(29, 67, 80, 0.8);
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, rgba(164, 57, 49, 0.8), rgba(29, 67, 80, 0.8));
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, rgba(164, 57, 49, 0.8), rgba(29, 67, 80, 0.8));
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}

		.banner_part .banner_text {
			text-align: center;
			padding-top: 170px;
		}

		.banner_part .banner_text h5 {
			font-family: 'Lato', sans-serif;
			font-weight: 700;
			font-size: 35px;
			color: white;
			margin-bottom: 20px;
			text-shadow: 10px 10px 15px black;
		}

		.banner_part .banner_text p {
			font-family: 'Raleway', sans-serif;
			font-weight: 500;
			font-size: 25px;
			color: white;
		}

		.banner_part .banner_text p span {
			color: white;
		}

		/*Banner CSS End*/


		/*Header link CSS start*/
		.header_link {
			padding-top: 20px;
			padding-bottom: 20px;
		}

		.header_link p {
			font-family: 'Open Sans', sans-serif;
			font-weight: 600;
			font-size: 15px;
			color: #1e1e1e;
		}

		.header_link p a {
			color: #670000;
			font-weight: 700;
			text-shadow: 10px 10px 15px black;

			transition: all .2s linear;
		}

		.header_link p a:hover {
			color: #1e1e1e;
			text-shadow: none;
		}

		.header_link p span {
			color: #149aba;
		}

		.header_link .header_icon span {
			margin-right: 20px;
			font-family: 'Open Sans', sans-serif;
			font-weight: 600;
			font-size: 15px;
			color: #1e1e1e;
		}

		.header_link .header_icon a {
			display: inline-block;
			margin-right: 10px;
		}

		.header_link .header_icon a i {
			height: 30px;
			width: 30px;
			line-height: 30px;
			text-align: center;
			background-color: #427ad4;
			border-radius: 50%;
			color: white;
			transition: all .2s linear;

		}

		.header_link .header_icon a i.youtube {
			background-color: #e01e1e;
		}

		.header_link .header_icon a i:hover {
			color: #427ad4;
			background: white;
			transform: scale(1.1);
		}

		.header_link .header_icon a i.youtube:hover {
			background-color: white;
			color: #e01e1e;
			transform: scale(1.1);
		}

		/*Header link CSS End*/

		/*About CSS Start*/
		.about .about_text img {
			margin-bottom: 20px;
			width: 400px;
		}

		.about {
			padding-bottom: 20px;
		}

		.about h3 {
			font-family: 'Oswald', sans-serif;
			font-weight: 500;
			font-size: 32px;
			color: #670000;
			margin-bottom: 20px;
		}

		.about p {
			font-family: 'Open Sans', sans-serif;
			font-weight: 600;
			font-size: 14px;
			color: #1e1e1e;
			text-align: justify;
		}

		.about_text h5 {
			font-family: 'Lato', sans-serif;
			font-weight: 600;
			font-size: 22px;
			color: #1e1e1e;
			margin-top: 20px;
			margin-bottom: 20px;
		}

		/*about css end*/

		/*Accordian CSS Start*/
		.about_contact {
			padding-top: 0px;
			padding-left: 30px;
		}

		.about_contact button {
			font-family: 'Oswald', sans-serif;
			font-size: 16px;
		}

		.about_contact h4 {
			font-family: 'Oswald', sans-serif;
			font-weight: 500;
			font-size: 20px;
			color: #1e1e1e;
			margin-bottom: 20px;
			border-left: 3px solid red;
			border-right: 3px solid red;
		}

		.accordion {
			background: #1D4350;
			background: -webkit-linear-gradient(to right, #A43931, #1D4350);
			background: linear-gradient(to right, #A43931, #1D4350);
			color: white;
			cursor: pointer;
			padding: 14px 20px;
			width: 100%;
			text-align: left;
			border: none;
			outline: none;
			margin-bottom: 5px;
			transition: 0.4s;
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			font-weight: 500;
			border-radius: 5px;
			box-shadow: 10px 10px 15px black;
			transition: all .2s linear;
		}

		.accordion:hover {
			box-shadow: none;
		}

		.extra {
			margin-top: 12px;
		}

		.new_color {
			background: #1D4350;
			background: -webkit-linear-gradient(to right, #A43931, #1D4350);
			background: linear-gradient(to right, #A43931, #1D4350);
		}

		.accordion i {
			font-size: 16px;
			margin-right: 10px;
			margin-left: 5px;
		}

		.active,
		.accordion:hover {
			background-color: #ccc;
		}

		.panel {
			padding-left: 18px;
			background-color: white;
			max-height: 0;
			overflow: hidden;
			transition: max-height 0.2s ease-out;
		}

		.panel h6 {
			font-family: 'Lato', sans-serif;
			font-weight: 600;
			font-size: 16px;
			color: #00051d;
			margin-top: 10px;
		}

		.panel span i {
			font-size: 16px;
			color: #3477e2;
			margin-right: 10px;
		}

		.panel span {
			font-family: 'Open Sans', sans-serif;
			font-weight: 600;
			font-size: 13px;
			color: #1e1e1e;
			margin-top: 10px;
		}

		.accordion:after {
			content: '\02795';
			/* Unicode character for "plus" sign (+) */
			font-size: 12px;
			color: #777;
			float: right;
			margin-left: 5px;
		}

		.active:after {
			content: "\2796";
			/* Unicode character for "minus" sign (-) */
		}

		/*Accordian CSS End*/

		/*Price part start*/
		.price_list {
			padding-top: 25px;
			padding-bottom: 50px;
		}

		.price_list h3 {
			font-family: 'Oswald', sans-serif;
			font-weight: 500;
			font-size: 26px;
			color: #670000;
			margin-bottom: 20px;
		}

		/*price part end*/

		/*Service part start*/
		.service {
			padding-bottom: 50px;
		}

		.service h3 {
			font-family: 'Oswald', sans-serif;
			font-weight: 500;
			font-size: 28px;
			color: #670000;
			margin-bottom: 20px;
		}

		.service_text p {
			font-family: 'Lato', sans-serif;
			font-weight: 500;
			font-size: 17px;
			margin-bottom: 5px;
			transition: all .2s linear;
			border-radius: 10px;
			display: inline;
		}


    .bottom_banner {
        background-image: url(<?php echo url('frontend_assets/WQTL/images/psi-vail-water.jpg') ?>);
        background-position: bottom left;
        background-size: cover;
        background-repeat: no-repeat;
        height: 400px;
    }

	</style>

  <!--banner part start-->
	<section>
		<div class="banner_part">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="banner_text">
							<h5>Water Quality Testing Lab</h5>
							<p>Cox Lab</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--banner part end-->


	<!--about part start-->
	<section>
		<div class="about">
			<div class="container">
                @foreach ($coxlab_infos as $coxlab_info)
                <div class="row">
                    <div class="col-lg-8">
                        <div class="about_text">
                            <div class="row">
                                <div class="col-lg-12">
                                </div>
                                <div class="col-lg-12 text-center">
                                    <img src="{{ asset('uploads/coxlab_image') }}/{{ $coxlab_info->logo }}" alt="coxlab image" class="img-fluid">
                                </div>
                                <div class="col-lg-12">
                                    <h5> {{ $coxlab_info->title }} </h5>
                                    <p>
                                        {{ $coxlab_info->description }}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about_contact">
                            <h4 class="text-center"> <i class="far fa-address-card" style="font-size: 22px;margin-right: 5px"></i> Contact Information</h4>

                            <button class="accordion"><i class="fas fa-vials"></i> CoxLab</button>
                            <div class="panel mb-2" style="background: #1f4037; background: -webkit-linear-gradient(to right, #99f2c8, #1f4037); background: linear-gradient(to right, #99f2c8, #1f4037); border-radius: 0px 0px 10px 10px;">
                                <h6>{{ $coxlab_info->name }}</h6><span>{{ $coxlab_info->designation }}</span>
                                <span class="d-block"><i class="fas fa-phone-volume text-dark"></i> {{ $coxlab_info->phone }}</span>
                                <span><i class="far fa-envelope text-dark"></i> {{ $coxlab_info->email }}</span>
                                <span class="d-block pb-2"><i class="fas fa-map-marker-alt text-dark"></i>
                                    {{ $coxlab_info->location }}
                                <p></p>
                            </div>

                            <button class="accordion"><i class="fas fa-user-tag"></i> Focal Person</button>
                            <div class="panel" style="background: #1f4037; background: -webkit-linear-gradient(to right, #99f2c8, #1f4037); background: linear-gradient(to right, #99f2c8, #1f4037); border-radius: 0px 0px 10px 10px;">
                                <h6>{{ $coxlab_info->focal_name }}</h6><span>{{ $coxlab_info->focal_designation }}</span>
                                <span class="d-block"><i class="fas fa-phone-volume text-dark"></i>{{ $coxlab_info->focal_phone }}</span>
                                <span><i class="far fa-envelope text-dark"></i>{{ $coxlab_info->focal_email }}</span>
                                <span class="d-block pb-2"><i class="fas fa-map-marker-alt text-dark"></i>
                                    {{ $coxlab_info->focal_location }}
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
			</div>
		</div>
	</section>
	<!--about part end-->

	<!--Price part start-->
	<section>
		<div class="price_list">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="list_1">
							<button class="accordion text-center"><i class="fas fa-flask"></i>Parameter wise test rate</button>
							<div class="panel">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>SL No.</th>
											<th>Parameters</th>
                                            <th>Method</th>
											<th>Unit Cost (BDT)</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($coxlab_test_rates as $coxlab_test_rate)
										<tr>
											<th style="width: 15%;">{{ $coxlab_test_rate->serial_number }}</th>
											<td style="width: 25%">{{ $coxlab_test_rate->parameters }}</td>
											<td style="width: 30%;">{{ $coxlab_test_rate->method }}</td>
											<td style="width: 30%">{{ $coxlab_test_rate->cost }}</td>
                                        </tr>
                                        @endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Price part end-->

	<!--Service part start-->
	<section>
		<div class="service">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3>Other Services :</h3>
					</div>
					<div class="col-lg-8">

						<div class="service_text">
              @foreach ($coxlab_other_services as $coxlab_other_services)
							<i class="fas fa-bars mb-2" style="color:#A43931"></i> {!! $coxlab_other_services->service !!} <br>

            @endforeach
            </div>
					</div>
					<div class="col-lg-4 text-center">
						<img src="{{asset('frontend_assets/WQTL/images/water_drop_transparent.png')}}" alt="water_drop" class="img-fluid w-75">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--service part end-->



<!--bottom banner end-->
@endsection
