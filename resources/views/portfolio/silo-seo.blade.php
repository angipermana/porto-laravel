<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Studi Kasus: Arsitektur Silo SEO & Optimasi Internal Link | Angi Permana</title>
    <meta name="description" content="Studi kasus perancangan struktur SILO SEO dan optimasi internal link oleh Angi Permana.">

    <!-- Open Graph / Facebook / LinkedIn / WhatsApp -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://porto.angipermana.top/portofolio-arsitektur-silo-seo/">
    <meta property="og:title" content="Studi Kasus: Arsitektur Silo SEO & Optimasi Internal Link | Angi Permana">
    <meta property="og:description" content="Studi kasus perancangan struktur SILO SEO dan optimasi internal link oleh Angi Permana.">
    <meta property="og:image" content="https://porto.angipermana.top/images/og-preview.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://porto.angipermana.top/portofolio-arsitektur-silo-seo/">
    <meta name="twitter:title" content="Studi Kasus: Arsitektur Silo SEO & Optimasi Internal Link | Angi Permana">
    <meta name="twitter:description" content="Studi kasus perancangan struktur SILO SEO dan optimasi internal link oleh Angi Permana.">
    <meta name="twitter:image" content="https://porto.angipermana.top/images/og-preview.png">
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
        html.light header { background-color: rgba(241,245,249,0.92) !important; border-color: #E2E8F0 !important; }
        html.light .rounded-2xl, html.light .rounded-xl { box-shadow: 0 1px 8px rgba(0,0,0,0.06); }
    </style>

    <!-- JSON-LD Schema Markup -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@@type": "BreadcrumbList",
          "itemListElement": [
            {
              "@@type": "ListItem",
              "position": 1,
              "name": "Beranda",
              "item": "https://buatwebsitepro.id/"
            },
            {
              "@@type": "ListItem",
              "position": 2,
              "name": "Portofolio",
              "item": "https://buatwebsitepro.id/#portfolio"
            },
            {
              "@@type": "ListItem",
              "position": 3,
              "name": "Studi Kasus Arsitektur SILO SEO",
              "item": "https://buatwebsitepro.id/portofolio-arsitektur-silo-seo"
            }
          ]
        },
        {
          "@@type": "TechArticle",
          "headline": "Studi Kasus: Penerapan Arsitektur SILO SEO & Internal Link Hierarchical Structure",
          "description": "Studi kasus perancangan struktur SILO SEO, topic cluster, dan interlinking oleh Angi Permana.",
          "author": {
            "@@type": "Person",
            "name": "Angi Permana",
            "url": "https://buatwebsitepro.id"
          },
          "publisher": {
            "@@type": "Person",
            "name": "Angi Permana"
          },
          "mainEntityOfPage": "https://buatwebsitepro.id/portofolio-arsitektur-silo-seo"
        }
      ]
    }
    </script>
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
                    <span x-show="lang === 'en'">Silo SEO Consultation</span>
                    <span x-show="lang === 'id'" x-cloak>Konsultasi Silo SEO</span>
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
                    <span class="text-[11px] text-teal-300 mt-1 block">
                        <span x-show="lang === 'en'">Pass-through to Money Page</span>
                        <span x-show="lang === 'id'" x-cloak>Passthrough ke Money Page</span>
                    </span>
                </div>
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl relative overflow-hidden group hover:border-emerald-500/50 transition-all">
                    <div class="absolute -right-4 -top-4 w-16 h-16 bg-emerald-500/10 rounded-full blur-xl"></div>
                    <span class="text-slate-400 text-xs font-bold block mb-1">Crawl Efficiency</span>
                    <span class="text-2xl sm:text-4xl font-extrabold text-emerald-400">100%</span>
                    <span class="text-[11px] text-emerald-300 mt-1 block">
                        <span x-show="lang === 'en'">Crawl depth max layer 2</span>
                        <span x-show="lang === 'id'" x-cloak>Crawl depth max layer 2</span>
                    </span>
                </div>
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl col-span-2 sm:col-span-1 relative overflow-hidden group hover:border-cyan-500/50 transition-all">
                    <div class="absolute -right-4 -top-4 w-16 h-16 bg-cyan-500/10 rounded-full blur-xl"></div>
                    <span class="text-slate-400 text-xs font-bold block mb-1">
                        <span x-show="lang === 'en'">Keyword Cannibalization</span>
                        <span x-show="lang === 'id'" x-cloak>Kanibalisasi Keyword</span>
                    </span>
                    <span class="text-2xl sm:text-4xl font-extrabold text-cyan-400">0%</span>
                    <span class="text-[11px] text-cyan-300 mt-1 block">
                        <span x-show="lang === 'en'">Unique intent cluster per page</span>
                        <span x-show="lang === 'id'" x-cloak>Intent klaster unik per halaman</span>
                    </span>
                </div>
            </div>

            <!-- Before vs After Interactive Comparison -->
            <div class="bg-slate-900 border border-slate-800 p-6 sm:p-8 rounded-3xl mb-12" data-aos="fade-up" data-aos-delay="180">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
                    <div>
                        <h3 class="text-xl font-bold text-white">
                            <span x-show="lang === 'en'">Link Architecture Comparison: Before vs After SILO</span>
                            <span x-show="lang === 'id'" x-cloak>Perbandingan Struktur Link: Sebelum vs Sesudah SILO</span>
                        </h3>
                        <p class="text-xs text-slate-400">
                            <span x-show="lang === 'en'">Click tabs to compare internal linking structures live</span>
                            <span x-show="lang === 'id'" x-cloak>Klik tab untuk melihat perubahan struktur internal link</span>
                        </p>
                    </div>
                    <div class="flex bg-slate-950 p-1 rounded-xl border border-slate-800 text-xs font-bold">
                        <button @click="activeTab = 'before'" :class="activeTab === 'before' ? 'bg-red-500/20 text-red-400 border border-red-500/30' : 'text-slate-400 hover:text-white'" class="px-4 py-2 rounded-lg transition-all">
                            🔴 <span x-show="lang === 'en'">Before SILO</span><span x-show="lang === 'id'" x-cloak>Sebelum SILO</span>
                        </button>
                        <button @click="activeTab = 'after'" :class="activeTab === 'after' ? 'bg-emerald-500/20 text-emerald-400 border border-emerald-500/30' : 'text-slate-400 hover:text-white'" class="px-4 py-2 rounded-lg transition-all">
                            🟢 <span x-show="lang === 'en'">After SILO</span><span x-show="lang === 'id'" x-cloak>Setelah SILO</span>
                        </button>
                    </div>
                </div>

                <div x-show="activeTab === 'before'" x-cloak class="grid sm:grid-cols-3 gap-4">
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-red-500/20">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Crawl Depth Max</span>
                        <span class="text-2xl font-extrabold text-red-400">Layer 5+</span>
                        <span class="text-[11px] text-slate-500 mt-1 block">
                            <span x-show="lang === 'en'">Slow Googlebot indexing</span>
                            <span x-show="lang === 'id'" x-cloak>Googlebot lambat meng-indeks</span>
                        </span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-red-500/20">
                        <span class="text-xs text-slate-400 font-bold block mb-1">
                            <span x-show="lang === 'en'">Article Cannibalization</span>
                            <span x-show="lang === 'id'" x-cloak>Kanibalisasi Artikel</span>
                        </span>
                        <span class="text-2xl font-extrabold text-red-400">
                            <span x-show="lang === 'en'">12 Articles</span>
                            <span x-show="lang === 'id'" x-cloak>12 Artikel</span>
                        </span>
                        <span class="text-[11px] text-slate-500 mt-1 block">
                            <span x-show="lang === 'en'">Competing for same keywords</span>
                            <span x-show="lang === 'id'" x-cloak>Saling berebut kata kunci sama</span>
                        </span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-red-500/20">
                        <span class="text-xs text-slate-400 font-bold block mb-1">
                            <span x-show="lang === 'en'">Money Page Rank</span>
                            <span x-show="lang === 'id'" x-cloak>Peringkat Money Page</span>
                        </span>
                        <span class="text-2xl font-extrabold text-red-400">
                            <span x-show="lang === 'en'">Position #35</span>
                            <span x-show="lang === 'id'" x-cloak>Posisi #35</span>
                        </span>
                        <span class="text-[11px] text-slate-500 mt-1 block">
                            <span x-show="lang === 'en'">Diluted random link equity</span>
                            <span x-show="lang === 'id'" x-cloak>Kekuatan link tersebar acak</span>
                        </span>
                    </div>
                </div>

                <div x-show="activeTab === 'after'" class="grid sm:grid-cols-3 gap-4">
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-emerald-500/30">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Crawl Depth Max</span>
                        <span class="text-2xl font-extrabold text-emerald-400">Layer 2 🚀</span>
                        <span class="text-[11px] text-emerald-400 mt-1 block">
                            <span x-show="lang === 'en'">Instant indexing in seconds</span>
                            <span x-show="lang === 'id'" x-cloak>Indeks instan dalam detik</span>
                        </span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-emerald-500/30">
                        <span class="text-xs text-slate-400 font-bold block mb-1">
                            <span x-show="lang === 'en'">Article Cannibalization</span>
                            <span x-show="lang === 'id'" x-cloak>Kanibalisasi Artikel</span>
                        </span>
                        <span class="text-2xl font-extrabold text-emerald-400">
                            <span x-show="lang === 'en'">0 Articles</span>
                            <span x-show="lang === 'id'" x-cloak>0 Artikel</span>
                        </span>
                        <span class="text-[11px] text-emerald-400 mt-1 block">
                            <span x-show="lang === 'en'">Neatly isolated topic clusters</span>
                            <span x-show="lang === 'id'" x-cloak>Topic cluster terpisah rapi</span>
                        </span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-emerald-500/30">
                        <span class="text-xs text-slate-400 font-bold block mb-1">
                            <span x-show="lang === 'en'">Money Page Rank</span>
                            <span x-show="lang === 'id'" x-cloak>Peringkat Money Page</span>
                        </span>
                        <span class="text-2xl font-extrabold text-emerald-400">
                            <span x-show="lang === 'en'">Position #2 🔥</span>
                            <span x-show="lang === 'id'" x-cloak>Posisi #2 🔥</span>
                        </span>
                        <span class="text-[11px] text-emerald-400 mt-1 block">
                            <span x-show="lang === 'en'">Fully focused PageRank</span>
                            <span x-show="lang === 'id'" x-cloak>PageRank terfokus penuh</span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Tech Stack Badges -->
            <div class="mb-12" data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">
                    <span x-show="lang === 'en'">Tech Stack & SEO Architecture Tools:</span>
                    <span x-show="lang === 'id'" x-cloak>Tech Stack & Tools Arsitektur SEO:</span>
                </h4>
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
                        <span x-show="lang === 'en'">Website Structure Challenge</span>
                        <span x-show="lang === 'id'" x-cloak>Tantangan Struktur Website</span>
                    </h2>
                    <p class="mb-4">
                        <span x-show="lang === 'en'">Without planned link architecture, sites with hundreds of articles experience link juice dispersion, making key money pages fail to rank high.</span>
                        <span x-show="lang === 'id'" x-cloak>Tanpa arsitektur tautan yang direncanakan, website dengan ratusan artikel mengalami dispersi bobot nilai otoritas (link juice), membuat halaman penjualan sulit masuk peringkat atas.</span>
                    </p>
                </section>

                <section class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-teal-500/20 text-teal-400 inline-flex items-center justify-center mr-3 text-sm font-extrabold">02</span>
                        <span x-show="lang === 'en'">SILO Strategy Implementation</span>
                        <span x-show="lang === 'id'" x-cloak>Penerapan Strategi SILO</span>
                    </h2>
                    <p class="mb-4">
                        <span x-show="lang === 'en'">Every core category is grouped into isolated silos where sub-articles strictly pass internal link equity upwards to pillar money pages and horizontally within the same cluster.</span>
                        <span x-show="lang === 'id'" x-cloak>Setiap kategori utama dikelompokkan ke dalam klaster tertutup, dimana artikel pendukung hanya memberikan tautan internal ke halaman induk (pillar page) dan sesama artikel dalam klaster yang sama.</span>
                    </p>
                </section>
            </div>

            <!-- CTA Callout -->
            <div class="mt-16 bg-gradient-to-r from-teal-900/40 via-cyan-900/40 to-slate-900 border border-teal-500/30 p-8 rounded-3xl text-center" data-aos="zoom-in">
                <h3 class="text-2xl font-bold text-white mb-3">
                    <span x-show="lang === 'en'">Want to Fix Your Website's Internal Link Architecture?</span>
                    <span x-show="lang === 'id'" x-cloak>Ingin Memperbaiki Struktur Internal Link Website Anda?</span>
                </h3>
                <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">
                    <span x-show="lang === 'en'">Consult your website's SILO architecture and content hierarchy directly with Angi Permana.</span>
                    <span x-show="lang === 'id'" x-cloak>Konsultasikan struktur SILO dan hirarki konten website Anda bersama Angi Permana.</span>
                </p>
                <a href="https://wa.me/6285717616596?text=Halo%20Angi,%20saya%20tertarik%20dengan%20jasa%20Silo%20SEO" target="_blank" class="inline-flex items-center px-6 py-3.5 bg-teal-600 hover:bg-teal-500 text-white font-bold rounded-xl shadow-lg shadow-teal-600/40 transition hover:scale-105">
                    <span x-show="lang === 'en'">Contact via WhatsApp (+62 857-1761-6596)</span>
                    <span x-show="lang === 'id'" x-cloak>Hubungi via WhatsApp (+62 857-1761-6596)</span>
                </a>
            </div>

        </div>
    </main>        </div>

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
