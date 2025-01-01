
<!doctype html>
<html dir="rtl" lang="fa-IR">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1.0, user-scalable=0' name='viewport'>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="مدیریت رستوران" name="description">
    <meta content="Dr.ele11ven-do11.ir" name="author">


    <!-- FAVICON -->
    <link href="{{asset('../assets/images/logo/logo-no-title.png')}}" rel="shortcut icon" type="image/x-icon"/>

    <!-- TITLE -->
    <title>مدیریت رستوران</title>

    <!-- BOOTSTRAP CSS -->
    <link href="{{asset('../assets/plugins/bootstrap/css/bootstrap.min.css')}}" id="style" rel="stylesheet"/>

    <!-- STYLE CSS -->
    <link href="{{asset('../assets/css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('../assets/css/plugins.css')}}" rel="stylesheet"/>
    <link href="{{asset('../assets/css/transparent-style.css')}}" rel="stylesheet">
    <link href="{{asset('../assets/css/skin-modes.css')}}" rel="stylesheet"/>

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('../assets/css/icons.css')}}" rel="stylesheet"/>

    <!-- COLOR SKIN CSS -->
    <link href="{{asset('../assets/colors/color1.css')}}" id="theme" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('../assets/switcher/css/switcher.css')}}" rel="stylesheet"/>
    <link href="{{asset('../assets/switcher/demo.css')}}" rel="stylesheet"/>

    <!--RTL STYLE-->
    <link href="{{asset('../assets/fonts/styles-fa-num/iran-yekan.css')}}" id="fonts" rel="stylesheet">
    <link href="{{asset('../assets/css/rtl.css')}}" rel="stylesheet"/>

    @stack('styles') <!-- This will include the styles from pushed sections -->

</head>

<body class="app sidebar-mini rtl light-mode">

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img alt="Loader" class="loader-img" src="{{asset('../assets/images/loader.svg')}}">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
        @include('dashboard.body.header')
        <!-- /app-Header -->

        <!--APP-SIDEBAR-->
        @include('dashboard.body.sidebar')

        <!--app-content open-->
        @yield('body')
        <!--app-content close-->

    </div>

    <!-- FOOTER -->
    @include('dashboard.body.footer')
    <!-- FOOTER END -->

</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY JS -->
<script src="{{asset('../assets/js/jquery.min.js')}}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{asset('../assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('../assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- SPARKLINE JS-->
<script src="{{asset('../assets/js/jquery.sparkline.min.js')}}"></script>

<!-- Sticky js -->
<script src="{{asset('../assets/js/sticky.js')}}"></script>


<!-- CHART-CIRCLE JS-->
<script src="{{asset('../assets/js/circle-progress.min.js')}}"></script>

<!-- PIETY CHART JS-->
<script src="{{asset('../assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{asset('../assets/plugins/peitychart/peitychart.init.js')}}"></script>

<!-- SIDEBAR JS -->
<script src="{{asset('../assets/plugins/sidebar/sidebar.js')}}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('../assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
<script src="{{asset('../assets/plugins/p-scroll/pscroll.js')}}"></script>
<script src="{{asset('../assets/plugins/p-scroll/pscroll-1.js')}}"></script>


<!-- INTERNAL CHARTJS CHART JS-->
<script src="{{asset('../assets/plugins/chart/Chart.bundle.js')}}"></script>
<script src="{{asset('../assets/plugins/chart/utils.js')}}"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{asset('../assets/plugins/select2/select2.full.min.js')}}"></script>

<!-- INTERNAL Data tables js-->
<script src="{{asset('../assets/plugins/datatable/js/jquery.dataTables.min.j')}}s"></script>
<script src="{{asset('../assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
<script src="{{asset('../assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

<!-- INTERNAL APEXCHART JS -->
<script src="{{asset('../assets/js/apexcharts.js')}}"></script>
<script src="{{asset('../assets/plugins/apexchart/irregular-data-series.js')}}"></script>

<!-- INTERNAL Flot JS -->
<script src="{{asset('../assets/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{asset('../assets/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
<script src="{{asset('../assets/plugins/flot/chart.flot.sampledata.js')}}"></script>
<script src="{{asset('../assets/plugins/flot/dashboard.sampledata.js')}}"></script>

<!-- INTERNAL Vector js -->
<script src="{{asset('../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

<!-- SIDE-MENU JS-->
<script src="{{asset('../assets/plugins/sidemenu/sidemenu.js')}}"></script>

<!-- TypeHead js -->
<script src="{{asset('../assets/plugins/bootstrap5-typehead/autocomplete.js')}}"></script>
<script src="{{asset('../assets/js/typehead.js')}}"></script>

<!-- INTERNAL INDEX JS -->
<script src="{{asset('../assets/js/index1.js')}}"></script>

<!-- Color Theme js -->
<script src="{{asset('../assets/js/themeColors.js')}}"></script>

<!-- CUSTOM JS -->
<script src="{{asset('../assets/js/custom.js')}}"></script>

<!-- Custom-switcher -->
<script src="{{asset('../assets/js/custom-swicher.js')}}"></script>

<!-- Switcher js -->
<script src="{{asset('../assets/switcher/js/switcher.js')}}"></script>

<!-- SWEET-ALERT JS -->
<script src="{{asset('../assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{asset('../assets/js/sweet-alert.js')}}"></script>

@stack('scripts') <!-- This will include the scripts from pushed sections -->
</body>


</html>









