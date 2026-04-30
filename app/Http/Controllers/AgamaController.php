<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    public function index()
    {
        $data = Agama::all();
        return view('admin.agama.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_agama' => 'required'
        ]);

        Agama::create([
            'nama_agama' => $request->nama_agama
        ]);

        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_agama' => 'required'
        ]);

        $agama = Agama::findOrFail($id);
        $agama->update([
            'nama_agama' => $request->nama_agama
        ]);

        return back()->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Agama::findOrFail($id)->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
