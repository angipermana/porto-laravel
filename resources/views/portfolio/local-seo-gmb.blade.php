<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Studi Kasus: Optimasi GMB & Local SEO Top 3 Google Maps | Angi Permana</title>
    <meta name="description" content="Studi kasus optimasi Google Business Profile dan Local SEO untuk peringkat Top 3 Google Maps oleh Angi Permana.">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        if ((localStorage.getItem('portfolio-theme') || 'light') === 'light') {
            document.documentElement.classList.add('light');
        }
    </script>
    <style>
        body { font-family: 'Outfit', sans-serif; overflow-x: hidden; }
        [x-cloak] { display: none !important; }

        /* ===================== LIGHT THEME ===================== */
        html.light { color-scheme: light; }
        html.light body {
            background-color: #F1F5F9 !important;
            color: #0F172A !important;
        }
        html.light .bg-slate-950  { background-color: #F1F5F9 !important; }
        html.light .bg-slate-900  { background-color: #FFFFFF !important; }
        html.light .bg-slate-800  { background-color: #F8FAFC !important; }
        html.light .bg-slate-700  { background-color: #E2E8F0 !important; }
        html.light .bg-slate-950\/80 { background-color: rgba(241,245,249,0.92) !important; }
        html.light .bg-slate-950\/60 { background-color: rgba(255,255,255,0.85) !important; }
        html.light .bg-slate-950\/30 { background-color: rgba(241,245,249,0.3) !important; }
        html.light .bg-slate-900\/60 { background-color: rgba(255,255,255,0.9) !important; }
        html.light .bg-slate-900\/80 { background-color: rgba(255,255,255,0.85) !important; }
        html.light .text-white      { color: #0F172A !important; }
        html.light .text-slate-200  { color: #1E293B !important; }
        html.light .text-slate-300  { color: #334155 !important; }
        html.light .text-slate-400  { color: #64748B !important; }
        html.light .text-slate-500  { color: #94A3B8 !important; }
        html.light .border-slate-900 { border-color: #E2E8F0 !important; }
        html.light .border-slate-800 { border-color: #E2E8F0 !important; }
        html.light .border-slate-700 { border-color: #CBD5E1 !important; }
        html.light header {
            background-color: rgba(241,245,249,0.92) !important;
            border-color: #E2E8F0 !important;
        }
        html.light .rounded-2xl, html.light .rounded-xl {
            box-shadow: 0 1px 8px rgba(0,0,0,0.06), 0 1px 2px rgba(0,0,0,0.04);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 antialiased selection:bg-amber-500 selection:text-white"
    x-data="{ lang: localStorage.getItem('portfolio-lang') || 'id', theme: localStorage.getItem('portfolio-theme') || 'light', activeTab: 'after' }"
    x-init="$watch('theme', val => {
        document.documentElement.classList.toggle('light', val === 'light');
        localStorage.setItem('portfolio-theme', val);
    }); $watch('lang', val => localStorage.setItem('portfolio-lang', val))">

    <!-- Header Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="/#portfolio" class="inline-flex items-center text-sm font-semibold text-amber-400 hover:text-amber-300 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                <span x-show="lang === 'en'">← Back to Portfolio</span>
                <span x-show="lang === 'id'" x-cloak>← Kembali ke Portofolio</span>
            </a>

            <div class="flex items-center gap-3">
                <button @click="theme = theme === 'dark' ? 'light' : 'dark'"
                    class="w-10 h-10 rounded-full border border-slate-700 bg-slate-900 flex items-center justify-center hover:border-amber-500 transition-all duration-300">
                    <svg x-show="theme === 'dark'" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                    </svg>
                    <svg x-show="theme === 'light'" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" />
                    </svg>
                </button>
                <button @click="lang = lang === 'en' ? 'id' : 'en'" class="text-xs font-bold px-3 py-2 rounded-lg border border-slate-700 bg-slate-900 hover:bg-slate-800 transition text-slate-300">
                    <span x-text="lang === 'en' ? '🇮🇩 ID' : '🇬🇧 EN'"></span>
                </button>
                <a href="https://wa.me/6285717616596?text=Halo%20Angi,%20saya%20tertarik%20dengan%20jasa%20Local%20SEO" target="_blank" class="hidden sm:inline-flex items-center px-4 py-2 bg-amber-600 hover:bg-amber-500 text-white font-bold text-xs rounded-xl shadow-lg shadow-amber-600/30 transition">
                    Konsultasi Local SEO
                </a>
            </div>
        </div>
    </header>

    <!-- Main Detail Content -->
    <main class="pt-32 pb-24">
        <div class="max-w-4xl mx-auto px-6">
            
            <!-- Hero Header -->
            <div data-aos="fade-up">
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3.5 py-1 bg-amber-500/10 text-amber-400 text-xs font-bold rounded-full border border-amber-500/20">Local SEO</span>
                    <span class="px-3.5 py-1 bg-yellow-500/10 text-yellow-400 text-xs font-bold rounded-full border border-yellow-500/20">Google Business Profile</span>
                    <span class="px-3.5 py-1 bg-orange-500/10 text-orange-400 text-xs font-bold rounded-full border border-orange-500/20">Map Pack Top 3</span>
                </div>

                <h1 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight mb-6">
                    <span x-show="lang === 'en'">Google My Business & Local SEO Optimization</span>
                    <span x-show="lang === 'id'" x-cloak>Optimasi GMB & Local SEO: Peringkat Top 3 Google Maps</span>
                </h1>

                <p class="text-lg text-slate-300 leading-relaxed mb-8">
                    <span x-show="lang === 'en'">Driving high-intent local customer calls, direction requests, and store visits through targeted Google Business Profile optimization.</span>
                    <span x-show="lang === 'id'" x-cloak>Meningkatkan panggilan telepon, penunjuk arah lokasi, dan kedatangan calon konsumen lokal berkualitas melalui optimasi mendalam profil Google Bisnisku.</span>
                </p>
            </div>

            <!-- Impact Metric Highlight Cards -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mb-10" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl relative overflow-hidden group hover:border-amber-500/50 transition-all">
                    <div class="absolute -right-4 -top-4 w-16 h-16 bg-amber-500/10 rounded-full blur-xl group-hover:bg-amber-500/20 transition-all"></div>
                    <span class="text-slate-400 text-xs font-bold block mb-1">Panggilan & Trafik Lokal</span>
                    <span class="text-2xl sm:text-4xl font-extrabold text-amber-400">+180%</span>
                    <span class="text-[11px] text-amber-300 mt-1 block">Trafik konsumen radius lokal</span>
                </div>
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl relative overflow-hidden group hover:border-emerald-500/50 transition-all">
                    <div class="absolute -right-4 -top-4 w-16 h-16 bg-emerald-500/10 rounded-full blur-xl group-hover:bg-emerald-500/20 transition-all"></div>
                    <span class="text-slate-400 text-xs font-bold block mb-1">Peringkat Google Maps</span>
                    <span class="text-2xl sm:text-4xl font-extrabold text-emerald-400">Top #3</span>
                    <span class="text-[11px] text-emerald-400 mt-1 block">Dominasi 3-Pack Maps</span>
                </div>
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl col-span-2 sm:col-span-1 relative overflow-hidden group hover:border-yellow-500/50 transition-all">
                    <div class="absolute -right-4 -top-4 w-16 h-16 bg-yellow-500/10 rounded-full blur-xl group-hover:bg-yellow-500/20 transition-all"></div>
                    <span class="text-slate-400 text-xs font-bold block mb-1">Kualitas Leads</span>
                    <span class="text-2xl sm:text-4xl font-extrabold text-yellow-400">High-Intent</span>
                    <span class="text-[11px] text-yellow-300 mt-1 block">Siap transaksi & berkunjung</span>
                </div>
            </div>



            <!-- Before vs After Interactive Comparison -->
            <div class="bg-slate-900 border border-slate-800 p-6 sm:p-8 rounded-3xl mb-12" data-aos="fade-up" data-aos-delay="180">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
                    <div>
                        <h3 class="text-xl font-bold text-white">Perbandingan Performa: Sebelum vs Sesudah Optimasi GMB</h3>
                        <p class="text-xs text-slate-400">Klik tab untuk melihat perubahan peringkat Maps dan konversi lokal</p>
                    </div>
                    <div class="flex bg-slate-950 p-1 rounded-xl border border-slate-800 text-xs font-bold">
                        <button @click="activeTab = 'before'" :class="activeTab === 'before' ? 'bg-red-500/20 text-red-400 border border-red-500/30' : 'text-slate-400 hover:text-white'" class="px-4 py-2 rounded-lg transition-all">
                            🔴 Sebelum Optimasi
                        </button>
                        <button @click="activeTab = 'after'" :class="activeTab === 'after' ? 'bg-emerald-500/20 text-emerald-400 border border-emerald-500/30' : 'text-slate-400 hover:text-white'" class="px-4 py-2 rounded-lg transition-all">
                            🟢 Setelah Optimasi
                        </button>
                    </div>
                </div>

                <div x-show="activeTab === 'before'" x-cloak class="grid sm:grid-cols-3 gap-4">
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-red-500/20">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Peringkat Google Maps</span>
                        <span class="text-2xl font-extrabold text-red-400">Posisi #18.4</span>
                        <span class="text-[11px] text-slate-500 mt-1 block">Tidak masuk 3-Pack Maps</span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-red-500/20">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Direction Requests</span>
                        <span class="text-2xl font-extrabold text-red-400">45 <span class="text-xs">rute/bln</span></span>
                        <span class="text-[11px] text-slate-500 mt-1 block">Kedatangan toko sangat rendah</span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-red-500/20">
                        <span class="text-xs text-slate-400 font-bold block mb-1">GMB Profile Views</span>
                        <span class="text-2xl font-extrabold text-red-400">1,800 <span class="text-xs">views/bln</span></span>
                        <span class="text-[11px] text-slate-500 mt-1 block">Foto & ulasan tidak optimal</span>
                    </div>
                </div>

                <div x-show="activeTab === 'after'" class="grid sm:grid-cols-3 gap-4">
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-emerald-500/30">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Peringkat Google Maps</span>
                        <span class="text-2xl font-extrabold text-emerald-400">Posisi #2.1 🚀</span>
                        <span class="text-[11px] text-emerald-400 mt-1 block">Top 3 Map Pack Konsisten</span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-emerald-500/30">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Direction Requests</span>
                        <span class="text-2xl font-extrabold text-emerald-400">195 <span class="text-xs">+333%</span></span>
                        <span class="text-[11px] text-emerald-400 mt-1 block">Kedatangan fisik melonjak</span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-emerald-500/30">
                        <span class="text-xs text-slate-400 font-bold block mb-1">GMB Profile Views</span>
                        <span class="text-2xl font-extrabold text-emerald-400">8,400 <span class="text-xs">views/bln</span></span>
                        <span class="text-[11px] text-emerald-400 mt-1 block">Ulasan Bintang 5 bertambah</span>
                    </div>
                </div>
            </div>

            <!-- Tech Stack & Tools Badges -->
            <div class="mb-12" data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">Tech Stack & Tools Local SEO yang Digunakan:</h4>
                <div class="flex flex-wrap gap-2.5">
                    <span class="px-3 py-1.5 bg-slate-900 border border-slate-800 rounded-xl text-xs font-semibold text-slate-300 flex items-center gap-2">
                        📍 Google Business Profile (GMB)
                    </span>
                    <span class="px-3 py-1.5 bg-slate-900 border border-slate-800 rounded-xl text-xs font-semibold text-slate-300 flex items-center gap-2">
                        🗺️ Local Citation Building
                    </span>
                    <span class="px-3 py-1.5 bg-slate-900 border border-slate-800 rounded-xl text-xs font-semibold text-slate-300 flex items-center gap-2">
                        🏷️ Geo-Targeted Local Schema Markup
                    </span>
                    <span class="px-3 py-1.5 bg-slate-900 border border-slate-800 rounded-xl text-xs font-semibold text-slate-300 flex items-center gap-2">
                        ⭐ Review & Rating Optimization
                    </span>
                    <span class="px-3 py-1.5 bg-slate-900 border border-slate-800 rounded-xl text-xs font-semibold text-slate-300 flex items-center gap-2">
                        🧡 Ubersuggest MCP Location API
                    </span>
                </div>
            </div>

            <!-- Section Content -->
            <div class="space-y-10 text-slate-300 leading-relaxed" data-aos="fade-up" data-aos-delay="220">
                <section class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-amber-500/20 text-amber-400 inline-flex items-center justify-center mr-3 text-sm font-extrabold">01</span>
                        Tantangan Pencarian Lokal
                    </h2>
                    <p class="mb-4">
                        Bisnis lokal menghadapi kendala utama dimana pelanggan potensial di sekitar lokasi tidak dapat menemukan lokasi fisik maupun nomor kontak bisnis saat mencari di Google Maps:
                    </p>
                    <ul class="list-disc list-inside space-y-2 text-slate-300">
                        <li><strong>Profil GMB Tidak Ter-Verifikasi Optimal:</strong> Informasi lokasi, jam buka, dan kategori bisnis tidak konsisten.</li>
                        <li><strong>Kalah Bersaing di 3-Pack Maps:</strong> Lokasi kalah bersaing dengan kompetitor terdekat yang memiliki ulasan dan rute lebih aktif.</li>
                    </ul>
                </section>

                <section class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-amber-500/20 text-amber-400 inline-flex items-center justify-center mr-3 text-sm font-extrabold">02</span>
                        Solusi & Eksekusi Local SEO
                    </h2>
                    <div class="space-y-4">
                        <div class="p-4 bg-slate-950/40 rounded-xl border border-slate-800/80">
                            <h3 class="text-lg font-bold text-white mb-1">1. Optimasi Kategori & NAP Consistency</h3>
                            <p class="text-sm text-slate-300">Menyeragamkan Name, Address, Phone (NAP) di seluruh direktori lokal dan memilih primary & secondary category yang paling akurat.</p>
                        </div>
                        <div class="p-4 bg-slate-950/40 rounded-xl border border-slate-800/80">
                            <h3 class="text-lg font-bold text-white mb-1">2. Strategi Ulasan & Photo Upload</h3>
                            <p class="text-sm text-slate-300">Mendorong ulasan bintang 5 organik ber-kata kunci lokal dari pelanggan puas serta mengunggah foto geotagged secara berkala.</p>
                        </div>
                    </div>
                </section>

                <section class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-amber-500/20 text-amber-400 inline-flex items-center justify-center mr-3 text-sm font-extrabold">03</span>
                        Hasil & Dampak Bisnis
                    </h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="p-5 bg-slate-950 rounded-xl border border-slate-800">
                            <span class="text-amber-400 font-bold text-lg block mb-1">📈 +180% Panggilan Telepon</span>
                            <span class="text-xs text-slate-400">Peningkatan signifikan langsung dari tombol 'Call' di Google Maps.</span>
                        </div>
                        <div class="p-5 bg-slate-950 rounded-xl border border-slate-800">
                            <span class="text-emerald-400 font-bold text-lg block mb-1">📍 Top 3 Map Pack</span>
                            <span class="text-xs text-slate-400">Mendominasi 3 posisi teratas pencarian lokal di area target.</span>
                        </div>
                    </div>
                </section>
            </div>

            <!-- CTA Callout -->
            <div class="mt-16 bg-gradient-to-r from-amber-900/40 via-yellow-900/40 to-slate-900 border border-amber-500/30 p-8 rounded-3xl text-center" data-aos="zoom-in">
                <h3 class="text-2xl font-bold text-white mb-3">Ingin Bisnis Lokal Anda Mendominasi Google Maps?</h3>
                <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Konsultasikan optimasi Google Business Profile Anda bersama Angi Permana untuk mendatangkan lebih banyak pembeli lokal.</p>
                <a href="https://wa.me/6285717616596?text=Halo%20Angi,%20saya%20tertarik%20dengan%20jasa%20Local%20SEO" target="_blank" class="inline-flex items-center px-6 py-3.5 bg-amber-600 hover:bg-amber-500 text-white font-bold rounded-xl shadow-lg shadow-amber-600/40 transition hover:scale-105">
                    Hubungi via WhatsApp (+62 857-1761-6596)
                </a>
            </div>

        </div>
    </main>

    @include('partials.chatbot')

    <footer class="py-8 bg-slate-950 border-t border-slate-800 text-center text-xs text-slate-500">
        <p>&copy; {{ date('Y') }} Angi Permana. All rights reserved.</p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({ duration: 800, once: true });
        });
    </script>
</body>
</html>
