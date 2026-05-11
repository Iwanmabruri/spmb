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
                <form action="{{ route('store.jurusan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card card-lg">
                        <div class="card-header">
                            <h3 class="text-truncate h5 mb-0" id="withLabel">Form Add Jurusan</h3>
                        </div>
                        <div class="card-body">

                            <div class="mb-2">
                                <label for="inputText" class="form-label">Bidang Keahlian</label>
                                <input type="text" class="form-control" name="bidang_keahlian"
                                    placeholder="Input Bidang Keahlian" required />
                            </div>

                            <div class="mb-2">
                                <label for="inputText" class="form-label">Program Keahlian</label>
                                <input type="text" class="form-control" name="program_keahlian"
                                    placeholder="Input Program Keahlian" required />
                            </div>

                            <div class="mb-2">
                                <label for="inputText" class="form-label">Konsentrasi Keahlian</label>
                                <input type="text" class="form-control" name="kons_keahlian"
                                    placeholder="Input Konsentrasi Keahlian" required />
                            </div>

                            <div class="mb-2">
                                <label for="inputText" class="form-label">Deskripsi</label>
                                <input type="textarea" class="form-control" name="deskripsi" placeholder="Input Deskripsi"
                                    required />
                            </div>

                            <div class="mb-2">
                                <label for="inputText" class="form-label">Foto</label>
                                <input type="file" class="form-control" name="foto" required />
                            </div>

                            <div class="">
                                <label for="selectOption" class="form-label">Status</label>
                                <select class="form-select" name="status" aria-label=" label select example">
                                    <option selected>Pilih Status</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Non Aktif">Non Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div>
                                <a href="#" class="btn btn-md btn-danger"> Batal </a>
                                <button type="submit" class="btn btn-md btn-primary float-end">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
