<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap@5.2.1/bootstrap.min.css') }}">
    </head>
    <body class="antialiased">
        <h1>This is From Main Page layout</h1>
        <br>
        <br>
        @yield('content')
    </body>
</html>

<script src="{{ asset('plugins/bootstrap@5.2.1/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/jquery/jquery-3.6.1.min.js') }}"></script>
<script src="{{ asset('plugins/jquery/loadingoverlay.min.js') }}"></script>

@include('scripts.globalScript')

