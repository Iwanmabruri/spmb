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
                    <div class="progress-bar" style="width: 100%">Step 4</div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-truncate h5 mb-0" id="withLabel">Biodata Wali - Murid Baru</h3>
                    </div>
                    <div class="card-body">
                        <!-- BUTTON COPY -->
                        <div class="mb-3">
                            <button type="button" class="btn btn-outline-primary btn-sm" onclick="copyAyah()">
                                Copy dari Ayah
                            </button>

                            <button type="button" class="btn btn-outline-success btn-sm" onclick="copyIbu()">
                                Copy dari Ibu
                            </button>
                        </div>
                        <form id="formStep4" action="{{ route('murid.store.step4', $murid->id_person) }}" method="POST">
                            @csrf

                            <div class="row g-3">

                                <div class="col-md-4">
                                    <label>Nama Wali</label>
                                    <input type="text" name="nm_w" class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label>NIK Wali</label>
                                    <input type="text" name="nik_w" class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label>Tempat Lahir Wali</label>
                                    <input type="text" name="tmpt_lahir_w" class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label>Tanggal Lahir Wali</label>
                                    <input type="date" name="tgl_lahir_w" class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label>Agama</label>
                                    <select name="agama_w" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($agama as $a)
                                            <option value="{{ $a->id }}">{{ $a->nama_agama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>Pekerjaan</label>
                                    <select name="pkrjn_w" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($pekerjaan as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama_pekerjaan }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>Pendidikan</label>
                                    <select name="pndkn_w" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($pendidikan as $p)
                                            <option value="{{ $p->id }}">{{ $p->jenjang }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>Penghasilan</label>
                                    <select name="penghasilan_w" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($penghasilan as $p)
                                            <option value="{{ $p->id }}">{{ $p->kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>No HP</label>
                                    <input type="number" name="hp_w" class="form-control" required>
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
                                Simpan
                            </button>

                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function copyAyah() {
            if (confirm('Copy data dari Ayah?')) {
                document.querySelector('[name=nm_w]').value = "{{ $murid->nm_a }}";
                document.querySelector('[name=nik_w]').value = "{{ $murid->nik_a }}";
                document.querySelector('[name=tmpt_lahir_w]').value = "{{ $murid->tmpt_lahir_a }}";
                document.querySelector('[name=tgl_lahir_w]').value = "{{ $murid->tgl_lahir_a }}";
                document.querySelector('[name=agama_w]').value = "{{ $murid->agama_a }}";
                document.querySelector('[name=pkrjn_w]').value = "{{ $murid->pkrjn_a }}";
                document.querySelector('[name=pndkn_w]').value = "{{ $murid->pndkn_a }}";
                document.querySelector('[name=penghasilan_w]').value = "{{ $murid->penghasilan_a }}";
            }
        }

        function copyIbu() {
            if (confirm('Copy data dari Ibu?')) {
                document.querySelector('[name=nm_w]').value = "{{ $murid->nm_i }}";
                document.querySelector('[name=nik_w]').value = "{{ $murid->nik_i }}";
                document.querySelector('[name=tmpt_lahir_w]').value = "{{ $murid->tmpt_lahir_i }}";
                document.querySelector('[name=tgl_lahir_w]').value = "{{ $murid->tgl_lahir_i }}";
                document.querySelector('[name=agama_w]').value = "{{ $murid->agama_i }}";
                document.querySelector('[name=pkrjn_w]').value = "{{ $murid->pkrjn_i }}";
                document.querySelector('[name=pndkn_w]').value = "{{ $murid->pndkn_i }}";
                document.querySelector('[name=penghasilan_w]').value = "{{ $murid->penghasilan_i }}";
            }
        }
    </script>
    <script>
        document.querySelectorAll('input[type="text"]').forEach(function(input) {
            input.addEventListener('input', function() {
                this.value = this.value.toUpperCase();
            });
        });
    </script>
    <script>
        document.getElementById('formStep4').addEventListener('submit', function(e) {
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
                        text: 'Step 4 berhasil tersimpan',
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
