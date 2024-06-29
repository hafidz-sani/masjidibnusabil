@extends('layouts.landing')

@push('custom-styles')
<style>
    .title-images {
        /* background-color: transparent; */
        /* background: linear-gradient(to right bottom, #005643 0%, #43b543 25%, #43b543 50%, #005643 100%); */
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../images/class_of_business/money.jpg");
        /* background-image: url(../../../images/bg1.jpg); */
        /* background: linear-gradient(to right bottom, #005643 0%, #43b543 25%, #43b543 50%, #005643 100%); */
        height: 70vh;
        width: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
</style>
@endpush

@section('content')
<div class="title-images w-100 mb-5">
    <div class="title-text">
        <h1 class="div-transition">Galeri - Foto</h1>
    </div>
</div>
<section class="container">
    <div class="row">
        <div class="col-xl-8 col-md-12 col-sm-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/img-1.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/img-1.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/img-1.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


            <div class="row mt-3">
                <div class="col-3 ">
                    <img src="{{ asset('images/img-1.png')}}" class="w-100 p-1" alt="">
                </div>
                <div class="col-3 ">
                    <img src="{{ asset('images/img-1.png')}}" class="w-100 p-1" alt="">
                </div>
                <div class="col-3 ">
                    <img src="{{ asset('images/img-1.png')}}" class="w-100 p-1" alt="">
                </div>
                <div class="col-3 ">
                    <img src="{{ asset('images/img-1.png')}}" class="w-100 p-1" alt="">
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5>IMAGE GALLERY WITH DESCRIPTION</h5>
                </div>
                <div class="my-gallery card-body row gallery-with-description" itemscope="">
                    <figure class="col-xl-4 col-sm-12" itemprop="associatedMedia" itemscope="">
                        <a href="../assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"> <img src="{{ asset('images/img-1.png')}}" class="w-100" alt="">
                            <div class="caption">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                            </div>
                        </a>
                    </figure>
                    <figure class="col-xl-4 col-sm-12" itemprop="associatedMedia" itemscope="">
                        <a href="../assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"> <img src="{{ asset('images/img-1.png')}}" class="w-100" alt="">
                            <div class="caption">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                            </div>
                        </a>
                    </figure>
                    <figure class="col-xl-4 col-sm-12" itemprop="associatedMedia" itemscope="">
                        <a href="../assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"> <img src="{{ asset('images/img-1.png')}}" class="w-100" alt="">
                            <div class="caption">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                            </div>
                        </a>
                    </figure>
                    <figure class="col-xl-4 col-sm-12" itemprop="associatedMedia" itemscope="">
                        <a href="../assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"> <img src="{{ asset('images/img-1.png')}}" class="w-100" alt="">
                            <div class="caption">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                            </div>
                        </a>
                    </figure>
                    <figure class="col-xl-4 col-sm-12" itemprop="associatedMedia" itemscope="">
                        <a href="../assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"> <img src="{{ asset('images/img-1.png')}}" class="w-100" alt="">
                            <div class="caption">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                            </div>
                        </a>
                    </figure>
                    <figure class="col-xl-4 col-sm-12" itemprop="associatedMedia" itemscope="">
                        <a href="../assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"> <img src="{{ asset('images/img-1.png')}}" class="w-100" alt="">
                            <div class="caption">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                            </div>
                        </a>
                    </figure>
                    <figure class="col-xl-4 col-sm-12" itemprop="associatedMedia" itemscope="">
                        <a href="../assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"> <img src="{{ asset('images/img-1.png')}}" class="w-100" alt="">
                            <div class="caption">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                            </div>
                        </a>
                    </figure>
                </div>
            </div>
        </div>


        <div class="col-4 h-100">
            <div class="">
                <p class="fs-5" style="color: #ffb905;">
                    <span style="font-family: 'Arial', sans-serif;" class="text-dark fw-bolder">Follow</span>
                    @MasjidIbnuSabilOfficial
                </p>
                <div style="width: 30%; height: 4px; background-color: #6AEBAD;"></div>
            </div>
            <div class="container">
                <div class="card widget-shalat">
                    <div class="card-header text-center">
                        <h2>Jadwal Sholat Hari Ini</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Sholat</th>
                                    <th scope="col">Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Subuh</td>
                                    <td id="subuh">04:30</td>
                                </tr>
                                <tr>
                                    <td>Dzuhur</td>
                                    <td id="dzuhur">12:00</td>
                                </tr>
                                <tr>
                                    <td>Asar</td>
                                    <td id="asar">15:00</td>
                                </tr>
                                <tr>
                                    <td>Magrib</td>
                                    <td id="magrib">18:00</td>
                                </tr>
                                <tr>
                                    <td>Isya</td>
                                    <td id="isha">19:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection