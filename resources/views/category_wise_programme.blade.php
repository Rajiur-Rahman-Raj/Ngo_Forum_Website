@extends('layouts.frontendprogarmme')

@section('frontend_main')


<style>
    .water ul {
        margin-top: 10px;
    }

    .water ul li {
        list-style: disc;
        margin-left: 20px;
        padding-left: 10px;
        margin-bottom: 5px;
    }

    .hardware ul {
        margin-top: 10px;
    }

    .hardware ul li {
        list-style: disc;
        margin-left: 20px;
        padding-left: 10px;
        margin-bottom: 5px;
    }
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
                                {{-- <a class="dropdown-item" href="Programme/resources.html">Resource Management and Mobilization</a>
                                <a class="dropdown-item" href="About/programe_implementation_approach.html">Programme Implementation Approach</a> --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('training') }}"> Training Service &amp;
                                    Facilities</a>
                                <a class="dropdown-item" href="{{ url('wqtl') }}">Water Quality Testing Laboratory</a>
                                <a class="dropdown-item" href="{{ url('iec') }}">IEC / BCC Material Development</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Projects
                            </a>
                            <div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('existing_projects') }}">Existing Projects</a>
                                <a class="dropdown-item" href="{{ url('prev_project') }}">Implemented Projects</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Resources
                            </a>
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
                                Login
                            </a>
                            <div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
                                <!--<a class="dropdown-item" href="{{ url('program_status') }}">Programme Status</a>-->
                                <!--<a class="dropdown-item" href="{{ url('at_a_glances') }}">At a Glance</a>-->
                                <a class="dropdown-item" href="{{ url('login') }}">MIS Login</a>
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
                        <h3>{{ App\programme_categorie::find($category_id)->category_name }}</h3>

                        @php
                            $cat_names = DB::table('all_programmes')
                                        ->join('programme_categories','all_programmes.programme_category_id','=','programme_categories.id')
                                        ->where('all_programmes.programme_category_id',$category_id)
                                        ->select('all_programmes.*','programme_categories.category_name')
                                        ->get();
                        @endphp

                        <p>
                            @foreach ($cat_names as $cat_name)
                            <a href="{{ url('category_wise/programme/details') }}/{{ $cat_name->id }}">{{ $cat_name->programme_title }}</a>
                            <span>|</span>
                            @endforeach
                        </p>

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
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Programme</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ App\programme_categorie::find($category_id)->category_name }}</li>
    </ol>
</nav>
<!--link part end-->


@if(App\programme_categorie::find($category_id)->id == 8)

<!--hardware part start-->
<section>
    <div class="hardware">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hardware_text">
                        <div class="row">
                            <div class="col-lg-8">
                                <p class="mb-4">
                                    <span>NGO Forum</span> for Public Health has established a full-fledged
                                    <span>research, monitoring & evaluation</span> cell with trained and experienced
                                    human resources to facilitated studies for understanding the changes and diverse
                                    scenario of development. <span>NGO forum </span>is committed to conducting high
                                    quality, ethical research.
                                </p>
                                <p class="mb-4">
                                    Since our founding in <span>1983</span>, we have designed and evaluated solutions to
                                    Water, Sanitation, Hygiene and Public Health problems using the most rigorous
                                    evaluation methods available within the programs and research. We have over <span>25
                                        researches</span> and evaluations completed or in progress in collaboration with
                                    different international research institutes, academic institutes and Universities.
                                    We work in the areas of Water, Sanitation, Hygiene, Public Health, Governance,
                                    Nutrition, Social Protection, and Community Driven Development through community
                                    participation.
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Visit For More</h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="{{url('monitoring/evaluation/page')}}">Monitoring &amp; Evaluation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>
                            To <span>NGO Forum</span>, research is to know about some series of activities,
                            interventions and its impact on people and on region. Experiences of previous activities is
                            to be documented through its research initiatives for the future activities of <span>NGO
                                Forum</span>. The Research activities of <span>NGO Forum</span> initiates research with
                            a view to helping humanity through promotion of Public Health and Improvement in the domains
                            of environment. The purpose of research is about testing theories, often generated by past
                            experiences of <span>NGO Forum</span>, and applying them to real situations addressing more
                            than just abstract principles. Research is an on-going process of correcting and refining
                            hypotheses, which leads to the acceptance of certain truths. <span>NGO Forum</span>, through
                            its Research services is always undertaking exploratory, speculative, descriptive,
                            explanatory, predictive and evaluative researches based on the present and apprehended
                            challenging issues in the relevant development fields.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hardware part end-->

