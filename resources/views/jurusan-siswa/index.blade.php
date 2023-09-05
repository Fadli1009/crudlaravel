@extends('base.base')
@section('content')
@section('title','Jurusan')
@section('jurusan-active','active')
@if(session('succes'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('succes') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
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
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jurusan as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->namajurusan }}</td>
                        <td class="d-flex"><a href="{{ route('jurusan.edit',$item->id) }}" class="btn btn-warning me-4">Edit</a> 
                            <form action="{{ route('jurusan.destroy',$item->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
@endsection