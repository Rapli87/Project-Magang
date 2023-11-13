<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <title>@yield('title', 'Dashboard | PGFC Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="PGFC" name="PT Petrokimia Gresik" />
    
    @include('includes.admin.style')
    @stack('prepend-style')

    @stack('addon-style')
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        @include('includes.admin.navbar')

        @include('includes.admin.sidebar')

        @yield('content')

        @include('includes.admin.footer')
    </div>
    <!-- END wrapper -->

    @include('includes.admin.theme-settings')

    @include('includes.admin.script')

    @stack('prepend-script')
    
    @stack('addon-script')
</body>

</html>