<!--Research start-->
<section>
    <div class="sanitation">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="sanitation_img">
                        <img src="{{ asset('frontend_assets/Programme') }}/images/matlabhouseholdinterview.jpg" alt=""
                            class="img-fluid w-100" style="height: 400px;">
                        <div class="sanitation_img_overlay">
                            <a class="venobox" href="images/matlabhouseholdinterview.jpg"><i
                                    class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Research Support end-->

<section>
    <div class="hardware">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hardware_headeing">
                        <h3>Interventions:<span></span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hardware_text">
                        <p>
                            In the last three decades of the organization’s intervention in the <span>WatSan</span>
                            sector, it has produced significant number of research works contributing to the betterment
                            of the <span>hard-to-reach</span> communities in terms of safe water, hygienic sanitation,
                            and health in this connection. <span>NGO Forum</span> advances on its research productions
                            towards updating of its programmes and approaches. Some of its recent research works have
                            been conducted in the field of climate change effects in several agro-ecological zones of
                            the country.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--research list start-->
<section>
    <div class="hardware">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hardware_headeing">
                        <h3>Name of Completed Research Study undertaken by <span>NGO Forum</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-4">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Name of Completed Research Study undertaken by NGO Forum</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>1</b></td>
                                <td>A Situation Analysis on WatSan of Greater Dhaka District</td>
                                <td>1993</td>
                            </tr>
                            <tr>
                                <td><b>2</b></td>
                                <td>Integrated WatSan Programme Through NGOS</td>
                                <td>1993</td>
                            </tr>
                            <tr>
                                <td><b>3</b></td>
                                <td>Integrated WatSan Programme for Coastal Region</td>
                                <td>1993</td>
                            </tr>
                            <tr>
                                <td><b>4</b></td>
                                <td>Social Mobilization for Sanitation</td>
                                <td>1993</td>
                            </tr>
                            <tr>
                                <td><b>5</b></td>
                                <td>Water and Sanitation Programme for Rohingya Refugees</td>
                                <td>1993</td>
                            </tr>
                            <tr>
                                <td><b>6</b></td>
                                <td>Evaluation of field kits used for arsenic detection in ground water</td>
                                <td>1999</td>
                            </tr>
                            <tr>
                                <td><b>7</b></td>
                                <td>Evaluation of a Arsenic Removal Household Device - Bucket Treatment Unit (BTU)</td>
                                <td>2000</td>
                            </tr>
                            <tr>
                                <td><b>8</b></td>
                                <td>Action Research On Rain Water Harvesting</td>
                                <td>2000</td>
                            </tr>
                            <tr>
                                <td><b>9</b></td>
                                <td>An intervention trial to assess the contribution of food chain to total arsenic
                                    exposure</td>
                                <td>2002</td>
                            </tr>
                            <tr>
                                <td><b>10</b></td>
                                <td>Arsenic removal efficiency of Iron Removal Plant (IRP) - A cross sectional study
                                </td>
                                <td>2002</td>
                            </tr>
                            <tr>
                                <td><b>11</b></td>
                                <td>Applied Research on Impediments towards Sanitary latrine Coverage in the Rural
                                    Bangladesh</td>
                                <td>2002</td>
                            </tr>
                            <tr>
                                <td><b>12</b></td>
                                <td>Pilot Scheme on Pipeline Water Supply</td>
                                <td>2002</td>
                            </tr>
                            <tr>
                                <td><b>13</b></td>
                                <td>Action Research on Mitigation of Health & Social Consequences of Ground Water
                                    Arsenic Poisoning in Bangladesh</td>
                                <td>2003 - 2005</td>
                            </tr>

                            <tr>
                                <td><b>14</b></td>
                                <td>Risk & Benefit of Arsenic Mitigation Program in Bangaldesh</td>
                                <td>2003</td>
                            </tr>
                            <tr>
                                <td><b>15</b></td>
                                <td>Study on Understanding Communication and Behavioral Change in Hygiene, Sanitation
                                    and Water use</td>
                                <td>2003 - 2005</td>
                            </tr>
                            <tr>
                                <td><b>16</b></td>
                                <td>Study on causes and contamination level of drinking water supply (safe water chain
                                    study)</td>
                                <td>2004</td>
                            </tr>
                            <tr>
                                <td><b>17</b></td>
                                <td>Action Research on Alternative Strategies of Environmental Sanitation and Waste
                                    Management for Improved Health and Socio-economic Development in Peri-urban Coastal
                                    Communities of South Asia </td>
                                <td>2004 - 2005</td>
                            </tr>
                            <tr>
                                <td><b>18</b></td>
                                <td>Study on Sanitation Movement in Bangladesh and the Role of Private Sector</td>
                                <td>2004</td>
                            </tr>
                            <tr>
                                <td><b>19</b></td>
                                <td>Study on Private Sector Capacity and Involvement in Water Supply </td>
                                <td>2004</td>
                            </tr>
                            <tr>
                                <td><b>20</b></td>
                                <td>Environmental Screening of PSFs Installed Under RVCC Project in paikgacha Upazila,
                                    Khulna</td>
                                <td>2005</td>
                            </tr>
                            <tr>
                                <td><b>21</b></td>
                                <td>Environmental Impact Assessment for Six Deep Tubewells</td>
                                <td>2005</td>
                            </tr>
                            <tr>
                                <td><b>22</b></td>
                                <td>KAP Study on ‘ Community-managed Water and Sanitation Programme in Coastal Areas of
                                    Chittagong and Cox’s Bazar Districts</td>
                                <td>2005</td>
                            </tr>
                            <tr>
                                <td><b>23</b></td>
                                <td>Study of the Reuse of Human Excreta in Bangladesh</td>
                                <td>2005</td>
                            </tr>
                            <tr>
                                <td><b>24</b></td>
                                <td>Action Research on Improved Participatory Approach in Hygiene and Sanitation
                                    Promotion</td>
                                <td>2005</td>
                            </tr>
                            <tr>
                                <td><b>25</b></td>
                                <td>Direction for Development Communication in Changed Approach based on Community
                                    Feedback</td>
                                <td>2005</td>
                            </tr>
                            <tr>
                                <td><b>26</b></td>
                                <td>Waste Water Agriculture, Sanitation and Poverty Alleviation (WASPA) in Asia</td>
                                <td>2005 - 2007</td>
                            </tr>
                            <tr>
                                <td><b>27</b></td>
                                <td>Association between Chronic Arsenic Exposure and Nutritional Status among the Women
                                    of Childbearing Age: A Case study in Bangladesh</td>
                                <td>2005 - 2008</td>
                            </tr>
                            <tr>
                                <td><b>28</b></td>
                                <td>Chronic Arsenic Poisoning and Respiratory Effects in Banglades</td>
                                <td>2005</td>
                            </tr>
                            <tr>
                                <td><b>29</b></td>
                                <td>Chronic Arsenic Exposure and Adverse Reproductive/Pregnancy Outcomes in Bangladesh.
                                </td>
                                <td>2005</td>
                            </tr>
                            <tr>
                                <td><b>30</b></td>
                                <td>Association between Nutritional Status & Arsenicosis due to Chronic Arsenic Exposure
                                    in Bangladesh</td>
                                <td>2006</td>
                            </tr>
                            <tr>
                                <td><b>31</b></td>
                                <td>Study on Sanitation and Hygiene Situation in Some Haor Areas in Bangladesh</td>
                                <td>2006</td>
                            </tr>
                            <tr>
                                <td><b>32</b></td>
                                <td>Scientific Research on the Pattern of Spatial Arsenic Risk: Mapping with RBF
                                    Geostatistical Interpolation Method</td>
                                <td>2006</td>
                            </tr>
                            <tr>
                                <td><b>33</b></td>
                                <td>Study on Sanitation and Hygiene Situation in Tidal Surge Areas, Bangladesh </td>
                                <td>2007</td>
                            </tr>
                            <tr>
                                <td><b>34</b></td>
                                <td>Study on Sanitation and Hygiene Situation in the Chittagong Hill Tracts (CHT) Areas
                                    in Bangladesh</td>
                                <td>2007</td>
                            </tr>
                            <tr>
                                <td><b>35</b></td>
                                <td>Deployment of Arsenic Removal technologies</td>
                                <td>2007</td>
                            </tr>
                            <tr>
                                <td><b>36</b></td>
                                <td>Study on Water and Sanitation Situation in Tea Gardens</td>
                                <td>2007</td>
                            </tr>
                            <tr>
                                <td><b>37</b></td>
                                <td>DHB Decentralized and Local Public Goods:How does allocation of decision –making
                                    authority affects provision?</td>
                                <td>2007 - 2008</td>
                            </tr>
                            <tr>
                                <td><b>38</b></td>
                                <td>Decentralization and Local Public Goods: How does Allocation of Decision-making
                                    Authority Affects Provision?</td>
                                <td>2007-2011</td>
                            </tr>
                            <tr>
                                <td><b>39</b></td>
                                <td>Utilization of ADP Allocation Money towards Achieving Sustainable Sanitation
                                    Coverage in Bangladesh</td>
                                <td>2007 - 2008</td>
                            </tr>
                            <tr>
                                <td><b>40</b></td>
                                <td>Arsenicosis and Its Health Seeking Behaviours in Rural Bangladesh </td>
                                <td>2008</td>
                            </tr>
                            <tr>
                                <td><b>41</b></td>
                                <td>Study on WatSan Contribution in Poverty Reduction</td>
                                <td>2008</td>
                            </tr>
                            <tr>
                                <td><b>42</b></td>
                                <td>Impact Assesment Study of the Community Managed Water and Sanitation Programme
                                    (CMWSP) for the Rural Poor in the CHT</td>
                                <td>2008</td>
                            </tr>
                            <tr>
                                <td><b>43</b></td>
                                <td>Finding out the Most Suitable Alternative Water Options in the Project Area of
                                    Integrated Community –based Arsenic Mitigation (ICBAM) Project and Approach for
                                    Mitigation</td>
                                <td>2008</td>
                            </tr>
                            <tr>
                                <td><b>44</b></td>
                                <td>Distribution of Arsenic Concentration in Tubewell Water in 100 Arsenic Contaminated
                                    Unions of Bangladesh</td>
                                <td>2008</td>
                            </tr>
                            <tr>
                                <td><b>45</b></td>
                                <td>Understanding the Impact of Climate Change on Household Water and Sanitation
                                    Practice in Rural and Small Towns in Bangladesh: Key lesson from Cyclone SIDR and
                                    Flood 2007</td>
                                <td>2009</td>
                            </tr>
                            <tr>
                                <td><b>46</b></td>
                                <td>Arsenic Crisis in Rural Bangladesh: Indigenous Knowledge and Practice</td>
                                <td>2009</td>
                            </tr>
                            <tr>
                                <td><b>47</b></td>
                                <td>Arsenicosis Patient Management Strategy in Rural Bangladesh:Different Approaches and
                                    Its Impact on Public Health Sector</td>
                                <td>2009</td>
                            </tr>
                            <tr>
                                <td><b>48</b></td>
                                <td>Finding out the Most Suitable Arsenic Mitigation Approach by Comparing the
                                    Performance of ICBAMP with the other Projects</td>
                                <td>2009</td>
                            </tr>
                            <tr>
                                <td><b>49</b></td>
                                <td>Situation Analysis of manganese in Drinking Water in Bangladesh</td>
                                <td>2009</td>
                            </tr>
                            <tr>
                                <td><b>50</b></td>
                                <td>Climate Change Effect in Off-shore Island and its Implication on WatSan</td>
                                <td>2010</td>
                            </tr>
                            <tr>
                                <td><b>51</b></td>
                                <td>Research of Climate Scenario and its Impact on Water and Sanitation in Haor Areas of
                                    Bangladesh</td>
                                <td>2010</td>
                            </tr>
                            <tr>
                                <td><b>52</b></td>
                                <td>Study on Sanitation and Hygiene Situation in Chittagong Hill Tracts (CHT),
                                    Bangladesh</td>
                                <td>2010</td>
                            </tr>
                            <tr>
                                <td><b>53</b></td>
                                <td>WatSan Contribution in Poverty Reduction: Utilization of ADP</td>
                                <td>2010</td>
                            </tr>
                            <tr>
                                <td><b>54</b></td>
                                <td>Climate Change Effects in Off-shore islands and its Implication on WatSan</td>
                                <td>2010</td>
                            </tr>

                            <tr>
                                <td><b>55</b></td>
                                <td>Research on Climate Change Scenario and its Impact on Water and Sanitation in Haor
                                    Areas of Bangladesh</td>
                                <td>2010</td>
                            </tr>
                            <tr>
                                <td><b>56</b></td>
                                <td>Study on Sanitation and Hygiene Situation in Chittagong Hill Tracts (CHT),
                                    Bangladesh</td>
                                <td>2010</td>
                            </tr>
                            <tr>
                                <td><b>57</b></td>
                                <td>WatSan Contribution in Poverty Reduction : Utilization of ADP</td>
                                <td>2010</td>
                            </tr>
                            <tr>
                                <td><b>58</b></td>
                                <td>Programme Impact on Diarrhoeal Risk Reduction</td>
                                <td>2011</td>
                            </tr>
                            <tr>
                                <td><b>59</b></td>
                                <td>Suitable Arsenic –safe Water Options in Rural Bangladesh: Experience of NGO Forum
                                </td>
                                <td>2011</td>
                            </tr>
                            <tr>
                                <td><b>60</b></td>
                                <td>Cancer Morbidity and Mortality among Chronically Arsenic-exposed Population in Rural
                                    Bangladesh</td>
                                <td>2012</td>
                            </tr>
                            <tr>
                                <td><b>61</b></td>
                                <td>Study on Climate Change Impacts, Vulnerability and Current Adaptation Practices in
                                    Water Supply, Sanitation and Hygiene Practices in Hard-to-Reach Areas</td>
                                <td>2012</td>
                            </tr>
                            <tr>
                                <td><b>62</b></td>
                                <td>Research in Decision, Risk and Managament Science: Does participation in Project
                                    decision-making affect how intended beneficiaries report project outcomes?</td>
                                <td>2012</td>
                            </tr>
                            <tr>
                                <td><b>63</b></td>
                                <td>Value at the End of the Sanitation Value Chain (VeSV)</td>
                                <td>2013</td>
                            </tr>
                            <tr>
                                <td><b>64</b></td>
                                <td>Morbidity reduction through improved hygiene behavior </td>
                                <td>2013</td>
                            </tr>
                            <tr>
                                <td><b>65</b></td>
                                <td>Research Efficiency of Existing WatSan Technologies in Hard-to-Reach Areas</td>
                                <td>2014</td>
                            </tr>
                            <tr>
                                <td><b>66</b></td>
                                <td>Effects of Community Integration on Capacity Building of Local Actors on WaSH in
                                    Vulnerable Geophysical Zones</td>
                                <td>2014</td>
                            </tr>
                            <tr>
                                <td><b>67</b></td>
                                <td>Assessing Eco-san Contribution to Socio-economic, Health & Environmental Upliftment
                                </td>
                                <td>2015</td>
                            </tr>
                            <tr>
                                <td><b>68</b></td>
                                <td>Community Contributions, Participatory Decision-making and Local Public Goods: a
                                    Field Experiment in Bangladesh</td>
                                <td>2015</td>
                            </tr>
                            <tr>
                                <td><b>69</b></td>
                                <td>Impact of School WaSH Facilities in the Enrollment of Girl Students</td>
                                <td>2015</td>
                            </tr>

                            <tr>
                                <td><b>70</b></td>
                                <td>Study on Managed Aquifer Recharge in Barind area of Bangladesh</td>
                                <td>2015</td>
                            </tr>
                            <tr>
                                <td><b>71</b></td>
                                <td>Study on Feasibility of Reverse Osmosis in the Saline Zone</td>
                                <td>2015</td>
                            </tr>
                            <tr>
                                <td><b>72</b></td>
                                <td>Potentials of Multi-stakeholder Approach for Sustainable Water Supply, Health and
                                    Environment Programs</td>
                                <td>2016</td>
                            </tr>
                            <tr>
                                <td><b>73</b></td>
                                <td>Community contributions, participatory decision-making and local public goods: A
                                    field experiment in Bangladesh (CPLPG)</td>
                                <td>2016</td>
                            </tr>
                            <tr>
                                <td><b>74</b></td>
                                <td>Mechanisms of Participatory Development: Fairness Norms and Value of Participation.
                                </td>
                                <td>2017</td>
                            </tr>
                            <tr>
                                <td><b>75</b></td>
                                <td>Faecal Sludge Management in Mymensingh Municipality</td>
                                <td>2017</td>
                            </tr>
                            {{-- <tr>
                                <td><b>76</b></td>
                                <td>Participation and Sustainability: Experimental Evidence from Safe Water Sources in Bangladesh</td>
                                <td>---</td>
                            </tr> --}}
                            <tr>
                                <td><b>76</b></td>
                                <td>Access to safe drinking water: Experimental evidence from new water sources in
                                    Bangladesh</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td><b>77</b></td>
                                <td>Understanding institutional persistence: Exposure to community-driven development
                                    and the value of autonomy and democracy</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td><b>78</b></td>
                                <td>Community contributions, participatory decision-making and local public goods</td>
                                <td>2019</td>
                            </tr>
                            <tr>
                                <td><b>79</b></td>
                                <td>Situation analysis on WASH in Healthcare Facility-advocacy strategy</td>
                                <td>2019</td>
                            </tr>
                            <tr>
                                <td><b>80</b></td>
                                <td>Information & Public Services Provision: Experimental evidence from school WASH
                                    services in Bangladesh</td>
                                <td>2019</td>
                            </tr>
                            <tr>
                                <td><b>81</b></td>
                                <td>Participation and Sustainability: Experimental Evidence from Safe Water Sources in
                                    Bangladesh </td>
                                <td>2019</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--research list end-->

