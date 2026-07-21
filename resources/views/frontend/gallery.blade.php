<x-frontend-layout>
    <section class="hero-section py-5 text-white">
        <div class="container py-5">
            <h1 class="display-5 fw-bold mb-3">Galeri</h1>
            <p class="lead mb-0">Jelajahi momen-momen sekolah kami dan acara-acara yang berkesan.</p>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                @forelse ($albums as $album)
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                @if ($album->cover)
                                    <img src="{{ asset('storage/' . $album->cover) }}" alt="{{ $album->title }}" class="img-fluid rounded mb-3" style="height: 180px; width: 100%; object-fit: cover;">
                                @else
                                    <div class="bg-light rounded d-flex align-items-center justify-content-center mb-3" style="height: 180px;">
                                        <i class="bi bi-images fs-1 text-muted"></i>
                                    </div>
                                @endif
                                <h5 class="fw-semibold">{{ $album->title }}</h5>
                                <p class="text-muted mb-3">{{ Str::limit($album->description, 120) }}</p>
                                <a href="{{ route('frontend.gallery.show', $album) }}" class="btn btn-outline-primary btn-sm">View Album</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-light border">Albums will appear here once gallery content is added.</div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-frontend-layout>
