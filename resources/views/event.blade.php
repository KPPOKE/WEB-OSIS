<x-layout :title="$title">
     <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Acara</h1>
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
            <li class="current">Acara</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Events 2 Section -->
    <section id="events-2" class="events-2 section">

      <div class="container">

        <div class="row g-4">
          <div class="col-lg-8">
            <div class="events-list">
              @forelse($events as $event)
                <div class="event-item">
                  <div class="event-date">
                    <span class="day">{{ optional($event->starts_at)->format('d') }}</span>
                    <span class="month">{{ strtoupper(optional($event->starts_at)->translatedFormat('M')) }}</span>
                  </div>
                  <div class="event-content">
                    <h3>{{ $event->title }}</h3>
                    <div class="event-meta">
                      <p><i class="bi bi-clock"></i> {{ optional($event->starts_at)->format('H:i') }}
                        @if($event->ends_at) - {{ optional($event->ends_at)->format('H:i') }} @endif
                      </p>
                      @if($event->location)
                        <p><i class="bi bi-geo-alt"></i> {{ $event->location }}</p>
                      @endif
                    </div>
                    <p>{{ \Illuminate\Support\Str::limit($event->description, 180) }}</p>
                    <div class="event-actions">
                      <a href="/event/{{ $event->slug }}" class="btn-event">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div><!-- End Event Item -->
              @empty
                <div class="alert alert-info">Belum ada acara.</div>
              @endforelse
            </div>

            <div class="mt-4">
              {{ $events->links() }}
            </div>
          </div>

          <div class="col-lg-4">
            <div class="sidebar">
              <div class="sidebar-item">
                <h3 class="sidebar-title">Upcoming Events</h3>
                <div class="event-calendar">
                  <div class="calendar-header">
                    <h4>June 2023</h4>
                  </div>
                  <div class="calendar-body">
                    <div class="weekdays">
                      <div>Su</div>
                      <div>Mo</div>
                      <div>Tu</div>
                      <div>We</div>
                      <div>Th</div>
                      <div>Fr</div>
                      <div>Sa</div>
                    </div>
                    <div class="days">
                      <div class="day other-month">28</div>
                      <div class="day other-month">29</div>
                      <div class="day other-month">30</div>
                      <div class="day other-month">31</div>
                      <div class="day">1</div>
                      <div class="day">2</div>
                      <div class="day">3</div>
                      <div class="day">4</div>
                      <div class="day">5</div>
                      <div class="day">6</div>
                      <div class="day">7</div>
                      <div class="day">8</div>
                      <div class="day">9</div>
                      <div class="day">10</div>
                      <div class="day">11</div>
                      <div class="day">12</div>
                      <div class="day">13</div>
                      <div class="day">14</div>
                      <div class="day has-event">15</div>
                      <div class="day">16</div>
                      <div class="day">17</div>
                      <div class="day">18</div>
                      <div class="day">19</div>
                      <div class="day">20</div>
                      <div class="day">21</div>
                      <div class="day has-event">22</div>
                      <div class="day">23</div>
                      <div class="day">24</div>
                      <div class="day">25</div>
                      <div class="day">26</div>
                      <div class="day">27</div>
                      <div class="day">28</div>
                      <div class="day">29</div>
                      <div class="day has-event">30</div>
                      <div class="day other-month">1</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="sidebar-item featured-event">
                <h3 class="sidebar-title">Featured Event</h3>
                <div class="featured-event-content">
                  <img src="{{ asset('assets/img/education/events-5.webp') }}" alt="Featured Event" class="img-fluid" loading="lazy" decoding="async">
                  <h4>Annual Arts Festival</h4>
                  <p><i class="bi bi-calendar-event"></i> July 15-17, 2023</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus consectetur adipiscing elit.</p>
                  <a href="/contact" class="btn-register">Register Now</a>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

    </section><!-- /Events 2 Section -->

  </main>

</x-layout>