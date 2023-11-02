@extends('layouts.app')
@section('title', 'Contact')

@section('content')

<!-- Breadcrumbs Section Start -->
<div class="rs-breadcrumbs sec-color">
	<img src="frontend/images/breadcrumbs/contact.jpg" alt="Breadcrubs" />
	<div class="breadcrumbs-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="page-title">Contact</h1>
					<ul>
						<li>
							<a class="active" href="{{ route('index') }}">Home</a>
						</li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumbs Section End -->


<!-- Contact Section Start -->
<div class="contact-page-section sec-spacer">
	<div class="container">
		<div class="text-center">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.7203261895856!2d112.63686207499869!3d-7.158297592846252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd80066ea63ec7f%3A0x94595f4ed5d14702!2sGOR%20Tridharma%20Petrokimia%20Gresik!5e0!3m2!1sid!2sid!4v1698894743720!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		{{-- <div id="googleMap"></div> --}}
		<div class="map-text">
			<h3>Contact Info</h3>
			<p>Hubungi kami</p>
		</div>
		<div class="row contact-address-section">
			<div class="col-md-4 contact-pd">
				<div class="contact-address">
					<i class="fa fa-map-marker"></i>
					<h4>Address</h4>
					<p>Jl. A Yani Gresik</p>
				</div>
			</div>
			<div class="col-md-4 contact-pd">
				<div class="contact-phone">
					<i class="fa fa-phone"></i>
					<h4>Phone Number</h4>
					<a href="tel:031-3981811">031-3981811 3982200</a>
					<a href="tel:3982100">3982100</a>
					<a href="tel:3982200">3982200</a>
				</div>
			</div>
			<div class="col-md-4 contact-pd">
				<div class="contact-email">
					<i class="fa fa-envelope"></i>
					<h4>Email Address</h4>
					<a href="mailto:pgfc@petrokimia-gresik.com"><p>pgfc@petrokimia-gresik.com</p></a>
				</div>
			</div>
		</div>

		{{-- <div class="contact-comment-section">
			<h3>Contact Form</h3>
			<div id="form-message"></div>
			<form id="contact-form" method="post" action="https://keenitsolutions.com/products/html/soccer/mailer.php">
				<fieldset>
					<div class="row">                                      
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>First Name*</label>
								<input name="fname" id="fname" class="form-control" type="text">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>Last Name*</label>
								<input name="lname" id="lname" class="form-control" type="text">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>Email*</label>
								<input name="email" id="email" class="form-control" type="email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>Subject *</label>
								<input name="subject" id="subject" class="form-control" type="text">
							</div>
						</div>
					</div>
					<div class="row"> 
						<div class="col-md-12 col-sm-12 col-xs-12">    
							<div class="form-group">
								<label>Message *</label>
								<textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">         
							<div class="form-group mb-0">
								<input class="btn-send" type="submit" value="Submit Now">
							</div>
						</div>
					</div>    
				</fieldset>
			</form>						
		</div> --}}
	</div>
</div>
<!-- Contact Section End -->

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
	<script src="frontend/js/jquery.min.js"></script>
	<!-- Menu js -->
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
        <!-- moogle map js -->
    {{-- <script src="{{ url('https://maps.googleapis.com/maps/api/js?key=AIzaSyAgC6ZapXdUzFdeQOFhdm_wucwlDMMQ8CQ')}}"></script> --}}
        <!-- contact popup form js -->
    <script src="{{ url('frontend/js/contact.form.js')}}"></script>
		<!-- main js -->		
	<script src="{{ url('frontend/js/main.js')}}"></script>
@endpush