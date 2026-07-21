<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.teachers.index') }}" class="text-decoration-none">Teachers</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ isset($teacher) ? 'Edit' : 'Create' }}</li>
    </x-slot>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-0">
            <h4 class="fw-semibold mb-1">{{ isset($teacher) ? 'Edit' : 'Create' }} Teacher</h4>
            <p class="text-muted mb-0">Fill in the teacher details and optional profile photo.</p>
        </div>
        <div class="card-body">
            <form action="{{ isset($teacher) ? route('admin.teachers.update', $teacher) : route('admin.teachers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($teacher))
                    @method('PUT')
                @endif

                <div class="row g-4">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip', $teacher->nip ?? '') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $teacher->name ?? '') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="">Pilih jenis kelamin</option>
                                <option value="Male" {{ old('gender', $teacher->gender ?? '') == 'Male' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Female" {{ old('gender', $teacher->gender ?? '') == 'Female' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="birth_place" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="birth_place" name="birth_place" value="{{ old('birth_place', $teacher->birth_place ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label for="birth_date" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ old('birth_date', $teacher->birth_date ?? '') }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="education" class="form-label">Pendidikan</label>
                            <input type="text" class="form-control" id="education" name="education" value="{{ old('education', $teacher->education ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="position" name="position" value="{{ old('position', $teacher->position ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Mata Pelajaran</label>
                            <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject', $teacher->subject ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                            @if (isset($teacher) && $teacher->photo)
                                <div class="form-text">Current file: {{ basename($teacher->photo) }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Simpan Guru</button>
                    <a href="{{ route('admin.teachers.index') }}" class="btn btn-outline-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
