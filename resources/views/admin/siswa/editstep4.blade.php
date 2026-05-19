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
                        <form id="formStep4" action="{{ route('murid.update.step4', $murid->id_person) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input hidden name="st" value="{{ $st }}">
                            <div class="row g-3">

                                <div class="col-md-4">
                                    <label>Nama Wali</label>
                                    <input type="text" name="nm_w" class="form-control" required
                                        value="{{ $murid->nm_w }}">
                                </div>

                                <div class="col-md-4">
                                    <label>NIK Wali</label>
                                    <input type="number" name="nik_w" class="form-control" required
                                        value="{{ $murid->nik_w }}">
                                </div>

                                <div class="col-md-4">
                                    <label>Tempat Lahir Wali</label>
                                    <input type="text" name="tmpt_lahir_w" class="form-control" required
                                        value="{{ $murid->tmpt_lahir_w }}">
                                </div>

                                <div class="col-md-4">
                                    <label>Tanggal Lahir Wali</label>
                                    <input type="date" name="tgl_lahir_w" class="form-control" required
                                        value="{{ $murid->tgl_lahir_w }}">
                                </div>

                                <div class="col-md-4">
                                    <label>Agama</label>
                                    <select name="agama_w" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($agama as $a)
                                            <option value="{{ $a->id }}"
                                                {{ $a->id == $murid->agama_w ? 'selected' : '' }}>
                                                {{ $a->nama_agama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>Pekerjaan</label>
                                    <select name="pkrjn_w" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($pekerjaan as $p)
                                            <option value="{{ $p->id }}"
                                                {{ $p->id == $murid->pkrjn_w ? 'selected' : '' }}>
                                                {{ $p->nama_pekerjaan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>Pendidikan</label>
                                    <select name="pndkn_w" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($pendidikan as $p)
                                            <option value="{{ $p->id }}"
                                                {{ $p->id == $murid->pndkn_w ? 'selected' : '' }}>
                                                {{ $p->jenjang }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>Penghasilan</label>
                                    <select name="penghasilan_w" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($penghasilan as $p)
                                            <option value="{{ $p->id }}"
                                                {{ $p->id == $murid->penghasilan_w ? 'selected' : '' }}>
                                                {{ $p->kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>No HP</label>
                                    <input type="number" name="hp_w" class="form-control" required
                                        value="{{ $murid->hp_w }}">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Alamat Lengkap</label>
                                    <input type="text" value="{{ old('almt_w', $murid->almt_w ?? '') }}" name="almt_w"
                                        class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Kode Pos</label>
                                    <input type="text" name="pos_w" value="{{ old('pos_w', $murid->pos_w ?? '') }}"
                                        class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Provinsi</label>
                                    <select name="prov_w" id="prov" class="form-select">
                                        <option value="">Pilih Provinsi</option>
                                        @foreach ($provinsi as $p)
                                            <option value="{{ $p->id }}"
                                                {{ old('prov_w', $murid->prov_w ?? '') == $p->id ? 'selected' : '' }}>
                                                {{ $p->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Kabupaten -->
                                <div class="col-md-4">
                                    <label class="form-label">Kabupaten</label>
                                    <select name="kab_w" id="kab" class="form-select">
                                        <option value="">Pilih Kabupaten</option>
                                    </select>
                                </div>

                                <!-- Kecamatan -->
                                <div class="col-md-4">
                                    <label class="form-label">Kecamatan</label>
                                    <select name="kec_w" id="kec" class="form-select">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </div>

                                <!-- Desa -->
                                <div class="col-md-4">
                                    <label class="form-label">Desa</label>
                                    <select name="desa_w" id="desa" class="form-select">
                                        <option value="">Pilih Desa</option>
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
                            <a href="{{ route('murid.edit.step3', [$murid->id_person, $st]) }}" class="btn btn-primary">
                                Sebelumnya
                            </a>

                            <!-- Kanan -->
                            <button type="submit" class="btn btn-primary">
                                Selesai
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
        $(document).ready(function() {

            let provinsiID = "{{ $murid->prov_w }}";
            let kabID = "{{ $murid->kab_w }}";
            let kecamatanID = "{{ $murid->kec_w }}";
            let desaID = "{{ $murid->desa_w }}";

            if (provinsiID) {
                $.ajax({
                    url: '/get-kota/' + provinsiID,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#kab').empty().append('<option value="">Pilih Kabupaten</option>');
                        $.each(data, function(key, value) {
                            $('#kab').append('<option value="' + value.id + '">' + value.name +
                                '</option>');
                        });
                        $('#kab').val(kabID);

                        if (kabID) {
                            $.ajax({
                                url: '/get-kecamatan/' + kabID,
                                type: 'GET',
                                dataType: 'json',
                                success: function(data) {
                                    $('#kec').empty().append(
                                        '<option value="">Pilih Kecamatan</option>'
                                    );
                                    $.each(data, function(key, value) {
                                        $('#kec').append('<option value="' +
                                            value.id + '">' + value.name +
                                            '</option>');
                                    });
                                    $('#kec').val(kecamatanID);
                                }
                            });

                            if (kecamatanID) {
                                $.ajax({
                                    url: '/get-desa/' + kecamatanID,
                                    type: 'GET',
                                    dataType: 'json',
                                    success: function(data) {
                                        $('#desa').empty().append(
                                            '<option value="">Pilih Desa</option>'
                                        );
                                        $.each(data, function(key, value) {
                                            $('#desa').append('<option value="' +
                                                value.id + '">' + value.name +
                                                '</option>');
                                        });
                                        $('#desa').val(desaID);
                                    }
                                });
                            }
                        }
                    }
                });
            }

            $('#prov').on('change', function() {
                var provinsiID = $(this).val();
                $('#kab').html('<option value="">Pilih Kabupaten</option>');
                $('#kec').html('<option value="">Pilih Kecamatan</option>');
                $('#desa').html('<option value="">Pilih Desa</option>');
                if (provinsiID) {
                    $.ajax({
                        url: '/get-kota/' + provinsiID,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#kab').empty().append(
                                '<option value="">Pilih Kabupaten</option>');
                            $.each(data, function(key, value) {
                                $('#kab').append('<option value="' + value.id +
                                    '">' +
                                    value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#kab').html('<option value="">Pilih Kabupaten</option>');
                }
            });

            $('#kab').on('change', function() {
                var kabID = $(this).val();
                $('#kec').html('<option value="">Pilih Kecamatan</option>');

                if (kabID) {
                    $.ajax({
                        url: '/get-kecamatan/' + kabID,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#kec').empty().append(
                                '<option value="">Pilih Kecamatan</option>');
                            $.each(data, function(key, value) {
                                $('#kec').append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#kec').html('<option value="">Pilih Kecamatan</option>');
                }
            });

            $('#kec').on('change', function() {
                var kecID = $(this).val();
                $('#desa').html('<option value="">Pilih Desa</option>');
                if (kecID) {
                    $.ajax({
                        url: '/get-desa/' + kecID,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#desa').empty().append(
                                '<option value="">Pilih Desa</option>');
                            $.each(data, function(key, value) {
                                $('#desa').append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#desa').html('<option value="">Pilih Desa</option>');
                }
            });
        });
    </script>
    <script>
        function copyAyah() {
            Swal.fire({
                title: 'Copy data dari Ayah?',
                text: "Data yang sudah diisi akan ter-overwrite",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, copy!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.querySelector('[name=nm_w]').value = "{{ $murid->nm_a }}";
                    document.querySelector('[name=nik_w]').value = "{{ $murid->nik_a }}";
                    document.querySelector('[name=tmpt_lahir_w]').value = "{{ $murid->tmpt_lahir_a }}";
                    document.querySelector('[name=tgl_lahir_w]').value = "{{ $murid->tgl_lahir_a }}";
                    document.querySelector('[name=agama_w]').value = "{{ $murid->agama_a }}";
                    document.querySelector('[name=pkrjn_w]').value = "{{ $murid->pkrjn_a }}";
                    document.querySelector('[name=pndkn_w]').value = "{{ $murid->pndkn_a }}";
                    document.querySelector('[name=penghasilan_w]').value = "{{ $murid->penghasilan_a }}";
                }
            });
        }

        function copyIbu() {
            Swal.fire({
                title: 'Copy data dari Ibu?',
                text: "Data yang sudah diisi akan ter-overwrite",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, copy!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.querySelector('[name=nm_w]').value = "{{ $murid->nm_i }}";
                    document.querySelector('[name=nik_w]').value = "{{ $murid->nik_i }}";
                    document.querySelector('[name=tmpt_lahir_w]').value = "{{ $murid->tmpt_lahir_i }}";
                    document.querySelector('[name=tgl_lahir_w]').value = "{{ $murid->tgl_lahir_i }}";
                    document.querySelector('[name=agama_w]').value = "{{ $murid->agama_i }}";
                    document.querySelector('[name=pkrjn_w]').value = "{{ $murid->pkrjn_i }}";
                    document.querySelector('[name=pndkn_w]').value = "{{ $murid->pndkn_i }}";
                    document.querySelector('[name=penghasilan_w]').value = "{{ $murid->penghasilan_i }}";
                }
            });
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
                    $('#loader').css('display', 'flex');
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
