<x-frontend-layout>
    <section class="hero-section py-5 bg-gradient-primary text-white">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-8">
                    <p class="text-uppercase small fw-semibold mb-2 text-light">Profil Sekolah</p>
                    <h1 class="display-5 fw-bold mb-3">UPTD SDN 7 WAY LIMA</h1>
                    <p class="lead mb-0">Halaman profil yang dibangun dari data profil sekolah</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-body p-4 text-center">
                                <img src="{{ asset('storage/' . $setting?->logo) }}" alt="Logo Sekolah" align="center" style="width: 120px; height: 120px;">
                                <h4></h4>
                                <h4 class="fw-bold">{{ $setting?->school_name ?? config('app.name') }}</h4>
                                {{-- <p class="text-muted mb-0">{{ $setting?->school_name ?? config('app.name') }}</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-body p-4">
                                <h5 class="fw-bold mb-3">Identitas Sekolah</h5>
                                <p class="mb-2"><strong>Nama Sekolah:</strong>
                                    {{ $setting?->school_name ?? config('app.name') }}</p>
                                <p class="mb-2"><strong>Alamat:</strong> {{ $setting?->address ?? 'Akan diperbarui' }}
                                </p>
                                <p class="mb-0"><strong>Kontak:</strong> {{ $setting?->phone ?? 'Akan diperbarui' }}
                                </p>
                            </div>
                    </div>
                </div>
                {{-- <div class="row g-4 mt-2">     
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm rounded-4 bg-gradient-primary text-white">
                            <div class="card-body p-4">
                                <h5 class="fw-bold mb-3">Identitas Sekolah</h5>
                                <p class="mb-2"><strong>Nama Sekolah:</strong>
                                    {{ $setting?->school_name ?? config('app.name') }}</p>
                                <p class="mb-2"><strong>Alamat:</strong> {{ $setting?->address ?? 'Akan diperbarui' }}
                                </p>
                                <p class="mb-0"><strong>Kontak:</strong> {{ $setting?->phone ?? 'Akan diperbarui' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100 bg-gradient-warning text-dark">
                            <div class="card-body p-4">
                                <h5 class="fw-bold mb-3">Sejarah Sekolah</h5>
                                <div class="text-muted mb-0">{!! $profile?->history ?? 'Sejarah sekolah akan ditambahkan di sini.' !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="container">
                <div class="row g-4 mt-2">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100 bg-light">
                            <div class="card-body p-4">
                                <h5 class="fw-bold mb-3">Visi</h5>
                                <div class="text-muted mb-0">{!! $profile?->vision ?? 'Visi akan ditambahkan di sini.' !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100 bg-light">
                            <div class="card-body p-4">
                                <h5 class="fw-bold mb-3">Misi</h5>
                                <div class="text-muted mb-0">{!! $profile?->mission ?? 'Misi akan ditambahkan di sini.' !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
