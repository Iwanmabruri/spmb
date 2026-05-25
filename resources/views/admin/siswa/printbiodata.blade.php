<!DOCTYPE html>
<html>

<head>
    <title>Print Biodata</title>

    <style>
        @page {
            size: A4;
            margin: 5mm 10mm;
        }

        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 12px;
            color: #000;
            margin: 0;
        }

        .kop {
            width: 100%;
            margin-bottom: 2px;
        }

        .judul {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin: 5px 0;
            text-transform: uppercase;
        }

        .line {
            border-bottom: 2px solid #000;
            margin: 5px 0 10px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 2px 5px;
            vertical-align: top;
        }

        .section {
            background: #efefef;
            font-weight: bold;
            font-size: 13px;
            padding: 5px 8px;
            border: 1px solid #ccc;
            margin-top: 8px;
            margin-bottom: 5px;
        }

        .foto {
            width: 100px;
            height: 135px;
            object-fit: cover;
            border: 2px solid #666;
            padding: 2px;
        }

        .label {
            width: 150px;
        }

        .center {
            text-align: center;
        }

        .subjudul {
            font-size: 17px;
            font-weight: bold;
            padding: 2px 0;
            margin-bottom: 3px;
        }

        .ttd {
            margin-top: 30px;
        }

        .ttd td {
            padding-top: 10px;
        }

        br {
            line-height: 8px;
        }

        .page-break {
            page-break-before: always;
        }

        .halaman-lanjutan {
            font-size: 16px;
        }
    </style>
</head>

