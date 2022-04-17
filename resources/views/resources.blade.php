@extends('layouts.frontendmaster')

@section('frontend_main')
  <style>
  .latest_banner {
    background-image: url({{ asset('frontend_assets') }}/images/regional5.jpg);
    background-position: top left;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    height: 450px;
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
    background-color: rgba(0, 0, 0, 0.8);
    z-index: -1;
  }

  .latest_banner .latest_banner_text {
    text-align: center;
    padding-top: 170px;
  }

  .latest_banner_text h2 {
    font-family: 'Raleway', sans-serif;
    font-weight: 600;
    color: white;
    font-size: 42px;
    text-shadow: 10px 10px 15px black;
  }

  .latest_banner_text h5 {
    font-family: 'Lato', sans-serif;
    font-weight: 500;
    color: #42B8D4;
    font-size: 16px;
    margin-top:5px;
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
    font-weight: 600;
    font-size: 18px;
    color: white;
  }

  .publish_banner_text p {
    font-family: 'Raleway', sans-serif;
    font-weight: 500;
    color: #1e1e1e;
    font-size: 14px;
    margin-top: 20px;
  }

  .publication {
    padding-top: 60px;
    padding-bottom: 60px;
  }

  .publication .section_header {
    padding-bottom: 40px;
  }

  .publication .section_header h2 {
    font-size: 30px;
    font-family: 'Oswald', sans-serif;
    font-weight: 600;
    color: #2d3436;
  }

  .publication_details {
    margin-bottom: 50px;
  }

  .publication .publication_img {
    height: 250px;
    margin-bottom: 20px;
    border-bottom: 2px solid #42B8D4;
    overflow: hidden;
  }
  .publication {
    padding-top: 50px;
    padding-bottom: 60px;
  }

  .publication .section_header {
    padding-bottom: 40px;

  }
  .publication .section_header h2{
    font-size: 30px;
  }

  .publication_details {
    margin-bottom: 50px;
  }

  .publication .publication_img {
    height: 180px;
    margin-bottom: 10px;
    border-bottom: 2px solid #42B8D4;
    overflow: hidden;
    position: relative;
    transition: all .3s linear;
  }

  .publication .publication_img .img_overlay{
    position: absolute;
    top: 0;
    left: 0;
    height: 200px;
    width: 100%;
    line-height: 200px;
    text-align: center;
    background: rgba(0, 0, 0, 0.6);
    z-index: 1;
    border-radius: 3px;
    opacity: 0;
    transition: all .3s linear;
  }
  .publication .publication_img:hover .img_overlay{
    opacity: 1;
  }
  .publication .publication_img .img_overlay i{
    font-size: 25px;
    color: whitesmoke
  }


  .publication_text {
    height: 70px;
    overflow: hidden;
  }

  .publication h5 {
    font-family: 'Oswald', sans-serif;
    font-size: 20px;
    font-weight: 400;
    color: #1e1e1e;
  }
  
     .publication_link a {
      display: inline-block;
      padding: 3px 8px;
      font-family: 'Lato', sans-serif;
      font-weight: 600;
      font-size: 14px;
      color: #1e1e1e;
      background-color: #42B8D4;
      border-radius: 5px;
    }




  /*publication category start*/
  .pub_category {
    padding-bottom: 80px;
  }

  .category_details {
    text-align: center;
    transition: all .2s linear;
    border-radius: 5px;
    box-shadow: 15px 15px 15px gray
  }

  .category_details a {
    display: block;
    padding-top: 15px;
    padding-bottom: 15px;
    /*height: 90px;*/
    background: #42B8D4;
    border-radius:5px;
    margin-bottom:30px;
    
    background: #0F2027;
    background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
    background: linear-gradient(to right,
    #2C5364, #203A43, #0F2027);
    color:white;
  }

  .category_details i {
    font-size: 25px;
    margin-bottom: 10px;
    transition: all .3s linear;
    color: #e7e7e7;
  }

  .category_details h5 {
    font-family: 'Oswald', sans-serif;
    font-size: 18px;
    font-weight: 500;
    color: #2d3436;
    color: #e7e7e7;
  }

  .category_details:hover {
    box-shadow: none;
  }

  .category_details:hover i {
    color: whitesmoke
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
							<h2>Publications</h2>
							<h5>Policy | Reports | Materials | Others</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="publish_banner_text">
				<h3>NGO</h3>
				<h3>Forum</h3>
				<h3>Publication</h3>
				<p>
					Different documents published from NGO Forum Bangladesh
				</p>
			</div>
		</div>
	</section>
	<!--Latest Banner end-->


	<!--publication start-->
	<section>
		<div class="publication">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section_header">
							<h2><span>|| </span>Publication Categories<span> </span></h2>
						</div>
					</div>
				</div>
				<div class="pub_category">
					<div class="row">
            @php
                $resources_categories = App\resourcesCategory::all();
            @endphp

            <div class="col-md-2">
              <div class="category_details">
                <a href="{{ url("resources") }}">
                  <h5><i class="fas fa-file-alt"></i></h5>
                  <h5>All Publications</h5>
                </a>
              </div>
            </div>

            @foreach ($resources_categories as $resources_categorie)
            <div class="col-md-2">
              <div class="category_details">
                <a href="{{ url('category_wise_resources') }}/{{ $resources_categorie->id }}">
                  <h5><i class="fas fa-file-alt"></i></h5>
                  <h5>{{ $resources_categorie->category_name }}</h5>
                </a>
              </div>
            </div>
            @endforeach
					</div>
				</div>

				<div class="row">
          @foreach ($all_resource_infos as $all_resource_info)
            <div class="col-lg-2">
              <div class="publication_details">
                <div class="publication_img">
                  <img src="{{ asset('uploads/all_resources_image') }}/{{ $all_resource_info->resources_image }}" alt="" class="img-fluid">
                  <div class="img_overlay">
                    <a href="{{ asset('uploads/all_resources_image') }}/{{ $all_resource_info->resources_image }}"><i class="fas fa-search-plus"></i></a>
                  </div>
                </div>
                <div class="publication_text">
                  <h5>{{ $all_resource_info->image_title }}</h5>
                </div>
                <div class="publication_link text-center">
                  <a href="{{ asset('uploads/all_resources_image') }}/{{ $all_resource_info->file_download }}" download>Download <i class="fas fa-cloud-download-alt"></i></a>
                </div>
              </div>
            </div>
          @endforeach
				</div>
			</div>
		</div>
	</section>
	<!--publication end-->
    @section('custom_js')
      <script src="{{ asset('frontend_assets') }}/js/custom.js"></script>
    @endsection

@endsection
