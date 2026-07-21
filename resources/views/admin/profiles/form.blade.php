<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.profiles.index') }}" class="text-decoration-none">School Profile</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ isset($profile) ? 'Edit' : 'Create' }}</li>
    </x-slot>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-0">
            <h4 class="fw-semibold mb-1">{{ isset($profile) ? 'Edit' : 'Create' }} School Profile</h4>
            <p class="text-muted mb-0">Use the editor below to compose rich content for the public profile page.</p>
        </div>
        <div class="card-body">
            <form action="{{ isset($profile) ? route('admin.profiles.update', $profile) : route('admin.profiles.store') }}" method="POST">
                @csrf
                @if (isset($profile))
                    @method('PUT')
                @endif

                <div class="mb-3">
                    <label for="history" class="form-label">History</label>
                    <textarea class="form-control ckeditor" id="history" name="history" rows="8">{{ old('history', $profile->history ?? '') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="vision" class="form-label">Vision</label>
                    <textarea class="form-control ckeditor" id="vision" name="vision" rows="8">{{ old('vision', $profile->vision ?? '') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="mission" class="form-label">Mission</label>
                    <textarea class="form-control ckeditor" id="mission" name="mission" rows="8">{{ old('mission', $profile->mission ?? '') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="goals" class="form-label">Goals</label>
                    <textarea class="form-control ckeditor" id="goals" name="goals" rows="8">{{ old('goals', $profile->goals ?? '') }}</textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Save Profile</button>
                    <a href="{{ route('admin.profiles.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
