<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $title }}</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

   <x-header/>

 {{ $slot }}

  <footer id="footer" class="footer-16 footer position-relative dark-background">

    <div class="container">

      <div class="footer-main">
        <div class="row align-items-start">

          <div class="col-lg-5">
            <div class="brand-section">
              <a href="index.html" class="logo d-flex align-items-center mb-4">
                <span class="sitename">SMK Bina Insani</span>
              </a>
              <p class="brand-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam tempora repellendus nobis qui pariatur distinctio?.</p>

              <div class="contact-info mt-5">
                <div class="contact-item">
                  <i class="bi bi-geo-alt"></i>
                  <span>Cisauk, Pamulang, Tangerang Selatan</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-telephone"></i>
                  <span>+628334534546</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-envelope"></i>
                  <span>binacisauk@gmail.com</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="footer-nav-wrapper">
              <div class="row">

                <div class="col-6 col-lg-3">
                  <div class="nav-column">
                    <h6>Services</h6>
                    <nav class="footer-nav">
                      <a href="#">Layanan</a>
                      <a href="#">Kontak</a>
                      <a href="#">Mobile Apps</a>
                      <a href="#">Digital Strategy</a>
                      <a href="#">Konsultasi</a>
                    </nav>
                  </div>
                </div>

                <div class="col-6 col-lg-3">
                  <div class="nav-column">
                    <h6>Tautan</h6>
                    <nav class="footer-nav">
                      <a href="#">Home</a>
                      <a href="#">About</a>
                      <a href="#">Ekstrakulikuler</a>
                      <a href="#">Event</a>
                      <a href="#">Contact</a>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="footer-social">
        <div class="row align-items-center">

          <div class="col-lg-6">
            <div class="newsletter-section">
              <h5>Sosial Media</h5>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="social-section">
              <div class="social-links">
                <a href="#" aria-label="Dribbble" class="social-link">
                  <i class="bi bi-dribbble"></i>
                  <span>Dribbble</span>
                </a>
                <a href="#" aria-label="Behance" class="social-link">
                  <i class="bi bi-behance"></i>
                  <span>Facobook</span>
                </a>
                <a href="#" aria-label="Instagram" class="social-link">
                  <i class="bi bi-instagram"></i>
                  <span>Instagram</span>
                </a>
                <a href="#" aria-label="LinkedIn" class="social-link">
                  <i class="bi bi-linkedin"></i>
                  <span>LinkedIn</span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="bottom-content">
          <div class="row align-items-center">

            <div class="col-lg-6">
              <div class="copyright">
                <p>© <span class="sitename">MyWebsite</span>. All rights reserved.</p>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="legal-links">
                  Designed by <a href="">ARFIAN NURDAVICKY</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  

  <!-- Vendor JS Files -->
  <script defer src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script defer src="/assets/vendor/php-email-form/validate.js"></script>
  <script defer src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script defer src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script defer src="/assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script defer src="/assets/js/main.js"></script>

</body>

</html>