<body onload="window.print()">

    {{-- KOP --}}
    <img src="{{ asset('kop2.jpeg') }}" class="kop">

    <div class="judul">
        FORMULIR PENDAFTARAN SISWA BARU
    </div>

    <div class="line"></div>

    {{-- FOTO + DATA --}}
    <table>
        <tr>
            <td width="130">

                @php
                    $foto = $murid->foto_warna_santri
                        ? asset($murid->foto_warna_santri)
                        : asset('images/default-user.png');
                @endphp

                <img src="{{ $foto }}" class="foto">
            </td>

            <td>
                <table>
                    <tr>
                        <td class="label">Nama</td>
                        <td>: {{ $murid->nama }}</td>
                    </tr>

                    <tr>
                        <td class="label">NISN</td>
                        <td>: {{ $murid->nisn }}</td>
                    </tr>

                    <tr>
                        <td class="label">Nomor Ijazah</td>
                        <td>: {{ $murid->nomor_ijazah }}</td>
                    </tr>

                    <tr>
                        <td class="label" rowspan="2">Alamat Lengkap</td>

                        <td>
                            : {{ $murid->alamat_lengkap }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            : {{ $murid->reldesa->name ?? '-' }},
                            {{ $murid->kecamatan->name ?? '-' }},
                            {{ $murid->kabupaten->name ?? '-' }},
                            {{ $murid->provinsi->name ?? '-' }}
                        </td>
                    </tr>

                    <tr>
                        <td class="label">Program / Jurusan</td>
                        <td>: {{ $murid->jurusan->program_keahlian ?? '-' }}</td>
                    </tr>

                    <tr>
                        <td class="label">Asal Sekolah</td>
                        <td>: {{ $murid->asal_sekolah }}</td>
                    </tr>

                    <tr>
                        <td class="label">Jenis Pendaftaran</td>
                        <td>: {{ $murid->jenis_daftar }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    {{-- DATA DIRI --}}
    <div class="section">
        DATA DIRI MURID
    </div>

    <table>
        <tr>
            <td width="50%">
                <table>

                    <tr>
                        <td class="label">Nomor KK</td>
                        <td>: {{ $murid->no_kk }}</td>
                    </tr>

                    <tr>
                        <td class="label">Nomor Akta</td>
                        <td>: {{ $murid->no_akta }}</td>
                    </tr>

                    <tr>
                        <td class="label">Tempat Lahir</td>
                        <td>: {{ $murid->tempat_lahir }}</td>
                    </tr>

                    <tr>
                        <td class="label">Jenis Kelamin</td>
                        <td>: {{ $murid->jenis_kelamin }}</td>
                    </tr>

                    <tr>
                        <td class="label">Status Keluarga</td>
                        <td>: {{ $murid->dlm_klrg }}</td>
                    </tr>

                    <tr>
                        <td class="label">Jumlah Saudara</td>
                        <td>: {{ $murid->sdr }}</td>
                    </tr>

                    <tr>
                        <td class="label">Tinggi Badan</td>
                        <td>: {{ $murid->tinggi_badan }} CM</td>
                    </tr>

                    <tr>
                        <td class="label">Hobi</td>
                        <td>: {{ $murid->hoby }}</td>
                    </tr>

                </table>
            </td>

            <td width="50%">
                <table>

                    <tr>
                        <td class="label">NIK</td>
                        <td>: {{ $murid->nik }}</td>
                    </tr>

                    <tr>
                        <td class="label">NIUP</td>
                        <td>: {{ $murid->niup }}</td>
                    </tr>

                    <tr>
                        <td class="label">Tanggal Lahir</td>
                        <td>:
                            {{ \Carbon\Carbon::parse($murid->tanggal_lahir)->locale('id')->translatedFormat('d F Y') }}
                        </td>
                    </tr>

                    <tr>
                        <td class="label">Agama</td>
                        <td>: {{ $murid->agama->nama_agama ?? '-' }}</td>
                    </tr>

                    <tr>
                        <td class="label">Anak Ke</td>
                        <td>: {{ $murid->ank_ke }}</td>
                    </tr>

                    <tr>
                        <td class="label">Tinggal Di</td>
                        <td>: {{ $murid->tinggal_di }}</td>
                    </tr>

                    <tr>
                        <td class="label">Berat Badan</td>
                        <td>: {{ $murid->berat_badan }} KG</td>
                    </tr>

                    <tr>
                        <td class="label">Cita-cita</td>
                        <td>: {{ $murid->cita_cita }}</td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

    {{-- ORANG TUA --}}
    <div class="section">
        DATA ORANG TUA & WALI
    </div>

    <table>
        <tr>

            {{-- AYAH + IBU --}}
            <td width="50%">

                <div class="subjudul">DATA AYAH</div>

                <table>
                    <tr>
                        <td class="label">Nama</td>
                        <td>: {{ $murid->nm_a }}</td>
                    </tr>

                    <tr>
                        <td class="label">NIK</td>
                        <td>: {{ $murid->nik_a }}</td>
                    </tr>

                    <tr>
                        <td class="label">Pendidikan</td>
                        <td>: {{ $murid->pendidikanAyah->jenjang ?? '-' }}</td>
                    </tr>

                    <tr>
                        <td class="label">Pekerjaan</td>
                        <td>: {{ $murid->pekerjaanAyah->nama_pekerjaan ?? '-' }}</td>
                    </tr>

                    <tr>
                        <td class="label">Penghasilan</td>
                        <td>: {{ $murid->penghasilanAyah->kategori ?? '-' }}</td>
                    </tr>
                </table>

                <br>

                <div class="subjudul">DATA IBU</div>

                <table>
                    <tr>
                        <td class="label">Nama</td>
                        <td>: {{ $murid->nm_i }}</td>
                    </tr>

                    <tr>
                        <td class="label">NIK</td>
                        <td>: {{ $murid->nik_i }}</td>
                    </tr>

                    <tr>
                        <td class="label">Pendidikan</td>
                        <td>: {{ $murid->pendidikanIbu->jenjang ?? '-' }}</td>
                    </tr>

                    <tr>
                        <td class="label">Pekerjaan</td>
                        <td>: {{ $murid->pekerjaanIbu->nama_pekerjaan ?? '-' }}</td>
                    </tr>

                    <tr>
                        <td class="label">Penghasilan</td>
                        <td>: {{ $murid->penghasilanIbu->kategori ?? '-' }}</td>
                    </tr>
                </table>

            </td>

            {{-- WALI --}}
            <td width="50%">

                <div class="subjudul">DATA WALI</div>

                <table>
                    <tr>
                        <td class="label">Nama</td>
                        <td>: {{ $murid->nm_w ?? '-' }}</td>
                    </tr>

                    <tr>
                        <td class="label">NIK</td>
                        <td>: {{ $murid->nik_w ?? '-' }}</td>
                    </tr>

                    <tr>
                        <td class="label">Pendidikan</td>
                        <td>: {{ $murid->pendidikanWali->jenjang ?? '-' }}</td>
                    </tr>

                    <tr>
                        <td class="label">Pekerjaan</td>
                        <td>: {{ $murid->pekerjaanWali->nama_pekerjaan ?? '-' }}</td>
                    </tr>

                    <tr>
                        <td class="label">Penghasilan</td>
                        <td>: {{ $murid->penghasilanWali->kategori ?? '-' }}</td>
                    </tr>
                </table>

                <br>

                <div class="subjudul">KELENGKAPAN BERKAS</div>

                <table>
                    <tr>
                        <td>[{{ $murid->foto_scan_kk ? '✔' : ' ' }}] Fotokopi KK</td>
                    </tr>

                    <tr>
                        <td>[{{ $murid->foto_scan_akta ? '✔' : ' ' }}] Fotokopi Akta</td>
                    </tr>

                    <tr>
                        <td>[{{ $murid->foto_ijazah ? '✔' : ' ' }}] Ijazah</td>
                    </tr>

                    <tr>
                        <td>[{{ $murid->foto_skl ? '✔' : ' ' }}] SKL</td>
                    </tr>

                    <tr>
                        <td>[{{ $murid->foto_warna_santri ? '✔' : ' ' }}] Pas Foto</td>
                    </tr>
                    <tr>
                        <td>[{{ $murid->foto_scan_skck ? '✔' : ' ' }}] SKKB</td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>

    {{-- TTD --}}
    <table class="ttd" width="100%" style="margin-top: 30px;">
        <tr>

            {{-- KIRI --}}
            <td width="50%" style="text-align: center; vertical-align: top;">

                Pendaftar

                <div style="height: 90px;"></div>

                <u>{{ $murid->nama }}</u>

            </td>

            {{-- KANAN --}}
            <td width="50%" style="text-align: center; vertical-align: top;">

                Banyuwangi, {{ date('d M Y') }}
                <br>

                Panitia

                <div style="height: 72px;"></div>

                <u>{{ Auth::user()->name }}</u>

            </td>

        </tr>
    </table>
    </table>

    <div class="halaman-lanjutan">
        <div class="page-break"></div>

        {{-- HALAMAN 2 : SURAT PERNYATAAN --}}

        <img src="{{ asset('kop.jpeg') }}" class="kop">

        <div
            style="margin-top:10px; margin-bottom:20px; text-align:center; font-size:20px; font-weight:bold; text-transform:uppercase;">
            SURAT PERNYATAAN
        </div>

        <br>

        <div style="font-style: italic;">
            Saya yang bertanda tangan dibawah ini
        </div>

        <br>

        <table style="width: 100%; margin-left:20px;">
            <tr>
                <td width="120">Nama</td>
                <td width="20">:</td>
                <td><b>{{ strtoupper($murid->nama) }}</b></td>
            </tr>

            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>{{ $murid->nik }}</td>
            </tr>

            <tr>
                <td>TTL</td>
                <td>:</td>
                <td>
                    {{ $murid->tempat_lahir }},
                    {{ \Carbon\Carbon::parse($murid->tanggal_lahir)->locale('id')->translatedFormat('d F Y') }}
                </td>
            </tr>
        </table>

        <br>

        <div style="font-weight:bold;">
            dengan ini menyatakan dengan sesungguhnya, bahwa saya:
        </div>

        <br>

        <ol style="line-height: 24px; text-align: justify; padding-left:25px;">

            <li>
                Hadir di sekolah tepat waktu dan tidak meninggalkan sekolah tanpa izin.
            </li>

            <li>
                Mengikuti seluruh kegiatan pembelajaran dan kegiatan sekolah dengan tertib.
            </li>

            <li>
                Mengenakan seragam sekolah sesuai ketentuan dan dalam kondisi rapi.
            </li>

            <li>
                Menjaga sikap, tata krama, dan sopan santun terhadap guru, staf,
                dan sesama siswa.
            </li>

            <li>
                Tidak membawa atau menggunakan barang terlarang seperti rokok,
                narkoba, senjata tajam, dan sejenisnya di lingkungan sekolah.
            </li>

            <li>
                Tidak melakukan perundungan (bullying), kekerasan, atau tindakan
                asusila dalam bentuk apa pun.
            </li>

            <li>
                Menjaga kebersihan, keamanan, dan ketertiban lingkungan sekolah.
            </li>

            <li>
                Tidak merusak fasilitas sekolah, dan apabila melakukan,
                bersedia memperbaiki atau mengganti sesuai kerugian yang ditimbulkan.
            </li>

            <li>
                Tidak membawa alat elektronik & kendaraan bermotor ke sekolah
                (jika ada aturan tersebut).
            </li>

            <li>
                Bersedia menerima sanksi sesuai peraturan sekolah apabila saya
                melanggar ketentuan yang telah ditetapkan.
            </li>

        </ol>

        <table style="margin-top:70px; width:100%;">
            <tr>

                <td width="50%"></td>

                <td width="50%" style="text-align:center;">
                    Banyuwangi,
                    {{ \Carbon\Carbon::now()->translatedFormat('d-m-Y') }}
                    <br><br>

                    Yang Membuat Pernyataan:
                    <br><br><br><br><br>

                    <u>
                        <b>{{ strtoupper($murid->nama) }}</b>
                    </u>
                </td>

            </tr>
        </table>

        <div class="page-break"></div>
        {{-- HALAMAN 3 : TANDA BUKTI PENDAFTARAN --}}

        <img src="{{ asset('kop.jpeg') }}" class="kop">

        <div
            style="
    text-align:center;
    font-size:20px;
    font-weight:bold;
    margin-top:10px;
    margin-bottom:20px;
    text-transform:uppercase;
">
            TANDA BUKTI PENDAFTARAN
        </div>

        <table style="margin-bottom:20px; width:100%;">

            <tr>
                <td width="180">Nama Siswa</td>
                <td width="10">:</td>
                <td>{{ strtoupper($murid->nama) }}</td>
            </tr>

            <tr>
                <td>NISN</td>
                <td>:</td>
                <td>{{ $murid->nisn }}</td>
            </tr>

            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td>{{ strtoupper($murid->asal_sekolah) }}</td>
            </tr>

            <tr>
                <td>Program / Jurusan</td>
                <td>:</td>
                <td>{{ $murid->jurusan->program_keahlian ?? '-' }}</td>
            </tr>

        </table>

        <div style="
    font-weight:bold;
    margin-bottom:10px;
">
            RINCIAN BIAYA PENDAFTARAN
        </div>

        {{-- JURUSAN RPL --}}
        <table border="1" cellpadding="5" cellspacing="0"
            style="width:100%; border-collapse:collapse; margin-bottom:20px;">

            <tr>
                <td colspan="3" style="font-weight:bold; background:#efefef;">
                    Jurusan RPL : Rp. 2.331.000
                </td>
            </tr>

            <tr>
                <td width="40">a.</td>
                <td>Pendaftaran</td>
                <td width="180">Rp. 50.000</td>
            </tr>

            <tr>
                <td>b.</td>
                <td>Map Rapor</td>
                <td>Rp. 50.000</td>
            </tr>

            <tr>
                <td>c.</td>
                <td>KIS</td>
                <td>Rp. 20.000</td>
            </tr>

            <tr>
                <td>d.</td>
                <td>Buku LKS / 3 Tahun</td>
                <td>Rp. 300.000</td>
            </tr>

            <tr>
                <td>e.</td>
                <td>Praktik Kerja Lapangan</td>
                <td>Rp. 400.000</td>
            </tr>

            <tr>
                <td>f.</td>
                <td>Ujian Akhir Sekolah & UKK</td>
                <td>Rp. 1.000.000</td>
            </tr>

            <tr>
                <td>g.</td>
                <td>Seragam 3 Stel</td>
                <td>Rp. 511.000</td>
            </tr>

        </table>

        {{-- JURUSAN AKL --}}
        <table border="1" cellpadding="5" cellspacing="0" style="width:100%; border-collapse:collapse;">

            <tr>
                <td colspan="3" style="font-weight:bold; background:#efefef;">
                    Jurusan AKL : Rp. 2.430.000
                </td>
            </tr>

            <tr>
                <td width="40">a.</td>
                <td>Pendaftaran</td>
                <td width="180">Rp. 50.000</td>
            </tr>

            <tr>
                <td>b.</td>
                <td>Map Rapor</td>
                <td>Rp. 50.000</td>
            </tr>

            <tr>
                <td>c.</td>
                <td>KIS</td>
                <td>Rp. 20.000</td>
            </tr>

            <tr>
                <td>d.</td>
                <td>Buku LKS / 3 Tahun</td>
                <td>Rp. 300.000</td>
            </tr>

            <tr>
                <td>e.</td>
                <td>Praktik Kerja Lapangan</td>
                <td>Rp. 400.000</td>
            </tr>

            <tr>
                <td>f.</td>
                <td>Ujian Akhir Sekolah & UKK</td>
                <td>Rp. 1.000.000</td>
            </tr>

            <tr>
                <td>g.</td>
                <td>Seragam 3 Stel</td>
                <td>Rp. 511.000</td>
            </tr>

            <tr>
                <td>h.</td>
                <td>Kerudung 3</td>
                <td>Rp. 99.000</td>
            </tr>

        </table>

        <div style="
    margin-top:20px;
    line-height:24px;
    text-align:justify;
">
            Dengan diterbitkannya tanda bukti ini, maka siswa tersebut dinyatakan
            telah resmi melakukan pendaftaran di SMK Nurul Abror Al-Robbaniyin.
            Pembayaran biaya pendidikan dapat dilakukan secara lunas maupun cicilan
            sesuai ketentuan sekolah.
        </div>

        <table style="margin-top:70px; width:100%;">
            <tr>

                <td width="50%">
                </td>

                <td width="50%" style="text-align:center;">

                    Banyuwangi,
                    {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('d F Y') }}

                    <br><br>

                    Panitia PPDB

                    <br><br><br><br><br>

                    <u><b>{{ Auth::user()->name }}</b></u>

                </td>

            </tr>
        </table>
    </div>

</body>

</html>
