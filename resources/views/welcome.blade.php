<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'ZETORO') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <script defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

body {
    font-family: 'Plus Jakarta Sans', sans-serif;
}


/* GLASS */

.glass-card {
    background: rgba(255, 255, 255, .55);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
}

.dark .glass-card {
    background: rgba(15, 15, 15, .75);
}


/* MARQUEE */

@keyframes marquee {

    from {
        transform: translateX(0);
    }

    to {
        transform: translateX(-50%);
    }

}

.animate-marquee {

    display: flex;
    width: max-content;
    animation: marquee 40s linear infinite;

}

.animate-marquee:hover {

    animation-play-state: paused;

}


/* HERO */

.hero-glow {

    position: absolute;
    width: 500px;
    height: 500px;
    border-radius: 9999px;
    filter: blur(100px);
    opacity: .15;

}


.hero-card {

    transition: .3s ease;

}


.hero-card:hover {

    transform: translateY(-5px);

}


/* =========================
   RESPONSIVE
========================= */


/* Desktop kecil / Tablet */

@media (max-width:1024px) {


    .hero-title {

        font-size: 3rem;
        line-height: 1.1;

    }


}


/* Tablet */

@media (max-width:768px) {


    .hero-title {

        font-size: 2.25rem;
        line-height: 1.15;

    }


    .hero-subtitle {

        font-size: .95rem;

    }


}


/* Mobile */

@media (max-width:640px) {


    nav.desktop-nav {

        display:none;

    }


    .hero-title {

        font-size:1.9rem;
        line-height:1.2;

    }


    .hero-subtitle {

        font-size:.9rem;

    }


    .stat-grid {

        grid-template-columns:repeat(2,1fr);
        gap:.75rem;

    }

    /* PERBAIKAN: Mencegah konten Hero mepet ke atas ketutup navbar sticky */
    #about {
        padding-top: 2.5rem !important;
    }

    /* PERBAIKAN: Berikan jarak nafas ekstra antar section di mobile agar tidak rapat */
    main.space-y-16 {
        gap: 3rem !important;
    }
    
    /* PERBAIKAN: Mengatur ulang padding dalam kartu hijau agar seimbang di layar kecil */
    .lg\:col-span-7 {
        padding: 2rem 1.5rem !important;
    }

}


/* Extra kecil */

@media (max-width:375px) {


    .hero-title {

        font-size:1.7rem;

    }


    .stat-grid {

        grid-template-columns:1fr;

    }


}

</style>
</head>

