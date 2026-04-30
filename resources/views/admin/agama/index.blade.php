@extends('template')
@section('title')
    Page Agama | SPMB
@endsection
@section('konten')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show auto-hide">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-8 d-md-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="mb-3 h2">Agama</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Agama</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalTambah">Add New
                            Agama</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-truncate h5 mb-0" id="withLabel">List Data Agama</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 table-centered table-hover" data-check-container>
                                <thead class="sticky-top">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Agama</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama_agama }}</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-outline-warning btn-icon btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalEdit{{ $item->id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415" />
                                                            <path d="M16 5l3 3" />
                                                        </svg>
                                                    </button>

                                                    <form action="{{ route('agama.delete', $item->id) }}" method="post">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-outline-danger btn-icon btn-sm"
                                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M4 7l16 0" />
                                                                <path d="M10 11l0 6" />
                                                                <path d="M14 11l0 6" />
                                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Data tidak ditemukan</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer border-top border-dashed d-flex flex-md-row flex-column ">
                        <div class="d-flex flex-column flex-md-row gap-4">
                            <div class="d-flex align-items-center gap-2">
                                <label class="form-label text-nowrap mb-0">Total Data : {{ $data->count() }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalTambah" tabindex="-1">
        <div class="modal-dialog">
            <form action="{{ route('agama.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data Agama</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <input type="text" name="nama_agama" class="form-control" placeholder="Nama Agama">
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @foreach ($data as $item)
        <div class="modal fade" id="modalEdit{{ $item->id }}" tabindex="-1">
            <div class="modal-dialog">
                <form action="{{ route('agama.update', $item->id) }}" method="POST">
                    @csrf

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Agama</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <input type="text" name="nama_agama" value="{{ $item->nama_agama }}"
                                class="form-control">
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                document.querySelectorAll('.auto-hide').forEach(function(el) {
                    el.style.transition = "opacity 0.5s ease";
                    el.style.opacity = "0";

                    setTimeout(() => el.remove(), 500);
                });
            }, 3000);
        });
    </script>
@endpush
