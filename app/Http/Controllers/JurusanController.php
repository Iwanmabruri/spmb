<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JurusanController extends Controller
{
    public function index()
    {
        $data = Jurusan::all();
        $total = $data->count();
        return view('admin.jurusan.index', compact('data', 'total'));
    }

    public function create()
    {
        return view('admin.jurusan.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'bidang_keahlian' => 'required',
                'program_keahlian' => 'required',
                'kons_keahlian' => 'required',
                'deskripsi' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'status' => 'required'
            ]);

            // 1. Proses upload foto
            $fotoPath = null;
            if ($request->hasFile('foto')) {
                // Menyimpan ke: storage/app/public/jurusan
                $fotoPath = $request->file('foto')->store('jurusan', 'public');
            }

            Jurusan::create([
                'bidang_keahlian' => $request->bidang_keahlian,
                'program_keahlian' => $request->program_keahlian,
                'kons_keahlian' => $request->kons_keahlian,
                'deskripsi' => $request->deskripsi,
                'foto' => $fotoPath, // Simpan path hasil upload
                'status' => $request->status
            ]);

            return redirect()->route('jurusan')
                ->with('success', 'Data jurusan berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data = Jurusan::findOrFail($id);
        return view('admin.jurusan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'bidang_keahlian' => 'required',
                'program_keahlian' => 'required',
                'kons_keahlian' => 'required',
                'deskripsi' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'status' => 'required'
            ]);

            $data = Jurusan::findOrFail($id);

            // Proses Foto (Tambahkan ini agar foto terupdate)
            if ($request->hasFile('foto')) {
                if ($data->foto) {
                    Storage::disk('public')->delete($data->foto);
                }
                $data->foto = $request->file('foto')->store('jurusan', 'public');
            }

            $data->update([
                'bidang_keahlian' => $request->bidang_keahlian,
                'program_keahlian' => $request->program_keahlian,
                'kons_keahlian' => $request->kons_keahlian,
                'deskripsi' => $request->deskripsi,
                'foto' => $data->foto,
                'status' => $request->status
            ]);

            return redirect()->route('jurusan')
                ->with('success', 'Data berhasil diupdate');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal update data');
        }
    }

    public function destroy($id)
    {
        try {
            Jurusan::findOrFail($id)->delete();

            return redirect()->route('jurusan')
                ->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal menghapus data');
        }
    }
}
