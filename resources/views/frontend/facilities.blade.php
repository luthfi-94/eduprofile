<x-frontend-layout>
    <section class="hero-section py-5 text-white">
        <div class="container py-5">
            <h1 class="display-5 fw-bold mb-3">Fasilitas</h1>
            <p class="lead mb-0">Jelajahi ruang dan fasilitas yang dirancang untuk mendukung pembelajaran yang unggul.</p>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                @forelse ($facilities as $facility)
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                @if ($facility->photo)
                                    <img src="{{ asset('storage/' . $facility->photo) }}" alt="{{ $facility->name }}" class="img-fluid rounded mb-3" style="height: 180px; width: 100%; object-fit: cover;">
                                @endif
                                <h5 class="fw-semibold">{{ $facility->name }}</h5>
                                <p class="text-muted mb-0">{{ $facility->description }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-light border">Fasilitas akan ditampilkan di sini segera setelah ditambahkan.</div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-frontend-layout>
