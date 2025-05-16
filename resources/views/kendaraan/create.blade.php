@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Kendaraan Baru</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kendaraan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="merek_kendaraan" class="form-label">Merek Kendaraan</label>
            <input type="text" name="merek_kendaraan" id="merek_kendaraan" class="form-control" value="{{ old('merek_kendaraan') }}" required>
        </div>

        <div class="mb-3">
            <label for="nomor_plat_kendaraan" class="form-label">Nomor Plat Kendaraan</label>
            <input type="text" name="nomor_plat_kendaraan" id="nomor_plat_kendaraan" class="form-control" value="{{ old('nomor_plat_kendaraan') }}" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
            <input type="text" name="jenis_kendaraan" id="jenis_kendaraan" class="form-control" value="{{ old('jenis_kendaraan') }}" required>
        </div>

        <div class="mb-3">
            <label for="tahun_pembuatan" class="form-label">Tahun Pembuatan</label>
            <input type="number" name="tahun_pembuatan" id="tahun_pembuatan" class="form-control" value="{{ old('tahun_pembuatan') }}" required min="1900" max="{{ date('Y') }}">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
