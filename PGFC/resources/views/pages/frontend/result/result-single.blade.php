@extends('layouts.app')
@section('title', 'Result Single')

@section('content')

        <!-- Breadcrumbs Section Start -->
		<div class="rs-breadcrumbs sec-color">
            <img src="frontend/images/breadcrumbs/point-table.jpg" alt="Breadcrubs" />
            <div class="breadcrumbs-inner">
    			<div class="container">
    				<div class="row">
    					<div class="col-md-12 text-center">
    						<h1 class="page-title">Result</h1>
    						<ul>
    							<li>
    								<a class="active" href="{{ route('index') }}">Home</a>
    							</li>
    							<li>Result</li>
    						</ul>
    					</div>
    				</div>
    			</div>
            </div>
		</div>
		<!-- Breadcrumbs Section End -->


        <!-- Point Table Section Start -->
        <div class="rs-result-single sec-spacer">
	        <div class="container">
	        	<div class="text-center">
	        		<h3 class="title-bg">Match Statictics</h3>
	        	</div>
	        	<div class="match-stats">
	        		<div class="overly-bg"></div>
	        		<table>
        				<tr>
        					<th class="team-name stats1">
        						<a href="#">SMAN 1 GRESIK<img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 1 GRESIK.png"></a>
        						<span>Rizal (12')</span>
        					</th>
        					<th class="team-score"><span class="goal-count">1-0</span></th>
        					<th class="team-name stats2">
        						<a href="#"><img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png">SMAN 2 LAMONGAN</a>
        						<span></span>
        					</th>
        				</tr>
    					<tr>
    						<td><span class="stats1">63.9%</span></td>
    						<td><span class="stat-title">Ball Possession</span></td>
    						<td><span class="stats2">36.1%</span></td>
    					</tr>
						<tr>
    						<td><span class="stats1">3</span></td>
    						<td><span class="stat-title">Goal</span></td>
    						<td><span class="stats2">2</span></td>
    					</tr>
    					<tr>
    						<td><span class="stats1">2</span></td>
    						<td><span class="stat-title">Shots on target</span></td>
    						<td><span class="stats2">3</span></td>
    					</tr>
    					<tr>
    						<td><span class="stats1">14</span></td>
    						<td><span class="stat-title">Shots</span></td>
    						<td><span class="stats2">10</span></td>
    					</tr>
    					<tr>
    						<td><span class="stats1">5</span></td>
    						<td><span class="stat-title">Saves</span></td>
    						<td><span class="stats2">4</span></td>
    					</tr>
						<tr>
							<td><span class="stats1">2</span></td>
							<td><span class="stat-title">Yellow Cards</span></td>
							<td><span class="stats2">1</span></td>
    					</tr>
						<tr>
							<td><span class="stats1">0</span></td>
							<td><span class="stat-title">Red Cards</span></td>
							<td><span class="stats2">1</span></td>
    					</tr>
    				</table>
	        	</div>
			</div>
        </div>
        <!-- Point Table Section End -->

@endsection

@push('prepend-style')
	<link rel="apple-touch-icon" href="apple-touch-icon.html">
	<!-- Place favicon.ico in tde root directory -->
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