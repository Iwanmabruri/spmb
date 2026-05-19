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
                        <form action="#" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
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
                        <table class="table table-bordered table-striped">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>1</td>
                                <td>jddj</td>
                                <td>jfj</td>
                                <td>ldfd</td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
