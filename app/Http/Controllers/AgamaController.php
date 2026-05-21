<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgamaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            abort(403, 'Unauthorized');
        }
        $data = Agama::all();
        return view('admin.agama.index', compact('data', 'user'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama_agama' => 'required'
            ]);

            Agama::create([
                'nama_agama' => $request->nama_agama
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
                'nama_agama' => 'required'
            ]);

            $agama = Agama::findOrFail($id);
            $agama->update([
                'nama_agama' => $request->nama_agama
            ]);

            return back()->with('success', 'Data berhasil diupdate');
        } catch (\Exception $e) {
            return back()->with('error', 'Data gagal diupdate');
        }
    }

    public function destroy($id)
    {
        try {
            Agama::findOrFail($id)->delete();
            return back()->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Data gagal dihapus');
        }
    }
}
