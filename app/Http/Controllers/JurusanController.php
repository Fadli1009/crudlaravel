<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('jurusan-siswa.index', compact('jurusan'));
    }

    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'namajurusan' => "required"
        ]);
        Jurusan::create($validate);
        return redirect('/jurusan')->with('succes', 'Berhasil menambahkan jurusan');

    }

    public function show($id)
    {
        //
    }

    public function edit($id, Request $request)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan-siswa.edit', compact('jurusan'));
    }

    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $validate = $request->validate([
            'namajurusan' => 'required'
        ]);
        $jurusan->update($validate);
        return redirect('/jurusan')->with('success', 'Update data berhasil');
    }

    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();
        return redirect('/jurusan');

    }
}