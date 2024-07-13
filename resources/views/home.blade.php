@extends('layouts.landing')

@push('custom-styles')

<style>
    .landing-home {
        scroll-behavior: smooth;
        overflow: hidden;
        position: relative;
        background-position: bottom;
        background-size: cover;
        background-image: url(../../../images/bg1.jpg);

        background-color: #1b1c21;
    }
</style>
@endpush

@section('content')
<div class="row justify-content-center mb-5">
    <div class="col-lg-8 col-sm-10 w-100">
        <div class="content text-center">
            <div class="">
                <h6 class="content-title mb-1"><img class="arrow-decore" src="{{ asset('cuba/assets/images/landing/decore/arrow.svg') }}" alt=""><span class="sub-title tes">Selamat Datang di website official </span></h6>
                <h1 class="wow fadeIn"><span>Masjid Ibnu Sabil Pisangan Baru</span></h1>
                <p class="mt-3 wow fadeIn">Tempat Ibadah dan Kegiatan Agama Jakarta Timur</p>

                {{-- LOGO --}}
                <div class="btn-grp mt-4">
                    <a class="wow pulse" href="index.html" target="_blank" data-bs-placement="top" data-bs-toggle="tooltip" title="HTML"> <img src="{{ asset('cuba/assets/images/landing/icon/html/html.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-7 col-lg-8 col-md-10"> <img class="screen1 img-fluid" src="{{ asset('cuba/assets/images/landing/screen1.png') }}" alt=""></div>
</div>

<!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner justify-content-center mt-5 px-5">
        <div class="carousel-item active px-5">
            <img src="{{ asset('images/img-1.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item px-5">
            <img src="{{ asset('images/img-1.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item px-5">
            <img src="{{ asset('images/img-1.png')}}" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="section-space customer-support mt-5">
    <div class="container">
        <ul class="decoration d-sm-block d-none">
            <li class="round-gif"><img src="{{ asset('cuba/assets/images/landing/decore/arrow-3.svg')}}" class="w-75" alt=""></li>
        </ul>
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="landing-title text-center">
                    
                    <h2> <span class="gradient-1">Team</span>Management</h2>
                    <p>The marketer's goal is to help customers feel confident about their choice. Just providing more information often doesn't help</p>
                </div>
            </div>
            <div class="col-xxl-10">
                <div class="row customer-wrap">
                    <div class="col-md-4 col-6">
                        <div class="customer-wrapper">
                            <div class="customer-box"> <img src="../assets/images/landing/customers/1.svg" alt="">
                                <h6 class="f-light mb-0 mt-2">IRMIS Masjid Ibnu Sabil</h6>
                            </div><img class="outline-box" src="../assets/images/landing/decore/arrow-style-1.svg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="customer-wrapper">
                            <div class="customer-box"> <img src="../assets/images/landing/customers/2.svg" alt="">
                                <h6 class="f-light mb-0 mt-2">DKM Masjid Ibnu Sabil</h6>
                            </div><img class="outline-box" src="../assets/images/landing/decore/arrow-style-2.svg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="customer-wrapper">
                            <div class="customer-box"> <img src="../assets/images/landing/customers/3.svg" alt="">
                                <h6 class="f-light mb-0 mt-2">Ummahat Masjid Ibnu Sabil</h6>
                            </div><img class="outline-box" src="../assets/images/landing/decore/arrow-style-3.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>-->

@endsection