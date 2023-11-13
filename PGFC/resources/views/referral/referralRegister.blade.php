<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Referral Register | PGFC</title>
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
                    <div class="card overflow-hidden bg-opacity-25">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="backend/assets/images/bg.png" alt="" class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4">
                                        <a href="#" class="logo-light">
                                            <img src="frontend/images/logo-pgfc.png" alt="logo" height="22">
                                        </a>
                                        <a href="" class="logo-dark">
                                            <img src="frontend/images/logo-pgfc.png" alt="dark logo" height="80"
                                                weight="80">
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto">
                                        <h4 class="fs-20">Sign Up</h4>
                                        <p class="text-muted mb-3">Enter your email address and password to access
                                            account.</p>

                                        <form method="POST" action="{{ route('registered') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nama</label>
                                                <input class="form-control" type="text" name="name"
                                                    placeholder="Enter your name" required autofocus>
                                                @error('name')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input class="form-control" type="email" name="email" required
                                                    autofocus placeholder="Enter your email">
                                                @error('email')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="referral_code" class="form-label">Kode Token</label>
                                                <input class="form-control" type="text" name="referral_code" value="{{ $referral }}" style="pointer-events: none;background-color:lightgrey;"
                                                    placeholder="Enter Refferal Code (Optional)">
                                                @error('referral_code')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input class="form-control" type="password" required=""
                                                    name="password" placeholder="Enter your password">
                                                @error('password')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Confirm Password</label>
                                                <input class="form-control" type="password" required=""
                                                    name="password_confirmation" placeholder="Enter your password">
                                                @error('password_confirmation')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkbox-signup">
                                                    <label class="form-check-label" for="checkbox-signup">I accept <a
                                                            href="javascript: void(0);" class="text-muted">Terms and
                                                            Conditions</a></label>
                                                </div>
                                            </div>
                                            <div class="mb-0 d-grid text-center">
                                                <button class="btn btn-primary fw-semibold" type="submit"
                                                    value="Register">Sign
                                                    Up</button>
                                            </div>

                                            <div class="text-center mt-4">
                                                <p class="text-muted fs-16">Sign in with</p>
                                                <div class="d-flex gap-2 justify-content-center mt-3">
                                                    <a href="javascript: void(0);" class="btn btn-soft-primary"><i
                                                            class="ri-facebook-circle-fill"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-soft-danger"><i
                                                            class="ri-google-fill"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-soft-info"><i
                                                            class="ri-twitter-fill"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-soft-dark"><i
                                                            class="ri-github-fill"></i></a>
                                                </div>
                                            </div>

                                        </form>
                                        @if (Session::has('success'))
                                            <p style="color: green">{{ Session::get('success') }}</p>
                                        @endif
                                        @if (Session::has('error'))
                                            <p style="color: red">{{ Session::get('error') }}</p>
                                        @endif
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-light-emphasis">Already have account? <a href="{{ route('login') }}"
                            class="text-light fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Log In</b></a>
                    </p>
                </div> <!-- end col --> --}}
            </div>
            <!-- end row -->
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
