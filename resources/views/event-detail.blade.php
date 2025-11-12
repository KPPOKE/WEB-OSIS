<x-layout :title="$title">
  <main class="main">
    <div class="page-title">
      <div class="heading">
        <div class="container text-center">
          <h1 class="heading-title">{{ $event->title }}</h1>
          <p class="mb-0 text-muted">
            <small>
              {{ optional($event->starts_at)->translatedFormat('D, d M Y H:i') }}
              @if($event->ends_at)
                - {{ optional($event->ends_at)->translatedFormat('H:i') }}
              @endif
              @if($event->location)
                • {{ $event->location }}
              @endif
            </small>
          </p>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/event">Acara</a></li>
            <li class="current">{{ $event->title }}</li>
          </ol>
        </div>
      </nav>
    </div>

    <section class="section">
      <div class="container">
        @if($event->banner)
          <div class="mb-4">
            <img src="{{ \Illuminate\Support\Facades\Storage::url($event->banner) }}" class="img-fluid rounded" alt="{{ $event->title }}">
          </div>
        @elseif($event->thumbnail)
          <div class="mb-4">
            <img src="{{ \Illuminate\Support\Facades\Storage::url($event->thumbnail) }}" class="img-fluid rounded" alt="{{ $event->title }}">
          </div>
        @endif
        <article class="prose max-w-none">
          {!! nl2br(e($event->description)) !!}
        </article>
      </div>
    </section>
  </main>
</x-layout>
