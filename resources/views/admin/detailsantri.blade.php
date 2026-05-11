@extends('template')

@section('title', 'Detail Murid')

@section('konten')

    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-8 d-md-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="mb-3 h2">Detail Data Santri</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Ambil Data</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        {{-- <a href="#" class="btn btn-dark"> Tambah Murid </a> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        {{-- CONTENT --}}
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                    <div class="card-body p-0">

                        <div class="row g-0">

                            {{-- LEFT --}}
                            <div class="col-lg-4 border-end bg-light">

                                @php
                                    $foto = $murid->foto_warna_santri
                                        ? asset('storage/' . $murid->foto_warna_santri)
                                        : asset('images/default-user.png');
                                @endphp

                                <div class="p-4 text-center">

                                    <img src="{{ $foto }}" class="rounded-4 shadow-sm mb-4"
                                        style="width: 220px; height: 300px; object-fit: cover;">

                                    <h3 class="fw-bold mb-1">
                                        {{ strtoupper($murid->nama) }}
                                    </h3>

                                    <div class="text-muted mb-3">
                                        NIUP :
                                        {{ $murid->niup ?? '-' }}
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
                                                    {{ $murid->nik }}
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label class="text-muted small">
                                                    Tempat, Tanggal Lahir
                                                </label>

                                                <div class="fw-semibold">
                                                    {{ $murid->tempat_lahir }},
                                                    {{ \Carbon\Carbon::parse($murid->tanggal_lahir)->locale('id')->translatedFormat('d F Y') }}
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label class="text-muted small">
                                                    Jenis Kelamin
                                                </label>

                                                <div class="fw-semibold">
                                                    {{ $murid->jenis_kelamin }}
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label class="text-muted small">
                                                    Status Anak
                                                </label>

                                                <div class="fw-semibold">
                                                    {{ $murid->dlm_klrg }}
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label class="text-muted small">
                                                    Anak Ke
                                                </label>

                                                <div class="fw-semibold">
                                                    {{ $murid->ank_ke }}
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
                                                    {{ $murid->nm_a }}
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label class="text-muted small">
                                                    Nama Ibu
                                                </label>

                                                <div class="fw-semibold">
                                                    {{ $murid->nm_i }}
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label class="text-muted small">
                                                    Nama Wali
                                                </label>

                                                <div class="fw-semibold">
                                                    {{ $murid->nm_w ?? '-' }}
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label class="text-muted small">
                                                    Alamat
                                                </label>

                                                <div class="fw-semibold">
                                                    {{ $murid->alamat_lengkap }}
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    {{-- BUTTON --}}
                                    <div class="border-top pt-4 mt-2">

                                        <div class="d-flex gap-2">
                                            <form action="{{ route('santri.tambah', $murid->id_person) }}" method="POST">

                                                @csrf

                                                @if ($murid->status == 1)
                                                    <button class="btn btn-success" disabled>
                                                        Sudah Menjadi Siswa
                                                    </button>
                                                @else
                                                    <button class="btn btn-dark">
                                                        Tambah ke Data Murid
                                                    </button>
                                                @endif

                                            </form>

                                            {{-- <a href="#" class="btn btn-dark px-4">

                                                Tambahkan ke Data Murid
                                            </a> --}}

                                            <a href="{{ route('ambildata') }}" class="btn btn-outline-secondary">

                                                Kembali
                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
                timer: 3000,
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
@endpush
