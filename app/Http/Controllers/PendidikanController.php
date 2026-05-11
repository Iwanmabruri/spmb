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
        try {
            $request->validate([
                'jenjang' => 'required'
            ]);

            Pendidikan::create([
                'jenjang' => $request->jenjang
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
                'jenjang' => 'required'
            ]);

            $pendidikan = Pendidikan::findOrFail($id);
            $pendidikan->update([
                'jenjang' => $request->jenjang
            ]);

            return back()->with('success', 'Data berhasil diupdate');
        } catch (\Exception $e) {
            return back()->with('error', 'Data gagal diupdate');
        }
    }

    public function destroy($id)
    {
        try {
            Pendidikan::findOrFail($id)->delete();
            return back()->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Data gagal dihapus');
        }
    }
}
