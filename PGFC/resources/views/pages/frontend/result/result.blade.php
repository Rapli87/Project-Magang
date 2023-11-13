@extends('layouts.app')
@section('title', 'Result')

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
<div class="rs-result sec-spacer">
	<div class="container">
		<ul class="point-menu text-center">
			<li class="active"><a data-toggle="tab" href="#GA">Grup A</a></li>
			  <li><a data-toggle="tab" href="#GB">Grup B</a></li>
			  <li><a data-toggle="tab" href="#GC">Grup C</a></li>
			  <li><a data-toggle="tab" href="#GD">Grup D</a></li>
			  <li><a data-toggle="tab" href="#GE">Grup E</a></li>
			  <li><a data-toggle="tab" href="#GF">Grup F</a></li>
			  <li><a data-toggle="tab" href="#GG">Grup G</a></li>
			  <li><a data-toggle="tab" href="#GH">Grup H</a></li>
		</ul>

		<div class="tab-content team-result">
			<div class="overly-bg"></div>
			  <div id="GA" class="tab-pane fade in active">
				<table>
					<tr class="single-result">
						<td class="team-name team1 text-center"><img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
						<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
						<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
						<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
						<td class="view-statictics text-center"><a href="{{ route('pages.result-single') }}">View Statictics >></a> </td>
					</tr>    			
				</table>
			  </div>
			  <div id="GB" class="tab-pane fade">
				<table>
					<tr class="single-result">
						<td class="team-name team1 text-center"><img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
						<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
						<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
						<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
						<td class="view-statictics text-center"><a href="{{ route('pages.result-single') }}">View Statictics >></a> </td>
					</tr> 
				</table>
			  </div>
			  <div id="GC" class="tab-pane fade">
				<table>
					<tr class="single-result">
						<td class="team-name team1 text-center"><img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
						<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
						<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
						<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
						<td class="view-statictics text-center"><a href="{{ route('pages.result-single') }}">View Statictics >></a> </td>
					</tr>  			
				</table>
			  </div>
			  <div id="GD" class="tab-pane fade">
				<table>
					<tr class="single-result">
						<td class="team-name team1 text-center"><img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
						<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
						<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
						<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
						<td class="view-statictics text-center"><a href="{{ route('pages.result-single') }}">View Statictics >></a> </td>
					</tr>    			
				</table>
			  </div>
			  <div id="GE" class="tab-pane fade">
				<table>
					<tr class="single-result">
						<td class="team-name team1 text-center"><img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
						<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
						<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
						<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
						<td class="view-statictics text-center"><a href="{{ route('pages.result-single') }}">View Statictics >></a> </td>
					</tr>     			
				</table>
			  </div>
			  <div id="GF" class="tab-pane fade">
				<table>
					<tr class="single-result">
						<td class="team-name team1 text-center"><img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
						<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
						<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
						<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
						<td class="view-statictics text-center"><a href="{{ route('pages.result-single') }}">View Statictics >></a> </td>
					</tr>     			
				</table>
			  </div>
			  <div id="GG" class="tab-pane fade">
				<table>
					<tr class="single-result">
						<td class="team-name team1 text-center"><img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
						<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
						<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
						<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
						<td class="view-statictics text-center"><a href="{{ route('pages.result-single') }}">View Statictics >></a> </td>
					</tr>     			
				</table>
			  </div>
			  <div id="GH" class="tab-pane fade">
				<table>
					<tr class="single-result">
						<td class="team-name team1 text-center"><img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
						<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
						<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="frontend/images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
						<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
						<td class="view-statictics text-center"><a href="{{ route('pages.result-single') }}">View Statictics >></a> </td>
					</tr>     			
				</table>
			  </div>
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