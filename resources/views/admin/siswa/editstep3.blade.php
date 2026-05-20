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
                        <h1 class="mb-3 h2">Form Edit Data Murid Step 3</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
                                <li class="breadcrumb-item"><a href="#">Edit Step 1</a></li>
                                <li class="breadcrumb-item"><a href="#">Edit Step 2</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Step 3</li>
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
                        <form id="formStep3" data-parsley-validate>
                            @csrf
                            <input hidden name="st" value="{{ $st }}">
                            <div class="row g-3">

                                <div class="col-md-3">
                                    <label>Nama Ayah</label>
                                    <input type="text" name="nm_a" class="form-control"
                                        value="{{ old('nm_a', $murid->nm_a ?? '') }}" required>
                                </div>

                                <div class="col-md-3">
                                    <label>NIK Ayah</label>
                                    <input type="text" name="nik_a" class="form-control"
                                        value="{{ old('nik_a', $murid->nik_a ?? '') }}" required>
                                </div>

                                <div class="col-md-3">
                                    <label>Tempat Lahir Ayah</label>
                                    <input type="text" name="tmpt_lahir_a" class="form-control"
                                        value="{{ old('tmpt_lahir_a', $murid->tmpt_lahir_a ?? '') }}" required>
                                </div>

                                <div class="col-md-3">
                                    <label>Tanggal Lahir Ayah</label>
                                    <input type="date" name="tgl_lahir_a"
                                        value="{{ old('tgl_lahir_a', $murid->tgl_lahir_a ?? '') }}" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-3">
                                    <label>Agama</label>
                                    <select name="agama_a" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($agama as $a)
                                            <option value="{{ $a->id }}"
                                                {{ old('agama_a', $murid->agama_a ?? '') == $a->id ? 'selected' : '' }}>
                                                {{ $a->nama_agama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Pekerjaan</label>
                                    <select name="pkrjn_a" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($pekerjaan as $p)
                                            <option value="{{ $p->id }}"
                                                {{ old('pkrjn_a', $murid->pkrjn_a ?? '') == $p->id ? 'selected' : '' }}>
                                                {{ $p->nama_pekerjaan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Pendidikan</label>
                                    <select name="pndkn_a" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($pendidikan as $p)
                                            <option value="{{ $p->id }}"
                                                {{ old('pndkn_a', $murid->pndkn_a ?? '') == $p->id ? 'selected' : '' }}>
                                                {{ $p->jenjang }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Penghasilan</label>
                                    <select name="penghasilan_a" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($penghasilan as $p)
                                            <option value="{{ $p->id }}"
                                                {{ old('penghasilan_a', $murid->penghasilan_a ?? '') == $p->id ? 'selected' : '' }}>
                                                {{ $p->kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <hr class="border-secondary border-2 opacity-75 mb-5 mt-5">

                            <div class="row g-3">

                                <div class="col-md-3">
                                    <label>Nama Ibu</label>
                                    <input type="text" name="nm_i" value="{{ old('nm_i', $murid->nm_i ?? '') }}"
                                        class="form-control" required>
                                </div>

                                <div class="col-md-3">
                                    <label>NIK Ibu</label>
                                    <input type="text" name="nik_i" class="form-control"
                                        value="{{ old('nik_i', $murid->nik_i ?? '') }}" required>
                                </div>

                                <div class="col-md-3">
                                    <label>Tempat Lahir Ibu</label>
                                    <input type="text" name="tmpt_lahir_i"
                                        value="{{ old('tmpt_lahir_i', $murid->tmpt_lahir_i ?? '') }}" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-3">
                                    <label>Tanggal Lahir Ibu</label>
                                    <input type="date" name="tgl_lahir_i"
                                        value="{{ old('tgl_lahir_i', $murid->tgl_lahir_i ?? '') }}" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-3">
                                    <label>Agama</label>
                                    <select name="agama_i" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($agama as $a)
                                            <option value="{{ $a->id }}"
                                                {{ old('agama_i', $murid->agama_i ?? '') == $a->id ? 'selected' : '' }}>
                                                {{ $a->nama_agama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Pekerjaan</label>
                                    <select name="pkrjn_i" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($pekerjaan as $p)
                                            <option value="{{ $p->id }}"
                                                {{ old('pkrjn_i', $murid->pkrjn_i ?? '') == $p->id ? 'selected' : '' }}>
                                                {{ $p->nama_pekerjaan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Pendidikan</label>
                                    <select name="pndkn_i" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($pendidikan as $p)
                                            <option value="{{ $p->id }}"
                                                {{ old('pndkn_i', $murid->pndkn_i ?? '') == $p->id ? 'selected' : '' }}>

                                                {{ $p->jenjang }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Penghasilan</label>
                                    <select name="penghasilan_i" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($penghasilan as $p)
                                            <option value="{{ $p->id }}"
                                                {{ old('penghasilan_i', $murid->penghasilan_i ?? '') == $p->id ? 'selected' : '' }}>
                                                {{ $p->kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                    </div>
                    <div class="card-footer border-top border-dashed">

                        {{-- <div class="d-flex justify-content-between align-items-center"> --}}
                        @if ($st == 't')
                            <a href="#" onclick="batal()" class="btn btn-secondary">
                                Batal
                            </a>
                        @else
                            <a href="{{ route('murid') }}" class="btn btn-secondary">
                                Kembali
                            </a>
                        @endif
                        <div class="float-end">
                            <a href="{{ route('murid.edit.step2', [$murid->id_person, $st]) }}" class="btn btn-primary">
                                Sebelumnya
                            </a>

                            <!-- Kanan -->
                            <button type="submit" class="btn btn-primary">
                                Simpan & Lanjut
                            </button>
                        </div>
                        <!-- Kiri -->

                        {{-- </div> --}}

                    </div>
                    </form>
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
        $(document).ready(function() {
            $('#formStep3').on('submit', function(e) {
                e.preventDefault();
                $(this).parsley().validate();
                if ($(this).parsley().isValid()) {
                    Swal.fire({
                        title: 'Yakin?',
                        text: "Data akan disimpan",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonText: 'Ya, simpan!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#loader').css('display', 'flex');
                            $.ajax({
                                url: "{{ route('murid.update.step3', $murid->id_person) }}",
                                type: "PUT",
                                data: $(this).serialize(),
                                success: function(response) {
                                    $('#loader').css('display', 'none');
                                    if (response.status == 'success') {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Berhasil',
                                            text: response.message,
                                        }).then(() => {
                                            $('#loader').css('display', 'flex');
                                            let url =
                                                "/admin/murid/edit/step4/" +
                                                response
                                                .id_person + "/" + response.st;

                                            window.location.href = url;
                                        });
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Gagal',
                                            text: response.message,
                                        });
                                    }
                                },
                                error: function(xhr) {
                                    $('#loader').css('display', 'none');
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: 'Terjadi kesalahan pada server.',
                                    });
                                }
                            });
                        }
                    });
                }
            });
        });

        function batal() {
            Swal.fire({
                title: 'Anda yakin?',
                text: 'Apakah anda yakin untuk membatalkan?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Tidak',
                confirmButtonText: 'Ya, batalkan!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('murid.batal') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "id": "{{ $murid->id_person }}"
                        },
                        success: function(hasil) {
                            $('#loader').css('display', 'none');
                            let url = "{{ route('murid') }}";

                            window.location.href = url;
                        }
                    });
                }
            });
        }
    </script>
@endpush
