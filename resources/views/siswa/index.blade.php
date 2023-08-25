@extends('base.base')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Nis</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>{{ $item->kelas }}</td>
                <td>{{ $item->nisn }}</td>
                <td class="d-flex"><a href="{{ route('siswa.edit',$item->id) }}" class="btn btn-warning me-4">Edit</a> 
                    <form action="{{ route('siswa.destroy',$item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection