@extends('layouts.frontendwqtl')

@section('frontend_main')
  <style>
  		/*Banner CSS start*/
  		.banner_part {
  			background-image: url({{ asset('frontend_assets/WQTL/images/banner1.jpg') }});
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
  			background: rgba(189, 195, 199, 0.8);
  			background: -webkit-linear-gradient(to right, rgba(44, 62, 80, 0.8), rgba(189, 195, 199, 0.9));
  			background: linear-gradient(to right, rgba(44, 62, 80, 0.8), rgba(189, 195, 199, 0.9));
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
  			font-size: 22px;
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

  			color: #149aba;
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
  		}

  		.about {
  			padding-bottom: 30px;
  			padding-top: 10px;
  			padding-top: 20px;
  		}

  		.about h3 {
  			font-family: 'Oswald', sans-serif;
  			font-weight: 500;
  			font-size: 30px;
  			color: #344556;
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
  			margin-bottom: 20px;
  		}

  		/*about css end*/

  		/*Accordian CSS Start*/
  		.about_contact {
  			padding-top: 60px;
  			padding-left: 30px;
  		}

  		.about_contact button {
  			font-family: 'Oswald', sans-serif;
  			font-size: 16px;
  			font-weight: 500;
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
  			background: #bdc3c7;
  			/* fallback for old browsers */
  			background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);
  			/* Chrome 10-25, Safari 5.1-6 */
  			background: linear-gradient(to right, #2c3e50, #bdc3c7);
  			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

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
  			padding: 0 18px;
  			background-color: white;
  			max-height: 0;
  			overflow: hidden;
  			transition: max-height 0.2s ease-out;
  		}

  		.panel p {
  			padding-bottom: 12px;
  			color: #1e1e1e;
  			font-family: 'Lato', sans-serif;
  			font-size: 14px;
  		}

  		.panel p span {
  			color: #195b6a;
  			margin-left: 10px;
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

  		.video {
  			padding-top: 20px;
  			padding-bottom: 50px;
  		}

  		.video h3 {
  			font-family: 'Oswald', sans-serif;
  			font-weight: 500;
  			font-size: 30px;
  			color: #344556;
  			margin-bottom: 20px;
  		}

  		.video_details {
  			padding-bottom: 25px;
  		}



    .bottom_banner {
      background-image: url({{ asset('frontend_assets/WQTL') }}/images/psi-vail-water.jpg);
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
            <p>MicroKit Package</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--banner part end-->

<!--link part start-->
<!--
<section>
  <div class="header_link">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <p><span><a href="wqtl.html">Home</a> </span><span> | </span> <a href="dhaka_lab.html">WQTL</a> <span> | </span> <a href="cox_lab.html">CoxLab</a> <span> | </span> <a href="microkit.html">Micro kit</a></p>
        </div>
        <div class="col-lg-4 text-right">
          <div class="header_icon">
            <span>Important links : </span>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.youtube.com/channel/UCe1YOUKvOPf6JnwG6bvjKiA" target="_blank"><i class="fab fa-youtube youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
-->
<!--link part end-->

<!--about part start-->
<section>
  <div class="about">
    <div class="container">
      @foreach ($microkit_infos as $microkit_info)
        <div class="row">
        <div class="col-lg-8 mt-5">
          <div class="about_text">
            <div class="row">
              <div class="col-lg-12">
                <!--									<h3>Microkit Package</h3>-->
              </div>
              <div class="col-lg-12 text-center">
                <img src="{{ asset('uploads/microkit_image') }}/{{ $microkit_info->logo }}" alt="Dhaka lab" class="img-fluid">
              </div>
              <div class="col-lg-12">
                <p>
                  {{ $microkit_info->description }}
                </p>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="about_contact">
            <button class="accordion new_color"><i class="far fa-window-restore"></i>Type of Result</button>
            <div class="panel mb-2">
              <p>Qualitative : <span>({{ $microkit_info->qualitative }})</span></p>
            </div>

            <button class="accordion new_color"><i class="fas fa-window-maximize"></i> Origin </button>
            <div class="panel mb-2">
              <p>Origin : <span> {{ $microkit_info->origin }}
            </div>

            <button class="accordion new_color"><i class="fas fa-map-marker-alt"></i> Location</button>
            <div class="panel">
              <p>Available At : <span style="color:blue">{{ $microkit_info->location }}</span></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!--about part end-->

<!--Video start-->
<section>
  <div class="video">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Video tutorials of Field Kits :</h3>
        </div>
        @foreach ($microkit_videos as $microkit_video)
          <div class="col-lg-3">
          <div class="video_details">
            <iframe width="100%" height="100%" src="{{ $microkit_video->video_link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<!--Video end-->


<!--bottom banner end-->
@endsection
