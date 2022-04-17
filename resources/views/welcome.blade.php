<!--Banner Part Start-->

@extends('layouts.frontendmaster')

@section('frontend_main')
  <style media="screen">
  .banner_1 {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top left;
    height: 100vh;
    position: relative;
  }
  </style>
<section>
  <div class="banner_part">
  @foreach ($banner_images as $banner_image)
    <div class="banner_1" style="background-image: url({{ asset('uploads/banner_image') }}/{{ $banner_image->image }});">
      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <div class="banner_text">
              <div class="banner_details">
                <h1 style="width:600px;"><div class="wow bounceInRight" data-wow-duration="2.2s">{{ $banner_image->title }}<span></span></div></h1>
              </div>
            </div>
          </div>
          <!--
          <div class="col-lg-2">
            <div class="banner_links">
              <div class="b_links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="https://mail.ngof.org/mail/" target="_blank" title="Web-Mail"><i class="fas fa-envelope"></i></a>
                <a href="https://bangladesh.gov.bd/index.php" target="_blank"><img src="images/bd_flag_icon.png" alt="flag" class="img-fluid"></a>
              </div>
            </div>
          </div>
-->
        </div>
      </div>

      <div class="humanitarian wow fadeInUp" data-wow-duration="1.6s">
        <a href="{{ url('category/wise/programme/13') }}">
          <h3><i class="fas fa-hands"></i>COVID-19 Response</h3>
        </a>
      </div>

    </div>
  @endforeach


  </div>
</section>
<!--Banner Part End-->

<!--About Part Start-->
@foreach ($welcome_about_ngo as $about_ngo)
<section>
  <div class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about_img wow bounceInLeft" data-wow-duration="1.6s">

            <img src="{{asset('frontend_assets/images/p-22.jpg')}}" alt="" class="img-fluid" width="100%">

            <!--<img src="{{ asset('uploads/about_ngo_image') }}/{{ $about_ngo->about_ngo_image }}" alt="Organization" class="img-fluid" width="100%">-->

          </div>
        </div>
        <div class="col-lg-6 wow bounceInRight" data-wow-duration="1.6s">
          <div class="about_details">
            <div class="section_header">
              <h2>|| <span>About</span> Us</h2>
            </div>

            <?php $small = substr($about_ngo->about_ngo_description, 0, 1250); ?>
            <p style="font-size:14px; font-weight:normal">
              {{ $small }}
            </p>
            <a href="{{ url('aboutus') }}"><i class="fas fa-bars" style="color: #42B8D4; margin-right: 5px;"></i> Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
<!--About Part End-->


<!--What we Do Start-->
	<section>
		<div class="what_we_do">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section_header">
							<h2><span>|| </span>We Work Towards Achieving the  <span>SDGs</span></h2>
						</div>
					</div>
				</div>
				<div class="what_content">
				    <div class="row mb-5">
				        <div class="col-lg-12 wow fadeInRightBig">
				            <p style="text-align:center;font-family: 'Oswald', sans-serif;width:75%;margin:auto">
				                NGO Forum is committed to contribute in achieving the Sustainable Development Goals (SDGs) by 2030 and it links it's all project activities with 13 goals out of the 17 goals. NGO Forum is the active member of the Platform ‘People’s Voice’ which is working to achieve the SDG Goals in Bangladesh.
				            </p>
				        </div>
				    </div>
					<div class="row">
						<div class="col wow fadeInRightBig" data-wow-duration="1.8s">
							<img src="{{ asset('frontend_assets/images/sdg01.png')}}" alt="" class="img-fluid">
						</div>
						<div class="col wow fadeInRightBig" data-wow-duration="1.8s">
							<img src="{{ asset('frontend_assets/images/sdg02.png')}}" alt="" class="img-fluid">
						</div>
						<div class="col wow fadeInRightBig" data-wow-duration="1.8s">
							<img src="{{ asset('frontend_assets/images/sdg03.png')}}" alt="" class="img-fluid">
						</div>
						<div class="col wow fadeInRightBig" data-wow-duration="1.8s">
							<img src="{{ asset('frontend_assets/images/sdg05.png')}}" alt="" class="img-fluid">
						</div>
						<div class="col wow fadeInRightBig" data-wow-duration="2.0s">
							<img src="{{ asset('frontend_assets/images/sdg06.png')}}" alt="" class="img-fluid">
						</div>
						<div class="col wow fadeInRightBig" data-wow-duration="2.0s">
							<img src="{{ asset('frontend_assets/images/sdg07.png')}}" alt="" class="img-fluid">
						</div>

					</div>
					<div class="row mt-3">
						<div class="col-md-1 col-sm-1">

						</div>
						<div class="col-md-2 col-sm-2 col wow fadeInRightBig" data-wow-duration="2.0s">
							<img src="{{ asset('frontend_assets/images/sdg10.png')}}" alt="" class="img-fluid">
						</div>
						<div class="col-md-2 col-sm-2 col wow fadeInRightBig" data-wow-duration="2.1s">
							<img src="{{ asset('frontend_assets/images/sdg11.png')}}" alt="" class="img-fluid">
						</div>
						<div class="col-md-2 col-sm-2 col wow fadeInRightBig" data-wow-duration="2.2s">
							<img src="{{ asset('frontend_assets/images/sdg13.png')}}" alt="" class="img-fluid">
						</div>
						<div class="col-md-2 col-sm-2 col wow fadeInRightBig" data-wow-duration="2.4s">
							<img src="{{ asset('frontend_assets/images/sdg16.png')}}" alt="" class="img-fluid">
						</div>
						<div class="col-md-2 col-sm-2 col wow fadeInRightBig" data-wow-duration="2.4s">
							<img src="{{ asset('frontend_assets/images/sdg17.png')}}" alt="" class="img-fluid">
						</div>
						<div class="col-md-1 col-sm-1">

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--What we Do End-->




