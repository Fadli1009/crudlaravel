@extends('base.base')
@section('content')
    <form action="{{ route('jurusan.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Masukan Jurusan Siswa</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="namajurusan">
          </div>
        <div class="mb-3">
            <input type="submit" value="Tambahkan" class="btn btn-primary">
        </div>
    </form>

@endsection