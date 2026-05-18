@extends('template')
@section('title')
    Page Ambil Data | SPMB
@endsection
@section('konten')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
                timer: 2500,
                showConfirmButton: false
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '{{ session('error') }}',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-8 d-md-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="mb-3 h2">Get Data Santri</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ambil Data</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="text-end">
                        <form action="{{ route('santri.sync') }}" method="POST" id="syncForm">
                            @csrf
                            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalTambah">Data
                                Synchronization
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-refresh">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                                </svg>
                            </button>
                        </form>
                        {{-- @if ($lastSync)
                            <small class="text-muted d-block mt-2">
                                ↻ Terakhir sinkron:
                                {{ \Carbon\Carbon::parse($lastSync)->locale('id')->translatedFormat('d F Y H:i') }}
                                WIB
                            </small>
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-md-6">
                <form id="cariForm" action="{{ route('ambildata') }}" method="GET">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="niup" placeholder="Nomor Induk Umum Pesantren"
                            aria-label="Nomor Induk Umum Pesantren" aria-describedby="cari" value="{{ request('niup') }}" />
                        <button class="input-group-text bg-primary text-light" id="cari">Cari Data</button>
                    </div>
                </form>
            </div>
        </div>

        @if (isset($data))
            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">

                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                        <div class="card-body p-0">

                            <div class="row g-0">

                                {{-- LEFT --}}
                                <div class="col-lg-4 border-end bg-light">

                                    @php
                                        // $foto = $murid->foto_warna_santri
                                        //     ? asset('storage/' . $murid->foto_warna_santri)
                                        //     : asset('images/default-user.png');
                                    @endphp

                                    <div class="p-4 text-center">

                                        <img src="{{ !empty($data['foto_warna_santri']) ? $data['foto_warna_santri'] : asset('images/default.png') }}"
                                            class="rounded-4 shadow-sm mb-4"
                                            style="width: 220px; height: 300px; object-fit: cover;">

                                        <h3 class="fw-bold mb-1">
                                            {{ $data['nama'] }}
                                        </h3>

                                        <div class="text-muted mb-3">
                                            NIUP :
                                            {{ $data['niup'] }}
                                        </div>

                                        <span class="badge bg-success px-3 py-2">
                                            Data Virtual Santri
                                        </span>

                                    </div>
                                </div>

                                {{-- RIGHT --}}
                                <div class="col-lg-8">

                                    <div class="p-4 p-lg-5">

                                        <div class="d-flex align-items-center mb-4">
                                            <div>
                                                <h4 class="fw-bold mb-0">
                                                    Biodata Santri
                                                </h4>

                                                <small class="text-muted">
                                                    Informasi data utama santri
                                                </small>
                                            </div>
                                        </div>

                                        <div class="row">

                                            {{-- LEFT INFO --}}
                                            <div class="col-md-6">

                                                <div class="mb-4">
                                                    <label class="text-muted small">
                                                        NIK
                                                    </label>

                                                    <div class="fw-semibold">
                                                        {{ $data['nik'] }}
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="text-muted small">
                                                        Tempat, Tanggal Lahir
                                                    </label>

                                                    <div class="fw-semibold">
                                                        {{ $data['tempat_lahir'] }},
                                                        {{ $data['tanggal_lahir'] }}
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="text-muted small">
                                                        Jenis Kelamin
                                                    </label>

                                                    <div class="fw-semibold">
                                                        {{ $data['jenis_kelamin'] }}
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="text-muted small">
                                                        Status Anak
                                                    </label>

                                                    <div class="fw-semibold">
                                                        {{ $data['dlm_klrg'] }}
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="text-muted small">
                                                        Anak Ke
                                                    </label>

                                                    <div class="fw-semibold">
                                                        {{ $data['ank_ke'] }}
                                                    </div>
                                                </div>

                                            </div>

                                            {{-- RIGHT INFO --}}
                                            <div class="col-md-6">

                                                <div class="mb-4">
                                                    <label class="text-muted small">
                                                        Nama Ayah
                                                    </label>

                                                    <div class="fw-semibold">
                                                        {{ $data['nm_a'] }}
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="text-muted small">
                                                        Nama Ibu
                                                    </label>

                                                    <div class="fw-semibold">
                                                        {{ $data['nm_i'] }}
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="text-muted small">
                                                        Nama Wali
                                                    </label>

                                                    <div class="fw-semibold">
                                                        {{ $data['nm_w'] }}
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="text-muted small">
                                                        Alamat
                                                    </label>

                                                    <div class="fw-semibold">
                                                        {{ $data['alamat_lengkap'] }}
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        {{-- BUTTON --}}
                                        <div class="border-top pt-3">

                                            <div class="">
                                                <form action="{{ route('ambildata.store') }}" id="tambahMurid"
                                                    method="POST">
                                                    @csrf
                                                    <input type="hidden" name="niup" value="{{ $data['niup'] }}">
                                                    <button class="btn btn-dark float-end">
                                                        Tambah ke Data Murid
                                                    </button>
                                                </form>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        @endif
    </div>
@endsection
@push('scripts')
    <script>
        document.getElementById('syncForm').addEventListener('submit', function() {

            Swal.fire({
                title: 'Synchronization...',
                text: 'Sedang mengambil data API',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

        });
    </script>
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ session('success') }}',
                    timer: 2500,
                    showConfirmButton: false
                });

            });
        </script>
    @endif

    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: '{{ session('error') }}',
                    timer: 3000,
                    showConfirmButton: false
                });

            });
        </script>
    @endif

    <script>
        $('#cariForm').on('submit', function() {
            $('#loader').css('display', 'flex');
        });

        $('#tambahMurid').on('submit', function() {
            $('#loader').css('display', 'flex');
        });
    </script>
@endpush
