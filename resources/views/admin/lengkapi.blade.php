@extends('template')
@section('title', 'Lengkapi Data Siswa')
@section('konten')

    <div class="custom-container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-8 d-md-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="mb-3 h2">Lengkapi Data</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                                <li class="breadcrumb-item"><a href="#">Ambil Data</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Lengkapi Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Lengkapi Data Siswa</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('siswa.updateLengkapi', $siswa->id_person) }}" method="POST">
                            @csrf

                            <div class="row g-4">

                                {{-- ================= BIODATA ================= --}}
                                <div class="col-12">
                                    <div class="border rounded-4 p-3 bg-light">
                                        <h5 class="fw-bold mb-3">📌 Biodata Siswa</h5>

                                        <div class="row g-3">

                                            <div class="col-md-4">
                                                <label class="form-label">No KK</label>
                                                <input type="text" name="no_kk" class="form-control"
                                                    value="{{ old('no_kk', $siswa->no_kk) }}" required>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">No Akta</label>
                                                <input type="text" name="no_akta" class="form-control"
                                                    value="{{ old('no_akta', $siswa->no_akta) }}" required>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">NISN</label>
                                                <input type="text" name="nisn" class="form-control"
                                                    value="{{ old('nisn', $siswa->nisn) }}" required>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Asal Sekolah</label>
                                                <input type="text" name="asal_sekolah"
                                                    value="{{ old('asal_sekolah', $siswa->asal_sekolah ?? '') }}"
                                                    class="form-control">
                                            </div>

                                            <div class="col-md-3">
                                                <label class="form-label">Agama</label>
                                                <select name="agama" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($agama as $a)
                                                        <option value="{{ $a->id }}">{{ $a->nama_agama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label class="form-label">Kewarganegaraan</label>
                                                <select name="kewarganegaraan" class="form-select">
                                                    <option value="WNI">WNI</option>
                                                    <option value="WNA">WNA</option>
                                                </select>
                                            </div>

                                            <div class="col-md-2">
                                                <label class="form-label">Tinggi (cm)</label>
                                                <input type="number" name="tinggi_badan" class="form-control">
                                            </div>

                                            <div class="col-md-2">
                                                <label class="form-label">Berat (kg)</label>
                                                <input type="number" name="berat_badan" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Hobi</label>
                                                <input type="text" name="hoby" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Cita-cita</label>
                                                <input type="text" name="cita_cita" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Jurusan</label>
                                                <select name="jurusan" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($jurusan as $j)
                                                        <option value="{{ $j->id }}">{{ $j->program_keahlian }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {{-- ================= AYAH ================= --}}
                                <div class="col-12">
                                    <div class="border rounded-4 p-3">
                                        <h5 class="fw-bold mb-3">👨 Data Ayah</h5>

                                        <div class="row g-3">

                                            <div class="col-md-4">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="tmpt_lahir_a" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir_a" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label>Agama</label>
                                                <select name="agama_a" class="form-select">
                                                    @foreach ($agama as $a)
                                                        <option value="{{ $a->id }}">{{ $a->nama_agama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {{-- ================= IBU ================= --}}
                                <div class="col-12">
                                    <div class="border rounded-4 p-3">
                                        <h5 class="fw-bold mb-3">👩 Data Ibu</h5>

                                        <div class="row g-3">

                                            <div class="col-md-4">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="tmpt_lahir_i" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir_i" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {{-- ================= WALI ================= --}}
                                <div class="col-12">
                                    <div class="border rounded-4 p-3 bg-light">
                                        <h5 class="fw-bold mb-3">👨‍👩‍👦 Data Wali</h5>

                                        <div class="row g-3">

                                            <div class="col-md-4">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="tmpt_lahir_w" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir_w" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label>No HP</label>
                                                <input type="number" name="hp_w" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {{-- BUTTON --}}
                                <div class="col-12">
                                    <div class="d-flex gap-2 justify-content-end">
                                        <button class="btn btn-primary px-4">
                                            Simpan Data
                                        </button>
                                        <a href="#" class="btn btn-outline-secondary">
                                            Batal
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                    <div class="card-footer float-end">
                        <button class="btn btn-primary">
                            Simpan Data
                        </button>

                        {{-- <a href="{{ route('ambildata') }}" class="btn btn-secondary">
                                Kembali
                            </a> --}}
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
