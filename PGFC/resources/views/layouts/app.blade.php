<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @stack('prepend-style')
    {{-- @include('includes.style') --}}
    @stack('addon-style')
    
</head>

<body class="home-two">
    @include('includes.navbar')

    @yield('content')

    <!-- Sponsorhip-->
    @include('includes.sponsorship')

    {{-- footer --}}
    @include('includes.footer')

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
