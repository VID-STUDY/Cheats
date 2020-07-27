<!doctype html>
<!--[if lte IE 9]>         <html lang="en" class="lt-ie10 lt-ie10-msg no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Meta tags -->
    <meta name="description" content="{{ config('app.name', 'Laravel') }} Dashboard">
    <meta name="author" content="Aiso">
    <meta name="robots" content="noindex, nofollow">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Codebase framework -->
    @yield('css')
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themes/pulse.min.css') }}">

</head>
<body>
@php
  $isHomePage = Route::current()->getName() == 'admin.index';
@endphp
<div id="page-container" class="sidebar-o side-scroll @if ($isHomePage) page-header-glass page-header-inverse @else page-header-modern @endif main-content-boxed">

@include('layouts.partials.sidebar')

@include('layouts.partials.header')

<!-- Main Container -->
    <main id="main-container">
        @if ($isHomePage)
            <!-- Page Content -->
            <div class="bg-image" style="background-image: url('{{ asset('assets/img/photos/photo2@2x.jpg') }}');">
                <div class="hero bg-primary-dark-op">
                    <div class="hero-inner">
                        <div class="content content-full text-center">
                            <h1 class="display-4 font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInDown">{{ config('app.name') }}</h1>
                            <h2 class="font-w400 text-white-op mb-50 invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="250">Welcome to your Dashboard! Have a nice day!</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        @else
            <!-- Page Content -->
                <div class="content">
                    {{-- Content --}}
                    @include('components.alerts')
                    @yield('content')
                </div>
                <!-- END Page Content -->
        @endif
    </main>
    <!-- END Main Container -->

    @include('layouts.partials.footer')
</div>
<!-- END Page Container -->

<!-- Codebase Core JS -->
<script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/codebase.min.js') }}"></script>
<script src="{{ asset('js/admin.js') }}"></script>
<script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('plugins/ckfinder/ckfinder.js') }}"></script>
<script>
    jQuery(function () {
        var userDropdown = function () {
            let userDropDownButton = $('#page-header-user-dropdown');
            userDropDownButton.on('click', function (e) {
                e.preventDefault();
                userDropDownButton.next().toggleClass('show');
                userDropDownButton.parent().toggleClass('show');
            })
        };
        userDropdown();
    });
</script>
</div>
</body>
</html>
