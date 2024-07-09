@extends('layouts.landing')

@push('custom-styles')
<style>
    .title-images {
        /* background-color: transparent; */
        /* background: linear-gradient(to right bottom, #005643 0%, #43b543 25%, #43b543 50%, #005643 100%); */
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("{{ asset('images/video.png')}}");
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
        <h1 class="div-transition">Galeri - Video</h1>
    </div>
</div>
<section class="container">
    <div class="row">
        <div class="col-xl-8 col-md-12 col-sm-12">
            <div class="card">
                <div class="gallery my-gallery card-body row" itemscope="">
                    <figure class="col-md-6 mb-6">
                        <a href="{{ asset('images/img-1.png')}}" data-size="1600x950">
                            <img class="img-fluid rounded" src="{{ asset('images/img-1.png')}}" alt="Image description">
                        </a>
                        <figcaption class="text-center">
                            <h6 class="fw-bold mb-1">Judul</h6>
                            <p class="text-secondary small">Posted on <span class="text-muted">Tanggal</span></p>
                        </figcaption>
                    </figure>

                    <figure class="col-md-6 mb-6">
                        <a href="{{ asset('images/img-1.png')}}" data-size="1600x950">
                            <img class="img-fluid rounded" src="{{ asset('images/img-1.png')}}" alt="Image description">
                        </a>
                        <figcaption class="text-center">
                            <h6 class="fw-bold mb-1">Judul</h6>
                            <p class="text-secondary small">Posted on <span class="text-muted">Tanggal</span></p>
                        </figcaption>
                    </figure>
                    <figure class="col-md-6 mb-6">
                        <a href="{{ asset('images/img-1.png')}}" data-size="1600x950">
                            <img class="img-fluid rounded" src="{{ asset('images/img-1.png')}}" alt="Image description">
                        </a>
                        <figcaption class="text-center">
                            <h6 class="fw-bold mb-1">Judul</h6>
                            <p class="text-secondary small">Posted on <span class="text-muted">Tanggal</span></p>
                        </figcaption>
                    </figure>
                    <figure class="col-md-6 mb-6">
                        <a href="{{ asset('images/img-1.png')}}" data-size="1600x950">
                            <img class="img-fluid rounded" src="{{ asset('images/img-1.png')}}" alt="Image description">
                        </a>
                        <figcaption class="text-center">
                            <h6 class="fw-bold mb-1">Judul</h6>
                            <p class="text-secondary small">Posted on <span class="text-muted">Tanggal</span></p>
                        </figcaption>
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