@extends('layout')
@section('content')
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Zetoro</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <style>
    /* Header */

    html, body {
  max-width: 100%;
  overflow-x: hidden;
}

    .contact-header {
      background: linear-gradient(135deg, #43a047, #1b5e20);
      color: white;
      padding: 100px 20px;
      text-align: center;
    }
    .contact-header h1 {
      font-size: 3rem;
      font-weight: bold;
    }
    .contact-header p {
      font-size: 1.2rem;
    }

    /* Card info */
    .contact-info .card {
      border-radius: 20px;
      color: white;
      transition: transform 0.3s, box-shadow 0.3s;
      cursor: pointer;
      opacity: 0;
      transform: translateY(40px);
    }
    .contact-info .card.show {
      opacity: 1;
      transform: translateY(0);
      transition: all 0.8s ease;
    }
    .contact-icon {
      font-size: 40px;
      margin-bottom: 15px;
    }
    .card-green { background: linear-gradient(135deg,#4caf50,#2e7d32); }
    .card-blue { background: linear-gradient(135deg,#2196f3,#1565c0); }
    .card-orange { background: linear-gradient(135deg,#ff9800,#ef6c00); }

    /* Map */
    .map-container iframe {
      border-radius: 20px;
      height: 100%;
      width: 100%;
      min-height: 300px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
      opacity: 0;
      transform: translateY(40px);
      transition: all 0.8s ease;
    }
    .map-container.show iframe {
      opacity: 1;
      transform: translateY(0);
    }

    /* Offer */
    .offer-box {
      background: #ffffff;
      border-radius: 20px;
      padding: 40px;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      box-shadow: 0 8px 24px rgba(0,0,0,0.1);
      transition: 0.3s;
      cursor: pointer;
      opacity: 0;
      transform: translateY(40px);
    }
    .offer-box.show {
      opacity: 1;
      transform: translateY(0);
      transition: all 0.8s ease;
    }
    .offer-box:hover {
      transform: translateY(-5px);
    }

    /* Responsive untuk HP */
    @media (max-width: 768px) {
      .contact-header {
        padding: 60px 20px;
      }
      .contact-header h1 {
        font-size: 2rem;
      }
      .contact-header p {
        font-size: 1rem;
      }
      .contact-icon {
        font-size: 30px;
      }
      .offer-box {
        padding: 20px;
        text-align: center;
      }
      .offer-box ul {
        text-align: left;
        font-size: 0.9rem;
      }
      .map-container iframe {
        min-height: 250px;
      }
    }
     .card-red {
  background: linear-gradient(135deg, #e53935, #b71c1c);
  color: white;
}

  </style>
</head>
<body>

  <!-- Header -->
  <header class="contact-header">
    <h1>Hubungi Kami</h1>
    <p class="lead mt-3">Kami selalu siap membantu kebutuhan teknologi Anda</p>
  </header>

  <!-- 3 Card Info -->
  <section class="contact-info container my-5">
    <div class="row g-4 text-center">
      <div class="col-md-4 col-12">
        <a href="https://maps.google.com/?q=Maspion+Square+Surabaya" target="_blank" class="text-decoration-none">
          <div class="card p-4 h-100 card-blue">
            <i class="bi bi-geo-alt-fill contact-icon"></i>
            <h5>Alamat</h5>
            <p><i>Lihat alamat lengkap.</i></p>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-12">
  <a href="https://wa.me/6282245645353" target="_blank" class="text-decoration-none">
    <div class="card p-4 h-100 card-green">
      <i class="bi bi-whatsapp contact-icon"></i>
      <h5>WhatsApp</h5>
      <p><i>Chat via WhatsApp.</i></p>
    </div>
  </a>
</div>

      <div class="col-md-4 col-12">
        <a href="mailto:zetorojanaloka@gmail.com" class="text-decoration-none">
          <div class="card p-4 h-100 card-red">
            <i class="bi bi-envelope-fill contact-icon"></i>
            <h5><bold>Email</h5>
            <p><i>Obrolkan melalui Email.</i></p>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- Map + Offer sejajar (jadi atas bawah di HP) -->
  <section id="kontak" class="py-5 bg-light">
    <div class="container">
        <div class="row g-5 align-items-center">

            <!-- Teks ajakan -->
            <div class="col-md-5" data-aos="fade-right">
                <h2 class="text-success mb-3">Tertarik Bekerja Sama?</h2>
                <p class="text-muted">
                    Anda bisa langsung menemukan kami di lokasi berikut atau hubungi kami melalui WhatsApp & Email.
                </p>
                <div class="d-flex flex-wrap gap-2 mt-3">
                    <a href="https://wa.me/628224564552" class="btn btn-success px-4">
                        <i class="bi bi-whatsapp"></i> WhatsApp
                    </a>
                    <a href="mailto:info@zetoro.com" class="btn btn-outline-success px-4">
                        <i class="bi bi-envelope-fill"></i> Email
                    </a>
                </div>
            </div>

            <!-- Maps -->
            <div class="col-md-7" data-aos="fade-left">
                <div class="card shadow border-0 rounded overflow-hidden h-100">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.341910434071!2d112.73312197500023!3d-7.315434192692571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb5a104cae0b%3A0x134b020dd584cdcf!2sMASPION%20SQUARE!5e0!3m2!1sid!2sid!4v1757561130595!5m2!1sid!2sid"
                width="100%"
                height="350"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Testimoni Carousel -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center text-success mb-5 fw-bold" data-aos="fade-up">Apa Kata Mereka?</h2>

    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="card border-0 shadow-sm h-100" style="border-radius: 20px;">
                <div class="card-body text-center">
                  <i class="bi bi-chat-quote-fill text-success" style="font-size: 2rem;"></i>
                  <p class="mt-3">"Pelayanan Zetoro sangat cepat dan profesional."</p>
                  <h6 class="fw-bold mb-0">Budi Santoso</h6>
                  <small class="text-muted">budi@gmail.com</small>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="card border-0 shadow-sm h-100" style="border-radius: 20px;">
                <div class="card-body text-center">
                  <i class="bi bi-chat-quote-fill text-success" style="font-size: 2rem;"></i>
                  <p class="mt-3">"Produk yang ditawarkan sangat berkualitas."</p>
                  <h6 class="fw-bold mb-0">Sari Wulandari</h6>
                  <small class="text-muted">sari@yahoo.com</small>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="card border-0 shadow-sm h-100" style="border-radius: 20px;">
                <div class="card-body text-center">
                  <i class="bi bi-chat-quote-fill text-success" style="font-size: 2rem;"></i>
                  <p class="mt-3">"Zetoro membantu teknologi perusahaan kami."</p>
                  <h6 class="fw-bold mb-0">Andi Pratama</h6>
                  <small class="text-muted">andi@mail.com</small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="card border-0 shadow-sm h-100" style="border-radius: 20px;">
                <div class="card-body text-center">
                  <i class="bi bi-chat-quote-fill text-success" style="font-size: 2rem;"></i>
                  <p class="mt-3">"Respon customer service sangat cepat."</p>
                  <h6 class="fw-bold mb-0">Dewi Lestari</h6>
                  <small class="text-muted">dewi@mail.com</small>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="card border-0 shadow-sm h-100" style="border-radius: 20px;">
                <div class="card-body text-center">
                  <i class="bi bi-chat-quote-fill text-success" style="font-size: 2rem;"></i>
                  <p class="mt-3">"Kualitas produk sangat memuaskan."</p>
                  <h6 class="fw-bold mb-0">Rian Setiawan</h6>
                  <small class="text-muted">rian@mail.com</small>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="card border-0 shadow-sm h-100" style="border-radius: 20px;">
                <div class="card-body text-center">
                  <i class="bi bi-chat-quote-fill text-success" style="font-size: 2rem;"></i>
                  <p class="mt-3">"Tim Zetoro ramah dan komunikatif."</p>
                  <h6 class="fw-bold mb-0">Fitri Ananda</h6>
                  <small class="text-muted">fitri@mail.com</small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="card border-0 shadow-sm h-100" style="border-radius: 20px;">
                <div class="card-body text-center">
                  <i class="bi bi-chat-quote-fill text-success" style="font-size: 2rem;"></i>
                  <p class="mt-3">"Harga sesuai kualitas, worth it!"</p>
                  <h6 class="fw-bold mb-0">Ahmad Fauzi</h6>
                  <small class="text-muted">ahmad@mail.com</small>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="card border-0 shadow-sm h-100" style="border-radius: 20px;">
                <div class="card-body text-center">
                  <i class="bi bi-chat-quote-fill text-success" style="font-size: 2rem;"></i>
                  <p class="mt-3">"Pengiriman cepat dan aman."</p>
                  <h6 class="fw-bold mb-0">Lina Kurnia</h6>
                  <small class="text-muted">lina@mail.com</small>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="card border-0 shadow-sm h-100" style="border-radius: 20px;">
                <div class="card-body text-center">
                  <i class="bi bi-chat-quote-fill text-success" style="font-size: 2rem;"></i>
                  <p class="mt-3">"Sangat puas dengan pelayanan Zetoro."</p>
                  <h6 class="fw-bold mb-0">Yusuf Hidayat</h6>
                  <small class="text-muted">yusuf@mail.com</small>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Tambahin AOS JS & CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 200,
    once: true
  });
</script>

  <!-- JS Animasi -->
  <script>
    // Card muncul saat refresh
    window.addEventListener("load", () => {
      const cards = document.querySelectorAll(".contact-info .card");
      cards.forEach((card, index) => {
        setTimeout(() => {
          card.classList.add("show");
        }, index * 400);
      });
    });

    // Map & Offer muncul saat discroll
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });

    document.querySelectorAll(".map-container, .offer-box").forEach(el => {
      observer.observe(el);
    });
  </script>

@endsection
