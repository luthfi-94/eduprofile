<x-frontend-layout>
    <section class="hero-section py-5">
        <div class="container py-5">
            <h1 class="display-5 fw-bold mb-3">{{ $post->title }}</h1>
            <p class="lead mb-0">{{ $post->category->name ?? 'News' }}</p>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    @if ($post->thumbnail)
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="img-fluid rounded mb-4" style="max-height: 320px; width: 100%; object-fit: cover;">
                    @endif
                    <div class="text-muted mb-3">Published {{ $post->published_at ? $post->published_at->format('d M Y') : 'recently' }}</div>
                    <div>{!! $post->content !!}</div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
