@extends('layout')
@section('content')
@include('partials.banner')
@include('partials.portfolio')

<!-- Start Kategori Section -->
<section id="kategori" class="bg-light">
  <div class="container py-5">
    <!-- Title -->
    <div class="row text-center py-3">
      <div class="col-lg-6 m-auto">
        <h1 class="h1">Kategori Layanan</h1>
        <p>Pilih kategori sesuai kebutuhan Anda: IT, Jasa, dan Alat Tulis Kantor (ATK).</p>
      </div>
    </div>

<div class="row equal-heigh">
<!-- IT -->
<div class="col-12 col-md-4 mb-4">
  <a href="https://katalog.inaproc.id/zetoro-janaloka-teknologi" class="text-decoration-none text-dark">
    <div class="card h-100 shadow-sm border-0">
      <img src="assets/img/feature_prod_02.jpg" class="card-img-top" alt="IT">
      <div class="card-body text-center">
        <h4 class="fw-bold mb-2">IT</h4>
        <p class="card-text text-muted">
          Komputer, laptop, server, printer, serta layanan instalasi & pemeliharaan perangkat IT.
        </p>
        <span class="text-success fw-semibold">Perangkat & Solusi Teknologi</span>
      </div>
    </div>
  </a>
</div>

<!-- Jasa -->
<div class="col-12 col-md-4 mb-4">
  <a href="https://katalog.inaproc.id/zetoro-janaloka-teknologi" class="text-decoration-none text-dark">
    <div class="card h-100 shadow-sm border-0">
      <img src="assets/img/feature_prod_01.jpg" class="card-img-top" alt="Jasa">
      <div class="card-body text-center">
        <h4 class="fw-bold mb-2">Jasa</h4>
        <p class="card-text text-muted">
          Layanan teknisi, konsultasi IT, pelatihan, hingga penyewaan peralatan multimedia.
        </p>
        <span class="text-success fw-semibold">Layanan Profesional</span>
      </div>
    </div>
  </a>
</div>

<!-- ATK -->
<div class="col-12 col-md-4 mb-4">
  <a href="https://katalog.inaproc.id/zetoro-janaloka-teknologi" class="text-decoration-none text-dark">
    <div class="card h-100 shadow-sm border-0">
      <img src="assets/img/feature_prod_03.jpg" class="card-img-top" alt="ATK">
      <div class="card-body text-center">
        <h4 class="fw-bold mb-2">ATK</h4>
        <p class="card-text text-muted">
          Pulpen, kertas, buku, map, dan perlengkapan kantor lainnya dengan kualitas terbaik.
        </p>
        <span class="text-success fw-semibold">Alat Tulis Kantor</span>
      </div>
    </div>
  </div>
</section>
<!-- End Kategori Section -->

</body>
</html>
@endsection
