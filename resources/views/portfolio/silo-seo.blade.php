<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Studi Kasus: Arsitektur Silo SEO & Optimasi Internal Link | Angi Permana</title>
    <meta name="description" content="Studi kasus perancangan struktur SILO SEO dan optimasi internal link oleh Angi Permana.">
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

        html.light { color-scheme: light; }
        html.light body { background-color: #F1F5F9 !important; color: #0F172A !important; }
        html.light .bg-slate-950  { background-color: #F1F5F9 !important; }
        html.light .bg-slate-900  { background-color: #FFFFFF !important; }
        html.light .bg-slate-800  { background-color: #F8FAFC !important; }
        html.light .bg-slate-700  { background-color: #E2E8F0 !important; }
        html.light .bg-slate-950\/80 { background-color: rgba(241,245,249,0.92) !important; }
        html.light .bg-slate-950\/60 { background-color: rgba(255,255,255,0.85) !important; }
        html.light .bg-slate-900\/60 { background-color: rgba(255,255,255,0.9) !important; }
        html.light .text-white      { color: #0F172A !important; }
        html.light .text-slate-300  { color: #334155 !important; }
        html.light .text-slate-400  { color: #64748B !important; }
        html.light .border-slate-800 { border-color: #E2E8F0 !important; }
        html.light header { background-color: rgba(241,245,249,0.92) !important; border-color: #E2E8F0 !important; }
        html.light .rounded-2xl, html.light .rounded-xl { box-shadow: 0 1px 8px rgba(0,0,0,0.06); }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 antialiased selection:bg-teal-500 selection:text-white"
    x-data="{ lang: localStorage.getItem('portfolio-lang') || 'id', theme: localStorage.getItem('portfolio-theme') || 'light', activeTab: 'after' }"
    x-init="$watch('theme', val => {
        document.documentElement.classList.toggle('light', val === 'light');
        localStorage.setItem('portfolio-theme', val);
    }); $watch('lang', val => localStorage.setItem('portfolio-lang', val))">

    <!-- Header Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="/#portfolio" class="inline-flex items-center text-sm font-semibold text-teal-400 hover:text-teal-300 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                <span x-show="lang === 'en'">← Back to Portfolio</span>
                <span x-show="lang === 'id'" x-cloak>← Kembali ke Portofolio</span>
            </a>

            <div class="flex items-center gap-3">
                <button @click="theme = theme === 'dark' ? 'light' : 'dark'"
                    class="w-10 h-10 rounded-full border border-slate-700 bg-slate-900 flex items-center justify-center hover:border-teal-500 transition">
                    <svg x-show="theme === 'dark'" class="w-4 h-4 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                    </svg>
                    <svg x-show="theme === 'light'" x-cloak class="w-4 h-4 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" />
                    </svg>
                </button>
                <button @click="lang = lang === 'en' ? 'id' : 'en'" class="text-xs font-bold px-3 py-2 rounded-lg border border-slate-700 bg-slate-900 text-slate-300">
                    <span x-text="lang === 'en' ? '🇮🇩 ID' : '🇬🇧 EN'"></span>
                </button>
                <a href="https://wa.me/6285717616596?text=Halo%20Angi,%20saya%20tertarik%20dengan%20jasa%20Silo%20SEO" target="_blank" class="hidden sm:inline-flex items-center px-4 py-2 bg-teal-600 hover:bg-teal-500 text-white font-bold text-xs rounded-xl shadow-lg shadow-teal-600/30 transition">
                    Konsultasi Silo SEO
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
                    <span class="px-3.5 py-1 bg-teal-500/10 text-teal-400 text-xs font-bold rounded-full border border-teal-500/20">Silo Architecture</span>
                    <span class="px-3.5 py-1 bg-cyan-500/10 text-cyan-400 text-xs font-bold rounded-full border border-cyan-500/20">Internal Link Optimization</span>
                    <span class="px-3.5 py-1 bg-emerald-500/10 text-emerald-400 text-xs font-bold rounded-full border border-emerald-500/20">Topic Clusters</span>
                </div>

                <h1 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight mb-6">
                    <span x-show="lang === 'en'">SEO Silo Architecture & Internal Link Optimization</span>
                    <span x-show="lang === 'id'" x-cloak>Arsitektur Silo SEO & Optimasi Internal Link Halaman</span>
                </h1>

                <p class="text-lg text-slate-300 leading-relaxed mb-8">
                    <span x-show="lang === 'en'">Structuring websites into logical topic clusters to maximize page authority pass-through, eliminate keyword cannibalization, and dominate high-value keywords.</span>
                    <span x-show="lang === 'id'" x-cloak>Membangun hirarki website menjadi klaster topik yang terstruktur rapi untuk menyalurkan nilai otoritas (PageRank) ke halaman penjualan utama tanpa kanibalisasi kata kunci.</span>
                </p>
            </div>

            <!-- Impact Highlight Cards -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mb-10" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl relative overflow-hidden group hover:border-teal-500/50 transition-all">
                    <div class="absolute -right-4 -top-4 w-16 h-16 bg-teal-500/10 rounded-full blur-xl"></div>
                    <span class="text-slate-400 text-xs font-bold block mb-1">Page Authority Flow</span>
                    <span class="text-2xl sm:text-4xl font-extrabold text-teal-400">+220%</span>
                    <span class="text-[11px] text-teal-300 mt-1 block">Passthrough ke Money Page</span>
                </div>
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl relative overflow-hidden group hover:border-emerald-500/50 transition-all">
                    <div class="absolute -right-4 -top-4 w-16 h-16 bg-emerald-500/10 rounded-full blur-xl"></div>
                    <span class="text-slate-400 text-xs font-bold block mb-1">Crawl Efficiency</span>
                    <span class="text-2xl sm:text-4xl font-extrabold text-emerald-400">100%</span>
                    <span class="text-[11px] text-emerald-300 mt-1 block">Crawl depth max layer 2</span>
                </div>
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl col-span-2 sm:col-span-1 relative overflow-hidden group hover:border-cyan-500/50 transition-all">
                    <div class="absolute -right-4 -top-4 w-16 h-16 bg-cyan-500/10 rounded-full blur-xl"></div>
                    <span class="text-slate-400 text-xs font-bold block mb-1">Kanibalisasi Keyword</span>
                    <span class="text-2xl sm:text-4xl font-extrabold text-cyan-400">0%</span>
                    <span class="text-[11px] text-cyan-300 mt-1 block">Intent klaster unik per halaman</span>
                </div>
            </div>



            <!-- Before vs After Interactive Comparison -->
            <div class="bg-slate-900 border border-slate-800 p-6 sm:p-8 rounded-3xl mb-12" data-aos="fade-up" data-aos-delay="180">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
                    <div>
                        <h3 class="text-xl font-bold text-white">Perbandingan Struktur Link: Sebelum vs Sesudah SILO</h3>
                        <p class="text-xs text-slate-400">Klik tab untuk melihat perubahan struktur internal link</p>
                    </div>
                    <div class="flex bg-slate-950 p-1 rounded-xl border border-slate-800 text-xs font-bold">
                        <button @click="activeTab = 'before'" :class="activeTab === 'before' ? 'bg-red-500/20 text-red-400 border border-red-500/30' : 'text-slate-400 hover:text-white'" class="px-4 py-2 rounded-lg transition-all">
                            🔴 Sebelum SILO
                        </button>
                        <button @click="activeTab = 'after'" :class="activeTab === 'after' ? 'bg-emerald-500/20 text-emerald-400 border border-emerald-500/30' : 'text-slate-400 hover:text-white'" class="px-4 py-2 rounded-lg transition-all">
                            🟢 Setelah SILO
                        </button>
                    </div>
                </div>

                <div x-show="activeTab === 'before'" x-cloak class="grid sm:grid-cols-3 gap-4">
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-red-500/20">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Crawl Depth Max</span>
                        <span class="text-2xl font-extrabold text-red-400">Layer 5+</span>
                        <span class="text-[11px] text-slate-500 mt-1 block">Googlebot lambat meng-indeks</span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-red-500/20">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Kanibalisasi Artikel</span>
                        <span class="text-2xl font-extrabold text-red-400">12 Artikel</span>
                        <span class="text-[11px] text-slate-500 mt-1 block">Saling berebut kata kunci sama</span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-red-500/20">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Peringkat Money Page</span>
                        <span class="text-2xl font-extrabold text-red-400">Posisi #35</span>
                        <span class="text-[11px] text-slate-500 mt-1 block">Kekuatan link tersebar acak</span>
                    </div>
                </div>

                <div x-show="activeTab === 'after'" class="grid sm:grid-cols-3 gap-4">
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-emerald-500/30">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Crawl Depth Max</span>
                        <span class="text-2xl font-extrabold text-emerald-400">Layer 2 🚀</span>
                        <span class="text-[11px] text-emerald-400 mt-1 block">Indeks instan dalam detik</span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-emerald-500/30">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Kanibalisasi Artikel</span>
                        <span class="text-2xl font-extrabold text-emerald-400">0 Artikel</span>
                        <span class="text-[11px] text-emerald-400 mt-1 block">Topic cluster terpisah rapi</span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-emerald-500/30">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Peringkat Money Page</span>
                        <span class="text-2xl font-extrabold text-emerald-400">Posisi #2 🔥</span>
                        <span class="text-[11px] text-emerald-400 mt-1 block">PageRank terfokus penuh</span>
                    </div>
                </div>
            </div>

            <!-- Tech Stack Badges -->
            <div class="mb-12" data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">Tech Stack & Tools Arsitektur SEO:</h4>
                <div class="flex flex-wrap gap-2.5">
                    <span class="px-3 py-1.5 bg-slate-900 border border-slate-800 rounded-xl text-xs font-semibold text-slate-300 flex items-center gap-2">
                        🏛️ Physical & Virtual SILO Structure
                    </span>
                    <span class="px-3 py-1.5 bg-slate-900 border border-slate-800 rounded-xl text-xs font-semibold text-slate-300 flex items-center gap-2">
                        🐸 Screaming Frog Crawl & Link Juice Audit
                    </span>
                    <span class="px-3 py-1.5 bg-slate-900 border border-slate-800 rounded-xl text-xs font-semibold text-slate-300 flex items-center gap-2">
                        🔗 Contextual Anchor Text Automation
                    </span>
                    <span class="px-3 py-1.5 bg-slate-900 border border-slate-800 rounded-xl text-xs font-semibold text-slate-300 flex items-center gap-2">
                        🍞 BreadcrumbList Schema Markup
                    </span>
                </div>
            </div>

            <!-- Sections -->
            <div class="space-y-10 text-slate-300 leading-relaxed" data-aos="fade-up" data-aos-delay="220">
                <section class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-teal-500/20 text-teal-400 inline-flex items-center justify-center mr-3 text-sm font-extrabold">01</span>
                        Tantangan Struktur Website
                    </h2>
                    <p class="mb-4">
                        Tanpa arsitektur tautan yang direncanakan, website dengan ratusan artikel mengalami dispersi bobot nilai otoritas (*link juice*), membuat halaman penjualan sulit masuk peringkat atas.
                    </p>
                </section>

                <section class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-teal-500/20 text-teal-400 inline-flex items-center justify-center mr-3 text-sm font-extrabold">02</span>
                        Penerapan Strategi SILO
                    </h2>
                    <p class="mb-4">
                        Setiap kategori utama dikelompokkan ke dalam klaster tertutup, dimana artikel pendukung hanya memberikan tautan internal ke halaman induk (*pillar page*) dan sesama artikel dalam klaster yang sama.
                    </p>
                </section>
            </div>

            <!-- CTA Callout -->
            <div class="mt-16 bg-gradient-to-r from-teal-900/40 via-cyan-900/40 to-slate-900 border border-teal-500/30 p-8 rounded-3xl text-center" data-aos="zoom-in">
                <h3 class="text-2xl font-bold text-white mb-3">Ingin Memperbaiki Struktur Internal Link Website Anda?</h3>
                <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Konsultasikan struktur SILO dan hirarki konten website Anda bersama Angi Permana.</p>
                <a href="https://wa.me/6285717616596?text=Halo%20Angi,%20saya%20tertarik%20dengan%20jasa%20Silo%20SEO" target="_blank" class="inline-flex items-center px-6 py-3.5 bg-teal-600 hover:bg-teal-500 text-white font-bold rounded-xl shadow-lg shadow-teal-600/40 transition hover:scale-105">
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
