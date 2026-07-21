<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">PPDB</li>
    </x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">PPDB Information</h2>
            <p class="text-muted mb-0">Manage admission information and registration schedule.</p>
        </div>
        <a href="{{ route('admin.ppdb_infos.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i>New Entry
        </a>
    </div>

    @if($ppdbInfos->isEmpty())
        <div class="alert alert-info">No PPDB information found.</div>
    @else
        <div class="row g-4">
            @foreach($ppdbInfos as $ppdbInfo)
                <div class="col-lg-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">{{ $ppdbInfo->title }}</h5>
                            <p class="text-muted small mb-3">
                                <i class="bi bi-calendar3 me-1"></i>
                                {{ $ppdbInfo->registration_open ? 
                                    $ppdbInfo->registration_open->format('d M Y') : '-' }}
                                -
                                {{ $ppdbInfo->registration_close ? 
                                    $ppdbInfo->registration_close->format('d M Y') : '-' }}
                            </p>
                            <p class="card-text text-muted">{{ Str::limit(strip_tags($ppdbInfo->description ?? ''), 160) }}</p>
                        </div>
                        <div class="card-footer bg-white border-0 d-flex justify-content-between">
                            <a href="{{ route('admin.ppdb_infos.edit', $ppdbInfo) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.ppdb_infos.destroy', $ppdbInfo) }}" method="POST" onsubmit="return confirm('Delete this PPDB entry?')">
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
            {{ $ppdbInfos->links() }}
        </div>
    @endif
</x-admin-layout>
