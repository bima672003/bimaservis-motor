@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Antrian</h2>
    <form action="{{ route('antrian.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
            <input type="text" name="jenis_kendaraan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="merek_kendaraan" class="form-label">Merek Kendaraan</label>
            <input type="text" name="merek_kendaraan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jenis_servis" class="form-label">Jenis Servis</label>
            <input type="text" name="jenis_servis" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="biaya" class="form-label">Biaya</label>
            <input type="number" name="biaya" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('antrian.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
