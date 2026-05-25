<?php

namespace App\Http\Controllers;

use App\Exports\SiswaExport;
use App\Models\Jurusan;
use App\Models\Murid;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            abort(403, 'Unauthorized');
        }
        $totalPendaftar = Murid::count();
        $statistikJurusan = Jurusan::where('status', 'Aktif')
            ->withCount('murid')
            ->get();
        $statistikPanitia = User::where('role', 'petugas')
            ->withCount('murid')
            ->orderByDesc('murid_count')
            ->get();
        return view('admin.dashboard', compact('user', 'statistikJurusan', 'statistikPanitia', 'totalPendaftar'));
    }

    public function exportExcel()
    {

        $tanggal = Carbon::now()->format('d-m-Y_H-i-s');

        return Excel::download(
            new SiswaExport,
            'Data_Murid_' . $tanggal . '.xlsx'
        );
    }

    public function exportPdf()
    {
        // $siswa = Murid::with([
        //     'jurusan',
        //     'provinsi',
        //     'kabupaten',
        //     'kecamatan',
        //     'reldesa'
        // ])
        //     ->where('status', 1)
        //     ->get();

        // $tanggal = now()->format('d-m-Y_H-i-s');

        // $pdf = Pdf::loadView('admin.siswa-pdf', compact('siswa'));

        // return $pdf->download("Data_Murid_$tanggal.pdf");
    }
}
