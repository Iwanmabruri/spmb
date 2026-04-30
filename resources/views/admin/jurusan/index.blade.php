@extends('template')
@section('title')
    Page Jurusan | SPMB
@endsection
@section('konten')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show auto-hide">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show auto-hide">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    <div class="custom-container">
        {{-- <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-5">
                    <h1 class="mb-3 h2">Page Jurusan</h1>
                </div>
            </div>
        </div> --}}
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
                                <li class="breadcrumb-item active" aria-current="page">Jurusan</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="{{ route('create.jurusan') }}" class="btn btn-dark"> Add New Jurusan</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <!-- card -->
                <div class="card card-lg">
                    <div class="card-header border-bottom-0">
                        <h3 class="text-truncate h5 mb-0" id="withLabel">List Data Jurusan</h3>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 table-centered table-hover" data-check-container>
                                <thead class="sticky-top">
                                    <tr>
                                        <th>#</th>
                                        <th>Bidang Keahlian</th>
                                        <th>Program Keahlian</th>
                                        <th>Konsentrasi Keahlian</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @forelse ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="order_name">{{ $item->bidang_keahlian }}</td>
                                            <td class="order_name">{{ $item->program_keahlian }}</td>
                                            <td class="order_name">{{ $item->kons_keahlian }}</td>
                                            <td>
                                                @if ($item->status == 'Aktif')
                                                    <span class="badge bg-success">Aktif</span>
                                                @else
                                                    <span class="badge bg-danger">Non Aktif</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('edit.jurusan', $item->id) }}"
                                                    class="btn btn-outline-warning btn-icon btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                        <path
                                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415" />
                                                        <path d="M16 5l3 3" />
                                                    </svg>
                                                </a>
                                                <form action="{{ route('destroy.jurusan', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-icon btn-sm"
                                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"
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
                                <label class="form-label text-nowrap mb-0">Total Data : {{ $total }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
