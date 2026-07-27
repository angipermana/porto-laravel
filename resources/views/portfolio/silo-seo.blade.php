<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Studi Kasus: Arsitektur SILO & Perbaikan 500+ Halaman | Angi Permana</title>
    <meta name="description" content="Studi kasus audit Technical SEO, arsitektur SILO internal link, dan perbaikan broken link pada 500+ halaman oleh Angi Permana.">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
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
        /* Backgrounds */
        html.light .bg-slate-950  { background-color: #F1F5F9 !important; }
        html.light .bg-slate-900  { background-color: #FFFFFF !important; }
        html.light .bg-slate-800  { background-color: #F8FAFC !important; }
        html.light .bg-slate-700  { background-color: #E2E8F0 !important; }
        /* Backgrounds with opacity */
        html.light .bg-slate-950\/80 { background-color: rgba(241,245,249,0.92) !important; }
        html.light .bg-slate-950\/60 { background-color: rgba(255,255,255,0.85) !important; }
        html.light .bg-slate-950\/30 { background-color: rgba(241,245,249,0.3) !important; }
        html.light .bg-slate-900\/60 { background-color: rgba(255,255,255,0.9) !important; }
        html.light .bg-slate-900\/80 { background-color: rgba(255,255,255,0.85) !important; }
        html.light .bg-slate-900\/95 { background-color: rgba(255,255,255,0.97) !important; }
        /* Text */
        html.light .text-white      { color: #0F172A !important; }
        html.light .text-slate-200  { color: #1E293B !important; }
        html.light .text-slate-300  { color: #334155 !important; }
        html.light .text-slate-400  { color: #64748B !important; }
        html.light .text-slate-500  { color: #94A3B8 !important; }
        html.light .text-slate-600  { color: #CBD5E1 !important; }
        /* Borders */
        html.light .border-slate-900 { border-color: #E2E8F0 !important; }
        html.light .border-slate-800 { border-color: #E2E8F0 !important; }
        html.light .border-slate-700 { border-color: #CBD5E1 !important; }
        /* Header */
        html.light header {
            background-color: rgba(241,245,249,0.92) !important;
            border-color: #E2E8F0 !important;
        }
        /* Cards shadow */
        html.light .rounded-2xl,
        html.light .rounded-xl {
            box-shadow: 0 1px 8px rgba(0,0,0,0.06), 0 1px 2px rgba(0,0,0,0.04);
        }
        /* Chatbot input */
        html.light input[type="text"] {
            background-color: #F8FAFC !important;
            color: #0F172A !important;
            border-color: #E2E8F0 !important;
        }
        html.light input[type="text"]::placeholder { color: #94A3B8 !important; }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 antialiased selection:bg-cyan-500 selection:text-white"
    x-data="{ lang: localStorage.getItem('portfolio-lang') || 'id', theme: localStorage.getItem('portfolio-theme') || 'light' }"
    x-init="$watch('theme', val => {
        document.documentElement.classList.toggle('light', val === 'light');
        localStorage.setItem('portfolio-theme', val);
    }); $watch('lang', val => localStorage.setItem('portfolio-lang', val))">

    <!-- Header Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="/#portfolio" class="inline-flex items-center text-sm font-semibold text-cyan-400 hover:text-cyan-300 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                <span x-show="lang === 'en'">← Back to Portfolio</span>
                <span x-show="lang === 'id'" x-cloak>← Kembali ke Portofolio</span>
            </a>

            <div class="flex items-center gap-3">
                <!-- Theme Toggle -->
                <button @click="theme = theme === 'dark' ? 'light' : 'dark'"
                    class="w-10 h-10 rounded-full border border-slate-700 bg-slate-900 flex items-center justify-center hover:border-cyan-500 transition-all duration-300"
                    :title="theme === 'dark' ? 'Switch to Light Mode' : 'Switch to Dark Mode'">
                    <svg x-show="theme === 'dark'" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                    </svg>
                    <svg x-show="theme === 'light'" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" />
                    </svg>
                </button>
                <!-- Language Toggle -->
                <button @click="lang = lang === 'en' ? 'id' : 'en'" class="text-xs font-bold px-3 py-2 rounded-lg border border-slate-700 bg-slate-900 hover:bg-slate-800 transition text-slate-300">
                    <span x-text="lang === 'en' ? '🇮🇩 ID' : '🇬🇧 EN'"></span>
                </button>
                <a href="https://wa.me/6285717616596?text=Halo%20Angi,%20saya%20butuh%20audit%20Technical%20SEO" target="_blank" class="hidden sm:inline-flex items-center px-4 py-2 bg-cyan-600 hover:bg-cyan-500 text-white font-bold text-xs rounded-xl shadow-lg shadow-cyan-600/30 transition">
                    Audit Technical SEO
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
                    <span class="px-3.5 py-1 bg-cyan-500/10 text-cyan-400 text-xs font-bold rounded-full border border-cyan-500/20">Technical SEO</span>
                    <span class="px-3.5 py-1 bg-blue-500/10 text-blue-400 text-xs font-bold rounded-full border border-blue-500/20">500+ Pages Audit</span>
                    <span class="px-3.5 py-1 bg-indigo-500/10 text-indigo-400 text-xs font-bold rounded-full border border-indigo-500/20">SILO Architecture</span>
                </div>

                <h1 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight mb-6">
                    <span x-show="lang === 'en'">SILO Architecture & Broken Link Remediation (500+ Pages)</span>
                    <span x-show="lang === 'id'" x-cloak>Arsitektur SILO & Perbaikan Tautan Rusak pada Web 500+ Halaman</span>
                </h1>

                <p class="text-lg text-slate-300 leading-relaxed mb-8">
                    <span x-show="lang === 'en'">Re-architecting internal link structures, eliminating crawl budget waste, and fixing broken links across a massive 500+ page web portal.</span>
                    <span x-show="lang === 'id'" x-cloak>Restrukturisasi total link internal berkonsep SILO, pembersihan broken link, dan optimasi crawl budget pada portal web skala besar berisi lebih dari 500 halaman.</span>
                </p>
            </div>

            <!-- Impact Metric Highlight Cards -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mb-12" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl">
                    <span class="text-slate-400 text-xs font-bold block mb-1">Broken Links</span>
                    <span class="text-2xl sm:text-3xl font-extrabold text-cyan-400">0 (Tuntas)</span>
                </div>
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl">
                    <span class="text-slate-400 text-xs font-bold block mb-1">Struktur Internal</span>
                    <span class="text-2xl sm:text-3xl font-extrabold text-emerald-400">100% SILO</span>
                </div>
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl col-span-2 sm:col-span-1">
                    <span class="text-slate-400 text-xs font-bold block mb-1">Crawl Budget</span>
                    <span class="text-2xl sm:text-3xl font-extrabold text-blue-400">Optimal</span>
                </div>
            </div>

            <!-- Detail Breakdown Sections -->
            <div class="space-y-10 text-slate-300 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                
                <!-- Section 1: Challenge -->
                <section class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-cyan-500/20 text-cyan-400 inline-flex items-center justify-center mr-3 text-sm">01</span>
                        Kendala Technical SEO Portal Besar
                    </h2>
                    <p class="mb-4">
                        Seiring bertambahnya jumlah halaman hingga lebih dari 500 artikel/produk, masalah struktural berikut kerap terjadi:
                    </p>
                    <ul class="list-disc list-inside space-y-2 text-slate-300">
                        <li><strong>Terdapat Ratusan Broken Links (404 Error):</strong> Tautan yang mati merusak pengalaman pengguna dan membuang jatah perayapan bot Google (Crawl Budget).</li>
                        <li><strong>Internal Link Acak & Tidak Terarah:</strong> Halaman artikel saling mentautkan tanpa hirarki tema yang logis sehingga otoritas topik menjadi lemah.</li>
                        <li><strong>Orphan Pages:</strong> Banyak halaman penting yang tidak tersambung dari menu navigasi atau halaman lain.</li>
                    </ul>
                </section>

                <!-- Section 2: Strategy -->
                <section class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-cyan-500/20 text-cyan-400 inline-flex items-center justify-center mr-3 text-sm">02</span>
                        Langkah Audit & Penerapan SILO
                    </h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-bold text-white mb-1">1. Automated Crawl Audit & 404 Remediation</h3>
                            <p class="text-sm">Screaming Frog SEO Spider digunakan untuk memetakan seluruh 500+ halaman, mengidentifikasi tautan 404, serta mengatur pengalihan 301 redirect yang relevan.</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-white mb-1">2. Perancangan Struktur SILO Tematik</h3>
                            <p class="text-sm">Mengelompokkan konten dalam kategori siloisasi yang jelas. Artikel dalam topik A hanya saling menautkan di dalam kelompoknya dan bermuara pada Landing Page Utama A.</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-white mb-1">3. Optimasi XML Sitemap & Canonical Tags</h3>
                            <p class="text-sm">Memastikan sitemap XML selalu diperbarui otomatis, mengeliminasi duplikasi konten dengan tag canonical yang akurat.</p>
                        </div>
                    </div>
                </section>

                <!-- Section 3: Results -->
                <section class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-cyan-500/20 text-cyan-400 inline-flex items-center justify-center mr-3 text-sm">03</span>
                        Hasil Kinerja SEO
                    </h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="p-4 bg-slate-950 rounded-xl border border-slate-800">
                            <span class="text-cyan-400 font-bold text-lg block">⚡ Efisiensi Indeksasi Kena 2x</span>
                            <span class="text-xs text-slate-400">Googlebot merayapi dan mengindeks artikel baru jauh lebih cepat dalam hitungan jam.</span>
                        </div>
                        <div class="p-4 bg-slate-950 rounded-xl border border-slate-800">
                            <span class="text-emerald-400 font-bold text-lg block">🔗 0 Broken Link Error</span>
                            <span class="text-xs text-slate-400">Skor kesehatan teknis website di Ahrefs/Semrush meningkat drastis mendekati 100%.</span>
                        </div>
                    </div>
                </section>

            </div>

            <!-- CTA Callout -->
            <div class="mt-16 bg-gradient-to-r from-cyan-900/40 via-blue-900/40 to-slate-900 border border-cyan-500/30 p-8 rounded-3xl text-center" data-aos="zoom-in">
                <h3 class="text-2xl font-bold text-white mb-3">Website Anda Memiliki Banyak Halaman & Lambat Terindeks?</h3>
                <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Lakukan audit Technical SEO & perapihan struktur SILO bersama Angi Permana agar performa pencarian kembali optimal.</p>
                <a href="https://wa.me/6285717616596?text=Halo%20Angi,%20saya%20ingin%20audit%20Technical%20SEO%20dan%20SILO" target="_blank" class="inline-flex items-center px-6 py-3.5 bg-cyan-600 hover:bg-cyan-500 text-white font-bold rounded-xl shadow-lg shadow-cyan-600/40 transition hover:scale-105">
                    Hubungi via WhatsApp (+62 857-1761-6596)
                </a>
            </div>

        </div>
    </main>

    <!-- Chatbot Widget -->
    @include('partials.chatbot')

    <!-- Footer -->
    <footer class="py-8 bg-slate-950 border-t border-slate-800 text-center text-xs text-slate-500">
        <p>&copy; {{ date('Y') }} Angi Permana. All rights reserved.</p>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({ duration: 800, once: true });
        });
    </script>
</body>
</html>
