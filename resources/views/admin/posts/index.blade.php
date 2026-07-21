<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Posts</li>
    </x-slot>

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2 mb-4">
        <div>
            <h4 class="fw-semibold mb-1">Berita</h4>
            <p class="text-muted mb-0">Kelola berita dengan filter kategori, pencarian, dan status.</p>
        </div>
        <div class="d-flex gap-2 flex-wrap align-items-center">
            <form method="GET" action="{{ route('admin.posts.index') }}" class="d-flex gap-2 flex-wrap">
                <select name="category_id" class="form-select" style="width: 180px;">
                    <option value="">All Categories</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ (string) ($categoryId ?? '') === (string) $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control" placeholder="Search posts">
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </form>
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Tambah Berita</a>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            @if ($posts->isEmpty())
                <div class="text-center py-5 text-muted">Tidak ada berita ditemukan.</div>
            @else
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Published At</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name ?? '—' }}</td>
                                    <td>
                                        <span class="badge {{ $post->status === 'published' ? 'bg-success' : 'bg-secondary' }}">
                                            {{ ucfirst($post->status) }}
                                        </span>
                                    </td>
                                    <td>{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('d M Y') : '—' }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus berita ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    {{ $posts->links() }}
                </div>
            @endif
        </div>
    </div>
</x-admin-layout>
