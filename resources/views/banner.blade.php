@extends('template')
@section('title')
    Update Banner | SPMB
@endsection
@section('konten')
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-5">
                    <h1 class="mb-3 h2">Update Banner Landing Page</h1>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- FORM -->
            <div class="col-lg-5">

                <div class="card border-0 shadow-sm rounded-4">

                    <div class="card-body">

                        <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            {{-- JUDUL --}}
                            <div class="mb-3">
                                <label class="form-label">
                                    Judul Banner
                                </label>

                                <textarea name="judul" rows="4" class="form-control" placeholder="Masukkan judul banner" required></textarea>
                            </div>

                            {{-- DESKRIPSI --}}
                            <div class="mb-3">
                                <label class="form-label">
                                    Deskripsi Banner
                                </label>

                                <textarea name="deskripsi" rows="5" class="form-control" placeholder="Masukkan deskripsi banner" required></textarea>
                            </div>

                            {{-- GAMBAR --}}
                            <div class="mb-4">
                                <label class="form-label">
                                    Upload Gambar
                                </label>

                                <input type="file" name="gambar" class="form-control" required>
                                <small class="text-muted">
                                    <i>Gambar harus berukuran 1361 x 901 pixel</i>
                                </small>
                            </div>

                            {{-- BUTTON --}}
                            <button type="submit" class="btn btn-success w-100">

                                Simpan Banner
                            </button>

                        </form>

                    </div>

                </div>

            </div>

            <!-- LIST DATA -->
            <div class="col-lg-7">

                <div class="card border-0 shadow-sm rounded-4">

                    <div class="card-body">

                        <h5 class="mb-4">
                            Data Banner
                        </h5>

                        <div class="table-responsive">

                            <table class="table align-middle">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th width="80">Gambar</th>
                                        <th>Judul</th>
                                        <th width="120">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @forelse ($banner as $b)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            {{-- GAMBAR --}}
                                            <td>
                                                <img src="{{ asset('upload/banner/' . $b->gambar) }}" class="rounded-3"
                                                    width="70">
                                            </td>

                                            {{-- JUDUL --}}
                                            <td>
                                                <h6 class="mb-1">
                                                    {!! $b->judul !!}
                                                </h6>

                                                <small class="text-muted">
                                                    {{ Str::limit($b->deskripsi, 80) }}
                                                </small>
                                            </td>

                                            {{-- AKSI --}}
                                            <td>

                                                <div class="d-flex gap-2">

                                                    {{-- EDIT --}}
                                                    <button type="button" class="btn btn-sm btn-warning"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editBanner{{ $b->id }}">

                                                        Edit
                                                    </button>

                                                    {{-- HAPUS --}}
                                                    <form action="{{ route('banner.destroy', $b->id) }}" method="POST"
                                                        onsubmit="return confirm('Yakin ingin menghapus banner ini ?')">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-sm btn-danger">

                                                            Hapus
                                                        </button>

                                                    </form>

                                                </div>

                                            </td>

                                        </tr>
                                        <!-- MODAL EDIT -->
                                        <div class="modal fade" id="editBanner{{ $b->id }}" tabindex="-1"
                                            aria-hidden="true">

                                            <div class="modal-dialog modal-lg modal-dialog-centered">

                                                <div class="modal-content border-0 rounded-4">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title">
                                                            Edit Banner
                                                        </h5>

                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <form action="{{ route('banner.update', $b->id) }}" method="POST"
                                                        enctype="multipart/form-data">

                                                        @csrf
                                                        @method('PUT')

                                                        <div class="modal-body">

                                                            {{-- JUDUL --}}
                                                            <div class="mb-3">
                                                                <label class="form-label">
                                                                    Judul Banner
                                                                </label>

                                                                <textarea name="judul" rows="3" class="form-control">{{ $b->judul }}</textarea>
                                                            </div>

                                                            {{-- DESKRIPSI --}}
                                                            <div class="mb-3">
                                                                <label class="form-label">
                                                                    Deskripsi Banner
                                                                </label>

                                                                <textarea name="deskripsi" rows="5" class="form-control">{{ $b->deskripsi }}</textarea>
                                                            </div>

                                                            {{-- GAMBAR --}}
                                                            <div class="mb-3">
                                                                <label class="form-label">
                                                                    Gambar Banner
                                                                </label>

                                                                <input type="file" name="gambar" class="form-control">
                                                                <small class="text-muted">
                                                                    <i>Gambar harus berukuran 1361 x 901 pixel</i>
                                                                </small>

                                                                <div class="mt-3">
                                                                    <img src="{{ asset('upload/banner/' . $b->gambar) }}"
                                                                        width="200" class="rounded-3 shadow-sm">
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="modal-footer">

                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">

                                                                Batal
                                                            </button>

                                                            <button type="submit" class="btn btn-success">

                                                                Update Banner
                                                            </button>

                                                        </div>

                                                    </form>

                                                </div>

                                            </div>

                                        </div>

                                    @empty

                                        <tr>
                                            <td colspan="3" class="text-center text-muted py-4">
                                                Data banner masih kosong
                                            </td>
                                        </tr>
                                    @endforelse

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
