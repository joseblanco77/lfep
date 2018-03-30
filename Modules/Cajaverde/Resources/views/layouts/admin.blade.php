<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('admin/img/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('admin/img/favicon.png') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/vendor.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
        @yield('headlinks')
    </head>
    <body>
        <div class="main-wrapper">
            <div class="app header-fixed footer-fixed sidebar-fixed" id="app">
                @include('cajaverde::layouts.header')
                @include('cajaverde::layouts.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content">
                @include('cajaverde::layouts.alerts')
                @yield('content')
                </article>
                @include('cajaverde::layouts.footer')
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
        <script src="{{ asset('admin/js/vendor.js') }}"></script>
        <script src="{{ asset('admin/js/app.js') }}"></script>
        <script src="{{ asset('admin/js/custom.js') }}"></script>
        @yield('footscripts')
    </body>
</html>