<!--What we Do Start-->
<!--<section>-->
<!--  <div class="what_we_do">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--        <div class="col-lg-12 text-center">-->
<!--          <div class="section_header">-->
<!--            <h2><span>|| </span>We work to achieve the <span>SDGs</span></h2>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="what_content">-->
<!--        <div class="row">-->
<!--          @foreach ($welcome_whats as $welcome_what)-->

<!--          <div class="col-lg-4">-->
<!--            <div class="what_details wow fadeInUp" data-wow-duration="1.6s">-->
<!--              <div class="what_icon">-->
<!--                <i class="{{ $welcome_what->icon_link }}"></i>-->
<!--              </div>-->
<!--              <h3>{{ $welcome_what->title }}</h3>-->
<!--              <p>-->
<!--                {{ $welcome_what->description }}-->
<!--              </p>-->
<!--            </div>-->
<!--          </div>-->
<!--        @endforeach-->

<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->
<!--What we Do End-->

<!--Youtube Video start-->
@foreach ($welcome_videos as $welcome_video)
  <style>
      .video_part {
        height: 400px;
        width: 100%;
        background-image: url({{ asset('uploads/what_image') }}/{{ $welcome_video->bg_image }});
        background-position: top left;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        position: relative;
      }
  </style>
<section>
  <div class="video_part">
    <div class="row">
      <div class="col-lg-12">
        <div class="video_button wow fadeInDown" data-wow-duration="1.6s">
          <i class="far fa-play-circle videobox" data-autoplay="true" data-vbtype="video" href="{{ $welcome_video->video_link }}"></i>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
<!--Youtube video end-->


<!--News Part Start-->
<section>
  <div class="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section_header">
            <h2 style="text-shadow: 10px 10px 15px #8e8e8e"><span>|| </span>Latest <span>News</span> &amp; <span>Events</span></h2>
          </div>
        </div>
      </div>
      <div class="news_content">
        <div class="row news_slider">
          @foreach ($welcome_news_infos as $welcome_news_info)
            @if ($welcome_news_info->news_status == 'active')
              <div class="col-lg-12">
            <div class="news_details wow fadeInRightBig" data-wow-duration="1.6s">
              <div class="news_img">
                <img src="{{ asset('uploads/all_news_image') }}/{{ $welcome_news_info->news_image }}" alt="News" class="img-fluid" style="height: 210px" width="100%">
                <div class="news_image_overlay">
                  <span>{{ App\NewsCategory::find($welcome_news_info->news_category_id)->category_name  }}</span>
                </div>
              </div>
              <div class="news_text">
                <div style="height: 200px;">
                    <h4>{{ substr($welcome_news_info->news_title,0,70) }}...</h4>
                    <span>{{ $welcome_news_info->created_at->format('d-F-Y') }}</span>
                    <p>
                      {{ substr($welcome_news_info->news_description,0,200) }}...
                    </p>
                </div>
                <a href="{{ url('category_wise/news/details') }}/{{ $welcome_news_info->id }}"><i class="fas fa-bars" style="color: #17a2b8; margin-right: 4px"></i> Read More</a>
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
</section>
<!--News Part End-->

<!--publication start-->
<section style="background: url('{{asset('frontend_assets/images/publication_bg_3.jpg')}}');background-size:cover;background-repeat: no-repeat">
  <div class="publication">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section_header">
            <h2 style="text-shadow: 10px 10px 15px #8e8e8e"><span>|| </span>Latest <span style="color:#1e1e1e">Publications</span></h2>
          </div>
        </div>
      </div>
      <div class="publication_content">
        <div class="row publication_slider">
          @foreach ($welcome_resource_infos as $welcome_resource_info)
          <div class="col-lg-12">
            <div class="publication_details wow fadeInUpBig" data-wow-duration="1.0s">
              <div class="publication_image">
                <img src="{{ asset('uploads/all_resources_image') }}/{{ $welcome_resource_info->resources_image }}" alt="" class="img-fluid w-100 h-100">
                <div class="publication_image_overlay">
                  <a href="{{ asset('uploads/all_resources_image') }}/{{ $welcome_resource_info->file_download }}" download ><i class="fas fa-download"></i></a>
                </div>
              </div>
              <div class="publication_text">
                <h5>{{ $welcome_resource_info->image_title }}</h5>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<!--publication end-->


