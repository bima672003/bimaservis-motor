@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Pelanggan</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelanggans as $pelanggan)
            <tr>
                <td>{{ $pelanggan->nama_pelanggan }}</td>
                <td>{{ $pelanggan->alamat_pelanggan }}</td>
                <td>{{ $pelanggan->nomor_telepon }}</td>
                <td>{{ $pelanggan->email }}</td>
                <td>
                    <a href="{{ route('pelanggan.edit', $pelanggan) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pelanggan.destroy', $pelanggan) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
