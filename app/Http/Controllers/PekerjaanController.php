<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function index()
    {
        $data = Pekerjaan::all();
        return view('admin.pekerjaan.index', compact('data'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama_pekerjaan' => 'required'
            ]);

            Pekerjaan::create([
                'nama_pekerjaan' => $request->nama_pekerjaan
            ]);

            return back()->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            return back()->with('error', 'Data gagal ditambahkan');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama_pekerjaan' => 'required'
            ]);

            $pekerjaan = Pekerjaan::findOrFail($id);
            $pekerjaan->update([
                'nama_pekerjaan' => $request->nama_pekerjaan
            ]);

            return back()->with('success', 'Data berhasil diupdate');
        } catch (\Exception $e) {
            return back()->with('error', 'Data gagal diupdate');
        }
    }

    public function destroy($id)
    {
        try {
            Pekerjaan::findOrFail($id)->delete();
            return back()->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Data gagal dihapus');
        }
    }
}
