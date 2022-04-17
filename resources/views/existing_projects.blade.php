@extends('layouts.frontendmaster')

@section('frontend_main')
	<style>
		.latest_banner {
			background-image: url({{ asset('frontend_assets') }}/images/p-41.jpg);
			background-attachment: fixed;
			background-position: top left;
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			height: 350px;
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
			background-color: rgba(0, 0, 0, 0.6);
			z-index: -1;
		}

		.latest_banner .latest_banner_text {
			text-align: center;
			padding-top: 190px;
		}

		.latest_banner_text h2 {
			font-family: 'Fira Sans', sans-serif;
			font-weight: 600;
			color: white;
			font-size: 35px;
		}

		.latest_banner_text h5 {
			font-family: 'Lato', sans-serif;
			font-weight: 500;
			color: #42B8D4;
			font-size: 20px;
		}

		/*hardware css start*/
		.hardware {
			padding-top: 30px;
			padding-bottom: 30px;
		}

		.hardware .hardware_headeing h3 {
			font-family: 'Oswald', sans-serif;
			font-size: 28px;
			font-weight: 600;
			color: #2d3436;
			margin-bottom: 15px;
			text-shadow: 10px 10px 15px gray;
		}

		.hardware .hardware_headeing h3 span {
			color: #44bd32;
		}
		/*hardware css end*/

		/*water css start*/
		.water {
			padding-bottom: 60px;
		}

		.water_text {
			padding-top: 25px;
		}

		.water_text h5 {
			font-family: 'Roboto', sans-serif;
			font-size: 16px;
			font-weight: 500;
			color: #2d3436;
			margin-bottom: 25px;
			transition: all .3s linear;
		}
		.water_text h5:hover{
		    text-shadow: 10px 10px 15px gray;
		    color: #009432;
		}

		.water_text h5 span {
			color: #0984e3
		}

		.water_text p {
			font-family: 'Rubik', sans-serif;
			font-size: 14px;
			color: #2d3436;
			font-weight: 500;
			margin-bottom: 30px;
			transition: all .3s linear;
		}

		.water_text a {
			display: inline-block;
			color: #2d3436;
			font-family: 'DM Serif Display', serif;
			font-family: 'Oswald', sans-serif;
			font-size: 15px;
			font-weight: 500;
			transition: all .2s linear;
			margin-bottom: 25px;
			position:relative;
			transition: all .3s linear;
		}
		.water_text a i{
		    color: #e67e22;
		}

		.water_text a:hover {
			box-shadow: none;
		}
		
		.water_text a:before{
		    content: "";
		    position: absolute;
		    bottom: -5px;
		    width: 0px;
		    left: 0;
		    height:2px;
		    background-color: #e67e22;
		    transition: .3s linear all;
		    
		}
		.water_text a:hover::before {
			width:60px;
		}

		/*water css end*/
		
		.water input{
		    border-style: none !important;
		    border: 1px solid #009432 !important;
		    border-radius: 5px !important;
		    padding: 5px !important;
		    height: 30px;
		    font-size: 14px;
		    width: 200px;
		    transition: .3s linear all;
		}
		.water input:focus{
		    border: 2px solid #009432 !important;
		    box-shadow: 10px 10px 15px gray;
		}
		.water label{
		    color: #181718;
		    font-family: 'Oswald', sans-serif;
			font-size: 16px;
			font-weight: 400;
			text-shadow: 10px 10px 15px gray;
		}
		.water select{
		    border-radius: 2px;
            border-style: none;
            width: 60px;
            border: 1px solid #009432;
		}
		table#table_id tr:hover{
		    text-shadow: 10px 10px 15px gray;
		}
		table#table_id{
		    border-radius: 5px !important;
		    background: rgba(103, 224, 84, .9) !important;
		    border-bottom: 1px solid ghostwhite !important;
		}
		table#table_id tr td.sorting_1{
		    background: rgba(103, 224, 84, 0.7);
		    text-align:center;
		}
		table#table_id tr:nth-child(odd) td.sorting_1{
		    background: rgba(103, 224, 84, 0.7);
		    text-align:center;
		}
		table#table_id td{
		    background: rgba(103, 224, 84, 0.4);
		}
		table.dataTable thead th, table.dataTable thead td{
		    border-bottom: 2px solid ghostwhite;
		}
		table#table_id tr:nth-child(odd) td{
		    background: rgba(103, 224, 84, 0.3);
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
							<h2>Existing Projects</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Latest Banner end-->


	<!--link Part start-->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Existing Projects</li>
		</ol>
	</nav>
	<!--link part end-->
	
	
	<!--hardware part start-->
	<section>
		<div class="hardware">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="hardware_headeing">
						    <h3>Overview of <span>Existing Projects </span>:</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--hardware part end-->
	
	
	<!--project1 part start-->
	<section>
		<div class="water mb-4">
			<div class="container">
				<table id="table_id" class="display table-striped">
					<thead>
						<tr>
							<th>Serial</th>
							<th class="text-center">Project Title</th>
							<th>Year</th>
							<th>Funding Agency</th>
							<th>Thematic Area</th>
							<th>More</th>
						</tr>
					</thead>
					
					<tbody>
					    <?php $sl_number = 1 ?>
						@foreach ($all_existing_project_infoes as $all_existing_project_info)

						<tr>
							<td>
							    <b>{{ $sl_number }}</b>
							</td>
							<td>
								<div class="water_text">
									<h5>{{ $all_existing_project_info->existing_title }}</h5>
								</div>
							</td>
							<td>
								<div class="water_text">
									<p>{{ $all_existing_project_info->year }}</p>
								</div>
							</td>
							<td>
								<div class="water_text">
									<p>{{ $all_existing_project_info->existing_donar }}</p>
								</div>
							</td>
							<td>
								<div class="water_text">
									<p>{{ $all_existing_project_info->thematic_area }}</p>
								</div>
							</td>
							<td style="width:80px">
								<div class="water_text">
									<a href="{{ url('existing/project/details') }}/{{ $all_existing_project_info->id }}"><i class="fas fa-bars"></i> Details</a>
								</div>
							</td>

						</tr>
						<?php $sl_number++ ?>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</section>
	<!--project part end-->
  
    @section('data_table')
    	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script>
      		$(document).ready(function() {
      			$('#table_id').DataTable();
      		});
      		
      		// $(document).ready(function() {
      		//     $('#table_id').dataTable({
      		         
      		//     });
      		// });
      	</script>
    @endsection

@endsection