<body
    x-data="{
        mobileMenu:false,
        activeSection:'about'
    }"
    class="bg-[#f4f5f6] dark:bg-[#090909] text-[#1b1b1b] dark:text-[#f2f2f2] min-h-screen overflow-x-hidden antialiased">

    <header class="sticky top-4 z-50 px-4 pt-4">

        <div
            class="max-w-7xl mx-auto glass-card border border-white/30 dark:border-neutral-800 rounded-full h-16 px-4 shadow-2xl">

            <div class="h-full flex items-center justify-between">

                <a href="#about"
                    class="flex items-center gap-3">

                    <img src="{{ asset('assets/img/logo.png') }}"
                        alt="Logo"
                        class="h-6 w-auto">

                </a>

                <nav class="desktop-nav flex items-center gap-3 text-sm font-bold">

                    <a href="#about"
                        @click="activeSection='about'"
                        :class="activeSection === 'about'
                        ? 'bg-emerald-500/10 text-emerald-600 dark:text-emerald-400'
                        : 'text-neutral-500'"
                        class="px-4 py-2 rounded-full transition-all duration-300">

                        <i class="bi bi-house-door-fill mr-1"></i>
                        Beranda

                    </a>

                    <a href="#services"
                        @click="activeSection='services'"
                        :class="activeSection === 'services'
                        ? 'bg-emerald-500/10 text-emerald-600 dark:text-emerald-400'
                        : 'text-neutral-500'"
                        class="px-4 py-2 rounded-full transition-all duration-300">

                        <i class="bi bi-grid-fill mr-1"></i>
                        Layanan

                    </a>

                    <a href="#faq"
                        @click="activeSection='faq'"
                        :class="activeSection === 'faq'
                        ? 'bg-emerald-500/10 text-emerald-600 dark:text-emerald-400'
                        : 'text-neutral-500'"
                        class="px-4 py-2 rounded-full transition-all duration-300">

                        <i class="bi bi-question-circle-fill mr-1"></i>
                        FAQ

                    </a>

                    <a href="#contact"
                        @click="activeSection='contact'"
                        :class="activeSection === 'contact'
                        ? 'bg-emerald-500/10 text-emerald-600 dark:text-emerald-400'
                        : 'text-neutral-500'"
                        class="px-4 py-2 rounded-full transition-all duration-300">

                        <i class="bi bi-envelope-fill mr-1"></i>
                        Kontak

                    </a>

                </nav>

                <div class="flex items-center gap-3">

                    <a href="https://katalog.inaproc.id/zetoro-janaloka-teknologi"
                        class="hidden sm:flex items-center gap-2 bg-neutral-900 dark:bg-white dark:text-black text-white px-5 py-2 rounded-full text-sm font-bold hover:scale-105 transition">

                        <i class="bi bi-rocket-takeoff-fill"></i>
                        Lihat Toko

                    </a>

                    <button
                        @click="mobileMenu=!mobileMenu"
                        class="sm:hidden h-10 w-10 rounded-full bg-neutral-100 dark:bg-neutral-800">

                        <i class="bi bi-list text-xl"></i>

                    </button>

                </div>

            </div>

        </div>

        <div
            x-show="mobileMenu"
            x-transition
            class="sm:hidden max-w-7xl mx-auto mt-3 bg-white dark:bg-[#111] rounded-3xl p-4 shadow-xl">

            <div class="flex flex-col gap-2 text-sm font-semibold">

                <a href="#about"
                    class="p-3 rounded-xl hover:bg-neutral-100 dark:hover:bg-neutral-800">

                    <i class="bi bi-house-door-fill mr-2"></i>
                    Beranda

                </a>

                <a href="#services"
                    class="p-3 rounded-xl hover:bg-neutral-100 dark:hover:bg-neutral-800">

                    <i class="bi bi-grid-fill mr-2"></i>
                    Layanan

                </a>

                <a href="#faq"
                    class="p-3 rounded-xl hover:bg-neutral-100 dark:hover:bg-neutral-800">

                    <i class="bi bi-question-circle-fill mr-2"></i>
                    FAQ

                </a>

                <a href="#contact"
                    class="p-3 rounded-xl hover:bg-neutral-100 dark:hover:bg-neutral-800">

                    <i class="bi bi-envelope-fill mr-2"></i>
                    Kontak

                </a>

            </div>

        </div>

    </header>

    <main class="space-y-16">

        <section id="about"
            class="max-w-7xl mx-auto px-4 sm:px-6 pt-8">

            <div class="grid lg:grid-cols-12 gap-6">

                <div
                    class="lg:col-span-7 relative overflow-hidden rounded-[40px] bg-[#198754] text-white p-8 sm:p-12 shadow-2xl">

                    <div class="hero-glow bg-white top-0 right-0"></div>

                    <div class="relative z-10">

                        <span
                            class="inline-flex items-center gap-2 bg-white/10 border border-white/20 px-4 py-2 rounded-full text-xs font-extrabold tracking-widest uppercase">

                            <i class="bi bi-stars"></i>
                            Next Generation Technology Partner

                        </span>

                        <h1
                            class="hero-title text-5xl font-black tracking-tight mt-6 leading-tight">

                            Zetoro Janaloka Teknologi

                        </h1>

                        <p
                            class="hero-subtitle text-emerald-100 mt-6 max-w-2xl leading-relaxed">

                            Solusi teknologi hulu ke hilir untuk perusahaan,
                            instansi pemerintah, pendidikan, hingga sektor
                            industri modern.

                            Kami menghadirkan layanan pengadaan perangkat,
                            rental IT, maintenance, konsultasi transformasi
                            digital, pengembangan aplikasi, serta integrasi
                            sistem yang terukur dan berkelanjutan.

                        </p>

                        <div class="flex flex-wrap gap-3 mt-8">

                            <a href="#contact"
                                class="bg-white text-[#198754] px-6 py-3 rounded-2xl font-bold hover:scale-105 transition">

                                <i class="bi bi-chat-dots-fill mr-2"></i>
                                Konsultasi Gratis

                            </a>

                            <a href="#services"
                                class="border border-white/30 px-6 py-3 rounded-2xl font-bold hover:bg-white/10 transition">

                                <i class="bi bi-arrow-right-circle-fill mr-2"></i>
                                Lihat Layanan

                            </a>

                        </div>

                    </div>

                </div>

                <div
                    class="lg:col-span-5 bg-white dark:bg-[#101010] border border-neutral-200 dark:border-neutral-800 rounded-[40px] p-6 flex items-center justify-center">

                    <img
                        src="{{ asset('assets/img/about-hero.jpg') }}"
                        alt="Hero"
                        class="w-full h-full max-h-[380px] object-contain">

                </div>

            </div>

        </section>

        <section class="max-w-7xl mx-auto px-4 sm:px-6">

            <div
                class="stat-grid grid lg:grid-cols-4 gap-4">

                <div
                    class="hero-card bg-white dark:bg-[#111] rounded-3xl p-6 border border-neutral-200 dark:border-neutral-800 text-center">

                    <i class="bi bi-buildings-fill text-4xl text-emerald-500"></i>

                    <h3 class="text-4xl font-black mt-4">
                        100+
                    </h3>

                    <p class="text-neutral-500 mt-2">
                        Klien Korporasi
                    </p>

                </div>

                <div
                    class="hero-card bg-white dark:bg-[#111] rounded-3xl p-6 border border-neutral-200 dark:border-neutral-800 text-center">

                    <i class="bi bi-laptop-fill text-4xl text-emerald-500"></i>

                    <h3 class="text-4xl font-black mt-4">
                        500+
                    </h3>

                    <p class="text-neutral-500 mt-2">
                        Unit Perangkat
                    </p>

                </div>

                <div
                    class="hero-card bg-white dark:bg-[#111] rounded-3xl p-6 border border-neutral-200 dark:border-neutral-800 text-center">

                    <i class="bi bi-award-fill text-4xl text-emerald-500"></i>

                    <h3 class="text-4xl font-black mt-4">
                        5+
                    </h3>

                    <p class="text-neutral-500 mt-2">
                        Tahun Pengalaman
                    </p>

                </div>

                <div
                    class="hero-card bg-white dark:bg-[#111] rounded-3xl p-6 border border-neutral-200 dark:border-neutral-800 text-center">

                    <i class="bi bi-headset text-4xl text-emerald-500"></i>

                    <h3 class="text-4xl font-black mt-4">
                        24/7
                    </h3>

                    <p class="text-neutral-500 mt-2">
                        Support Service
                    </p>

                </div>

            </div>

        </section>
        <section id="services"
            class="max-w-7xl mx-auto px-4 sm:px-6">

            <div class="text-center mb-12">

                <span
                    class="inline-flex items-center gap-2 bg-emerald-500/10 text-emerald-600 px-4 py-2 rounded-full text-xs font-extrabold uppercase tracking-widest">

                    <i class="bi bi-grid-fill"></i>
                    Layanan Kami

                </span>

                <h2
                    class="text-3xl md:text-5xl font-black tracking-tight mt-5">

                    Solusi Teknologi End-to-End

                </h2>

                <p
                    class="max-w-2xl mx-auto text-neutral-500 mt-4 leading-relaxed">

                    Kami membantu organisasi berkembang melalui layanan
                    teknologi yang terintegrasi, efisien, dan berorientasi
                    pada hasil.

                </p>

            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div
                    class="group bg-white dark:bg-[#111] border border-neutral-200 dark:border-neutral-800 rounded-[32px] p-8 hover:-translate-y-2 transition-all duration-300">

                    <div
                        class="h-16 w-16 rounded-2xl bg-emerald-500/10 flex items-center justify-center">

                        <i
                            class="bi bi-pc-display text-3xl text-emerald-500"></i>

                    </div>

                    <h3
                        class="font-black text-xl mt-6">

                        Pengadaan IT

                    </h3>

                    <p
                        class="text-neutral-500 mt-3 leading-relaxed">

                        Laptop, desktop, server, printer,
                        networking, dan perangkat pendukung
                        untuk kebutuhan perusahaan.

                    </p>

                </div>

                <div
                    class="group bg-white dark:bg-[#111] border border-neutral-200 dark:border-neutral-800 rounded-[32px] p-8 hover:-translate-y-2 transition-all duration-300">

                    <div
                        class="h-16 w-16 rounded-2xl bg-blue-500/10 flex items-center justify-center">

                        <i
                            class="bi bi-arrow-repeat text-3xl text-blue-500"></i>

                    </div>

                    <h3
                        class="font-black text-xl mt-6">

                        Rental Perangkat

                    </h3>

                    <p
                        class="text-neutral-500 mt-3 leading-relaxed">

                        Penyewaan laptop, komputer,
                        workstation, dan perangkat
                        teknologi dengan skema fleksibel.

                    </p>

                </div>

                <div
                    class="group bg-white dark:bg-[#111] border border-neutral-200 dark:border-neutral-800 rounded-[32px] p-8 hover:-translate-y-2 transition-all duration-300">

                    <div
                        class="h-16 w-16 rounded-2xl bg-orange-500/10 flex items-center justify-center">

                        <i
                            class="bi bi-tools text-3xl text-orange-500"></i>

                    </div>

                    <h3
                        class="font-black text-xl mt-6">

                        Maintenance IT

                    </h3>

                    <p
                        class="text-neutral-500 mt-3 leading-relaxed">

                        Perawatan berkala,
                        troubleshooting, dan dukungan
                        teknis profesional.

                    </p>

                </div>

                <div
                    class="group bg-white dark:bg-[#111] border border-neutral-200 dark:border-neutral-800 rounded-[32px] p-8 hover:-translate-y-2 transition-all duration-300">

                    <div
                        class="h-16 w-16 rounded-2xl bg-purple-500/10 flex items-center justify-center">

                        <i
                            class="bi bi-code-slash text-3xl text-purple-500"></i>

                    </div>

                    <h3
                        class="font-black text-xl mt-6">

                        Software Development

                    </h3>

                    <p
                        class="text-neutral-500 mt-3 leading-relaxed">

                        Pengembangan aplikasi web,
                        dashboard, sistem informasi,
                        ERP, dan platform digital.

                    </p>

                </div>

                <div
                    class="group bg-white dark:bg-[#111] border border-neutral-200 dark:border-neutral-800 rounded-[32px] p-8 hover:-translate-y-2 transition-all duration-300">

                    <div
                        class="h-16 w-16 rounded-2xl bg-red-500/10 flex items-center justify-center">

                        <i
                            class="bi bi-diagram-3-fill text-3xl text-red-500"></i>

                    </div>

                    <h3
                        class="font-black text-xl mt-6">

                        Integrasi Sistem

                    </h3>

                    <p
                        class="text-neutral-500 mt-3 leading-relaxed">

                        Menghubungkan berbagai sistem,
                        data, dan proses bisnis agar
                        lebih efektif.

                    </p>

                </div>

                <div
                    class="group bg-white dark:bg-[#111] border border-neutral-200 dark:border-neutral-800 rounded-[32px] p-8 hover:-translate-y-2 transition-all duration-300">

                    <div
                        class="h-16 w-16 rounded-2xl bg-cyan-500/10 flex items-center justify-center">

                        <i
                            class="bi bi-lightbulb-fill text-3xl text-cyan-500"></i>

                    </div>

                    <h3
                        class="font-black text-xl mt-6">

                        Konsultasi Digital

                    </h3>

                    <p
                        class="text-neutral-500 mt-3 leading-relaxed">

                        Pendampingan transformasi
                        digital dan strategi teknologi
                        untuk organisasi modern.

                    </p>

                </div>

            </div>

        </section>

        <section
            class="max-w-7xl mx-auto px-4 sm:px-6">

            <div
                class="bg-[#198754] rounded-[40px] overflow-hidden relative p-8 md:p-12 text-white">

                <div
                    class="absolute -right-24 -top-24 h-72 w-72 bg-white/10 rounded-full blur-3xl"></div>

                <div
                    class="grid lg:grid-cols-2 gap-12 items-center relative z-10">

                    <div>

                        <span
                            class="inline-flex items-center gap-2 bg-white/10 px-4 py-2 rounded-full text-xs font-extrabold uppercase">

                            <i class="bi bi-patch-check-fill"></i>
                            Mengapa Memilih Kami

                        </span>

                        <h2
                            class="text-4xl font-black mt-6">

                            Partner Teknologi yang
                            Berorientasi Hasil

                        </h2>

                        <p
                            class="mt-5 text-emerald-100 leading-relaxed">

                            Kami tidak hanya menjual produk
                            atau layanan, tetapi membangun
                            solusi yang membantu organisasi
                            tumbuh secara berkelanjutan.

                        </p>

                    </div>

                    <div
                        class="grid sm:grid-cols-2 gap-4">

                        <div
                            class="bg-white/10 rounded-3xl p-6">

                            <i
                                class="bi bi-lightning-charge-fill text-3xl"></i>

                            <h4
                                class="font-black mt-4">

                                Cepat

                            </h4>

                            <p
                                class="text-sm text-emerald-100 mt-2">

                                Respons cepat dan proses
                                kerja efisien.

                            </p>

                        </div>

                        <div
                            class="bg-white/10 rounded-3xl p-6">

                            <i
                                class="bi bi-shield-check text-3xl"></i>

                            <h4
                                class="font-black mt-4">

                                Terpercaya

                            </h4>

                            <p
                                class="text-sm text-emerald-100 mt-2">

                                Didukung tim profesional
                                dan pengalaman proyek.

                            </p>

                        </div>

                        <div
                            class="bg-white/10 rounded-3xl p-6">

                            <i
                                class="bi bi-graph-up-arrow text-3xl"></i>

                            <h4
                                class="font-black mt-4">

                                Berkembang

                            </h4>

                            <p
                                class="text-sm text-emerald-100 mt-2">

                                Solusi scalable untuk
                                kebutuhan jangka panjang.

                            </p>

                        </div>

                        <div
                            class="bg-white/10 rounded-3xl p-6">

                            <i
                                class="bi bi-headset text-3xl"></i>

                            <h4
                                class="font-black mt-4">

                                Support

                            </h4>

                            <p
                                class="text-sm text-emerald-100 mt-2">

                                Dukungan teknis dan
                                konsultasi berkelanjutan.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section
    class="py-12 overflow-hidden bg-white dark:bg-[#111] border-y border-neutral-200 dark:border-neutral-800">


    <div class="text-center mb-10">


        <h2 class="text-3xl font-black">

            Dipercaya Berbagai Instansi

        </h2>


        <p class="text-neutral-500 mt-2">

            Beberapa klien yang telah bekerja sama dengan kami

        </p>


    </div>



    <div class="animate-marquee gap-6">


        @for ($i = 1; $i <= 22; $i++)


            <div

                class="
                h-32
                w-64
                bg-neutral-50
                dark:bg-neutral-900
                border
                border-neutral-200
                dark:border-neutral-800
                rounded-3xl
                flex
                items-center
                justify-center
                shrink-0
                p-4
                hover:scale-105
                transition-all
                duration-300
                "

            >


                <img

                    src="{{ asset('assets/img/clients/client-' . $i . '.png') }}"

                    alt="Client {{ $i }}"

                    class="
                    h-24
                    w-auto
                    object-contain
                    grayscale
                    hover:grayscale-0
                    transition-all
                    duration-300
                    "

                >


            </div>


        @endfor




        {{-- DUPLIKAT UNTUK LOOP INFINITE --}}


        @for ($i = 1; $i <= 22; $i++)


            <div

                class="
                h-32
                w-64
                bg-neutral-50
                dark:bg-neutral-900
                border
                border-neutral-200
                dark:border-neutral-800
                rounded-3xl
                flex
                items-center
                justify-center
                shrink-0
                p-4
                hover:scale-105
                transition-all
                duration-300
                "

            >


                <img

                    src="{{ asset('assets/img/clients/client-' . $i . '.png') }}"

                    alt="Client {{ $i }}"

                    class="
                    h-24
                    w-auto
                    object-contain
                    grayscale
                    hover:grayscale-0
                    transition-all
                    duration-300
                    "

                >


            </div>


        @endfor



    </div>


