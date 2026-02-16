<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'ZETORO')</title>

  <!-- Favicon -->
  <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favico.png') }}">

  <!-- LOCAL CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/templatemo.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

  <!-- CDN-Only CSS (tambahan efek) -->
  <link href="https://cdn.jsdelivr.net/npm/aos@3.0.0-beta.6/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>


    {{-- Google Fonts --}}
    <!-- <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
</head> -->

<body>
    {{-- Top Nav --}}
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:Zetoro@gmail.com">Zetoro@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:0822-4564-5353">0822-4564-5353</a>
                </div>
                <div>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank">
                        <i class="fab fa-instagram fa-sm fa-fw me-2"></i>
                    </a>
                    <a class="text-light" href="https://katalog.inaproc.id/zetoro-janaloka-teknologi" target="_blank">
                        <i class="fas fa-shopping-basket fa-sm fa-fw me-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Main Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand align-self-center" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" height="40">
            </a>


            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#templatemo_main_nav" aria-controls="templatemo_main_nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between"
                 id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://katalog.inaproc.id/zetoro-janaloka-teknologi" target="_blank">Toko</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    {{-- Modal Search --}}
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
  <footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">
            {{-- Footer Column 1 --}}
            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom border-2 border-white pb-3">Zetoro Janaloka Teknologi</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><i class="fas fa-map-marker-alt fa-fw me-2"></i>Maspion Square Blok D-3(Ex Giant Margorejo) Jl. Ahmad Yani No 73 Surabaya</p></li>
                    <li><i class="fa fa-phone fa-fw me-2"></i> <a class="text-decoration-none text-light" href="tel:+62 822-4564-5353">+62 822-4564-5353</a></li>
                    <li><i class="fa fa-envelope fa-fw me-2"></i> <a class="text-decoration-none text-light" href="mailto:info@company.com">zetoro@gmail.com</a></li>
                </ul>
            </div>

            {{-- Footer Column 2 --}}
            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom border-2 border-white pb-3">Layanan Kami</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none text-light" >IT</a></li>
                    <li><a class="text-decoration-none text-light" >Jasa Perawatan</a></li>
                    <li><a class="text-decoration-none text-light" >Alat Tulis Kantor (ATK)</a></li>
                </ul>
            </div>

            {{-- Footer Column 3 --}}
            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom border-2 border-white pb-3">Tentang Zetoro</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none text-light" href="/">Beranda</a></li>
                    <li><a class="text-decoration-none text-light" href="/about">Tentang Kami</a></li>
                    <li><a class="text-decoration-none text-light hover-success" target="_blank" href="https://maps.google.com/?q=Maspion+Square+Surabaya">Lokasi Toko</a></li>
                    <li><a class="text-decoration-none text-light" href="/faq">FAQ</a></li>
                    <li><a class="text-decoration-none text-light" href="/contact">Kontak</a></li>
                </ul>
            </div>
        </div>

        {{-- Baris Sosial Media & Newsletter --}}
        <div class="row text-light mb-4 pt-4 align-items-center">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left footer-icons mb-0">
                    <li class="list-inline-item border border-light rounded-circle text-center p-1">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/">
                            <i class="fab fa-instagram fa-sm fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center p-1">
                        <a class="text-light text-decoration-none" target="_blank" href="https://katalog.inaproc.id/zetoro-janaloka-teknologi">
                            <i class="fas fa-shopping-basket fa-sm fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Tombol WhatsApp Floating -->
    <a href="https://wa.me/6282245645353?text=Halo%20Zetoro%20Janaloka%20Teknologi%2C%20saya%20ingin%20bertanya..."
    class="whatsapp-float"
    target="_blank"
    aria-label="Chat via WhatsApp">
    <i class="bi bi-whatsapp"></i>
    </a>

    {{-- Copyright --}}
    <div class="bg-success text-white text-center py-3">
        <p class="mb-0">&copy; 2025 Zetoro Janaloka Teknologi</p>
    </div>
</footer>

    @stack('styles')
@stack('scripts')

</body>
<!-- LOCAL JS -->
<script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/templatemo.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- CDN JS -->

<script src="https://cdn.jsdelivr.net/npm/aos@3.0.0-beta.6/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<!-- Inisialisasi AOS & GLightbox -->
<script>
  AOS.init();
  const lightbox = GLightbox({
    selector: '.glightbox'
  });
  document.addEventListener('DOMContentLoaded', function () {
    // Inisialisasi Isotope
    var grid = document.querySelector('.isotope-container');
    var iso = new Isotope(grid, {
      itemSelector: '.isotope-item',
      layoutMode: 'masonry'
    });

    // Ambil tombol filter
    var filterButtons = document.querySelectorAll('.portfolio-filters button');

    filterButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        // Ambil value filter dari tombol
        var filterValue = button.getAttribute('data-filter');

        // Terapkan filter ke Isotope
        iso.arrange({ filter: filterValue });

        // Ganti class aktif (highlight tombol yang dipilih)
        filterButtons.forEach(function (btn) {
          btn.classList.remove('filter-active');
        });
        button.classList.add('filter-active');
      });
    });
  });
</script>

</html>
