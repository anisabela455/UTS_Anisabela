<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CacheLock;

class CacheLockController extends Controller
{
    public function index()
    {
        $data = CacheLock::all();
        return view('cache_locks.index', compact('data'));
    }
}