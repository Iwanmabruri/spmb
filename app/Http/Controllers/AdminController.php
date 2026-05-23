<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Murid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
