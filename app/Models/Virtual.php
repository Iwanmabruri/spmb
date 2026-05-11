<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Virtual extends Model
{
    protected $table = 'tb_virtual';
    protected $primaryKey = 'id_person';

    protected $fillable = [
        'nik',
        'niup',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama_id',
        'kewarganegaraan',
        'dlm_klrg',
        'ank_ke',
        'sdr',
        'alamat_lengkap',
        'desa',
        'kec',
        'kab',
        'prov',
        'pos',

        // ayah
        'nik_a',
        'nm_a',
        'tgl_lahir_a',

        // ibu
        'nik_i',
        'nm_i',
        'tgl_lahir_i',

        // wali
        'nik_w',
        'nm_w',
        'tgl_lahir_w',
        'tmpt_lahir_w',
        'agama_w',
        'almt_w',
        'desa_w',
        'kec_w',
        'kab_w',
        'prov_w',
        'pos_w',
        'hp_w',

        'foto_warna_santri',
        'foto_wali_santri_warna',
        'foto_scan_kk',
        'foto_scan_akta',
        'foto_scan_skck',
        'foto_scan_ket_sehat',
        'foto_ijazah',
        'file_kip',

        'status',
    ];
}
