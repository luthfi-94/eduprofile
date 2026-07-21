<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Profil Sekolah</li>
    </x-slot>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
            <div>
                <h4 class="fw-semibold mb-1">Profil Sekolah</h4>
                <p class="text-muted mb-0">Kelola sejarah sekolah, visi, misi, dan tujuan.</p>
            </div>
            <a href="{{ route('admin.profiles.create') }}" class="btn btn-primary">Buat Profil</a>
        </div>
        <div class="card-body">
            @if ($profiles->isEmpty())
                <div class="text-center py-5 text-muted">Belum ada entri profil sekolah.</div>
            @else
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>History</th>
                                <th>Vision</th>
                                <th>Mission</th>
                                <th>Goals</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profiles as $profile)
                                <tr>
                                    <td>{!! Illuminate\Support\Str::limit(strip_tags($profile->history ?? ''), 80) !!}</td>
                                    <td>{!! Illuminate\Support\Str::limit(strip_tags($profile->vision ?? ''), 80) !!}</td>
                                    <td>{!! Illuminate\Support\Str::limit(strip_tags($profile->mission ?? ''), 80) !!}</td>
                                    <td>{!! Illuminate\Support\Str::limit(strip_tags($profile->goals ?? ''), 80) !!}</td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.profiles.edit', $profile) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <form action="{{ route('admin.profiles.destroy', $profile) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus entri profil ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</x-admin-layout>
