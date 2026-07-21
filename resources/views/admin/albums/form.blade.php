<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.albums.index') }}" class="text-decoration-none">Albums</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{ isset($album) ? 'Edit Album' : 'Create Album' }}</li>
    </x-slot>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-4">{{ isset($album) ? 'Edit Album' : 'Create Album' }}</h4>

                    <form method="POST" action="{{ isset($album) ? route('admin.albums.update', $album) : route('admin.albums.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($album))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $album->title ?? '') }}" required>
                            @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description', $album->description ?? '') }}</textarea>
                            @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="cover" class="form-label">Cover Image</label>
                            <input type="file" class="form-control @error('cover') is-invalid @enderror" id="cover" name="cover" accept="image/*">
                            @error('cover')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            @if(isset($album) && $album->cover)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $album->cover) }}" alt="Current cover" class="img-thumbnail" style="max-height: 160px;">
                                </div>
                            @endif
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.albums.index') }}" class="btn btn-outline-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Save Album</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
