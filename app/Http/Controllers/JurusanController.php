<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $data = Jurusan::all();
        return view('admin.jurusan.index', compact('data'));
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
                'status' => 'required'
            ]);

            Jurusan::create([
                'bidang_keahlian' => $request->bidang_keahlian,
                'program_keahlian' => $request->program_keahlian,
                'kons_keahlian' => $request->kons_keahlian,
                'status' => $request->status
            ]);

            return redirect()->route('jurusan')
                ->with('success', 'Data jurusan berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal menyimpan data');
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
                'status' => 'required'
            ]);

            $data = Jurusan::findOrFail($id);

            $data->update([
                'bidang_keahlian' => $request->bidang_keahlian,
                'program_keahlian' => $request->program_keahlian,
                'kons_keahlian' => $request->kons_keahlian,
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
