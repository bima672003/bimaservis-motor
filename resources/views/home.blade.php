@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">🚗 Selamat Datang di Aplikasi Antrian Servis</h1>
        <p class="lead text-muted">Kelola dan pantau antrian servis kendaraan dengan mudah dan efisien.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <!-- Daftar Antrian -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <i class="fas fa-list fa-2x text-primary mb-3"></i>
                    <h5 class="card-title">Daftar Antrian</h5>
                    <p class="card-text">Lihat semua antrian kendaraan yang sedang berjalan.</p>
                    <a href="{{ route('antrian.index') }}" class="btn btn-outline-primary">Lihat</a>
                </div>
            </div>
        </div>

        <!-- Tambah Antrian -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <i class="fas fa-plus-circle fa-2x text-success mb-3"></i>
                    <h5 class="card-title">Tambah Antrian</h5>
                    <p class="card-text">Tambahkan data antrian kendaraan baru ke sistem.</p>
                    <a href="{{ route('antrian.create') }}" class="btn btn-outline-success">Tambah</a>
                </div>
            </div>
        </div>

        <!-- Daftar Pelanggan -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <i class="fas fa-users fa-2x text-info mb-3"></i>
                    <h5 class="card-title">Daftar Pelanggan</h5>
                    <p class="card-text">Kelola dan lihat semua data pelanggan servis.</p>
                    <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-info">Lihat</a>
                </div>
            </div>
        </div>

        <!-- Tambah Pelanggan -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <i class="fas fa-user-plus fa-2x text-warning mb-3"></i>
                    <h5 class="card-title">Tambah Pelanggan</h5>
                    <p class="card-text">Masukkan data pelanggan baru dengan cepat.</p>
                    <a href="{{ route('pelanggan.create') }}" class="btn btn-outline-warning text-dark">Tambah</a>
                </div>
            </div>
        </div>

        <!-- Daftar Kendaraan -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <i class="fas fa-car fa-2x text-secondary mb-3"></i>
                    <h5 class="card-title">Daftar Kendaraan</h5>
                    <p class="card-text">Lihat semua kendaraan yang sudah terdaftar.</p>
                    <a href="{{ route('kendaraans.index') }}" class="btn btn-outline-secondary">Lihat</a>
                </div>
            </div>
        </div>

        <!-- Tambah Kendaraan -->
        <div class="col">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <i class="fas fa-plus-square fa-2x text-dark mb-3"></i>
                    <h5 class="card-title">Tambah Kendaraan</h5>
                    <p class="card-text">Tambahkan kendaraan pelanggan ke dalam sistem.</p>
                    <a href="{{ route('kendaraans.create') }}" class="btn btn-outline-dark">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
