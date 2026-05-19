<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Jurusan;
use App\Models\Murid;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Penghasilan;
use App\Models\Virtual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AmbildataController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | DOWNLOAD FILE DARI API
    |--------------------------------------------------------------------------
    */
    // private function downloadFile($url, $folder = 'File_Santri')
    // {
    //     if (!$url || !str_contains($url, 'http')) {
    //         return $url;
    //     }

    //     try {

    //         $response = Http::timeout(30)->get($url);

    //         if (!$response->successful()) {
    //             return null;
    //         }

    //         $filename = time() . '_' . uniqid() . '.' . pathinfo($url, PATHINFO_EXTENSION);

    //         Storage::disk('public')->put(
    //             $folder . '/' . $filename,
    //             $response->body()
    //         );

    //         return $folder . '/' . $filename;
    //     } catch (\Exception $e) {
    //         return null;
    //     }
    // }

    /*
    |--------------------------------------------------------------------------
    | SYNC DATA API
    |--------------------------------------------------------------------------
    */
    // public function synchronization()
    // {
    //     $response = Http::get(
    //         'http://localhost:3000/api/apiSpmb'
    //     );

    //     // cek response API
    //     if (!$response->successful()) {

    //         return back()->with(
    //             'error',
    //             'Gagal mengambil data API'
    //         );
    //     }

    //     // ambil data array dari API
    //     $datas = $response->json('data');

    //     // validasi data
    //     if (!$datas || !is_array($datas)) {

    //         return back()->with(
    //             'error',
    //             'Data API tidak valid'
    //         );
    //     }

    //     // field file yang akan didownload
    //     $fileFields = [
    //         'foto_warna_santri',
    //         'foto_wali_santri_warna',
    //         'foto_scan_kk',
    //         'foto_scan_akta',
    //         'foto_scan_skck',
    //         'foto_scan_ket_sehat',
    //     ];

    //     foreach ($datas as $data) {

    //         /*
    //         |--------------------------------------------------------------------------
    //         | DOWNLOAD SEMUA FILE
    //         |--------------------------------------------------------------------------
    //         */
    //         $fileData = [];

    //         foreach ($fileFields as $field) {

    //             $fileData[$field] = null;

    //             if (!empty($data[$field])) {

    //                 $fileData[$field] = $this->downloadFile(
    //                     $data[$field],
    //                     'File_Santri'
    //                 );
    //             }
    //         }

    //         /*
    //         |--------------------------------------------------------------------------
    //         | INSERT / UPDATE DATA
    //         |--------------------------------------------------------------------------
    //         */
    //         Virtual::updateOrCreate(

    //             [
    //                 'niup' => $data['niup'],
    //             ],

    //             [
    //                 'nik' => $data['nik'],
    //                 'nama' => $data['nama'],
    //                 'tempat_lahir' => $data['tempat_lahir'],
    //                 'tanggal_lahir' => $data['tanggal_lahir'],
    //                 'jenis_kelamin' => $data['jenis_kelamin'],

    //                 'dlm_klrg' => $data['dlm_klrg'],
    //                 'ank_ke' => $data['ank_ke'],
    //                 'sdr' => $data['sdr'],

    //                 'alamat_lengkap' => $data['alamat_lengkap'],
    //                 'desa' => $data['desa'],
    //                 'kec' => $data['kec'],
    //                 'kab' => $data['kab'],
    //                 'prov' => $data['prov'],
    //                 'pos' => $data['pos'],

    //                 // AYAH
    //                 'nik_a' => $data['nik_a'],
    //                 'nm_a' => $data['nm_a'],
    //                 'tgl_lahir_a' => $data['tgl_lahir_a'],

    //                 // IBU
    //                 'nik_i' => $data['nik_i'],
    //                 'nm_i' => $data['nm_i'],
    //                 'tgl_lahir_i' => $data['tgl_lahir_i'],

    //                 // WALI
    //                 'nik_w' => $data['nik_w'],
    //                 'nm_w' => $data['nm_w'],
    //                 'almt_w' => $data['almt_w'],
    //                 'desa_w' => $data['desa_w'],
    //                 'kec_w' => $data['kec_w'],
    //                 'kab_w' => $data['kab_w'],
    //                 'prov_w' => $data['prov_w'],
    //                 'pos_w' => $data['pos_w'],
    //                 'hp_w' => $data['hp_w'],

    //                 /*
    //                 |--------------------------------------------------------------------------
    //                 | FILE HASIL DOWNLOAD
    //                 |--------------------------------------------------------------------------
    //                 */
    //                 'foto_warna_santri' =>
    //                 $fileData['foto_warna_santri'],

    //                 'foto_wali_santri_warna' =>
    //                 $fileData['foto_wali_santri_warna'],

    //                 'foto_scan_kk' =>
    //                 $fileData['foto_scan_kk'],

    //                 'foto_scan_akta' =>
    //                 $fileData['foto_scan_akta'],

    //                 'foto_scan_skck' =>
    //                 $fileData['foto_scan_skck'],

    //                 'foto_scan_ket_sehat' =>
    //                 $fileData['foto_scan_ket_sehat'],
    //             ]
    //         );
    //     }

    //     return back()->with(
    //         'success',
    //         'Data berhasil disinkronkan'
    //     );
    // }

    /*
    |--------------------------------------------------------------------------
    | HALAMAN LIST DATA
    |--------------------------------------------------------------------------
    */
    public function index(Request $request)
    {
        $data = null;

        if ($request->filled('niup')) {

            $response = Http::get(
                'http://127.0.0.1:3000/siswa/' . $request->niup
            );

            if ($response->successful()) {

                $json = $response->json();

                $data = $json[0] ?? $json;
            }
        }

        return view('admin.ambildata', compact('data'));
    }

    public function storemurid(Request $request)
    {
        // dd($request->all());
        $response = Http::get(
            'http://127.0.0.1:3000/siswa/' . $request->niup
        );

        if (!$response->successful()) {
            return back()->with('error', 'Data tidak ditemukan');
        }

        $json = $response->json();

        $data = $json[0] ?? $json;

        $cek = Murid::where('niup', $data['niup'])->first();

        if ($cek) {
            return back()
                ->with('info', 'Data ' . $cek->nama . ' Sudah terdaftar sebagai murid baru');
        }

        $fotoFields = [
            'foto_warna_santri',
            'foto_wali_santri_warna',
            'foto_scan_kk',
            'foto_scan_akta',
            'foto_scan_skck',
            'foto_scan_ket_sehat',
        ];

        $fotoData = [];

        foreach ($fotoFields as $field) {

            $fotoData[$field] = null;

            if (!empty($data[$field])) {

                try {

                    $fotoUrl = $data[$field];

                    // extension file
                    $ext = pathinfo($fotoUrl, PATHINFO_EXTENSION);

                    // nama file
                    $namaFile = time() . '_' . $field . '.' . $ext;

                    // folder public sesuai nama field
                    $folder = public_path($field);

                    // buat folder jika belum ada
                    if (!File::exists($folder)) {
                        File::makeDirectory($folder, 0755, true);
                    }

                    // download file
                    $fileContent = Http::get($fotoUrl)->body();

                    // simpan file
                    file_put_contents(
                        $folder . '/' . $namaFile,
                        $fileContent
                    );

                    // simpan path ke database
                    $fotoData[$field] = $field . '/' . $namaFile;
                } catch (\Exception $e) {

                    $fotoData[$field] = null;
                }
            }
        }

        if (empty($data)) {
            return back()->with('error', 'Data API kosong');
        }

        try {
            $murid = Murid::create([
                'niup' => $data['niup'],
                'nik' => $data['nik'],
                'nama' => $data['nama'],

                'tempat_lahir' => $data['tempat_lahir'],
                'tanggal_lahir' => $data['tanggal_lahir'],
                'jenis_kelamin' => $data['jenis_kelamin'],

                'dlm_klrg' => $data['dlm_klrg'],
                'ank_ke' => $data['ank_ke'],
                'sdr' => $data['sdr'],

                'alamat_lengkap' => $data['alamat_lengkap'],
                'desa' => $data['desa'],
                'kec' => $data['kec'],
                'kab' => $data['kab'],
                'prov' => $data['prov'],
                'pos' => $data['pos'],

                'nik_a' => $data['nik_a'],
                'nm_a' => $data['nm_a'],
                'tgl_lahir_a' => $data['tgl_lahir_a'],

                'nik_i' => $data['nik_i'],
                'nm_i' => $data['nm_i'],
                'tgl_lahir_i' => $data['tgl_lahir_i'],

                'nik_w' => $data['nik_w'],
                'nm_w' => $data['nm_w'],

                'almt_w' => $data['almt_w'],
                'desa_w' => $data['desa_w'],
                'kec_w' => $data['kec_w'],
                'kab_w' => $data['kab_w'],
                'prov_w' => $data['prov_w'],
                'pos_w' => $data['pos_w'],
                'hp_w' => $data['hp_w'],

                'foto_warna_santri' => $fotoData['foto_warna_santri'],
                'foto_wali_santri_warna' => $fotoData['foto_wali_santri_warna'],
                'foto_scan_kk' => $fotoData['foto_scan_kk'],
                'foto_scan_akta' => $fotoData['foto_scan_akta'],
                'foto_scan_skck' => $fotoData['foto_scan_skck'],
                'foto_scan_ket_sehat' => $fotoData['foto_scan_ket_sehat'],

                'status' => 1,
                'tgl_daftar' => now(),
            ]);
            return redirect()
                ->route('murid.lengkapi', $murid->id_person)
                ->with('success', 'Data murid berhasil ditambahkan');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function lengkapi($id)
    {
        $siswa = Murid::findOrFail($id);
        $agama = Agama::all();
        $jurusan = Jurusan::where('status', 'Aktif')->get();
        $pendidikan = Pendidikan::all();
        $pekerjaan = Pekerjaan::all();
        $penghasilan = Penghasilan::all();

        return view('admin.lengkapi', compact('siswa', 'agama', 'jurusan', 'pendidikan', 'pekerjaan', 'penghasilan'));
    }

    public function updatelengkapi(Request $request, $id)
    {
        try {

            $murid = Murid::findOrFail($id);

            $murid->update([

                'no_kk' => $request->no_kk,
                'no_akta' => $request->no_akta,
                'nisn' => $request->nisn,
                'asal_sekolah' => $request->asal_sekolah,
                'nomor_ijazah' => $request->nomor_ijazah,
                'agama_id' => $request->agama_id,
                'kewarganegaraan' => $request->kewarganegaraan,
                'tinggi_badan' => $request->tinggi_badan,
                'berat_badan' => $request->berat_badan,
                'tinggal_di' => $request->tinggal_di,
                'hoby' => $request->hoby,
                'cita_cita' => $request->cita_cita,
                'jenis_daftar' => $request->jenis_daftar,
                'jurusan_id' => $request->jurusan_id,

                'tmpt_lahir_a' => $request->tmpt_lahir_a,
                'agama_a' => $request->agama_a,
                'pndkn_a' => $request->pndkn_a,
                'pkrjn_a' => $request->pkrjn_a,
                'penghasilan_a' => $request->penghasilan_a,

                'tmpt_lahir_i' => $request->tmpt_lahir_i,
                'agama_i' => $request->agama_i,
                'pndkn_i' => $request->pndkn_i,
                'pkrjn_i' => $request->pkrjn_i,
                'penghasilan_i' => $request->penghasilan_i,

                'tmpt_lahir_w' => $request->tmpt_lahir_w,
                'tgl_lahir_w' => $request->tgl_lahir_w,
                'agama_w' => $request->agama_w,
                'pndkn_w' => $request->pndkn_w,
                'pkrjn_w' => $request->pkrjn_w,
                'penghasilan_w' => $request->penghasilan_w,
                'hp_w' => $request->hp_w,

            ]);
            // $murid->update($request->all());

            return redirect()
                ->route('murid')
                ->with('success', 'Data berhasil dilengkapi');
        } catch (\Throwable $th) {

            return back()->with('error', $th->getMessage());
        }
    }

    /*
    |--------------------------------------------------------------------------
    | DETAIL DATA SANTRI
    |--------------------------------------------------------------------------
    */
    // public function detail($id)
    // {
    //     $murid = Virtual::findOrFail($id);

    //     return view(
    //         'admin.detailsantri',
    //         compact('murid')
    //     );
    // }

    public function tambahMurid($id)
    {
        // ambil data virtual
        $virtual = Virtual::findOrFail($id);

        // cek apakah sudah pernah dipindah
        if ($virtual->status == 1) {

            return back()->with(
                'error',
                'Data sudah menjadi siswa'
            );
        }

        // cek apakah siswa sudah ada
        if (Murid::where('nik', $virtual->nik)->exists()) {

            return back()->with(
                'error',
                'Siswa sudah ada'
            );
        }

        /*
    |--------------------------------------------------------------------------
    | INSERT KE TABEL SISWA
    |--------------------------------------------------------------------------
    */
        try {

            $siswa = Murid::create([
                'niup' => $virtual->niup,
                'nik' => $virtual->nik,
                'nama' => $virtual->nama,
                'tempat_lahir' => $virtual->tempat_lahir,
                'tanggal_lahir' => $virtual->tanggal_lahir,
                'jenis_kelamin' => $virtual->jenis_kelamin,
                'dlm_klrg' => $virtual->dlm_klrg,
                'ank_ke' => $virtual->ank_ke,
                'sdr' => $virtual->sdr,


                'alamat_lengkap' => $virtual->alamat_lengkap,
                'desa' => $virtual->desa,
                'kec' => $virtual->kec,
                'kab' => $virtual->kab,
                'prov' => $virtual->prov,
                'pos' => $virtual->pos,

                'nik_a' => $virtual->nik_a,
                'nm_a' => $virtual->nm_a,
                'tgl_lahir_a' => $virtual->tgl_lahir_a,

                'nik_i' => $virtual->nik_i,
                'nm_i' => $virtual->nm_i,
                'tgl_lahir_i' => $virtual->tgl_lahir_i,

                'nik_w' => $virtual->nik_w,
                'nm_w' => $virtual->nm_w,
                'almt_w' => $virtual->almt_w,
                'desa_w' => $virtual->desa_w,
                'kec_w' => $virtual->kec_w,
                'kab_w' => $virtual->kab_w,
                'prov_w' => $virtual->prov_w,
                'pos_w' => $virtual->pos_w,
                'hp_w' => $virtual->hp_w,

                'foto_warna_santri' => $virtual->foto_warna_santri,
                'foto_wali_santri_warna' => $virtual->foto_wali_santri_warna,
                'foto_scan_kk' => $virtual->foto_scan_kk,
                'foto_scan_akta' => $virtual->foto_scan_akta,
                'foto_scan_skck' => $virtual->foto_scan_skck,

                'tgl_daftar' => now(),
            ]);

            // dd($siswa->toArray());

            Virtual::where('id_person', $id)->update([
                'status' => 1
            ]);

            return redirect()->back()
                ->with('success', 'Data berhasil ditambahkan, silakan lengkapi data murid');
            // update status virtual

        } catch (\Exception $e) {

            return back()->with('error', 'Gagal menambahkan murid: ' . $e->getMessage());
        }
    }
}
