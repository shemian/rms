<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rental Managemnent System</title>

    <!-- Scripts -->
    

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
    <link rel="stylesheet" href="{{ asset('assets/jquery-steps/jquery.steps.css') }}">

    <!-- End layout styles -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js" ></script>

  
    @yield('styles')


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
    <script src="{{ asset('assets/js/wizard.js') }}"></script>
    <script src="{{asset ('assets/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/js/chartjs/Chart.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js" integrity="sha512-bE0ncA3DKWmKaF3w5hQjCq7ErHFiPdH2IGjXRyXXZSOokbimtUuufhgeDPeQPs51AI4XsqDZUK7qvrPZ5xboZg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/apexcharts/apexcharts.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.4/apexcharts.min.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    
   


    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <!-- endinject -->

   
    <script src="{{ asset('assets/js/dashboard-light.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
  
   

    @yield('scripts')
 

</body>
</html>