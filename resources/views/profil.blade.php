@extends('layouts.landing')

@push('custom-styles')
<style>
    .title-images {
        /* background-color: transparent; */
        /* background: linear-gradient(to right bottom, #005643 0%, #43b543 25%, #43b543 50%, #005643 100%); */
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("{{ asset('images/profil.png')}}");
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
                <img src="{{ asset('images/masjid_ibnu_sabil.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <br>
            <div class="">
                <p class="fs-6">Masjid Ibnu Sabil terletak di Jalan Pisangan Baru Tengah, sebuah daerah yang dikenal dengan suasana komunitas yang erat di Jakarta Timur. Didirikan pada tahun 1992 oleh warga setempat, masjid ini awalnya hanya berupa sebuah bangunan kecil yang berada di dalam gang Jalan Pisangan Baru Tengah. Seiring berjalannya waktu dan berkat gotong royong serta donasi dari warga dan dermawan, bangunan masjid ini mulai berkembang dan semakin nyaman untuk digunakan dalam berbagai kegiatan ibadah dan sosial.</p>
                <p class="fs-6">Pada tahun 2005, Masjid Ibnu Sabil mengalami renovasi besar-besaran. Untuk mengakomodasi kebutuhan pendidikan dan ibadah, sebuah Taman Kanak-Kanak Islam Terpadu (TKIT) Ibnu Sabil dibangun di lantai pertama, sementara lantai kedua dijadikan area utama masjid. Dengan bantuan arsitek lokal, bangunan ini didesain ulang agar lebih modern. Renovasi ini mencakup perluasan ruang salat, area TK, dan penambahan fasilitas wudu yang lebih baik, serta area parkir untuk kenyamanan para jamaah.</p>
                <p class="fs-6">Selama lebih dari tiga dekade berdiri, Masjid Ibnu Sabil telah menjadi saksi berbagai perubahan sosial di lingkungan Pisangan Baru Tengah. Tidak hanya berfungsi sebagai tempat salat berjamaah, masjid ini juga menjadi pusat kegiatan pendidikan dan sosial. Program-program seperti pengajian rutin, event event Islam, dan kegiatan bakti sosial telah menjadikan Masjid Ibnu Sabil sebagai pilar penting dalam kehidupan komunitas setempat. Dengan sejarah panjangnya, masjid ini terus menjadi simbol persatuan dan kerukunan umat di tengah-tengah keragaman masyarakat Pisangan Baru.</p>
            </div>

            <div class="mt-5">
                <img src="{{ asset('images/struktur_organisasi.jpg')}}" class="d-block w-100" alt="...">
            </div>

            <br>
            <div class="">
                <p class="fs-6">Untuk saat ini, ketua Dewan Kemakmuran Masjid (DKM) Ibnu Sabil dipimpin oleh Mei Ratno Putra yang memiliki penasihat Ustadz Abdul Qodir, Munir M, H. Nurman, H. Amril, dan H. Einil. Di bawah kepemimpinan Mei Ratno Putra, DKM Ibnu Sabil terus berupaya meningkatkan kualitas layanan dan kegiatan masjid untuk para jamaah.</p>
                <p class="fs-6">DKM Ibnu Sabil juga memiliki berbagai divisi lain yang masing-masing bertanggung jawab atas beragam aspek operasional dan program masjid. Divisi-divisi ini termasuk Divisi Dakwah yang mengelola kegiatan pengajian, Divisi Humas yang mengkoordinasikan program-program bakti sosial dan bantuan kepada warga yang membutuhkan, serta Divisi Imam yang selalu standby saat shalat ingin dilaksanakan.</p>
            </div>
            <br>

            <div class="row">
                <div class="col-4"><img src="{{ asset('images/logo_ummahat.png')}}" alt="" class="w-100"></div>
                <div class="col-4"><img src="{{ asset('images/logo_masjid.jpg')}}" alt="" class="w-100"></div>
                <div class="col-4"><img src="{{ asset('images/IRMIS.png')}}" alt="" style="width:80%"></div>
            </div>
            <br>
            <div class=" mb-3">
                <p class="fs-6">Lalu ada juga kalangan kelompok yang mendukung kegiatan Masjid Ibnu Sabil yaitu Dewan Kemakmuran Masjid (DKM) Ibnu Sabil, yang mengoordinasikan seluruh pergerakan masjid, IRMIS yang merupakan komunitas pemuda Ibnu Sabil dan Ummahat Ibnu Sabil, yang terdiri dari kalangan wanita.</p>
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