<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FailedJob;

class FailedJobController extends Controller
{
    public function index()
    {
        $data = FailedJob::all();
        return view('failed_jobs.index', compact('data'));
    }
}