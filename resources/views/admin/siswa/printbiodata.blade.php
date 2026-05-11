<!DOCTYPE html>
<html>

<head>
    <title>Print Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 4px;
            vertical-align: top;
        }

        .center {
            text-align: center;
        }

        .bold {
            font-weight: bold;
        }

        .line {
            border-bottom: 2px solid black;
        }

        .foto {
            width: 113px;
            height: 151px;
            object-fit: cover;
            object-position: center;
            border: 4px solid rgb(124, 124, 124);
        }

        .section {
            font-weight: bold;
            padding-top: 10px;
        }
    </style>
</head>

<body onload="window.print()">

    {{-- HEADER --}}
    <table>
        <tr>
            <td width="80" class="center">
                <img src="{{ asset('images/logo.png') }}" width="70">
            </td>
            <td class="center">
                <div class="bold">YAYASAN NURUL ABROR AL-ROBBANIYIN</div>
                <div class="bold">SMK NURUL ABROR AL-ROBBANIYIN</div>
                <div style="font-size:11px;">Alamat Sekolah</div>
            </td>
        </tr>
    </table>

    <table class="line">
        <tr>
            <td></td>
        </tr>
    </table>

    <table>
        <tr>
            <td class="center bold">FORMULIR PENDAFTARAN SISWA BARU</td>
        </tr>
    </table>

    <table class="line">
        <tr>
            <td></td>
        </tr>
    </table>

    {{-- FOTO + DATA ATAS --}}
    <table>
        <tr>
            <td width="120">
                @php
                    $foto = $murid->foto_warna_santri
                        ? asset('storage/' . $murid->foto_warna_santri)
                        : asset('images/default-user.png');
                    // $murid->foto && file_exists(public_path('storage/' . $murid->foto))
                    //     ? asset('storage/' . $murid->foto)
                    //     : asset('images/default-user.png');
                @endphp
                <img src="{{ $foto }}" class="foto">
            </td>

            <td>
                <table>
                    <tr>
                        <td width="200">Nama</td>
                        <td>: {{ $murid->nama }}</td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>: {{ $murid->nisn }}</td>
                    </tr>
                    <tr>
                        <td>Nomor Ijazah</td>
                        <td>: {{ $murid->nomor_ijazah }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>: {{ $murid->alamat_lengkap }}</td>
                    </tr>
                    <tr>
                        <td>Program / Jurusan</td>
                        <td>: {{ $murid->jurusan->program_keahlian ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>: {{ $murid->asal_sekolah }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Pendaftaran</td>
                        <td>: {{ $murid->jenis_daftar }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table class="line">
        <tr>
            <td></td>
        </tr>
    </table>

    {{-- DATA DIRI --}}
    <table>
        <tr>
            <td class="section">DATA DIRI MURID</td>
        </tr>
    </table>

    <table>
        <tr>
            <td width="50%">
                <table>
                    <tr>
                        <td width="180">Nomor KK</td>
                        <td>: {{ $murid->no_kk }}</td>
                    </tr>
                    <tr>
                        <td>Nomor Akta</td>
                        <td>: {{ $murid->no_akta }}</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>: {{ $murid->tempat_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: {{ $murid->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td>Status Keluarga</td>
                        <td>: {{ $murid->dlm_klrg }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah Saudara</td>
                        <td>: {{ $murid->sdr }}</td>
                    </tr>
                    <tr>
                        <td>Tinggi Badan</td>
                        <td>: {{ $murid->tinggi_badan }} CM</td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>: {{ $murid->hoby }}</td>
                    </tr>
                </table>
            </td>

            <td width="50%">
                <table>
                    <tr>
                        <td width="180">NIK</td>
                        <td>: {{ $murid->nik }}</td>
                    </tr>
                    <tr>
                        <td>NIUP</td>
                        <td>: {{ $murid->niup }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>: {{ $murid->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>: {{ $murid->agama->nama_agama ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td>Anak Ke</td>
                        <td>: {{ $murid->ank_ke }}</td>
                    </tr>
                    <tr>
                        <td>Tinggal Di</td>
                        <td>: {{ $murid->tinggal_di }}</td>
                    </tr>
                    <tr>
                        <td>Berat Badan</td>
                        <td>: {{ $murid->berat_badan }} KG</td>
                    </tr>
                    <tr>
                        <td>Cita-cita</td>
                        <td>: {{ $murid->cita_cita }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table class="line">
        <tr>
            <td></td>
        </tr>
    </table>

    {{-- ORANG TUA & WALI --}}
    <table>
        <tr>
            <td class="section">DATA ORANG TUA & WALI</td>
        </tr>
    </table>

    <table>
        <tr>
            <td width="50%">
                <b>DATA AYAH</b>
                <table>
                    <tr>
                        <td width="150">Nama</td>
                        <td>: {{ $murid->nm_a }}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>: {{ $murid->nik_a }}</td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>: {{ $murid->pndkn_a }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>: {{ $murid->pkrjn_a }}</td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td>: {{ $murid->penghasilan_a }}</td>
                    </tr>
                </table>

                <br>

                <b>DATA IBU</b>
                <table>
                    <tr>
                        <td width="150">Nama</td>
                        <td>: {{ $murid->nm_i }}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>: {{ $murid->nik_i }}</td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>: {{ $murid->pndkn_i }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>: {{ $murid->pkrjn_i }}</td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td>: {{ $murid->penghasilan_i }}</td>
                    </tr>
                </table>
            </td>

            <td width="50%">
                <b>DATA WALI</b>
                <table>
                    <tr>
                        <td width="150">Nama</td>
                        <td>: {{ $murid->nm_w ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>: {{ $murid->nik_w ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>: {{ $murid->pndkn_w }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>: {{ $murid->pkrjn_w ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td>: {{ $murid->penghasilan_w ?? '-' }}</td>
                    </tr>
                </table>

                <br>

                <b>KELENGKAPAN BERKAS</b>

                <table>
                    <tr>
                        <td>[{{ $murid->berkas_kk ? '✔' : ' ' }}] Fotokopi KK</td>
                    </tr>
                    <tr>
                        <td>[{{ $murid->berkas_akta ? '✔' : ' ' }}] Fotokopi Akta</td>
                    </tr>
                    <tr>
                        <td>[{{ $murid->berkas_ijazah ? '✔' : ' ' }}] Ijazah</td>
                    </tr>
                    <tr>
                        <td>[{{ $murid->berkas_foto ? '✔' : ' ' }}] Pas Foto</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table class="line">
        <tr>
            <td></td>
        </tr>
    </table>

    {{-- TTD --}}
    <table style="margin-top:30px;">
        <tr>
            <td width="50%" class="center"> <br><br>
                Pendaftar <br><br><br><br>
                ( {{ $murid->nama }} )
            </td>

            <td width="50%" class="center">
                Banyuwangi, {{ date('d M Y') }} <br><br>
                Panitia <br><br><br><br>
                ( __________________ )
            </td>
        </tr>
    </table>

</body>

</html>
