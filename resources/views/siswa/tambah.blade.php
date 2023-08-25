@extends('base.base')
@section('content')
    <form action="{{ route('siswa.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Masukan Nama Siswa</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama">
          </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Masukan Jurusan Siswa</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="jurusan">
          </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kelas Siswa</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kelas">
          </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nisn Siswa</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nisn">
          </div>
        <div class="mb-3">
            <input type="submit" value="Tambahkan" class="btn btn-primary">
          </div>
    </form>
@endsection