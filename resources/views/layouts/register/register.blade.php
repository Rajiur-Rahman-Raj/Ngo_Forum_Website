<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>Admin Registration</title>

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

    </head>
    <body class="page-register-alt">

      @yield('content')

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
        <script src="{{ asset('dashboard_assets') }}/js/meteor.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/pages/lr-alt.js"></script>

    </body>
</html>
