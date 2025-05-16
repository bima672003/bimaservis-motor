@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Kendaraan</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-3">Tambah Kendaraan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Merek Kendaraan</th>
                <th>Nomor Plat</th>
                <th>Jenis Kendaraan</th>
                <th>Tahun Pembuatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($kendaraans as $kendaraan)
                <tr>
                    <td>{{ $kendaraan->merek_kendaraan }}</td>
                    <td>{{ $kendaraan->nomor_plat_kendaraan }}</td>
                    <td>{{ $kendaraan->jenis_kendaraan }}</td>
                    <td>{{ $kendaraan->tahun_pembuatan }}</td>
                    <td>
                        <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Data kendaraan kosong.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
