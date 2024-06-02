@extends('layouts.landing')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-10 w-100">
            <div class="content text-center">
                <div class="">
                    <h6 class="content-title mb-1"><img class="arrow-decore" src="{{ asset('cuba/assets/images/landing/decore/arrow.svg') }}"
                            alt=""><span class="sub-title">Selamat Datang di </span></h6>
                    <h1 class="wow fadeIn">Sistem Informasi Pendidikan dan Pelatihan</h1>
                    <h1 class="wow fadeIn"><span>Simdiklat</span></h1>
                    <p class="mt-3 wow fadeIn">Pusat Pendidikan dan Pelatihan Badan Pusat Statistik</p>

                    {{-- LOGO --}}
                    <div class="btn-grp mt-4">
                        <a class="wow pulse" href="index.html" target="_blank" data-bs-placement="top" data-bs-toggle="tooltip" title="HTML"> <img src="{{ asset('cuba/assets/images/landing/icon/html/html.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-7 col-lg-8 col-md-10"> <img class="screen1 img-fluid"
                src="{{ asset('cuba/assets/images/landing/screen1.png') }}" alt=""></div>
    </div>
@endsection
