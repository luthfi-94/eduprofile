<x-frontend-layout>
    <section class="hero-section py-5 text-white">
        <div class="container py-5">
            <h1 class="display-5 fw-bold mb-3">Contact Us</h1>
            <p class="lead mb-0">Reach out to our school for questions, visits, or admission inquiries.</p>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4 align-items-start">
                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            @if ($contact)
                                <p class="mb-3"><i class="bi bi-geo-alt-fill text-primary me-2"></i>{{ $contact->address }}</p>
                                <p class="mb-3"><i class="bi bi-telephone-fill text-primary me-2"></i>{{ $contact->phone }}</p>
                                <p class="mb-3"><i class="bi bi-envelope-fill text-primary me-2"></i>{{ $contact->email }}</p>
                                @if ($contact->google_maps)
                                    <div class="mt-4">{!! $contact->google_maps !!}</div>
                                @endif
                            @else
                                <div class="alert alert-light border">Contact details will appear here once the admin adds them.</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0 shadow-sm bg-light">
                        <div class="card-body p-4">
                            <h5 class="fw-semibold mb-3">Need help?</h5>
                            <p class="text-muted">We are happy to assist with questions about school life, facilities, or admission procedures.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
