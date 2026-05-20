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
use Yajra\DataTables\Facades\DataTables;

class MuridController extends Controller
{
    public function index()
    {
        return view('admin.siswa.index');
    }

    public function murid_data()
    {
        $siswa = Murid::where('status', '1')->orderBy('id_person', 'desc')->get();

        return DataTables::of($siswa)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a href="' . route('murid.detail', ['id' => $row->id_person]) . '"
                                                    class="btn btn-info btn-icon btn-sm me-1 rounded-circle text-white"
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

                                                </a>';
                $btn .= '<a href="' . route('murid.edit.step1', [$row->id_person, 'e']) . '"
                                                    class="btn btn-warning btn-icon btn-sm me-1 rounded-circle text-white"
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

                                                </a>';
                $btn .= '<button class="btn btn-primary btn-icon btn-sm me-1 rounded-circle btUpload" data-id="' . $row->id_person . '"
                                                    title="Upload Berkas">

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

                                                </button>';
                $btn .= '<a href="' . route('murid.print', $row->id_person) . '" target="_blank"
                                                    class="btn btn-success btn-icon btn-sm me-1 rounded-circle"
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

                                                </a>';
                $btn .= '<button type="button"
                                                    class="btn btn-danger btn-icon btn-smS rounded-circle btHapus" data-id="' . $row->id_person . '" data-bs-toggle="tooltip"
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

                                                </button>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
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

    public function upload($id)
    {
        $data = Murid::findOrFail($id);
        return response()->json($data);
    }

    public function uploadBerkas(Request $request)
    {
        $murid = Murid::findOrFail($request->id_person);

        try {

            $data = [];

            // FOTO SANTRI
            if ($request->hasFile('foto_warna_santri')) {

                $file = $request->file('foto_warna_santri');
                $namaFile = time() . '_foto.' . $file->getClientOriginalExtension();

                $file->move(public_path('foto_warna_santri'), $namaFile);

                $data['foto_warna_santri'] = 'foto_warna_santri/' . $namaFile;
            }

            // KK
            if ($request->hasFile('foto_scan_kk')) {

                $file = $request->file('foto_scan_kk');
                $namaFile = time() . '_kk.' . $file->getClientOriginalExtension();

                $file->move(public_path('foto_scan_kk'), $namaFile);

                $data['foto_scan_kk'] = 'foto_scan_kk/' . $namaFile;
            }

            // AKTA
            if ($request->hasFile('foto_scan_akta')) {

                $file = $request->file('foto_scan_akta');
                $namaFile = time() . '_akta.' . $file->getClientOriginalExtension();

                $file->move(public_path('foto_scan_akta'), $namaFile);

                $data['foto_scan_akta'] = 'foto_scan_akta/' . $namaFile;
            }

            // SKL
            if ($request->hasFile('foto_skl')) {

                $file = $request->file('foto_skl');
                $namaFile = time() . '_skl.' . $file->getClientOriginalExtension();

                $file->move(public_path('foto_skl'), $namaFile);

                $data['foto_skl'] = 'foto_skl/' . $namaFile;
            }

            // IJAZAH
            if ($request->hasFile('foto_ijazah')) {

                $file = $request->file('foto_ijazah');
                $namaFile = time() . '_ijazah.' . $file->getClientOriginalExtension();

                $file->move(public_path('foto_ijazah'), $namaFile);

                $data['foto_ijazah'] = 'foto_ijazah/' . $namaFile;
            }

            // SKCK
            if ($request->hasFile('foto_scan_skck')) {

                $file = $request->file('foto_scan_skck');
                $namaFile = time() . '_skck.' . $file->getClientOriginalExtension();

                $file->move(public_path('foto_scan_skck'), $namaFile);

                $data['foto_scan_skck'] = 'foto_scan_skck/' . $namaFile;
            }

            // SIMPAN DB
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

    public function editstep1($id, $st)
    {
        $murid = Murid::findOrFail($id);
        $agama = Agama::all();
        $jurusan = Jurusan::all();

        return view('admin.siswa.editstep1', compact('murid', 'agama', 'jurusan', 'st'));
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
                'niup' => $request->niup,
                'status_step' => 1,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Step 1 berhasil tersimpan',
                'id_person' => $id,
                'st' => $request->st
            ]);
        } catch (\Throwable $th) {
            return back()
                ->with('error', 'Gagal menyimpan Step 1')
                ->withInput();
        }
    }

