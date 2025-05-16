<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('antrian.index') }}">Antrian Servis</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('antrian.index') }}">Daftar Antrian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('antrian.create') }}">Tambah Antrian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelanggan.index') }}">Daftar Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelanggan.create') }}">Tambah Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kendaraan.index') }}">Daftar Kendaraan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kendaraan.create') }}">Tambah Kendaraan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pekerjaan_servis.index') }}">Pekerjaan Servis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('transaksi_servis.index') }}">Transaksi Servis</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
