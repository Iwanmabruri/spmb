<?php

namespace App\Exports;

use App\Models\Murid;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Murid::with([
            'jurusan',
            'reldesa',
            'kecamatan',
            'kabupaten',
            'provinsi',

            'pendidikanAyah',
            'pendidikanIbu',
            'pendidikanWali',

            'pekerjaanAyah',
            'pekerjaanIbu',
            'pekerjaanWali',

            'penghasilanAyah',
            'penghasilanIbu',
            'penghasilanWali',
        ])
            ->select(
                'nama',
                'nik',
                'nisn',
                'tempat_lahir',
                'tanggal_lahir',
                'alamat_lengkap',
                'asal_sekolah',
                'jenis_kelamin',
                'jurusan_id',
                'nomor_ijazah',
                'hp_w',

                'nm_a',
                'tgl_lahir_a',
                'tmpt_lahir_a',
                'pkrjn_a',
                'pndkn_a',
                'penghasilan_a',

                'nm_i',
                'tgl_lahir_i',
                'tmpt_lahir_i',
                'pkrjn_i',
                'pndkn_i',
                'penghasilan_i',

                'nm_w',
                'tgl_lahir_w',
                'tmpt_lahir_w',
                'pkrjn_w',
                'pndkn_w',
                'penghasilan_w'

            )->where('status', 1)->get()
            ->map(function ($item) {
                return [
                    'Nama' => $item->nama,
                    'NIK' => "'" . $item->nik,
                    'NISN' => "'" . $item->nisn,
                    'Tempat Lahir' => $item->tempat_lahir,
                    'Tanggal Lahir' => $item->tanggal_lahir,
                    'Alamat Lengkap' => $item->alamat_lengkap .
                        ', Desa ' . ($item->desa->name ?? '-') .
                        ', Kec. ' . ($item->kecamatan->name ?? '-') .
                        ', Kab. ' . ($item->kabupaten->name ?? '-') .
                        ', Prov. ' . ($item->provinsi->name ?? '-'),
                    'Asal Sekolah' => $item->asal_sekolah,
                    'Jenis Kelamin' => $item->jenis_kelamin,
                    'Jurusan' => $item->jurusan->program_keahlian ?? '-',
                    'Nomor Ijazah' => $item->nomor_ijazah,
                    'No HP' => $item->hp_w,

                    'Nama Ayah' => $item->nm_a,
                    'Tempat Lahir Ayah' => $item->tmpt_lahir_a,
                    'Tanggal Lahir Ayah' => $item->tgl_lahir_a,
                    'Pekerjaan Ayah' => $item->pekerjaanAyah->nama_pekerjaan ?? '-',
                    'Pendidikan Ayah' => $item->pendidikanAyah->jenjang ?? '-',
                    'Penghasilan Ayah' => $item->penghasilanAyah->kategori ?? '-',

                    'Nama Ibu' => $item->nm_i,
                    'Tempat Lahir Ibu' => $item->tmpt_lahir_i,
                    'Tanggal Lahir Ibu' => $item->tgl_lahir_i,
                    'Pekerjaan Ibu' => $item->pekerjaanIbu->nama_pekerjaan ?? '-',
                    'Pendidikan Ibu' => $item->pendidikanIbu->jenjang ?? '-',
                    'Penghasilan Ibu' => $item->penghasilanIbu->kategori ?? '-',

                    'Nama Wali' => $item->nm_w,
                    'Tempat Lahir Wali' => $item->tmpt_lahir_w,
                    'Tanggal Lahir Wali' => $item->tgl_lahir_w,
                    'Pekerjaan Wali' => $item->pekerjaanWali->nama_pekerjaan ?? '-',
                    'Pendidikan Wali' => $item->pendidikanWali->jenjang ?? '-',
                    'Penghasilan Wali' => $item->penghasilanWali->kategori ?? '-',
                ];
            });
    }

    public function headings(): array
    {
        return [
            'Nama',
            'NIK',
            'NISN',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Alamat Lengkap',
            'Asal Sekolah',
            'Jenis Kelamin',
            'Jurusan',
            'Nomor Ijazah',
            'No HP',

            'Nama Ayah',
            'Tempat Lahir Ayah',
            'Tanggal Lahir Ayah',
            'Pekerjaan Ayah',
            'Pendidikan Ayah',
            'Penghasilan Ayah',

            'Nama Ibu',
            'Tempat Lahir Ibu',
            'Tanggal Lahir Ibu',
            'Pekerjaan Ibu',
            'Pendidikan Ibu',
            'Penghasilan Ibu',

            'Nama Wali',
            'Tempat Lahir Wali',
            'Tanggal Lahir Wali',
            'Pekerjaan Wali',
            'Pendidikan Wali',
            'Penghasilan Wali'
        ];
    }
}
