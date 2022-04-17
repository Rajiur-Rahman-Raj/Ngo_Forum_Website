@extends('layouts.frontendabout')

@section('frontend_main')
<!--Banner Part start-->

<style media="screen">
.banner_part {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 350px;
  position: relative;
}
.mission_overlay h3{
    font-size:32px !important;
}
.mission_text ul li{
    transition: all .2s linear;
    list-style: circle;
}
.mission_text ul li:hover{
    color: white;
}
</style>

    <div class="banner_part" style="background-image: url({{ asset('frontend_assets/about') }}/images/Who%20we%20are%20banner.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner_text">
            <h3>About Us</h3>
            <p>Vision <span>|</span> Mission <span>|</span> Goals <span>|</span> Core Values</p>
          </div>
        </div>
      </div>
    </div>
  </div>

      <section>
      </section>
<!--Banner Part end-->

<!--link Part start-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">About Us</li>
  </ol>
</nav>
<!--link part end-->

<!--about us part start-->
@foreach ($about_ngos as $about_ngo)
<section>
		<div class="about_us">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about_img">
							<img src="{{ asset('uploads/about_ngo_image') }}/{{ $about_ngo->about_ngo_image }}" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about_text">
							<h3><span>||</span> About <span>NGO Forum</span></h3>
							<p>
								{{ $about_ngo->about_ngo_description }}
							</p>
						</div>
					</div>
					<div class="col-lg-12 pt-3">
						<div class="about_text">
							<p>
                {{ $about_ngo->about_ngo_description_two }}
							</p>
						</div>
				</div>
			</div>
		</div>
	</section>
<!--about us part end-->

<!--vision part start-->
<style>
.vision {
  background-image: url({{ asset('uploads/about_ngo_image') }}/{{ $about_ngo->about_ngo_vision_bg_image }});
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  height: 250px;
  position: relative;
}
</style>
<section>
  <div class="vision">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="vision_title text-center">
            <h3>Vision : </h3>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="vision_text">
            <p>" {{ $about_ngo->about_ngo_vision_title }} "</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
<!--vision part end-->

<!--Mission part start-->

@foreach ($all_cat_infos as  $all_cat_infos)
<section>
  @php
    $all_about_values = App\Allabout::where('about_category_id',$all_cat_infos->id)->get();
  @endphp
  <div class="mission">
    <div class="row">
      <div class="col-lg-5 p-0 wow fadeInLeft" data-wow-duration="1.6s">
        @foreach ($all_about_values as $all_about_value)
            @if($all_cat_infos->category_name == "Programmatic Strategic Issues")
            <div class="mission_title" style="background:url({{ asset('uploads/about_ngo_image')}}/{{ $all_about_value->bg_image }}); height:480px; background-repeat:no-repeat; background-size:cover;">
          <div class="mission_overlay">
            <h3>{{ $all_cat_infos->category_name }} :</h3>
          </div>
        </div>
            @elseif($all_cat_infos->category_name == "Core Values")
            <div class="mission_title" style="background:url({{ asset('uploads/about_ngo_image')}}/{{ $all_about_value->bg_image }}); height:422px; background-repeat:no-repeat; background-size:cover;">
          <div class="mission_overlay">
            <h3>{{ $all_cat_infos->category_name }} :</h3>
          </div>
        </div>
            @else
            <div class="mission_title" style="background:url({{ asset('uploads/about_ngo_image')}}/{{ $all_about_value->bg_image }}); background-repeat:no-repeat; background-size:cover;">
          <div class="mission_overlay">
            <h3>{{ $all_cat_infos->category_name }} :</h3>
          </div>
        </div>
            @endif
          
        @endforeach
      </div>
      
      @if($all_cat_infos->category_name == "Mission")
      <div class="col-lg-7 p-0 " style="background: #2ecc71">
         @foreach ($all_about_values as $all_about_value)
        <div class="mission_text wow bounceInLeft" data-wow-duration="1.6s">
            
            <p class="pt-4 pb-4">{!! $all_about_value->ck_description !!}</p>
            
        </div>
        @endforeach
      </div>
      
      @elseif($all_cat_infos->category_name == "Goals")
      <div class="col-lg-7 p-0 " style="background: #ff7f50">
         @foreach ($all_about_values as $all_about_value)
        <div class="mission_text wow bounceInLeft" data-wow-duration="1.6s">

            <p class="pt-4 pb-5">{!! $all_about_value->ck_description !!}</p>
            
        </div>
        @endforeach
      </div>
      
      @elseif($all_cat_infos->category_name == "Core Values")
      <div class="col-lg-7 p-0 " style="background: #3498db">
         @foreach ($all_about_values as $all_about_value)
        <div class="mission_text wow bounceInLeft" data-wow-duration="1.6s">
            
            <p class="">{!! $all_about_value->ck_description !!}</p>
            
        </div>
        @endforeach
      </div>
      
      @elseif($all_cat_infos->category_name == "Programmatic Strategic Issues")
      <div class="col-lg-7 p-0 " style="background: #e17055">
         @foreach ($all_about_values as $all_about_value)
        <div class="mission_text wow bounceInLeft" data-wow-duration="1.6s">
            
            <p>{!! $all_about_value->ck_description !!}</p>
            
        </div>
        @endforeach
      </div>
      @elseif($all_cat_infos->category_name == "Network")
      <div class="col-lg-7 p-0 " style="background: #ffb142">
         @foreach ($all_about_values as $all_about_value)
        <div class="mission_text wow bounceInLeft" data-wow-duration="1.6s">
            
            <p class="pt-4 pb-4">{!! $all_about_value->ck_description !!}</p>
            
        </div>
        @endforeach
      </div>
      @else
      <div class="col-lg-7 p-0 " style="background: #3498db">
         @foreach ($all_about_values as $all_about_value)
        <div class="mission_text wow bounceInLeft" data-wow-duration="1.6s">
            
            <p>{!! $all_about_value->ck_description !!}</p>
            
        </div>
        @endforeach
      </div>
      @endif
      
    </div>
  </div>
</section>
@endforeach
<!--mission part end-->

@endsection
<!--network part end-->