</section>
        <section id="faq"
            class="max-w-4xl mx-auto px-4 sm:px-6"
    x-data="{ activeFaq: null }">

            <div class="text-center mb-12">

                <span
                    class="inline-flex items-center gap-2 bg-emerald-500/10 text-emerald-600 px-4 py-2 rounded-full text-xs font-extrabold uppercase tracking-widest">

                    <i class="bi bi-patch-question-fill"></i>
                    FAQ

                </span>

                <h2
                    class="text-3xl md:text-5xl font-black mt-5">

                    Pertanyaan yang Sering Diajukan

                </h2>

                <p
                    class="text-neutral-500 mt-4">

                    Several questions commonly asked by our clients.

                </p>

            </div>

            <div class="space-y-4">

                <div
                    class="bg-white dark:bg-[#111] border border-neutral-200 dark:border-neutral-800 rounded-3xl overflow-hidden">

                    <button
                        @click="activeFaq = activeFaq === 1 ? null : 1"
                        class="w-full p-6 flex justify-between items-center text-left font-bold">

                        <span>
                            Apa saja produk yang disediakan Zetoro?
                        </span>

                        <i
                            class="bi bi-chevron-down transition-all duration-300"
                            :class="activeFaq === 1 ? 'rotate-180' : ''"></i>

                    </button>

                    <div
                        x-show="activeFaq === 1"
                        x-transition
                        class="px-6 pb-6 text-neutral-500 leading-relaxed">

                        Kami menyediakan berbagai kebutuhan IT,
                        perangkat komputer, laptop, printer,
                        networking, server, ATK, hingga
                        solusi pengadaan teknologi untuk
                        perusahaan dan instansi.

                    </div>

                </div>

                <div
                    class="bg-white dark:bg-[#111] border border-neutral-200 dark:border-neutral-800 rounded-3xl overflow-hidden">

                    <button
                        @click="activeFaq = activeFaq === 2 ? null : 2"
                        class="w-full p-6 flex justify-between items-center text-left font-bold">

                        <span>
                            Apakah melayani pemesanan skala besar?
                        </span>

                        <i
                            class="bi bi-chevron-down transition-all duration-300"
                            :class="activeFaq === 2 ? 'rotate-180' : ''"></i>

                    </button>

                    <div
                        x-show="activeFaq === 2"
                        x-transition
                        class="px-6 pb-6 text-neutral-500 leading-relaxed">

                        Ya. Kami melayani kebutuhan perusahaan,
                        institusi pendidikan, BUMN, dan instansi
                        pemerintah dengan volume pengadaan besar.

                    </div>

                </div>

                <div
                    class="bg-white dark:bg-[#111] border border-neutral-200 dark:border-neutral-800 rounded-3xl overflow-hidden">

                    <button
                        @click="activeFaq = activeFaq === 3 ? null : 3"
                        class="w-full p-6 flex justify-between items-center text-left font-bold">

                        <span>
                            Apakah tersedia layanan rental perangkat?
                        </span>

                        <i
                            class="bi bi-chevron-down transition-all duration-300"
                            :class="activeFaq === 3 ? 'rotate-180' : ''"></i>

                    </button>

                    <div
                        x-show="activeFaq === 3"
                        x-transition
                        class="px-6 pb-6 text-neutral-500 leading-relaxed">

                        Tersedia. Kami menyediakan rental laptop,
                        komputer, workstation, serta perangkat IT
                        lainnya dengan durasi fleksibel.

                    </div>

                </div>

                <div
                    class="bg-white dark:bg-[#111] border border-neutral-200 dark:border-neutral-800 rounded-3xl overflow-hidden">

                    <button
                        @click="activeFaq = activeFaq === 4 ? null : 4"
                        class="w-full p-6 flex justify-between items-center text-left font-bold">

                        <span>
                            Apakah bisa membuat aplikasi custom?
                        </span>

                        <i
                            class="bi bi-chevron-down transition-all duration-300"
                            :class="activeFaq === 4 ? 'rotate-180' : ''"></i>

                    </button>

                    <div
                        x-show="activeFaq === 4"
                        x-transition
                        class="px-6 pb-6 text-neutral-500 leading-relaxed">

                        Ya. Tim kami dapat membantu pembuatan
                        aplikasi web, dashboard internal,
                        sistem informasi, ERP, dan kebutuhan
                        software custom lainnya.

                    </div>

                </div>

            </div>

        </section>

        <section id="contact"
    class="max-w-6xl mx-auto px-4 sm:px-6">


    <div class="grid lg:grid-cols-12 gap-5">


        <div
            class="lg:col-span-5 bg-white dark:bg-[#111]
            border border-neutral-200 dark:border-neutral-800
            rounded-[32px]
            p-6">


            <span
                class="inline-flex items-center gap-2
                bg-emerald-500/10
                text-emerald-600
                px-3 py-2
                rounded-full
                text-xs
                font-extrabold
                uppercase">

                <i class="bi bi-envelope-paper-fill"></i>

                Hubungi Kami

            </span>


            <h2
                class="text-2xl font-black mt-5">

                Mari Diskusikan Kebutuhan Anda

            </h2>


            <p
                class="text-neutral-500 mt-3 text-sm leading-relaxed">

                Tim kami siap membantu kebutuhan pengadaan,
                pengembangan sistem, maintenance,
                dan transformasi digital.

            </p>



            <div class="mt-6 space-y-3">


                <a
                    href="https://wa.me/6282245645353"
                    target="_blank"
                    class="
                    flex items-center gap-4
                    bg-neutral-100
                    dark:bg-neutral-900
                    p-4
                    rounded-2xl
                    hover:scale-[1.02]
                    transition">


                    <i class="bi bi-whatsapp text-xl text-emerald-500"></i>


                    <div>

                        <div class="font-black text-sm">
                            WhatsApp
                        </div>


                        <div class="text-xs text-neutral-500">
                            Ketuk untuk memulai
                        </div>


                    </div>


                </a>



                <a
                    href="mailto:zetorojanaloka@gmail.com"
                    class="
                    flex items-center gap-4
                    bg-neutral-100
                    dark:bg-neutral-900
                    p-4
                    rounded-2xl
                    hover:scale-[1.02]
                    transition">


                    <i class="bi bi-envelope-fill text-xl text-emerald-500"></i>


                    <div>

                        <div class="font-black text-sm">
                            Email
                        </div>


                        <div class="text-xs text-neutral-500">
                            Ketuk untuk memulai
                        </div>


                    </div>


                </a>




                <a
                    href="https://instagram.com/zetoro.janaloka"
                    target="_blank"
                    class="
                    flex items-center gap-4
                    bg-neutral-100
                    dark:bg-neutral-900
                    p-4
                    rounded-2xl
                    hover:scale-[1.02]
                    transition">


                    <i class="bi bi-instagram text-xl text-emerald-500"></i>


                    <div>

                        <div class="font-black text-sm">
                            Instagram
                        </div>


                        <div class="text-xs text-neutral-500">
                            Ketuk untuk memulai
                        </div>


                    </div>


                </a>


            </div>


        </div>




        <div
            class="lg:col-span-7
            rounded-[32px]
            overflow-hidden
            border border-neutral-200 dark:border-neutral-800
            min-h-[380px]">


            <iframe

                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6004527544063!2d112.74374087499384!3d-7.289360592725091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb198e87f1df%3A0x32d61a2f97521bb5!2sMaspion%20Square!5e0!3m2!1sid!2sid!4v1735341062334!5m2!1sid!2sid"

                class="w-full h-full"

                loading="lazy">

            </iframe>


        </div>


    </div>


