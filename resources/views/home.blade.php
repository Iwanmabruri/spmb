@extends('welcome')
@section('konten')
    <!-- WELCOME -->
    <section class="pt-4 pt-md-11">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">

                    <!-- Image -->
                    <img src="{{ asset('assets') }}/img/illustrations/imgBG1.png"
                        class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="..." data-aos="fade-up"
                        data-aos-delay="100">

                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">

                    <!-- Heading -->
                    <h1 class="display-3 text-center text-md-start">
                        Welcome to <span class="text-primary">SPMB</span>. <br>
                        SMK NAA 2026.
                    </h1>

                    <!-- Text -->
                    <p class="lead text-center text-md-start text-body-secondary mb-6 mb-lg-8">
                        Website ini merupakan layanan digital untuk menyediakan informasi resmi terkait pendaftaran peserta
                        didik baru, meliputi persyaratan, jadwal, dan alur pendaftaran.
                    </p>

                    <!-- Buttons -->
                    <div class="text-center text-md-start">
                        <a href="overview.html" class="btn btn-success shadow lift me-1">
                            Login Admin <i class="fe fe-arrow-right d-none d-md-inline ms-3"></i>
                        </a>
                        <a href="docs/index.html" class="btn btn-success-subtle lift">
                            Download Brosur
                        </a>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


    <!-- BRANDS -->
    <section class="py-6 py-md-8 border-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                    <!-- Brand -->
                    <div class="img-fluid text-gray-600 mb-2 mb-md-0">
                        <img src="{{ asset('assets') }}/img/hastag.png" alt="">
                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                    <!-- Brand -->
                    <div class="img-fluid text-gray-600 mb-2 mb-md-0">
                        <img src="{{ asset('assets') }}/img/kemendikdasmen.png" alt="">
                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                    <!-- Brand -->
                    <div class="img-fluid text-gray-600 mb-2 mb-md-0">
                        <img src="{{ asset('assets') }}/img/bromo.png" alt="">
                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                    <!-- Brand -->
                    <div class="img-fluid text-gray-600 mb-2 mb-md-0">
                        <img src="{{ asset('assets') }}/img/humma.png" alt="">
                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                    <!-- Brand -->
                    <div class="img-fluid text-gray-600 mb-2 mb-md-0">
                        <img src="{{ asset('assets') }}/img/bsi.png" alt="">
                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                    <!-- Brand -->
                    <div class="img-fluid text-gray-600 mb-2 mb-md-0">
                        <img src="{{ asset('assets') }}/img/LK.png" alt="">
                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


    <!-- ABOUT -->
    <section class="pt-5 pt-md-7">
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
                        <span data-countup='{"startVal": 0}' data-to="97" data-aos data-aos-id="countup:in">0</span>
                    </h1>

                    <!-- Text -->
                    <p class="text-body-secondary mb-6 mb-md-0">
                        Total Data Lulusan
                    </p>

                </div>
                <div class="col-12 col-md-4 text-center">

                    <!-- Heading -->
                    <h1 class="display-2 fw-bold text-success">
                        <span data-countup='{"startVal": 0}' data-to="97" data-aos data-aos-id="countup:in">0</span>
                    </h1>

                    <!-- Text -->
                    <p class="text-body-secondary mb-6 mb-md-0">
                        Data Lulusan Yang Sudah Bekerja
                    </p>

                </div>
                <div class="col-12 col-md-4 text-center">

                    <!-- Heading -->
                    <h1 class="display-2 fw-bold text-success">
                        <span data-countup='{"startVal": 0}' data-to="97" data-aos data-aos-id="countup:in">0</span>
                    </h1>

                    <!-- Text -->
                    <p class="text-body-secondary mb-0">
                        Data Lulusan Yang Belum Bekerja
                    </p>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- ARTICLES -->
    <section class="pb-8 pt-4 pb-md-11 pt-md-10">
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
                            <img src="assets/img/photos/photo1.JPG" alt="..." class="card-img-top">
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
                                Rekayasa Perangkat Lunak
                            </h3>

                            <!-- Text -->
                            <p class="mb-0 text-body-secondary">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo quaerat, repellat cumque ut
                                ipsum amet quisquam accusamus hic fugit quasi itaque numquam ex quos vero! Odit repellat
                                libero necessitatibus veniam.
                            </p>

                        </a>
                    </div>
                </div> <!-- / .row -->

                <div class="col-12 col-md-6 d-flex">
                    <!-- Card -->
                    <div class="card mb-6 mb-lg-0 shadow-light-lg">

                        <!-- Image -->
                        <a class="card-img-top" href="#!">
                            <img src="assets/img/photos/photo2.png" alt="..." class="card-img-top">
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
                                Akuntansi Keuangan
                            </h3>

                            <!-- Text -->
                            <p class="mb-0 text-body-secondary">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolores, eius placeat animi
                                perferendis consequatur cupiditate, illo autem officiis optio enim tenetur laborum aliquam
                                ipsam incidunt. Assumenda facere ea est!
                            </p>

                        </a>
                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
    </section>

    <!-- CTA -->
    <section class="py-8 py-md-11 bg-dark">
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
                    <a href="https://themes.getbootstrap.com/product/landkit/" target="_blank"
                        class="btn btn-success lift">
                        Download Brosur <i class="fe fe-arrow-right"></i>
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
@endsection