<!--Ongoing Poject start-->

<section>
  <div class="ongoing">
    <div class="row ongoing_slider">
      @foreach ($welcome_existing_project_infoes as $welcome_existing_project_infoe)
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-6 wow bounceInLeft">
            <!--<img src="{{ asset('uploads/existing_project_img') }}/{{ $welcome_existing_project_infoe->existing_details_image }}" class="img-fluid">-->
            <img src="{{ asset('frontend_assets/images/Pic-17.jpg')}}" style="height: 450px;width: 100%;">
          </div>
          <div class="col-lg-6 pt-5">
            <div class="section_header">
              <h2>|| Existing <span>Projects</span></h2>
            </div>
            <div class="ongoing_details wow fadeInUpBig">
               <h5><b style="color:#27ae60">{{ $welcome_existing_project_infoe->existing_title }}</b></h5>
              <p>
                {{ substr($welcome_existing_project_infoe->description_one,0,300) }}...
              </p>
              <a href="{{url('existing_projects')}}"><i class="fas fa-bars" style="color: #27ae60; margin-right: 5px;"></i> View ALL</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach

    </div>
  </div>
</section>
<!--Ongoing Porject end-->


<!--Gallery Part start-->
<section>
  <div class="gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section_header">
            <h2>|| Photos <span>Clicked</span></h2>
          </div>
        </div>
      </div>
      <div class="gallery_content">
        <div class="row">
          <div class="col-lg-12">
            <div class="gallery_buttons">
              <button type="button" data-filter="all" class="wow bounceInLeft" data-wow-duration="1.6s">ALL</button>
              @foreach ($photo_categories as $photo_category)

                <button type="button" data-filter=".man{{ $photo_category->id }}" class="wow bounceInLeft" data-wow-duration="1.5s">{{ $photo_category->category_name }}</button>
              @endforeach
            </div>
            <div class="gallary_photos">
              <div class="row filter_cls">
                @foreach ($all_photos as $all_photo)
                  <div class="col-lg-3 mix man{{ $all_photo->photo_category_id }}">
                  <div class="work_img gap">
                    <img src="{{ asset('uploads/photoclicked_image') }}/{{ $all_photo->photoclicked_image }}" alt="not found" class="img-fluid">
                    <a class="venobox" data-gall="gallery01" href="{{ asset('uploads/photoclicked_image') }}/{{ $all_photo->photoclicked_image }}"><i class="fas fa-eye"></i></a>
                    <div class="work_img_overlay">

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
  </div>
</section>
<!--Gallery part end-->


<!--upcoming events start-->
<section>
  <div class="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section_header">
            <h2 class="b mb-2"><span>|| </span>Global <span>&amp;</span> National <span>Events</span></h2>
          </div>
        </div>
      </div>
      <div class="events_content">
        <div class="row events_slider wow fadeInRightBig" data-wow-duration="1.6s">
          @foreach ($welcome_globalevent as $welcome_globalevents)

          <div class="col-lg-12">
            <div class="event_details">
              <div class="row">
                <div class="col-lg-3 col-sm-12">
                  <h3>{{ $welcome_globalevents->date }}</h3>
                  <h6>{{ $welcome_globalevents->manth }}</h6>
                </div>
                <div class="col-lg-9 col-sm-12">
                  <h4>{{ $welcome_globalevents->title }}</h4>
                  <p>{{ $welcome_globalevents->description }}</p>
                </div>
              </div>
            </div>
          </div>
        @endforeach

        </div>
      </div>
    </div>
  </div>
</section>
<!--upcoming events end-->


<!--Partners CSS Start-->
<section>
  <div class="partners">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="partners_header">
            <h2>Current <span>Funding Agencies</span></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="partners_content">
      <div class="row partners_slider">
        @foreach ($all_founding_agencies as $all_founding_agency)
        <div class="col text-center">
          <div class="partners_details text-center" style="width: 100px">
            <img src="{{ asset('uploads/agency_image') }}/{{ $all_founding_agency->agency_logo }}" alt="partners" class="img-fluid">
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<!--Partners CSS End-->
@section('custom_js')
  <script src="{{ asset('frontend_assets') }}/js/custom.js"></script>
@endsection

@endsection
<!--footer End-->
