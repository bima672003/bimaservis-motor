@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Antrian</h2>
    <form action="{{ route('antrian.update', $antrian->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" value="{{ $antrian->nama }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
            <input type="text" name="jenis_kendaraan" value="{{ $antrian->jenis_kendaraan }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="merek_kendaraan" class="form-label">Merek Kendaraan</label>
            <input type="text" name="merek_kendaraan" value="{{ $antrian->merek_kendaraan }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jenis_servis" class="form-label">Jenis Servis</label>
            <input type="text" name="jenis_servis" value="{{ $antrian->jenis_servis }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="biaya" class="form-label">Biaya</label>
            <input type="number" name="biaya" value="{{ $antrian->biaya }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Perbarui</button>
        <a href="{{ route('antrian.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection