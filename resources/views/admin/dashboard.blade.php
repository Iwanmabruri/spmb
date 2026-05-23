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
        {{-- =========================
            CARD STATISTIK DASHBOARD
        ========================= --}}

        @php
            $colors = ['success', 'info', 'primary', 'danger', 'warning'];

            $icons = ['ti ti-code', 'ti ti-calculator', 'ti ti-building', 'ti ti-palette', 'ti ti-settings'];
        @endphp

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 mb-5">

            {{-- TOTAL PENDAFTAR --}}
            <div class="col">

                <div class="card border-0 shadow-sm rounded-4 h-100 dashboard-card">

                    <div class="card-body">

                        <div class="icon-shape icon-lg rounded-4 bg-warning-subtle text-warning mb-4">

                            <i class="ti ti-users fs-3"></i>

                        </div>

                        <div class="mb-3">

                            <h5 class="fw-semibold mb-1">
                                Total Pendaftar Murid Baru Tahun 2026
                            </h5>

                            <small class="text-muted">
                                Seluruh data murid baru
                            </small>

                        </div>

                        <h1 class="fw-bold mb-0">
                            {{ $totalPendaftar }}
                        </h1>

                    </div>

                </div>

            </div>

            {{-- STATISTIK JURUSAN --}}
            @foreach ($statistikJurusan as $index => $jurusan)
                <div class="col">

                    <div class="card border-0 shadow-sm rounded-4 h-100 dashboard-card">

                        <div class="card-body">

                            {{-- ICON --}}
                            <div
                                class="icon-shape icon-lg rounded-4
                        bg-{{ $colors[$index % count($colors)] }}-subtle
                        text-{{ $colors[$index % count($colors)] }}
                        mb-4">

                                <i class="{{ $icons[$index % count($icons)] }} fs-3"></i>

                            </div>

                            {{-- NAMA JURUSAN --}}
                            <div class="mb-3">

                                <h5 class="fw-semibold mb-1 jurusan-title">
                                    {{ $jurusan->program_keahlian }}
                                </h5>

                                <small class="text-muted">
                                    Total pendaftar jurusan
                                </small>

                            </div>

                            {{-- TOTAL --}}
                            <h1 class="fw-bold mb-0">
                                {{ $jurusan->murid_count }}
                            </h1>

                        </div>

                    </div>

                </div>
            @endforeach

        </div>
        {{-- KINERJA PANITIA --}}
        <div class="row mb-6">

            <div class="col-xl-8">

                <div class="card border-0 shadow-sm rounded-4">

                    <div class="card-body p-4">

                        <div class="d-flex justify-content-between align-items-center mb-4">

                            <div>
                                <h4 class="mb-1">Kinerja Panitia</h4>

                                <p class="text-muted mb-0 small">
                                    Monitoring total input data siswa oleh panitia.
                                </p>
                            </div>

                            <span class="badge bg-success-subtle text-success px-3 py-2">
                                {{ $statistikPanitia->count() }} Panitia Aktif
                            </span>

                        </div>

                        @php
                            $maxInput = $statistikPanitia->max('murid_count') ?: 1;
                            $colors = ['success', 'primary', 'warning', 'danger', 'info'];
                        @endphp

                        @forelse ($statistikPanitia as $index => $panitia)
                            <div class="mb-4">

                                <div class="d-flex justify-content-between align-items-center mb-2">

                                    <div class="d-flex align-items-center gap-3">

                                        <div
                                            class="icon-shape icon-md rounded-circle bg-{{ $colors[$index % count($colors)] }}-subtle text-{{ $colors[$index % count($colors)] }} fw-bold">

                                            {{ $index + 1 }}

                                        </div>

                                        <div>

                                            <div class="fw-semibold">
                                                {{ $panitia->name }}
                                            </div>

                                            <small class="text-muted">
                                                Panitia Pendaftaran
                                            </small>

                                        </div>

                                    </div>

                                    <div class="text-end">

                                        <div class="fw-bold fs-5">
                                            {{ $panitia->murid_count }}
                                        </div>

                                        <small class="text-muted">
                                            Input siswa
                                        </small>

                                    </div>

                                </div>

                                <div class="progress" style="height: 8px;">

                                    <div class="progress-bar bg-{{ $colors[$index % count($colors)] }}"
                                        style="width: {{ ($panitia->murid_count / $maxInput) * 100 }}%">
                                    </div>

                                </div>

                            </div>

                        @empty

                            <div class="text-center py-5 text-muted">
                                Belum ada data panitia.
                            </div>
                        @endforelse

                    </div>

                </div>

            </div>

            {{-- PANITIA TERAKTIF --}}
            <div class="col-xl-4">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h4 class="mb-1">Panitia Teraktif</h4>

                            <p class="text-muted small mb-0">
                                Performa input tertinggi.
                            </p>

                        </div>

                        @if ($statistikPanitia->count())
                            @php
                                $topPanitia = $statistikPanitia->first();
                            @endphp

                            <div class="text-center py-4">

                                <div class="icon-shape icon-xxl rounded-circle bg-warning-subtle text-warning mx-auto mb-4">

                                    <i class="ti ti-trophy fs-1"></i>

                                </div>

                                <h2 class="mb-1">
                                    {{ $topPanitia->name }}
                                </h2>

                                <p class="text-muted mb-4">
                                    {{ $topPanitia->murid_count }} Input Data Siswa
                                </p>

                                <div class="alert alert-success mb-0 rounded-3">
                                    🔥 Panitia paling aktif saat ini
                                </div>

                            </div>
                        @else
                            <div class="text-center py-5 text-muted">
                                Belum ada data.
                            </div>
                        @endif

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
