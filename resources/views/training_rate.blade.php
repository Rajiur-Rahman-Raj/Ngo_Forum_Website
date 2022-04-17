@extends('layouts.frontendmaster')

@section('header_css')
<!--Banner Part start-->
  <style>
		/*Banner css start*/
		.banner_part {
		  background-image: url({{ asset('frontend_assets/Training') }}/images/training_rate.jpg);
			background-position: center;
			background-size: cover;
			background-repeat: no-repeat;
			height: 350px;
			position: relative;
			z-index: 1;
		}

		.banner_part:before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background: rgba(0, 0, 0, 0.3);
			z-index: -1;
		}

		.banner_part .banner_text {
			padding-top: 180px;
			text-align: center;
		}

		.banner_part .banner_text h1 {
			font-family: 'Oswald', sans-serif;
			font-weight: 400;
			color: #e7e7e7;
			font-size: 35px;
			margin-bottom: 5px;
			letter-spacing: 2px;
			text-shadow: 10px 10px 15px black;
		}

		.banner_part .banner_text h1 span {
			color: #55AAF2
		}

		.banner_part .banner_text p {
			color: white;
			margin-top: 15px;
		}

		.banner_part .banner_text p span a {
			color: #55AAF2;
			padding: 0px 10px;
			font-family: 'Lato', sans-serif;
			font-weight: 400;
			font-size: 16px;
			cursor: pointer;
		}

		/*Banner css end*/

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
			color: #1e1e1e;
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

		/*training rate css start*/
		.training_rate {
			padding-top: 0px;
		}

		.training_rate h3 {
			font-family: 'Lato', sans-serif;
			font-weight: 700;
			font-size: 35px;
			color: #303952;
		}

		.training_rate_dhaka h4 {
			background: #108dc7;
			background: -webkit-linear-gradient(to left, #71B280, #134E5E);
			background: linear-gradient(to left, #71B280, #134E5E);
			border-radius: 5px;
			padding: 12px 0px;
			color: white;
			font-family: 'Lato', sans-serif;
			font-weight: 600;
			font-size: 22px;
		}

		.dhaka_rates h5 {
			font-family: 'Lato', sans-serif;
			font-weight: 600;
			font-size: 18px;
		}

		.dhaka_rates p {
			font-family: 'Open Sans', sans-serif;
			font-weight: 600;
			font-size: 14px;
			color: #ecf0f1;
		}

		.training_rate_barisal h4 {
			background: #114357;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #F29492, #114357);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #F29492, #114357);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			border-radius: 5px;
			padding: 12px 0px;
			color: white;
			font-family: 'Lato', sans-serif;
			font-weight: 700;
			font-size: 25px;

		}

		.training_rate_bogra h4 {
			background: #3D7EAA;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #FFE47A, #3D7EAA);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #FFE47A, #3D7EAA);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			border-radius: 5px;
			padding: 12px 0px;
			color: white;
			font-family: 'Lato', sans-serif;
			font-weight: 700;
			font-size: 25px;
		}

		/*training rate css end*/

		/*catering rates start*/
		.catering_service {
			padding-top: 60px;
			padding-bottom: 60px;
		}

		.catering_service h3 {
			font-family: 'Oswald', sans-serif;
			font-weight: 500;
			font-size: 28px;
			color: #303952;
		}

		.option_a h4 {
		background: #403A3E;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #BE5869, #403A3E);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #BE5869, #403A3E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

			border-radius: 5px;
			padding: 12px 0px;
			color: white;
			font-family: 'Lato', sans-serif;
			font-weight: 700;
			font-size: 22px;
		}

		.option_a i.title {
			margin-left: 20px;
			margin-right: 20px;
		}

		.option_b h4 {
			background: #0B486B;
			background: -webkit-linear-gradient(to right, #F56217, #0B486B);
			background: linear-gradient(to right, #F56217, #0B486B);
			border-radius: 5px;
			padding: 12px 0px;
			color: white;
			font-family: 'Lato', sans-serif;
			font-weight: 700;
			font-size: 20px;
		}

		.option_b i.title {
			margin-left: 20px;
			margin-right: 20px;
		}

		.option_c h4 {
			background: #654ea3;
			background: -webkit-linear-gradient(to right, #eaafc8, #654ea3);
			background: linear-gradient(to right, #eaafc8, #654ea3);
			border-radius: 5px;
			padding: 12px 0px;
			color: white;
			font-family: 'Lato', sans-serif;
			font-weight: 700;
			font-size: 25px;
		}

		/*catering rates end*/

		/*Modal css start*/
		.modal_text span {
			font-family: 'Lato', sans-serif;
			font-weight: 700;
			font-size: 17px;
		}

		.modal_text p {
			font-family: 'Lato', sans-serif;
			font-weight: 500;
			font-size: 16px;
		}

		/*Modal css end*/

</style>
@endsection

@section('frontend_main')
  

<section>
  <div class="banner_part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner_text">
            <h1>Facilities &amp; Charges</h1>
            <p><span><a href="{{url('training')}}">Home</a> </span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Banner Part End-->


<!--link part start-->
<section>
  <div class="header_link">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <p><span><a href="#">Home</a> </span><span> | </span> <a href="#">Training Rates</a></p>
        </div>
        <div class="col-lg-4 text-center">
            
        </div>
        <div class="col-lg-4 text-right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong" style="font-family: 'Fira Sans', sans-serif; font-size:14px;text-shadow: 10px 10px 15px #1e1e1e">
				Terms &amp; Conditions
			</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!--link part end-->

<!--training rate start-->
<section>
  <div class="training_rate">
    <div class="container">
      @foreach ($center_infos as $center_info)

      <div class="row mt-4">
        <div class="col-lg-12">
          <div class="training_rate_dhaka">
            <div class="card text-white" style="background: #134E5E;background: -webkit-linear-gradient(to right, #71B280, #134E5E);background: linear-gradient(to right, #71B280, #134E5E);">
              <div class="card-header text-center">
                {{-- <h4>{{ App\Center::find($training_rate_info->center_category_id)->region }}</h4> --}}
                <h4 style="text-shadow: 10px 10px 15px #1e1e1e">
                    @if($center_info->region == "Barishal" || $center_info->region == "Bogura")
                       Regional Training Centre
                    @else
                    {{ $center_info->region }}
                    @endif
                </h4>
                {{-- <p class="pt-2">({{ App\Center::find($training_rate_info->center_category_id)->address }})</p> --}}
                <p class="pt-2" style="font-family: 'Fira Sans', sans-serif; font-size:14px;text-shadow: 10px 10px 15px #1e1e1e">
                    @if($center_info->region == "Barishal")
                        ( Barisal, Chittagong, Dinajpur, Faridpur, Jessore, Rajshahi and Sylhet )
                    @elseif($center_info->region == "Bogura")
                        ( Bogra, Comilla, Khulna, Mymensingh, Tangail and Rangpur )
                    @else
                        {{ $center_info->address }}
                    @endif
                </p>
              </div>
              <div class="card-body">
                <div class="dhaka_rates">
                  <div class="row border-info border-bottom pb-2" style="background: #134E5E;background: -webkit-linear-gradient(to right, #71B280, #134E5E);background: linear-gradient(to right, #71B280, #134E5E);">
                    <div class="col-lg-2 pt-2 pb-2">
                      <h5 style="text-shadow: 10px 10px 15px #1e1e1e">Categories</h5>
                    </div>
                    <div class="col-lg-4 pt-2 pb-2">
                      <h5 style="text-shadow: 10px 10px 15px #1e1e1e">Description</h5>
                    </div>
                    <div class="col-lg-2 pt-2 pb-2">
                      <h5 style="text-shadow: 10px 10px 15px #1e1e1e">Capacity</h5>
                    </div>
                    <div class="col-lg-4 pt-2 pb-2">
                      <h5 style="display:inline-block; text-shadow: 10px 10px 15px #1e1e1e">Rates</h5>
                      <span style="font-size: 13px;text-shadow: 10px 10px 15px #1e1e1e"> (Without VAT, TAX &amp; Service Charge)</span>
                    </div>
                  </div>
                  @php
                    $center_ids = App\Centerdetail::where('center_category_id', $center_info->id)->get();
                  @endphp
                  @foreach ($center_ids as $center_id)
                    <div class="row pt-2 border-info border-bottom pb-2">
                      <div class="col-lg-2 pt-2 pb-2">
                        <h5 style="text-shadow: 10px 10px 15px #1e1e1e">{{ $center_id->category_name }} :</h5>
                      </div>
                      <div class="col-lg-4">
                        <div class="row">
                          <div class="col-lg-12 pt-2 pb-2">
                            <p>
                              {!! $center_id->description !!}
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="row">
                          <div class="col-lg-12 pt-2 pb-2">
                            <p>{!! $center_id->capacity !!}</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="row">
                          <div class="col-lg-12 pt-2 pb-2">
                            <p>
                              {!! $center_id->rates !!}
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
<!--training rate end-->

<!--catering part start-->
<section>
		<div class="catering_service">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3>Rates of Catering Services :</h3>
					</div>
				</div>
        @foreach ($all_service_infos as $all_service_info)
				<div class="row mt-4">
					<div class="col-lg-12">
						<div class="option_a">
							<div class="card" style="background: #403A3E;background: -webkit-linear-gradient(to right, #BE5869, #403A3E);background: linear-gradient(to right, #BE5869, #403A3E);">
								<div class="card-header text-center">
									<h4 style="text-shadow: 10px 10px 15px #1e1e1e"> <i class="fas fa-utensils title"></i>{{ $all_service_info->category_name }}<i class="fas fa-pizza-slice title"></i></h4>
									<p class="pt-2" style="color: white; font-family: 'Fira Sans', sans-serif; font-size:14px;text-shadow: 10px 10px 15px #1e1e1e">Food service- per person / per day</p>
								</div>
								<div class="card-body">
									<div class="dhaka_rates text-white">
									    @if($all_service_info->category_name == "Option C")
									        <h5 class="text-center pb-3 pt-3" style="font-size:17px; text-shadow: 10px 10px 15px #1e1e1e">The clients may have authority to review or customize the food cost/ budget as per their provision in the event. </h5>
									    @else
									    <div class="row border-info border-bottom pb-3">
											<div class="col-lg-3 pt-3 pl-5">
												<h5 style="text-shadow: 10px 10px 15px #1e1e1e">Meals</h5>
											</div>
											<div class="col-lg-3">
												<h5 style="text-shadow: 10px 10px 15px #1e1e1e">Rates</h5>
												<span style="font-size: 13px;text-shadow: 10px 10px 15px #1e1e1e">(Without VAT, TAX &amp; Service Charge)</span>
											</div>
											<div class="col-lg-6 pt-3">
												<h5 style="text-shadow: 10px 10px 15px #1e1e1e">Food Item</h5>
											</div>
										</div>
									    @endif
										
                    @php
                    $all_service_values = App\Allservice::where('service_category_id',$all_service_info->id)->get();
                    @endphp
                    @foreach ($all_service_values as $all_service_value)
                        @if($all_service_info->category_name == "Option C")
                        
                        @else
                        
										<div class="row border-info border-bottom pb-3">
											<div class="col-lg-3 pt-2 pl-5">
												<h5 style="font-size:16px; text-shadow: 10px 10px 15px #1e1e1e;">{{ $all_service_value->meals }} :</h5>
											</div>
											<div class="col-lg-3">
												<div class="row">
													<div class="col-lg-12 pt-2">
														<p>
															{{ $all_service_value->rates }}
														</p>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="row">
													<div class="col-lg-12 pt-2">
														<p>
															{{ $all_service_value->food }}
														</p>
													</div>
												</div>
											</div>
										</div>
						@endif
                  @endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
      @endforeach
			</div>
		</div>
	</section>
<!--catering part end-->
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Terms &amp; Conditions</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="modal_text">
						<p><span>1.</span> Venue may be engaged from 9.00 am to 5.30 pm during the programme period. Extra charges will be added hourly basis from after 5-30 pm.</p>
						<p><span>1.</span> VAT and TAX will be applicable as per the rules of the government</p>
						<p><span>2.</span> 15% service charge will be included on the total cost</p>
						<p><span>3.</span> 50% of the cost has to be paid in advance</p>
						<p><span>4.</span> Generator services for emergency support</p>
						<p><span>5.</span> Food cost will be fixed on package item. Additional bill will be added for extra item/amount</p>
						<p><span>6.</span> Accommodation cost will be payable based on the number you have booked;</p>
						<p><span>7.</span> Cancellation of booking should be informed three days before starting of the event</p>
						<p><span>8.</span> Check-out time 12:00 pm </p>
						<p><span>9.</span> Bills for other costs will be presented at actual </p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
@endsection
