@extends('layouts.landing')

@push('custom-styles')
<style>
    .title-images {
        /* background-color: transparent; */
        /* background: linear-gradient(to right bottom, #005643 0%, #43b543 25%, #43b543 50%, #005643 100%); */
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{ asset('images/profil.png')}}");
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
        <h1 class="div-transition">Home - Profil</h1>
    </div>
</div>
<section class="container">
    <div class="row">
        <div class="col-xl-8 col-md-12 col-sm-12">
            <div class="">
                <img src="{{ asset('images/img-1.png')}}" class="d-block w-100" alt="...">
            </div>
            <br>
            <div class="">
                <p class="fs-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident a quia animi perspiciatis quaerat veniam qui, adipisci ab, ratione explicabo aspernatur doloremque aliquam in nulla quisquam accusantium obcaecati amet officiis. Ex deserunt eos tempore, dolor in est ipsam quis culpa nisi asperiores, eveniet optio quo ipsa exercitationem tempora illum possimus.</p>
                <p class="fs-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, molestias hic iure fuga totam architecto modi dicta repudiandae illum doloribus ipsam sit quidem nobis, exercitationem earum voluptate soluta? Aliquid assumenda at harum molestiae veritatis officia? Nihil dicta possimus nostrum modi blanditiis excepturi impedit praesentium, sint necessitatibus vel obcaecati enim labore nesciunt accusantium, dolorem pariatur quod aliquid. Magni nihil veritatis, neque ut, saepe, itaque earum vitae nisi molestiae nemo deleniti ipsam magnam? Rerum accusantium animi facilis et similique accusamus reprehenderit repellat inventore id architecto? Voluptatibus atque neque eum voluptas, repellat debitis incidunt velit nesciunt modi nostrum quae adipisci tempora numquam sunt.</p>
            </div>
            <div class="row">
                <div class="col-4"><img src="{{ asset('images/logo_ummahat.png')}}" alt="" class="w-100"></div>
                <div class="col-4"><img src="{{ asset('images/logo_masjid.jpg')}}" alt="" class="w-100"></div>
                <div class="col-4"><img src="{{ asset('images/logo_masjid.jpg')}}" alt="" class="w-100"></div>
            </div>
            <div class="">
                <p class="fs-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident a quia animi perspiciatis quaerat veniam qui, adipisci ab, ratione explicabo aspernatur doloremque aliquam in nulla quisquam accusantium obcaecati amet officiis. Ex deserunt eos tempore, dolor in est ipsam quis culpa nisi asperiores, eveniet optio quo ipsa exercitationem tempora illum possimus.</p>
            </div>
            <div class="mt-5">
                <img src="{{ asset('images/struktur_organisasi.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <br>
            <div class="">
                <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos sapiente molestiae sed itaque, eum porro reprehenderit esse consequatur quaerat obcaecati provident neque, animi perspiciatis. Voluptate, quidem velit. Laborum illum commodi rerum dolorum sit eligendi incidunt odit perferendis tenetur nostrum adipisci, quos doloremque, quo provident quaerat deleniti architecto. Ducimus, esse. Voluptatem.</p>
            </div>
            <br>
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