<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'ZETORO') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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

        .glass-card {
            background: rgba(255, 255, 255, .55);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }

        .dark .glass-card {
            background: rgba(15, 15, 15, .75);
        }

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

        .hero-glow {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 9999px;
            filter: blur(100px);
            opacity: .15;
        }

        .hero-card:hover {
            transform: translateY(-5px);
        }

        .hero-card {
            transition: .3s ease;
        }

        @media (max-width:1024px) {
            .hero-title {
                font-size: 3rem !important;
            }
        }

        @media (max-width:768px) {
            .hero-title {
                font-size: 2.2rem !important;
                line-height: 1.15;
            }

            .hero-subtitle {
                font-size: .95rem;
            }
        }

        @media (max-width:640px) {

            nav.desktop-nav {
                display: none;
            }

            .hero-title {
                font-size: 1.9rem !important;
            }

            .stat-grid {
                grid-template-columns: repeat(2, 1fr);
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

    <!-- HEADER -->

    <header class="sticky top-4 z-50 px-4 pt-4">

        <div
            class="max-w-7xl mx-auto glass-card border border-white/30 dark:border-neutral-800 rounded-full h-16 px-4 shadow-2xl">

            <div class="h-full flex items-center justify-between">

                <!-- LOGO -->

                <a href="#about"
                    class="flex items-center gap-3">

                    <img src="{{ asset('assets/img/logo.png') }}"
                        alt="Logo"
                        class="h-6 w-auto">

                </a>

                <!-- DESKTOP NAV -->

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

                    <a href="https://katalog.inaproc.id/zetoro-janaloka-teknologi"
                        target="_blank"
                        class="text-neutral-500 hover:text-emerald-600 transition-all px-4 py-2">

                        <i class="bi bi-shop-window mr-1"></i>
                        Toko

                    </a>

                </nav>

                <!-- RIGHT -->

                <div class="flex items-center gap-3">

                    <a href="#contact"
                        class="hidden sm:flex items-center gap-2 bg-neutral-900 dark:bg-white dark:text-black text-white px-5 py-2 rounded-full text-sm font-bold hover:scale-105 transition">

                        <i class="bi bi-rocket-takeoff-fill"></i>
                        Mulai

                    </a>

                    <button
                        @click="mobileMenu=!mobileMenu"
                        class="sm:hidden h-10 w-10 rounded-full bg-neutral-100 dark:bg-neutral-800">

                        <i class="bi bi-list text-xl"></i>

                    </button>

                </div>

            </div>

        </div>

        <!-- MOBILE MENU -->

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

    <!-- MAIN -->

    <main class="space-y-16">

        <!-- HERO -->

        <section id="about"
            class="max-w-7xl mx-auto px-4 sm:px-6 pt-8">

            <div class="grid lg:grid-cols-12 gap-6">

                <!-- LEFT -->

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

                <!-- RIGHT -->

                <div
                    class="lg:col-span-5 bg-white dark:bg-[#101010] border border-neutral-200 dark:border-neutral-800 rounded-[40px] p-6 flex items-center justify-center">

                    <img
                        src="{{ asset('assets/img/about-hero.jpg') }}"
                        alt="Hero"
                        class="w-full h-full max-h-[380px] object-contain">

                </div>

            </div>

        </section>

        <!-- STATS -->

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
        <!-- SERVICES -->

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

                <!-- CARD 1 -->

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

                <!-- CARD 2 -->

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

                <!-- CARD 3 -->

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

                <!-- CARD 4 -->

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

                <!-- CARD 5 -->

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

                <!-- CARD 6 -->

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

        <!-- WHY US -->

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

        <!-- CLIENTS -->

        <section
            class="py-12 overflow-hidden bg-white dark:bg-[#111] border-y border-neutral-200 dark:border-neutral-800">

            <div class="text-center mb-10">

                <h2
                    class="text-3xl font-black">

                    Dipercaya Berbagai Instansi

                </h2>

                <p
                    class="text-neutral-500 mt-2">

                    Beberapa klien yang telah bekerja sama dengan kami

                </p>

            </div>

            <div
                class="animate-marquee gap-6">

                @for ($i = 1; $i <= 22; $i++)

                    <div
                        class="h-24 w-52 bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-3xl flex items-center justify-center shrink-0 p-5 hover:scale-105 transition-all">

                        <img
                            src="{{ asset('assets/img/clients/client-' . $i . '.png') }}"
                            alt="Client {{ $i }}"
                            class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all">

                    </div>

                @endfor

                @for ($i = 1; $i <= 22; $i++)

                    <div
                        class="h-24 w-52 bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-3xl flex items-center justify-center shrink-0 p-5 hover:scale-105 transition-all">

                        <img
                            src="{{ asset('assets/img/clients/client-' . $i . '.png') }}"
                            alt="Client {{ $i }}"
                            class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all">

                    </div>

                @endfor

            </div>

        </section>

        <!-- CTA -->

        <section
            class="max-w-7xl mx-auto px-4 sm:px-6">

            <div
                class="bg-gradient-to-r from-[#198754] to-emerald-600 rounded-[40px] p-8 md:p-14 text-center text-white">

                <div
                    class="max-w-3xl mx-auto">

                    <h2
                        class="text-3xl md:text-5xl font-black">

                        Siap Memulai Transformasi Digital?

                    </h2>

                    <p
                        class="mt-5 text-emerald-100 leading-relaxed">

                        Diskusikan kebutuhan pengadaan,
                        pengembangan sistem, atau solusi
                        teknologi perusahaan Anda bersama
                        tim Zetoro Janaloka Teknologi.

                    </p>

                    <div
                        class="flex flex-wrap justify-center gap-4 mt-8">

                        <a
                            href="#contact"
                            class="bg-white text-[#198754] px-8 py-4 rounded-2xl font-bold hover:scale-105 transition-all">

                            <i class="bi bi-chat-dots-fill mr-2"></i>
                            Hubungi Kami

                        </a>

                        <a
                            href="https://katalog.inaproc.id/zetoro-janaloka-teknologi"
                            target="_blank"
                            class="border border-white/30 px-8 py-4 rounded-2xl font-bold hover:bg-white/10 transition-all">

                            <i class="bi bi-shop-window mr-2"></i>
                            Lihat Katalog

                        </a>

                    </div>

                </div>

            </div>

        </section>
        <!-- FAQ -->

        <section id="faq"
            class="max-w-4xl mx-auto px-4 sm:px-6"
            x-data="{ activeFaq: 1 }">

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

                    Beberapa pertanyaan yang sering ditanyakan oleh klien kami.

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

        <!-- CONTACT -->

        <section id="contact"
            class="max-w-7xl mx-auto px-4 sm:px-6">

            <div
                class="grid lg:grid-cols-12 gap-6">

                <!-- LEFT -->

                <div
                    class="lg:col-span-5 bg-white dark:bg-[#111] border border-neutral-200 dark:border-neutral-800 rounded-[40px] p-8">

                    <span
                        class="inline-flex items-center gap-2 bg-emerald-500/10 text-emerald-600 px-4 py-2 rounded-full text-xs font-extrabold uppercase tracking-widest">

                        <i class="bi bi-envelope-paper-fill"></i>
                        Hubungi Kami

                    </span>

                    <h2
                        class="text-3xl font-black mt-6">

                        Mari Diskusikan Kebutuhan Anda

                    </h2>

                    <p
                        class="text-neutral-500 mt-4 leading-relaxed">

                        Tim kami siap membantu kebutuhan
                        pengadaan, pengembangan sistem,
                        maintenance, dan transformasi digital.

                    </p>

                    <div
                        class="mt-8 space-y-4">

                        <a
                            href="https://wa.me/6282245645353"
                            target="_blank"
                            class="flex items-center gap-4 bg-[#198754] text-white p-5 rounded-2xl hover:scale-[1.02] transition-all">

                            <i
                                class="bi bi-whatsapp text-2xl"></i>

                            <div>

                                <div class="font-black">
                                    WhatsApp
                                </div>

                                <div
                                    class="text-sm text-emerald-100">

                                    +62 822-4564-5353

                                </div>

                            </div>

                        </a>

                        <a
                            href="mailto:zetorojanaloka@gmail.com"
                            class="flex items-center gap-4 bg-neutral-100 dark:bg-neutral-900 p-5 rounded-2xl hover:scale-[1.02] transition-all">

                            <i
                                class="bi bi-envelope-fill text-2xl text-emerald-500"></i>

                            <div>

                                <div class="font-black">
                                    Email
                                </div>

                                <div
                                    class="text-sm text-neutral-500">

                                    zetorojanaloka@gmail.com

                                </div>

                            </div>

                        </a>

                        <div
                            class="flex items-center gap-4 bg-neutral-100 dark:bg-neutral-900 p-5 rounded-2xl">

                            <i
                                class="bi bi-geo-alt-fill text-2xl text-emerald-500"></i>

                            <div>

                                <div class="font-black">
                                    Lokasi
                                </div>

                                <div
                                    class="text-sm text-neutral-500">

                                    Maspion Square, Surabaya

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- MAP -->

                <div
                    class="lg:col-span-7 rounded-[40px] overflow-hidden border border-neutral-200 dark:border-neutral-800 min-h-[500px]">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6004527544063!2d112.74374087499384!3d-7.289360592725091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb198e87f1df%3A0x32d61a2f97521bb5!2sMaspion%20Square!5e0!3m2!1sid!2sid!4v1735341062334!5m2!1sid!2sid"
                        class="w-full h-full"
                        loading="lazy">
                    </iframe>

                </div>

            </div>

        </section>

    </main>

    <!-- FOOTER -->

    <footer
        class="mt-20 bg-neutral-950 text-white">

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 py-16">

            <div
                class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">

                <!-- BRAND -->

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

                <!-- COMPANY -->

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

                <!-- SERVICES -->

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

                <!-- CONTACT -->

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

    <!-- ACTIVE SCROLL NAVBAR -->

    <script>

        document.addEventListener('scroll', () => {

            const sections = document.querySelectorAll('section[id]');

            sections.forEach(section => {

                const top = window.scrollY;
                const offset = section.offsetTop - 150;
                const height = section.offsetHeight;
                const id = section.getAttribute('id');

                if (
                    top >= offset &&
                    top < offset + height
                ) {

                    const root =
                        document.querySelector('body').__x;

                    if (root) {
                        root.$data.activeSection = id;
                    }

                }

            });

        });

    </script>

</body>

</html>
