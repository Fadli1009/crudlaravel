<?php

namespace App\Http\Controllers;

use App\Models\SiswaModels;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use function PHPSTORM_META\override;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = SiswaModels::all();
        return view('siswa.index', compact('siswa'));
    }

    public function create(Request $request)
    {
        $jurusan = DB::table('jurusans')->get();
        return view('siswa.tambah', compact('jurusan'));
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => "required|max:255",
            'jurusan_id' => "required",
            'kelas' => 'required',
            'nisn' => 'required'

        ]);
        SiswaModels::create($validasi);
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

    public function jurusan()
    {
        return view('jurusan.tambah');
    }
}