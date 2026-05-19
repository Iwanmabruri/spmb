<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function userData()
    {
        return view('admin.user');
    }

    public function getUserData(Request $request)
    {
        $user = User::orderBy('id', 'desc')->get();
        return DataTables::of($user)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<button type="button"
                            class="btn btn-danger btn-icon btn-sm rounded-circle btHapus" data-id="' . $row->id . '" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Hapus">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-trash" width="16"
                                height="16" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">

                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7l0 -3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1l0 3" />
                            </svg>

                        </button>';
                return $btn;
            })->rawColumns(['action'])
            ->make(true);
    }

    public function registeruser(Request $request)
    {
        $cek = User::where('email', $request->email)->first();
        if ($cek) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email sudah digunakan'
            ]);
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            'role' => $request->role
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'User berhasil ditambahkan'
        ]);
    }

    public function hapus(Request $request)
    {
        User::where('id', $request->id)->delete();

        return response()->json(['status' => 'success', 'message' => 'Data user berhasil dihapus.']);
    }
}
