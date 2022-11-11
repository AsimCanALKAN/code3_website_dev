<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Daterange picker -->
    <link href="{{ asset('vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{ asset('vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">

    <!-- Pick date -->
    <link rel="stylesheet" href="{{ asset('vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/pickadate/themes/default.date.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/nouislider/nouislider.min.css') }}">
    <link href="{{ asset('vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">

    <!-- Style css -->

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">

    @livewireStyles
    <!-- Scripts -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="font-sans antialiased">
    <div id="preloader">
        <div class="waviy">
            <span style="--i:1">L</span>
            <span style="--i:2">o</span>
            <span style="--i:3">a</span>
            <span style="--i:4">d</span>
            <span style="--i:5">i</span>
            <span style="--i:6">n</span>
            <span style="--i:7">g</span>
            <span style="--i:8">.</span>
            <span style="--i:9">.</span>
            <span style="--i:10">.</span>
        </div>
    </div>
    {{ $slot }}


</body>

@livewireScripts
<script src="{{ asset('vendor/global/global.min.js')}}"></script>
<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

{{ $scripts ?? '' }}



<script src="{{ asset('js/custom.min.js')}}"></script>
<script src="{{ asset('js/dlabnav-init.js')}}"></script>

<!-- We can uncomment to enable style options -->
{{-- <script src="{{ asset('js/demo.js')}}"></script>
<script src="{{ asset('js/styleSwitcher.js')}}"></script> --}}

<script src="{{ asset('vendor/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{ asset('js/dashboard/cards-center.js')}}"></script>



<script src="{{ asset('js/bos.js') }}"></script>

</html>