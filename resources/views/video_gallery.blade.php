@extends('layouts.frontendmaster')

@section('frontend_main')
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
  <style>
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
  		

        .tz-gallery {
            padding: 60px;
        }

        .tz-gallery .thumbnail {
            padding: 0;
            margin-bottom: 30px;
            background-color: #fff;
            border-radius: 4px;
            border: none;
            transition: 0.15s ease-in-out;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
        }

        .tz-gallery .thumbnail:hover {
            transform: translateY(-10px) scale(1.02);
        }

        .tz-gallery .lightbox img {
            border-radius: 4px 4px 0 0;
        }

        .tz-gallery .caption{
            padding: 26px 30px;
            text-align: center;
        }

        .tz-gallery .caption h3 {
            font-size: 14px;
            font-weight: bold;
            margin-top: 0;
        }

        .tz-gallery .caption p {
            font-size: 12px;
            color: #7b7d7d;
            margin: 0;
        }

        .baguetteBox-button {
            background-color: transparent !important;
        }
  
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
  							<h2>Video Gallery</h2>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<!--Latest Banner end-->
  	
  	
  	<div class="container gallery-container">
    
    <div class="tz-gallery">

        <div class="row">

            @foreach($videos as $video)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="../images/park.jpg">
                        <iframe width="100%" height="200" src="{{$video->video_link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </a>
                    <div class="caption">
                        <h3>{{$video->title}}</h3>
                        <p>{{substr($video->caption,0,128)}}...</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>


  	
@endsection
