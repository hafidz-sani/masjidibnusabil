<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Login - Gojags</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/animate.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('cuba/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/responsive.css') }}">

</head>

<body>
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

        <!-- Page Body Start-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="login-card login-dark">
                        <div>
                            <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light"
                                        src="{{ asset('logo.png') }}" alt="looginpage"><img
                                        class="img-fluid for-dark"
                                        src="{{ asset('logo_dark.png') }}"
                                        alt="looginpage"></a></div>
                            <div class="login-main">
                                <form class="theme-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h4>Sign in to account</h4>
                                    <p>Enter your email & password to login</p>
                                    <div class="form-group">
                                        <label class="col-form-label">Email Address</label>
                                        <input class="form-control" type="email" name="email"
                                            @error('email') is-invalid @enderror value="{{ old('email') }}" required
                                            autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Password</label>
                                        <div class="form-input position-relative">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">
                                            <div class="show-hide"><span class="show"> </span></div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="checkbox p-0">
                                            <input id="checkbox1" type="checkbox" name="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label class="text-muted" for="checkbox1">Remember password</label>
                                        </div><a class="link" href="forget-password.html">Forgot password?</a>
                                        <div class="text-end mt-3">
                                            <button class="btn btn-primary btn-block w-100" type="submit">Sign
                                                in</button>
                                        </div>
                                    </div>
                                    {{-- <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                                    <div class="social mt-4">
                                        <div class="btn-showcase"><a class="btn btn-light"
                                                href="https://www.linkedin.com/login" target="_blank"><i
                                                    class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a
                                                class="btn btn-light" href="https://twitter.com/login?lang=en"
                                                target="_blank"><i class="txt-twitter"
                                                    data-feather="twitter"></i>twitter</a><a class="btn btn-light"
                                                href="https://www.facebook.com/" target="_blank"><i class="txt-fb"
                                                    data-feather="facebook"></i>facebook</a></div>
                                    </div>
                                    <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2"
                                            href="sign-up.html">Create Account</a></p> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('layouts.part._script')
    <script>
        $(document).on('click', '#error', function(e) {
            if ($('.email').val() == '' || $('.pwd').val() == '') {
                swal(
                    "Error!", "Sorry, looks like some data are not filled, please try again !", "error"
                )
            }
        });
    </script>

</body>

</html>
