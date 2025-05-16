@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Pekerjaan Servis</h2>

    <form action="{{ route('pekerjaan_servis.update', $pekerjaan_servis->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="antrian_id" class="form-label">Pilih Antrian</label>
            <select name="antrian_id" id="antrian_id" class="form-select" required>
                @foreach($antrians as $antrian)
                    <option value="{{ $antrian->id }}" {{ $pekerjaan_servis->antrian_id == $antrian->id ? 'selected' : '' }}>
                        {{ $antrian->nama }} - {{ $antrian->jenis_kendaraan }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="deskripsi_pekerjaan" class="form-label">Deskripsi Pekerjaan</label>
            <input type="text" name="deskripsi_pekerjaan" class="form-control" value="{{ $pekerjaan_servis->deskripsi_pekerjaan }}" required>
        </div>

        <div class="mb-3">
            <label for="biaya_pekerjaan" class="form-label">Biaya Pekerjaan</label>
            <input type="number" step="0.01" name="biaya_pekerjaan" class="form-control" value="{{ $pekerjaan_servis->biaya_pekerjaan }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('pekerjaan_servis.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
