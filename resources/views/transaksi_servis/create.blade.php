@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Transaksi Servis</h2>

    <form action="{{ route('transaksi_servis.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="antrian_id" class="form-label">ID Antrian</label>
            <input type="number" name="antrian_id" id="antrian_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="total_biaya" class="form-label">Total Biaya</label>
            <input type="number" name="total_biaya" id="total_biaya" class="form-control" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
            <input type="text" name="metode_pembayaran" id="metode_pembayaran" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_pembayaran" class="form-label">Tanggal Pembayaran</label>
            <input type="date" name="tanggal_pembayaran" id="tanggal_pembayaran" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('transaksi_servis.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
