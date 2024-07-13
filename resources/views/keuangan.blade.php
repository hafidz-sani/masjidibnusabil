@extends('layouts.landing')

@push('custom-styles')
<style>
    .title-images {
        /* background-color: transparent; */
        /* background: linear-gradient(to right bottom, #005643 0%, #43b543 25%, #43b543 50%, #005643 100%); */
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("{{ asset('images/keuangan.png')}}");
        /* background-image: url(../../../images/bg1.jpg); */
        /* background: linear-gradient(to right bottom, #005643 0%, #43b543 25%, #43b543 50%, #005643 100%); */
        height: 70vh;
        width: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .table {
        margin-top: 20px;
    }

    .table th,
    .table td {
        text-align: center;
    }

    .table th {
        background-color: #f0f0f0;
    }

    .table td {
        padding: 10px;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }
</style>
@endpush

@section('content')
<div class="title-images w-100 mb-5">
    <div class="title-text">
        <h1 class="div-transition">Keuangan</h1>
    </div>
</div>
<section class="container">
    <div class="row">
        <div class="col-xl-8 col-md-12 col-sm-12">
            <div class="container">
                <h5>Uang Pemasukan</h5>
                <br>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Bulan</th>
                            <th>Minggu</th>
                            <th>Amal Operasional</th>
                            <th>Amal Yatim</th>
                            <th>Amal Dhuafa</th>
                            <th>Amal Jum'at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mei</td>
                            <td>Minggu 4</td>
                            <td>244000</td>
                            <td>456000</td>
                            <td>562000</td>
                            <td>4535000</td>
                        </tr>
                        <tr>
                            <td>Juni</td>
                            <td>Minggu 1</td>
                            <td>340000</td>
                            <td>500000</td>
                            <td>620000</td>
                            <td>4035000</td>
                        </tr>
                        <tr>
                            <td>Juni</td>
                            <td>Minggu 2</td>
                            <td>290000</td>
                            <td>480000</td>
                            <td>610000</td>
                            <td>4530000</td>
                        </tr>
                        <tr>
                            <td>Juni</td>
                            <td>Minggu 3</td>
                            <td>244500</td>
                            <td>430000</td>
                            <td>580000</td>
                            <td>4580000</td>
                        </tr>
                        <tr>
                            <td>Juni</td>
                            <td>Minggu 4</td>
                            <td>270000</td>
                            <td>460000</td>
                            <td>600000</td>
                            <td>4235000</td>
                        </tr>
                    </tbody>
                </table>
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