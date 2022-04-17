@extends('layouts.frontendprogarmme')

@section('frontend_main')
<style>
    /*banner css start*/
    .banner_part {
        background-image: url({{asset('frontend_assets/Programme')}}/images/Capacity%20building.jpg);
        background-attachment: fixed;
        background-position: top left;
        background-repeat: no-repeat;
        background-size: cover;
        height: 440px;
        position: relative;
    }

    .banner_part:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .banner_text {
        text-align: center;
        padding-top: 200px;
    }

    .banner_text h3 {
        font-family: 'Roboto', sans-serif;
        font-size: 42px;
        font-weight: 600;
        color: #e7e7e7;
        margin-bottom: 10px;
        display: inline-block;
        text-shadow: 10px 10px 15px black;
    }

    .banner_text p {
        font-family: 'Lato', sans-serif;
        font-size: 20px;
        font-weight: 700;
        color: #00AEEF;
    }

    .banner_text p span {
        color: #00AEEF;
    }

    /*banner css end*/

    /*hardware css start*/
    .hardware {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .hardware .hardware_headeing h3 {
        font-family: 'Oswald', sans-serif;
        font-size: 32px;
        font-weight: 600;
        color: #2d3436;
        margin-bottom: 20px;
    }

    .hardware .hardware_headeing h3 span {
        color: #0984e3;
    }

    .hardware .card-header {
        background: rgba(52, 152, 219, 0.3)
    }

    .hardware .card-body {
        background: rgba(123, 237, 159, 0.2)
    }

    .hardware .card-body p {
        font-family: 'Roboto', sans-serif;
    }

    .hardware .card-header h5 {
        font-family: 'Oswald', sans-serif;
        font-size: 20px;
        font-weight: 500;
        color: #2d3436;

    }

    /*hardware css end*/

    /*organization css start*/
    .organization {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .organization .organization_headeing h3 {
        font-family: 'Oswald', sans-serif;
        font-size: 32px;
        font-weight: 600;
        color: #2d3436;
        margin-bottom: 20px;
    }

    .organization .organization_headeing h3 span {
        color: #0984e3;
    }

    .organization .card-header h5 {
        font-family: 'Oswald', sans-serif;
        font-size: 20px;
        font-weight: 500;
        color: #2d3436;

    }

    .organization .card-header {
        background: rgba(211, 84, 0, 0.3)
    }

    .organization .card-body {
        background: rgba(255, 107, 129, 0.1)
    }

    .organization .card-body p {
        font-family: 'Roboto', sans-serif;
    }

    /*organization css end*/

    /*others css start*/
    .others {
        padding-bottom: 80px;
    }

    .others .card-header h5 {
        font-family: 'Oswald', sans-serif;
        font-size: 20px;
        font-weight: 500;
        color: #2d3436;

    }

    .others .card-header {
        background: rgba(0, 148, 50, 0.3)
    }

    .others .card-body {
        background: rgba(46, 213, 115, 0.1);
    }

    .others .card-body p {
        font-family: 'Roboto', sans-serif;
    }

    /*others css end*/
</style>

<!--Header Part Start-->
<section id="header_part">
    <div class="header wow bounceInDown" data-wow-duration="1.6s">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('frontend_assets') }}/images/NGOF_Logo_white.png" alt="NGO Forum"
                        class="img-fluid pt-2">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#about_part" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Who We Are
                            </a>
                            <div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('aboutus') }}">About Us</a>
                                <a class="dropdown-item" href="{{ url('policy') }}">Policy Formulating Structure</a>
                                <a class="dropdown-item" href="{{ url('network_affiliation') }}">Network Affiliation</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Programme
                            </a>

                            @php
                            $programme_categories = App\programme_categorie::all();
                            @endphp
                            <div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
                                @foreach ($programme_categories as $programme_categorie)
                                <a class="dropdown-item"
                                    href="{{ url('category/wise/programme') }}/{{ $programme_categorie->id }}">{{ $programme_categorie->category_name }}</a>
                                @endforeach
                                <a class="dropdown-item" href="{{ url('humanitarian') }}">Humanitarian & Emergency Support</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('training') }}"> Training Service & Facilities</a>
                                <a class="dropdown-item" href="{{ url('wqtl') }}">Water Quality Testing Laboratory</a>
                                <a class="dropdown-item" href="{{ url('iec') }}">IEC / BCC Material Development</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
                            <div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('existing_projects') }}">Existing Projects</a>
                                <a class="dropdown-item" href="{{ url('prev_project') }}">Implemented Projects</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Resources </a>
                            @php
                            $resources_categories = App\resourcesCategory::all();
                            @endphp
                            <div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ url('resources')}}">Publications</a>

                                <a class="dropdown-item" href="{{ url('photo') }}">Photo Galleries</a>
                                <a class="dropdown-item" href="#">Videos</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                News &amp; Media
                            </a>
                            @php
                            $NewsCategories = App\NewsCategory::all();
                            @endphp
                            <div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
                                @foreach ($NewsCategories as $NewsCategory)
                                <a class="dropdown-item"
                                    href="{{ url('category/wise/news') }}/{{ $NewsCategory->id }}">{{ $NewsCategory->category_name }}</a>
                                @endforeach
                                {{-- <a class="dropdown-item" href="{{ url('pressmedia') }}">Press &amp; Media</a> --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Get Involved
                            </a>
                            <div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('contact') }}">Contact</a>
                                <a class="dropdown-item" href="{{ url('contact') }}">Central Office</a>
                                <a class="dropdown-item" href="{{ url('departments') }}">Cell/Department</a>
                                <a class="dropdown-item" href="{{ url('regional_office') }}">Regional Offices</a>
                                <a class="dropdown-item" href="{{ url('project_office') }}">Project Offices</a>
                                <a class="dropdown-item" href="{{ url('career') }}">Career</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                MIS Portal
                            </a>
                            <div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('program_status') }}">Programme Status</a>
                                <a class="dropdown-item" href="{{ url('at_a_glances') }}">At a Glance</a>
                                <a class="dropdown-item" href="{{ url('login') }}">Log In</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</section>
