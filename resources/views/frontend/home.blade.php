<x-frontend-layout>
    <section class="hero-section py-5 py-lg-6 text-white">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <p class="text-uppercase small fw-semibold mb-3 text-light">Selamat Datang di</p>
                    <h1 class="display-4 fw-bold mb-3">UPTD SDN 7 WAY LIMA</h1>
                    <p class="lead mb-4">Lingkungan belajar yang terpercaya yang mendukung keunggulan akademik, karakter, dan keterampilan siap masa depan.</p>
                    <div class="d-flex flex-wrap gap-3">
                        {{-- <a href="#profile" class="btn btn-light btn-lg">Discover More</a> --}}
                        <a href="{{ route('frontend.ppdb') }}" class="btn btn-outline-light btn-lg">Registrasi PPDB</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-3">Why Students Thrive Here</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Modern and supportive campus</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Experienced educators</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Balanced academic and character development</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="welcome" class="py-5 bg-white">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="bg-primary text-white rounded-4 p-4 shadow-sm h-100">
                        <p class="text-uppercase small fw-semibold mb-2">Principal Welcome</p>
                        <h3 class="fw-bold mb-3">A warm message from our principal</h3>
                        <p class="mb-0">We are committed to building a school culture of excellence, curiosity, and care. Every student is welcomed, supported, and guided toward meaningful growth.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h2 class="fw-bold mb-3">School Profile</h2>
                    <p class="text-muted mb-4">UPTD SDN 7 WAY LIMA is dedicated to delivering quality education through innovation, disciplined learning, and a strong sense of community.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="fw-semibold">Vision</h5>
                                    <p class="text-muted mb-0">To become a leading school that develops globally minded, character-driven learners.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="fw-semibold">Mission</h5>
                                    <p class="text-muted mb-0">To provide meaningful education rooted in excellence, integrity, and service.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news" class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold mb-0">Latest News</h2>
                <a href="#" class="btn btn-outline-primary btn-sm">View All</a>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <p class="text-primary fw-semibold small mb-2">Academic</p>
                            <h5 class="fw-semibold">New learning programs launched</h5>
                            <p class="text-muted mb-0">Our latest initiatives are designed to strengthen student engagement and achievement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <p class="text-primary fw-semibold small mb-2">Events</p>
                            <h5 class="fw-semibold">School competition season begins</h5>
                            <p class="text-muted mb-0">Students are preparing for an exciting series of academic and extracurricular competitions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <p class="text-primary fw-semibold small mb-2">Community</p>
                            <h5 class="fw-semibold">Community outreach program expanded</h5>
                            <p class="text-muted mb-0">Our school continues to build partnerships that support student growth beyond the classroom.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="facilities" class="py-5 bg-white">
        <div class="container">
            <h2 class="fw-bold mb-4">Fasilitas</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-mortarboard-fill fs-3 text-primary mb-3"></i>
                            <h5 class="fw-semibold">Ruang Kelas Modern</h5>
                            <p class="text-muted">Ruang yang nyaman dan inspiratif untuk pembelajaran yang fokus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-laptop-fill fs-3 text-primary mb-3"></i>
                            <h5 class="fw-semibold">Laboratorium Teknologi</h5>
                            <p class="text-muted">Kesempatan pembelajaran digital langsung bagi siswa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-tree-fill fs-3 text-primary mb-3"></i>
                            <h5 class="fw-semibold">Kampus Hijau</h5>
                            <p class="text-muted">Lingkungan yang sehat yang mendukung kesejahteraan dan kreativitas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="py-5">
        <div class="container">
            <h2 class="fw-bold mb-4">Gallery Preview</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="bg-light rounded d-flex align-items-center justify-content-center" style="height: 180px;">
                                <i class="bi bi-images fs-1 text-muted"></i>
                            </div>
                            <h5 class="fw-semibold mt-3">Campus Life</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="bg-light rounded d-flex align-items-center justify-content-center" style="height: 180px;">
                                <i class="bi bi-images fs-1 text-muted"></i>
                            </div>
                            <h5 class="fw-semibold mt-3">Learning Activities</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="bg-light rounded d-flex align-items-center justify-content-center" style="height: 180px;">
                                <i class="bi bi-images fs-1 text-muted"></i>
                            </div>
                            <h5 class="fw-semibold mt-3">School Events</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-2">Our Numbers Speak</h2>
                    <p class="mb-0">A growing school community driven by opportunity and excellence.</p>
                </div>
                <div class="col-lg-4">
                    <div class="row g-3 text-center">
                        <div class="col-6">
                            <div class="bg-white text-primary rounded-3 p-3">
                                <h3 class="fw-bold mb-0">500+</h3>
                                <small>Students</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-white text-primary rounded-3 p-3">
                                <h3 class="fw-bold mb-0">30+</h3>
                                <small>Teachers</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ppdb" class="py-5 bg-white">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <h2 class="fw-bold mb-3">PPDB Registration</h2>
                    <p class="text-muted mb-4">Join our vibrant school community and start your learning journey with us. Registration is now open for new students.</p>
                </div>
                <div class="col-lg-5 text-lg-end">
                    <a href="#" class="btn btn-primary btn-lg">Register Now</a>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
