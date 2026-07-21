<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.settings.index') }}" class="text-decoration-none">Website Settings</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ isset($setting) ? 'Edit' : 'Create' }}</li>
    </x-slot>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-0">
            <h4 class="fw-semibold mb-1">{{ isset($setting) ? 'Edit' : 'Create' }} Website Settings</h4>
            <p class="text-muted mb-0">Fill in the school profile details that appear on the website.</p>
        </div>
        <div class="card-body">
            <form action="{{ isset($setting) ? route('admin.settings.update', $setting) : route('admin.settings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($setting))
                    @method('PUT')
                @endif

                <div class="row g-4">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="school_name" class="form-label">School Name</label>
                            <input type="text" class="form-control" id="school_name" name="school_name" value="{{ old('school_name', $setting->school_name ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $setting->email ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $setting->phone ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="3">{{ old('address', $setting->address ?? '') }}</textarea>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="facebook" class="form-label">Facebook URL</label>
                            <input type="url" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $setting->facebook ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label for="instagram" class="form-label">Instagram URL</label>
                            <input type="url" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $setting->instagram ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label for="youtube" class="form-label">YouTube URL</label>
                            <input type="url" class="form-control" id="youtube" name="youtube" value="{{ old('youtube', $setting->youtube ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label for="google_maps" class="form-label">Google Maps Embed</label>
                            <textarea class="form-control" id="google_maps" name="google_maps" rows="3">{{ old('google_maps', $setting->google_maps ?? '') }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-1">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                            @if (isset($setting) && $setting->logo)
                                <div class="form-text">Current file: {{ basename($setting->logo) }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="favicon" class="form-label">Favicon</label>
                            <input type="file" class="form-control" id="favicon" name="favicon" accept="image/*">
                            @if (isset($setting) && $setting->favicon)
                                <div class="form-text">Current file: {{ basename($setting->favicon) }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="footer_text" class="form-label">Footer Text</label>
                    <textarea class="form-control" id="footer_text" name="footer_text" rows="3">{{ old('footer_text', $setting->footer_text ?? '') }}</textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Save Settings</button>
                    <a href="{{ route('admin.settings.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
