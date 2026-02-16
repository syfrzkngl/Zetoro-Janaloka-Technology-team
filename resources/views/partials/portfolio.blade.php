<!-- Start Portfolio of The Month -->
<section id="portfolio" class="portfolio section py-5">
  <div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="hover">

    <div class="container">
      <!-- Title -->
      <div class="text-center mb-4">
        <h2 class="fw-bold">Portfolio</h2>
        <hr class="mx-auto mt-3" style="width: 60px; border-top: 3px solid #28a745;">
        <p class="text-muted">Beberapa karya pilihan kami dalam desain, branding, dan lainnya.</p>
      </div>

      <!-- Carousel tanpa indikator -->
      <div class="carousel-inner text-center">
        <div class="carousel-item active">
          <img src="assets/img/portfolio/pf1.png" class="img-fluid rounded shadow-sm" alt="Contoh 1">
        </div>
        <div class="carousel-item">
          <img src="assets/img/portfolio/pf2.png" class="img-fluid rounded shadow-sm" alt="Contoh 2">
        </div>
        <div class="carousel-item">
          <img src="assets/img/portfolio/pf3.png" class="img-fluid rounded shadow-sm" alt="Contoh 3">
        </div>
        <div class="carousel-item">
          <img src="assets/img/portfolio/pf4.png" class="img-fluid rounded shadow-sm" alt="Contoh 4">
        </div>
        <div class="carousel-item">
          <img src="assets/img/portfolio/pf5.png" class="img-fluid rounded shadow-sm" alt="Contoh 5">
        </div>
        <div class="carousel-item">
          <img src="assets/img/portfolio/pf6.png" class="img-fluid rounded shadow-sm" alt="Contoh 6">
        </div>
      </div>

      <!-- Controls -->
      <a class="carousel-control-prev" href="#portfolioCarousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left text-success fs-3"></i>
      </a>
      <a class="carousel-control-next" href="#portfolioCarousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right text-success fs-3"></i>
      </a>
    </div>
  </div>
</section>
<!-- End Portfolio Carousel -->

<!-- Custom CSS -->
<style>
  #portfolioCarousel .carousel-item {
    padding: 30px 0;
  }
  #portfolioCarousel img {
    max-height: 650px; /* batasi sesuai tinggi gambar */
    object-fit: cover; /* gambar penuh, tidak gepeng */
    margin: 0 auto;
    display: block;
  }
</style>
