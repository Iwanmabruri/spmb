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
                        <h1 class="mb-3 h2">Form Edit Data Murid Step 2</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
                                <li class="breadcrumb-item"><a href="#">Edit Step 1</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Step 2</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="progress mb-4">
                    <div class="progress-bar" style="width: 50%">Step 2</div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-truncate h5 mb-0" id="withLabel">ALAMAT LENGKAP - {{ $murid->nama }}</h3>
                    </div>
                    <div class="card-body">
                        <form id="formStep2" action="{{ route('murid.update.step2', $murid->id_person) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row g-3">

                                <div class="col-md-2">
                                    <label class="form-label">Kewarganegaraan</label>
                                    <select name="kewarganegaraan" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        @foreach (['WNI', 'WNA'] as $w)
                                            <option value="{{ $w }}"
                                                {{ old('kewarganegaraan', $murid->kewarganegaraan ?? '') == $w ? 'selected' : '' }}>
                                                {{ $w }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Alamat Lengkap</label>
                                    <input type="text" value="{{ old('alamat_lengkap', $murid->alamat_lengkap ?? '') }}"
                                        name="alamat_lengkap" class="form-control">
                                </div>

                                <!-- Provinsi -->
                                <div class="col-md-3">
                                    <label class="form-label">Provinsi</label>
                                    <select name="prov" id="prov" class="form-select">
                                        <option value="">Pilih Provinsi</option>
                                        @foreach ($provinsi as $p)
                                            <option value="{{ $p->id }}"
                                                {{ old('prov', $murid->prov ?? '') == $p->id ? 'selected' : '' }}>
                                                {{ $p->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Kabupaten -->
                                <div class="col-md-3">
                                    <label class="form-label">Kabupaten</label>
                                    <select name="kab" id="kab" class="form-select">
                                        <option value="">Pilih Kabupaten</option>
                                    </select>
                                </div>

                                <!-- Kecamatan -->
                                <div class="col-md-4">
                                    <label class="form-label">Kecamatan</label>
                                    <select name="kec" id="kec" class="form-select">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </div>

                                <!-- Desa -->
                                <div class="col-md-4">
                                    <label class="form-label">Desa</label>
                                    <select name="desa" id="desa" class="form-select">
                                        <option value="">Pilih Desa</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Kode Pos</label>
                                    <input type="text" name="pos" value="{{ old('pos', $murid->pos ?? '') }}"
                                        class="form-control" required>
                                </div>

                            </div>
                    </div>
                    <div class="card-footer border-top border-dashed">

                        <div class="d-flex justify-content-between align-items-center">

                            <!-- Kiri -->
                            <a href="{{ route('murid.edit.step1', $murid->id_person) }}" class="btn btn-secondary">
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
@push('scripts')
    <script>
        $(document).ready(function() {

            let provinsiID = "{{ $murid->prov }}";
            let kabID = "{{ $murid->kab }}";
            let kecamatanID = "{{ $murid->kec }}";
            let desaID = "{{ $murid->desa }}";

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
        document.querySelectorAll('input[type="text"]').forEach(function(input) {
            input.addEventListener('input', function() {
                this.value = this.value.toUpperCase();
            });
        });
    </script>
    <script>
        document.getElementById('formStep2').addEventListener('submit', function(e) {
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
                        text: 'Step 2 berhasil tersimpan',
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
