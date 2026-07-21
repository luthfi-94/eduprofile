<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}" class="text-decoration-none">Categories</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ isset($category) ? 'Edit' : 'Create' }}</li>
    </x-slot>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-0">
            <h4 class="fw-semibold mb-1">{{ isset($category) ? 'Edit' : 'Create' }} Category</h4>
            <p class="text-muted mb-0">Create a category and let the slug be generated automatically.</p>
        </div>
        <div class="card-body">
            <form action="{{ isset($category) ? route('admin.categories.update', $category) : route('admin.categories.store') }}" method="POST">
                @csrf
                @if (isset($category))
                    @method('PUT')
                @endif

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name ?? '') }}" required>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Save Category</button>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
