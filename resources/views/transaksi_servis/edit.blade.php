@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Transaksi Servis</h2>

    <form action="{{ route('transaksi_sservis.update', $transaksiServis->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="antrian_id" class="form-label">ID Antrian</label>
            <input type="number" name="antrian_id" id="antrian_id" class="form-control" value="{{ $transaksiServis->antrian_id }}" required>
        </div>

        <div class="mb-3">
            <label for="total_biaya" class="form-label">Total Biaya</label>
            <input type="number" name="total_biaya" id="total_biaya" class="form-control" step="0.01" value="{{ $transaksiServis->total_biaya }}" required>
        </div>

        <div class="mb-3">
            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
            <input type="text" name="metode_pembayaran" id="metode_pembayaran" class="form-control" value="{{ $transaksiServis->metode_pembayaran }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_pembayaran" class="form-label">Tanggal Pembayaran</label>
            <input type="date" name="tanggal_pembayaran" id="tanggal_pembayaran" class="form-control" value="{{ $transaksiServis->tanggal_pembayaran }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('transaksis.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
