@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Transaksi Servis</h2>

    <a href="{{ route('transaksi_servis.create') }}" class="btn btn-success mb-3">Tambah Transaksi</a>

    @if($transaksis->isEmpty())
        <p>Tidak ada transaksi servis.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Antrian</th>
                    <th>Total Biaya</th>
                    <th>Metode Pembayaran</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transaksis as $transaksi)
                <tr>
                    <td>{{ $transaksi->id }}</td>
                    <td>{{ $transaksi->antrian_id }}</td>
                    <td>Rp{{ number_format($transaksi->total_biaya, 2, ',', '.') }}</td>
                    <td>{{ $transaksi->metode_pembayaran }}</td>
                    <td>{{ $transaksi->tanggal_pembayaran }}</td>
                    <td>
                        <a href="{{ route('transaksi_servis.edit', $transaksi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('transaksi_servis.destroy', $transaksi->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus transaksi ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