<!--Header Part End-->

<!--banner part start-->
<section>
    <div class="banner_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_text">
                        <h3>Manual , Module and Guidelines</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--banner part end-->

<!--link Part start-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="software.html">Health & Hygiene Promotion</a></li>
        <li class="breadcrumb-item"><a href="#">Capacity Building Initiatives</a></li>
        <li class="breadcrumb-item active" aria-current="page">List of Manual &amp; Module and Guidelines</li>
    </ol>
</nav>
<!--link part end-->

<!--hardware part start-->
<section>
    <div class="hardware">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="hardware_headeing">
                        <h3>Manual / Module and Guidelines on <span>Water Sanitation and Hygiene</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>ToT on WaSH </h5>
                        </div>
                        <div class="card-body">
                            <p><b>1.</b> &nbsp;&nbsp;ToT on Sustainable WaSH </p>
                            <p><b>2.</b> &nbsp;&nbsp;Training on Developing a Curriculum on WaSH</p>
                            <p><b>3.</b> &nbsp;&nbsp;Hygiene Promotion for Health worker</p>
                            <p><b>4.</b> &nbsp;&nbsp;Hygiene Promotion for Field worker</p>
                            <p><b>5.</b> &nbsp;&nbsp;Participatory Hygiene And Sanitation Transformation(PHAST)</p>
                            <p><b>6.</b> &nbsp;&nbsp;Sanitation and Hygiene Promotion for School Teacher</p>
                            <p><b>7.</b> &nbsp;&nbsp;Hygiene Promotion Manual</p>
                            <p><b>8.</b> &nbsp;&nbsp;Community led Total Sanitation(CLTS) Program</p>
                            <p><b>9.</b> &nbsp;&nbsp;Arsenic mitigation and water quality</p>
                            <p><b>10</b>. Arsenic Awareness &amp; Mitigation</p>
                            <p><b>11</b>. Health Practitioners on Arsenicosis Patients Management</p>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5>WASH Governance</h5>
                        </div>
                        <div class="card-body">
                            <p><b>1.</b> WaSH Governance and services</p>
                            <p><b>2.</b> Sustainability of WaSH Governance and services</p>
                            <p><b>3.</b> Community management promotion and wash governance</p>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5>Climate change and Disaster management</h5>
                        </div>
                        <div class="card-body">
                            <p><b>1.</b> Awareness building on Climate resilient Wash service </p>
                            <p><b>2.</b> Disaster preparedness and management</p>
                            <p><b>3.</b> Disaster resilient WaSH development </p>
                            <p><b>4.</b> Disaster Preparedness and Management WaSH </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Customized / tailor made modules Module</h5>
                        </div>
                        <div class="card-body">
                            <p><b>1. </b> &nbsp;&nbsp;TOT Module for BRAC WASH -BRAC</p>
                            <p><b>2. </b> &nbsp;&nbsp;TOT on Arsenic Mitigation and organizational </p>
                            <p><b>3. </b> &nbsp;&nbsp;TOT on Sanitation, Hygiene Education and Water-SHEWA-B</p>
                            <p><b>4. </b> &nbsp;&nbsp;ToT on Hygiene promotion -URB</p>
                            <p><b>5. </b> &nbsp;&nbsp;Sensitization of Water use for urban Community-CEGIS</p>
                            <p><b>6. </b> &nbsp;&nbsp;Water Supply, Sanitation and Hygiene Promotion -BCAS</p>
                            <p><b>7. </b> &nbsp;&nbsp;Wash for Union level-BRAC</p>
                            <p><b>8. </b> &nbsp;&nbsp;Wash for Upazilla level-BRAC</p>
                            <p><b>9. </b> &nbsp;&nbsp;Sanitation Program Implementation for Primary Teacher(DPHE)</p>
                            <p><b>10.</b> School Hygiene Promotion Guideline-DPHE</p>
                            <p><b>11.</b> PHAST Step- by -Step guide-SIDA,WHO &amp; UNDP </p>
                            <p><b>12.</b> Hygiene and Sanitation development-UPI</p>
                            <p><b>13.</b> Promotional activity for Safe water and Sanitation-IWS for Costal
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Belt</p>
                            <p><b>14.</b> Rural Sanitation, Hygiene and Water Supply Project
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ESHWSRA(GOB-UNICEF )Project</p>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5>Technical Skill Development Training</h5>
                        </div>
                        <div class="card-body">
                            <p><b>1.</b> Guideline on Safe Water Technology and latrine Installation </p>
                            <p><b>2.</b> Technology Marketing for New Latrine producer</p>
                            <p><b>3.</b> Module on deep-set Pump for caretaker </p>
                            <p><b>4.</b> Caretaker manual on Rain water harvesting system</p>
                            <p><b>5.</b> Rain water Harvesting System for Mason</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hardware part end-->

