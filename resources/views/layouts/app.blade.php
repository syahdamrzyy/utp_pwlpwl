<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTP PWL Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary: #2f3640;
            --accent: #00a8ff;
            --light-bg: #f5f6fa;
            --text-dark: #2f3640;
            --text-light: #718093;
        }

        body {
            font-family: "Poppins", sans-serif;
            background-color: var(--light-bg);
            color: var(--text-dark);
            margin: 0;
        }

        /* Navbar */
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 10px 30px;
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--primary);
            font-size: 1.3rem;
        }

        .nav-link {
            color: var(--text-light) !important;
            margin-left: 20px;
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--accent) !important;
        }

        /* Content Area */
        .content {
            margin-top: 90px;
            padding: 20px 60px;
        }

        /* Card Style */
        .card {
            border: none;
            border-radius: 14px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.07);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-4px);
        }

        /* Logout button */
        .btn-logout {
            background-color: #e84118;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn-logout:hover {
            background-color: #c23616;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-light);
            font-size: 0.9rem;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <!-- Navbar Atas -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/home') }}">Kelompok 3</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                            <i class="bi bi-house"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('kategori.index') }}" class="nav-link {{ request()->is('kategori*') ? 'active' : '' }}">
                            <i class="bi bi-folder"></i> Kategori
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('barang.index') }}" class="nav-link {{ request()->is('barang*') ? 'active' : '' }}">
                            <i class="bi bi-box-seam"></i> Barang
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn-logout ms-3">
                                <i class="bi bi-door-closed"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>© 2025 UTP Web. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
