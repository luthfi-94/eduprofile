<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Website Settings</li>
    </x-slot>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
            <div>
                <h4 class="fw-semibold mb-1">Website Settings</h4>
                <p class="text-muted mb-0">Manage the school identity and contact information.</p>
            </div>
            @if (!$setting)
                <a href="{{ route('admin.settings.create') }}" class="btn btn-primary">Create Settings</a>
            @else
                <a href="{{ route('admin.settings.edit', $setting) }}" class="btn btn-outline-primary">Edit Settings</a>
            @endif
        </div>
        <div class="card-body">
            @if ($setting)
                <div class="row g-4">
                    <div class="col-12 col-lg-4">
                        <div class="border rounded p-3 h-100">
                            <h6 class="fw-semibold mb-3">School Identity</h6>
                            <div class="mb-3">
                                <div class="text-muted small">School Name</div>
                                <div class="fw-semibold">{{ $setting->school_name ?? '—' }}</div>
                            </div>
                            <div class="mb-3">
                                <div class="text-muted small">Email</div>
                                <div class="fw-semibold">{{ $setting->email ?? '—' }}</div>
                            </div>
                            <div class="mb-3">
                                <div class="text-muted small">Phone</div>
                                <div class="fw-semibold">{{ $setting->phone ?? '—' }}</div>
                            </div>
                            <div class="mb-3">
                                <div class="text-muted small">Address</div>
                                <div class="fw-semibold">{{ $setting->address ?? '—' }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="border rounded p-3 h-100">
                            <h6 class="fw-semibold mb-3">Media</h6>
                            <div class="mb-3">
                                <div class="text-muted small">Logo</div>
                                @if ($setting->logo)
                                    <img src="{{ asset('storage/' . $setting->logo) }}" alt="Logo" class="img-fluid mt-2 rounded" style="max-height: 100px;">
                                @else
                                    <div class="text-muted mt-2">No logo uploaded</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <div class="text-muted small">Favicon</div>
                                @if ($setting->favicon)
                                    <img src="{{ asset('storage/' . $setting->favicon) }}" alt="Favicon" class="img-fluid mt-2 rounded" style="max-height: 48px;">
                                @else
                                    <div class="text-muted mt-2">No favicon uploaded</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="border rounded p-3 h-100">
                            <h6 class="fw-semibold mb-3">Social & Footer</h6>
                            <div class="mb-3">
                                <div class="text-muted small">Facebook</div>
                                <div class="fw-semibold">{{ $setting->facebook ?? '—' }}</div>
                            </div>
                            <div class="mb-3">
                                <div class="text-muted small">Instagram</div>
                                <div class="fw-semibold">{{ $setting->instagram ?? '—' }}</div>
                            </div>
                            <div class="mb-3">
                                <div class="text-muted small">YouTube</div>
                                <div class="fw-semibold">{{ $setting->youtube ?? '—' }}</div>
                            </div>
                            <div class="mb-3">
                                <div class="text-muted small">Footer Text</div>
                                <div class="fw-semibold">{{ $setting->footer_text ?? '—' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center py-5 text-muted">
                    No website settings have been created yet.
                </div>
            @endif
        </div>
    </div>
</x-admin-layout>
