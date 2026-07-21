<x-frontend-layout>
    <section class="hero-section py-5 text-white">
        <div class="container py-5">
            <h1 class="display-5 fw-bold mb-3">Principal's Welcome</h1>
            <p class="lead mb-0">A warm and professional introduction from the office of the principal.</p>
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
                            <h4 class="fw-bold">Principal</h4>
                            <p class="text-muted mb-0">{{ $setting?->school_name ?? config('app.name') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h2 class="fw-bold mb-3">Message from the Principal</h2>
                    <p class="text-muted">We believe every learner deserves a joyful and meaningful educational experience. Our school continues to grow through innovation, discipline, and commitment to excellence.</p>
                    <p class="text-muted">The values reflected in our school profile and mission guide us in every step we take to support students and families.</p>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
