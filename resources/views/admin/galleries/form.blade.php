<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.galleries.index') }}" class="text-decoration-none">Galleries</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{ isset($gallery) ? 'Edit Gallery' : 'Create Gallery' }}</li>
    </x-slot>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-4">{{ isset($gallery) ? 'Edit Gallery' : 'Create Gallery' }}</h4>

                    <form method="POST" action="{{ isset($gallery) ? route('admin.galleries.update', $gallery) : route('admin.galleries.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($gallery))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label for="album_id" class="form-label">Album</label>
                            <select class="form-select @error('album_id') is-invalid @enderror" id="album_id" name="album_id" required>
                                <option value="">Select album</option>
                                @foreach($albums as $album)
                                    <option value="{{ $album->id }}" {{ old('album_id', $gallery->album_id ?? '') == $album->id ? 'selected' : '' }}>{{ $album->title }}</option>
                                @endforeach
                            </select>
                            @error('album_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $gallery->title ?? '') }}" required>
                            @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                            @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            @if(isset($gallery) && $gallery->image)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="Current image" class="img-thumbnail" style="max-height: 160px;">
                                </div>
                            @endif
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.galleries.index') }}" class="btn btn-outline-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Save Gallery</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
