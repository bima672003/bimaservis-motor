<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Aplikasi Antrian Servis')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        body {
            background: linear-gradient(135deg, #4b6cb7 0%, #182848 100%);
            min-height: 100vh;
            color: #fff;
            display: flex;
            flex-direction: column;
        }
        main.container {
            flex: 1;
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        .navbar-custom {
            background: rgba(24, 40, 72, 0.85);
            box-shadow: 0 2px 8px rgba(0,0,0,0.3);
        }
        a.navbar-brand, .nav-link {
            color: #ffffffdd;
            font-weight: 600;
        }
        a.navbar-brand:hover, .nav-link:hover {
            color: #fff;
        }
        footer {
            background: rgba(24, 40, 72, 0.85);
            padding: 1rem 0;
            text-align: center;
            font-size: 0.9rem;
            color: #ccc;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Antrian Servis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('antrian.index') }}">Antrian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pelanggan.index') }}">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kendaraans.index') }}">Kendaraan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('transaksi_servis.index') }}">Transaksi Servis</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('pekerjaan_servis.index') }}">Pekerjaan Servis</a>
                </li>
                

                    {{-- Jika ada login system, bisa tambahkan link login/logout di sini --}}
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Aplikasi Antrian Servis - Semua Hak Dilindungi
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
