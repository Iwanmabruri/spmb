@extends('welcome')
@section('CSSManual')
    <style>
        .swiper-slide {
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-backdrop.show {
            opacity: 0.8;
        }
    </style>
@endsection
@section('konten')
    <!-- WELCOME -->
    <section class="pt-4 pt-md-8" id="home">
        @php
            $hero = \App\Models\Banner::orderBy('id', 'desc')->first();
        @endphp
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">

                    <!-- Image -->
                    @php
                        $hero = \App\Models\Banner::orderBy('id', 'desc')->first();
                    @endphp

                    <img src="{{ $hero && $hero->gambar
                        ? asset('upload/banner/' . $hero->gambar)
                        : asset('assets/img/illustrations/imgBG1.png') }}"
                        class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="Banner" data-aos="fade-up"
                        data-aos-delay="100"
                        onerror="this.onerror=null;this.src='{{ asset('assets/img/illustrations/imgBG1.png') }}';">

                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">

                    <!-- Heading -->
                    <h1 class="display-3 text-center text-md-start">
                        Welcome to <span class="text-success">SPMB</span>. <br>
                        SMK NAA 2026.
                        {{-- {!! $hero->judul !!} --}}
                    </h1>

                    <!-- Text -->
                    <p class="lead text-center text-md-start text-body-secondary mb-6 mb-lg-8">
                        {!! $hero->deskripsi ??
                            'Website ini merupakan layanan digital untuk menyediakan informasi resmi terkait pendaftaran peserta didik baru.' !!}
                    </p>

                    <!-- Buttons -->
                    <div class="text-center text-md-start">
                        {{-- <a href="{{ url('/admin') }}" class="btn btn-success shadow lift me-1">
                            Login Admin <i class="fe fe-arrow-right d-none d-md-inline ms-3"></i>
                        </a> --}}
                        {{-- <a href="docs/index.html" class="btn btn-success-subtle lift">
                            Download Brosur
                        </a> --}}
                        <button class="btn btn-success shadow lift me-1" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Lihat Brosur
                            <i class="fe fe-eye d-none d-md-inline ms-2"></i>
                        </button>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


    <!-- BRANDS -->
    <section class="py-6 py-md-8 border-bottom">
        {{-- <div class="container overflow hidden"> --}}
        <div class="container px-4 py-3">

            <div class="swiper mitraSwiper">

                <div class="swiper-wrapper">

                    @forelse ($mitra as $m)
                        <div class="swiper-slide text-center">

                            <div class="bg-white rounded-3 shadow-sm d-flex align-items-center justify-content-center mx-auto"
                                style="
                            height: 80px;
                            padding: 10px;
                        ">

                                @php
                                    $imgPath = public_path('upload/mitra/' . $m->image);
                                @endphp

                                <img src="{{ file_exists($imgPath) ? asset('upload/mitra/' . $m->image) : asset('assets/img/hastag.png') }}"
                                    style="max-height:50px;max-width:100%;object-fit:contain;">

                            </div>

                        </div>

                    @empty

                        @php
                            $defaultLogo = [
                                'hastag.png',
                                'kemendikdasmen.png',
                                'bromo.png',
                                'humma.png',
                                'bsi.png',
                                'LK.png',
                            ];
                        @endphp

                        @foreach ($defaultLogo as $logo)
                            <div class="swiper-slide text-center">

                                <div class="bg-white rounded-3 shadow-sm d-flex align-items-center justify-content-center mx-auto"
                                    style="
                                height: 80px;
                                padding: 10px;
                            ">

                                    <img src="{{ asset('assets/img/' . $logo) }}"
                                        style="
                                    max-height: 50px;
                                    max-width: 100%;
                                    object-fit: contain;
                                ">

                                </div>

                            </div>
                        @endforeach
                    @endforelse

                </div>

            </div>

        </div>
        {{-- </div> --}}
    </section>


    <!-- ABOUT -->
    <section class="pt-5 pt-md-7" id="profil">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-md-6">

                    <!-- Heading -->
                    <h2 class="fw-bold">
                        Profil Singkat SMKNAA
                    </h2>

                    <!-- Text -->
                    <p class="fs-lg text-body-secondary mb-5">
                        SMK Nurul Abror Al Robbaniyin merupakan lembaga pendidikan kejuruan di bawah naungan Yayasan Nurul
                        Abror Al Robbaniyin yang berdiri sejak tahun 2012. Setelah tiga tahun berjalan, sekolah menetapkan
                        dua kompetensi keahlian, yaitu Rekayasa Perangkat Lunak (RPL) dan Akuntansi dan Keuangan Lembaga
                        (AKL), serta terus berkomitmen meningkatkan mutu pembelajaran hingga berhasil meluluskan 10 angkatan
                        dengan lulusan yang banyak terserap di dunia kerja sesuai bidang keahliannya.
                    </p>

                    <!-- Button -->
                    <a href="https://smknaa.sch.id/" class="btn btn-success mb-6 mb-md-0 lift" target="blank">
                        Selengkapnya <i class="fe fe-arrow-right ms-3"></i>
                    </a>

                </div>
                <div class="col-12 col-md-6 order-md-1">
                    <!-- Image -->
                    <img src="{{ asset('assets') }}/img/illustrations/gedung.png"
                        class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 rounded-4" alt="..." data-aos="fade-up"
                        data-aos-delay="100">
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- Hitung -->
    <section class="py-8 pt-md-11 pb-md-12">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 text-center">

                    <!-- Heading -->
                    <h1 class="display-2 fw-bold text-success">
                        <span data-countup='{"startVal": 0}' data-to="{{ $totalPendaftar }}" data-aos
                            data-aos-id="countup:in">
                            {{ $totalPendaftar }}
                        </span>
                    </h1>

                    <!-- Text -->
                    <p class="text-body-secondary mb-6 mb-md-0">
                        Total Data Pendaftar
                    </p>

                </div>

                <div class="col-12 col-md-4 text-center">

                    <!-- Heading -->
                    <h1 class="display-2 fw-bold text-success">
                        <span data-countup='{"startVal": 0}' data-to="{{ $rpl }}" data-aos
                            data-aos-id="countup:in">
                            {{ $rpl }}
                        </span>
                    </h1>

                    <!-- Text -->
                    <p class="text-body-secondary mb-6 mb-md-0">
                        Pendaftar Jurusan RPL
                    </p>

                </div>

                <div class="col-12 col-md-4 text-center">

                    <!-- Heading -->
                    <h1 class="display-2 fw-bold text-success">
                        <span data-countup='{"startVal": 0}' data-to="{{ $akl }}" data-aos
                            data-aos-id="countup:in">
                            {{ $akl }}
                        </span>
                    </h1>

                    <!-- Text -->
                    <p class="text-body-secondary mb-0">
                        Pendaftar Jurusan AKL
                    </p>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- ARTICLES -->
    <section class="pb-8 pb-md-11" id="jurusan">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Heading -->
                    <h2 class="mb-0">
                        PROGRAM KEAHLIAN
                    </h2>

                    <!-- Text -->
                    <p class="mb-5 text-body-secondary">
                        SMK Nurul Abror Al-Robbaniyin
                    </p>

                </div>
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-12 col-md-6 d-flex">
                    <!-- Card -->
                    <div class="card mb-6 mb-lg-0 shadow-light-lg">

                        <!-- Image -->
                        <a class="card-img-top" href="#!">
                            <img src="assets/img/photos/pplgok.png" alt="..." class="card-img-top">
                        </a>

                        <!-- Shape -->
                        <div class="position-relative">
                            <div class="shape shape-fluid-x shape-bottom text-white">
                                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
                                </svg>
                            </div>
                        </div>

                        <!-- Body -->
                        <a class="card-body" href="#!">

                            <!-- Heading -->
                            <h3>
                                Pengembangan Perangkat Lunak & Gim
                            </h3>

                            <!-- Text -->
                            <p class="mb-0 text-body-secondary">
                                Belajar coding, pembuatan website, aplikasi, desain digital, dan teknologi modern untuk
                                mencetak Generasi Unggul Berakhlak Mulia yang kreatif, inovatif, profesional, dan siap
                                bersaing di dunia kerja maupun industri digital.
                            </p>

                        </a>
                    </div>
                </div> <!-- / .row -->

                <div class="col-12 col-md-6 d-flex">
                    <!-- Card -->
                    <div class="card mb-6 mb-lg-0 shadow-light-lg">

                        <!-- Image -->
                        <a class="card-img-top" href="#!">
                            <img src="assets/img/photos/akl.png" alt="..." class="card-img-top">
                        </a>

                        <!-- Shape -->
                        <div class="position-relative">
                            <div class="shape shape-fluid-x shape-bottom text-white">
                                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
                                </svg>
                            </div>
                        </div>

                        <!-- Body -->
                        <a class="card-body" href="#!">

                            <!-- Heading -->
                            <h3>
                                Akuntansi Keuangan Lembaga
                            </h3>

                            <!-- Text -->
                            <p class="mb-0 text-body-secondary">
                                Belajar akuntansi, administrasi bisnis, perpajakan, dan pengelolaan laporan keuangan untuk
                                membentuk Generasi Unggul Berakhlak Mulia yang teliti, profesional, mandiri, dan siap kerja
                                maupun berwirausaha.
                            </p>

                        </a>
                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
    </section>

    <!-- CTA -->
    <section class="py-8 py-md-11 bg-dark" id="syarat">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">

                    <!-- Heading -->
                    <h1 class="display-4 text-white">
                        Syarat Dan Alur Pendaftaran
                    </h1>

                    <!-- Text -->
                    <p class="fs-lg text-body-secondary mb-6 mb-md-8">
                        Untuk mengetahui syarat dan alur pendaftaran, silakan mengunduh brosur melalui tombol Download
                        Brosur di bawah ini. Pendaftaran dilakukan langsung melalui panitia dan tidak dapat dilakukan secara
                        mandiri. Calon pendaftar diharapkan mengikuti ketentuan yang telah ditetapkan oleh panitia.
                    </p>

                    <!-- Button -->
                    <a href="{{ asset('brosur.png') }}" download="" class="btn btn-success lift">
                        Download Brosur <i class="fe fe-download d-none d-md-inline ms-3"></i>
                    </a>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- SHAPE -->
    <div class="position-relative">
        <div class="shape shape-bottom shape-fluid-x text-gray-200">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
            </svg>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content border-0 bg-transparent">

                <div class="modal-header border-0 position-absolute end-0 z-3">
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body p-0 text-center">
                    <img src="{{ asset('brosur.png') }}" class="img-fluid rounded shadow"
                        style="max-height: 90vh; width: auto; object-fit: contain;" alt="Brosur">
                </div>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        new Swiper(".mitraSwiper", {
            loop: true,
            speed: 3000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            slidesPerView: 3,
            spaceBetween: 15,

            breakpoints: {
                576: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 4,
                },
                992: {
                    slidesPerView: 6,
                }
            }
        });
    </script>
@endpush
