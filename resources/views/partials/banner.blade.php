<!-- Start Banner Hero -->
<div id="landingCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000" data-bs-pause="hover">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-bs-target="#landingCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#landingCarousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#landingCarousel" data-bs-slide-to="2"></li>
    </ol>

    <!-- Slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/banner_01.png" class="d-block w-100 banner-img" alt="Banner 1">
        </div>
        <div class="carousel-item">
            <img src="assets/img/banner_02.png" class="d-block w-100 banner-img" alt="Banner 2">
        </div>
        <div class="carousel-item">
            <img src="assets/img/banner_03.png" class="d-block w-100 banner-img" alt="Banner 3">
        </div>
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#landingCarousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left fa-2x"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#landingCarousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right fa-2x"></i>
    </a>
</div>
<!-- End Banner Hero -->

<!-- Custom CSS -->
<style>
    .banner-img {
        height: 85vh;           /* tinggi 85% layar */
        object-fit: cover;      /* biar tidak gepeng */
    }
</style>
