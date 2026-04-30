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
        $request->validate([
            'nama_pekerjaan' => 'required'
        ]);

        Pekerjaan::create([
            'nama_pekerjaan' => $request->nama_pekerjaan
        ]);

        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pekerjaan' => 'required'
        ]);

        $pekerjaan = Pekerjaan::findOrFail($id);
        $pekerjaan->update([
            'nama_pekerjaan' => $request->nama_pekerjaan
        ]);

        return back()->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Pekerjaan::findOrFail($id)->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
