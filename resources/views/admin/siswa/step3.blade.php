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
                    <div class="progress-bar" style="width: 75%">Step 3</div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-truncate h5 mb-0" id="withLabel">BIODATA ORANG TUA - {{ $murid->nama }}</h3>
                    </div>
                    <div class="card-body">
                        <form id="formStep3" action="{{ route('murid.store.step3', $murid->id_person) }}" method="POST">
                            @csrf

                            <div class="row g-3">

                                <div class="col-md-3">
                                    <label>Nama Ayah</label>
                                    <input type="text" name="nm_a" class="form-control" required required>
                                </div>

                                <div class="col-md-3">
                                    <label>NIK Ayah</label>
                                    <input type="text" name="nik_a" class="form-control" required required>
                                </div>

                                <div class="col-md-3">
                                    <label>Tempat Lahir Ayah</label>
                                    <input type="text" name="tmpt_lahir_a" class="form-control" required>
                                </div>

                                <div class="col-md-3">
                                    <label>Tanggal Lahir Ayah</label>
                                    <input type="date" name="tgl_lahir_a" class="form-control" required>
                                </div>

                                <div class="col-md-3">
                                    <label>Agama</label>
                                    <select name="agama_a" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($agama as $a)
                                            <option value="{{ $a->id }}">{{ $a->nama_agama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Pekerjaan</label>
                                    <select name="pkrjn_a" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($pekerjaan as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama_pekerjaan }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Pendidikan</label>
                                    <select name="pndkn_a" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($pendidikan as $p)
                                            <option value="{{ $p->id }}">{{ $p->jenjang }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Penghasilan</label>
                                    <select name="penghasilan_a" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($penghasilan as $p)
                                            <option value="{{ $p->id }}">{{ $p->kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <hr class="border-secondary border-2 opacity-75 mb-5 mt-5">

                            <div class="row g-3">

                                <div class="col-md-3">
                                    <label>Nama Ibu</label>
                                    <input type="text" name="nm_i" class="form-control" required>
                                </div>

                                <div class="col-md-3">
                                    <label>NIK Ibu</label>
                                    <input type="text" name="nik_i" class="form-control" required>
                                </div>

                                <div class="col-md-3">
                                    <label>Tempat Lahir Ibu</label>
                                    <input type="text" name="tmpt_lahir_i" class="form-control" required>
                                </div>

                                <div class="col-md-3">
                                    <label>Tanggal Lahir Ibu</label>
                                    <input type="date" name="tgl_lahir_i" class="form-control" required>
                                </div>

                                <div class="col-md-3">
                                    <label>Agama</label>
                                    <select name="agama_i" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($agama as $a)
                                            <option value="{{ $a->id }}">{{ $a->nama_agama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Pekerjaan</label>
                                    <select name="pkrjn_i" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($pekerjaan as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama_pekerjaan }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Pendidikan</label>
                                    <select name="pndkn_i" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($pendidikan as $p)
                                            <option value="{{ $p->id }}">{{ $p->jenjang }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Penghasilan</label>
                                    <select name="penghasilan_i" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($penghasilan as $p)
                                            <option value="{{ $p->id }}">{{ $p->kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                    </div>
                    <div class="card-footer border-top border-dashed">

                        <div class="d-flex justify-content-between align-items-center">

                            <!-- Kiri -->
                            <a href="{{ route('murid.step2', $murid->id_person) }}" class="btn btn-secondary">
                                Kembali
                            </a>

                            <!-- Kanan -->
                            <button type="submit" class="btn btn-primary">
                                Simpan & Lanjut
                            </button>

                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    document.querySelectorAll('input[type="text"]').forEach(function(input) {
        input.addEventListener('input', function() {
            this.value = this.value.toUpperCase();
        });
    });
</script>
<script>
    document.getElementById('formStep3').addEventListener('submit', function(e) {
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
                    text: 'Step 3 berhasil tersimpan',
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
