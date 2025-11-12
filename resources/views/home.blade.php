<x-layout :title="$title">
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="hero-container">
        <div class="hero-content">
          <h1>OSIS SMK Bina Insani Cisauk</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis magna vel dolor mattis hendrerit. Vestibulum sodales dignissim ipsum id commodo.</p>
          <div class="cta-buttons">
            <a href="/about" class="btn-apply">Selengkapnya</a>
            <a href="/contact" class="btn-tour">Kontak</a>
          </div>
        </div>
      </div>

      <div class="highlights-container container">
        <div class="row gy-4">
          <div class="col-md-4">
            <div class="highlight-item">
              <div class="icon">
                <i class="bi bi-mortarboard-fill"></i>
              </div>
              <h3>98% Lulusan Terserap</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="highlight-item">
              <div class="icon">
                <i class="bi bi-people-fill"></i>
              </div>
              <h3>Rasio Siswa-Guru 16:1</h3>
              <p>Proin quis magna vel dolor mattis hendrerit.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="highlight-item">
              <div class="icon">
                <i class="bi bi-globe-americas"></i>
              </div>
              <h3>Komunitas Global</h3>
              <p>Vestibulum sodales dignissim ipsum id commodo.</p>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-6">
            <div class="content">
              <h3>Tentang</h3>
              <p>For over three decades, we have been committed to providing exceptional education that prepares students for success in an ever-changing world. Our innovative approach combines traditional academic excellence with cutting-edge technology and personalized learning experiences.</p>
              <p>For over three decades, we have been committed to providing exceptional education that prepares students for success in an ever-changing world. Our innovative approach combines traditional academic excellence with cutting-edge technology and personalized learning experiences.</p>
          
              <div class="mission-statement">
                <p><em>"Our mission is to foster intellectual curiosity, critical thinking, and lifelong learning while nurturing compassionate leaders who will positively impact their communities and the world."</em></p>
              </div>

              <a href="/about" class="btn-learn-more">
                Tentang Kami
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="image-wrapper">
              <img src="{{ asset('assets/img/education/campus-5.webp') }}" alt="Campus Overview" class="img-fluid" loading="lazy" decoding="async">
              <div class="experience-badge">
                <div class="years">32+</div>
                <div class="text">Years of Excellence</div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Featured Programs Section -->
    <section id="featured-programs" class="featured-programs section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Program Kerja</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="featured-programs-wrapper">
          <div class="programs-showcase">

            <div class="program-card featured-program">
              <div class="card-image">
                <img src="{{ asset('assets/img/education/courses-8.webp') }}" alt="Program" class="img-fluid" loading="lazy" decoding="async">
                <div class="program-badge">
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
              <div class="card-content">
                <div class="program-category">Teknologi</div>
                <h3>Informatika &amp; AI</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="program-meta">
                  <div class="meta-item">
                    <i class="bi bi-clock"></i>
                    <span>4 Tahun</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-award"></i>
                    <span>Setara D4/S1</span>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="#" class="learn-more">Selengkapnya</a>
                  <div class="enrollment">
                    <i class="bi bi-people"></i>
                    <span>320 peserta</span>
                  </div>
                </div>
              </div>
            </div>
            
             <div class="program-card featured-program">
              <div class="card-image">
                <img src="assets/img/education/courses-8.webp" alt="Program" class="img-fluid">
                <div class="program-badge">
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
              <div class="card-content">
                <div class="program-category">Engineering</div>
                <h3>Computer Science &amp; AI</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="program-meta">
                  <div class="meta-item">
                    <i class="bi bi-clock"></i>
                    <span>4 Years</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-award"></i>
                    <span>Bachelor's</span>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="#" class="learn-more">Learn More</a>
                  <div class="enrollment">
                    <i class="bi bi-people"></i>
                    <span>320 enrolled</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>

        </div>

      </div>

    </section><!-- /Featured Programs Section -->

    <!-- Students Life Block Section -->
     <section id="students-life-block" class="students-life-block section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Ekstrakurikuler</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="highlights-section">
          <div class="row g-4">
            <div class="col-lg-4">
              <div class="highlight-card">
                <div class="highlight-image">
                  <img src="{{ asset('assets/img/education/activities-7.webp') }}" alt="Leadership Programs" class="img-fluid" loading="lazy" decoding="async">
                </div>
                <div class="highlight-content">
                  <h5>Pengembangan Kepemimpinan</h5>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="highlight-card">
                <div class="highlight-image">
                  <img src="{{ asset('assets/img/education/activities-9.webp') }}" alt="Cultural Events" class="img-fluid" loading="lazy" decoding="async">
                </div>
                <div class="highlight-content">
                  <h5>Keberagaman Budaya</h5>
                  <p>Ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="highlight-card">
                <div class="highlight-image">
                  <img src="{{ asset('assets/img/education/activities-3.webp') }}" alt="Innovation Hub" class="img-fluid" loading="lazy" decoding="async">
                </div>
                <div class="highlight-content">
                  <h5>Pusat Inovasi</h5>
                  <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- Recent News Section -->
    <section id="recent-news" class="recent-news section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Berita</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">
          @forelse(($latestPosts ?? collect()) as $post)
            <div class="col-xl-3 col-md-6">
              <div class="post-box h-100">
                <div class="post-img">
                  @if($post->thumbnail)
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($post->thumbnail) }}" class="img-fluid" alt="" loading="lazy" decoding="async">
                  @else
                    <img src="{{ asset('assets/img/blog/blog-post-1.webp') }}" class="img-fluid" alt="" loading="lazy" decoding="async">
                  @endif
                </div>
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
            <div class="col-12"><div class="alert alert-info">Belum ada berita terbaru.</div></div>
          @endforelse
        </div>

      </div>

    </section><!-- /Recent News Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Acara</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="event-filters mb-4">
          <div class="row justify-content-center g-3">
            <div class="col-md-4">
              <select class="form-select">
                <option selected="">Semua Bulan</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
              </select>
            </div>
            <div class="col-md-4">
              <select class="form-select">
                <option selected="">Semua Kategori</option>
                <option>Akademik</option>
                <option>Seni</option>
                <option>Olahraga</option>
                <option>Komunitas</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row g-4">
          @forelse(($upcomingEvents ?? collect()) as $event)
            <div class="col-lg-6">
              <div class="event-card h-100">
                <div class="event-date">
                  <span class="month">{{ strtoupper(optional($event->starts_at)->translatedFormat('M')) }}</span>
                  <span class="day">{{ optional($event->starts_at)->format('d') }}</span>
                  <span class="year">{{ optional($event->starts_at)->format('Y') }}</span>
                </div>
                <div class="event-content">
                  <div class="event-tag academic">Acara</div>
                  <h3>{{ $event->title }}</h3>
                  <p>{{ \Illuminate\Support\Str::limit($event->description, 160) }}</p>
                  <div class="event-meta">
                    <div class="meta-item">
                      <i class="bi bi-clock"></i>
                      <span>{{ optional($event->starts_at)->format('H:i') }}@if($event->ends_at) - {{ optional($event->ends_at)->format('H:i') }}@endif</span>
                    </div>
                    @if($event->location)
                      <div class="meta-item">
                        <i class="bi bi-geo-alt"></i>
                        <span>{{ $event->location }}</span>
                      </div>
                    @endif
                  </div>
                  <div class="event-actions">
                    <a href="/event/{{ $event->slug }}" class="btn-learn-more">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          @empty
            <div class="col-12"><div class="alert alert-info">Belum ada acara mendatang.</div></div>
          @endforelse
        </div>

        <div class="text-center mt-5">
          <a href="/event" class="btn-view-all">Lihat Semua Acara</a>
        </div>

      </div>

    </section><!-- /Events Section -->

  </main>
</x-layout>
 