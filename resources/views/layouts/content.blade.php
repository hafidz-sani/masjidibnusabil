<!DOCTYPE html>
<html lang="en">

@include('layouts.part_landing._head')
<body class="landing-page">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="landing-page">
        <!-- Page Body Start -->
        <div class="landing-home">
            <div class="">

                {{-- NAVBAR --}}
                <div class="sticky-header container-fluid">
                    @include('layouts.part_landing._navbar')
                </div>
                {{-- END NAVBAR --}}

                {{-- START CONTENT --}}
                @yield('content')
                {{-- END CONTENT --}}
            </div>
        </div>

        {{-- START FOOTER --}}
        @include('layouts.part_landing._footer')
        {{-- END FOOTER --}}
    </div>

    {{-- START SCRIPT --}}
    @include('layouts.part_landing._script')
</body>

</html>
