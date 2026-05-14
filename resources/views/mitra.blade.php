@extends('template')
@section('title')
    Update Mitra | SPMB
@endsection
@section('konten')
    <div class="custom-container">

        {{-- HEADER --}}
        <div class="row">
            <div class="col-12 mb-4">
                <h1 class="h2 mb-2">Update Mitra Industri / Brand</h1>
                <p class="text-muted">Kelola logo mitra yang tampil di landing page</p>
            </div>
        </div>

        <div class="row">

            {{-- FORM INPUT --}}
            <div class="col-lg-4">

                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body">

                        <h5 class="mb-3">Tambah Mitra</h5>

                        <form action="{{ route('mitra.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- NAMA --}}
                            <div class="mb-3">
                                <label class="form-label">Nama Mitra</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>

                            {{-- STATUS --}}
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="1">Aktif</option>
                                    <option value="0">Nonaktif</option>
                                </select>
                            </div>

                            {{-- GAMBAR --}}
                            <div class="mb-3">
                                <label class="form-label">Logo</label>
                                <input type="file" name="image" class="form-control" required>

                                <small class="text-muted">
                                    Disarankan Format PNG transparan
                                </small>
                            </div>

                            <button class="btn btn-success w-100">
                                Simpan
                            </button>

                        </form>

                    </div>
                </div>

            </div>

            {{-- LIST MITRA --}}
            <div class="col-lg-8">

                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body">

                        <h5 class="mb-3">List Mitra</h5>

                        <div class="table-responsive">

                            <table class="table align-middle">

                                <thead>
                                    <tr>
                                        <th>Logo</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @forelse($mitra as $m)
                                        <tr>

                                            {{-- LOGO --}}
                                            <td>
                                                <img src="{{ asset('upload/mitra/' . $m->image) }}" width="80"
                                                    style="object-fit:contain"
                                                    onerror="this.src='{{ asset('assets/img/hastag.png') }}'">
                                            </td>

                                            {{-- NAMA --}}
                                            <td>{{ $m->nama }}</td>

                                            {{-- STATUS --}}
                                            <td>
                                                @if ($m->status == 1)
                                                    <span class="badge bg-success">Aktif</span>
                                                @else
                                                    <span class="badge bg-secondary">Nonaktif</span>
                                                @endif
                                            </td>

                                            {{-- AKSI --}}
                                            <td>

                                                {{-- EDIT MODAL --}}
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#edit{{ $m->id }}">
                                                    Edit
                                                </button>

                                                {{-- DELETE --}}
                                                <form action="{{ route('mitra.destroy', $m->id) }}" method="POST"
                                                    class="d-inline">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Hapus data ini?')">
                                                        Hapus
                                                    </button>

                                                </form>

                                            </td>

                                        </tr>

                                        {{-- MODAL EDIT --}}
                                        <div class="modal fade" id="edit{{ $m->id }}" tabindex="-1">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                    <form action="{{ route('mitra.update', $m->id) }}" method="POST"
                                                        enctype="multipart/form-data">

                                                        @csrf
                                                        @method('PUT')

                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Mitra</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <div class="modal-body">

                                                            <div class="mb-3">
                                                                <label>Nama</label>
                                                                <input type="text" name="nama" class="form-control"
                                                                    value="{{ $m->nama }}">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label>Status</label>
                                                                <select name="status" class="form-select">
                                                                    <option value="1"
                                                                        {{ $m->status == 1 ? 'selected' : '' }}>Aktif
                                                                    </option>
                                                                    <option value="0"
                                                                        {{ $m->status == 0 ? 'selected' : '' }}>Nonaktif
                                                                    </option>
                                                                </select>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label>Ganti Logo</label>
                                                                <input type="file" name="image" class="form-control">
                                                            </div>

                                                            <img src="{{ asset('upload/mitra/' . $m->image) }}"
                                                                width="120" style="object-fit:contain">

                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Tutup</button>
                                                            <button class="btn btn-success">Update</button>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                    @empty

                                        <tr>
                                            <td colspan="4" class="text-center text-muted py-4">
                                                Belum ada data mitra
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
