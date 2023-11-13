<!doctype html>
<html class="no-js" lang="{{ str_replace('_','-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="Petrokimia Gresik">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('meta-seo')
    <title>@yield('title')</title>
    
    @stack('prepend-style')
    {{-- @include('includes.style') --}}
    @stack('addon-style')
    
</head>

<body class="home-two">
    @include('includes.frontend.navbar')

    @yield('content')

    <!-- Sponsorhip-->
    @include('includes.frontend.sponsorship')

    {{-- footer --}}
    @include('includes.frontend.footer')

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="fa fa-close"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="eg: Soccer News" type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Start scrollUp  -->
    <div id="return-to-top">
        <span>Top</span>
    </div>
    <!-- End scrollUp  -->

    @stack('prepend-script')
    {{-- @include('includes.script') --}}
    @stack('addon-script')

</body>

</html>
