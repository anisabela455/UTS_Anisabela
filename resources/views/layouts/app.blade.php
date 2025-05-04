<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Aplikasi Akuntansi')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-info" style="width: 250px; height: 100vh;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 text-white text-decoration-none">
            <span class="fs-4 fw-bold">Anisa Bela</span>
        </a>
        <hr>

        <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="/" class="nav-link text-white">
                    <i class="bi bi-house-door-fill me-2"></i> Dashboard
                </a>
            </li>

            <!-- Dropdown for Tabel -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="tabelDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-table me-2"></i> Tabel
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="tabelDropdown">
                    <li><a class="dropdown-item" href="{{ route('djurnal.index') }}">Data Djurnal</a></li>
                    <li><a class="dropdown-item" href="{{ url('/hjurnal') }}">Data Hjurnal</a></li>
                    <li><a class="dropdown-item" href="{{ url('/perkiraan') }}">Data Perkiraan</a></li>
                    <li><a class="dropdown-item" href="{{ url('/t_user') }}">Data User</a></li>
                    <li><a class="dropdown-item" href="{{ url('/tabel_akuntansi_master') }}">Tabel Lainnya</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4">
        @yield('content')
    </div>
</div>

<!-- Bootstrap JS & Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</body>
</html>