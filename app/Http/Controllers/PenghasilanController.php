<?php

namespace App\Http\Controllers;

use App\Models\Penghasilan;
use Illuminate\Http\Request;

class PenghasilanController extends Controller
{
    public function index()
    {
        $data = Penghasilan::all();
        return view('admin.penghasilan.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required'
        ]);

        Penghasilan::create([
            'kategori' => $request->kategori
        ]);

        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required'
        ]);

        $penghasilan = Penghasilan::findOrFail($id);
        $penghasilan->update([
            'kategori' => $request->kategori
        ]);

        return back()->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Penghasilan::findOrFail($id)->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
