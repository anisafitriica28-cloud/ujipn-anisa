@extends('admin.layouts.templates')

@section('content')
    <div class="shadow p-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="bg-dark text-center text-light">No</th>
                    <th class="bg-dark text-center text-light">NIS</th>
                    <th class="bg-dark text-center text-light">Nama Siswa</th>
                    <th class="bg-dark text-center text-light">Email</th>
                    <th class="bg-dark text-center text-light">Kelas</th>
                    <th class="bg-dark text-center text-light">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->user->nama }}</td>
                    <td>{{ $item->user->email }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-info btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="#" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endsection
 