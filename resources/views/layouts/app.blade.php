<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

	<!-- waves css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/Waves/waves.min.css') }}">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

	<!--color css-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.min.css') }}" id="color"/>
</head>
<body>
    <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script src="{{ asset('assets/plugins/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.form.min.js') }}"></script>

<script src="{{ asset('js/application.js') }}"></script>
<script src="{{ asset('js/ajax.js') }}"></script>




<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Required Fremwork -->
<script src="{{ asset('assets/plugins/tether/dist/js/tether.min.js') }}" ></script>

<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" ></script>

<!-- waves effects.js -->
<script  src="{{ asset('assets/plugins/Waves/waves.min.js') }}" defer></script>
<!-- Custom js -->
<script src="{{ asset('assets/pages/elements.js') }}" defer></script>

<!-- Scrollbar JS-->
<script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}" defer></script>
   <script src="{{ asset('assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>

   <!--classic JS-->
   <script src="{{ asset('assets/plugins/classie/classie.js') }}"></script>

   <!-- notification -->
   <script src="{{ asset('assets/plugins/notification/js/bootstrap-growl.min.js') }}"></script>

   <!-- Sparkline charts -->
   <script src="{{ asset('assets/plugins/jquery-sparkline/dist/jquery.sparkline.js') }}"></script>

   <!-- Counter js  -->
   <script src="{{ asset('assets/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
   <script src="{{ asset('assets/plugins/countdown/js/jquery.counterup.js') }}"></script>

   <!-- Echart js -->
   <script src="{{ asset('assets/plugins/charts/echarts/js/echarts-all.js') }}"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="{{ asset('assets/js/main.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('assets/pages/dashboard.js') }}"></script>
   <script type="text/javascript" src="{{ asset('assets/pages/elements.js') }}"></script>
   <script src="{{ asset('assets/js/menu.min.js') }}"></script>


</html>