    public function editstep2($id, $st)
    {
        $murid = Murid::findOrFail($id);
        $provinsi = Provinsi::all();

        return view('admin.siswa.editstep2', compact('murid', 'provinsi', 'st'));
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

            return response()->json([
                'status' => 'success',
                'message' => 'Step 2 berhasil tersimpan',
                'id_person' => $id,
                'st' => $request->st
            ]);
        } catch (\Exception $e) {

            return back()
                ->with('error', 'Gagal menyimpan Step 2')
                ->withInput();
        }
    }

    public function editstep3($id, $st)
    {
        $murid = Murid::findOrFail($id);
        $pekerjaan = Pekerjaan::all();
        $pendidikan = Pendidikan::all();
        $penghasilan = Penghasilan::all();
        $agama = Agama::all();
        // proteksi step
        if ($murid->status_step < 2) {
            return redirect()->route('murid.edit.step2', [$id, $st]);
        }
        return view('admin.siswa.editstep3', compact('murid', 'pekerjaan', 'pendidikan', 'penghasilan', 'agama', 'st'));
    }

    public function updateStep3(Request $request, $id)
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

            return response()->json([
                'status' => 'success',
                'message' => 'Step 3 berhasil tersimpan',
                'id_person' => $id,
                'st' => $request->st
            ]);
        } catch (\Exception $e) {

            return back()
                ->with('error', 'Gagal menyimpan Step 3')
                ->withInput();
        }
    }

    public function editstep4($id, $st)
    {
        $murid = Murid::findOrFail($id);
        $pekerjaan = Pekerjaan::all();
        $pendidikan = Pendidikan::all();
        $penghasilan = Penghasilan::all();
        $agama = Agama::all();
        $provinsi = Provinsi::all();
        // proteksi step
        if ($murid->status_step < 3) {
            return redirect()->route('murid.edit.step3', [$id, $st]);
        }
        return view('admin.siswa.editstep4', compact('murid', 'pekerjaan', 'pendidikan', 'penghasilan', 'agama', 'provinsi', 'st'));
    }

    public function updateStep4(Request $request, $id)
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
            'almt_w' => 'required',
            'desa_w' => 'required',
            'kec_w' => 'required',
            'kab_w' => 'required',
            'prov_w' => 'required',
            'pos_w' => 'required',
        ]);

        try {
            if ($request->st == 't') {
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
                    'almt_w' => $request->almt_w,
                    'desa_w' => $request->desa_w,
                    'kec_w' => $request->kec_w,
                    'kab_w' => $request->kab_w,
                    'prov_w' => $request->prov_w,
                    'pos_w' => $request->pos_w,
                    'tgl_daftar' => now(),
                    'status' => "1",
                    'status_step' => 4,
                ]);
            } else {
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
                    'almt_w' => $request->almt_w,
                    'desa_w' => $request->desa_w,
                    'kec_w' => $request->kec_w,
                    'kab_w' => $request->kab_w,
                    'prov_w' => $request->prov_w,
                    'pos_w' => $request->pos_w,
                    'status_step' => 4,
                ]);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Step 4 berhasil tersimpan',
                'id_person' => $id,
                'st' => $request->st
            ]);
        } catch (\Exception $e) {

            return back()
                ->with('error', 'Gagal menyimpan data wali')
                ->withInput();
        }
    }

    public function batal(Request $request)
    {
        $id = $request->id;
        $murid = Murid::findOrFail($id);

        $murid->delete();

        return response()->json(['success' => true]);
    }



    public function hapus(Request $request)
    {
        Murid::where('id_person', $request->id)->update([
            'status' => '0'
        ]);

        return response()->json(['status' => 'success', 'message' => 'Data siswa berhasil dihapus.']);
    }
}
