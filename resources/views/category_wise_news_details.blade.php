@extends('layouts.frontendmaster')
@section('frontend_main')
  <style>
		.latest_banner{
			background-image: url({{ asset('frontend_assets/images/news_common_banner.jpg')}});
			background-position: top left;
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			height: 300px;
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
			padding-top: 160px;
		}
		.latest_banner_text h2{
			font-family: 'Raleway', sans-serif;
			font-weight: 700;
			color: white;
			font-size: 36px;
			text-shadow: 10px 10px 15px black;
		}
		.latest_banner_text h5{
			font-family: 'Lato', sans-serif;
			font-weight: 500;
			color: #42B8D4;
			font-size: 20px;
		}
		.news_details{
			padding-top: 50px;
		}
		.news_details h2{
			font-family: 'Lato', sans-serif;
			font-weight: 800;
			font-size: 35px;
			color: #1e1e1e;
			margin-bottom: 20px;
		}
		.news_details p{
			font-family: 'Raleway', sans-serif;
			font-weight: 500;
			color: #1e1e1e;
			font-size: 15px;
			margin-top: 30px;
			margin-bottom: 20px;
		}
		.news_details a.back_btn{
			display: inline-block;
			padding: 3px 10px;
			font-family: 'Raleway', sans-serif;
			font-weight: 600;
			font-size: 14px;
			color: #1e1e1e;
			border-radius: 5px;
			transition: all .2s linear;
			margin-bottom: 50px;
			border: 2px solid #42B8D4;
		}
		.news_details a.back_btn:hover{
		    border: 2px solid transparent;
		}
	</style>

  <!--latest Banner start-->
	<section>
		<div class="latest_banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="latest_banner_text">
							<h2> {{ App\NewsCategory::find($need_category_name)->category_name }} details</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Latest Banner end-->


	<!--news details start-->
	<section>
		<div class="news_details">
			<div class="container">
				<div class="row">
				    <div class="col-lg-12">
						<div class="news_details_img text-left mb-2">
							<img src="{{ asset('uploads/all_news_image')}}/{{ $single_category_news_details->news_image }}" alt="" class="img-fluid">
						</div>
                        <span style="text-align:left;color:gray;font-style:italic">{{ $single_category_news_details->created_at->format('d-F-Y') }} </span>
					</div>
					<div class="col-lg-12 mt-3">
						<h2 style="font-family: 'Fira Sans Condensed', sans-serif; font-size:26px;padding-bottom:10px; border-bottom:2px solid #ddd; color:#222f3e"><i style="color:#f0932b;font-size:24px; margin-right:10px;" class="fas fa-bars"></i> {{ $single_category_news_details->news_title }}</h2>
					</div>
					
				</div>
				<div class="row">
					<div class="col-lg-11 m-auto">
						<p style="font-family: 'Fira Sans Condensed', sans-serif; font-size:17px;color:#222f3e;text-align:justify">
							{{ $single_category_news_details->news_description }}
						</p>

					</div>
				</div>

        <div class="row">
          <div class="col-lg-11 m-auto">
              
              {!! $single_category_news_details->ck_description !!}
        
          </div>
           <a class="back_btn mt-3" href="{{ url('/') }}">Back to Home</a>
        </div>
			</div>
		</div>
	</section>
	<!--news details end-->
@endsection
