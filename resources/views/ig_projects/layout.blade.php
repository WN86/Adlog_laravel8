<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

{{--Head--}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adlog_Laravel</title>
    <meta name="description" content="Adlog_Laravel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="../favicon.ico">



    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
{{--Head--}}

<body>
<!-- Left Panel -->
<aside id="left-panel" class="left-panel" style="background-color: #737373">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header" style="background-color: #737373">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('ig_projects.index') }}" style="background-color: #737373">Adlog</a>
            <a class="navbar-brand hidden" href="../..">Adlog</a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse" style="background-color: #737373">
            <ul class="nav navbar-nav" >
                <li>
                    <a href="{{ route('ig_projects.index') }}"> <i class="menu-icon ti-instagram"></i>Instagram Projects </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->


<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <div class="container">
        @yield('content')
    </div>
</div>

<!-- Right Panel -->

<script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script src="{{ asset('datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/js/init-scripts/data-table/datatables-init.js') }}"></script>


{{--<script>--}}
{{--    jQuery(document).ready(function() {--}}
{{--        jQuery("#click_show").click(function () {--}}
{{--            jQuery("#show_image").slideToggle();--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

{{--Right Panel--}}
</body>
