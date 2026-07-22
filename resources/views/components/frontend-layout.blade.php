<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UPTD SDN 7 WAY LIMA') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light text-dark">
    <header class="sticky-top shadow-sm bg-white">
        <nav class="navbar navbar-expand-lg navbar-light container py-3">
            {{-- container logo --}}
            <div class="container">
                {{-- <a class="navbar-brand fw-bold mb-2" href="{{ route('frontend.home') }}">EduProfile</a> --}}
                <a href="{{ route('frontend.home') }}" class="d-flex align-items-center text-decoration-none">
                    {{-- img src="{{ asset('images/logo.png') }}" alt="Logo" class="me-2" style="width: 50px; height: 50px;"> --}}
                    <div class="lh-sm">
                        <div class="fw-bold text-dark fs-5">
                            UPTD SDN 7
                        </div>
                        <small class="text-muted">
                            WAY LIMA
                        </small>
                    </div>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#frontendNavbar"
                    aria-controls="frontendNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="frontendNavbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-3">
                        <li class="nav-item"><a
                                class="nav-link {{ request()->routeIs('frontend.school-profile') ? 'active fw-semibold text-primary' : '' }}"
                                href="{{ route('frontend.school-profile') }}">School Profile</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->routeIs('frontend.principal') ? 'active fw-semibold text-primary' : '' }}"
                                href="{{ route('frontend.principal') }}">Principal</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->routeIs('frontend.teachers') ? 'active fw-semibold text-primary' : '' }}"
                                href="{{ route('frontend.teachers') }}">Teachers</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->routeIs('frontend.facilities') ? 'active fw-semibold text-primary' : '' }}"
                                href="{{ route('frontend.facilities') }}">Facilities</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->routeIs('frontend.news*') ? 'active fw-semibold text-primary' : '' }}"
                                href="{{ route('frontend.news') }}">News</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->routeIs('frontend.gallery*') ? 'active fw-semibold text-primary' : '' }}"
                                href="{{ route('frontend.gallery') }}">Gallery</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->routeIs('frontend.ppdb') ? 'active fw-semibold text-primary' : '' }}"
                                href="{{ route('frontend.ppdb') }}">PPDB</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->routeIs('frontend.contact') ? 'active fw-semibold text-primary' : '' }}"
                                href="{{ route('frontend.contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h5 class="fw-bold mb-2">UPTD SDN 7 WAY LIMA</h5>
                    <p class="mb-0 text-light">
                        Jl. Desa Gunung Rejo, Kec. Way Lima, Kab. Pesawaran, Lampung
                    </p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-envelope"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
