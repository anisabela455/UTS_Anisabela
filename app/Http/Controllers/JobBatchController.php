<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobBatch;

class JobBatchController extends Controller
{
    public function index()
    {
        $data = JobBatch::all();
        return view('job_batches.index', compact('data'));
    }
}