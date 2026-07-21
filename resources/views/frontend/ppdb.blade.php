<x-frontend-layout>
    <section class="hero-section py-5 text-white">
        <div class="container py-5">
            <h1 class="display-5 fw-bold mb-3">PPDB</h1>
            <p class="lead mb-0">Informasi pendaftaran untuk calon siswa</p>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    @if ($ppdbInfo)
                        <h2 class="fw-bold mb-3">{!! $ppdbInfo->title !!}</h2>
                        <p class="text-muted mb-4">{!! $ppdbInfo->description !!}</p>
                        <div class="row g-4">
                            <div class="col-lg-7">
                                <h5 class="fw-semibold">Persyaratan</h5>
                                <p class="text-muted">{!! $ppdbInfo->requirements !!}</p>
                            </div>
                            <div class="col-lg-5">
                                <div class="bg-light rounded p-4">
                                    <p class="mb-2"><strong>Buka:</strong> {!! $ppdbInfo->registration_open ? $ppdbInfo->registration_open->format('d M Y') : 'TBD' !!}</p>
                                    <p class="mb-0"><strong>Tutup:</strong> {!! $ppdbInfo->registration_close ? $ppdbInfo->registration_close->format('d M Y') : 'TBD' !!}</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="alert alert-light border">PPDB information will be shown here once it is added by the admin.</div>
                    @endif
                </div>
            </div>
            <a href="{{ route('frontend.contact') }}" class="btn btn-primary mt-4">Hubungi Kami</a>
        </div>
    </section>
</x-frontend-layout>
