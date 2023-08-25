<?php

namespace App\Http\Controllers;

use App\Models\SiswaModels;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = SiswaModels::all();
        return view('siswa.index', compact('siswa'));
    }

    public function create(Request $request)
    {
        return view('siswa.tambah');
    }

    public function store(Request $request)
    {
        SiswaModels::create($request->except(['_token']));
        return redirect('/siswa');

    }

    public function show($id)
    {
        //
    }

    public function edit(Request $request, $id)
    {
        $siswa = SiswaModels::findOrFail($id);
        return view('siswa.edit', compact(['siswa']));
    }

    public function update(Request $request, $id)
    {
        $siswa = SiswaModels::findOrFail($id);
        $valid = $request->validate([
            'nama' => 'required',
            'jurusan' => "required",
            'kelas' => 'required',
            'nisn' => 'required'
        ]);
        $siswa->update($valid);
        return redirect('/siswa');
    }

    public function destroy($id, Request $request)
    {
        $siswa = SiswaModels::findOrFail($id);
        $siswa->delete();
        return redirect('/siswa');
    }
}