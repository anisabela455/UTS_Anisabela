<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cache;

class CacheController extends Controller
{
    public function index()
    {
        $data = Cache::all();
        return view('cache.index', compact('data'));
    }
}