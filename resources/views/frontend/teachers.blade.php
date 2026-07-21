<x-frontend-layout>
    <section class="hero-section py-5 text-white">
        <div class="container py-5">
            <h1 class="display-5 fw-bold mb-3">Our Teachers</h1>
            <p class="lead mb-0">Meet the dedicated educators who guide and inspire our students every day.</p>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                @forelse ($teachers as $teacher)
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    @if ($teacher->photo)
                                        <img src="{{ asset('storage/' . $teacher->photo) }}" alt="{{ $teacher->name }}" class="rounded-circle me-3" style="width: 64px; height: 64px; object-fit: cover;">
                                    @else
                                        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center me-3" style="width: 64px; height: 64px;">
                                            <i class="bi bi-person-circle fs-3 text-primary"></i>
                                        </div>
                                    @endif
                                    <div>
                                        <h5 class="fw-semibold mb-1">{{ $teacher->name }}</h5>
                                        <p class="text-muted mb-0">{{ $teacher->position }}</p>
                                    </div>
                                </div>
                                <p class="text-muted mb-2"><strong>Subject:</strong> {{ $teacher->subject }}</p>
                                <p class="text-muted mb-2"><strong>Education:</strong> {{ $teacher->education }}</p>
                                <p class="text-muted mb-0"><strong>NIP:</strong> {{ $teacher->nip }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-light border">Teacher profiles will appear here once they are added in the admin panel.</div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-frontend-layout>
