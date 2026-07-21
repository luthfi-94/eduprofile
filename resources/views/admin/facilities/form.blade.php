<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.facilities.index') }}" class="text-decoration-none">Facilities</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ isset($facility) ? 'Edit' : 'Create' }}</li>
    </x-slot>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-0">
            <h4 class="fw-semibold mb-1">{{ isset($facility) ? 'Edit' : 'Create' }} Facility</h4>
            <p class="text-muted mb-0">Add a facility image and description.</p>
        </div>
        <div class="card-body">
            <form action="{{ isset($facility) ? route('admin.facilities.update', $facility) : route('admin.facilities.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($facility))
                    @method('PUT')
                @endif

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $facility->name ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                    @if (isset($facility) && $facility->photo)
                        <div class="form-text">Current file: {{ basename($facility->photo) }}</div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5">{{ old('description', $facility->description ?? '') }}</textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Save Facility</button>
                    <a href="{{ route('admin.facilities.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
