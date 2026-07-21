@props(['variant' => 'desktop'])

@php
    $items = [
        ['route' => 'admin.dashboard', 'active' => 'admin.dashboard', 'icon' => 'bi-speedometer2', 'label' => 'Dashboard'],
        ['route' => 'admin.settings.index', 'active' => 'admin.settings.*', 'icon' => 'bi-gear', 'label' => 'Settings'],
        ['route' => 'admin.profiles.index', 'active' => 'admin.profiles.*', 'icon' => 'bi-person-badge', 'label' => 'School Profile'],
        ['route' => 'admin.teachers.index', 'active' => 'admin.teachers.*', 'icon' => 'bi-people', 'label' => 'Teachers'],
        ['route' => 'admin.facilities.index', 'active' => 'admin.facilities.*', 'icon' => 'bi-building', 'label' => 'Facilities'],
        ['route' => 'admin.categories.index', 'active' => 'admin.categories.*', 'icon' => 'bi-tags', 'label' => 'Categories'],
        ['route' => 'admin.posts.index', 'active' => 'admin.posts.*', 'icon' => 'bi-newspaper', 'label' => 'Posts'],
        ['route' => 'admin.albums.index', 'active' => 'admin.albums.*', 'icon' => 'bi-images', 'label' => 'Albums'],
        ['route' => 'admin.galleries.index', 'active' => 'admin.galleries.*', 'icon' => 'bi-image-fill', 'label' => 'Galleries'],
        ['route' => 'admin.ppdb_infos.index', 'active' => 'admin.ppdb_infos.*', 'icon' => 'bi-file-earmark-text', 'label' => 'PPDB'],
        ['route' => 'admin.contacts.index', 'active' => 'admin.contacts.*', 'icon' => 'bi-envelope', 'label' => 'Contacts'],
    ];

    $isDesktop = $variant === 'desktop';
@endphp

@foreach ($items as $item)
    @php
        $isActive = request()->routeIs($item['active']);
        $baseClass = $isDesktop
            ? 'admin-nav-link d-flex align-items-center gap-2 text-white text-decoration-none px-3 py-2 rounded mb-1'
            : 'admin-nav-link d-flex align-items-center gap-2 text-decoration-none px-3 py-2 rounded mb-1';

        $stateClass = $isDesktop
            ? ($isActive ? 'bg-white bg-opacity-25' : '')
            : ($isActive ? 'bg-primary text-white' : 'text-dark bg-light');
    @endphp

    <a href="{{ route($item['route']) }}" class="{{ $baseClass }} {{ $stateClass }}">
        <i class="bi {{ $item['icon'] }}"></i>
        <span>{{ $item['label'] }}</span>
    </a>
@endforeach
