<?php

namespace App\Http\Controllers;

use App\Models\TPeriode;
use Illuminate\Http\Request;

class TPeriodeController extends Controller
{
    public function index()
    {
        $data = TPeriode::all();
        return view('t_periode.index', compact('data'));
    }

    public function create()
    {
        return view('t_periode.create');
    }

    public function store(Request $request)
    {
        TPeriode::create($request->all());
        return redirect()->route('t-periode.index');
    }

    public function edit($id)
    {
        $item = TPeriode::findOrFail($id);
        return view('t_periode.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        TPeriode::findOrFail($id)->update($request->all());
        return redirect()->route('t-periode.index');
    }

    public function destroy($id)
    {
        TPeriode::destroy($id);
        return redirect()->route('t-periode.index');
    }
}
