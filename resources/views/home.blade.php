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

    <!-- STATS -->
    <section class="pt-12 pt-md-13 bg-gray-200">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">

                    <!-- Image -->
                    <img src="{{ asset('assets') }}/img/illustrations/illustration-8.png" alt="..."
                        class="img-fluid mb-6 mb-md-0">

                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1">

                    <!-- Heading -->
                    <h2>
                        Stay focused on your business. <br>
                        <span class="text-primary">Let us handle the design</span>.
                    </h2>

                    <!-- Text -->
                    <p class="fs-lg text-gray-700 mb-6">
                        You have a business to run. Stop worring about cross-browser bugs, designing new pages, keeping
                        your components up to date. Let us do that for you.
                    </p>

                    <!-- Stats -->
                    <div class="d-flex">
                        <div class="pe-5">
                            <h3 class="mb-0">
                                <span data-countup='{"startVal": 0}' data-to="100" data-aos
                                    data-aos-id="countup:in"></span>%
                            </h3>
                            <p class="text-gray-700 mb-0">
                                Satisfaction
                            </p>
                        </div>
                        <div class="border-start border-gray-300"></div>
                        <div class="px-5">
                            <h3 class="mb-0">
                                <span data-countup='{"startVal": 0}' data-to="24" data-aos
                                    data-aos-id="countup:in"></span>/
                                <span data-countup='{"startVal": 0}' data-to="7" data-aos
                                    data-aos-id="countup:in"></span>
                            </h3>
                            <p class="text-gray-700 mb-0">
                                Support
                            </p>
                        </div>
                        <div class="border-start border-gray-300"></div>
                        <div class="ps-5">
                            <h3 class="mb-0">
                                <span data-countup='{"startVal": 0}' data-to="100" data-aos
                                    data-aos-id="countup:in"></span>k+
                            </h3>
                            <p class="text-gray-700 mb-0">
                                Sales
                            </p>
                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- PRICING -->
    <section class="pt-9 pt-md-12 bg-gray-200">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">

                    <!-- Heading -->
                    <h1>
                        Fair, simple pricing for all.
                    </h1>

                    <!-- Text -->
                    <p class="lead text-gray-700">
                        All types of businesses need access to development resources, so we give you the option to
                        decide how much you need to use.
                    </p>

                    <!-- Form -->
                    <form class="d-flex align-items-center justify-content-center mb-7 mb-md-9">

                        <!-- Label -->
                        <span class="text-body-secondary">
                            Annual
                        </span>

                        <!-- Switch -->
                        <div class="form-check form-switch mx-3">
                            <input class="form-check-input" type="checkbox" id="billingSwitch" data-toggle="price"
                                data-target=".price">
                        </div>

                        <!-- Label -->
                        <span class="text-body-secondary">
                            Monthly
                        </span>

                    </form>

                </div>
            </div> <!-- / .row -->
            <div class="row align-items-center gx-0">
                <div class="col-12 col-md-6">

                    <!-- Card -->
                    <div class="card rounded-lg shadow-lg mb-6 mb-md-0" style="z-index: 1;" data-aos="fade-up">

                        <!-- Body -->
                        <div class="card-body py-6 py-md-8">
                            <div class="row justify-content-center">
                                <div class="col-12 col-xl-9">

                                    <!-- Badge -->
                                    <div class="text-center mb-5">
                                        <span class="badge rounded-pill text-bg-primary-subtle">
                                            <span class="h6 fw-bold text-uppercase">Standard</span>
                                        </span>
                                    </div>

                                    <!-- Price -->
                                    <div class="d-flex justify-content-center">
                                        <span class="h2 mb-0 mt-2">$</span>
                                        <span class="price display-2 mb-0" data-annual="29" data-monthly="49">29</span>
                                        <span class="h2 align-self-end mb-1">/mo</span>
                                    </div>

                                    <!-- Text -->
                                    <p class="text-center text-body-secondary mb-6 mb-md-8">
                                        per seat
                                    </p>

                                    <!-- Features -->
                                    <div class="d-flex">

                                        <!-- Check -->
                                        <div class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4">
                                            <i class="fe fe-check"></i>
                                        </div>

                                        <!-- Text -->
                                        <p>
                                            Rich, responsive landing pages
                                        </p>

                                    </div>
                                    <div class="d-flex">

                                        <!-- Check -->
                                        <div class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4">
                                            <i class="fe fe-check"></i>
                                        </div>

                                        <!-- Text -->
                                        <p>
                                            100+ styled components
                                        </p>

                                    </div>
                                    <div class="d-flex">

                                        <!-- Check -->
                                        <div class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4">
                                            <i class="fe fe-check"></i>
                                        </div>

                                        <!-- Text -->
                                        <p>
                                            Flexible, simple license
                                        </p>

                                    </div>
                                    <div class="d-flex">

                                        <!-- Check -->
                                        <div class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4">
                                            <i class="fe fe-check"></i>
                                        </div>

                                        <!-- Text -->
                                        <p>
                                            Speedy build tooling
                                        </p>

                                    </div>
                                    <div class="d-flex">

                                        <!-- Check -->
                                        <div class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4">
                                            <i class="fe fe-check"></i>
                                        </div>

                                        <!-- Text -->
                                        <p class="mb-0">
                                            6 months free support included
                                        </p>

                                    </div>

                                </div>
                            </div> <!-- / .row -->
                        </div>

                        <!-- Button -->
                        <a href="#!" class="card-btn btn w-100 btn-lg btn-primary">
                            Get it now
                        </a>

                    </div>

                </div>
                <div class="col-12 col-md-6 ms-md-n3">

                    <!-- Card -->
                    <div class="card rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">

                        <!-- Body -->
                        <div class="card-body py-6 py-md-8">
                            <div class="row justify-content-center">
                                <div class="col-12 col-xl-10">

                                    <!-- Badge -->
                                    <p class="text-center mb-8 mb-md-11">
                                        <span class="badge rounded-pill text-bg-primary-subtle">
                                            <span class="h6 fw-bold text-uppercase">Enterprise</span>
                                        </span>
                                    </p>

                                    <!-- Text -->
                                    <p class="lead text-center text-body-secondary mb-0 mb-md-10">
                                        We offer variable pricing with discounts for larger organizations. Get in touch
                                        with us and we’ll figure out something that works for everyone.
                                    </p>

                                </div>
                            </div> <!-- / .row -->
                        </div>

                        <!-- Button -->
                        <a href="#!" class="card-btn btn w-100 btn-lg btn-light bg-gray-300 text-gray-700">
                            Contact us
                        </a>

                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- SHAPE -->
    <div class="position-relative mt-n15">
        <div class="shape shape-bottom shape-fluid-x text-dark">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
            </svg>
        </div>
    </div>

    <!-- FAQ -->
    <section class="pt-15 bg-dark">
        <div class="container pt-8 pt-md-11">
            <div class="row">
                <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="d-flex">

                        <!-- Badge -->
                        <div class="badge badge-lg badge-rounded-circle text-bg-success">
                            <span>?</span>
                        </div>

                        <div class="ms-5">

                            <!-- Heading -->
                            <h4 class="text-white">
                                Can I use Landkit for my clients?
                            </h4>

                            <!-- Text -->
                            <p class="text-body-secondary mb-6 mb-md-8">
                                Absolutely. The Bootstrap Themes license allows you to build a website for personal use
                                or for a client.
                            </p>

                        </div>

                    </div>

                    <!-- Item -->
                    <div class="d-flex">

                        <!-- Badge -->
                        <div class="badge badge-lg badge-rounded-circle text-bg-success">
                            <span>?</span>
                        </div>

                        <div class="ms-5">

                            <!-- Heading -->
                            <h4 class="text-white">
                                Do I get free updates?
                            </h4>

                            <!-- Text -->
                            <p class="text-body-secondary mb-6 mb-md-0">
                                Yes. We update all of our themes with each Bootstrap update, plus are constantly adding
                                new components, pages, and features to our themes.
                            </p>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-6">

                    <!-- Item -->
                    <div class="d-flex">

                        <!-- Badge -->
                        <div class="badge badge-lg badge-rounded-circle text-bg-success">
                            <span>?</span>
                        </div>

                        <div class="ms-5">

                            <!-- Heading -->
                            <h4 class="text-white">
                                Is there a money back guarantee?
                            </h4>

                            <!-- Text -->
                            <p class="text-body-secondary mb-6 mb-md-8">
                                Yup! Bootstrap Themes come with a satisfaction guarantee. Submit a return and get your
                                money back.
                            </p>

                        </div>

                    </div>

                    <!-- Item -->
                    <div class="d-flex">

                        <!-- Badge -->
                        <div class="badge badge-lg badge-rounded-circle text-bg-success">
                            <span>?</span>
                        </div>

                        <div class="ms-5">

                            <!-- Heading -->
                            <h4 class="text-white">
                                Does it work with Rails? React? Laravel?
                            </h4>

                            <!-- Text -->
                            <p class="text-body-secondary mb-6 mb-md-0">
                                Yes. Landkit has basic CSS/JS files you can include. If you want to enable deeper
                                customization, you can integrate it into your {{ asset('assets') }} pipeline or build
                                processes.
                            </p>

                        </div>

                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- CTA -->
    <section class="py-8 py-md-11 bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">

                    <!-- Badge -->
                    <span class="badge rounded-pill text-bg-gray-700-subtle mb-4">
                        <span class="h6 fw-bold text-uppercase">Get started</span>
                    </span>

                    <!-- Heading -->
                    <h1 class="display-4 text-white">
                        Get Landkit and save your time.
                    </h1>

                    <!-- Text -->
                    <p class="fs-lg text-body-secondary mb-6 mb-md-8">
                        Stop wasting time trying to do it the "right way" and build a site from scratch. Landkit is
                        faster, easier, and you still have complete control.
                    </p>

                    <!-- Button -->
                    <a href="https://themes.getbootstrap.com/product/landkit/" target="_blank"
                        class="btn btn-success lift">
                        Buy it now <i class="fe fe-arrow-right"></i>
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
