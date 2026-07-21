<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Contacts</li>
    </x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Contacts</h2>
            <p class="text-muted mb-0">Manage official contact details for the school.</p>
        </div>
        <a href="{{ route('admin.contacts.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i>New Contact
        </a>
    </div>

    @if($contacts->isEmpty())
        <div class="alert alert-info">No contact information found.</div>
    @else
        <div class="row g-4">
            @foreach($contacts as $contact)
                <div class="col-lg-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">{{ $contact->address }}</h5>
                            <p class="mb-2"><i class="bi bi-telephone me-2"></i>{{ $contact->phone }}</p>
                            <p class="mb-2"><i class="bi bi-envelope me-2"></i>{{ $contact->email }}</p>
                            @if($contact->google_maps)
                                <p class="mb-0 text-muted small"><i class="bi bi-geo-alt me-2"></i>Map embed available</p>
                            @endif
                        </div>
                        <div class="card-footer bg-white border-0 d-flex justify-content-between">
                            <a href="{{ route('admin.contacts.edit', $contact) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Delete this contact entry?')">
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
            {{ $contacts->links() }}
        </div>
    @endif
</x-admin-layout>
