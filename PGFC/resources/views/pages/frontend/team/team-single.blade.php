@extends('layouts.app')
@section('title', 'Team Single')

@section('content')

<!-- Breadcrumbs Section Start -->
<div class="rs-breadcrumbs sec-color">
    <img src="frontend/images/breadcrumbs/team-single-header.jpg" alt="Breadcrubs" />
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Team Single</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('index') }}">Home</a>
                        </li>
                        <li>Team Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Section End -->


<!-- Team Single Start -->
<div class="rs-team-single-section team-inner-page sec-spacer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="rs-team-single-image">
                    <img src="frontend/images/team/team-single.jpg" alt="">
                    <div class="player-info">
                        <h3 class="player-title">Masud Rana</h3>
                        <span class="player-position">Stricker</span>
                        <span class="player-club">Mirpur FC</span>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="rs-team-single-text mb-50">
                    <h3>Personal Info</h3>
                    <div class="row single-details mb-30">
                        <div class="col-md-5 single-team-info">
                            <table>
                                <tr>
                                    <td>
                                        <h3>Born:</h3>
                                    </td>
                                    <td>
                                        <h4>Sep 31, 1988</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Weight:</h3>
                                    </td>
                                    <td>
                                        <h4>72kg</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Height:</h3>
                                    </td>
                                    <td>
                                        <h4>182cm</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Birth Place:</h3>
                                    </td>
                                    <td>
                                        <h4>Linkuije, Badda</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Citizenship:</h3>
                                    </td>
                                    <td>
                                        <h4>Badda</h4>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-7 single-team-text">
                            <div class="text-section">
                                <p>“Lorem ipsum dolor sit amet, consectetur adip isc ing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua”</p>
                            </div>
                            <div class="signature-section">
                                <div class="sign-left">
                                    <h1>Masud Rana</h1>
                                </div>
                                <div class="sign-right">
                                    <img src="frontend/images/team/team-single-sign.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Career Info</h3>
                    <div class="row single-details">
                        <div class="col-md-12 single-team-info">
                            <table>
                                <tr>
                                    <td>
                                        <h3>Matches:</h3>
                                    </td>
                                    <td>
                                        <h4>40 Matches</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Goals:</h3>
                                    </td>
                                    <td>
                                        <h4>32 Goals</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Free Kick:</h3>
                                    </td>
                                    <td>
                                        <h4>4 Goals (13)</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Penalty:</h3>
                                    </td>
                                    <td>
                                        <h4>5 Goals (7)</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Card:</h3>
                                    </td>
                                    <td>
                                        <h4>1 Red, 3 Yellow</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Present Club:</h3>
                                    </td>
                                    <td>
                                        <h4>Badda FC</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Previous Club:</h3>
                                    </td>
                                    <td>
                                        <h4>Kapa FC</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Club Debut:</h3>
                                    </td>
                                    <td>
                                        <h4>March 21, 2005</h4>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3>Overview</h3>
                <div class="team-information-text">
                    <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                        quasi ar chitecto beatae vitae dicta sunt explicabo.Nemo enim ipsam voluptatem quia voluptas
                        sit aspernatur aut odit aut fugit, sed quia con sequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunt.</p>
                </div>
                <div class="team-single-details-text">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                        dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                        consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                        molestiae consequatur.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="team-single-comment">
                    <h3>Post a Comment</h3>
                    <textarea name="comments" placeholder="Comments here"></textarea>
                    <input type="submit" value="Submit">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Single End  -->

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
    <!-- Slick Theme css -->
    <link rel="stylesheet" href="{{ url('frontend/css/slick-theme.css') }}">
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
    <script src="{{ url('js/owl.carousel.min.js')}}"></script>
    <!-- magnific-popup js -->
    <script src="{{ url('frontend/js/jquery.magnific-popup.js')}}"></script>
    <!-- jquery.counterup js -->
    <script src="{{ url('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ url('frontend/js/waypoints.min.js')}}"></script>
    <!-- main js -->
    <script src="{{ url('frontend/js/main.js')}}"></script>
@endpush