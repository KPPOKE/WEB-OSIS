<x-layout :title="$title">
  <main class="main">
    <div class="page-title">
      <div class="heading">
        <div class="container text-center">
          <h1 class="heading-title">{{ $post->name }}</h1>
          <p class="mb-0 text-muted">
            <small>{{ optional($post->published_at)->translatedFormat('D, d M Y') }} • {{ $post->author }}</small>
          </p>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/news">Berita</a></li>
            <li class="current">{{ $post->name }}</li>
          </ol>
        </div>
      </nav>
    </div>

    <section class="section">
      <div class="container">
        @if($post->thumbnail)
          <div class="mb-4">
            <img src="{{ \Illuminate\Support\Facades\Storage::url($post->thumbnail) }}" class="img-fluid rounded" alt="{{ $post->name }}" loading="lazy" decoding="async">
          </div>
        @endif
        <article class="prose max-w-none">
          {!! nl2br(e($post->body)) !!}
        </article>
      </div>
    </section>
  </main>
</x-layout>
