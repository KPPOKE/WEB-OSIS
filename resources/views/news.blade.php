<x-layout :title="$title">
  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Berita</h1>
              <p class="mb-0">
                Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo
                odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum
                debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat
                ipsum dolorem.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Beranda</a></li>
            <li class="current">Berita</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- News Posts Section -->
    <section id="news-posts" class="news-posts section">

      <div class="container">

        <div class="row gy-5">
          @forelse($posts as $post)
            <div class="col-xl-3 col-md-6">
              <div class="post-box h-100">
                <div class="post-img"><img src="{{ asset('assets/img/blog/blog-post-1.webp') }}" class="img-fluid" alt="" loading="lazy" decoding="async"></div>
                <div class="meta">
                  <span class="post-date">{{ optional($post->published_at)->translatedFormat('D, d M Y') }}</span>
                  <span class="post-author"> / {{ $post->author }}</span>
                </div>
                <h3 class="post-title">{{ $post->name }}</h3>
                <p>{{ \Illuminate\Support\Str::limit($post->body, 120) }}</p>
                <a href="/news/{{ $post->slug }}" class="readmore stretched-link"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          @empty
            <div class="col-12">
              <div class="alert alert-info">Belum ada berita.</div>
            </div>
          @endforelse
        </div>

      </div>

      <div class="container mt-4">
        {{ $posts->links() }}
      </div>

    </section><!-- /News Posts Section -->
  </main>
   
</x-layout>