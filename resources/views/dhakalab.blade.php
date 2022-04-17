@extends('layouts.frontendwqtl')

@section('frontend_main')
<style>
    /*Banner CSS start*/
    .banner_part {
        background-image: url(<?php echo url('frontend_assets/WQTL/images/banner1.jpg') ?>);
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
        background: rgba(44, 62, 80, 0.7);
        background: -webkit-linear-gradient(to right, rgba(76, 161, 175, 0.7), rgba(44, 62, 80, 0.7));
        background: linear-gradient(to right, rgba(76, 161, 175, 0.7), rgba(44, 62, 80, 0.7));
    }

    .banner_part .banner_text {
        text-align: center;
        padding-top: 190px;
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
        padding-bottom: 20px;
    }

    .about h3 {
        font-family: 'Oswald', sans-serif;
        font-weight: 500;
        font-size: 28px;
        color: #2259b1;
        margin-bottom: 20px;
    }

    .about p {
        font-family: 'Open Sans', sans-serif;
        font-weight: 600;
        font-size: 14px;
        color: #1e1e1e;
        text-align: justify;
    }

    /*about css end*/

    /*Accordian CSS Start*/
    .about_contact {
        padding-top: 20px;
        padding-left: 30px;
    }

    .about_contact h4 {
        font-family: 'Oswald', sans-serif;
        font-weight: 500;
        font-size: 18px;
        color: #1e1e1e;
        margin-bottom: 20px;
        border-left: 3px solid #00B4DB;
        border-right: 3px solid #00B4DB;
    }

    .about_contact button {
        font-family: 'Oswald', sans-serif;
        font-size: 16px;
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

    .extra {
        margin-top: 12px;
    }

    .new_color {
        background: #304352;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #d7d2cc, #304352);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #d7d2cc, #304352);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .accordion i {
        font-size: 20px;
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

    /*Price part start*/
    .price_list {
        padding-top: 25px;
        padding-bottom: 50px;
    }

    .price_list h3 {
        font-family: 'Oswald', sans-serif;
        font-weight: 500;
        font-size: 25px;
        color: #1e1e1e;
        margin-bottom: 20px;
    }

    .price_list button {
        font-family: 'Oswald', sans-serif;
        font-weight: 400;
        font-size: 20px;
    }

    /*price part end*/

    /*Package Start*/
    .package {
        padding-top: 10px;
        padding-bottom: 50px;
    }

    .package h3 {
        font-family: 'Oswald', sans-serif;
        font-weight: 500;
        font-size: 25px;
        margin-bottom: 10px;
    }

    .package_details {
        height: 160px;
        margin-top: 10px;
        padding-top: 20px;
        padding-right: 30px;
        background: #304352;
        background: -webkit-linear-gradient(to right, #d7d2cc, #304352);
        background: linear-gradient(to right, #d7d2cc, #304352);
        border-radius: 10px;
        position: relative;
        cursor: pointer;
    }

    .package_details h5 {
        font-family: 'Ranga', cursive;
        font-weight: 500;
        font-size: 30px;
        color: white;
        margin-bottom: 10px;
    }

    .package_details p {
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: white;
        width: 260px;
        float: right;
    }

    .package_details .package_name {
        position: absolute;
        top: 50%;
        left: 0;
        padding: 12px 30px;
        transform: translateY(-50%);
        background: #4CA1AF;
        background: -webkit-linear-gradient(to right, #C4E0E5, #4CA1AF);
        background: linear-gradient(to right, #C4E0E5, #4CA1AF);
        border: 2px solid white;
        border-radius: 0px 20px 20px 0px;
        transition: all .3s linear;

    }

    .package_details:hover .package_name {
        left: 40px;
    }

    .package_name h6 {
        font-family: 'Ranga', cursive;
        font-size: 25px;
    }

    .package_name span {
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        font-weight: 700
    }

    /*package end*/

    .bottom_banner {
        background-image: url(<?php echo url('frontend_assets/WQTL/images/psi-vail-water.jpg') ?>);
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
                        <h5>(WQTL)</h5>
                        <p>Central Office, NGO Forum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--banner part end-->

<!--about part start-->
<section>
    <div class="about">
        <div class="container">
            @foreach ($wqtl_infos as $wqtl_info)
            <div class="row">
                <div class="col-lg-8">
                    <div class="about_text">
                        <div class="row">
                            <div class="col-lg-4 text-center pt-4">
                                <img src="{{ asset('uploads/wqtl_image') }}/{{ $wqtl_info->logo }}" alt="Dhaka lab" class="img-fluid" style="width: 150px;">
                            </div>
                            <div class="col-lg-8 pt-3">
                                <p class="mb-3">{{ $wqtl_info->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about_contact">
                        <h4 class="text-center"> <i class="far fa-address-card"
                                style="font-size: 22px;margin-right: 5px"></i> Contact Information</h4>
                        <button class="accordion"><i class="fas fa-flask"></i> WQTL</button>
                        <div class="panel mb-2"
                            style="background: #1f4037; background: -webkit-linear-gradient(to right, #99f2c8, #1f4037); background: linear-gradient(to right, #99f2c8, #1f4037); border-radius: 0px 0px 10px 10px;">
                            <h6>{{ $wqtl_info->name }}</h6><span>{{ $wqtl_info->designation }}</span>
                            <span class="d-block"><i class="fas fa-phone-volume text-dark"></i>
                                {{ $wqtl_info->phone }}</span>
                            <span><i class="far fa-envelope text-dark"></i>{{ $wqtl_info->email }}</span>
                            <span class="d-block pb-3"><i class="fas fa-map-marker-alt text-dark"></i>
                                {{ $wqtl_info->location }}</span>
                            <p></p>
                        </div>

                        <button class="accordion"><i class="fas fa-user-tag"></i> Focal Person</button>
                        <div class="panel"
                            style="background: #1f4037; background: -webkit-linear-gradient(to right, #99f2c8, #1f4037); background: linear-gradient(to right, #99f2c8, #1f4037); border-radius: 0px 0px 10px 10px;">
                            <h6>{{ $wqtl_info->focal_name }}</h6><span>{{ $wqtl_info->focal_designation }}</span>
                            <span class="d-block"><i class="fas fa-phone-volume text-dark"></i>
                                {{ $wqtl_info->focal_phone }} </span>
                            <span><i class="far fa-envelope text-dark"></i> {{ $wqtl_info->focal_email }}</span>
                            <span class="d-block pb-3""><i class=" fas fa-map-marker-alt text-dark"></i>
                                {{ $wqtl_info->focal_location }}</span>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--about part end-->

<!--Price part start-->
<section>
    <div class="price_list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Parameter wise test rate :</h3>
                </div>


                {{--  just static design for test rates  --}}
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="list_1">
                                <button class="accordion"><i class="fas fa-flask"></i>Physical &amp; Aggregate Properties</button>
                                <div class="panel">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL No.</th>
                                                <th>Parameters</th>
                                                <th>Method</th>
                                                <th>Unit Cost (BDT)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>pH</td>
                                                <td>pH meter</td>
                                                <td>118</td>

                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td>Alkalinity</td>
                                                <td>Titrimetric</td>
                                                <td>176</td>

                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>Conductivity</td>
                                                <td>Potentiometry</td>
                                                <td>235</td>

                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <td>Hardness</td>
                                                <td>Titrimetric</td>
                                                <td>294</td>

                                            </tr>
                                            <tr>
                                                <th>5</th>
                                                <td>Salinity</td>
                                                <td>Potentiometry</td>
                                                <td>176</td>

                                            </tr>
                                            <tr>
                                                <th>6</th>
                                                <td>TDS</td>
                                                <td>Dried at 180</td>
                                                <td>412</td>

                                            </tr>
                                            <tr>
                                                <th>7</th>
                                                <td>TS</td>
                                                <td>Dried at 103-105</td>
                                                <td>353</td>

                                            </tr>
                                            <tr>
                                                <th>8</th>
                                                <td>TSS</td>
                                                <td>Dried at 103-105</td>
                                                <td>4571</td>

                                            </tr>
                                            <tr>
                                                <th>9</th>
                                                <td>Turbidity</td>
                                                <td>Nephelometric</td>
                                                <td>176</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="list-2">
                                <div class="list_1">
                                    <button class="accordion"><i class="fas fa-truck-loading"></i>Metals</button>
                                    <div class="panel">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>SL No.</th>
                                                    <th>Parameters</th>
                                                    <th>Method</th>
                                                    <th>Unit Cost (BDT)</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td>Antimony</td>
                                                    <td>AAS</td>
                                                    <td>941</td>

                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Arsenic</td>
                                                    <td>AAS</td>
                                                    <td>647</td>

                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>Cadmium</td>
                                                    <td>AAS</td>
                                                    <td>765</td>

                                                </tr>
                                                <tr>
                                                    <th>4</th>
                                                    <td>Calcium</td>
                                                    <td>AAS</td>
                                                    <td>765</td>

                                                </tr>
                                                <tr>
                                                    <th>5</th>
                                                    <td>Chromium</td>
                                                    <td>AAS</td>
                                                    <td>765</td>

                                                </tr>
                                                <tr>
                                                    <th>6</th>
                                                    <td>Cobalt</td>
                                                    <td>AAS</td>
                                                    <td>941</td>

                                                </tr>
                                                <tr>
                                                    <th>7</th>
                                                    <td>Copper</td>
                                                    <td>AAS</td>
                                                    <td>412</td>

                                                </tr>
                                                <tr>
                                                    <th>8</th>
                                                    <td>Iron</td>
                                                    <td>Spectrophotometer</td>
                                                    <td>412</td>

                                                </tr>
                                                <tr>
                                                    <th>9</th>
                                                    <td>Lead</td>
                                                    <td>AAS</td>
                                                    <td>1,059</td>

                                                </tr>
                                                <tr>
                                                    <th>10</th>
                                                    <td>Magnesium</td>
                                                    <td>AAS</td>
                                                    <td>706</td>

                                                </tr>
                                                <tr>
                                                    <th>11</th>
                                                    <td>Manganese</td>
                                                    <td>AAS</td>
                                                    <td>706</td>

                                                </tr>
                                                <tr>
                                                    <th>12</th>
                                                    <td>Nickel </td>
                                                    <td>AAS</td>
                                                    <td>765</td>

                                                </tr>
                                                <tr>
                                                    <th>13</th>
                                                    <td>Potassium</td>
                                                    <td>AAS/F</td>
                                                    <td>706</td>

                                                </tr>
                                                <tr>
                                                    <th>14</th>
                                                    <td>Selenium</td>
                                                    <td>AAS</td>
                                                    <td>1,059</td>

                                                </tr>
                                                <tr>
                                                    <th>15</th>
                                                    <td>Silver</td>
                                                    <td>AAS</td>
                                                    <td>1,412</td>

                                                </tr>
                                                <tr>
                                                    <th>16</th>
                                                    <td>Sodium</td>
                                                    <td>AAS/F</td>
                                                    <td>706</td>

                                                </tr>
                                                <tr>
                                                    <th>17</th>
                                                    <td>Zinc</td>
                                                    <td>AAS</td>
                                                    <td>765</td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="list_1">
                                <button class="accordion extra"><i class="fas fa-sitemap"></i>Inorganic Nonmetallic Constituents</button>
                                <div class="panel">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL No.</th>
                                                <th>Parameters</th>
                                                <th>Unit Cost (BDT)</th>
                                                <th>Method</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style="width: 15%;">1</th>
                                                <td style="width: 25%">Nitrite</td>
                                                <td style="width: 30%; text-align: center">353</td>
                                                <td style="width: 30%">Potentiometry</td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td>Ammonia</td>
                                                <td style="width: 30%; text-align: center">412</td>
                                                <td>Photometric</td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>Chloride</td>
                                                <td style="width: 30%; text-align: center">353</td>
                                                <td>Titrimetric</td>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <td>DO</td>
                                                <td style="width: 30%; text-align: center">294</td>
                                                <td>Titrimetric</td>
                                            </tr>
                                            <tr>
                                                <th>5</th>
                                                <td>Fluoride</td>
                                                <td style="width: 30%; text-align: center">353</td>
                                                <td>Potentiometry</td>
                                            </tr>
                                            <tr>
                                                <th>6</th>
                                                <td>Nitrate</td>
                                                <td style="width: 30%; text-align: center">353</td>
                                                <td>Potentiometry</td>
                                            </tr>
                                            <tr>
                                                <th>7</th>
                                                <td>Phosphate</td>
                                                <td style="width: 30%; text-align: center">353</td>
                                                <td>Photometric</td>
                                            </tr>
                                            <tr>
                                                <th>8</th>
                                                <td>R Chloride</td>
                                                <td style="width: 30%; text-align: center">353</td>
                                                <td>Titrimetric</td>
                                            </tr>
                                            <tr>
                                                <th>9</th>
                                                <td>Sulphate</td>
                                                <td style="width: 30%; text-align: center">353</td>
                                                <td>Nephelometric</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="list-2">
                                <div class="list_1">
                                    <button class="accordion extra"><i class="fab fa-mandalorian"></i>Aggregate Organic Constituents</button>
                                    <div class="panel">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>SL No.</th>
                                                    <th>Parameters</th>
                                                    <th>Unit Cost (BDT)</th>
                                                    <th>Method</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th style="width: 20%;">1</th>
                                                    <td style="width: 15%;">BOD</td>
                                                    <td style="width: 55%; text-align: center">824</td>
                                                    <td style="width: 30%;"> 5 Day BOD test &nbsp; &nbsp; &nbsp;&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>COD</td>
                                                    <td style="width: 30%; text-align: center">1,059</td>
                                                    <td>Open Reflux</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="list-2">
                                <div class="list_1">
                                    <button class="accordion extra"><i class="fas fa-microscope"></i>Microbiological Examination</button>
                                    <div class="panel">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>SL No.</th>
                                                    <th>Parameters</th>
                                                    <th>Unit Cost (BDT)</th>
                                                    <th>Method</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th style="width: 20%;">1</th>
                                                    <td style="width: 25%;">TC</td>
                                                    <td style="width: 45%; text-align: center">471</td>
                                                    <td style="width: 30%;">Membrane Filter Technique</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>E.coli</td>
                                                    <td style="width: 30%; text-align: center">588</td>
                                                    <td>Membrane Filter Technique</td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>FC</td>
                                                    <td style="width: 30%; text-align: center">471</td>
                                                    <td>Membrane Filter Technique</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{--  price section developed very important  --}}
                {{--  @foreach ($all_wqtl_testrates as $all_wqtl_testrate)
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-5 mb-3">
                            <div class="list_1">
                                <button class="accordion"><i
                                        class="fas fa-flask"></i>{{ $all_wqtl_testrate->category_name }}</button>
                                <div class="panel">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL No.</th>
                                                <th>Parameters</th>
                                                <th>Method</th>
                                                <th>Unit Cost (BDT)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $all_wqtl_values = App\Allwqtltestrate::where('testrate_category_id',
                                            $all_wqtl_testrate->id)->get();
                                            @endphp
                                            @foreach ($all_wqtl_values as $all_wqtl_value)
                                            <tr>
                                                <th>{{ $all_wqtl_value->serial_number }}</th>
                                                <td>{{ $all_wqtl_value->parameters }}</td>
                                                <td>{{ $all_wqtl_value->method }}</td>
                                                <td>{{ $all_wqtl_value->cost }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach  --}}

            </div>
        </div>
    </div>
</section>
<!--Price part end-->

<!--package start-->
<section>
    <div class="package">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Special Package for Testing Regular Drinking Water Quality :</h3>
                </div>
                @foreach ($all_packeges as $all_packeges)
                <div class="col-lg-6">
                    <div class="package_details text-right">
                        <h5>Parameter</h5>
                        <p>{{ $all_packeges->parameters }}</p>
                        <div class="package_name">
                            <h6>{{ $all_packeges->name }}</h6>
                            <span>{{ $all_packeges->price }}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!--package end-->


<!--bottom banner end-->
@endsection
