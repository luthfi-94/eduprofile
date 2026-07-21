<x-admin-layout>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </x-slot>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <h2 class="h4 fw-semibold mb-2">Welcome back, {{ Auth::user()->name }}!</h2>
            <p class="text-muted mb-0">This is the reserved admin dashboard area for EduProfile.</p>
        </div>
    </div>
</x-admin-layout>
