<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{ asset('admintpl/css/vendor.css') }}">
        <!-- Theme initialization -->
        <link rel="stylesheet" href="{{ asset('admintpl/css/app-blue.css') }}">
    </head>
    <body>
        <div class="auth">
            <div class="auth-container">
                @yield('content')
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="{{ asset('admintpl/js/vendor.js') }}"></script>
        <script src="{{ asset('admintpl/js/app.js') }}"></script>
    </body>
</html>                