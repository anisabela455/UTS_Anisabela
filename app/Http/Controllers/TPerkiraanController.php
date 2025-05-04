<?php

namespace App\Http\Controllers;

use App\Models\TPerkiraan;
use Illuminate\Http\Request;

class TPerkiraanController extends Controller

{
    public function index()
    {
        $data = TPerkiraan::all();
        return view('t_perkiraan.index', compact('data'));
    }

    public function create()
    {
        return view('t_perkiraan.create');
    }

    public function store(Request $request)
    {
        TPerkiraan::create($request->all());
        return redirect()->route('t-perkiraan.index');
    }

    public function edit($id)
    {
        $item = TPerkiraan::findOrFail($id);
        return view('t_perkiraan.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = TPerkiraan::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('t-perkiraan.index');
    }

    public function destroy($id)
    {
        $item = TPerkiraan::findOrFail($id);
        $item->delete();
        return redirect()->route('t-perkiraan.index');
    }
}
