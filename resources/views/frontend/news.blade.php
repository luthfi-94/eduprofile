<x-frontend-layout>
    <section class="hero-section py-5 text-white">
        <div class="container py-5">
            <h1 class="display-5 fw-bold mb-3">Latest News</h1>
            <p class="lead mb-0">Stay informed with the newest updates from our school community.</p>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                @forelse ($posts as $post)
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <p class="text-primary fw-semibold small mb-2">{{ $post->category->name ?? 'News' }}</p>
                                <h5 class="fw-semibold">{{ $post->title }}</h5>
                                <p class="text-muted">{{ Str::limit(strip_tags($post->content), 140) }}</p>
                                <a href="{{ route('frontend.news.show', $post) }}" class="btn btn-outline-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-light border">News posts will appear here once they are published.</div>
                    </div>
                @endforelse
            </div>

            <div class="mt-4">{{ $posts->links() }}</div>
        </div>
    </section>
</x-frontend-layout>