<section>
    <div class="hardware">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hardware_headeing">
                        <h3>For <span>Researchers</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hardware_text pl-4">
                        <p>
                            <span style="font-weight: 800; font-size: 18px;">1. </span><b>Working with NGO Forum</b>
                        </p>
                        <ul style="list-style: square; padding-left: 32px;" class="mb-3">
                            <li>Project Development (Research Concept Design Stage, Seeking and Securing Funding)</li>
                            <li>Staff Training (Training is a way to share the “industry standards” and over 30 years of
                                institutional knowledge about how to effectively manage a field project.)</li>
                            <li>Project Management</li>
                            <li>Research Methods Initiative (The Research Methods Initiative is a collaboration between
                                NGO Forum for Public Health and different research institutes, academic institutes and
                                development partners that supports systematic studies into how to improve the methods
                                and measurement of key outcomes in the research.)</li>
                        </ul>

                        <p>
                            <span style="font-weight: 800; font-size: 18px;">2. </span><b>Research Resources</b>
                        </p>
                        <ul style="list-style: square; padding-left: 32px;" class="mb-3">
                            <li>Research Protocol</li>
                            <li>Research Transparency</li>
                        </ul>

                        <p>
                            <span style="font-weight: 800; font-size: 18px;">3. </span><b>Researcher Directory</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@else

