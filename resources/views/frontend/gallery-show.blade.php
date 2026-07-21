<x-frontend-layout>
    <section class="hero-section py-5 text-white">
        <div class="container py-5">
            <h1 class="display-5 fw-bold mb-3">{{ $album->title }}</h1>
            <p class="lead mb-0">{{ $album->description }}</p>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                @forelse ($album->galleries as $gallery)
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-3">
                                @if ($gallery->image)
                                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="img-fluid rounded" style="height: 220px; width: 100%; object-fit: cover;">
                                @endif
                                <h6 class="fw-semibold mt-3 mb-0">{{ $gallery->title }}</h6>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-light border">No images have been added to this album yet.</div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-frontend-layout>
