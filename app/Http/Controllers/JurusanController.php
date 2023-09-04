<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        return view('jurusan-siswa.index');
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

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}