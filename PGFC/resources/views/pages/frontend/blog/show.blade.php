@extends('layouts.app')
@section('title', $article->title. '- PGFC')

@section('content')
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs sec-color">
        <img src="{{ asset('frontend/images/breadcrumbs/blog-left.jpg') }}" alt="Breadcrubs-image" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">{{ $article->title }}</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('index') }}">Home</a>
                            </li>
                            <li>
                                <a class="active" href="{{ route('pages.blog') }}">Blog</a>
                            </li>
                            <li>{{ $article->slug }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Blog Single Start Here -->
    <div class="single-blog-details sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="single-image">
                        <img class="single-img" src="{{ asset('storage/admin/articles/' . $article->img) }}"
                            alt="{{ $article->title }}">
                    </div>
                    <h3><a href="{{ url('blog/p/' . $article->slug) }}">{{ $article->title }}</a></h3>
                    <p>{!! $article->desc !!}</p>
                    <div class="share-section">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12 life-style">
                                <span class="author">
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Admin </a>
                                </span>
                                <span class="eye">
                                    <a href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i> {{ $article->views }}x
                                    </a>
                                </span>
                                <span class="date">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    {{ $article->created_at->format('d-m-Y') }}
                                </span>
                                <span class="cat">
                                    <a href="{{ url('blog/category/'.$article->Category->slug) }}"><i class="fa fa-folder-o" aria-hidden="true"></i> {{ $article->Category->name }} </a>
                                </span>
                            </div>
                            {{-- <div class="col-sm-6 col-xs-12">
                                <ul class="share-link1">
                                    <li><a href="#"> Tags:</a></li>
                                    <li><a href="#"> Football</a></li>
                                    <li><a href="#"> Club</a></li>
                                    <li><a href="#"> Sports</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>

                    {{-- <div class="share-section2">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <span> You Can Share It : </span>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <ul class="share-link">
                                    <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i>
                                            Facebook</a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
                {{-- side widget --}}
                @include('includes.frontend.blog.side-widget')
            </div>
        </div>
    </div>
    <!-- Blog Single End Here -->

@endsection

@push('prepend-style')
    <!-- bootstrap v5.0.2 css -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
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
