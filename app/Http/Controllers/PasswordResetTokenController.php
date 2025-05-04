<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PasswordResetToken;

class PasswordResetTokenController extends Controller
{
    public function index()
    {
        $data = PasswordResetToken::all();
        return view('password_reset_tokens.index', compact('data'));
    }
}