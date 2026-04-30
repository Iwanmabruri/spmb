<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenghasilanController extends Controller
{
    public function index()
    {
        return view('admin.penghasilan.index');
    }
}