<!--hardware part start-->
<section>
    <div class="hardware">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hardware_headeing wow fadeInRightBig">
                        @if(App\programme_categorie::find($category_id)->id == 13)
                        <style>
                            .banner_part {
                                background-image: url(http://ngoforum.devcom.club/frontend_assets/images/COVID-19-R&D-Research-Development-Technology-News-Live-Blog.jpg) !important;
                            }
                        </style>

                        @endif
                        @if(App\programme_categorie::find($category_id)->id == 3)
                        <style>
                            .banner_part {
                                background-image: url(http://ngoforum.devcom.club/frontend_assets/images/capacitybuilding-qwe.jpg) !important;
                                background-position: top left;
                            }
                        </style>
                        @endif
                        @if(App\programme_categorie::find($category_id)->id == 4)
                        <style>
                            .banner_part {
                                background-image: url(http://ngoforum.devcom.club/frontend_assets/images/govndhuman.jpg) !important;
                                background-position: top left;
                            }
                        </style>
                        @endif
                        @if(App\programme_categorie::find($category_id)->id == 7)
                        <style>
                            .banner_part {
                                background-image: url(http://ngoforum.devcom.club/frontend_assets/images/envdisater.jpg) !important;
                                background-position: top left;
                            }
                        </style>
                        @endif

                        @if(App\programme_categorie::find($category_id)->id == 14)
                        <style>
                            .banner_part {
                                background-image: url(http://ngoforum.devcom.club/frontend_assets/Programme/images/dhaka-city.jpg) !important;
                                background-position: center center;
                            }
                        </style>
                        @endif

                        <h3>{{ App\programme_categorie::find($category_id)->category_name }}</h3>
                        <p>{!! App\programme_categorie::find($category_id)->category_description !!}</p>

                        @if(App\programme_categorie::find($category_id)->id == 3)
                            <div class="water_text wow bounceInRight" data-wow-duration="1.6s">
                                <a href="{{ url('manual/page/view') }}" style="margin-right: 35px;" class="extra_btn"><i class="fas fa-bars" style="color: #0984e3; margin-right: 5px;"></i> Modules & Manuals</a>
                                <a href="{{ url('training/courses/view') }}" style="margin-right: 15px;" class="extra_btn"><i class="fas fa-bars" style="color: #0984e3; margin-right: 5px;"></i>Training Courses</a>
                            </div>
                        @endif

                        @if(App\programme_categorie::find($category_id)->id == 14)
                            <!--nrc start-->
                            <section>
                                <div class="sanitation mt-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="sanitation_img text-center">
                                                    <img src="{{ asset('frontend_assets/Programme') }}/images/MIS_image_for_wiki.png" alt="" class="img-fluid w-75" style="height: 400px;">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="sanitation_text">
                                                    {{-- <h5>Management Information System <span>( MIS )</span></h5> --}}
                                                    <p>
                                                        In order to support the project management to undertake appropriate decisions and preparing report on the overall project progress in a timely manner, the Management Information System (MIS) has been developed and maintained which is supporting through ensuring the smooth flow of information and keeping track of current activities and information. It is also generating issue focused information on different programmatic aspects enabling the programme management to formulation of relevant operational reports and following some activities perform in regular basis.
                                                    </p>
                                                    <ol style="list-style: square; padding-left: 20px; font-family: 'Oswald', sans-serif;; font-size: 17px; font-weight: 300">
                                                        <li><b>Web / Mail / & MIS Server Administration</b></li>
                                                        <li><b>Organizational Website & Social Media page updating and maintenance</b></li>
                                                        <li><b>Organizational various type of Data and Information digitally archived</b></li>
                                                        <li><b>Information Collection Tools Development</b></li>
                                                        <li><b>Periodical Report Generation</b></li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--nrc end-->

                            <section>
                                <div class="sanitation">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="sanitation_img">
                                                    <img src="{{ asset('frontend_assets/Programme') }}/images/Design-it-min.png" alt="" class="img-fluid w-100" style="height: 300px;">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="sanitation_text pt-5">
                                                    <h5>System<span> Management support</span></h5>
                                                    <ol style="list-style: square; padding-left: 20px; font-family: 'Oswald', sans-serif;; font-size: 17px; font-weight: 300">
                                                        <li><b>Maintaining Office Networking</b></li>
                                                        <li><b>Maintaining Internet connectivity</b></li>
                                                        <li><b>Hardware and Software related support</b></li>
                                                        <li><b>Procurement of IT Equipment</b></li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!--Library start-->
                            {{-- <section>
                                <div class="sanitation mb-3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4 offset-1">
                                                <div class="sanitation_text">
                                                    <h5><span>Library</span></h5>
                                                    <ol style="list-style: square; padding-left: 20px; font-family: 'Oswald', sans-serif;; font-size: 17px; font-weight: 300">
                                                        <li><b style="margin-bottom: 10px;">A collection of more than 4,500 WatSan, Environment and Health related books, reports and documents</b></li>
                                                        <li><b style="margin-bottom: 10px;">A spacious room for reading</b></li>
                                                        <li><b style="margin-bottom: 10px;">Photo Gallery</b></li>
                                                        <li><b style="margin-bottom: 10px;">News Gallery</b></li>
                                                        <li><b style="margin-bottom: 10px;">Online Library Information System (LIS)</b></li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="sanitation_img text-center">
                                                    <img src="{{ asset('frontend_assets/Programme') }}/images/library.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section> --}}
                            <!--Library end-->
                        @endif

                    </div>
                </div>
            </div>
            <div class="row">
                @php
                    $programme_categories = App\programme_categorie::all();
                @endphp
                <div class="col-lg-12">
                    <div class="hardware_text wow fadeInUpBig">
                        <p>{{ $programme_categorie->programme_description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hardware part end-->

<!--water part start-->
<section>
    <div class="water">
        <div class="container">
            @foreach ($category_wise_programme as $programme_categorie)
            <div class="row mb-5">

                <div class="col-lg-6">
                    <div class="water_img wow bounceInLeft" data-wow-duration="1.6s">
                        <img src="{{ asset('uploads/all_programme_image') }}/{{ $programme_categorie->programme_image }}" alt="" class="img-fluid w-100">
                        <div class="water_img_overlay">
                            <a class="venobox" href="{{ asset('uploads/all_programme_image') }}/{{ $programme_categorie->programme_image }}"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="water_text wow bounceInRight" data-wow-duration="1.6s">
                        <h5>{{ $programme_categorie->programme_title }}</h5>
                        <p>{{substr($programme_categorie->image_description,0,620)}}...</p>

                        @if($programme_categorie->programme_title == "Development Communication")
                            <a href="{{ url('iec') }}"><i class="fas fa-bars" style="color: #0984e3; margin-right: 5px;"></i> Read More</a>
                        @elseif($programme_categorie->programme_title == "MIS & Knowledge Management")
                            <a href="{{url('nrc/page/view')}}"><i class="fas fa-bars" style="color: #0984e3; margin-right: 5px;"></i> Read More</a>
                        @else
                            <a href="{{ url('category_wise/programme/details') }}/{{ $programme_categorie->id }}"><i class="fas fa-bars" style="color: #0984e3; margin-right: 5px;"></i> Read More</a>
                        @endif

                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>
<!--water part end-->

@endif

@endsection
