@extends('layouts.frontendabout')

@section('frontend_main')
  	<style>
  		/*banner css start*/
  		.banner_part {
  			background-image: url({{ asset('frontend_assets/about') }}/images/regional4.jpg);
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
  			height: 400px;
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
  			padding-top: 220px;
  		}

  		.banner_text h3 {
  			font-family: 'Roboto', sans-serif;
  			font-size: 38px;
  			font-weight: 600;
  			color: #e7e7e7;
  			margin-bottom: 10px;
  		}

  		.banner_text p {
  			font-family: 'Lato', sans-serif;
  			font-size: 16px;
  			font-weight: 600;
  			color: ghostwhite;
  		}

  		.banner_text p span {
  			color: #00AEEF;
  		}

  		/*banner css end*/

  		/*section header css start*/
  		.section_heading {
  			padding-top: 20px;
  			padding-bottom: 10px;
  		}

  		.section_heading h3 {
  			font-family: 'Lobster', cursive;
  			color: #1e1e1e;
  			font-size: 28px;
  		}

  		/*section header css end*/

  		/*programme css start*/
  		.programme_body {
  			padding-top: 50px;
  			padding-bottom: 50px;
  		}

  		.programme_icon {
  			/*			background-color: #cecece;*/
  			background: #F3904F;
  			/* fallback for old browsers */
  			background: -webkit-linear-gradient(to right, #3B4371, #F3904F);
  			/* Chrome 10-25, Safari 5.1-6 */
  			background: linear-gradient(to right, #3B4371, #F3904F);
  			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  			padding-top: 20px;
  			padding-bottom: 20px;
  			border-radius: 10px;
  			box-shadow: 10px 10px 20px #1e1e1e;
  			padding-left: 10px;
  			padding-right: 10px;
  		}

  		.programme_icon i {
  			font-size: 100px;
  			color: floralwhite;
  			margin-bottom: 20px;
  		}

  		.programme_icon h5 {
  			font-family: 'Rubik', sans-serif;
  			color: floralwhite;
  		}

  		.programme_text {
  			padding-top: 12px;
  			padding-left: 50px;
  		}

  		.programme_text p {
  			font-family: 'Rubik', sans-serif;
  			font-size: 17px;
  			font-weight: 500;
  			color: #1e1e1e;
  			margin-bottom: 3px;
  		}

  		.programme_text span {
  			padding-left: 50px;
  			font-family: 'Lato', sans-serif;
  			font-size: 17px;
  			font-weight: 600;
  			font-style: italic;
  			color: green
  		}

  		/*programme css end*/

  		/*water css start*/
  		.water_body {
  			padding-top: 20px;
  			padding-bottom: 50px;
  		}

  		.water_icon {
  			/*			background-color: #cecece;*/
  			background: #de6161;
  			/* fallback for old browsers */
  			background: -webkit-linear-gradient(to right, #2657eb, #de6161);
  			/* Chrome 10-25, Safari 5.1-6 */
  			background: linear-gradient(to right, #2657eb, #de6161);
  			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  			padding-top: 20px;
  			padding-bottom: 20px;
  			border-radius: 10px;
  			box-shadow: 10px 10px 20px #1e1e1e;
  			padding-left: 10px;
  			padding-right: 10px;
  		}

  		.water_icon i {
  			font-size: 100px;
  			color: floralwhite;
  			margin-bottom: 20px;
  		}

  		.water_icon h5 {
  			font-family: 'Rubik', sans-serif;
  			color: floralwhite;
  		}

  		.water_text {
  			padding-top: 32px;
  			padding-left: 50px;
  		}

  		.water_text p {
  			font-family: 'Rubik', sans-serif;
  			font-size: 17px;
  			font-weight: 500;
  			color: #1e1e1e;
  			margin-bottom: 3px;
  		}

  		.water_text span {
  			padding-left: 50px;
  			font-family: 'Lato', sans-serif;
  			font-size: 17px;
  			font-weight: 600;
  			font-style: italic;
  			color: green
  		}

  		/*programme css end*/


  		/*hygienic css start*/
  		.hygienic_body {
  			padding-top: 20px;
  			padding-bottom: 50px;
  		}

  		.hygienic_icon {
  			/*			background-color: #cecece;*/
  			background: #544a7d;
  			/* fallback for old browsers */
  			background: -webkit-linear-gradient(to right, #ffd452, #544a7d);
  			/* Chrome 10-25, Safari 5.1-6 */
  			background: linear-gradient(to right, #ffd452, #544a7d);
  			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  			padding-top: 18px;
  			padding-bottom: 18px;
  			border-radius: 10px;
  			box-shadow: 10px 10px 20px #1e1e1e;
  			padding-left: 5px;
  			padding-right: 5px;
  		}

  		.hygienic_icon i {
  			font-size: 80px;
  			color: floralwhite;
  			margin-bottom: 10px;
  		}

  		.hygienic_icon h5 {
  			font-family: 'Rubik', sans-serif;
  			color: floralwhite;
  		}

  		.hygienic_text {
  			padding-top: 80px;
  			padding-left: 50px;
  		}

  		.hygienic_text p {
  			font-family: 'Rubik', sans-serif;
  			font-size: 18px;
  			font-weight: 500;
  			color: #1e1e1e;
  			margin-bottom: 3px;
  		}

  		.hygienic_text span {
  			padding-left: 50px;
  			font-family: 'Lato', sans-serif;
  			font-size: 18px;
  			font-weight: 600;
  			font-style: italic;
  			color: green
  		}

  		/*programme css end*/

  		/*env css start*/
  		.environment_body {
  			padding-top: 20px;
  			padding-bottom: 50px;
  		}

  		.environment_icon {
  			/*			background-color: #cecece;*/
  			background: #333333;
  			/* fallback for old browsers */
  			background: -webkit-linear-gradient(to right, #dd1818, #333333);
  			/* Chrome 10-25, Safari 5.1-6 */
  			background: linear-gradient(to right, #dd1818, #333333);
  			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  			padding-top: 20px;
  			padding-bottom: 20px;
  			border-radius: 10px;
  			box-shadow: 10px 10px 20px #1e1e1e;
  			padding-left: 10px;
  			padding-right: 10px;
  		}

  		.environment_icon i {
  			font-size: 100px;
  			color: floralwhite;
  			margin-bottom: 20px;
  		}

  		.environment_icon h5 {
  			font-family: 'Rubik', sans-serif;
  			color: floralwhite;
  		}

  		.environment_text {
  			padding-top: 12px;
  			padding-left: 50px;
  		}

  		.environment_text p {
  			font-family: 'Rubik', sans-serif;
  			font-size: 17px;
  			font-weight: 500;
  			color: #1e1e1e;
  			margin-bottom: 3px;
  		}

  		.environment_text span {
  			padding-left: 50px;
  			font-family: 'Lato', sans-serif;
  			font-size: 17px;
  			font-weight: 600;
  			font-style: italic;
  			color: green
  		}

  		/*env css end*/

  		/*waste css start*/
  		.waste_body {
  			padding-top: 20px;
  			padding-bottom: 50px;
  		}

  		.waste_icon {
  			/*			background-color: #cecece;*/
  			background: #355C7D;
  			/* fallback for old browsers */
  			background: -webkit-linear-gradient(to right, #C06C84, #6C5B7B, #355C7D);
  			/* Chrome 10-25, Safari 5.1-6 */
  			background: linear-gradient(to right, #C06C84, #6C5B7B, #355C7D);
  			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  			padding-top: 24px;
  			padding-bottom: 24px;
  			border-radius: 10px;
  			box-shadow: 10px 10px 20px #1e1e1e;
  			padding-left: 10px;
  			padding-right: 10px;
  		}

  		.waste_icon i {
  			font-size: 100px;
  			color: floralwhite;
  			margin-bottom: 20px;
  		}

  		.waste_icon h5 {
  			font-family: 'Rubik', sans-serif;
  			color: floralwhite;
  		}

  		.waste_text {
  			padding-top: 0px;
  			padding-left: 50px;
  		}

  		.waste_text p {
  			font-family: 'Rubik', sans-serif;
  			font-size: 17px;
  			font-weight: 500;
  			color: #1e1e1e;
  			margin-bottom: 3px;
  		}

  		.waste_text span {
  			padding-left: 50px;
  			font-family: 'Lato', sans-serif;
  			font-size: 17px;
  			font-weight: 600;
  			font-style: italic;
  			color: green
  		}

  		/*waste css end*/


  		/*health css start*/
  		.health_body {
  			padding-top: 20px;
  			padding-bottom: 50px;
  		}

  		.health_icon {
  			/*			background-color: #cecece;*/
  			background: #D38312;
  			/* fallback for old browsers */
  			background: -webkit-linear-gradient(to right, #A83279, #D38312);
  			/* Chrome 10-25, Safari 5.1-6 */
  			background: linear-gradient(to right, #A83279, #D38312);
  			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  			padding-top: 24px;
  			padding-bottom: 24px;
  			border-radius: 10px;
  			box-shadow: 10px 10px 20px #1e1e1e;
  			padding-left: 10px;
  			padding-right: 10px;
  		}

  		.health_icon i {
  			font-size: 100px;
  			color: floralwhite;
  			margin-bottom: 20px;
  		}

  		.health_icon h5 {
  			font-family: 'Rubik', sans-serif;
  			color: floralwhite;
  		}

  		.health_text {
  			padding-top: 0px;
  			padding-left: 50px;
  		}

  		.health_text p {
  			font-family: 'Rubik', sans-serif;
  			font-size: 17px;
  			font-weight: 500;
  			color: #1e1e1e;
  			margin-bottom: 3px;
  		}

  		.health_text span {
  			padding-left: 50px;
  			font-family: 'Lato', sans-serif;
  			font-size: 17px;
  			font-weight: 600;
  			font-style: italic;
  			color: green
  		}

  		/*health css end*/


  		/*development css start*/
  		.development_body {
  			padding-top: 20px;
  			padding-bottom: 50px;
  		}

  		.development_icon {
  			/*			background-color: #cecece;*/
  			background: #e9d362;
  			/* fallback for old browsers */
  			background: -webkit-linear-gradient(to right, #333333, #e9d362);
  			/* Chrome 10-25, Safari 5.1-6 */
  			background: linear-gradient(to right, #333333, #e9d362);
  			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  			padding-top: 24px;
  			padding-bottom: 24px;
  			border-radius: 10px;
  			box-shadow: 10px 10px 20px #1e1e1e;
  			padding-left: 10px;
  			padding-right: 10px;
  		}

  		.development_icon i {
  			font-size: 100px;
  			color: floralwhite;
  			margin-bottom: 20px;
  		}

  		.development_icon h5 {
  			font-family: 'Rubik', sans-serif;
  			color: floralwhite;
  		}

  		.development_text {
  			padding-top: 60px;
  			padding-left: 50px;
  		}

  		.development_text p {
  			font-family: 'Rubik', sans-serif;
  			font-size: 17px;
  			font-weight: 500;
  			color: #1e1e1e;
  			margin-bottom: 3px;
  		}

  		.development_text span {
  			padding-left: 50px;
  			font-family: 'Lato', sans-serif;
  			font-size: 17px;
  			font-weight: 600;
  			font-style: italic;
  			color: green
  		}

  		/*development css end*/

  		/*total css start*/
  		.total{
  			padding-top: 20px;
  			padding-bottom: 60px;
  		}
  		.total h3{
  			font-family: 'Lobster', cursive;
  			color: #1e1e1e;
  			font-size: 30px;
  			text-shadow: 5px 5px 15px gray;
  		}
  		.total h3 span{
  			color: #0081b1;
  			margin-left: 5px;
  			margin-right: 5px;
  			font-size: 35px;
  			text-shadow: 5px 5px 15px white;;
  		}
  		/*total css end*/

  	</style>
  </head>

  <body>


  	<!--Banner Part start-->
  	<section>
  		<div class="banner_part">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-12">
  						<div class="banner_text">
  							<h3>Achievements So Far</h3>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<!--Banner Part end-->

  	<!--link Part start-->
  	<nav aria-label="breadcrumb">
  		<ol class="breadcrumb">
  			<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
  			<li class="breadcrumb-item active" aria-current="page">At a glance</li>
  		</ol>
  	</nav>
  	<!--link part end-->

  	<!--programme part start-->
    <div class="section_heading">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h3>We have started our journey in 1982</h3>
        </div>
      </div>
    </div>
    @foreach ($ataglancecategories as $ataglancecategory)
  	<section>
  		<div class="programme">
  			<div class="container">
  				<div class="programme_body">
  					<div class="row">
  						<div class="col-lg-3">
  							<div class="programme_icon text-center">
  								<i class="fas fa-globe-americas"></i>
                    <h5>{{ $ataglancecategory->category_name  }}</h5>
  							</div>
  						</div>
  						<div class="col-lg-9">
  							<div class="programme_text">
                  @php
                    $all_values = App\Ataglance::where('at_a_glance_category_id',$ataglancecategory->id)->get();
                  @endphp
                  @foreach ($all_values as $all_value)
                    <div class="row">
                      <div class="col-lg-7">
                        <p>{{ $all_value->title }}</p>
                      </div>
                      <div class="col-lg-5">
                        <span>{{ $all_value->amount }}</span>
                      </div>
                    </div>
                  @endforeach
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
    </section>
    @endforeach
  	<!--programme part end-->


@endsection
