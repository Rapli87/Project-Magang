@extends('layouts.app')
@section('title', 'Gallery')

@section('content')

<!-- Breadcrumbs Section Start -->
<div class="rs-breadcrumbs sec-color">
    <img src="frontend/images/petro-pgfc/11.jpg" alt="Breadcrubs" />
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Match Gallery PGFC</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('index') }}">Home</a>
                        </li>
                        <li>Match Gallery PGFC</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Section End -->

<!-- Gallery Section Start Here-->
<div class="gallery-section-area pb-70 sec-spacer">
    <div class="container" id="grid">
        <h3 class="title-bg">Match Gallery PGFC</h3>
        <div id="gallery-items">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-gallery">
                        <img src="frontend/images/gallery2/gallery-list-1.jpg" alt="" />
                        <div class="heading-conent">
                            <h4>Photo Title Here</h4>
                        </div>
                        <div class="bottom-icons">
                            <ul>
                                <li><a class="image-popup" href="frontend/images/gallery2/gallery-list-1.jpg">
                                    <i class="fa fa-power-off"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-gallery">
                        <img src="frontend/images/gallery2/gallery-list-2.jpg" alt="" />
                        <div class="heading-conent">
                            <h4>Photo Title Here</h4>
                        </div>
                        <div class="bottom-icons">
                            <ul>
                                <li><a class="image-popup" href="frontend/images/gallery2/gallery-list-2.jpg">
                                    <i class="fa fa-power-off"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-gallery">
                        <img src="frontend/images/gallery2/gallery-list-3.jpg" alt="" />
                        <div class="heading-conent">
                            <h4>Photo Title Here</h4>
                        </div>
                        <div class="bottom-icons">
                            <ul>
                                <li><a class="image-popup" href="frontend/images/gallery2/gallery-list-3.jpg">
                                    <i class="fa fa-power-off"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-gallery">
                        <img src="frontend/images/gallery2/gallery-list-4.jpg" alt="" />
                        <div class="heading-conent">
                            <h4>Photo Title Here</h4>
                        </div>
                        <div class="bottom-icons">
                            <ul>
                                <li><a class="image-popup" href="frontend/images/gallery2/gallery-list-4.jpg">
                                    <i class="fa fa-power-off"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-gallery">
                        <img src="frontend/images/gallery2/gallery-list-5.jpg" alt="" />
                        <div class="heading-conent">
                            <h4>Photo Title Here</h4>
                        </div>
                        <div class="bottom-icons">
                            <ul>
                                <li><a class="image-popup" href="frontend/images/gallery2/gallery-list-5.jpg">
                                    <i class="fa fa-power-off"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-gallery">
                        <img src="frontend/images/gallery2/gallery-list-6.jpg" alt="" />
                        <div class="heading-conent">
                            <h4>Photo Title Here</h4>
                        </div>
                        <div class="bottom-icons">
                            <ul>
                                <li><a class="image-popup" href="frontend/images/gallery2/gallery-list-6.jpg">
                                    <i class="fa fa-power-off"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Section End Here-->

@endsection

@push('prepend-style')
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
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}">
    <!-- modernizr js -->
    <script src="{{ url('frontend/js/modernizr-2.8.3.min.js')}}"></script>
@endpush

@push('addon-script')
    <!-- all js here -->
	<!-- jquery latest version -->
	<script src="{{ url('frontend/js/jquery.min.js')}}"></script>
    <!-- Menu js -->
    <script src="{{ url('frontend/js/rsmenu-main.js')}}"></script>
    <!-- jquery-ui js -->
    <script src="{{ url('frontend/js/jquery-ui.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ url('frontend/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu js -->
    <script src="{{ url('frontend/js/jquery.meanmenu.js')}}"></script>
    <!-- wow js -->
    <script src="{{ url('frontend/js/wow.min.js')}}"></script>
    <!-- Slick js -->
    <script src="{{ url('frontend/js/slick.min.js')}}"></script>
    <!-- masonry js -->
    <script src="{{ url('frontend/js/masonry.js')}}"></script>
    <!-- magnific-popup js -->
    <!-- owl.carousel js -->
    <script src="{{ url('frontend/js/owl.carousel.min.js')}}"></script>
    <!-- magnific-popup js -->
    <script src="{{ url('frontend/js/jquery.magnific-popup.js')}}"></script>
    <!-- jquery.counterup js -->
    <script src="{{ url('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ url('frontend/js/waypoints.min.js')}}"></script>
    <!-- main js -->
    <script src="{{ url('frontend/js/main.js')}}"></script>
@endpush