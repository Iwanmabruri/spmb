<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Data Murid</title>

    <style>
        body {
            font-family: sans-serif;
            font-size: 11px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px;
            vertical-align: top;
        }

        th {
            background: #f2f2f2;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <h2>Data Murid Baru</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>NISN</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>Asal Sekolah</th>
                <th>Alamat</th>
            </tr>
        </thead>

        <tbody>
            {{-- @foreach ($siswa as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nisn }}</td>
                    <td>{{ $item->tempat_lahir }}</td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->jurusan->program_keahlian ?? '-' }}</td>
                    <td>{{ $item->asal_sekolah }}</td>
                    <td>
                        {{ $item->alamat_lengkap }},
                        Desa {{ $item->desa->name ?? '-' }},
                        Kec. {{ $item->kecamatan->name ?? '-' }},
                        Kab. {{ $item->kabupaten->name ?? '-' }},
                        Prov. {{ $item->provinsi->name ?? '-' }}
                    </td>
                    <td>{{ $item->hp_w }}</td>

                    <td>{{ $item->nik_a }}</td>
                    <td>{{ $item->nm_a }}</td>
                    <td>{{ $item->tmpt_lahir_a }}</td>
                    <td>{{ $item->tgl_lahir_a }}</td>

                    <td>{{ $item->nik_i }}</td>
                    <td>{{ $item->nm_i }}</td>
                    <td>{{ $item->tmpt_lahir_i }}</td>
                    <td>{{ $item->tgl_lahir_i }}</td>

                    <td>{{ $item->nik_w }}</td>
                    <td>{{ $item->nm_w }}</td>
                    <td>{{ $item->tmpt_lahir_w }}</td>
                    <td>{{ $item->tgl_lahir_w }}</td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>

</body>

</html>
