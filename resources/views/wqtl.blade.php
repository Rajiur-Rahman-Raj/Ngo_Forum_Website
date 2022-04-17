@extends('layouts.frontendwqtl')

@section('frontend_main')
  <style>
    /*Banner CSS start*/
    .banner_part {
      background-image: url({{ asset('frontend_assets/WQTL') }}/images/banner1.jpg);
      background-position: top left;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      height: 400px;
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
      background-color: rgba(0, 0, 0, 0.75);
    }

    .banner_part .banner_text {
      text-align: center;
      padding-top: 200px;
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
      font-size: 18px;
      color: #42B8D4;
    }

    .banner_part .banner_text p span {
      color: white;
    }

    .wqtl_slider .b_left_arrow {
      position: absolute;
      top: 45%;
      left: -18px;
      color: #3455c3;
      font-size: 40px;
      z-index: 20;
      cursor: pointer;
      transition: all .3s linear;
    }

    .wqtl_slider .b_right_arrow {
      position: absolute;
      top: 45%;
      right: -18px;
      color: #3455c3;
      font-size: 40px;
      z-index: 20;
      cursor: pointer;
      transition: all .3s linear;
    }

    /*Banner CSS End*/

    /*Header link CSS start*/
    /*.header_link {*/
    /*  padding-top: 20px;*/
    /*  padding-bottom: 20px;*/
    /*}*/

    /*.header_link p {*/
    /*  font-family: 'Open Sans', sans-serif;*/
    /*  font-weight: 600;*/
    /*  font-size: 15px;*/
    /*  color: #1e1e1e;*/
    /*}*/

    /*.header_link p a {*/

    /*  color: #149aba;*/
    /*  font-weight: 700;*/
    /*  text-shadow: 10px 10px 15px black;*/
    /*  transition: all .2s linear;*/
    /*}*/

    /*.header_link p a:hover {*/
    /*  color: #1e1e1e;*/
    /*  text-shadow: none;*/
    /*}*/

    /*.header_link p span {*/
    /*  color: #149aba;*/
    /*}*/

    /*.header_link .header_icon span {*/
    /*  margin-right: 20px;*/
    /*  font-family: 'Open Sans', sans-serif;*/
    /*  font-weight: 600;*/
    /*  font-size: 15px;*/
    /*  color: #1e1e1e;*/
    /*}*/

    /*.header_link .header_icon a {*/
    /*  display: inline-block;*/
    /*  margin-right: 10px;*/
    /*}*/

    /*.header_link .header_icon a i {*/
    /*  height: 30px;*/
    /*  width: 30px;*/
    /*  line-height: 30px;*/
    /*  text-align: center;*/
    /*  background-color: #427ad4;*/
    /*  border-radius: 50%;*/
    /*  color: white;*/
    /*  transition: all .2s linear;*/

    /*}*/

    /*.header_link .header_icon a i.youtube {*/
    /*  background-color: #e01e1e;*/
    /*}*/

    /*.header_link .header_icon a i:hover {*/
    /*  color: #427ad4;*/
    /*  background: white;*/
    /*  transform: scale(1.1);*/
    /*}*/

    /*.header_link .header_icon a i.youtube:hover {*/
    /*  background-color: white;*/
    /*  color: #e01e1e;*/
    /*  transform: scale(1.1);*/
    /*}*/

    /*Header link CSS End*/

    /*About css start*/
    .about {
      padding-bottom: 20px;
      padding-top: 20px;
    }

    .about h3 {
      font-family: 'Oswald', sans-serif;
      font-weight: 500;
      font-size: 30px;
      color: #1e1e1e;
      margin-bottom: 20px;
    }

    .about img {
      width: 100%;
      height: 350px;
    }

    .about p {
      font-family: 'Open Sans', sans-serif;
      font-weight: 600;
      font-size: 14px;
      color: #1e1e1e;
      text-align: justify;
      margin-top: 20px;
      transition: all .2s linear;
    }

    .about p:hover {
      text-shadow: 10px 10px 15px black;
    }

    .about p span {
      font-family: 'Open Sans', sans-serif;
      font-weight: 700;
      font-size: 15px;
      color: #3477e2;
    }

    /*About css End*/

    /*Accordian CSS Start*/
    .about_contact {
      padding-top: 60px;
      padding-left: 30px;
    }

    .about_contact button {
      font-family: 'Oswald', sans-serif;
      font-size: 16px;
    }

    .about_contact h4 {
      font-family: 'Oswald', sans-serif;
      font-weight: 500;
      font-size: 18px;
      padding: 18px 0px;
      color: white;
      margin-bottom: 20px;
      background: #2C3E50;
      background: -webkit-linear-gradient(to right, #4CA1AF, #2C3E50);
      background: linear-gradient(to right, #4CA1AF, #2C3E50);
      border-radius: 10px 10px 0px 0px;
    }

    .accordion {
      background: #00B4DB;
      background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);
      background: linear-gradient(to right, #0083B0, #00B4DB);
      color: white;
      cursor: pointer;
      padding: 14px 20px;
      width: 100%;
      text-align: left;
      border: none;
      outline: none;
      margin-bottom: 10px;
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

    .accordion i {
      font-size: 18px;
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

    .panel a {
      display: inline-block;
      font-family: 'Oswald', sans-serif;
      padding: 10px 20px;
      border-radius: 10px;
      background-color: #3477e2;
      color: white;
      font-size: 14px;
      margin-left: 20px;
      box-shadow: 10px 10px 15px gray;
      transition: all .2s linear;
    }

    .panel a:hover {
      box-shadow: none;
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

    .lab_pdf {
      padding-left: 30px;
      text-align: center;
      padding-top: 20px;
    }

    .lab_pdf p {
      font-family: 'Open Sans', sans-serif;
      font-size: 16px;
      font-weight: 600;
      text-align: center;
      margin-bottom: 10px;
      color: #1e1e1e;
    }

    .lab_pdf a {
      display: block;
      height: 300px;
      width: 210px;
      text-align: center;
      line-height: 300px;
      background: red;
      margin-left: 55px;
      background: #314755;
      background: -webkit-linear-gradient(to right, #26a0da, #314755);
      background: linear-gradient(to right, #26a0da, #314755);
      border-radius: 10px;
      transition: all .3s linear;
      position: relative;
    }

    .lab_pdf a:before {
      content: "";
      position: absolute;
      top: 23px;
      left: 15px;
      height: 85%;
      width: 85%;
      border: 3px solid white;
      border-radius: 10px;
    }

    .lab_pdf a i {
      color: white;
      font-size: 55px;
    }

    .price {
      padding-bottom: 50px;
    }

    .price h3 {
      font-family: 'Oswald', sans-serif;
      font-weight: 700;
      font-size: 26px;
      color: #03255c;
      margin-bottom: 40px;
      margin-top: 25px;
    }

    .price img {
      height: 150px;
      width: 380px;
    }



    .bottom_banner {
      background-image: url({{ asset('frontend_assets/WQTL') }}/images/psi-vail-water.jpg);
      background-position: bottom left;
      background-size: cover;
      background-repeat: no-repeat;
      height: 400px;
    }

  </style>
<!--Banner Part start-->
<section>
  <div class="banner_part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner_text">
            <h5>Water Quality Testing Laboratrory</h5>
            <p>WQTL <span> | </span> CoxLab</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Banner Part end-->

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
      <div class="row">
        <div class="col-lg-8">
          <div class="row wqtl_slider mt-5">
            @foreach ($Wqtlhomeimage_infos as $Wqtlhomeimage_info)
            <div class="col-lg-12">
              <img src="{{ asset('uploads/wqtlhome_image') }}/{{ $Wqtlhomeimage_info->image }}" alt="Lab" class="img-fluid">
            </div>
            @endforeach
          </div>
          @foreach ($wqtlhome_infos_des as $wqtlhome_infos_d)
            {!! $wqtlhome_infos_d->description !!}
          @endforeach
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="about_contact">
                <h4 class="text-center"> <i class="far fa-address-card" style="font-size: 22px;margin-right: 5px"></i> Contact Information</h4>
                <button class="accordion"><i class="fas fa-flask"></i> WQTL</button>
                @foreach ($wqtl_infos as $wqtl_info)
                  <div class="panel mb-2" style="background: #1f4037; background: -webkit-linear-gradient(to right, #99f2c8, #1f4037); background: linear-gradient(to right, #99f2c8, #1f4037); border-radius: 0px 0px 10px 10px;">
                  <h6>{{ $wqtl_info->name }}</h6><span>{{ $wqtl_info->designation }}</span>
                  <span class="d-block"><i class="fas fa-phone-volume text-dark"></i> {{ $wqtl_info->phone }}</span>
                  <span><i class="far fa-envelope text-dark"></i> {{ $wqtl_info->email }}</span>
                  <span class="d-block"><i class="fas fa-map-marker-alt text-dark"></i>
                    <span>{{ $wqtl_info->location }}</span>
                  <p></p>
                </div>
                @endforeach

                <button class="accordion"><i class="fas fa-vials"></i> CoxLab</button>
                @foreach ($coxlab_infos as $coxlab_info)
                <div class="panel mb-2" style="background: #1f4037; background: -webkit-linear-gradient(to right, #99f2c8, #1f4037); background: linear-gradient(to right, #99f2c8, #1f4037); border-radius: 0px 0px 10px 10px;">
                  <h6>{{ $coxlab_info->name }}</h6><span>{{ $coxlab_info->designation }}</span>
                  <span class="d-block"><i class="fas fa-phone-volume text-dark"></i> {{ $coxlab_info->phone }}</span>
                  <span><i class="far fa-envelope text-dark"></i> {{ $coxlab_info->email }}</span>
                  <span class="d-block"><i class="fas fa-map-marker-alt text-dark"></i>
                    {{ $coxlab_info->location }}</span>
                  <p></p>
                </div>
                @endforeach

                <button class="accordion"><i class="fas fa-user-tag"></i> Focal Person</button>
                @foreach ($wqtl_infos as $wqtl_info)
                <div class="panel" style="background: #1f4037; background: -webkit-linear-gradient(to right, #99f2c8, #1f4037); background: linear-gradient(to right, #99f2c8, #1f4037); border-radius: 0px 0px 10px 10px;">
                  <h6>{{ $wqtl_info->focal_name }}</h6><span>{{ $wqtl_info->focal_designation }}</span>
                  <span class="d-block"><i class="fas fa-phone-volume text-dark"></i> {{ $wqtl_info->focal_phone }} </span>
                  <span><i class="far fa-envelope text-dark"></i> {{ $wqtl_info->focal_email }}</span>
                  <span class="d-block"><i class="fas fa-map-marker-alt text-dark"></i> {{ $wqtl_info->focal_location }}
                  </span>
                  <p></p>
                </div>
                @endforeach
              </div>
            </div>

            <div class="col-lg-12">
              <div class="about_contact">
                <h4 class="text-center"> <i class="far fa-money-bill-alt" style="font-size: 25px;margin-right: 5px"></i> Test Rate</h4>
                <button class="accordion"><i class="fas fa-flask"></i> WQTL</button>
                <div class="panel mb-2">
                  <img src="{{ asset('frontend_assets/WQTL') }}/images/WQTL_update_logo.jpg" alt="" class="img-fluid" style="width: 60px;height: 80px; margin-top: 10px; margin-left: 20px;">
                  <a href="{{ url('dhaka/lab') }}" style="margin-left: 42px;" target=-"_blank">Price List of WQTL</a>
                </div>

                <button class="accordion"><i class="fas fa-vials"></i> CoxLab</button>
                <div class="panel mb-2">
                  <img src="{{ asset('frontend_assets/WQTL') }}/images/coxlab_updated_logo.JPG" alt="" class="img-fluid" style="width: 100px;height: 60px; margin-top: 10px;">
                  <a href="{{ url('coxlab') }}" target=-"_blank">Price List of CoxLab</a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!--
        <div class="col-lg-4">

          <div class="lab_pdf text-center">
            <p>Download Price List <i class="fas fa-file-download"></i></p>
            <a href="Lab%20Leaflet%202019.pdf" download><i class="fas fa-cloud-download-alt"></i></a>
          </div>
        </div>
-->


      </div>
    </div>
  </div>
</section>
@endsection
<!--about part end-->
