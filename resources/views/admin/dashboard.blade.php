<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </x-slot>

    <div class="row g-4 mb-4">
        {{-- total teacher --}}
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted small mb-1">Total Teachers</p>
                        <h3 class="fw-semibold mb-0">{{ $teacherCount }}</h3>
                    </div>
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center"
                        style="width: 48px; height: 48px;">
                        <i class="bi bi-people fs-4"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- total news --}}
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted small mb-1">Total News</p>
                        <h3 class="fw-semibold mb-0">{{ $postCount }}</h3>
                    </div>
                    <div class="rounded-circle bg-success bg-opacity-10 text-success d-flex align-items-center justify-content-center"
                        style="width: 48px; height: 48px;">
                        <i class="bi bi-newspaper fs-4"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- total fasilitas --}}
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted small mb-1">Total Facilities</p>
                        <h3 class="fw-semibold mb-0">{{ $facilityCount }}</h3>
                    </div>
                    <div class="rounded-circle bg-warning bg-opacity-10 text-warning d-flex align-items-center justify-content-center"
                        style="width: 48px; height: 48px;">
                        <i class="bi bi-building fs-4"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- total gallery --}}
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted small mb-1">Total Galleries</p>
                        <h3 class="fw-semibold mb-0">{{ $galleryCount }}</h3>
                    </div>
                    <div class="rounded-circle bg-info bg-opacity-10 text-info d-flex align-items-center justify-content-center"
                        style="width: 48px; height: 48px;">
                        <i class="bi bi-images fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- latest news --}}
    <div class="row g-4">
        <div class="col-12 col-xl-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-semibold mb-0">Latest News</h5>
                        <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                    </div>
                </div>
                <div class="card-body">
                    @forelse($latestPosts as $post)
                        <a href="{{ route('admin.posts.edit', $post) }}"
                            class="list-group-item px-0 py-3 d-flex justify-content-between">

                            <div>

                                <div class="fw-semibold">

                                    {{ $post->title }}

                                </div>

                                <div class="text-muted small">

                                    {{ $post->created_at->diffForHumans() }}

                                </div>

                            </div>

                            <span class="badge bg-success">

                                {{ ucfirst($post->status) }}

                            </span>

                        </a>

                    @empty

                        <div class="text-center text-muted">

                            Belum ada berita.

                        </div>
                    @endforelse
                    {{-- <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item px-0 py-3 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fw-semibold">Penerimaan Siswa Baru Tahun Ajaran 2026/2027</div>
                                <div class="text-muted small">Published 2 hours ago</div>
                            </div>
                            <span class="badge bg-primary">Published</span>
                        </a>
                        <a href="#" class="list-group-item px-0 py-3 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fw-semibold">Kegiatan Lomba Kebersihan Sekolah</div>
                                <div class="text-muted small">Published yesterday</div>
                            </div>
                            <span class="badge bg-warning text-dark">Draft</span>
                        </a>
                        <a href="#" class="list-group-item px-0 py-3 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fw-semibold">Rapat Kerja Kepala Sekolah dan Guru</div>
                                <div class="text-muted small">Published 3 days ago</div>
                            </div>
                            <span class="badge bg-primary">Published</span>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 pb-0">
                    <h5 class="fw-semibold mb-0">Aksi Cepat</h5>
                </div>
                <div class="card-body d-flex flex-column justify-content-center">
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3 w-100">Buat Postingan Baru</a>
                    <a href="{{ route('admin.albums.index') }}" class="btn btn-outline-primary mb-3 w-100">Kelola Album</a>
                    <a href="{{ route('admin.facilities.index') }}" class="btn btn-outline-primary mb-3 w-100">Kelola Fasilitas</a>
                    <a href="{{ route('admin.settings.index') }}" class="btn btn-outline-primary w-100">Settings</a>
                </div>
            </div>
        </div>
        {{-- <div class="col-12 col-xl-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 pb-0">
                    <h5 class="fw-semibold mb-0">Latest Activities</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 py-3">
                            <div class="fw-semibold">New teacher added</div>
                            <div class="text-muted small">5 minutes ago</div>
                        </li>
                        <li class="list-group-item px-0 py-3">
                            <div class="fw-semibold">News article published</div>
                            <div class="text-muted small">1 hour ago</div>
                        </li>
                        <li class="list-group-item px-0 py-3">
                            <div class="fw-semibold">Gallery updated</div>
                            <div class="text-muted small">Yesterday</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>

    {{-- <div class="row g-4 mt-1">
        <div class="col-12 col-xl-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 pb-0">
                    <h5 class="fw-semibold mb-0">Recent Login</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless align-middle mb-0">
                            <thead>
                                <tr class="text-muted small">
                                    <th>User</th>
                                    <th>Role</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-semibold">Admin EduProfile</td>
                                    <td><span class="badge bg-primary">Administrator</span></td>
                                    <td class="text-muted">09:45 AM</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Staff Sekolah</td>
                                    <td><span class="badge bg-secondary">Editor</span></td>
                                    <td class="text-muted">08:20 AM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="fw-semibold">Welcome back</h5>
                    <p class="text-muted mb-3">Use the admin menu to manage school profile content, news, teachers,
                        facilities, and galleries.</p>
                    <a href="{{ route('admin.settings.index') }}" class="btn btn-primary w-100">Go to Settings</a>
                </div>
            </div>
        </div>
    </div> --}}
</x-admin-layout>
