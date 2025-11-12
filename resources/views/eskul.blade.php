<x-layout :title="$title">
    <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Ekstrakurikuler</h1>
              <p class="mb-0">Kegiatan penunjang yang membantu siswa mengembangkan minat, bakat, dan karakter di luar jam pelajaran.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Beranda</a></li>
            <li class="current">Ekstrakurikuler</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- eskul Section -->
    <section id="students-life" class="students-life section">

      <div class="container">
          <div class="row g-4">
            @forelse($eskuls as $eskul)
              <div class="col-lg-4">
                <div class="activity-card h-100">
                  <div class="activity-image">
                    <img src="/assets/img/education/activities-9.webp" alt="{{ $eskul->title }}" class="img-fluid" loading="lazy">
                  </div>
                  <div class="activity-content">
                    <h4>{{ $eskul->title }}</h4>
                    <p>{{ \Illuminate\Support\Str::limit($eskul->body, 140) }}</p>
                  </div>
                </div>
              </div>
            @empty
              <div class="col-12">
                <div class="alert alert-info">Belum ada data ekstrakurikuler.</div>
              </div>
            @endforelse
          </div>
        </div>
      </div>

    </section><!-- /Students Life Section -->

  </main>

</x-layout>