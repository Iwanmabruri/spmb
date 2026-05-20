<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Mitra;
use App\Models\Murid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::first();
        $totalPendaftar = Murid::count();
        $mitra = Mitra::where('status', 1)->get();

        $rpl = Murid::whereHas('jurusan', function ($q) {
            $q->where('program_keahlian', 'Pengembangan Perangkat Lunak dan Gim (PPLG)');
        })->count();

        $akl = Murid::whereHas('jurusan', function ($q) {
            $q->where('program_keahlian', 'Akuntansi dan Keuangan Lembaga');
        })->count();

        return view('home', compact(
            'totalPendaftar',
            'rpl',
            'akl',
            'banner',
            'mitra'
        ));
    }

    public function indexBanner()
    {
        $banner = Banner::latest()->get();
        return view('banner', compact('banner'));
    }

    public function storeBanner(Request $request)
    {
        $namaFile = null;

        if ($request->hasFile('gambar')) {

            $file = $request->file('gambar');

            $namaFile = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('upload/banner'), $namaFile);
        }

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required'
        ], [
            'judul.required' => 'Tidak boleh kosong',
            'deskripsi.required' => 'Tidak boleh kosong',
            'gambar.required' => 'Tidak boleh kosong'
        ]);

        Banner::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $namaFile,
        ]);

        return redirect()->back()->with('success', 'Banner berhasil ditambahkan');
    }

    public function updateBanner(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        $namaFile = $banner->gambar;

        if ($request->hasFile('gambar')) {

            if ($banner->gambar && file_exists(public_path('upload/banner/' . $banner->gambar))) {
                unlink(public_path('upload/banner/' . $banner->gambar));
            }

            $file = $request->file('gambar');

            $namaFile = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('upload/banner'), $namaFile);
        }

        $banner->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $namaFile,
        ]);

        return redirect()->route('banner.index')
            ->with('success', 'Banner berhasil diupdate');
    }

    public function destroyBanner($id)
    {
        $banner = Banner::findOrFail($id);

        if ($banner->gambar && file_exists(public_path('upload/banner/' . $banner->gambar))) {
            unlink(public_path('upload/banner/' . $banner->gambar));
        }

        $banner->delete();

        return redirect()->back()->with('success', 'Banner berhasil dihapus');
    }

    public function indexMitra()
    {
        $mitra = Mitra::where('status', 1)->get();
        // dd($mitra);

        return view('mitra', compact('mitra'));
    }

    public function storeMitra(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'status' => 'required',
            'image' => 'required|image'
        ], [
            'nama.required' => 'Tidak boleh kosong',
            'status.required' => 'Tidak boleh kosong',
            'image.required' => 'Tidak boleh kosong'
        ]);

        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('upload/mitra'), $filename);

        Mitra::create([
            'nama' => $request->nama,
            'status' => $request->status,
            'image' => $filename
        ]);

        return redirect()->back()->with('success', 'Data mitra berhasil ditambahkan');
    }

    // UPDATE
    public function updateMitra(Request $request, $id)
    {
        $mitra = Mitra::findOrFail($id);

        $data = [
            'nama' => $request->nama,
            'status' => $request->status,
        ];

        if ($request->hasFile('image')) {

            // hapus lama
            if ($mitra->image && File::exists(public_path('upload/mitra/' . $mitra->image))) {
                File::delete(public_path('upload/mitra/' . $mitra->image));
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/mitra'), $filename);

            $data['image'] = $filename;
        }

        $mitra->update($data);

        return redirect()->back()->with('success', 'Data mitra berhasil diupdate');
    }

    // DELETE
    public function destroyMitra($id)
    {
        $mitra = Mitra::findOrFail($id);

        if ($mitra->image && File::exists(public_path('upload/mitra/' . $mitra->image))) {
            File::delete(public_path('upload/mitra/' . $mitra->image));
        }

        $mitra->delete();

        return redirect()->back()->with('success', 'Data mitra berhasil dihapus');
    }
}
