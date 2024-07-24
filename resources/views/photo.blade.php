@extends('layouts.landing')

@push('custom-styles')
<style>
    .title-images {
        /* background-color: transparent; */
        /* background: linear-gradient(to right bottom, #005643 0%, #43b543 25%, #43b543 50%, #005643 100%); */
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("{{ asset('images/photo.png')}}");
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
                        <img src="{{ asset('images/Lomba ISRC.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Lomba ISRC</h5>
                            <p>Kegiatan Lomba ISRC saat ramadhan 2023</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Lomba ISRC2.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Lomba ISRC</h5>
                            <p>Kegiatan Lomba ISRC saat ramadhan 2023</p>
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
                    <a href="{{ asset('images/DSC00338.jpg')}}" itemprop="contentUrl" data-size="1600x950">
                        <img class="img-thumbnail" src="{{ asset('images/DSC00338.jpg')}}" itemprop="thumbnail" alt="Image description">
                    </a>
                </div>
                <div class="col-3 ">
                    <a href="{{ asset('images/DSC00728.jpg')}}" itemprop="contentUrl" data-size="1600x950">
                        <img class="img-thumbnail" src="{{ asset('images/DSC00728.jpg')}}" itemprop="thumbnail" alt="Image description">
                    </a>
                </div>
                <div class="col-3 ">
                    <a href="{{ asset('images/DSC00723.jpg')}}" itemprop="contentUrl" data-size="1600x950">
                        <img class="img-thumbnail" src="{{ asset('images/DSC00723.jpg')}}" itemprop="thumbnail" alt="Image description">
                    </a>
                </div>
                <div class="col-3 ">
                    <a href="{{ asset('images/DSC00695.jpg')}}" itemprop="contentUrl" data-size="1600x950">
                        <img class="img-thumbnail" src="{{ asset('images/DSC00695.jpg')}}" itemprop="thumbnail" alt="Image description">
                    </a>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5>IMAGE GALLERY</h5>
                </div>
                <div class="gallery my-gallery card-body row" itemscope="">
                    @foreach ($galleries as $gallery)
                    <figure class="col-md-4 mb-4">
                        <a href="{{ $gallery->url }}" data-size="1600x950">
                            <img class="img-fluid rounded" src="{{ $gallery->url }}" alt="Image description">
                        </a>
                    </figure>
                    @endforeach
                </div>
            </div>
        </div>


        <div class="col-4 h-100">
            <div class="">
                <p class="fs-5" style="color: #ffb905;">
                    <span style="font-family: 'Arial', sans-serif;" class="text-dark fw-bolder">Follow</span>
                    @masjidibnusabiljkt
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