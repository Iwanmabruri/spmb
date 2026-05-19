@extends('template')
@section('title')
    Tambah Users | SPMB
@endsection
@section('konten')
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-5">
                    <h1 class="mb-3 h2">Users</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Form Add User -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <strong>Tambah User</strong>
                    </div>
                    <div class="card-body">
                        <form id="formTambahUser" data-parsley-validate>
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select" id="role" name="role" required>
                                    <option value="">Pilih Role</option>
                                    <option value="petugas">Petugas</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Tambah User</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- List Users -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <strong>Daftar Users</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                paging: true,
                lengthChange: false,
                searching: true,
                ordering: false,
                info: true,
                autoWidth: false,
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: "{{ route('user.data.get') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'role'
                    },
                    {
                        data: 'action'
                    }
                ]
            });

            $('#formTambahUser').on('submit', function(e) {
                e.preventDefault();
                $(this).parsley().validate();
                if ($(this).parsley().isValid()) {
                    $('#loader').css('display', 'flex');
                    $.ajax({
                        url: "{{ route('create_user') }}",
                        type: "POST",
                        data: $(this).serialize(),
                        success: function(response) {
                            $('#loader').css('display', 'none');
                            if (response.status == 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.message,
                                }).then(() => {
                                    location.reload();
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

            $('#datatable').on("click", '.btHapus', function() {
                var id = $(this).data("id");
                Swal.fire({
                    title: "Anda Yakin?",
                    icon: 'question',
                    text: 'Apakah anda yakin menghapus data ini?',
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "Hapus",
                    denyButtonText: `Tidak`
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $('#loader').css('display', 'flex');
                        $.ajax({
                            url: "{{ route('user.delete') }}",
                            type: "POST",
                            data: {
                                _token: "{{ csrf_token() }}",
                                id: id
                            },
                            success: function(response) {
                                $('#loader').css('display', 'none');
                                if (response.status == 'success') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil',
                                        text: response.message,
                                    }).then(() => {
                                        location.reload();
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
                    } else if (result.isDenied) {
                        Swal.fire({
                            title: "Terimakasih",
                            icon: 'success',
                            text: 'Anda batal menghapus data ini'
                        });
                    }
                });
            });
        })
    </script>
@endpush
