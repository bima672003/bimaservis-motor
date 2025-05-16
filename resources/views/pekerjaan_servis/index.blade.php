@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Pekerjaan Servis</h2>

    <a href="{{ route('pekerjaan_servis.create') }}" class="btn btn-success mb-3">Tambah Pekerjaan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Antrian</th>
                <th>Deskripsi</th>
                <th>Biaya</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pekerjaans as $pekerjaan)
                <tr>
                    <td>{{ $pekerjaan->id }}</td>
                    <td>{{ $pekerjaan->antrian_id }}</td>
                    <td>{{ $pekerjaan->deskripsi_pekerjaan }}</td>
                    <td>Rp{{ number_format($pekerjaan->biaya_pekerjaan, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('pekerjaan_servis.edit', $pekerjaan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pekerjaan_servis.destroy', $pekerjaan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
