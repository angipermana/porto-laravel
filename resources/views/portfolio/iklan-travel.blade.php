<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Studi Kasus: Kampanye Iklan Travel & Tour | Angi Permana</title>
    <meta name="description" content="Studi kasus optimasi kampanye paid ads (Google Ads & Meta Ads) untuk industri travel & tour oleh Angi Permana.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
<body class="bg-slate-950 text-slate-100 antialiased selection:bg-sky-500 selection:text-white"
    x-data="{ lang: localStorage.getItem('portfolio-lang') || 'id', theme: localStorage.getItem('portfolio-theme') || 'light', activeTab: 'after' }"
    x-init="$watch('theme', val => {
        document.documentElement.classList.toggle('light', val === 'light');
        localStorage.setItem('portfolio-theme', val);
    }); $watch('lang', val => localStorage.setItem('portfolio-lang', val))">

    <!-- Header Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="/#portfolio" class="inline-flex items-center text-sm font-semibold text-sky-400 hover:text-sky-300 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                <span x-show="lang === 'en'">← Back to Portfolio</span>
                <span x-show="lang === 'id'" x-cloak>← Kembali ke Portofolio</span>
            </a>

            <div class="flex items-center gap-3">
                <button @click="theme = theme === 'dark' ? 'light' : 'dark'"
                    class="w-10 h-10 rounded-full border border-slate-700 bg-slate-900 flex items-center justify-center hover:border-sky-500 transition">
                    <svg x-show="theme === 'dark'" class="w-4 h-4 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                    </svg>
                    <svg x-show="theme === 'light'" x-cloak class="w-4 h-4 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" />
                    </svg>
                </button>
                <button @click="lang = lang === 'en' ? 'id' : 'en'" class="text-xs font-bold px-3 py-2 rounded-lg border border-slate-700 bg-slate-900 text-slate-300">
                    <span x-text="lang === 'en' ? '🇮🇩 ID' : '🇬🇧 EN'"></span>
                </button>
                <a href="https://wa.me/6285717616596?text=Halo%20Angi,%20saya%20tertarik%20dengan%20jasa%20Iklan%20Travel" target="_blank" class="hidden sm:inline-flex items-center px-4 py-2 bg-sky-600 hover:bg-sky-500 text-white font-bold text-xs rounded-xl shadow-lg shadow-sky-600/30 transition">
                    Konsultasi Paid Ads
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
                    <span class="px-3.5 py-1 bg-sky-500/10 text-sky-400 text-xs font-bold rounded-full border border-sky-500/20">Google Ads Search & PMax</span>
                    <span class="px-3.5 py-1 bg-blue-500/10 text-blue-400 text-xs font-bold rounded-full border border-blue-500/20">Meta Ads Advantage+</span>
                    <span class="px-3.5 py-1 bg-emerald-500/10 text-emerald-400 text-xs font-bold rounded-full border border-emerald-500/20">Travel & Tour Industry</span>
                </div>

                <h1 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight mb-6">
                    <span x-show="lang === 'en'">Google & Meta Ads Travel Campaign Scale Up</span>
                    <span x-show="lang === 'id'" x-cloak>Optimasi Kampanye Iklan Travel & Tour: ROAS 4.5x</span>
                </h1>

                <p class="text-lg text-slate-300 leading-relaxed mb-8">
                    <span x-show="lang === 'en'">Scaling high-converting travel booking leads using precision Google Search intent targeting and Meta visual creative retargeting.</span>
                    <span x-show="lang === 'id'" x-cloak>Menargetkan pencari paket wisata ber-intent tinggi di Google Search dan retargeting visual memikat di Meta Ads (FB & IG) untuk meraih efisiensi anggaran maksimal.</span>
                </p>
            </div>

            <!-- Impact Highlight Cards -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mb-10" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl relative overflow-hidden group hover:border-sky-500/50 transition-all">
                    <div class="absolute -right-4 -top-4 w-16 h-16 bg-sky-500/10 rounded-full blur-xl"></div>
                    <span class="text-slate-400 text-xs font-bold block mb-1">Return On Ad Spend</span>
                    <span class="text-2xl sm:text-4xl font-extrabold text-sky-400">4.5x ROAS</span>
                    <span class="text-[11px] text-sky-300 mt-1 block">Dari ROAS awal 1.8x</span>
                </div>
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl relative overflow-hidden group hover:border-emerald-500/50 transition-all">
                    <div class="absolute -right-4 -top-4 w-16 h-16 bg-emerald-500/10 rounded-full blur-xl"></div>
                    <span class="text-slate-400 text-xs font-bold block mb-1">Cost Per Acquisition</span>
                    <span class="text-2xl sm:text-4xl font-extrabold text-emerald-400">-42% CPA</span>
                    <span class="text-[11px] text-emerald-300 mt-1 block">Biaya per booking hemat</span>
                </div>
                <div class="bg-slate-900 border border-slate-800 p-5 rounded-2xl col-span-2 sm:col-span-1 relative overflow-hidden group hover:border-blue-500/50 transition-all">
                    <div class="absolute -right-4 -top-4 w-16 h-16 bg-blue-500/10 rounded-full blur-xl"></div>
                    <span class="text-slate-400 text-xs font-bold block mb-1">Total Booking Leads</span>
                    <span class="text-2xl sm:text-4xl font-extrabold text-blue-400">1,450+</span>
                    <span class="text-[11px] text-blue-300 mt-1 block">Booking terverifikasi</span>
                </div>
            </div>



            <!-- Before vs After Interactive Comparison -->
            <div class="bg-slate-900 border border-slate-800 p-6 sm:p-8 rounded-3xl mb-12" data-aos="fade-up" data-aos-delay="180">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
                    <div>
                        <h3 class="text-xl font-bold text-white">Perbandingan Performa Iklan: Sebelum vs Sesudah Optimasi</h3>
                        <p class="text-xs text-slate-400">Klik tab untuk melihat perubahan metrik kampanye iklan</p>
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
                        <span class="text-xs text-slate-400 font-bold block mb-1">Return On Ad Spend</span>
                        <span class="text-2xl font-extrabold text-red-400">1.8x ROAS</span>
                        <span class="text-[11px] text-slate-500 mt-1 block">Hampir impas adspend</span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-red-500/20">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Cost Per Acquisition (CPA)</span>
                        <span class="text-2xl font-extrabold text-red-400">Rp 145.000</span>
                        <span class="text-[11px] text-slate-500 mt-1 block">Tinggi akibat broad targeting</span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-red-500/20">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Landing Page Conversion</span>
                        <span class="text-2xl font-extrabold text-red-400">1.5%</span>
                        <span class="text-[11px] text-slate-500 mt-1 block">Visual pesan tidak sesuai</span>
                    </div>
                </div>

                <div x-show="activeTab === 'after'" class="grid sm:grid-cols-3 gap-4">
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-emerald-500/30">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Return On Ad Spend</span>
                        <span class="text-2xl font-extrabold text-emerald-400">4.5x ROAS 🚀</span>
                        <span class="text-[11px] text-emerald-400 mt-1 block">Keuntungan iklan berlipat</span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-emerald-500/30">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Cost Per Acquisition (CPA)</span>
                        <span class="text-2xl font-extrabold text-emerald-400">Rp 84.000 <span class="text-xs">-42%</span></span>
                        <span class="text-[11px] text-emerald-400 mt-1 block">Biaya booking jauh lebih murah</span>
                    </div>
                    <div class="p-4 bg-slate-950/60 rounded-xl border border-emerald-500/30">
                        <span class="text-xs text-slate-400 font-bold block mb-1">Landing Page Conversion</span>
                        <span class="text-2xl font-extrabold text-emerald-400">4.1% 🔥</span>
                        <span class="text-[11px] text-emerald-400 mt-1 block">Message match sempurna</span>
                    </div>
                </div>
            </div>

            <!-- Tech Stack Badges -->
            <div class="mb-12" data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">Tech Stack & Platform Ads yang Digunakan:</h4>
                <div class="flex flex-wrap gap-2.5">
                    <span class="px-3 py-1.5 bg-slate-900 border border-slate-800 rounded-xl text-xs font-semibold text-slate-300 flex items-center gap-2">
                        🎯 Google Ads Search & Performance Max (PMax)
                    </span>
                    <span class="px-3 py-1.5 bg-slate-900 border border-slate-800 rounded-xl text-xs font-semibold text-slate-300 flex items-center gap-2">
                        📱 Meta Ads (Facebook & Instagram Advantage+)
                    </span>
                    <span class="px-3 py-1.5 bg-slate-900 border border-slate-800 rounded-xl text-xs font-semibold text-slate-300 flex items-center gap-2">
                        ⚡ Meta Conversions API (CAPI) & GTM Server-Side
                    </span>
                    <span class="px-3 py-1.5 bg-slate-900 border border-slate-800 rounded-xl text-xs font-semibold text-slate-300 flex items-center gap-2">
                        🎨 A/B Dynamic Creative Testing
                    </span>
                </div>
            </div>

            <!-- Section Content -->
            <div class="space-y-10 text-slate-300 leading-relaxed" data-aos="fade-up" data-aos-delay="220">
                <section class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-sky-500/20 text-sky-400 inline-flex items-center justify-center mr-3 text-sm font-extrabold">01</span>
                        Tantangan Kampanye Travel
                    </h2>
                    <p class="mb-4">
                        Persaingan ketat di paket tour travel mengakibatkan tingginya Cost Per Click (CPC) pada Google Ads dan tingginya ad fatigue pada materi iklan visual media sosial.
                    </p>
                </section>
            </div>

            <!-- CTA Callout -->
            <div class="mt-16 bg-gradient-to-r from-sky-900/40 via-blue-900/40 to-slate-900 border border-sky-500/30 p-8 rounded-3xl text-center" data-aos="zoom-in">
                <h3 class="text-2xl font-bold text-white mb-3">Ingin Menggandakan Omset Iklan Bisnis Anda?</h3>
                <p class="text-slate-300 text-sm max-w-xl mx-auto mb-6">Konsultasikan strategi Google Ads & Meta Ads bisnis Anda bersama Angi Permana.</p>
                <a href="https://wa.me/6285717616596?text=Halo%20Angi,%20saya%20tertarik%20dengan%20jasa%20Iklan%20Travel" target="_blank" class="inline-flex items-center px-6 py-3.5 bg-sky-600 hover:bg-sky-500 text-white font-bold rounded-xl shadow-lg shadow-sky-600/40 transition hover:scale-105">
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
