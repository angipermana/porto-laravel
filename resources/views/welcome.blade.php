<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Angi Permana | Web & Digital Marketing Expert</title>
    <meta name="description" content="Portfolio of Angi Permana - Google Ads Manager, WordPress Developer, and Conversion-focused Web Analyst.">

    <!-- Open Graph / Facebook / LinkedIn / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://porto.angipermana.top/">
    <meta property="og:title" content="Angi Permana | Web & Digital Marketing Expert">
    <meta property="og:description" content="Portfolio of Angi Permana - Google Ads Manager, WordPress Developer, and Conversion-focused Web Analyst.">
    <meta property="og:image" content="https://porto.angipermana.top/images/og-preview.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://porto.angipermana.top/">
    <meta name="twitter:title" content="Angi Permana | Web & Digital Marketing Expert">
    <meta name="twitter:description" content="Portfolio of Angi Permana - Google Ads Manager, WordPress Developer, and Conversion-focused Web Analyst.">
    <meta name="twitter:image" content="https://porto.angipermana.top/images/og-preview.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Apply theme before render to prevent flash -->
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
        html.light .bg-slate-950\/30 { background-color: rgba(241,245,249,0.3) !important; }
        html.light .bg-slate-900\/80 { background-color: rgba(255,255,255,0.85) !important; }
        html.light .bg-slate-900\/50 { background-color: rgba(255,255,255,0.5) !important; }
        html.light .bg-slate-900\/95 { background-color: rgba(255,255,255,0.97) !important; }
        html.light .bg-slate-800\/50 { background-color: rgba(248,250,252,0.7) !important; }
        html.light .bg-slate-800\/30 { background-color: rgba(248,250,252,0.4) !important; }
        /* Text */
        html.light .text-white      { color: #0F172A !important; }
        html.light .text-slate-200  { color: #1E293B !important; }
        html.light .text-slate-300  { color: #334155 !important; }
        html.light .text-slate-400  { color: #64748B !important; }
        html.light .text-slate-500  { color: #94A3B8 !important; }
        html.light .text-slate-600  { color: #CBD5E1 !important; }
        html.light .text-indigo-400 { color: #6D28D9 !important; }
        html.light .text-indigo-300 { color: #7C3AED !important; }
        /* Borders */
        html.light .border-slate-900 { border-color: #E2E8F0 !important; }
        html.light .border-slate-800 { border-color: #E2E8F0 !important; }
        html.light .border-slate-700 { border-color: #CBD5E1 !important; }
        html.light .border-slate-700\/50 { border-color: rgba(203,213,225,0.5) !important; }
        /* Navbar */
        html.light nav {
            background-color: rgba(241,245,249,0.92) !important;
            border-color: #E2E8F0 !important;
        }
        /* Lang toggle bg */
        html.light .bg-slate-900.border.border-slate-700.rounded-full {
            background-color: #F1F5F9 !important;
            border-color: #CBD5E1 !important;
        }
        /* Hero gradient */
        html.light header .absolute.inset-0 {
            background: radial-gradient(ellipse at top right, rgba(139,92,246,0.12), #F1F5F9, #F1F5F9) !important;
        }
        /* Cards - add soft shadow in light mode */
        html.light .rounded-2xl,
        html.light .rounded-xl {
            box-shadow: 0 1px 8px rgba(0,0,0,0.06), 0 1px 2px rgba(0,0,0,0.04);
        }
        /* Chatbot input area */
        html.light input[type="text"] {
            background-color: #F8FAFC !important;
            color: #0F172A !important;
            border-color: #E2E8F0 !important;
        }
        html.light input[type="text"]::placeholder { color: #94A3B8 !important; }
        /* Selection */
        html.light ::selection { background-color: #8B5CF6; color: white; }
        /* Scrollbar */
        html.light ::-webkit-scrollbar-track { background: #F1F5F9; }
        html.light ::-webkit-scrollbar-thumb { background: #CBD5E1; }
    </style>

    <!-- JSON-LD Schema Markup -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@@type": "Person",
          "@@id": "https://buatwebsitepro.id/#person",
          "name": "Angi Permana",
          "jobTitle": "SEO Specialist & Senior Web Developer",
          "description": "Spesialis SEO Organic, Google & Meta Ads, Arsitektur SILO, Pembersihan Malware, dan Web Development berkinerja tinggi.",
          "telephone": "+6285717616596",
          "email": "admin@buatwebsitepro.id",
          "url": "https://buatwebsitepro.id",
          "sameAs": [
            "https://wa.me/6285717616596"
          ],
          "knowsAbout": [
            "Search Engine Optimization (SEO)",
            "SILO Architecture",
            "Google Ads & Performance Max",
            "Meta Ads & Advantage+",
            "Website Security & Malware Removal",
            "Conversion Rate Optimization (CRO)",
            "Web Development & Laravel"
          ]
        },
        {
          "@@type": "ProfessionalService",
          "@@id": "https://buatwebsitepro.id/#service",
          "name": "Jasa SEO & Web Development Angi Permana",
          "url": "https://buatwebsitepro.id",
          "telephone": "+6285717616596",
          "priceRange": "$$",
          "provider": {
            "@@id": "https://buatwebsitepro.id/#person"
          },
          "areaServed": "ID",
          "serviceType": [
            "SEO Optimization",
            "Web Development",
            "Paid Ads Management",
            "Malware Cleanup",
            "Conversion Rate Optimization"
          ]
        },
        {
          "@@type": "WebSite",
          "@@id": "https://buatwebsitepro.id/#website",
          "url": "https://buatwebsitepro.id",
          "name": "Angi Permana Portfolio & Digital Marketing Specialist",
          "publisher": {
            "@@id": "https://buatwebsitepro.id/#person"
          }
        }
      ]
    }
    </script>
</head>
<body class="bg-slate-950 text-slate-200 antialiased selection:bg-indigo-500 selection:text-white"
    x-data="{ lang: localStorage.getItem('portfolio-lang') || 'id', theme: localStorage.getItem('portfolio-theme') || 'light' }"
    x-init="$watch('theme', val => {
        document.documentElement.classList.toggle('light', val === 'light');
        localStorage.setItem('portfolio-theme', val);
    }); $watch('lang', val => localStorage.setItem('portfolio-lang', val))">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 top-0 border-b border-slate-800 bg-slate-950/80 backdrop-blur-md" data-aos="fade-down" data-aos-duration="800">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="text-2xl font-bold text-white tracking-tighter hover:scale-105 transition">
                Angi<span class="text-indigo-500">Permana.</span>
            </div>
            
            <div class="hidden md:flex space-x-8 text-base font-medium text-slate-300">
                <a href="#services" class="hover:text-white transition">
                    <span x-show="lang === 'en'">Specialties</span>
                    <span x-show="lang === 'id'" x-cloak>Spesialisasi</span>
                </a>
                <a href="#portfolio" class="hover:text-white transition">
                    <span x-show="lang === 'en'">Portfolio</span>
                    <span x-show="lang === 'id'" x-cloak>Portfolio</span>
                </a>
                <a href="#experience" class="hover:text-white transition">
                    <span x-show="lang === 'en'">Experience</span>
                    <span x-show="lang === 'id'" x-cloak>Pengalaman</span>
                </a>
            </div>

            <div class="flex items-center gap-3">
                <!-- Theme Toggle -->
                <button @click="theme = theme === 'dark' ? 'light' : 'dark'"
                    class="w-10 h-10 rounded-full border border-slate-700 bg-slate-900 flex items-center justify-center hover:border-indigo-500 transition-all duration-300"
                    :title="theme === 'dark' ? 'Switch to Light Mode' : 'Switch to Dark Mode'">
                    <!-- Sun icon (show in dark mode) -->
                    <svg x-show="theme === 'dark'" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                    </svg>
                    <!-- Moon icon (show in light mode) -->
                    <svg x-show="theme === 'light'" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" />
                    </svg>
                </button>
                <!-- Language Toggle -->
                <div class="bg-slate-900 border border-slate-700 rounded-full p-1 flex items-center text-xs font-bold cursor-pointer relative" @click="lang = lang === 'en' ? 'id' : 'en'">
                    <div class="absolute w-1/2 h-full top-0 bg-indigo-600 rounded-full transition-transform duration-300 ease-in-out" :class="lang === 'en' ? 'translate-x-0 left-0' : 'translate-x-full left-0'"></div>
                    <div class="px-3 py-1.5 relative z-10 transition-colors" :class="lang === 'en' ? 'text-white' : 'text-slate-400'">EN</div>
                    <div class="px-3 py-1.5 relative z-10 transition-colors" :class="lang === 'id' ? 'text-white' : 'text-slate-400'">ID</div>
                </div>
                <a href="https://wa.me/6285717616596?text=Halo%20Angi,%20saya%20ingin%20berkonsultasi" target="_blank" class="hidden sm:inline-block bg-indigo-600 hover:bg-indigo-500 text-white px-5 py-2.5 rounded-full text-sm font-semibold transition shadow-lg shadow-indigo-500/30">
                    <span x-show="lang === 'en'">Contact Me</span>
                    <span x-show="lang === 'id'" x-cloak>Kontak Saya</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden flex flex-col justify-center min-h-screen">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-indigo-900/40 via-slate-950 to-slate-950 -z-10"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center lg:text-left flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-1/2" data-aos="fade-right" data-aos-duration="1000">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800/50 border border-slate-700 text-indigo-400 text-sm font-medium mb-6">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                    </span>
                    <span x-show="lang === 'en'">Available for Work</span>
                    <span x-show="lang === 'id'" x-cloak>Tersedia Untuk Bekerja</span>
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-extrabold text-white tracking-tight leading-[1.1] mb-6">
                    <span x-show="lang === 'en'">Hi, I'm Angi. <br> Driving Growth Through <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400">Data.</span></span>
                    <span x-show="lang === 'id'" x-cloak>Halo, Saya Angi. <br> Meningkatkan Konversi <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400">Berbasis Data.</span></span>
                </h1>
                
                <p class="text-lg lg:text-xl text-slate-400 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    <span x-show="lang === 'en'">I help businesses grow through precise <strong class="text-slate-200">Google Ads</strong> strategies, robust <strong class="text-slate-200">WordPress</strong> development, and <strong class="text-slate-200">Web Analytics</strong> to maximize every click into conversion.</span>
                    <span x-show="lang === 'id'" x-cloak>Saya membantu perusahaan tumbuh melalui strategi <strong class="text-slate-200">Google Ads</strong> yang presisi, pengembangan <strong class="text-slate-200">WordPress</strong> yang solid, dan analisis <strong class="text-slate-200">Web Analytics</strong> untuk mengubah setiap klik menjadi konversi.</span>
                </p>
                <div class="flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-start">
                    <a href="#services" class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-500 text-white px-8 py-4 rounded-full font-semibold transition shadow-lg shadow-indigo-500/30 text-center">
                        <span x-show="lang === 'en'">View My Expertise</span>
                        <span x-show="lang === 'id'" x-cloak>Lihat Keahlian Saya</span>
                    </a>
                    <a href="#email-me-now" class="w-full sm:w-auto bg-slate-800 hover:bg-slate-700 text-white px-8 py-4 rounded-full font-semibold transition border border-slate-700 text-center hover:scale-105">
                        <span x-show="lang === 'en'">Contact Me</span>
                        <span x-show="lang === 'id'" x-cloak>Hubungi Saya</span>
                    </a>
                    <a href="https://www.linkedin.com/in/angi-permana/" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto bg-[#0A66C2]/10 hover:bg-[#0A66C2]/20 text-[#0A66C2] border border-[#0A66C2]/30 px-6 py-4 rounded-full font-semibold transition text-center flex items-center justify-center gap-2 group hover:scale-105">
                        <svg class="w-5 h-5 fill-current group-hover:scale-110 transition" viewBox="0 0 24 24">
                            <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.25V10.9H6.46M7.86 6.78a1.63 1.63 0 1 0 0 3.26 1.63 1.63 0 0 0 0-3.26Z"/>
                        </svg>
                        <span>LinkedIn</span>
                    </a>
                </div>
            </div>
            
            <!-- Hero Graphic/Dashboard Mockup -->
            <div class="lg:w-1/2 w-full mt-12 lg:mt-0 relative perspective-1000" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-2xl transform rotate-1 hover:rotate-0 transition duration-500">
                    <div class="flex gap-2 mb-4">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="space-y-4">
                        <div class="h-8 bg-slate-800 rounded w-1/3"></div>
                        <div class="flex gap-4">
                            <div class="h-24 bg-indigo-900/50 border border-indigo-500/30 rounded flex-1 flex flex-col justify-center px-4 hover:bg-indigo-900/70 transition">
                                <span class="text-indigo-400 text-xs font-semibold mb-1">ROAS</span>
                                <span class="text-2xl font-bold text-white">+342%</span>
                            </div>
                            <div class="h-24 bg-cyan-900/50 border border-cyan-500/30 rounded flex-1 flex flex-col justify-center px-4 hover:bg-cyan-900/70 transition">
                                <span class="text-cyan-400 text-xs font-semibold mb-1">Conversion Rate</span>
                                <span class="text-2xl font-bold text-white">4.8%</span>
                            </div>
                        </div>
                        <div class="h-32 bg-slate-800 rounded w-full"></div>
                    </div>
                </div>
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
                <div class="absolute -top-6 -left-6 w-32 h-32 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-slate-900/50 border-y border-slate-800 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">
                    <span x-show="lang === 'en'">Core Specialties</span>
                    <span x-show="lang === 'id'" x-cloak>Spesialisasi Utama</span>
                </h2>
                <p class="text-slate-400 max-w-2xl mx-auto">
                    <span x-show="lang === 'en'">A combination of technical and analytical skills to ensure your website doesn't just look good, but generates profit.</span>
                    <span x-show="lang === 'id'" x-cloak>Kombinasi skill teknis dan analitis untuk memastikan website Anda tidak hanya bagus, tapi juga menghasilkan profit.</span>
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div data-aos="fade-up" data-aos-delay="100" class="bg-slate-900 border border-slate-800 p-8 rounded-2xl hover:border-indigo-500/50 hover:shadow-lg hover:shadow-indigo-500/10 transition duration-300 group cursor-default">
                    <div class="w-14 h-14 bg-indigo-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-indigo-500/20 transition">
                        <svg class="w-7 h-7 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Google Ads Management</h3>
                    <p class="text-slate-400 text-base leading-relaxed mb-4">
                        <span x-show="lang === 'en'">Managing advertising campaigns (Search, Display, Video) with efficient budgeting. Focus on decreasing CPA and increasing ROAS.</span>
                        <span x-show="lang === 'id'" x-cloak>Mengelola kampanye periklanan (Search, Display, Video) dengan budget efisien. Fokus pada penurunan CPA dan peningkatan ROAS.</span>
                    </p>
                    <ul class="text-base text-slate-500 space-y-2">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Keyword Research & Bidding</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> A/B Testing Ad Copy</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Campaign Optimization</li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div data-aos="fade-up" data-aos-delay="200" class="bg-slate-900 border border-slate-800 p-8 rounded-2xl hover:border-cyan-500/50 hover:shadow-lg hover:shadow-cyan-500/10 transition duration-300 group cursor-default">
                    <div class="w-14 h-14 bg-cyan-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-cyan-500/20 transition">
                        <svg class="w-7 h-7 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">WordPress Developer</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-4">
                        <span x-show="lang === 'en'">Building fast, secure, and responsive landing pages. Experienced in Pagespeed optimization and custom themes/plugins.</span>
                        <span x-show="lang === 'id'" x-cloak>Pembuatan landing page yang cepat, aman, dan responsif. Berpengalaman dalam optimasi kecepatan dan custom theme/plugin.</span>
                    </p>
                    <ul class="text-sm text-slate-500 space-y-2">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Custom Theme & Plugin</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Pagespeed Optimization</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Maintenance & Security</li>
                    </ul>
                </div>

                <!-- Card 3 -->
                <div data-aos="fade-up" data-aos-delay="300" class="bg-slate-900 border border-slate-800 p-8 rounded-2xl hover:border-purple-500/50 hover:shadow-lg hover:shadow-purple-500/10 transition duration-300 group cursor-default">
                    <div class="w-14 h-14 bg-purple-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-purple-500/20 transition">
                        <svg class="w-7 h-7 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Web Analytics</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-4">
                        <span x-show="lang === 'en'">Accurate tracking setup with GTM and GA4. Analyzing visitor behavior to find bottlenecks and improve Conversion Rate.</span>
                        <span x-show="lang === 'id'" x-cloak>Setup tracking yang akurat dengan GTM dan GA4. Membaca data perilaku pengunjung untuk menemukan bottleneck dan meningkatkan Conversion Rate.</span>
                    </p>
                    <ul class="text-sm text-slate-500 space-y-2">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Google Analytics 4 (GA4)</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Google Tag Manager (GTM)</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Conversion Rate Optimization</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies / Portfolio Section -->
    <section id="portfolio" class="py-24 bg-slate-950 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">
                    <span x-show="lang === 'en'">Featured Case Studies</span>
                    <span x-show="lang === 'id'" x-cloak>Studi Kasus & Hasil</span>
                </h2>
                <p class="text-slate-400 max-w-2xl mx-auto">
                    <span x-show="lang === 'en'">Real-world data and results from previous projects.</span>
                    <span x-show="lang === 'id'" x-cloak>Data dan hasil nyata dari proyek-proyek yang pernah saya tangani.</span>
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Case Study 1: Organic Traffic Growth -->
                <a href="/portofolio-jasa-seo-bandung" data-aos="fade-up" data-aos-delay="100" class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden group hover:-translate-y-2 transition duration-500 hover:shadow-2xl hover:shadow-indigo-500/20 flex flex-col justify-between cursor-pointer block">
                    <div>
                        <div class="h-44 bg-slate-800 relative overflow-hidden flex items-center justify-center border-b border-slate-800">
                            <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/20 via-slate-900 to-slate-900 z-0"></div>
                            <svg class="w-14 h-14 text-indigo-400 relative z-10 group-hover:scale-110 transition duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-indigo-500/10 text-indigo-400 text-sm font-semibold rounded-full border border-indigo-500/20">SEO Organic</span>
                                <span class="px-3 py-1 bg-purple-500/10 text-purple-400 text-sm font-semibold rounded-full border border-purple-500/20">Growth</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-indigo-400 transition">
                                <span x-show="lang === 'en'">Consistent Organic Traffic Scaling</span>
                                <span x-show="lang === 'id'" x-cloak>Pertumbuhan Trafik Organik Konsisten</span>
                            </h3>
                            <div class="bg-slate-950 p-4 rounded-xl border border-slate-800 group-hover:border-slate-700 transition mb-4">
                                <span class="text-slate-500 text-xs uppercase tracking-wider font-bold block mb-1">
                                    <span x-show="lang === 'en'">The Challenge</span>
                                    <span x-show="lang === 'id'" x-cloak>Tantangan</span>
                                </span>
                                <span class="text-slate-300 text-sm font-medium leading-relaxed">
                                    <span x-show="lang === 'en'">Stagnant organic traffic, low search visibility, and unoptimized keyword structure.</span>
                                    <span x-show="lang === 'id'" x-cloak>Trafik organik stagnan, jangkauan pencarian rendah, dan struktur kata kunci belum optimal.</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-6 space-y-3">
                        <div class="bg-indigo-950/30 p-4 rounded-xl border border-indigo-500/30 flex justify-between items-center group-hover:bg-indigo-900/40 transition">
                            <div>
                                <span class="text-indigo-400 text-xs uppercase tracking-wider font-bold block mb-1">
                                    <span x-show="lang === 'en'">Monthly Growth</span>
                                    <span x-show="lang === 'id'" x-cloak>Pertumbuhan Bulanan</span>
                                </span>
                                <span class="text-white font-extrabold text-xl">+30%/Mo</span>
                            </div>
                            <div class="text-right">
                                <span class="text-indigo-400 text-xs uppercase tracking-wider font-bold block mb-1">Status</span>
                                <span class="text-emerald-400 font-bold text-base">
                                    <span x-show="lang === 'en'">Consistent</span>
                                    <span x-show="lang === 'id'" x-cloak>Konsisten</span>
                                </span>
                            </div>
                        </div>
                        <div class="text-center text-sm font-bold text-indigo-400 group-hover:text-indigo-300 flex items-center justify-center gap-1 transition pt-1">
                            <span>Lihat Detail Studi Kasus</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </a>

                <!-- Case Study 2: Malware Removal & Security -->
                <a href="/portofolio-jasa-hapus-malware" data-aos="fade-up" data-aos-delay="200" class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden group hover:-translate-y-2 transition duration-500 hover:shadow-2xl hover:shadow-red-500/20 flex flex-col justify-between cursor-pointer block">
                    <div>
                        <div class="h-44 bg-slate-800 relative overflow-hidden flex items-center justify-center border-b border-slate-800">
                            <div class="absolute inset-0 bg-gradient-to-br from-red-600/20 via-slate-900 to-slate-900 z-0"></div>
                            <svg class="w-14 h-14 text-red-400 relative z-10 group-hover:scale-110 transition duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-red-500/10 text-red-400 text-xs font-bold rounded-full border border-red-500/20">WordPress</span>
                                <span class="px-3 py-1 bg-rose-500/10 text-rose-400 text-xs font-bold rounded-full border border-rose-500/20">Security</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-red-400 transition">
                                <span x-show="lang === 'en'">Malware Removal & Security Hardening</span>
                                <span x-show="lang === 'id'" x-cloak>Pembersihan Malware & Keamanan Web</span>
                            </h3>
                            <div class="bg-slate-950 p-4 rounded-xl border border-slate-800 group-hover:border-slate-700 transition mb-4">
                                <span class="text-slate-500 text-[11px] uppercase tracking-wider font-bold block mb-1">
                                    <span x-show="lang === 'en'">The Challenge</span>
                                    <span x-show="lang === 'id'" x-cloak>Tantangan</span>
                                </span>
                                <span class="text-slate-300 text-xs font-medium leading-relaxed">
                                    <span x-show="lang === 'en'">Website infected with malicious scripts, blacklisted by search engines & showing warnings.</span>
                                    <span x-show="lang === 'id'" x-cloak>Website terinfeksi skrip jahat/malware, di-blacklist Google, dan merusak reputasi domain.</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-6 space-y-3">
                        <div class="bg-red-950/30 p-4 rounded-xl border border-red-500/30 flex justify-between items-center group-hover:bg-red-900/40 transition">
                            <div>
                                <span class="text-red-400 text-[10px] uppercase tracking-wider font-bold block mb-1">Malware Cleaned</span>
                                <span class="text-white font-extrabold text-xl">100% Free</span>
                            </div>
                            <div class="text-right">
                                <span class="text-red-400 text-[10px] uppercase tracking-wider font-bold block mb-1">Security</span>
                                <span class="text-emerald-400 font-bold text-sm">
                                    <span x-show="lang === 'en'">Fully Secured</span>
                                    <span x-show="lang === 'id'" x-cloak>Aman & Pulih</span>
                                </span>
                            </div>
                        </div>
                        <div class="text-center text-xs font-bold text-red-400 group-hover:text-red-300 flex items-center justify-center gap-1 transition pt-1">
                            <span>Lihat Detail Studi Kasus</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </a>

                <!-- Case Study 3: Travel High-Ticket Campaign -->
                <a href="/portofolio-kampanye-iklan-travel" data-aos="fade-up" data-aos-delay="300" class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden group hover:-translate-y-2 transition duration-500 hover:shadow-2xl hover:shadow-emerald-500/20 flex flex-col justify-between cursor-pointer block">
                    <div>
                        <div class="h-44 bg-slate-800 relative overflow-hidden flex items-center justify-center border-b border-slate-800">
                            <div class="absolute inset-0 bg-gradient-to-br from-emerald-600/20 via-slate-900 to-slate-900 z-0"></div>
                            <svg class="w-14 h-14 text-emerald-400 relative z-10 group-hover:scale-110 transition duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-emerald-500/10 text-emerald-400 text-xs font-bold rounded-full border border-emerald-500/20">Paid Ads</span>
                                <span class="px-3 py-1 bg-teal-500/10 text-teal-400 text-xs font-bold rounded-full border border-teal-500/20">High-Ticket Travel</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-emerald-400 transition">
                                <span x-show="lang === 'en'">High-Ticket Travel Ad Scaling</span>
                                <span x-show="lang === 'id'" x-cloak>Kampanye Iklan Travel High-Ticket</span>
                            </h3>
                            <div class="bg-slate-950 p-4 rounded-xl border border-slate-800 group-hover:border-slate-700 transition mb-4">
                                <span class="text-slate-500 text-[11px] uppercase tracking-wider font-bold block mb-1">
                                    <span x-show="lang === 'en'">The Challenge & Strategy</span>
                                    <span x-show="lang === 'id'" x-cloak>Tantangan & Strategi</span>
                                </span>
                                <span class="text-slate-300 text-xs font-medium leading-relaxed">
                                    <span x-show="lang === 'en'">Rp 26M budget scaling high-ticket seats (Avg Rp 30M/seat) for premium travel packages.</span>
                                    <span x-show="lang === 'id'" x-cloak>Budget iklan Rp 26jt untuk closing paket travel premium (Rata-rata Rp 30jt per seat).</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-6 space-y-3">
                        <div class="bg-emerald-950/30 p-4 rounded-xl border border-emerald-500/30 flex justify-between items-center group-hover:bg-emerald-900/40 transition">
                            <div>
                                <span class="text-emerald-400 text-[10px] uppercase tracking-wider font-bold block mb-1">Total Closing</span>
                                <span class="text-white font-extrabold text-xl">90 Seats</span>
                            </div>
                            <div class="text-right">
                                <span class="text-emerald-400 text-[10px] uppercase tracking-wider font-bold block mb-1">Total Revenue</span>
                                <span class="text-emerald-400 font-bold text-lg">Rp 2.7 Miliar</span>
                            </div>
                        </div>
                        <div class="text-center text-xs font-bold text-emerald-400 group-hover:text-emerald-300 flex items-center justify-center gap-1 transition pt-1">
                            <span>Lihat Detail Studi Kasus</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </a>

                <!-- Case Study 4: SILO Architecture & Broken Links (500+ Pages) -->
                <a href="/portofolio-arsitektur-silo-seo" data-aos="fade-up" data-aos-delay="400" class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden group hover:-translate-y-2 transition duration-500 hover:shadow-2xl hover:shadow-cyan-500/20 flex flex-col justify-between cursor-pointer block">
                    <div>
                        <div class="h-44 bg-slate-800 relative overflow-hidden flex items-center justify-center border-b border-slate-800">
                            <div class="absolute inset-0 bg-gradient-to-br from-cyan-600/20 via-slate-900 to-slate-900 z-0"></div>
                            <svg class="w-14 h-14 text-cyan-400 relative z-10 group-hover:scale-110 transition duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-cyan-500/10 text-cyan-400 text-xs font-bold rounded-full border border-cyan-500/20">Technical SEO</span>
                                <span class="px-3 py-1 bg-blue-500/10 text-blue-400 text-xs font-bold rounded-full border border-blue-500/20">500+ Pages</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-cyan-400 transition">
                                <span x-show="lang === 'en'">SILO Architecture & Broken Link Remediation</span>
                                <span x-show="lang === 'id'" x-cloak>Arsitektur SILO & Perbaikan 500+ Halaman</span>
                            </h3>
                            <div class="bg-slate-950 p-4 rounded-xl border border-slate-800 group-hover:border-slate-700 transition mb-4">
                                <span class="text-slate-500 text-[11px] uppercase tracking-wider font-bold block mb-1">
                                    <span x-show="lang === 'en'">The Challenge</span>
                                    <span x-show="lang === 'id'" x-cloak>Tantangan</span>
                                </span>
                                <span class="text-slate-300 text-xs font-medium leading-relaxed">
                                    <span x-show="lang === 'en'">Messy internal linking and numerous broken links across 500+ pages ruining crawl efficiency.</span>
                                    <span x-show="lang === 'id'" x-cloak>Struktur link internal acak-acakan dan broken link pada web 500+ halaman yang merusak crawl budget.</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-6 space-y-3">
                        <div class="bg-cyan-950/30 p-4 rounded-xl border border-cyan-500/30 flex justify-between items-center group-hover:bg-cyan-900/40 transition">
                            <div>
                                <span class="text-cyan-400 text-[10px] uppercase tracking-wider font-bold block mb-1">Broken Links</span>
                                <span class="text-white font-extrabold text-xl">0 (Fixed)</span>
                            </div>
                            <div class="text-right">
                                <span class="text-cyan-400 text-[10px] uppercase tracking-wider font-bold block mb-1">Structure</span>
                                <span class="text-cyan-400 font-bold text-sm">
                                    <span x-show="lang === 'en'">100% SILO Ready</span>
                                    <span x-show="lang === 'id'" x-cloak>100% SILO Struktur</span>
                                </span>
                            </div>
                        </div>
                        <div class="text-center text-xs font-bold text-cyan-400 group-hover:text-cyan-300 flex items-center justify-center gap-1 transition pt-1">
                            <span>Lihat Detail Studi Kasus</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </a>

                <!-- Case Study 5: GMB Local SEO Optimization -->
                <a href="/portofolio-jasa-local-seo-gmb" data-aos="fade-up" data-aos-delay="500" class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden group hover:-translate-y-2 transition duration-500 hover:shadow-2xl hover:shadow-amber-500/20 flex flex-col justify-between cursor-pointer block">
                    <div>
                        <div class="h-44 bg-slate-800 relative overflow-hidden flex items-center justify-center border-b border-slate-800">
                            <div class="absolute inset-0 bg-gradient-to-br from-amber-600/20 via-slate-900 to-slate-900 z-0"></div>
                            <svg class="w-14 h-14 text-amber-400 relative z-10 group-hover:scale-110 transition duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-amber-500/10 text-amber-400 text-xs font-bold rounded-full border border-amber-500/20">Local SEO</span>
                                <span class="px-3 py-1 bg-yellow-500/10 text-yellow-400 text-xs font-bold rounded-full border border-yellow-500/20">Google Business</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-amber-400 transition">
                                <span x-show="lang === 'en'">Google My Business & Local SEO Optimization</span>
                                <span x-show="lang === 'id'" x-cloak>Optimasi GMB & Local SEO Berkualitas</span>
                            </h3>
                            <div class="bg-slate-950 p-4 rounded-xl border border-slate-800 group-hover:border-slate-700 transition mb-4">
                                <span class="text-slate-500 text-[11px] uppercase tracking-wider font-bold block mb-1">
                                    <span x-show="lang === 'en'">The Challenge</span>
                                    <span x-show="lang === 'id'" x-cloak>Tantangan</span>
                                </span>
                                <span class="text-slate-300 text-xs font-medium leading-relaxed">
                                    <span x-show="lang === 'en'">Low local map ranking and missing out on high-intent local customer phone calls & visits.</span>
                                    <span x-show="lang === 'id'" x-cloak>Peringkat Google Maps rendah dan profil GMB belum dioptimasi untuk menjaring pembeli lokal.</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-6 space-y-3">
                        <div class="bg-amber-950/30 p-4 rounded-xl border border-amber-500/30 flex justify-between items-center group-hover:bg-amber-900/40 transition">
                            <div>
                                <span class="text-amber-400 text-[10px] uppercase tracking-wider font-bold block mb-1">Local Traffic & Calls</span>
                                <span class="text-white font-extrabold text-xl">+180% Qualified</span>
                            </div>
                            <div class="text-right">
                                <span class="text-amber-400 text-[10px] uppercase tracking-wider font-bold block mb-1">Map Ranking</span>
                                <span class="text-amber-400 font-bold text-sm">Top 3 Map Pack</span>
                            </div>
                        </div>
                        <div class="text-center text-xs font-bold text-amber-400 group-hover:text-amber-300 flex items-center justify-center gap-1 transition pt-1">
                            <span>Lihat Detail Studi Kasus</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </a>

                <!-- Case Study 6: CRO & Landing Page Redesign -->
                <a href="/portofolio-optimasi-konversi-cro" data-aos="fade-up" data-aos-delay="600" class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden group hover:-translate-y-2 transition duration-500 hover:shadow-2xl hover:shadow-pink-500/20 flex flex-col justify-between cursor-pointer block">
                    <div>
                        <div class="h-44 bg-slate-800 relative overflow-hidden flex items-center justify-center border-b border-slate-800">
                            <div class="absolute inset-0 bg-gradient-to-br from-pink-600/20 via-slate-900 to-slate-900 z-0"></div>
                            <svg class="w-14 h-14 text-pink-400 relative z-10 group-hover:scale-110 transition duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path></svg>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-pink-500/10 text-pink-400 text-xs font-bold rounded-full border border-pink-500/20">CRO</span>
                                <span class="px-3 py-1 bg-violet-500/10 text-violet-400 text-xs font-bold rounded-full border border-violet-500/20">Landing Page</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-pink-400 transition">
                                <span x-show="lang === 'en'">Conversion Rate Optimization & Redesign</span>
                                <span x-show="lang === 'id'" x-cloak>Optimasi Konversi (CRO) & Redesain Landing Page</span>
                            </h3>
                            <div class="bg-slate-950 p-4 rounded-xl border border-slate-800 group-hover:border-slate-700 transition mb-4">
                                <span class="text-slate-500 text-[11px] uppercase tracking-wider font-bold block mb-1">
                                    <span x-show="lang === 'en'">The Challenge</span>
                                    <span x-show="lang === 'id'" x-cloak>Tantangan</span>
                                </span>
                                <span class="text-slate-300 text-xs font-medium leading-relaxed">
                                    <span x-show="lang === 'en'">High ad traffic but low conversion rate (&lt;1%) due to friction & unclear CTA hierarchy.</span>
                                    <span x-show="lang === 'id'" x-cloak>Trafik iklan tinggi namun angka konversi terhambat di bawah 1% akibat hirarki CTA & UX kurang optimal.</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-6 space-y-3">
                        <div class="bg-pink-950/30 p-4 rounded-xl border border-pink-500/30 flex justify-between items-center group-hover:bg-pink-900/40 transition">
                            <div>
                                <span class="text-pink-400 text-[10px] uppercase tracking-wider font-bold block mb-1">Conv Rate</span>
                                <span class="text-white font-extrabold text-xl">+240% (2.7%)</span>
                            </div>
                            <div class="text-right">
                                <span class="text-pink-400 text-[10px] uppercase tracking-wider font-bold block mb-1">Inquiries</span>
                                <span class="text-pink-400 font-bold text-sm">2.5x Increase</span>
                            </div>
                        </div>
                        <div class="text-center text-xs font-bold text-pink-400 group-hover:text-pink-300 flex items-center justify-center gap-1 transition pt-1">
                            <span>Lihat Detail Studi Kasus</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </section>

    <!-- Work Experience Section -->
    <section id="experience" class="py-24 bg-slate-900/50 border-y border-slate-800">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="zoom-in">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">
                    <span x-show="lang === 'en'">Work Experience</span>
                    <span x-show="lang === 'id'" x-cloak>Histori Karir</span>
                </h2>
            </div>

            <div class="block relative">
                <!-- Garis vertikal tengah -->
                <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-0 bottom-0" style="width:2px; background:#334155;"></div>

                <!-- 2010 - Kiri -->
                <div class="flex flex-col md:flex-row items-center md:items-start mb-16 relative">
                    <div class="w-full md:w-1/2 md:pr-16 text-center md:text-right" data-aos="fade-right">
                        <div class="text-indigo-400 font-bold text-2xl md:text-base mb-2 md:mb-1">2010</div>
                        <h3 class="text-xl font-bold text-white mb-1">
                            <span x-show="lang === 'en'">Early Journey</span>
                            <span x-show="lang === 'id'" x-cloak>Awal Perjalanan</span>
                        </h3>
                        <div class="text-slate-500 text-xs mb-2 uppercase tracking-widest">
                            <span x-show="lang === 'en'">Local Business & Blogging</span>
                            <span x-show="lang === 'id'" x-cloak>Bisnis Lokal & Blogging</span>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            <span x-show="lang === 'en'">Started my journey by managing local businesses and joining blogger communities, starting from scratch to managing over 20+ websites.</span>
                            <span x-show="lang === 'id'" x-cloak>Awal perjalanan mengelola bisnis lokal dan bergabung dengan komunitas blogger, start dari nol hingga mengelola lebih dari 20+ web.</span>
                        </p>
                    </div>
                    <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-1 z-10 w-5 h-5 rounded-full bg-indigo-500 border-4 border-slate-900 shadow-[0_0_18px_rgba(99,102,241,0.8)]" data-aos="zoom-in"></div>
                    <div class="hidden md:block w-1/2 pl-16"></div>
                </div>

                <!-- 2021 - Kanan -->
                <div class="flex flex-col md:flex-row items-center md:items-start mb-16 relative">
                    <div class="hidden md:block w-1/2 pr-16"></div>
                    <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-1 z-10 w-5 h-5 rounded-full bg-cyan-500 border-4 border-slate-900 shadow-[0_0_18px_rgba(6,182,212,0.8)]" data-aos="zoom-in"></div>
                    <div class="w-full md:w-1/2 md:pl-16 text-center md:text-left" data-aos="fade-left">
                        <div class="text-cyan-400 font-bold text-2xl md:text-base mb-2 md:mb-1">2021</div>
                        <h3 class="text-xl font-bold text-white mb-1">
                            <span x-show="lang === 'en'">Career Transition</span>
                            <span x-show="lang === 'id'" x-cloak>Transisi Karir</span>
                        </h3>
                        <div class="text-slate-500 text-xs mb-2 uppercase tracking-widest">
                            <span x-show="lang === 'en'">Solopreneur & Developer</span>
                            <span x-show="lang === 'id'" x-cloak>Solopreneur & Desainer</span>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            <span x-show="lang === 'en'">Transitioned into a full-time blogger, solopreneur, web designer, and began acquiring clients for Google and Meta Ads advertising.</span>
                            <span x-show="lang === 'id'" x-cloak>Transisi karir menjadi solopreneur, full blogger, web desain, dan mulai mendapatkan klien untuk beriklan di Google dan Meta.</span>
                        </p>
                    </div>
                </div>

                <!-- 2024 - Kiri -->
                <div class="flex flex-col md:flex-row items-center md:items-start mb-16 relative">
                    <div class="w-full md:w-1/2 md:pr-16 text-center md:text-right" data-aos="fade-right">
                        <div class="text-purple-400 font-bold text-2xl md:text-base mb-2 md:mb-1">2024</div>
                        <h3 class="text-xl font-bold text-white mb-1">
                            <span x-show="lang === 'en'">Key Milestone</span>
                            <span x-show="lang === 'id'" x-cloak>Pencapaian Penting</span>
                        </h3>
                        <div class="text-slate-500 text-xs mb-2 uppercase tracking-widest">
                            <span x-show="lang === 'en'">Scaling & Growth</span>
                            <span x-show="lang === 'id'" x-cloak>Skala & Pertumbuhan</span>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            <span x-show="lang === 'en'">Managed multiple clients from various business sectors and government services. Handled over 100+ websites and received an award from a travel business client.</span>
                            <span x-show="lang === 'id'" x-cloak>Mengelola beberapa klien dari beragam sektor bisnis dan layanan pemerintah. Sempat mengelola 100+ website serta mendapatkan penghargaan dari salah satu klien di bisnis travel.</span>
                        </p>
                    </div>
                    <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-1 z-10 w-5 h-5 rounded-full bg-purple-500 border-4 border-slate-900 shadow-[0_0_18px_rgba(168,85,247,0.8)]" data-aos="zoom-in"></div>
                    <div class="hidden md:block w-1/2 pl-16"></div>
                </div>

                <!-- 2026 - Kanan -->
                <div class="flex flex-col md:flex-row items-center md:items-start relative">
                    <div class="hidden md:block w-1/2 pr-16"></div>
                    <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-1 z-10 w-5 h-5 rounded-full bg-green-500 border-4 border-slate-900 shadow-[0_0_18px_rgba(34,197,94,0.8)]" data-aos="zoom-in"></div>
                    <div class="w-full md:w-1/2 md:pl-16 text-center md:text-left" data-aos="fade-left">
                        <div class="text-green-400 font-bold text-2xl md:text-base mb-2 md:mb-1">2026</div>
                        <h3 class="text-xl font-bold text-white mb-1">
                            <span x-show="lang === 'en'">Current Position</span>
                            <span x-show="lang === 'id'" x-cloak>Posisi Saat Ini</span>
                        </h3>
                        <div class="text-slate-500 text-xs mb-2 uppercase tracking-widest">
                            <span x-show="lang === 'en'">Agency Founder & AI Solutions</span>
                            <span x-show="lang === 'id'" x-cloak>Pendiri Agensi & Solusi AI</span>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            <span x-show="lang === 'en'">Running my own digital marketing agency, developing WordPress plugins, and managing AI and automation-driven businesses and clients.</span>
                            <span x-show="lang === 'id'" x-cloak>Memiliki agensi digital marketing sendiri, mulai membuat WP plugin, mengelola bisnis dan klien berbasis AI dan otomatisasi.</span>
                        </p>
                    </div>
                </div>

            </div><!-- end desktop -->



        </div>
    <!-- Footer / Contact -->
    <footer id="contact" class="py-24 bg-slate-950 text-center border-t border-slate-900">
        <div class="max-w-3xl mx-auto px-6" data-aos="zoom-in" data-aos-duration="1000">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                <span x-show="lang === 'en'">Ready to Elevate Your Digital Performance?</span>
                <span x-show="lang === 'id'" x-cloak>Siap Meningkatkan Performa Digital Anda?</span>
            </h2>
            <p class="text-slate-400 mb-10 text-lg max-w-xl mx-auto">
                <span x-show="lang === 'en'">Let's discuss how I can help your team achieve marketing goals through solid web foundations and accurate data.</span>
                <span x-show="lang === 'id'" x-cloak>Mari berdiskusi tentang bagaimana saya bisa membantu tim Anda mencapai target pemasaran melalui web yang solid dan data yang akurat.</span>
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a id="email-me-now" href="mailto:admin@buatwebsitepro.id"
                   class="inline-flex items-center gap-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-10 py-5 rounded-full font-bold text-lg shadow-lg hover:shadow-[0_0_35px_rgba(99,102,241,0.6)] transition-all duration-300 hover:-translate-y-1">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span x-show="lang === 'en'">Email Me Now</span>
                    <span x-show="lang === 'id'" x-cloak>Kirim Email Sekarang</span>
                </a>
                <a href="https://www.linkedin.com/in/angi-permana/" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-3 bg-[#0A66C2] hover:bg-[#004182] text-white px-10 py-5 rounded-full font-bold text-lg shadow-lg hover:shadow-[0_0_35px_rgba(10,102,194,0.5)] transition-all duration-300 hover:-translate-y-1">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.25V10.9H6.46M7.86 6.78a1.63 1.63 0 1 0 0 3.26 1.63 1.63 0 0 0 0-3.26Z"/>
                    </svg>
                    <span>Connect on LinkedIn</span>
                </a>
            </div>
            <div class="mt-20 text-slate-600 text-sm font-medium">
                &copy; {{ date('Y') }} Angi Permana. Built with Laravel &amp; TailwindCSS.
            </div>
        </div>
    </footer>

    <!-- Chatbot Widget -->
    @include('partials.chatbot')

    <!-- Initialize AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 100,
        });
    </script>
</body>
</html>

