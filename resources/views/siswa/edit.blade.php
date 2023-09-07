@extends('layouts.app')
@section('content')
    <form action="{{ route('siswa.update',$siswa->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Masukan Nama Siswa</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="{{ $siswa ->nama }}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Masukan Jurusan Siswa</label>
            <select class="form-select" aria-label="Default select example" name="jurusan_id">
              <option selected>Pilihlah Jurusan Siswa</option>
              @foreach ($jurusan as $item)
                  <option value="{{ $item->id }}">{{ $item->namajurusan }}</option>
              @endforeach
            </select>
          </div>
        {{-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kelas Siswa</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kelas" value="{{ $siswa ->kelas }}">
          </div> --}}
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kelas Siswa</label>
            <select class="form-select" aria-label="Default select example" name='kelas'>
              <option selected>Pilihlah Kelas Siswa</option>
              <option value="Kelas X">Kelas X</option>
              <option value="Kelas XI">Kelas XI</option>
              <option value="Kelas XII">Kelas XII</option>
            </select>
          </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nisn Siswa</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nisn" value="{{ $siswa ->nisn }}">
          </div>
        <div class="mb-3">
            <input type="submit" value="Tambahkan" class="btn btn-primary">
          </div>
    </form>
@endsection