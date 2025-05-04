<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HjurnalController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel hjurnal
        $hjurnal = DB::table('hjurnal')->get();

        // Kirim data ke view
        return view('hjurnal.index', compact('hjurnal'));
    }
}
