<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Categories</li>
    </x-slot>

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2 mb-4">
        <div>
            <h4 class="fw-semibold mb-1">Categories</h4>
            <p class="text-muted mb-0">Manage news categories and auto-generated slugs.</p>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <form method="GET" action="{{ route('admin.categories.index') }}" class="d-flex gap-2">
                <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control" placeholder="Search categories">
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </form>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add Category</a>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            @if ($categories->isEmpty())
                <div class="text-center py-5 text-muted">No categories found.</div>
            @else
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td><code>{{ $category->slug }}</code></td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this category?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    {{ $categories->links() }}
                </div>
            @endif
        </div>
    </div>
</x-admin-layout>
