<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Migration;

class MigrationController extends Controller
{
    public function index()
    {
        $data = Migration::all();
        return view('migrations.index', compact('data'));
    }
}