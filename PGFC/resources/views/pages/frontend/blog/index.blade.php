@extends('layouts.app')
@section('title', 'Blog Articles')

@section('content')

    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs sec-color">
        <img src="{{ asset('frontend/images/breadcrumbs/blog-left.jpg') }}" alt="Breadcrubs-image" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">Blog Articles</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('index') }}">Home</a>
                            </li>
                            <li>
                                <a class="active" href="">Blog</a>
                            </li>
                            <li>
                                <a class="active" href="">Articles</a>
                            </li>
                            <li>{{ $keyword }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Home Blog Start Here -->
    <!-- Modern Blog Start Here -->
    <div id="rs-blog" class="rs-blog sec-spacer">
        <div class="container">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <div class="search-bar">
                    <input name="keyword" type="text" id="blog-search" placeholder="Search articles...">
                    <button id="search-button"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
                </div>
            </form>
            @if ($keyword)
                <div class="search-results">
                    <h4>Search results for <b>"{{ $keyword }}"</b></h4>
                    <a href="{{ url('blog/articles') }}" class="btn btn-danger">Reset</a>
                </div>
            @endif
            <div class="row">
                @forelse ($articles as $item)
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single-blog-slide">
                            <div class="images">
                                <a href="{{ url('blog/p/' . $item->slug) }}">
                                    <img class="card-img-top post-img card-height"
                                        src="{{ asset('storage/admin/articles/' . $item->img) }}" alt="Blog Image">
                                </a>
                            </div>
                            <div class="blog-details">
                                <span class="date">
                                    <i class="fa fa-calendar-check-o"></i>
                                    {{ $item->created_at->format('d-m-Y') }}
                                    <a href="{{ url('blog/category/' . $item->Category->slug) }}">{{ $item->Category->name }}</a>
                                </span>
                                <h3><a href="{{ url('blog/p/' . $item->slug) }}">{{ $item->title }} </a></h3>
                                <p>{!! Str::limit(html_entity_decode(strip_tags($item->desc)), 200, '...') !!}</p>
                                <div class="read-more">
                                    <a href="{{ url('blog/p/' . $item->slug) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="no-results">
                        <h4>There are no articles matching your search.</h4>
                    </div>
                @endforelse
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="pagination justify-content-center my-4">
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modern Blog End Here -->
    <!-- Home Blog End Here -->

@endsection

@push('prepend-style')
    <!-- bootstrap v5.0.2 css -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="frontend/images/logo-pgfc.png">
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ url('frontend/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ url('frontend/css/animate.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ url('frontend/css/rsmenu-main.css') }}">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="{{ url('frontend/css/rsmenu-transitions.css') }}">
    <!-- hover-min css -->
    <link rel="stylesheet" href="{{ url('frontend/css/hover-min.css') }}">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.css') }}">
    <!-- Slick css -->
    <link rel="stylesheet" href="{{ url('frontend/css/slick.css') }}">
    <!-- Slick Theme css -->
    <link rel="stylesheet" href="{{ url('frontend/css/slick-theme.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}">
    <!-- modernizr js -->
    <script src="{{ url('frontend/js/modernizr-2.8.3.min.js') }}"></script>
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ url('frontend/css/custom.css') }}">
@endpush

@push('addon-script')
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{{ url('frontend/js/jquery.min.js') }}"></script>
    <!-- Menu js -->
    <script src="{{ url('frontend/js/rsmenu-main.js') }}"></script>
    <!-- jquery-ui js -->
    <script src="{{ url('frontend/js/jquery-ui.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
    <!-- meanmenu js -->
    <script src="{{ url('frontend/js/jquery.meanmenu.js') }}"></script>
    <!-- wow js -->
    <script src="{{ url('frontend/js/wow.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ url('frontend/js/slick.min.js') }}"></script>
    <!-- masonry js -->
    <script src="{{ url('frontend/js/masonry.js') }}"></script>
    <!-- magnific-popup js -->
    <!-- owl.carousel js -->
    <script src="{{ url('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- magnific-popup js -->
    <script src="{{ url('frontend/js/jquery.magnific-popup.js') }}"></script>
    <!-- jquery.counterup js -->
    <script src="{{ url('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('frontend/js/waypoints.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ url('frontend/js/main.js') }}"></script>
@endpush
