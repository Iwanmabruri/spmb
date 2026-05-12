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
                    <form action="{{ route('murid.updatelengkapi', $siswa->id_person) }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row g-4">

                                {{-- ================= BIODATA ================= --}}
                                <div class="col-12">
                                    <div class="border rounded-4 p-3 bg-light">
                                        {{-- <h5 class="fw-bold mb-3">Lengkapi Biodata Murid</h5> --}}

                                        <div class="row g-3">

                                            <div class="col-md-3">
                                                <label class="form-label">No KK</label>
                                                <input type="text" name="no_kk" class="form-control"
                                                    value="{{ old('no_kk', $siswa->no_kk) }}" required>
                                            </div>

                                            <div class="col-md-3">
                                                <label class="form-label">No Akta</label>
                                                <input type="text" name="no_akta" class="form-control"
                                                    value="{{ old('no_akta', $siswa->no_akta) }}" required>
                                            </div>

                                            <div class="col-md-3">
                                                <label class="form-label">NISN</label>
                                                <input type="text" name="nisn" class="form-control"
                                                    value="{{ old('nisn', $siswa->nisn) }}" required>
                                            </div>

                                            <div class="col-md-3">
                                                <label class="form-label">Asal Sekolah</label>
                                                <input type="text" name="asal_sekolah"
                                                    value="{{ old('asal_sekolah', $siswa->asal_sekolah ?? '') }}"
                                                    class="form-control">
                                            </div>

                                            <div class="col-md-3">
                                                <label class="form-label">Nomor Ijazah</label>
                                                <input type="text" name="nomor_ijazah"
                                                    value="{{ old('nomor_ijazah', $murid->nomor_ijazah ?? '') }}"
                                                    class="form-control" required>
                                            </div>

                                            <div class="col-md-3">
                                                <label class="form-label">Agama</label>
                                                <select name="agama_id" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($agama as $a)
                                                        <option value="{{ $a->id }}">{{ $a->nama_agama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-2">
                                                <label class="form-label">Kewarganegaraan</label>
                                                <select name="kewarganegaraan" class="form-select">
                                                    <option value="">-- Pilih --</option>
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

                                            <div class="col-md-3">
                                                <label class="form-label">Tinggal Di</label>
                                                <select name="tinggal_di" class="form-select" required>
                                                    <option value="">-- Pilih --</option>
                                                    @foreach (['BERSAMA ORANG TUA', 'WALI', 'KOST', 'ASRAMA', 'PANTI ASUHAN', 'PESANTREN', 'LAINNYA'] as $t)
                                                        <option value="{{ $t }}"
                                                            {{ old('tinggal_di', $murid->tinggal_di ?? '') == $t ? 'selected' : '' }}>
                                                            {{ $t }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label class="form-label">Hobi</label>
                                                <input type="text" name="hoby" class="form-control">
                                            </div>

                                            <div class="col-md-3">
                                                <label class="form-label">Cita-cita</label>
                                                <input type="text" name="cita_cita" class="form-control">
                                            </div>

                                            <div class="col-md-3">
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
                                        {{-- <h5 class="fw-bold mb-3">Data Ayah</h5> --}}

                                        <div class="row g-3">

                                            <div class="col-md-4">
                                                <label>Tempat Lahir Ayah</label>
                                                <input type="text" name="tmpt_lahir_a" class="form-control">
                                            </div>

                                            <div class="col-md-2">
                                                <label>Agama Ayah</label>
                                                <select name="agama_a" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($agama as $a)
                                                        <option value="{{ $a->id }}">{{ $a->nama_agama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-2">
                                                <label>Pendidikan Ayah</label>
                                                <select name="pndkn_a" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($pendidikan as $p)
                                                        <option value="{{ $p->id }}">{{ $p->jenjang }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-2">
                                                <label>Pekerjaan Ayah</label>
                                                <select name="pkrjn_a" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($pekerjaan as $p)
                                                        <option value="{{ $p->id }}">{{ $p->nama_pekerjaan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-2">
                                                <label>Penghasilan Ayah</label>
                                                <select name="penghasilan_a" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($penghasilan as $p)
                                                        <option value="{{ $p->id }}">{{ $p->kategori }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {{-- ================= IBU ================= --}}
                                <div class="col-12">
                                    <div class="border rounded-4 p-3">
                                        {{-- <h5 class="fw-bold mb-3">Data Ibu</h5> --}}

                                        <div class="row g-3">

                                            <div class="col-md-4">
                                                <label>Tempat Lahir Ibu</label>
                                                <input type="text" name="tmpt_lahir_i" class="form-control">
                                            </div>

                                            <div class="col-md-2">
                                                <label>Agama Ibu</label>
                                                <select name="agama_i" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($agama as $a)
                                                        <option value="{{ $a->id }}">{{ $a->nama_agama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-2">
                                                <label>Pendidikan Ibu</label>
                                                <select name="pndkn_i" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($pendidikan as $p)
                                                        <option value="{{ $p->id }}">{{ $p->jenjang }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-2">
                                                <label>Pekerjaan Ibu</label>
                                                <select name="pkrjn_i" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($pekerjaan as $p)
                                                        <option value="{{ $p->id }}">{{ $p->nama_pekerjaan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-2">
                                                <label>Penghasilan Ibu</label>
                                                <select name="penghasilan_i" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($penghasilan as $p)
                                                        <option value="{{ $p->id }}">{{ $p->kategori }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {{-- ================= WALI ================= --}}
                                <div class="col-12">
                                    <div class="border rounded-4 p-3 bg-light">
                                        {{-- <h5 class="fw-bold mb-3">Data Wali</h5> --}}

                                        <div class="row g-3">

                                            <div class="col-md-4">
                                                <label>Tempat Lahir Wali</label>
                                                <input type="text" name="tmpt_lahir_w" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label>Tanggal Lahir Wali</label>
                                                <input type="date" name="tgl_lahir_w" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label>Agama Wali</label>
                                                <select name="agama_w" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($agama as $a)
                                                        <option value="{{ $a->id }}">{{ $a->nama_agama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label>Pendidikan Wali</label>
                                                <select name="pndkn_w" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($pendidikan as $p)
                                                        <option value="{{ $p->id }}">{{ $p->jenjang }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label>Pekerjaan Wali</label>
                                                <select name="pkrjn_w" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($pekerjaan as $p)
                                                        <option value="{{ $p->id }}">{{ $p->nama_pekerjaan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label>Penghasilan Wali</label>
                                                <select name="penghasilan_w" class="form-select">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($penghasilan as $p)
                                                        <option value="{{ $p->id }}">{{ $p->kategori }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label>No HP Wali</label>
                                                <input type="number" name="hp_w" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            {{-- BUTTON --}}
                            <div class="col-12">
                                <div class="d-flex gap-2 justify-content-end">
                                    <button type="submit" class="btn btn-primary px-4">
                                        Simpan Data
                                    </button>
                                    {{-- <a href="#" class="btn btn-outline-secondary">
                                    Batal
                                </a> --}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
