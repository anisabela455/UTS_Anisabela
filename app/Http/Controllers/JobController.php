<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $data = Job::all();
        return view('jobs.index', compact('data'));
    }
}