</section>
    </main>

    <footer
        class="mt-20 bg-neutral-950 text-white">

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 py-16">

            <div
                class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">

                <div>

                    <img
                        src="{{ asset('assets/img/logo.png') }}"
                        class="h-8 brightness-0 invert"
                        alt="Logo">

                    <p
                        class="text-neutral-400 mt-6 leading-relaxed">

                        Partner teknologi terpercaya
                        untuk pengadaan, rental,
                        maintenance, pengembangan
                        aplikasi, dan transformasi digital.

                    </p>

                </div>

                <div>

                    <h4
                        class="font-black mb-5">

                        Perusahaan

                    </h4>

                    <div
                        class="space-y-3 text-neutral-400">

                        <a href="#about" class="block hover:text-white">
                            Beranda
                        </a>

                        <a href="#services" class="block hover:text-white">
                            Layanan
                        </a>

                        <a href="#faq" class="block hover:text-white">
                            FAQ
                        </a>

                        <a href="#contact" class="block hover:text-white">
                            Kontak
                        </a>

                    </div>

                </div>

                <div>

                    <h4
                        class="font-black mb-5">

                        Solusi

                    </h4>

                    <div
                        class="space-y-3 text-neutral-400">

                        <div>Pengadaan IT</div>
                        <div>Rental Perangkat</div>
                        <div>Maintenance</div>
                        <div>Software Development</div>

                    </div>

                </div>

                <div>

                    <h4
                        class="font-black mb-5">

                        Kontak

                    </h4>

                    <div
                        class="space-y-4 text-neutral-400">

                        <div>
                            <i class="bi bi-whatsapp mr-2"></i>
                            +62 822-4564-5353
                        </div>

                        <div>
                            <i class="bi bi-envelope mr-2"></i>
                            zetorojanaloka@gmail.com
                        </div>

                        <div>
                            <i class="bi bi-geo-alt mr-2"></i>
                            Surabaya, Indonesia
                        </div>

                    </div>

                </div>

            </div>

            <div
                class="border-t border-neutral-800 mt-12 pt-8 text-center text-neutral-500 text-sm">

                © 2026 Zetoro Janaloka Teknologi.
                All Rights Reserved.

            </div>

        </div>

    </footer>

    <script>

document.addEventListener('scroll', () => {

    const sections = document.querySelectorAll('section[id]');

    sections.forEach(section => {

        const scrollPosition = window.scrollY;
        const sectionTop = section.offsetTop - 200;
        const sectionHeight = section.offsetHeight;

        const id = section.getAttribute('id');


        if (
            scrollPosition >= sectionTop &&
            scrollPosition < sectionTop + sectionHeight
        ) {


            Alpine.$data(
                document.querySelector('[x-data]')
            ).activeSection = id;


        }

    });

});


</script>

</body>

</html>