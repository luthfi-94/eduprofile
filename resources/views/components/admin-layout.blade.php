<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UPTD SDN 7 WAY LIMA') }} - Admin</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <div class="d-flex min-vh-100">
        <aside class="d-none d-lg-flex flex-column justify-content-between bg-gradient-primary text-white" style="width: 260px;">
            <div>
                <div class="d-flex align-items-center gap-2 px-4 py-4 border-bottom border-white border-opacity-25">
                    <div class="rounded-circle bg-white text-primary d-flex align-items-center justify-content-center" style="width: 42px; height: 42px;">
                        <i class="bi bi-building fs-5"></i>
                    </div>
                    <div>
                        <div class="fw-semibold">UPTD SDN 7</div>
                        <small class="opacity-75">WAY LIMA</small>
                    </div>
                </div>

                <nav class="px-3 py-3">
                    <div class="text-uppercase small fw-semibold opacity-75 mb-2">Main</div>
                    <x-admin-nav-links variant="desktop" />
                </nav>
            </div>

            <div class="px-3 pb-3">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-light w-100">
                        <i class="bi bi-box-arrow-right me-2"></i>Logout
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex-grow-1 d-flex flex-column">
            <header class="bg-white shadow-sm border-bottom">
                <div class="container-fluid py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-3">
                            <button class="btn btn-outline-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas">
                                <i class="bi bi-list"></i>
                            </button>
                            <div>
                                <h1 class="h5 mb-0 fw-semibold">Admin Area</h1>
                                <p class="text-muted small mb-0">UPTD SDN 7 WAY LIMA</p>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle me-2"></i>{{ Auth::user()->name ?? 'Admin' }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="bi bi-person me-2"></i>Profile</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="dropdown-item text-danger" type="submit"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <div class="container-fluid py-4 flex-grow-1">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="text-decoration-none">Admin</a></li>
                        @if (isset($breadcrumb))
                            {{ $breadcrumb }}
                        @endif
                    </ol>
                </nav>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{ $slot }}
            </div>

            <footer class="bg-white border-top py-3 mt-auto">
                <div class="container-fluid text-center text-muted small">
                    © {{ date('Y') }} UPTD SDN 7 WAY LIMA. All rights reserved.
                </div>
            </footer>
        </div>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarOffcanvas" aria-labelledby="sidebarOffcanvasLabel">
        <div class="offcanvas-header bg-primary text-white">
            <h5 class="offcanvas-title" id="sidebarOffcanvasLabel">UPTD SDN 7 WAY LIMA</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <nav class="p-3">
                <x-admin-nav-links variant="mobile" />
            </nav>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.ckeditor').forEach(function (element) {
                if (!element.dataset.ckeditorInitialized) {
                    ClassicEditor
                        .create(element)
                        .then(function (editor) {
                            element.dataset.ckeditorInitialized = 'true';
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                }
            });
        });
    </script>
</body>
</html>
