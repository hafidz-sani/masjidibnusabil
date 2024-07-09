@extends('layouts.landing')

@push('custom-styles')
<style>
    .title-images {
        /* background-color: transparent; */
        /* background: linear-gradient(to right bottom, #005643 0%, #43b543 25%, #43b543 50%, #005643 100%); */
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{ asset('images/agenda.png')}}");
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
        <h1 class="div-transition">Home - Agenda</h1>
    </div>
</div>
<section class="container">
    <div class="row">
        <div class="col-xl-8 col-md-12 col-sm-12">
            <div class="card">
                <div class="row p-2 mb-3">
                    <div class="col-5">
                        <img src="{{ asset('images/poster1.png')}}" class="w-100" alt="">
                    </div>
                    <div class="col-7">
                        <h3 class="mb-2">Lorem ipsum dolor sit.</h3>
                        <p class="fs-6 text-secondary mb-2" style="font-family: Arial, Helvetica, sans-serif;">
                            <i class="fa fa-clock-o"></i>
                            08 Oct 2023 13:30 WIB - 06 Oct 2023 17:00 WIB
                        </p>
                        <p class="fs-6 text-secondary mb-3" style="font-family: Arial, Helvetica, sans-serif;">
                            <i class="fa fa-map-marker"></i>
                            Selasa Masjid Istiqlal
                        </p>
                        <h6 class="mb-3">Lorem ipsum dolor sit.</h6>
                        <p class="fs-6 text-secondary mb-3" style="font-family: Arial, Helvetica, sans-serif;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa officiis voluptatum voluptatibus debitis qui animi nemo temporibus expedita iusto, nisi aperiam esse veritatis facilis corrupti laborum, vero voluptas amet sapiente eveniet ea iure nobis! Corporis distinctio deserunt eius aspernatur pariatur.
                        </p>
                    </div>
                </div>

                <div class="row p-2 mb-3">
                    <div class="col-5">
                        <img src="{{ asset('images/poster2.png')}}" class="w-100" alt="">
                    </div>
                    <div class="col-7">
                        <h3 class="mb-2">Lorem ipsum dolor sit.</h3>
                        <p class="fs-6 text-secondary mb-2" style="font-family: Arial, Helvetica, sans-serif;">
                            <i class="fa fa-clock-o"></i>
                            08 Oct 2023 13:30 WIB - 06 Oct 2023 17:00 WIB
                        </p>
                        <p class="fs-6 text-secondary mb-3" style="font-family: Arial, Helvetica, sans-serif;">
                            <i class="fa fa-map-marker"></i>
                            Selasa Masjid Istiqlal
                        </p>
                        <h6 class="mb-3">Lorem ipsum dolor sit.</h6>
                        <p class="fs-6 text-secondary mb-3" style="font-family: Arial, Helvetica, sans-serif;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa officiis voluptatum voluptatibus debitis qui animi nemo temporibus expedita iusto, nisi aperiam esse veritatis facilis corrupti laborum, vero voluptas amet sapiente eveniet ea iure nobis! Corporis distinctio deserunt eius aspernatur pariatur.
                        </p>
                    </div>
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