<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        $data = Pendidikan::all();
        return view('admin.pendidikan.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenjang' => 'required'
        ]);

        Pendidikan::create([
            'jenjang' => $request->jenjang
        ]);

        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenjang' => 'required'
        ]);

        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->update([
            'jenjang' => $request->jenjang
        ]);

        return back()->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Pendidikan::findOrFail($id)->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
