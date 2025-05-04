<?php

namespace App\Http\Controllers;

use App\Models\TUser;
use Illuminate\Http\Request;

class TUserController extends Controller
{
    public function index()
    {
        $data = TUser::all();
        return view('t_user.index', compact('data'));
    }

    public function create()
    {
        return view('t_user.create');
    }

    public function store(Request $request)
    {
        TUser::create($request->all());
        return redirect()->route('t_user.index');
    }

    public function edit($id)
    {
        $data = TUser::findOrFail($id);
        return view('t_user.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $user = TUser::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('t_user.index');
    }

    public function destroy($id)
    {
        TUser::destroy($id);
        return redirect()->route('t_user.index');
    }
}
