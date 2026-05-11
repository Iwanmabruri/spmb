@extends('template')
@section('title')
    Page Add murid
@endsection
@section('konten')
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-8 d-md-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="mb-3 h2">Form Data Murid</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="progress mb-4">
                    <div class="progress-bar" style="width: 25%">Step 1</div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-truncate h5 mb-0" id="withLabel">BIODATA DIRI - MURID BARU</h3>
                    </div>
                    <div class="card-body">
                        <form id="formStep1" action="{{ route('murid.update.step1', $id_person) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row g-3">

                                <div class="col-md-4">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama" value="{{ old('nama', $murid->nama ?? '') }}"
                                        class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">NO KK</label>
                                    <input type="number" name="no_kk" value="{{ old('no_kk', $murid->no_kk ?? '') }}"
                                        class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">NIK</label>
                                    <input type="number" name="nik" value="{{ old('nik', $murid->nik ?? '') }}"
                                        class="form-control" required>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">No Akta Kelahiran</label>
                                    <input type="text" name="no_akta" value="{{ old('no_akta', $murid->no_akta ?? '') }}"
                                        class="form-control" required>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">NISN</label>
                                    <input type="number" name="nisn" value="{{ old('nisn', $murid->nisn ?? '') }}"
                                        class="form-control" required>
                                </div>

                                {{-- <div class="col-md-3">
                                    <label class="form-label">NIUP</label>
                                    <input type="text" name="niup" value="{{ old('niup', $murid->niup ?? '') }}"
                                        class="form-control">
                                </div> --}}

                                <div class="col-md-3">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir"
                                        value="{{ old('tempat_lahir', $murid->tempat_lahir ?? '') }}" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir"
                                        value="{{ old('tanggal_lahir', $murid->tanggal_lahir ?? '') }}" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Agama</label>
                                    <select name="agama" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($agama as $a)
                                            <option value="{{ $a->id }}">{{ $a->nama_agama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <label class="form-label">Status dalam Keluarga</label>
                                    <select name="dlm_klrg" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="Kandung">Kandung</option>
                                        <option value="Tiri">Tiri</option>
                                        <option value="Angkat">Angkat</option>
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <label class="form-label">Anak ke</label>
                                    <input type="number" name="ank_ke" value="{{ old('ank_ke', $murid->ank_ke ?? '') }}"
                                        class="form-control">
                                </div>

                                <div class="col-md-2">
                                    <label class="form-label">Jumlah Saudara</label>
                                    <input type="number" name="sdr" value="{{ old('sdr', $murid->sdr ?? '') }}"
                                        class="form-control" required>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Jurusan</label>
                                    <select name="jurusan" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($jurusan as $j)
                                            <option value="{{ $j->id }}">{{ $j->program_keahlian }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Jenis Pendaftaran</label>
                                    <select name="jenis_daftar" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="BARU">BARU</option>
                                        <option value="PINDAH">PINDAH</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah"
                                        value="{{ old('asal_sekolah', $murid->asal_sekolah ?? '') }}"
                                        class="form-control" required>
                                </div>

                                <div class="col-md-2">
                                    <label class="form-label">Nomor Ijazah</label>
                                    <input type="text" name="nomor_ijazah"
                                        value="{{ old('nomor_ijazah', $murid->nomor_ijazah ?? '') }}"
                                        class="form-control" required>
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

                                <div class="col-md-2">
                                    <label class="form-label">Tinggi (cm)</label>
                                    <input type="number" name="tinggi_badan"
                                        value="{{ old('tinggi_badan', $murid->tinggi_badan ?? '') }}"
                                        class="form-control" required>
                                </div>

                                <div class="col-md-2">
                                    <label class="form-label">Berat (kg)</label>
                                    <input type="number" name="berat_badan"
                                        value="{{ old('berat_badan', $murid->berat_badan ?? '') }}" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Hobi</label>
                                    <input type="text" name="hoby" value="{{ old('hoby', $murid->hoby ?? '') }}"
                                        class="form-control">
                                </div>

                                <div class="col-md-2">
                                    <label class="form-label">Cita-Cita</label>
                                    <input type="text" name="cita_cita"
                                        value="{{ old('cita_cita', $murid->cita_cita ?? '') }}" class="form-control"
                                        required>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer border-top border-dashed">

                        <div class="d-flex justify-content-between align-items-center">

                            <!-- Kiri -->
                            <a href="{{ route('murid') }}" class="btn btn-secondary">
                                Batal
                            </a>

                            <!-- Kanan -->
                            <button type="submit" class="btn btn-primary">
                                Simpan & Lanjut
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.querySelectorAll('input[type="text"]').forEach(function(input) {
            input.addEventListener('input', function() {
                this.value = this.value.toUpperCase();
            });
        });
    </script>
    <script>
        document.getElementById('formStep1').addEventListener('submit', function(e) {
            e.preventDefault();

            let form = this;

            Swal.fire({
                title: 'Yakin?',
                text: "Data akan disimpan",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, simpan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {

                    // popup kedua
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Step 1 berhasil tersimpan',
                        timer: 1500,
                        showConfirmButton: false
                    });

                    // delay submit biar alert kelihatan
                    setTimeout(() => {
                        form.submit();
                    }, 1500);
                }
            });
        });
    </script>
@endpush
