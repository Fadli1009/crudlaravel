@extends('layouts.app')
@section('content')
    <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Masukan Jurusan Siswa</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="namajurusan" value="{{ $jurusan->namajurusan }}">
          </div>
        <div class="mb-3">
            <input type="submit" value="Tambahkan" class="btn btn-primary">
        </div>
    </form>
@endsection