<x-frontend-layout>
    <section class="hero-section py-5 text-white">
        <div class="container py-5">
            <h1 class="display-5 fw-bold mb-3">Sambutan Kepala Sekolah</h1>
            {{-- <p class="lead mb-0">Sambutan hangat dan profesional dari kepala sekolah.</p> --}}
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-4 text-center">
                            <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 120px; height: 120px;">
                                <i class="bi bi-person-circle fs-1 text-primary"></i>
                            </div>
                            <h4 class="fw-bold">Kepala Sekolah</h4>
                            <p class="text-muted mb-0">{{ $setting?->school_name ?? config('app.name') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h2 class="fw-bold mb-3">Sambutan Kepala Sekolah</h2>
                    <p class="text-justify">Kami percaya setiap peserta didik berhak mendapatkan pengalaman pendidikan yang menyenangkan dan bermakna. Sekolah kami terus berkembang melalui inovasi, disiplin, dan komitmen terhadap keunggulan.</p>
                    <p class="text-justify">Nilai-nilai yang tercermin dalam profil dan misi sekolah kami membimbing setiap langkah kami dalam mendukung siswa dan keluarga.</p>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
