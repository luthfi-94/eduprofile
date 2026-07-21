<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Fasilitas</li>
    </x-slot>

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2 mb-4">
        <div>
            <h4 class="fw-semibold mb-1">Fasilitas</h4>
            <p class="text-muted mb-0">Kelola fasilitas sekolah dalam tata letak berbasis kartu.</p>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <form method="GET" action="{{ route('admin.facilities.index') }}" class="d-flex gap-2">
                <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control" placeholder="Search facilities">
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </form>
            <a href="{{ route('admin.facilities.create') }}" class="btn btn-primary">Tambah Fasilitas</a>
        </div>
    </div>

    @if ($facilities->isEmpty())
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center py-5 text-muted">Tidak ada fasilitas ditemukan.</div>
        </div>
    @else
        <div class="row g-4">
            @foreach ($facilities as $facility)
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="card border-0 shadow-sm h-100">
                        @if ($facility->photo)
                            <img src="{{ asset('storage/' . $facility->photo) }}" 
                            class="card-img-top" alt="{{ $facility->name }}" style="height: 220px; object-fit: cover;">
                        @else
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center text-muted" style="height: 220px;">No image</div>
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-semibold">{{ $facility->name }}</h5>
                            <p class="card-text text-muted flex-grow-1">{{ Str::limit($facility->description ?? '', 140) }}</p>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.facilities.edit', $facility) }}" class="btn btn-outline-primary btn-sm">Ubah</a>
                                <form action="{{ route('admin.facilities.destroy', $facility) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Hapus fasilitas ini?')">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-end mt-4">
            {{ $facilities->links() }}
        </div>
    @endif
</x-admin-layout>
