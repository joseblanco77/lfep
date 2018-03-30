<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>

    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar bg-dark navbar-dark navbar-expand-sm sticky-top">

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link{{ Request::is('/') ? ' active' : '' }}" href="/">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ Request::is('contacto') ? ' active' : '' }}" href="{{ route('cajaverde.contacto') }}">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cajaverde.login') }}">Login</a>
            </li>
        </ul>

    </nav> 

    <div class="container">

        @if(session('alert_error'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
            {{ session('alert_error') }}
        </div>
        @endif


        @if(session('alert_success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
            {{ session('alert_success') }}
        </div>
        @endif

        @yield('content')

    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
