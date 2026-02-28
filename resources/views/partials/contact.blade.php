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
    <h1>Hubungi Zetoro</h1>
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
        <a href="zetorojanaloka@gmail.com" class="text-decoration-none">
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
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6004527544063!2d112.74374087499384!3d-7.289360592725091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb198e87f1df%3A0x32d61a2f97521bb5!2sMaspion%20Square!5e0!3m2!1sid!2sid!4v1735341062334!5m2!1sid!2sid"
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
