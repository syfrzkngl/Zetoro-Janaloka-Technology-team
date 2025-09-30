@extends('layout')

@section('content')

   <!-- Banner -->
<section class="py-5 about-banner">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 text-white">
                <h1>Tentang Kami</h1>
                <p>
                    Zetoro Janaloka Teknologi menyediakan solusi teknologi lengkap 
                    - mulai dari pengadaan perangkat, penyewaan, perawatan, 
                    hingga sistem digital yang disesuaikan.
                </p>
            </div>
            <div class="col-md-4 text-center">
                <img src="assets/img/about-hero.jpg" alt="About Hero" class="about-img img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->


    <!-- Why Us -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1>Kenapa Kami?</h1>
<<<<<<< HEAD
                <p>
                    Kami memberikan solusi TI terbaik dan terpercaya untuk kebutuhan bisnis Anda.
                </p>
=======
                <p>Kami memberikan solusi TI terbaik dan terpercaya untuk kebutuhan bisnis Anda.</p>
>>>>>>> fd6121c1e49a4f7b798bf592cd70d604f0a9e033
            </div>
        </div>

        <div class="row g-4">
            <!-- Item 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow border-0 text-center p-4 feature-box">
                    <div class="icon-circle mx-auto mb-3">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h5 class="fw-bold">01. Pengalaman Profesional</h5>
                    <p class="text-muted">
                        Tim kami terdiri dari tenaga ahli berpengalaman di berbagai bidang teknologi informasi.
                    </p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow border-0 text-center p-4 feature-box">
                    <div class="icon-circle mx-auto mb-3">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h5 class="fw-bold">02. Layanan Lengkap</h5>
                    <p class="text-muted">
                        Mulai dari pengadaan perangkat, instalasi, hingga perawatan dan konsultasi TI.
                    </p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow border-0 text-center p-4 feature-box">
                    <div class="icon-circle mx-auto mb-3">
                        <i class="fas fa-tags"></i>
                    </div>
                    <h5 class="fw-bold">03. Harga Kompetitif</h5>
                    <p class="text-muted">
                        Kami menawarkan solusi terbaik dengan harga yang sesuai anggaran perusahaan Anda.
                    </p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow border-0 text-center p-4 feature-box">
                    <div class="icon-circle mx-auto mb-3">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h5 class="fw-bold">04. Teknologi Terkini</h5>
                    <p class="text-muted">
                        Kami selalu mengikuti perkembangan teknologi untuk memberikan hasil maksimal.
                    </p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow border-0 text-center p-4 feature-box">
                    <div class="icon-circle mx-auto mb-3">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h5 class="fw-bold">05. Respons Cepat</h5>
                    <p class="text-muted">
                        Tim support kami siap membantu Anda dengan respon yang cepat dan efisien.
                    </p>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow border-0 text-center p-4 feature-box">
                    <div class="icon-circle mx-auto mb-3">
                        <i class="fas fa-smile"></i>
                    </div>
                    <h5 class="fw-bold">06. Kepuasan Klien</h5>
                    <p class="text-muted">
                        Fokus utama kami adalah kepuasan dan kepercayaan dari klien.
                    </p>
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD
    <!--End Brands-->
    <!-- CSS tambahan -->
<style>
    .about-img {
  max-width: auto;
  width: auto;
  height: auto;
  border-radius: auto;
}
.feature-box {
    transition: all 0.3s ease;
    border-radius: 15px;
  }
  .feature-box:hover {
    transform: translateY(-8px);
    box-shadow: 0px 10px 20px rgba(0,0,0,0.1);
  }
  .icon-circle {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: #198754;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 28px;
  }
</style>
    @endsection
=======
    <!-- End Why Us -->


<div class="logo-slider">
  <div class="logo-slide-track">
    <div class="logo up"><img src="assets/img/clients/client-1.png" alt="Client 1"></div>
    <div class="logo down"><img src="assets/img/clients/client-2.png" alt="Client 2"></div>
    <div class="logo mid"><img src="assets/img/clients/client-3.png" alt="Client 3"></div>
    <div class="logo up"><img src="assets/img/clients/client-4.png" alt="Client 4"></div>
    <div class="logo down"><img src="assets/img/clients/client-5.png" alt="Client 5"></div>
    <!-- Duplikat untuk looping -->
    <div class="logo up"><img src="assets/img/clients/client-1.png" alt="Client 1"></div>
    <div class="logo down"><img src="assets/img/clients/client-2.png" alt="Client 2"></div>
    <div class="logo mid"><img src="assets/img/clients/client-3.png" alt="Client 3"></div>
    <div class="logo up"><img src="assets/img/clients/client-4.png" alt="Client 4"></div>
    <div class="logo down"><img src="assets/img/clients/client-5.png" alt="Client 5"></div>
  </div>
</div>

    <!-- Custom CSS -->
    <style>
  
    </style>

@endsection
>>>>>>> fd6121c1e49a4f7b798bf592cd70d604f0a9e033
