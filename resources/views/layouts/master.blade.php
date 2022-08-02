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
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <!-- End fonts -->

	<!-- core:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/core/core.css') }}">
	<!-- endinject -->

    <!-- Layout styles -->  
	<link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <!-- End layout styles -->


</head>
<body>
    <div class="main-wrapper">

        @include('layouts.inc.admin-sidenavbar')

        <div class="page-wrapper">
        
            @include('layouts.inc.admin-navbar')
            <div class="page-content">

                @yield('content')

            </div>
            @include('layouts.inc.footer')

        </div>
    </div>
   
    <!-- core:js -->
    <script src="{{ asset('assets/js/core/core.js') }}"></script>

    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/js/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
   


    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <!-- endinject -->

</body>
</html>