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
        @php
            if ($murid->foto_warna_santri) {
                $foto = asset($murid->foto_warna_santri);
            } else {
                if ($murid->jenis_kelamin == 'P' || strtolower($murid->jenis_kelamin) == 'perempuan') {
                    $foto = asset('images/pr.png');
                } else {
                    $foto = asset('images/lk.png');
                }
            }
        @endphp
        <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card border-0 shadow-sm rounded-4">

                    <div class="card-body p-4 p-lg-5">

                        <div class="row g-5">

                            {{-- FOTO --}}
                            <div class="col-lg-3 text-center">

                                <img src="{{ $foto }}" class="rounded-4 shadow-sm mb-3"
                                    style="width: 200px; height: 260px; object-fit: cover;">

                            </div>

                            {{-- BIODATA --}}
                            <div class="col-lg-9">

                                {{-- HEADER --}}
                                <div class="mb-4">

                                    <h2 class="fw-bold mb-1">
                                        {{ strtoupper($murid->nama) }}
                                    </h2>

                                    <div class="text-muted">
                                        NISN : {{ $murid->nisn ?? '-' }}
                                    </div>

                                </div>

                                {{-- ISI --}}
                                <div class="row">

                                    {{-- KIRI --}}
                                    <div class="col-md-6">

                                        <div class="mb-4">
                                            <small class="text-muted d-block">
                                                NIK
                                            </small>

                                            <div class="fw-semibold">
                                                {{ $murid->nik }}
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <small class="text-muted d-block">
                                                Tempat, Tanggal Lahir
                                            </small>

                                            <div class="fw-semibold">
                                                {{ $murid->tempat_lahir }},
                                                {{ \Carbon\Carbon::parse($murid->tanggal_lahir)->locale('id')->translatedFormat('d F Y') }}
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <small class="text-muted d-block">
                                                Asal Sekolah
                                            </small>

                                            <div class="fw-semibold">
                                                {{ $murid->asal_sekolah ?? '-' }}
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <small class="text-muted d-block">
                                                Jurusan
                                            </small>

                                            <div class="fw-semibold">
                                                {{ $murid->jurusan->program_keahlian ?? '-' }}
                                            </div>
                                        </div>

                                    </div>

                                    {{-- KANAN --}}
                                    <div class="col-md-6">

                                        <div class="mb-4">
                                            <small class="text-muted d-block">
                                                Jenis Kelamin
                                            </small>

                                            <div class="fw-semibold">
                                                {{ $murid->jenis_kelamin }}
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <small class="text-muted d-block">
                                                Agama
                                            </small>

                                            <div class="fw-semibold">
                                                {{ $murid->agama->nama_agama ?? '-' }}
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <small class="text-muted d-block">
                                                Status Anak
                                            </small>

                                            <div class="fw-semibold">
                                                {{ $murid->dlm_klrg }}
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <small class="text-muted d-block">
                                                Anak Ke
                                            </small>

                                            <div class="fw-semibold">
                                                {{ $murid->ank_ke }}
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        {{-- ALAMAT + STATUS BERKAS --}}
                        <div class="border-top mt-4 pt-4">

                            <div class="row g-4 align-items-start">

                                {{-- ALAMAT --}}
                                <div class="col-lg-8">

                                    <small class="text-muted d-block mb-2">
                                        Alamat
                                    </small>

                                    <div class="fw-semibold mb-2">
                                        {{ $murid->alamat_lengkap }}
                                    </div>

                                    <div class="text-muted">
                                        {{ $murid->desaDetail->name ?? '-' }},
                                        {{ $murid->kecamatan['name'] ?? '-' }},
                                        {{ $murid->kabupaten['name'] ?? '-' }},
                                        {{ $murid->provinsi['name'] ?? '-' }}
                                    </div>

                                </div>

                                {{-- STATUS BERKAS --}}
                                <div class="col-lg-4">

                                    @php

                                        $totalBerkas = 6;

                                        $berkasLengkap = collect([
                                            $murid->foto_scan_kk,
                                            $murid->foto_scan_akta,
                                            $murid->foto_warna_santri,
                                            $murid->foto_skl,
                                            $murid->foto_ijazah,
                                            $murid->foto_scan_skck,
                                        ])
                                            ->filter()
                                            ->count();

                                    @endphp

                                    <div class="border rounded-4 p-3 bg-light h-100">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <small class="text-muted d-block">
                                                    Status Berkas
                                                </small>

                                                @if ($berkasLengkap == $totalBerkas)
                                                    <div class="fw-semibold text-success">
                                                        Berkas Lengkap
                                                    </div>
                                                @else
                                                    <div class="fw-semibold text-warning">
                                                        Berkas Belum Lengkap
                                                    </div>
                                                @endif

                                            </div>

                                            <div class="text-end">

                                                <div
                                                    class="badge {{ $berkasLengkap == $totalBerkas ? 'bg-success' : 'bg-warning text-dark' }} px-3 py-2">

                                                    {{ $berkasLengkap }}/{{ $totalBerkas }}

                                                </div>

                                            </div>

                                        </div>

                                        {{-- INFO --}}
                                        <small class="text-muted d-block mt-3">
                                            Cek detail berkas pada bagian upload berkas di bawah halaman ini.
                                        </small>

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
                    @php
                        $berkas = [
                            [
                                'judul' => 'Kartu Keluarga',
                                'file' => $murid->foto_scan_kk,
                            ],
                            [
                                'judul' => 'Akta Kelahiran',
                                'file' => $murid->foto_scan_akta,
                            ],
                            [
                                'judul' => 'Ijazah / SKL',
                                'file' => $murid->foto_ijazah,
                            ],
                            [
                                'judul' => 'Surat Keterangan Lulus',
                                'file' => $murid->foto_skl,
                            ],
                            [
                                'judul' => 'SKCK / SKKB',
                                'file' => $murid->foto_scan_skck,
                            ],
                        ];
                    @endphp

                    <div class="tab-pane fade" id="berkas">
                        <div class="row g-4">

                            @foreach ($berkas as $item)
                                @php
                                    $adaFile = !empty($item['file']);
                                    $file = $adaFile ? asset($item['file']) : asset('images/notfound.png');
                                @endphp

                                <div class="col-md-6 col-lg-4">
                                    <div class="card border-0 shadow-sm h-100 rounded-4">

                                        <div class="card-header bg-white border-0 text-center pt-3">

                                            <h6 class="fw-bold mb-2">
                                                {{ $item['judul'] }}
                                            </h6>

                                            @if ($adaFile)
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check-circle me-1"></i>
                                                    Sudah Upload
                                                </span>
                                            @else
                                                <span class="badge bg-danger">
                                                    <i class="fas fa-times-circle me-1"></i>
                                                    Belum Upload
                                                </span>
                                            @endif

                                        </div>

                                        <div class="card-body text-center">

                                            <img src="{{ $file }}" class="img-fluid rounded-3 border"
                                                style="height:220px;width:100%;object-fit:contain;cursor:pointer;"
                                                onclick="openPreview('{{ $file }}','{{ $item['judul'] }}')">

                                        </div>

                                        <div class="card-footer bg-white border-0 pb-3 text-center">

                                            @if ($adaFile)
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    onclick="openPreview('{{ $file }}','{{ $item['judul'] }}')">
                                                    <i class="fas fa-eye me-1"></i>
                                                    Preview
                                                </button>

                                                <a href="{{ $file }}" download class="btn btn-success btn-sm">
                                                    <i class="fas fa-download me-1"></i>
                                                    Download
                                                </a>
                                            @else
                                                <button class="btn btn-secondary btn-sm" disabled>
                                                    <i class="fas fa-ban me-1"></i>
                                                    Tidak Tersedia
                                                </button>
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="previewModal" tabindex="-1">

        <div class="modal-dialog modal-dialog-centered modal-lg">

            <div class="modal-content bg-dark">

                <div class="modal-header border-0">
                    <h5 class="modal-title text-white" id="previewTitle">Preview</h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body text-center">

                    <img id="previewImage" class="img-fluid rounded" style="max-height:75vh;">

                </div>

            </div>

        </div>

    </div>
@endsection
@push('scripts')
    <script>
        function openPreview(image, title) {
            document.getElementById('previewImage').src = image;
            document.getElementById('previewTitle').innerText = title;

            let modal = new bootstrap.Modal(document.getElementById('previewModal'));
            modal.show();
        }
    </script>
@endpush
