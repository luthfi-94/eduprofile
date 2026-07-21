<x-frontend-layout>
    <section class="hero-section py-5 text-white">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-8">
                    <p class="text-uppercase small fw-semibold mb-2 text-light-emphasis">School Profile</p>
                    <h1 class="display-5 fw-bold mb-3">Discover who we are</h1>
                    <p class="lead mb-0">A profile page built from the school profile data managed in the admin panel.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <h2 class="fw-bold mb-4">Our Story</h2>
                    <p class="text-muted">{{ $profile?->history ?? 'School history will be added here once the profile content is published.' }}</p>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-3">School Identity</h5>
                            <p class="mb-2"><strong>School Name:</strong> {{ $setting?->school_name ?? config('app.name') }}</p>
                            <p class="mb-2"><strong>Address:</strong> {{ $setting?->address ?? 'To be updated' }}</p>
                            <p class="mb-0"><strong>Contact:</strong> {{ $setting?->phone ?? 'To be updated' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-2">
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h5 class="fw-semibold">Vision</h5>
                            <p class="text-muted mb-0">{{ $profile?->vision ?? 'Vision will be added here.' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h5 class="fw-semibold">Mission</h5>
                            <p class="text-muted mb-0">{{ $profile?->mission ?? 'Mission will be added here.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
