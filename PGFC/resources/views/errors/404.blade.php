<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>404 | PGFC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="PGFC" name="PT Petrokimia Gresik" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('backend/assets/images/favicon.ico') }}">

    <!-- Theme Config Js -->
    <script src="{{ url('backend/assets/js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ url('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ url('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="{{url('backend/assets/images/bg.png')}}" alt="" class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4">
                                        <a href="#" class="logo-light">
                                            <img src="{{ url('frontend/images/logo-pgfc.png') }}" alt="logo" height="22">
                                        </a>
                                        <a href="" class="logo-dark">
                                            <img src="{{ url('frontend/images/logo-pgfc.png') }}" alt="dark logo" height="80"
                                                weight="80">
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto">
                                        <div class="d-flex justify-content-center mb-5">
                                            <img src="{{ url('backend/assets/images/svg/404.svg') }}" alt="" class="img-fluid">
                                        </div>

                                        <div class="text-center">
                                            <h1 class="mb-3">404</h1>
                                            <h4 class="fs-20">Page not found</h4>
                                            <p class="text-muted mb-3"> It's looking like you may have taken a wrong
                                                turn. Don't worry... it happens to the best of us.</p>
                                        </div>
{{-- route untuk halaman utama --}}

                                        <a href="{{ route('index') }}" class="btn btn-soft-primary w-100"><i
                                                class="ri-home-4-line me-1"></i> Back to Home</a>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-light">
            <script>
                document.write(new Date().getFullYear())
            </script> © PGFC - by Petrokimia Gresik
        </span>
    </footer>
    <!-- Vendor js -->
    <script src="{{ url('backend/assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ url('backend/assets/js/app.min.js') }}"></script>

</body>

</html>
