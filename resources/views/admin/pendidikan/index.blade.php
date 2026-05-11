@extends('template')
@section('title')
    Page Pendidikan | SPMB
@endsection
@section('konten')
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-8 d-md-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="mb-3 h2">Pendidikan</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pendidikan</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalTambah">Add New
                            Pendidikan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-truncate h5 mb-0" id="withLabel">List Data Pendidikan</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 table-centered table-hover" data-check-container>
                                <thead class="sticky-top">
                                    <tr>
                                        <th>#</th>
                                        <th>Jenjang</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->jenjang }}</td>
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

                                                    <button type="button"
                                                        class="btn btn-outline-danger btn-icon btn-sm btnDelete"
                                                        data-id="{{ $item->id }}">
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
            <form action="{{ route('pendidikan.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data Pendidikan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <input type="text" name="jenjang" class="form-control" placeholder="Jenjang Pendidikan">
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
                <form action="{{ route('pendidikan.update', $item->id) }}" method="POST">
                    @csrf

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Data Pendidikan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <input type="text" name="jenjang" value="{{ $item->jenjang }}" class="form-control">
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
        document.addEventListener('DOMContentLoaded', function() {

            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: "{{ session('success') }}",
                    timer: 2500,
                    showConfirmButton: false
                });
            @endif

            @if (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: "{{ session('error') }}"
                });
            @endif

        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.btnDelete').forEach(button => {
                button.addEventListener('click', function() {
                    let id = this.dataset.id;

                    Swal.fire({
                        title: 'Yakin?',
                        text: "Data tidak bisa dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {

                            let form = document.createElement('form');
                            form.method = 'POST';
                            form.action = '/admin/pendidikan/delete/' + id;

                            let csrf = document.createElement('input');
                            csrf.type = 'hidden';
                            csrf.name = '_token';
                            csrf.value = '{{ csrf_token() }}';

                            form.appendChild(csrf);
                            document.body.appendChild(form);
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endpush
