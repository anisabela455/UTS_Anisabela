<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;

class SessionController extends Controller
{
    public function index()
    {
        $data = Session::all();
        return view('sessions.index', compact('data'));
    }
}