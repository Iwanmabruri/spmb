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
                            <table class="table text-nowrap mb-0 table-centered table-hover" data-check-container>
                                <thead class="sticky-top">
                                    <tr>
                                        <th>#</th>
                                        <th>NISN</th>
                                        <th>Nama Lengkap</th>
                                        <th>Asal Sekolah</th>
                                        <th>Tgl Daftar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($murid as $m)
                                    <form id="delete-form-{{ $m->id_person }}"
                                        action="{{ route('murid.destroy', $m->id_person) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <tbody>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $m->nisn }}</td>
                                            <td>{{ $m->nama }}</td>
                                            <td>{{ $m->asal_sekolah }}</td>
                                            <td>{{ $m->tgl_daftar }}</td>
                                            <td>
                                                <!-- DETAIL -->
                                                <a href="{{ route('murid.detail', $m->id_person) }}"
                                                    class="btn btn-info btn-icon btn-sm rounded-circle text-white"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">

                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-eye" width="16"
                                                        height="16" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">

                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                        <path
                                                            d="M2 12c2.5 -4 6.5 -6 10 -6s7.5 2 10 6c-2.5 4 -6.5 6 -10 6s-7.5 -2 -10 -6" />
                                                    </svg>

                                                </a>

                                                <!-- EDIT -->
                                                <a href="{{ route('murid.edit.step1', $m->id_person) }}"
                                                    class="btn btn-warning btn-icon btn-sm rounded-circle text-white"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">

                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-edit" width="16"
                                                        height="16" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">

                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                        <path
                                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                        <path d="M16 5l3 3" />
                                                    </svg>

                                                </a>

                                                <!-- UPLOAD -->
                                                <a href="#" class="btn btn-primary btn-icon btn-sm rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Upload Berkas">

                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-upload" width="16"
                                                        height="16" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">

                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                                        <path d="M7 9l5 -5l5 5" />
                                                        <path d="M12 4l0 12" />

                                                    </svg>

                                                </a>

                                                <!-- PRINT -->
                                                <a href="{{ route('murid.print', $m->id_person) }}" target="_blank"
                                                    class="btn btn-success btn-icon btn-sm rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Print">

                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-printer" width="16"
                                                        height="16" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">

                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M17 17h-10v4h10v-4z" />
                                                        <path d="M7 17v-6h10v6" />
                                                        <path d="M17 11v-4h-10v4" />
                                                        <path d="M5 11h14a2 2 0 0 1 2 2v2h-4" />
                                                        <path d="M3 13v-2a2 2 0 0 1 2 -2h2" />

                                                    </svg>

                                                </a>

                                                <!-- DELETE -->
                                                <button type="button" class="btn btn-danger btn-icon btn-sm rounded-circle"
                                                    onclick="hapusData({{ $m->id_person }})" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Hapus">

                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-trash" width="16"
                                                        height="16" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">

                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 7l16 0" />
                                                        <path d="M10 11l0 6" />
                                                        <path d="M14 11l0 6" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7l0 -3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1l0 3" />
                                                    </svg>

                                                </button>
                                            </td>
                                        </tbody>
                                        <div class="modal fade" id="modalUpload{{ $m->id_person }}" tabindex="-1">
                                            <div class="modal-dialog modal-lg">
                                                <form action="{{ route('murid.upload.berkas', $m->id_person) }}"
                                                    method="POST" enctype="multipart/form-data" class="formUpload">
                                                    @csrf

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Upload Berkas - {{ $m->nama }}
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="row g-3">

                                                                <div class="col-md-4">
                                                                    <label>Foto Santri</label>
                                                                    <input type="file" name="foto_warna_santri"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label>Foto Wali</label>
                                                                    <input type="file" name="foto_wali_santri_warna"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label>Scan KK</label>
                                                                    <input type="file" name="foto_scan_kk"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label>Scan Akta</label>
                                                                    <input type="file" name="foto_scan_akta"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label>SKCK</label>
                                                                    <input type="file" name="foto_scan_skck"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label>Surat Sehat</label>
                                                                    <input type="file" name="foto_scan_ket_sehat"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label>Ijazah</label>
                                                                    <input type="file" name="foto_ijazah"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label>KIP</label>
                                                                    <input type="file" name="file_kip"
                                                                        class="form-control">
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success">Upload</button>
                                                        </div>

                                                    </div>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-footer border-top border-dashed d-flex flex-md-row flex-column ">
                        <div class="d-flex flex-column flex-md-row gap-4">
                            <div class="d-flex align-items-center gap-2">
                                <label class="form-label text-nowrap mb-0">Total Data : </label>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
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
        document.querySelectorAll('[data-tooltip="true"]').forEach(function(el) {
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
            $.ajax({
                type: 'POST',
                url: "{{ route('murid.store') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function(hasil) {

                    let url = "{{ route('murid.step1', ['id' => ':id']) }}";

                    url = url.replace(':id', hasil);

                    window.location.href = url;
                }
            });
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
