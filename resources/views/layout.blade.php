<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap@5.2.1/bootstrap.min.css') }}">
        <link href={{ asset('plugins/css/arrow_exchange/arrows-exchange.css')}} rel='stylesheet'>
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free-6.2.0-web/css/all.min.css') }}">
        
    </head>
    <body class="sidebar-mini layout-fixed layout-navbar-fixed sidebar-mini sidebar-closed sidebar-collapse"><!--else hold-transition sidebar-mini-->
        <div id="app" class="wrapper">
            @include('layout.navbar')
            @include('layout.sidebar')
            @include('layout.frame')
            
        </div>

    </body>
</html>

<script src="{{ asset('plugins/bootstrap@5.2.1/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/jquery/jquery-3.6.1.min.js') }}"></script>
<script src="{{ asset('plugins/jquery/loadingoverlay.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

@include('scripts.globalScript')

