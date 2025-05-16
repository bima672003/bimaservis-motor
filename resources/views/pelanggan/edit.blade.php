@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Pelanggan</h2>

    <form action="{{ route('pelanggan.update', $pelanggan) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama_pelanggan" class="form-control" value="{{ $pelanggan->nama_pelanggan }}" required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat_pelanggan" class="form-control" required>{{ $pelanggan->alamat_pelanggan }}</textarea>
        </div>

        <div class="mb-3">
            <label>Nomor Telepon</label>
            <input type="text" name="nomor_telepon" class="form-control" value="{{ $pelanggan->nomor_telepon }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $pelanggan->email }}" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
