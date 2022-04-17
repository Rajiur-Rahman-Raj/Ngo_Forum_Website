@extends('layouts.frontendmaster')

@section('frontend_main')
  <style>
          .container-fluid{
              width: 75% !important;
          }
  		.latest_banner{
  			background-image: url({{ asset('frontend_assets') }}/images/news_common_banner.jpg);
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
  			font-weight: 600;
  			color: white;
  			font-size: 42px;
  			text-shadow: 10px 10px 15px black;
  		}
  		.latest_banner_text h5{
  			font-family: 'Lato', sans-serif;
  			font-weight: 500;
  			color: #42B8D4;
  			font-size: 20px;
  		}
  		.l_news{
  			margin-bottom: 15px;
  		}
      .l_img img {
			margin-bottom: 10px;
			height: 150px;
			position: relative;
            width:100%;
		}

		.l_img .l_img_overlay{
			position: absolute;
			top: 20px;
			left: 8px;
			height: 40px;
			width: 100px;
			background: #42B8D4;
			padding-top: 10px;
			padding-left: 10px;
		}
		.l_img .l_img_overlay h5{
			font-family: 'Oswald', sans-serif;
			font-size: 14px;
			font-weight: 400;
			color: #171818;
		}
  		.l_heading span{
  			font-family: 'Lato', sans-serif;
  			font-weight: 500;
  			font-size: 16px;
  			color: #42B8D4;
  			font-style: italic;
  		}
  		.l_heading p{
  			font-family: 'Lato', sans-serif;
  			font-weight: 700;
  			color: #1e1e1e;
  			font-size: 20px;
  			margin-bottom: 15px;
  		}
  		.l_heading a.details_btn{
  			display: inline-block;
  			font-family: 'Raleway', sans-serif;
  			font-weight: 500;
  			font-size: 15px;
  			color: gray;
  			transition: all .2s linear;
  			border: 2px solid transparent;
  		}
  		.l_heading a:hover{
            color: #42B8D4 !important;
  		}
  		li.news_category{
  		    margin-bottom: 10px;
  		}
  		li.news_category a{
  		    font-family: 'Fira Sans';
  		    display: inline-block;
  		    color: #171817;
  		    text-shadow: 5px 5px 15px gray;
  		}
  		li.news_category a.selected_category{
  		    padding-top: 3px;
  		    padding-bottom: 3px;
  		    padding-right: 8px;
  		    border-top: 1px solid #F0932B;
  		    border-bottom: 1px solid #F0932B;
  		    border-right: 1px solid #F0932B;
  		    border-radius: 0px 5px 5px 0px;
  		    color: #00AEEF;
  		    font-weight: 500;
  		}
  		/*publication category end*/
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
  							<h2>{{ App\NewsCategory::find($category_id)->category_name }}</h2>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<!--Latest Banner end-->
  	
  	
    <?php 
        $link = $_SERVER['REQUEST_URI']; 
        $myUrl = substr($link, -1);
    ?> 


  	<!--News part start-->
  	<section>
  		<div class="gallery" style="padding-top: 30px">
  			<div class="container-fluid">
  			    
  				<div class="gallery_content">
  					<div class="row">
  					    <div class="col-lg-2 text-left pt-2">
  					        <ul>
  					            <li class="news_category">
  					                <a href="{{ url("all/newses") }}">All News</a>
  					            </li>
  					            @php
                                    $NewsCategories = App\NewsCategory::all();
                                @endphp
                                
  					            @foreach ($NewsCategories as $NewsCategory)
  					            @if($myUrl == $NewsCategory->id)
  					            <li class="news_category">
  					                <a href="{{ url('category/wise/news') }}/{{ $NewsCategory->id }}" class="selected_category">{{ $NewsCategory->category_name }}</a>
  					            </li> 
  					            @else
  					            <li class="news_category">
  					                <a href="{{ url('category/wise/news') }}/{{ $NewsCategory->id }}">{{ $NewsCategory->category_name }}</a>
  					            </li> 
  					            @endif
  					            @endforeach
  					        </ul>
  					    </div>
  						<div class="col-lg-10 text-left">
  							<div class="l_news_content">
  							    <div class="row">
                  					<div class="col-lg-12 pb-4">
                  						<div class="section_header">
                  							<h2><span>|| </span>{{ App\NewsCategory::find($category_id)->category_name }} :</span></h2>
                  						</div>
                  					</div>
                  				</div>
  								<div class="row">
                                @foreach ($category_wise_newses as $category_wise_news)
                                  @if ($category_wise_news->news_status == 'active')
                                    <div class="col-lg-4 mb-4" style="box-shadow:5px 5px 20px #bdc3c7;">
                                      <div class="card p-2" style="overflow: hidden;">
                                        <div class="l_news">
                                          <div class="l_img">
                                            <img src="{{ asset('uploads/all_news_image') }}/{{ $category_wise_news->news_image }}" alt="" class="img-fluid">
                                            <div class="l_img_overlay">
                                              <h5>{{ App\NewsCategory::find($category_id)->category_name }}</h5>
                                            </div>
                                          </div>
                                          <div class="l_heading">
                                            <span style="text-align:left;color: gray;font-size:14px;font-weight:500;">{{ $category_wise_news->created_at->format('d-F-Y') }} </span>
                                            <!--<span style="text-align:right; float:right; color:red;">{{ $category_wise_news->created_at->format('h:i:s A') }}</span>-->
                                            <h4 style="margin-top:10px; margin-bottom:20px; color:#1a1a1a;font-family: 'Fira Sans Condensed', sans-serif; font-size:22px">{{ $category_wise_news->news_title }}</h4>
                                            <!--<p style="font-size:17px; font-weight:normal;height: 125px;overflow: hidden;">-->
                                            <!--  {{ $category_wise_news->news_description }}-->
                                            <!--</p>-->
                                            <a class="details_btn" href="{{ url('category_wise/news/details') }}/{{ $category_wise_news->id }}" style="text-align:left;color:#535c68"><i style="color:#f0932b;font-size:18px" class="fas fa-bars"></i> Read More</a>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                @else
                                
                                @endif
                                @endforeach
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  				
  			</div>
  		</div>
  	</section>
  	<!--News Part end-->
@endsection
