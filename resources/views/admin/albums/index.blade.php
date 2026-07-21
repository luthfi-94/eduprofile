<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Albums</li>
    </x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-semibold mb-1">Album</h4>
            <p class="text-muted mb-0">Manage school photo albums.</p>
        </div>
        <a href="{{ route('admin.albums.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i>Album Baru
        </a>
    </div>

    @if($albums->isEmpty())
        <div class="alert alert-info">Tidak ada album ditemukan.</div>
    @else
        <div class="row g-4">
            @foreach($albums as $album)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        @if($album->cover)
                            <img src="{{ asset('storage/' . $album->cover) }}" class="card-img-top" alt="{{ $album->title }}" style="height: 220px; object-fit: cover;">
                        @else
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 220px;">
                                <i class="bi bi-images fs-1 text-muted"></i>
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $album->title }}</h5>
                            <p class="card-text text-muted">{{ Str::limit(strip_tags($album->description ?? ''), 120) }}</p>
                        </div>
                        <div class="card-footer bg-white border-0 d-flex justify-content-between">
                            <a href="{{ route('admin.albums.edit', $album) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.albums.destroy', $album) }}" method="POST" onsubmit="return confirm('Hapus album ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $albums->links() }}
        </div>
    @endif
</x-admin-layout>
