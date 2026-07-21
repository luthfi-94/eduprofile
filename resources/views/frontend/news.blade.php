<x-frontend-layout>
    <section class="hero-section py-5 text-white">
        <div class="container py-5">
            <h1 class="display-5 fw-bold mb-3">Informasi Terbaru</h1>
            <p class="lead mb-0">Tetap terinformasi dengan pembaruan terbaru dari komunitas sekolah kami.</p>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                @forelse ($posts as $post)
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <p class="text-primary fw-semibold small mb-2">{!! $post->category->name ?? 'Berita' !!}</p>
                                <h5 class="fw-semibold">{!! $post->title !!}</h5>
                                <p class="text-muted">{!! Str::limit(strip_tags($post->content), 140) !!}</p>
                                <a href="{{  route('frontend.news.show', $post)  }}" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-light border">Postingan berita akan muncul di sini setelah dipublikasikan.</div>
                    </div>
                @endforelse
            </div>

            <div class="mt-4">{{ $posts->links() }}</div>
        </div>
    </section>
</x-frontend-layout>
