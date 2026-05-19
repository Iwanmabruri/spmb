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
                                <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
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
                    <div class="card-header">
                        <h3 class="text-truncate h5 mb-0" id="withLabel">List Data Murid Baru</h3>
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
