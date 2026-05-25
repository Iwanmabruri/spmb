@extends('template')
@section('title')
    Page Murid | SPMB
@endsection
@section('CSSManual')
    .custom-tooltip {
    position: absolute;
    background: #111;
    color: #fff;
    padding: 6px 10px;
    font-size: 12px;
    border-radius: 6px;
    white-space: nowrap;
    z-index: 9999;

    opacity: 0;
    transform: translateY(5px);
    transition: all 0.2s ease;
    }

    /* animasi muncul */
    .custom-tooltip.show {
    opacity: 1;
    transform: translateY(0);
    }

    /* panah */
    .custom-tooltip::after {
    content: "";
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    border-width: 5px;
    border-style: solid;
    border-color: #111 transparent transparent transparent;
    }
@endsection
@section('konten')
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-8 d-md-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="mb-3 h2">Data Murid Baru</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Murid</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <botton id="bt_tambah" class="btn btn-dark"> Add New Murid</botton>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div
                        class="card-header border-bottom d-flex justify-content-between align-items-center flex-wrap gap-2">

                        <h3 class="text-truncate h5 mb-0" id="withLabel">
                            List Data Murid Baru
                        </h3>

                        <div class="d-flex gap-2">

                            {{-- EXPORT EXCEL --}}
                            <a href="{{ route('siswa.export.excel') }}" class="btn btn-outline-success btn-sm">

                                <i class="ti ti-file-spreadsheet me-1"></i>
                                Export Excel

                            </a>

                            {{-- EXPORT PDF --}}
                            {{-- <a href="{{ route('siswa.export.pdf') }}" class="btn btn-outline-danger btn-sm">

                                <i class="ti ti-file-type-pdf me-1"></i>
                                Export PDF

                            </a> --}}

                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 table-centered table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NISN</th>
                                        <th>Nama Lengkap</th>
                                        <th>Asal Sekolah</th>
                                        <th>Action</th>
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
    </div>
    <div class="modal fade" id="modalUpload" tabindex="-1">
        <div class="modal-dialog modal-lg">

            <form action="{{ route('murid.upload.berkas') }}" method="POST" enctype="multipart/form-data"
                class="formUpload" id="formUpload">

                @csrf
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">
                        </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row g-3">

                            <input type="hidden" name="id_person" id="id" value="">
                            <div class="col-md-4">
                                <label>Pas Foto Murid</label>
                                <input type="file" name="foto_warna_santri" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label>Scan KK Terbaru</label>
                                <input type="file" name="foto_scan_kk" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label>Scan Akta Kelahiran</label>
                                <input type="file" name="foto_scan_akta" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label>Surat Keterangan Lulus</label>
                                <input type="file" name="foto_skl" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label>Ijazah</label>
                                <input type="file" name="foto_ijazah" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label>Surat Keterangan Kelakuan Baik</label>
                                <input type="file" name="foto_scan_skck" class="form-control">
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            Upload
                        </button>
                    </div>

                </div>

            </form>

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
                ajax: "{{ route('murid.data') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nisn'
                    },
                    {
                        data: 'nama'
                    },
                    {
                        data: 'asal_sekolah'
                    },
                    {
                        data: 'action'
                    }
                ]
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
                            url: "{{ route('murid.hapus') }}",
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

            $('#datatable').on("click", '.btUpload', function() {
                let id = $(this).data('id');
                $.get("{{ route('murid.berkas', ':id') }}".replace(':id', id), function(data) {
                    $('.modal-title').text('Upload Berkas -' + data.nama);
                    $('#id').val(data.id_person);
                    $('#modalUpload').modal('show');
                });
            });

            $('#formUpload').on('submit', function() {
                $('#loader').css('display', 'flex');
            });
        });
        document.querySelectorAll('.texttooltip').forEach(function(el) {
            let tooltip;

            el.addEventListener('mouseenter', function() {
                let id = el.getAttribute('data-template');
                let content = document.getElementById(id).innerHTML;

                tooltip = document.createElement('div');
                tooltip.className = 'custom-tooltip';
                tooltip.innerHTML = content;

                document.body.appendChild(tooltip);

                let rect = el.getBoundingClientRect();

                let top = rect.top + window.scrollY - tooltip.offsetHeight - 10;
                let left = rect.left + window.scrollX + (rect.width / 2) - (tooltip.offsetWidth / 2);

                tooltip.style.top = top + 'px';
                tooltip.style.left = left + 'px';

                // trigger animasi
                setTimeout(() => tooltip.classList.add('show'), 10);
            });

            el.addEventListener('mouseleave', function() {
                if (tooltip) {
                    tooltip.classList.remove('show');

                    setTimeout(() => {
                        tooltip.remove();
                        tooltip = null;
                    }, 200);
                }
            });
        });
    </script>
    <script>
        document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function(el) {
            new bootstrap.Tooltip(el);
        });
    </script>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
                timer: 2000,
                showConfirmButton: false
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '{{ session('error') }}'
            });
        @endif
    </script>
    <script>
        document.querySelectorAll('.formUpload').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                let currentForm = this;

                Swal.fire({
                    title: 'Upload berkas?',
                    text: 'Pastikan file sudah benar',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, upload!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        currentForm.submit();
                    }
                });
            });
        });
    </script>

    <script>
        $("#bt_tambah").click(function() {
            Swal.fire({
                title: 'Peringatan!',
                text: "Fitur ini hanya digunakan saat fitur ambil data tidak berfungsi, pastikan data yang akan ditambahkan belum ada di database!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, lanjutkan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#loader').css('display', 'flex');
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('murid.store') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function(hasil) {
                            $('#loader').css('display', 'none');
                            let url = "/admin/murid/edit/step1/" + hasil + "/t";

                            window.location.href = url;
                        }
                    });
                }
            })
        });
    </script>
    <script>
        function hapusData(id) {

            Swal.fire({
                title: 'Yakin?',
                text: "Data yang dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {

                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }

            });
        }
    </script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
                timer: 2000,
                showConfirmButton: false
            });
        </script>
    @endif
@endpush
