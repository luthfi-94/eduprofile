<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Galleries</li>
    </x-slot>

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2 mb-4">
        <div>
            <h4 class="fw-semibold mb-1">Galleries</h4>
            <p class="text-muted mb-0">Manage gallery items for each album.</p>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <form method="GET" action="{{ route('admin.galleries.index') }}" class="d-flex gap-2">
                <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control" placeholder="Search galleries">
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </form>
            <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary">Add Gallery</a>
        </div>
    </div>

    @if ($galleries->isEmpty())
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center py-5 text-muted">No gallery items found.</div>
        </div>
    @else
        <div class="row g-4">
            @foreach ($galleries as $gallery)
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="card border-0 shadow-sm h-100">
                        @if ($gallery->image)
                            <img src="{{ asset('storage/' . $gallery->image) }}" class="card-img-top" alt="{{ $gallery->title }}" style="height: 220px; object-fit: cover;">
                        @else
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center text-muted" style="height: 220px;">No image</div>
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-semibold">{{ $gallery->title }}</h5>
                            <p class="card-text text-muted flex-grow-1">{{ $gallery->album->title ?? 'No album' }}</p>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.galleries.edit', $gallery) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                                <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Delete this gallery item?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-end mt-4">
            {{ $galleries->links() }}
        </div>
    @endif
</x-admin-layout>
