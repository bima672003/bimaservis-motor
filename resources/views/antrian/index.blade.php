@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Antrian</h2>
    <a href="{{ route('antrian.create') }}" class="btn btn-primary mb-3">Tambah Antrian</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jenis Kendaraan</th>
            <th>Merek Kendaraan</th>
            <th>Jenis Servis</th>
            <th>Biaya</th>
            <th>Waktu Antrian</th> <!-- kolom waktu baru -->
            <th>Aksi</th>
            <th>Waktu Dibuat</th>

        </tr>
    </thead>
    <tbody>
        @foreach($antrians as $antrian)
        <tr>
            <td>{{ $antrian->nama }}</td>
            <td>{{ $antrian->jenis_kendaraan }}</td>
            <td>{{ $antrian->merek_kendaraan }}</td>
            <td>{{ $antrian->jenis_servis }}</td>
            <td>{{ number_format($antrian->biaya) }}</td>
            <td>{{ $antrian->created_at->format('d-m-Y H:i:s') }}</td> <!-- tampilkan waktu -->
            <td>{{ $antrian->created_at->format('d-m-Y H:i:s') }}</td>
            <td>
                <a href="{{ route('antrian.edit', $antrian->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('antrian.destroy', $antrian->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table
</div>
@endsection
