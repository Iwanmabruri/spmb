<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Desa;
use App\Models\Jurusan;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Murid;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Penghasilan;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index()
    {
        $murid = Murid::latest()->get();
        return view('admin.siswa.index', compact('murid'));
    }

    public function create()
    {
        return view('admin.siswa.create');
    }

    public function createStep1($id_person)
    {
        $agama = Agama::all();
        $jurusan = Jurusan::all();
        $murid = Murid::findOrFail($id_person);
        return view('admin.siswa.editstep1', compact('agama', 'jurusan', 'murid'));
    }

    public function store1(Request $request)
    {
        $data = $request->all();

        foreach ($data as $key => $value) {
            if ($value === '') {
                $data[$key] = null;
            }
        }

        $murid = Murid::create($data);

        $id = $murid->id_person;

        return $id;
    }

    public function storeStep1(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|numeric|digits:16',
            'no_kk' => 'required',
            'nisn' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'jurusan' => 'required',

            // tambahan
            'no_akta' => 'nullable|max:50',
            'tinggal_di' => 'nullable',
            'tinggi_badan' => 'nullable|numeric',
            'berat_badan' => 'nullable|numeric',
            'hoby' => 'nullable|max:100',
            'cita_cita' => 'nullable|max:100',
        ]);

        try {

            $murid = Murid::create([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'no_akta' => $request->no_akta,
                'nisn' => $request->nisn,
                'niup' => $request->niup,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama_id' => $request->agama,
                'dlm_klrg' => $request->dlm_klrg,
                'ank_ke' => $request->ank_ke,
                'sdr' => $request->sdr,
                'jurusan_id' => $request->jurusan,
                'jenis_daftar' => $request->jenis_daftar,
                'asal_sekolah' => $request->asal_sekolah,
                'nomor_ijazah' => $request->nomor_ijazah,
                'tinggal_di' => $request->tinggal_di,
                'tinggi_badan' => $request->tinggi_badan,
                'berat_badan' => $request->berat_badan,
                'hoby' => $request->hoby,
                'cita_cita' => $request->cita_cita,
                'status_step' => 1,
                'tgl_daftar' => now()
            ]);

            return redirect()->route('murid.step2', $murid->id_person)
                ->with('success', 'Step 1 berhasil disimpan');
        } catch (\Exception $e) {

            return back()
                ->with('error', 'Gagal menyimpan Step 1')
                ->withInput();
        }
    }

    public function get_kabupaten($provinsi_id)
    {
        $kabupaten = Kabupaten::where('province_id', $provinsi_id)->get();
        return response()->json($kabupaten);
    }

    public function get_kecamatan($kabupaten_id)
    {
        $kecamatan = Kecamatan::where('regency_id', $kabupaten_id)->get();
        return response()->json($kecamatan);
    }

    public function get_desa($kecamatan_id)
    {
        $desa = Desa::where('district_id', $kecamatan_id)->get();
        return response()->json($desa);
    }

    public function step2($id)
    {
        $murid = Murid::findOrFail($id);
        $provinsi = Provinsi::all();
        // proteksi biar tidak loncat step
        if ($murid->status_step < 1) {
            return redirect()->route('murid.step1');
        }
        return view('admin.siswa.step2', compact('murid', 'provinsi'));
    }

    public function storeStep2(Request $request, $id)
    {
        $murid = Murid::findOrFail($id);

        $request->validate([
            'kewarganegaraan' => 'required',
            'alamat_lengkap' => 'required',
            'prov' => 'required',
            'kab' => 'required',
            'kec' => 'required',
            'desa' => 'required',
        ]);

        try {

            $murid->update([
                'kewarganegaraan' => $request->kewarganegaraan,
                'alamat_lengkap' => $request->alamat_lengkap,
                'prov' => $request->prov,
                'kab' => $request->kab,
                'kec' => $request->kec,
                'desa' => $request->desa,
                'pos' => $request->pos,
                'status_step' => 2,
            ]);

            return redirect()->route('murid.step3', $murid->id_person)
                ->with('success', 'Step 2 berhasil disimpan');
        } catch (\Exception $e) {

            return back()
                ->with('error', 'Gagal menyimpan Step 2')
                ->withInput();
        }
    }

    public function step3($id)
    {
        $murid = Murid::findOrFail($id);
        $pekerjaan = Pekerjaan::all();
        $pendidikan = Pendidikan::all();
        $penghasilan = Penghasilan::all();
        $agama = Agama::all();
        // proteksi step
        if ($murid->status_step < 2) {
            return redirect()->route('murid.step2', $id);
        }
        return view('admin.siswa.step3', compact('murid', 'pekerjaan', 'pendidikan', 'penghasilan', 'agama'));
    }

    public function storeStep3(Request $request, $id)
    {
        $murid = Murid::findOrFail($id);

        $request->validate([
            'nik_a' => 'required',
            'nm_a' => 'required',
            'tgl_lahir_a' => 'required',
            'tmpt_lahir_a' => 'required',
            'agama_a' => 'required',
            'pkrjn_a' => 'required',
            'pndkn_a' => 'required',
            'penghasilan_a' => 'required',

            'nik_i' => 'required',
            'nm_i' => 'required',
            'tgl_lahir_i' => 'required',
            'tmpt_lahir_i' => 'required',
            'agama_i' => 'required',
            'pkrjn_i' => 'required',
            'pndkn_i' => 'required',
            'penghasilan_i' => 'required'
        ]);

        try {

            $murid->update([
                'nik_a' => $request->nik_a,
                'nm_a' => $request->nm_a,
                'tgl_lahir_a' => $request->tgl_lahir_a,
                'tmpt_lahir_a' => $request->tmpt_lahir_a,
                'agama_a' => $request->agama_a,
                'pkrjn_a' => $request->pkrjn_a,
                'pndkn_a' => $request->pndkn_a,
                'penghasilan_a' => $request->penghasilan_a,

                'nik_i' => $request->nik_i,
                'nm_i' => $request->nm_i,
                'tgl_lahir_i' => $request->tgl_lahir_i,
                'tmpt_lahir_i' => $request->tmpt_lahir_i,
                'agama_i' => $request->agama_i,
                'pkrjn_i' => $request->pkrjn_i,
                'pndkn_i' => $request->pndkn_i,
                'penghasilan_i' => $request->penghasilan_i,

                'status_step' => 3,
            ]);

            return redirect()->route('murid.step4', $murid->id_person)
                ->with('success', 'Step 3 berhasil disimpan');
        } catch (\Exception $e) {

            return back()
                ->with('error', 'Gagal menyimpan Step 3')
                ->withInput();
        }
    }

    public function step4($id)
    {
        $murid = Murid::findOrFail($id);
        $pekerjaan = Pekerjaan::all();
        $pendidikan = Pendidikan::all();
        $penghasilan = Penghasilan::all();
        $agama = Agama::all();
        if ($murid->status_step < 3) {
            return redirect()->route('murid.step3', $id);
        }
        return view('admin.siswa.step4', compact('murid', 'pekerjaan', 'pendidikan', 'penghasilan', 'agama'));
    }

    public function storeStep4(Request $request, $id)
    {
        $murid = Murid::findOrFail($id);

        $request->validate([
            'nm_w' => 'required',
            'nik_w' => 'required',
            'tmpt_lahir_w' => 'required',
            'tgl_lahir_w' => 'required',
            'agama_w' => 'required',
            'pkrjn_w' => 'required',
            'pndkn_w' => 'required',
            'penghasilan_w' => 'required',
        ]);

        try {

            $murid->update([
                'nm_w' => $request->nm_w,
                'nik_w' => $request->nik_w,
                'tmpt_lahir_w' => $request->tmpt_lahir_w,
                'tgl_lahir_w' => $request->tgl_lahir_w,
                'agama_w' => $request->agama_w,
                'pkrjn_w' => $request->pkrjn_w,
                'pndkn_w' => $request->pndkn_w,
                'penghasilan_w' => $request->penghasilan_w,
                'hp_w' => $request->hp_w,
                'status_step' => 4,
            ]);

            return redirect()->route('murid')
                ->with('success', 'Data wali berhasil disimpan');
        } catch (\Exception $e) {

            return back()
                ->with('error', 'Gagal menyimpan data wali')
                ->withInput();
        }
    }

    public function show($id)
    {
        $murid = Murid::with([
            'agama',
            'desa',
            'kabupaten',
            'jurusan',
            'pekerjaanAyah',
            'pendidikanAyah',
            'penghasilanAyah',
            'pekerjaanIbu',
            'pendidikanIbu',
            'penghasilanIbu',
            'pekerjaanWali',
            'pendidikanWali',
            'penghasilanWali'
        ])->findOrFail($id);

        return view('admin.siswa.detail', compact('murid'));
    }

    public function uploadBerkas(Request $request, $id)
    {
        $murid = Murid::findOrFail($id);

        try {

            $data = [];

            // FOTO SANTRI
            if ($request->hasFile('foto_warna_santri')) {
                $data['foto_warna_santri'] = $request->file('foto_warna_santri')
                    ->store('berkas/foto', 'public');
            }

            // FOTO WALI
            if ($request->hasFile('foto_wali_santri_warna')) {
                $data['foto_wali_santri_warna'] = $request->file('foto_wali_santri_warna')
                    ->store('berkas/foto', 'public');
            }

            // KK
            if ($request->hasFile('foto_scan_kk')) {
                $data['foto_scan_kk'] = $request->file('foto_scan_kk')
                    ->store('berkas/dokumen', 'public');
            }

            // AKTA
            if ($request->hasFile('foto_scan_akta')) {
                $data['foto_scan_akta'] = $request->file('foto_scan_akta')
                    ->store('berkas/dokumen', 'public');
            }

            // SKCK
            if ($request->hasFile('foto_scan_skck')) {
                $data['foto_scan_skck'] = $request->file('foto_scan_skck')
                    ->store('berkas/dokumen', 'public');
            }

            // KET SEHAT
            if ($request->hasFile('foto_scan_ket_sehat')) {
                $data['foto_scan_ket_sehat'] = $request->file('foto_scan_ket_sehat')
                    ->store('berkas/dokumen', 'public');
            }

            // IJAZAH
            if ($request->hasFile('foto_ijazah')) {
                $data['foto_ijazah'] = $request->file('foto_ijazah')
                    ->store('berkas/dokumen', 'public');
            }

            // KIP
            if ($request->hasFile('file_kip')) {
                $data['file_kip'] = $request->file('file_kip')
                    ->store('berkas/dokumen', 'public');
            }

            // 🔥 SIMPAN KE DATABASE
            $murid->update($data);

            return back()->with('success', 'Berkas berhasil diupload');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function print($id)
    {
        $murid = Murid::with([
            'agama',
            'desa',
            'kabupaten',
            'jurusan',
            'pekerjaanAyah',
            'pendidikanAyah',
            'penghasilanAyah',
            'pekerjaanIbu',
            'pendidikanIbu',
            'penghasilanIbu',
            'pekerjaanWali',
            'pendidikanWali',
            'penghasilanWali'
        ])->findOrFail($id);

        return view('admin.siswa.printbiodata', compact('murid'));
    }

    public function editstep1($id)
    {
        $murid = Murid::findOrFail($id);
        $agama = Agama::all();
        $jurusan = Jurusan::all();

        return view('admin.siswa.editstep1', compact('murid', 'agama', 'jurusan'));
    }

    public function updateStep1(Request $request, $id)
    {
        try {
            $murid = Murid::findOrFail($id);

            $murid->update([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'no_akta' => $request->no_akta,
                'nisn' => $request->nisn,
                'niup' => $request->niup,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama_id' => $request->agama,
                'dlm_klrg' => $request->dlm_klrg,
                'ank_ke' => $request->ank_ke,
                'sdr' => $request->sdr,
                'jurusan_id' => $request->jurusan,
                'jenis_daftar' => $request->jenis_daftar,
                'asal_sekolah' => $request->asal_sekolah,
                'nomor_ijazah' => $request->nomor_ijazah,
                'tinggal_di' => $request->tinggal_di,
                'tinggi_badan' => $request->tinggi_badan,
                'berat_badan' => $request->berat_badan,
                'hoby' => $request->hoby,
                'cita_cita' => $request->cita_cita,
                'status_step' => 1,
            ]);

            return redirect()->route('murid.edit.step2', $murid->id_person)
                ->with('success', 'Step 1 berhasil diupdate');
        } catch (\Throwable $th) {
            return back()
                ->with('error', 'Gagal menyimpan Step 1')
                ->withInput();
        }
    }

    public function editstep2($id)
    {
        $murid = Murid::findOrFail($id);
        $provinsi = Provinsi::all();

        return view('admin.siswa.editstep2', compact('murid', 'provinsi'));
    }

    public function updateStep2(Request $request, $id)
    {
        $murid = Murid::findOrFail($id);

        $request->validate([
            'kewarganegaraan' => 'required',
            'alamat_lengkap' => 'required',
            'prov' => 'required',
            'kab' => 'required',
            'kec' => 'required',
            'desa' => 'required',
        ]);

        try {

            $murid->update([
                'kewarganegaraan' => $request->kewarganegaraan,
                'alamat_lengkap' => $request->alamat_lengkap,
                'prov' => $request->prov,
                'kab' => $request->kab,
                'kec' => $request->kec,
                'desa' => $request->desa,
                'pos' => $request->pos,
                'status_step' => 2,
            ]);

            return redirect()->route('murid.edit.step3', $murid->id_person)
                ->with('success', 'Step 2 berhasil disimpan');
        } catch (\Exception $e) {

            return back()
                ->with('error', 'Gagal menyimpan Step 2')
                ->withInput();
        }
    }

    public function editstep3($id)
    {
        $murid = Murid::findOrFail($id);
        $pekerjaan = Pekerjaan::all();
        $pendidikan = Pendidikan::all();
        $penghasilan = Penghasilan::all();
        $agama = Agama::all();
        // proteksi step
        if ($murid->status_step < 2) {
            return redirect()->route('murid.edit.step2', $id);
        }
        return view('admin.siswa.editstep3', compact('murid', 'pekerjaan', 'pendidikan', 'penghasilan', 'agama'));
    }

    public function destroy($id)
    {
        $murid = Murid::findOrFail($id);

        // hapus foto jika ada
        if (
            $murid->foto_warna_santri &&
            file_exists(public_path($murid->foto_warna_santri))
        ) {

            unlink(public_path($murid->foto_warna_santri));
        }

        $murid->delete();

        return redirect()
            ->route('murid')
            ->with('success', 'Data berhasil dihapus');
    }

    // public function lengkapi($id)
    // {
    //     $agama = Agama::all();
    //     $jurusan = Jurusan::all();
    //     $pekerjaan = Pekerjaan::all();
    //     $pendidikan = Pendidikan::all();
    //     $penghasilan = Penghasilan::all();
    //     $siswa = Murid::with([
    //         'agama',
    //         'desa',
    //         'kabupaten',
    //         'jurusan',
    //         'pekerjaanAyah',
    //         'pendidikanAyah',
    //         'penghasilanAyah',
    //         'pekerjaanIbu',
    //         'pendidikanIbu',
    //         'penghasilanIbu',
    //         'pekerjaanWali',
    //         'pendidikanWali',
    //         'penghasilanWali'
    //     ])->findOrFail($id);

    //     return view('admin.lengkapi', compact('siswa', 'agama', 'jurusan', 'pekerjaan', 'pendidikan', 'penghasilan'));
    // }
}
