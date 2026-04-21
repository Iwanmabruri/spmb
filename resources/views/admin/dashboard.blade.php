@extends('template')
@section('title')
    Dashboard | SPMB
@endsection
@section('konten')
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-5">
                    <h1 class="mb-3 h2">Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="row mb-6 g-6">
            <div class="col-xl-12 col-lg-8">
                <div class="bg-gradient-mixed p-8 py-10 rounded-3 p-lg-7">
                    <!--heading-->
                    <h1 class="fs-3">👋 Hello Admin,</h1>
                    <p class="mb-0">Sistem Informasi Penerimaan Murid Baru (SPMB).</p>
                    <p>Dashboard administrasi untuk pengelolaan data, pengarsipan berkas, dan analisis grafik pendaftaran.
                    </p>
                    {{-- <a href="#!" class="btn btn-dark">Start AI</a> --}}
                    <div class="btn btn-dark d-inline-flex align-items-center"
                        style="cursor: default; pointer-events: none;">
                        <i class="bi bi-clock me-2"></i> <span id="clock" class="fw-bold"></span>
                        <span class="mx-2">|</span>
                        <span id="date"></span>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-4 col-lg-6">
                <!-- card -->
                <div class="card card-lg">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="mb-4 position-relative py-2">
                            <div>
                                <h5 class="mb-1">Ideas for You</h5>
                            </div>
                            <!-- swiper navigation-->
                            <div class="swiper-navigation position-absolute top-50 end-10 me-4 me-lg-8 me-xl-4">
                                <div class="swiper-button-prev ms-n3"></div>
                                <div class="swiper-button-next ms-6"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- swiper -->
                                <div class="swiper-container swiper" id="swiper-1" data-pagination-type="" data-speed="900"
                                    data-space-between="100" data-pagination="false" data-navigation="true"
                                    data-autoplay="false" data-autoplay-delay="2000"
                                    data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 1}, "1200": {"slidesPerView": 1}}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div>
                                                <h4>Create a Blog Post for your product</h4>

                                                <div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem</p>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="#!" class="btn btn-white btn-sm">Read Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div>
                                                <h4>Create a Blog Post for your product</h4>

                                                <div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem</p>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="#!" class="btn btn-white btn-sm">Read Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div>
                                                <h4>Create a Blog Post for your product</h4>

                                                <div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem</p>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="#!" class="btn btn-white btn-sm">Read Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add more slides as needed -->
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- Add Navigation -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="row row-cols-1 row-cols-xl-3 row-cols-md-3 mb-6 g-6">
            <div class="col">
                <!-- card -->
                <div class="card card-lg">
                    <!-- card body -->
                    <div class="card-body d-flex flex-column gap-8">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-shape icon-lg rounded-circle bg-warning-darker text-warning-lighter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M17 17h-11v-14h-2" />
                                    <path d="M6 5l14 1l-1 7h-13" />
                                </svg>
                            </div>
                            <div>Total Pendaftar</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center lh-1">
                            <div class="fs-3 fw-bold">200</div>
                            <div class="text-success small">
                                <span>2.29%</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trending-up">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 17l6 -6l4 4l8 -8" />
                                        <path d="M14 7l7 0l0 7" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <!-- card -->
                <div class="card card-lg">
                    <!-- card body -->
                    <div class="card-body d-flex flex-column gap-8">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-shape icon-lg rounded-circle bg-success-darker text-success-lighter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-coin">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path
                                        d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                                    <path d="M12 7v10" />
                                </svg>
                            </div>
                            <div>Pendaftar Jurusan PPLG</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center lh-1">
                            <div class="fs-3 fw-bold">100</div>
                            <div class="text-warning small">
                                <span>2.19%</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trending-up">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 17l6 -6l4 4l8 -8" />
                                        <path d="M14 7l7 0l0 7" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <!-- card -->
                <div class="card card-lg">
                    <!-- card body -->
                    <div class="card-body d-flex flex-column gap-8">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-shape icon-lg rounded-circle bg-info-darker text-info-lighter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                </svg>
                            </div>
                            <div>Pendaftar Jurusan AKL</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center lh-1">
                            <div class="fs-3 fw-bold">100</div>
                            <div class="text-danger small">
                                <span>3.19%</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trending-down">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 7l6 6l4 -4l8 8" />
                                        <path d="M21 10l0 7l-7 0" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateDateTime() {
            const now = new Date();

            // Pengaturan Waktu (Jam:Menit:Detik)
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const timeString = `${hours}:${minutes}:${seconds}`;

            // Pengaturan Tanggal Indonesia (Contoh: Selasa, 21 April 2026)
            const dateOptions = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            const dateString = now.toLocaleDateString('id-ID', dateOptions);

            // Masukkan ke elemen HTML
            document.getElementById('clock').textContent = timeString;
            document.getElementById('date').textContent = dateString;
        }

        // Update setiap 1 detik
        setInterval(updateDateTime, 1000);

        // Jalankan pertama kali saat halaman dibuka
        updateDateTime();
    </script>
@endsection
