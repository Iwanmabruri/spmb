<?php

namespace App\Http\Controllers;

use App\Models\Penghasilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenghasilanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            abort(403, 'Unauthorized');
        }
        $data = Penghasilan::all();
        return view('admin.penghasilan.index', compact('data', 'user'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'kategori' => 'required'
            ]);

            Penghasilan::create([
                'kategori' => $request->kategori
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
                'kategori' => 'required'
            ]);

            $penghasilan = Penghasilan::findOrFail($id);
            $penghasilan->update([
                'kategori' => $request->kategori
            ]);

            return back()->with('success', 'Data berhasil diupdate');
        } catch (\Exception $e) {
            return back()->with('error', 'Data gagal diupdate');
        }
    }

    public function destroy($id)
    {
        try {
            Penghasilan::findOrFail($id)->delete();
            return back()->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Data gagal dihapus');
        }
    }
}
