<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.ppdb_infos.index') }}" class="text-decoration-none">PPDB</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{ isset($ppdbInfo) ? 'Edit Entry' : 'Create Entry' }}</li>
    </x-slot>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-4">{{ isset($ppdbInfo) ? 'Edit PPDB Entry' : 'Create PPDB Entry' }}</h4>

                    <form method="POST" action="{{ isset($ppdbInfo) ? route('admin.ppdb_infos.update', $ppdbInfo) : route('admin.ppdb_infos.store') }}">
                        @csrf
                        @if(isset($ppdbInfo))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $ppdbInfo->title ?? '') }}" required>
                            @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control ckeditor @error('description') is-invalid @enderror" id="description" name="description" rows="6">{{ old('description', $ppdbInfo->description ?? '') }}</textarea>
                            @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="requirements" class="form-label">Requirements</label>
                            <textarea class="form-control ckeditor @error('requirements') is-invalid @enderror" id="requirements" name="requirements" rows="6">{{ old('requirements', $ppdbInfo->requirements ?? '') }}</textarea>
                            @error('requirements')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="registration_open" class="form-label">Registration Open</label>
                                <input type="date" class="form-control @error('registration_open') is-invalid @enderror" id="registration_open" name="registration_open" value="{{ old('registration_open', isset($ppdbInfo) && $ppdbInfo->registration_open ? $ppdbInfo->registration_open->format('Y-m-d') : '') }}">
                                @error('registration_open')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="registration_close" class="form-label">Registration Close</label>
                                <input type="date" class="form-control @error('registration_close') is-invalid @enderror" id="registration_close" name="registration_close" value="{{ old('registration_close', isset($ppdbInfo) && $ppdbInfo->registration_close ? $ppdbInfo->registration_close->format('Y-m-d') : '') }}">
                                @error('registration_close')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.ppdb_infos.index') }}" class="btn btn-outline-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Save Entry</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
