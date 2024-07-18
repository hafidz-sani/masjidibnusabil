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
    <link rel="icon" href="{{ asset('images/logo_masjid.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/logo_masjid.png') }}" type="image/x-icon">
    <title>Masjid Ibnu Sabil</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/sweetalert2.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('cuba/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/responsive.css') }}">

    @stack('custom-styles')
</head>

<body>
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader-index"> <span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

        @include('layouts.part._header')

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            @include('layouts.part._sidebar')

            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        @stack('title')
                    </div>
                </div>
                @yield('content')
            </div>

            @include('layouts.part._footer')
        </div>
    </div>

    @include('layouts.part._script')

    {{-- NOTIFY JS --}}
    <script src="{{ asset('assets/system/js/toastify.js') }}"></script>
    @if (Session::has('message'))
        @include('admin.part._notif')
    @endif

    {{-- CUSTOM SCRIPT --}}
    @stack('custom-scripts')
</body>

</html>
