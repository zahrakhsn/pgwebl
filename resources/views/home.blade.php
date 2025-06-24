@extends('layout.tamplate')

@section('content')
    {{-- Style untuk menghilangkan overflow di body --}}
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: auto;
            /* auto agar bisa di-scroll */
        }
    </style>

    {{-- Hero Section --}}
<div class="position-relative" style="height: 100vh; overflow: hidden;">

    {{-- Carousel full-screen --}}
    <div id="heroCarousel" class="carousel slide h-100" data-bs-ride="carousel">
        <div class="carousel-inner h-100">

            {{-- Slide 1 --}}
            <div class="carousel-item active h-100 position-relative">
                <img src="{{ asset('storage/images/TanjungBira.jpg') }}" class="w-100 h-100" style="object-fit: cover; filter: brightness(0.7);">

                {{-- Konten hero di tengah --}}
                <div class="position-absolute top-50 start-50 translate-middle text-white text-center" style="z-index:2; text-shadow: 0 2px 4px rgba(0,0,0,0.7);">
                    <img src="{{ asset('storage/images/Maijo.png') }}" class="mb-3 rounded-circle border border-white" style="width:100px; height:100px; object-fit: cover;" alt="Maijo Logo">
                    <h1 class="display-3 fw-bold">MAIJO</h1>
                    <h2 class="fs-4 fw-bold">Makassar Infinite Journeys</h2>
                    <h2 class="fs-4 fw-bold">(Petualangan Tanpa Batas ke Alam, Kuliner, dan Budaya)</h2>
                    <p class="lead mb-4">Selamat datang di MAIJO (Makassar Infinite Journeys). Temukan destinasi menarik dan tambahkan wisata baru agar lebih dikenal banyak orang.</p>
                </div>

            </div>

            {{-- Slide 2 --}}
            <div class="carousel-item h-100 position-relative">
                <img src="{{ asset('storage/images/Wisataa.jpg') }}" class="w-100 h-100" style="object-fit: cover; filter: brightness(0.7);">
                <div class="position-absolute top-50 start-50 translate-middle text-white text-center" style="z-index:2; text-shadow: 0 2px 4px rgba(0,0,0,0.7);">
                    <img src="{{ asset('storage/images/Maijo.png') }}" class="mb-3 rounded-circle border border-white" style="width:100px; height:100px; object-fit: cover;" alt="Maijo Logo">
                    <h1 class="display-3 fw-bold">Jelajahi Wisata Alam Makassar</h1>
                    <p class="lead mb-5">Temukan pesona keindahan Makassar yang memukau, mulai dari hamparan pantai berpasir putih hingga perbukitan hijau yang menenangkan. Rasakan deburan ombak di Pantai, nikmati matahari terbenam, hingga menjelajah kawasan pegunungan yang sejuk dan asri.</p>
                </div>
                <div class="carousel-caption bg-dark bg-opacity-50 p-2 rounded mb-3">
                    <h6 class="m-0">Wisata Alam</h6>
                </div>
            </div>

            {{-- Slide 3 --}}
            <div class="carousel-item h-100 position-relative">
                <img src="{{ asset('storage/images/Budayaa.jpg') }}" class="w-100 h-100" style="object-fit: cover; filter: brightness(0.7);">
                <div class="position-absolute top-50 start-50 translate-middle text-white text-center" style="z-index:2; text-shadow: 0 2px 4px rgba(0,0,0,0.7);">
                    <img src="{{ asset('storage/images/Maijo.png') }}" class="mb-3 rounded-circle border border-white" style="width:100px; height:100px; object-fit: cover;" alt="Maijo Logo">
                    <h1 class="display-3 fw-bold">Jelajahi sejarah dan tradisi Makassar</h1>
                    <p class="lead mb-4">Kota maritim yang kaya akan cerita dan budaya. Temukan hangatnya keramahan masyarakat Makassar, nikmati keunikan seni dan adat istiadat, serta telusuri jejak sejarahnya yang melegenda, dari bangunan bersejarah hingga perayaan tradisi turun-temurun.</p>
                </div>
                <div class="carousel-caption bg-dark bg-opacity-50 p-2 rounded mb-3">
                    <h6 class="m-0">Budaya</h6>
                </div>
            </div>

            {{-- Slide 4 --}}
            <div class="carousel-item h-100 position-relative">
                <img src="{{ asset('storage/images/Kulinerr.jpg') }}" class="w-100 h-100" style="object-fit: cover; filter: brightness(0.7);">
                <div class="position-absolute top-50 start-50 translate-middle text-white text-center" style="z-index:2; text-shadow: 0 2px 4px rgba(0,0,0,0.7);">
                    <img src="{{ asset('storage/images/Maijo.png') }}" class="mb-3 rounded-circle border border-white" style="width:100px; height:100px; object-fit: cover;" alt="Maijo Logo">
                    <h1 class="display-3 fw-bold">Jelajahi Kuliner Khas Makassar</h1>

                    <p class="lead mb-4">Temukan Kuliner Khas Makassar dan kelezatan autentik dari kota anging mammiri yang setiap suapan membawa lebih dekat dengan kekayaan budaya dan tradisi kuliner Sulawesi Selatan, yang berkesan, memanjakan lidah, dan hati.</p>

                </div>
                <div class="carousel-caption bg-dark bg-opacity-50 p-2 rounded mb-3">
                    <h6 class="m-0">Kuliner</h6>
                </div>
            </div>

        </div>

        {{-- Kontrol carousel --}}
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</div>


   {{-- Feature Section di luar hero --}}
