@extends('template')
@section('title')
    Form Jurusan | SPMB
@endsection
@section('konten')
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-8 d-md-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="mb-3 h2">Jurusan</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                                <li class="breadcrumb-item"><a href="#">Jurusan</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('update.jurusan', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card card-lg">
                        <div class="card-header">
                            <h3 class="text-truncate h5 mb-0" id="withLabel">Form Add Jurusan</h3>
                        </div>
                        <div class="card-body">

                            <div class="mb-2">
                                <label for="inputText" class="form-label">Bidang Keahlian</label>
                                <input type="text" class="form-control" name="bidang_keahlian"
                                    value="{{ $data->bidang_keahlian }}" required />
                            </div>

                            <div class="mb-2">
                                <label for="inputText" class="form-label">Program Keahlian</label>
                                <input type="text" class="form-control" name="program_keahlian"
                                    value="{{ $data->program_keahlian }}" required />
                            </div>

                            <div class="mb-2">
                                <label for="inputText" class="form-label">Konsentrasi Keahlian</label>
                                <input type="text" class="form-control" name="kons_keahlian"
                                    value="{{ $data->kons_keahlian }}" required />
                            </div>

                            <div class="mb-2">
                                <label for="inputText" class="form-label">Deskripsi</label>
                                <input type="textarea" class="form-control" name="deskripsi" placeholder="Input Deskripsi"
                                    value="{{ $data->deskripsi }}" required />
                            </div>

                            <div class="mb-2">
                                <label class="form-label fw-bold">Foto Jurusan</label>

                                {{-- Preview Foto Lama --}}
                                @if ($data->foto)
                                    <div class="mb-2">
                                        <small class="text-muted d-block mb-1">Foto saat ini:</small>
                                        <img src="{{ asset('storage/' . $data->foto) }}" class="img-thumbnail"
                                            style="height: 150px;">
                                    </div>
                                @endif

                                <input type="file" name="foto"
                                    class="form-control @error('foto') is-invalid @enderror">
                                <div class="form-text">Biarkan kosong jika tidak ingin mengubah foto.</div>
                                @error('foto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="">
                                <label for="selectOption" class="form-label">Status</label>
                                <select class="form-select" name="status" aria-label=" label select example">
                                    <option selected>Pilih Status</option>
                                    <option value="Aktif" {{ $data->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="Non Aktif" {{ $data->status == 'Non Aktif' ? 'selected' : '' }}>Non Aktif
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div>
                                <a href="{{ route('jurusan') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary float-end">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script></script>
@endpush
