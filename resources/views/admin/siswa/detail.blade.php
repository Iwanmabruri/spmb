@extends('template')

@section('title', 'Detail Murid')

@section('konten')

    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-8 d-md-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="mb-3 h2">Detail Data Murid Baru</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Murid</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="{{ route('murid') }}" class="btn btn-dark"> KEMBALI </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            {{-- LEFT --}}
                            <div class="col-lg-4 border-end bg-light">

                                @php
                                    $foto = $murid->foto_warna_santri
                                        ? asset($murid->foto_warna_santri)
                                        : asset('images/default-user.png');
                                @endphp

                                <div class="p-4 text-center">

                                    <img src="{{ $foto }}" class="rounded-4 shadow-sm mb-4"
                                        style="width: 220px; height: 300px; object-fit: cover;">

                                    <h3 class="fw-bold mb-1">
                                        {{ strtoupper($murid->nama) }}
                                    </h3>

                                    <div class="text-muted mb-3">
                                        NISN :
                                        {{ $murid->nisn ?? '-' }}
                                    </div>

                                    {{-- <span class="badge bg-success px-3 py-2">
                                        Data Murid Baru 2026
                                    </span> --}}

                                </div>
                            </div>

                            {{-- RIGHT --}}
                            <div class="col-lg-8">

                                <div class="p-4 p-lg-5">

                                    <div class="d-flex align-items-center mb-4">
                                        <div>
                                            <h4 class="fw-bold mb-0">
                                                Biodata Murid
                                            </h4>

                                            <small class="text-muted">
                                                Informasi data utama Murid
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
                                                    Agama
                                                </label>

                                                <div class="fw-semibold">
                                                    {{ $murid->agama->nama_agama ?? '-' }}
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label class="text-muted small">
                                                    Asal Sekolah
                                                </label>

                                                <div class="fw-semibold">
                                                    {{ $murid->asal_sekolah ?? '-' }}
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

                                            <div class="mb-4">
                                                <label class="text-muted small">
                                                    Tinggal Di
                                                </label>

                                                <div class="fw-semibold">
                                                    {{ $murid->tinggal_di }}
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label class="text-muted small">
                                                    Jurusan
                                                </label>

                                                <div class="fw-semibold">
                                                    {{ $murid->jurusan->program_keahlian ?? '-' }}
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
            <div class="card shadow-sm mt-3">
                <div class="card-body">

                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#diri">Data
                                Diri</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#ortu">Orang Tua</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#wali">Wali</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#berkas">Berkas</button>
                        </li>
                    </ul>

                    <div class="tab-content">

                        {{-- DATA DIRI --}}
                        <div class="tab-pane fade show active" id="diri">
                            <table class="table table-bordered">
                                <tr>
                                    <td>No KK</td>
                                    <td>{{ $murid->no_kk }}</td>
                                </tr>
                                <tr>
                                    <td>No Registrasi Akta</td>
                                    <td>{{ $murid->no_akta }}</td>
                                </tr>
                                <tr>
                                    <td>No Induk Umum Pesantren</td>
                                    <td>{{ $murid->niup ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Kewarganegaraan</td>
                                    <td>{{ $murid->kewarganegaraan ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Saudara</td>
                                    <td>{{ $murid->sdr ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Hobi</td>
                                    <td>{{ $murid->hoby }}</td>
                                </tr>
                                <tr>
                                    <td>Cita-cita</td>
                                    <td>{{ $murid->cita_cita }}</td>
                                </tr>
                                <tr>
                                    <td>Tinggi / Berat</td>
                                    <td>{{ $murid->tinggi_badan }} cm / {{ $murid->berat_badan }} kg</td>
                                </tr>
                            </table>
                        </div>

                        {{-- ORANG TUA --}}
                        <div class="tab-pane fade" id="ortu">
                            <table class="table table-bordered">
                                <tr>
                                    <th colspan="2">BIODATA AYAH</th>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td>{{ $murid->nik_a }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>{{ $murid->nm_a }}</td>
                                </tr>
                                <tr>
                                    <td>Pendidikan</td>
                                    <td>{{ $murid->pendidikanAyah->jenjang ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>{{ $murid->pekerjaanAyah->nama_pekerjaan ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Penghasilan</td>
                                    <td>{{ $murid->penghasilanAyah->kategori ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <th colspan="2">BIODATA IBU</th>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td>{{ $murid->nik_i }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>{{ $murid->nm_i }}</td>
                                </tr>
                                <tr>
                                    <td>Pendidikan</td>
                                    <td>{{ $murid->pendidikanIbu->jenjang ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>{{ $murid->pekerjaanIbu->nama_pekerjaan ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Penghasilan</td>
                                    <td>{{ $murid->penghasilanIbu->kategori ?? '-' }}</td>
                                </tr>
                            </table>
                        </div>

                        {{-- WALI --}}
                        <div class="tab-pane fade" id="wali">
                            <table class="table table-bordered">
                                <tr>
                                    <td>NIK</td>
                                    <td>{{ $murid->nik_w }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>{{ $murid->nm_w }}</td>
                                </tr>
                                <tr>
                                    <td>Pendidikan</td>
                                    <td>{{ $murid->pendidikanWali->jenjang ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>{{ $murid->pekerjaanWali->nama_pekerjaan ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Penghasilan</td>
                                    <td>{{ $murid->penghasilanWali->kategori ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>NO. HP</td>
                                    <td>{{ $murid->hp_w }}</td>
                                </tr>
                            </table>
                        </div>

                        {{-- BERKAS --}}
                        <div class="tab-pane fade" id="berkas">
                            <ul>
                                <li>KK: {{ $murid->foto_scan_kk ? '✔' : '❌' }}</li>
                                <li>Akta: {{ $murid->foto_scan_akta ? '✔' : '❌' }}</li>
                                <li>Ijazah: {{ $murid->foto_ijazah ? '✔' : '❌' }}</li>
                                <li>KIP: {{ $murid->file_kip ? '✔' : '❌' }}</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
