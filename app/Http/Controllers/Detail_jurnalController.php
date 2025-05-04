<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_jurnal;

class Detail_jurnalController extends Controller
{
    public function index()
    {
        $detail_jurnal = Detail_jurnal::all();
        return view('detail_jurnal.index', compact('detail_jurnal'));
    }
}