<!--organization start-->
<section>
    <div class="organization">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="organization_headeing">
                        <h3>Manual / Module and Guidelines on <span> Organizational Development and Management</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row border-bottom pb-4">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Project Management</h5>
                        </div>
                        <div class="card-body">
                            <p><b>1.</b> Organizational development and management</p>
                            <p><b>2.</b> Communication &amp; Facilitation skills development </p>
                            <p><b>3.</b> Orientation on WaSH for Village Police/Ansar VDP</p>
                            <p><b>4.</b> Sustainable WaSH program Management </p>
                            <p><b>5.</b> WaSH program Management for PNGOs Managers </p>
                            <p><b>6.</b> Logical Framework and Project planning </p>
                            <p><b>7.</b> Project Cycle Management</p>
                            <p><b>8.</b> Effective Participation of LGI’s on Rural WaSH Program</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Gender Development on WaSH</h5>
                        </div>
                        <div class="card-body">
                            <p><b>1.</b> Gender Sensitization </p>
                            <p><b>2.</b> Gender Policy development </p>
                            <p><b>3.</b> Gender Issues in WaSH </p>
                            <p><b>4.</b> WaSH Program and Gender</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Financial Management</h5>
                        </div>
                        <div class="card-body">
                            <p><b>1.</b> Finance management &amp; Procurement – European Union</p>
                            <p><b>2.</b> Book keeping and financial management - SDC</p>
                            <p><b>3.</b> Micro Finance Operations &amp; Management - InM</p>
                            <p><b>4.</b> Basic Book Keeping and Accounting Management for MFIs - InM</p>
                            <p><b>5.</b> Development (BAMWSP-DPHE)</p>
                            <p><b>6.</b> Implementation and Monitoring Financial and Accounts
                                &nbsp;&nbsp;&nbsp;&nbsp;Management (HYSAWA Project)</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Leadership development</h5>
                        </div>
                        <div class="card-body">
                            <p><b>1.</b> Religious leaders orientation</p>
                            <p><b>2.</b> Leadership in Development for the VDC Members (Basic)</p>
                            <p><b>3.</b> Leadership in Development for the Village WASH Committee </p>
                            <p><b>4.</b> Management and Leadership in Development for VDC Member</p>
                            <p><b>5.</b> Local Resource Mobilization</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--organization end-->

<!--others start-->
<section>
    <div class="others">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Advocacy and Net working </h5>
                        </div>
                        <div class="card-body">
                            <p><b>1.</b> Advocacy to Sensitize Local GIs</p>
                            <p><b>2.</b> Advocacy and Networking </p>
                            <p><b>3.</b> Basic techniques of advocacy </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Supportive supervision and monitoring</h5>
                        </div>
                        <div class="card-body">
                            <p><b>1.</b> Supportive supervision and monitoring</p>
                            <p><b>2.</b> Guide line on Participatory Monitoring </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Participatory Rural Appraisal (PRA)</h5>
                        </div>
                        <div class="card-body">
                            <p><b>1.</b> Peoples participation for Development</p>
                            <p><b>2.</b> Participatory Reflection and Action</p>
                            <p><b>3.</b> Community managed sustainable WaSH program</p>
                            <p><b>4.</b> Orientation on VDC Planning for PRA Methods</p>
                            <p><b>5.</b> Community Action Plan </p>
                            <p><b>6.</b> Social mobilization and peoples participation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--others end-->




@endsection
