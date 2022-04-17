<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>Admin Dashboard</title>

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="stacks" />
    

        <!-- Styles -->
        <link href="{{ asset('dashboard_assets') }}/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/uniform/css/default.css" rel="stylesheet"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>
        <!-- Theme Styles -->
        <link href="{{ asset('dashboard_assets') }}/css/meteor.min.css" rel="stylesheet" type="text/css"/>

        <link href="{{ asset('dashboard_assets') }}/css/layers/dark-layer.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/css/custom.css" rel="stylesheet" type="text/css"/>

        <script src="{{ asset('dashboard_assets') }}/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style media="screen">
        .page-content {
         background: #ffffff !important;
         }
         
         #mceu_78{
            display: none !important;
         }
         #mceu_79{
            display: none !important;
         }
        </style>
    </head>
    <body class="compact-menu">
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search" type="button"><i class="icon-close"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button push-sidebar">
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                      <a href="#" style="width:10px;height:10px; background: #05f1ff; border-radius:50%;display: inline-block;margin-top: 20px;margin-left: 10px;"></a>
                      <a href="index.html" class="logo-text" style="padding:0px 0px"><span>{{ Auth::user()->name }}</span></a>
                    </div><!-- Logo Box --><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>
                                    <a href="javascript:void(0);" class="sidebar-toggle"><i class="icon-arrow-left"></i></a>
                                </li>


                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="user-name">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="profile.html"><i class="icon-user"></i>Profile</a></li>
                                        <li role="presentation"><a href="calendar.html"><i class="icon-calendar"></i>Edit Your Profile</a></li>
                                        <li role="presentation" class="divider"></li>
																				<li class="nav-item"><a href="{{ route('logout') }}"onclick="event.preventDefault();
														                document.getElementById('logout-form').submit()" class="nav-link logout">
														                <span class="icon-key m-r-xs">Log out</span>
														                <i class="fa fa-sign-out"></i></a></li>
														                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														                       @csrf
														                </form>
                                    </ul>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <ul class="menu accordion-menu">
                        <li class="active"><a href="{{ url('home') }}" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p><span class="active-page"></span></a></li>
                        <li class="@yield('dashboard-active')"><a href="{{ url('/') }}" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Visit Website</p><span class="active-page"></span></a></li>
                        <li><a href="{{ url('admin/register') }}" class="waves-effect waves-button" target="_blank"><span class="menu-icon icon-user"></span><p>Admin Registration</p></a></li>
                        <li><a href="profile.html" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Profile</p></a></li>
                        <li class="droplink"><a href="#"><p><i class="fas fa-bars"></i> Home Page</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('add/banner') }}">Add Home Banner</a></li>

                                <li><a href="{{ url('what/view') }}">What We Do</a></li>
                                <li><a href="{{ url('video') }}">Video </a></li>
                                <li><a href="{{ url('photo_category') }}">Add photo_category </a></li>
                                <li><a href="{{ url('photo_clicked') }}">Add photo_clicked </a></li>
                                <li><a href="{{ url('global') }}">Add Global & National Events </a></li>
                                <li><a href="{{ url('founding/agency') }}"> Founding Agencies </a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fas fa-users"></i><p> who we are</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class="droplink"><a href="#"><p>About Us Part</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('about/view') }}">About NGO Forum</a></li>
                                        <li><a href="{{ url('about_category') }}">Add About NGO Category</a></li>
                                        <li><a href="{{ url('all_about') }}">Add All About NGO </a></li>
                                    </ul>
                                </li>
                                <li class="droplink"><a href="#"><p>Policy Formulating</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('policy/view') }}"> Add Policy Formulating</a></li>
                                        <li><a href="{{ url('general_mamber') }}">Add General Mamber</a></li>

                                    </ul>
                                </li>
                                <li><a href="{{ url('network/add/view') }}">Network Affiliation</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fas fa-fist-raised"></i><p> Programme</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('All_Programme_Category') }}">All Programme Category</a></li>
                                <li><a href="{{ url('All_Programme') }}">All Programme </a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fab fa-staylinked"></i><p> Services</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('training/view') }}">Add Training Service</a></li>
                                <li><a href="{{ url('center/view') }}">Add Training Centers</a></li>
                                <li><a href="{{ url('center/view/details') }}">Add Training Centers details</a></li>
                                <li><a href="{{ url('catering/service/category') }}">Catering Service Category</a></li>
                                <li><a href="{{ url('all/service') }}">All Catering Service</a></li>
                                <li><a href="{{ url('development/metarials/category') }}">Add Development Metarials Category</a></li>
                                <li><a href="{{ url('all/development/metarials') }}">Add Category Wise Development Metarials</a></li>
                                <li><a href="{{ url('wqtl_home/add/view') }}"> Add WQTL Home </a></li>
                                <li><a href="{{ url('wqtl/add/view') }}"> Add WQTL </a></li>
                                <li><a href="{{ url('coxlab/add/view') }}"> Add Coxlab </a></li>
                                <li><a href="{{ url('microkit/add/view') }}"> Add Microkit </a></li>
                                <li><a href="{{ url('ice/view') }}">IEC / BCC</a></li>
                            </ul>
                        </li>

                        <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fas fa-swatchbook"></i><p> Resources</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('resources/category') }}">Add resources Category</a></li>
                                <li><a href="{{ url('all_resources') }}">Add resources</a></li>
                                <li><a href="ui-buttons.html">Photo Galleries</a></li>
                                <li><a href="ui-icons.html">Videos</a></li>
                            </ul>
                        </li>

                        <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fas fa-tasks"></i><p> All Projects</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('existing/project') }}">Existing Projects</a></li>
                                <li><a href="{{ url('implemented/view') }}">Implemented Projects</a></li>
                            </ul>
                        </li>

                        <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="far fa-newspaper"></i><p> Add All News</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('add/news/category') }}">Add News Category</a></li>
                                <li><a href="{{ url('add/all/newses') }}">Add All News</a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fas fa-photo-video"></i><p> Gallery</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('add/news/category') }}">Photo Gallery</a></li>
                                <li><a href="{{ url('video/gallery/page') }}">Video Gallery</a></li>
                            </ul>
                        </li>

                        <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fas fa-map-marker-alt"></i><p> Get Involved</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('contact/view') }}">Contact</a></li>
                                <li><a href="{{ url('call/view') }}">Cell/Department</a></li>
                                <li><a href="{{ url('regional/view') }}">Regional Offices</a></li>
                                <li><a href="{{ url('project/view') }}">Project Offices</a></li>
                                <li><a href="{{ url('career/view') }}">Career</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fas fa-sitemap"></i><p> MIS Portal</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('add/programme_status') }}">Programme Status</a></li>
                                <li><a href="{{ url('at_a_glance_category') }}">At A Glance category</a></li>
                                <li><a href="{{ url('at_a_glance') }}">At a Glance</a></li>
                            </ul>
                        </li>
                        
                        <!--<li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fas fa-eye"></i><p> At a Glance</p><span class="arrow"></a>-->
                        <!--    <ul class="sub-menu">-->
                                <!--<li><a href="{{ url('general/settings') }}">Add General Settings</a></li>-->
                        <!--        <li><a href="{{ url('at_a_glance_category') }}">At A Glance category</a></li>-->
                        <!--        <li><a href="{{ url('at_a_glance') }}">At a Glance</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        
                        
                        <!--<li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-energy"></span><p>Levels</p><span class="arrow"></span></a>-->
                        <!--    <ul class="sub-menu">-->
                        <!--        <li class="droplink"><a href="#"><p>Level 1.1</p><span class="arrow"></span></a>-->
                        <!--            <ul class="sub-menu">-->
                        <!--                <li class="droplink"><a href="#"><p>Level 2.1</p><span class="arrow"></span></a>-->
                        <!--                    <ul class="sub-menu">-->
                        <!--                        <li><a href="#">Level 3.1</a></li>-->
                        <!--                    </ul>-->
                        <!--                </li>-->
                        <!--                <li><a href="#">Level 2.2</a></li>-->
                        <!--            </ul>-->
                        <!--        </li>-->
                        <!--        <li><a href="#">Level 1.2</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        
                        
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->

						@yield('content')

        </main><!-- Page Content -->

        <!-- Javascripts -->
        <script src="{{ asset('dashboard_assets') }}/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/pace-master/pace.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/switchery/switchery.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/waves/waves.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/waypoints/jquery.waypoints.min.js"></script>
        {{-- <script src="{{ asset('dashboard_assets') }}/plugins/toastr/toastr.min.js"></script> --}}
        <script src="{{ asset('dashboard_assets') }}/plugins/flot/jquery.flot.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/curvedlines/curvedLines.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/chartjs/Chart.bundle.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/meteor.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/pages/dashboard.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/pages/table-data.js"></script>
        <script src="https://kit.fontawesome.com/c218529370.js"></script>
        @yield('custom_js');

    </body>
</html>
