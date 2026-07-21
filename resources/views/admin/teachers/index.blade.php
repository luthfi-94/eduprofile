<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Teachers</li>
    </x-slot>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-0 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2">
            <div>
                <h4 class="fw-semibold mb-1">Guru</h4>
                <p class="text-muted mb-0"></p>Kelola data guru dengan pencarian dan paginasi.</p>
            </div>
            <div class="d-flex gap-2 align-items-center">
                <form method="GET" action="{{ route('admin.teachers.index') }}" class="d-flex gap-2">
                    <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control" placeholder="Search by name, NIP, subject">
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                </form>
                <a href="{{ route('admin.teachers.create') }}" class="btn btn-primary">Tambah Guru</a>
            </div>
        </div>
        <div class="card-body">
            @if ($teachers->isEmpty())
                <div class="text-center py-5 text-muted">Tidak ada guru ditemukan.</div>
            @else
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Mata Pelajaran</th>
                                <th>Jabatan</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td>
                                        @if ($teacher->photo)
                                            <img src="{{ asset('storage/' . $teacher->photo) }}" alt="{{ $teacher->name }}" class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover;">
                                        @else
                                            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">👤</div>
                                        @endif
                                    </td>
                                    <td>{{ $teacher->nip }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->gender }}</td>
                                    <td>{{ $teacher->subject }}</td>
                                    <td>{{ $teacher->position }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.teachers.edit', $teacher) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <form action="{{ route('admin.teachers.destroy', $teacher) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this teacher?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    {{ $teachers->links() }}
                </div>
            @endif
        </div>
    </div>
</x-admin-layout>