<section class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center mb-4">Fitur Unggulan</h2>
        <div class="row g-4 justify-content-center text-center">

            {{-- Feature 1 --}}
            <div class="col-md-3 col-sm-6">
                <div class="p-2 text-center">
                    <div class="rounded-circle bg-danger d-flex align-items-center justify-content-center mb-3 mx-auto"
                        style="width:80px; height:80px;">
                        <i class="fa-solid fa-map-location-dot text-white fa-2x"></i>
                    </div>
                    <h5>Fasilitas Lengkap</h5>
                    <p class="small text-muted">
                        Fitur lengkap agar mudah menambahkan lokasi wisata baru, menambahkan gambar, deskripsi, dan koordinat langsung di dalam peta.
                    </p>
                </div>
            </div>

            {{-- Feature 2 --}}
            <div class="col-md-3 col-sm-6">
                <div class="p-2 text-center">
                    <div class="rounded-circle bg-danger d-flex align-items-center justify-content-center mb-3 mx-auto"
                        style="width:80px; height:80px;">
                        <i class="fa-solid fa-users text-white fa-2x"></i>
                    </div>
                    <h5>Mudah Digunakan</h5>
                    <p class="small text-muted">
                        Mudah digunakan untuk semua, hanya perlu masuk ke akun, dan dapat langsung menambahkan data lokasi wisata.
                    </p>
                </div>
            </div>

            {{-- Feature 3 --}}
            <div class="col-md-3 col-sm-6">
                <div class="p-2 text-center">
                    <div class="rounded-circle bg-danger d-flex align-items-center justify-content-center mb-3 mx-auto"
                        style="width:80px; height:80px;">
                        <i class="fa-solid fa-location-crosshairs text-white fa-2x"></i>
                    </div>
                    <h5>Titik Wisata</h5>
                    <p class="small text-muted"> Fitur penambahan titik wisata dan promosi destinasi secara gratis</p>
                </div>
            </div>

            {{-- Feature 4 --}}
            <div class="col-md-3 col-sm-6">
                <div class="p-2 text-center">
                    <div class="rounded-circle bg-danger d-flex align-items-center justify-content-center mb-3 mx-auto"
                        style="width:80px; height:80px;">
                        <i class="fa-solid fa-mountain-sun text-white fa-2x"></i>
                    </div>
                    <h5>Obyek Wisata Favorit dan Terbaru</h5>
                    <p class="small text-muted"> Fitur menambahkan titik wisata baru agar lebih dikenal dan dikunjungi banyak orang.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="py-5 border-top mt-5 text-white" style="background-color: #6a6f70;">
    <div class="container text-center">
        {{-- Foto --}}
        <a href="https://www.instagram.com/makassar_iinfo?igsh=bXR1NXZzYzdoY3I4" target="_blank" title="Kunjungi Instagram">
    <img src="{{ asset('storage/images/Makassar.png') }}" alt="Pembuat"
         class="rounded-circle border border-white shadow-lg"
         style="width:100px; height:100px; object-fit:cover; position:fixed; bottom:1rem; left:1rem; z-index:999;">
</a>
        {{-- Deskripsi singkat --}}
        <p class="opacity-75 mb-3">
            Dibuat oleh Zahra Khusnul
        </p>

        {{-- Kontak --}}
        <div class="d-flex justify-content-center gap-4">
            <a href="https://www.instagram.com/zahraakhsn?igsh=MTRmaTJuNWRnbmN5eA==" target="_blank" class="text-white text-decoration-none">
                <i class="fa-brands fa-instagram fa-2x"></i>
                <div style="font-size:0.9rem;">Instagram</div>
            </a>
            <a href="mailto:zahrak@gmail.com" target="_blank" class="text-white text-decoration-none">
                <i class="fa-solid fa-envelope fa-2x"></i>
                <div style="font-size:0.9rem;">Email</div>
            </a>
        </div>
    </div>
</footer>
@endsection
