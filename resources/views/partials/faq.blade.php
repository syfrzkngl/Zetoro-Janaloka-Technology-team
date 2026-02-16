@extends('layout')
@section('content')

<section id="faq" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">FAQ - Pertanyaan yang Sering Diajukan</h2>
    <div class="accordion" id="faqAccordion">

      <!-- ATK -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeadingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
            Apa saja produk ATK yang disediakan Zetoro?
          </button>
        </h2>
        <div id="faqOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Kami menyediakan berbagai kebutuhan alat tulis kantor seperti kertas, pulpen, printer, tinta, dan perlengkapan kerja lainnya dengan kualitas terjamin.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeadingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
            Apakah bisa melakukan pemesanan ATK dalam jumlah besar?
          </button>
        </h2>
        <div id="faqTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Ya, kami melayani pemesanan grosir untuk kebutuhan instansi, sekolah, maupun perusahaan dengan harga yang kompetitif.
          </div>
        </div>
      </div>

      <!-- JASA -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeadingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
            Layanan jasa apa yang ditawarkan Zetoro?
          </button>
        </h2>
        <div id="faqThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Kami menawarkan jasa pengadaan barang, konsultasi bisnis, serta layanan pengelolaan proyek yang mendukung efisiensi perusahaan Anda.
          </div>
        </div>
      </div>

      <!-- IT -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeadingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
            Apa saja solusi IT yang tersedia?
          </button>
        </h2>
        <div id="faqFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Kami menyediakan solusi IT meliputi pengembangan aplikasi, website, sistem informasi, serta dukungan teknis untuk digitalisasi bisnis.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeadingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFive" aria-expanded="false" aria-controls="faqFive">
            Apakah Zetoro menerima pembuatan aplikasi custom?
          </button>
        </h2>
        <div id="faqFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Ya, kami menerima pengembangan aplikasi dan sistem yang disesuaikan dengan kebutuhan bisnis klien agar lebih efektif dan efisien.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection