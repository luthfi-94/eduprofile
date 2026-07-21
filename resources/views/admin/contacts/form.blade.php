<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.contacts.index') }}" class="text-decoration-none">Contacts</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{ isset($contact) ? 'Edit Contact' : 'Create Contact' }}</li>
    </x-slot>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-4">{{ isset($contact) ? 'Edit Contact' : 'Create Contact' }}</h4>

                    <form method="POST" action="{{ isset($contact) ? route('admin.contacts.update', $contact) : route('admin.contacts.store') }}">
                        @csrf
                        @if(isset($contact))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="3" required>{{ old('address', $contact->address ?? '') }}</textarea>
                            @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $contact->phone ?? '') }}" required>
                            @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $contact->email ?? '') }}" required>
                            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="google_maps" class="form-label">Google Maps Embed</label>
                            <textarea class="form-control @error('google_maps') is-invalid @enderror" id="google_maps" name="google_maps" rows="4">{{ old('google_maps', $contact->google_maps ?? '') }}</textarea>
                            @error('google_maps')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.contacts.index') }}" class="btn btn-outline-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Save Contact</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
