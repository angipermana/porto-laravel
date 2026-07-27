<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Studi Kasus: Kampanye Iklan Travel High-Ticket | Angi Permana</title>
    <meta name="description" content="Studi kasus manajemen kampanye iklan Google & Meta Ads travel high-ticket menghasilkan Rp 2.7 Miliar revenue oleh Angi Permana.">
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
<body class="bg-slate-950 text-slate-100 antialiased selection:bg-emerald-500 selection:text-white"
    x-data="{ lang: localStorage.getItem('portfolio-lang') || 'id', theme: localStorage.getItem('portfolio-theme') || 'light' }"
    x-init="$watch('theme', val => {
        document.documentElement.classList.toggle('light', val === 'light');
        localStorage.setItem('portfolio-theme', val);
    }); $watch('lang', val => localStorage.setItem('portfolio-lang', val))">

    <!-- Header Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="/#portfolio" class="inline-flex items-center text-sm font-semibold text-emerald-400 hover:text-emerald-300 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                <span x-show="lang === 'en'">← Back to Portfolio</span>
                <span x-show="lang === 'id'" x-cloak>← Kembali ke Portofolio</span>
            </a>

            <div class="flex items-center gap-3">
                <!-- Theme Toggle -->
                <button @click="theme = theme === 'dark' ? 'light' : 'dark'"
                    class="w-10 h-10 rounded-full border border-slate-700 bg-slate-900 flex items-center justify-center hover:border-emerald-500 transition-all duration-300"
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
                <a href="https://wa.me/6285717616596?text=Halo%20Angi,%20saya%20tertarik%20dengan%20jasa%20iklan%20Paid%20Ads" target="_blank" class="hidden sm:inline-flex items-center px-4 py-2 bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs rounded-xl shadow-lg shadow-emerald-600/30 transition">
                    Konsultasi Digital Ads
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
                    <span class="px-3.5 py-1 bg-emerald-500/10 text-emerald-400 text-xs font-bold rounded-full border border-emerald-500/20">Paid Ads</span>
                    <span class="px-3.5 py-1 bg-teal-500/10 text-teal-400 text-xs font-bold rounded-full border border-teal-500/20">High-Ticket Travel</span>
                    <span class="px-3.5 py-1 bg-cyan-500/10 text-cyan-400 text-xs font-bold rounded-full border border-cyan-500/20">ROAS Scaling</span>
                </div>

                <h1 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight mb-6">
                    <span x-show="lang === 'en'">High-Ticket Travel Ad Scaling Campaign</span>
                    <span x-show="lang === 'id'" x-cloak>Kampanye Iklan Travel High-Ticket: Closing Rp 2.7 Miliar</span>
                </h1>

                <p class="text-lg text-slate-300 leading-relaxed mb-8">
                    <span x-show="lang === 'en'">Strategic Google Ads and Meta Ads management for premium tour packages averaging Rp 30M per seat with Rp 26M budget scaling.</span>
                    <span x-show="lang === 'id'" x-cloak>Pengelolaan kampanye iklan berbayar (Google Search Ads & Meta Ads) untuk produk tour & travel kelas atas dengan ticket size rata-rata Rp 30 Juta per pax.</span>
                </p>
            </div>

            <!-- Impact Metric Highlight Cards -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mb-12" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl">
                    <span class="text-slate-400 text-xs font-bold block mb-1">Total Closing</span>
                    <span class="text-2xl sm:text-3xl font-extrabold text-white">90 Seats</span>
                </div>
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl">
                    <span class="text-slate-400 text-xs font-bold block mb-1">Total Revenue</span>
                    <span class="text-2xl sm:text-3xl font-extrabold text-emerald-400">Rp 2.7 Miliar</span>
                </div>
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl col-span-2 sm:col-span-1">
                    <span class="text-slate-400 text-xs font-bold block mb-1">Budget Iklan</span>
                    <span class="text-2xl sm:text-3xl font-extrabold text-teal-400">Rp 26 Juta</span>
                </div>
            </div>

            <!-- Detail Breakdown Sections -->
            <div class="space-y-10 text-slate-300 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                
                <!-- Section 1: Challenge -->
                <section class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-emerald-500/20 text-emerald-400 inline-flex items-center justify-center mr-3 text-sm">01</span>
                        Tantangan Iklan High-Ticket
                    </h2>
                    <p class="mb-4">
                        Penjualan produk premium berharga tinggi (High-Ticket) memerlukan pendekatan iklan yang jauh lebih matang dibanding produk konsumsi umum:
                    </p>
                    <ul class="list-disc list-inside space-y-2 text-slate-300">
                        <li><strong>Biaya Per Lead Lebih Tinggi:</strong> Audiens target berkemampuan finansial tinggi memiliki volume lebih sempit dan persaingan bid iklan tajam.</li>
                        <li><strong>Trust & Ragu Membayar:</strong> Calon pembeli memerlukan tingkat kepercayaan yang sangat tinggi sebelum memutuskan transfer bernilai belasan hingga puluhan juta rupiah.</li>
                    </ul>
                </section>

                <!-- Section 2: Strategy -->
                <section class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-emerald-500/20 text-emerald-400 inline-flex items-center justify-center mr-3 text-sm">02</span>
                        Strategi Penayangan & Conversions Funnel
                    </h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-bold text-white mb-1">1. High-Intent Google Search Ads</h3>
                            <p class="text-sm">Menargetkan kata kunci dengan intensitas beli tinggi (misal: paket tur umroh privat, tur eropa premium, trip turki eksklusif).</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-white mb-1">2. Custom Landing Page Conversion Optimization</h3>
                            <p class="text-sm">Membuat landing page cepat, elegan, menampilkan bukti keandalan legalitas, testimoni foto asli, serta kemudahan komunikasi WhatsApp.</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-white mb-1">3. Meta Retargeting Strategy</h3>
                            <p class="text-sm">Menayangkan iklan video pengingat di Instagram & Facebook khusus kepada calon audiens yang sudah pernah membuka landing page tetapi belum mengisi form.</p>
                        </div>
                    </div>
                </section>

                <!-- Section 3: Results -->
                <section class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-emerald-500/20 text-emerald-400 inline-flex items-center justify-center mr-3 text-sm">03</span>
                        Hasil & Return on Ad Spend (ROAS)
                    </h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="p-4 bg-slate-950 rounded-xl border border-slate-800">
                            <span class="text-emerald-400 font-bold text-lg block">💰 90 Seats Sold</span>
                            <span class="text-xs text-slate-400">Terjual 90 kursi tur dengan total penjualan kotor menyentuh Rp 2.7 Miliar.</span>
                        </div>
                        <div class="p-4 bg-slate-950 rounded-xl border border-slate-800">
                            <span class="text-teal-400 font-bold text-lg block">🚀 Ekstra ROAS Tinggi</span>
                            <span class="text-xs text-slate-400">Pengeluaran budget iklan Rp 26jt terbayar berlipat ganda dengan rasio efisiensi tinggi.</span>
                        </div>
                    </div>
                </section>

            </div>

            <!-- CTA Callout -->
            <div class="mt-16 bg-gradient-to-r from-emerald-900/40 via-teal-900/40 to-slate-900 border border-emerald-500/30 p-8 rounded-3xl text-center" data-aos="zoom-in">
                <h3 class="text-2xl font-bold text-white mb-3">Punya Produk High-Ticket & Ingin Meningkatkan Penjualan?</h3>
                <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Diskusikan alokasi budget iklan digital Anda agar tepat sasaran dan menghasilkan penjualan nyata bersama Angi Permana.</p>
                <a href="https://wa.me/6285717616596?text=Halo%20Angi,%20saya%20ingin%20diskusi%20iklan%20Google/Meta%20Ads%20untuk%20produk%20saya" target="_blank" class="inline-flex items-center px-6 py-3.5 bg-emerald-600 hover:bg-emerald-500 text-white font-bold rounded-xl shadow-lg shadow-emerald-600/40 transition hover:scale-105">
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
