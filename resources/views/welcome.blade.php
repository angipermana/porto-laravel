<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Angi Permana | Web & Digital Marketing Expert</title>
    <meta name="description" content="Portfolio of Angi Permana - Google Ads Manager, WordPress Developer, and Conversion-focused Web Analyst.">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Outfit', sans-serif; overflow-x: hidden; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-slate-950 text-slate-200 antialiased selection:bg-indigo-500 selection:text-white" x-data="{ lang: 'en' }">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 top-0 border-b border-slate-800 bg-slate-950/80 backdrop-blur-md" data-aos="fade-down" data-aos-duration="800">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="text-2xl font-bold text-white tracking-tighter hover:scale-105 transition">
                Angi<span class="text-indigo-500">Permana.</span>
            </div>
            
            <div class="hidden md:flex space-x-8 text-sm font-medium text-slate-300">
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

            <div class="flex items-center gap-4">
                <div class="bg-slate-900 border border-slate-700 rounded-full p-1 flex items-center text-xs font-bold cursor-pointer relative" @click="lang = lang === 'en' ? 'id' : 'en'">
                    <div class="absolute w-1/2 h-full top-0 bg-indigo-600 rounded-full transition-transform duration-300 ease-in-out" :class="lang === 'en' ? 'translate-x-0 left-0' : 'translate-x-full left-0'"></div>
                    <div class="px-3 py-1.5 relative z-10 transition-colors" :class="lang === 'en' ? 'text-white' : 'text-slate-400'">EN</div>
                    <div class="px-3 py-1.5 relative z-10 transition-colors" :class="lang === 'id' ? 'text-white' : 'text-slate-400'">ID</div>
                </div>
                <a href="#contact" class="hidden sm:inline-block bg-indigo-600 hover:bg-indigo-500 text-white px-5 py-2.5 rounded-full text-sm font-semibold transition shadow-lg shadow-indigo-500/30">
                    <span x-show="lang === 'en'">Hire Me</span>
                    <span x-show="lang === 'id'" x-cloak>Rekrut Saya</span>
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
                    <a href="#contact" class="w-full sm:w-auto bg-slate-800 hover:bg-slate-700 text-white px-8 py-4 rounded-full font-semibold transition border border-slate-700 text-center hover:scale-105">
                        <span x-show="lang === 'en'">Contact Me</span>
                        <span x-show="lang === 'id'" x-cloak>Hubungi Saya</span>
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
                    <p class="text-slate-400 text-sm leading-relaxed mb-4">
                        <span x-show="lang === 'en'">Managing advertising campaigns (Search, Display, Video) with efficient budgeting. Focus on decreasing CPA and increasing ROAS.</span>
                        <span x-show="lang === 'id'" x-cloak>Mengelola kampanye periklanan (Search, Display, Video) dengan budget efisien. Fokus pada penurunan CPA dan peningkatan ROAS.</span>
                    </p>
                    <ul class="text-sm text-slate-500 space-y-2">
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

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Case Study 1 -->
                <div data-aos="fade-right" data-aos-delay="100" class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden group hover:-translate-y-2 transition duration-500 hover:shadow-2xl hover:shadow-indigo-500/20">
                    <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center border-b border-slate-800">
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/20 to-slate-900 z-0"></div>
                        <svg class="w-16 h-16 text-indigo-500/50 relative z-10 group-hover:scale-110 transition duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <div class="p-8">
                        <div class="flex gap-2 mb-4">
                            <span class="px-3 py-1 bg-indigo-500/10 text-indigo-400 text-xs font-bold rounded-full border border-indigo-500/20">Google Ads</span>
                            <span class="px-3 py-1 bg-purple-500/10 text-purple-400 text-xs font-bold rounded-full border border-purple-500/20">Analytics</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">
                            <span x-show="lang === 'en'">E-Commerce ROAS Optimization</span>
                            <span x-show="lang === 'id'" x-cloak>Optimasi ROAS E-Commerce</span>
                        </h3>
                        <div class="space-y-4 mb-6">
                            <div class="bg-slate-950 p-4 rounded-lg border border-slate-800 group-hover:border-slate-700 transition">
                                <span class="text-slate-500 text-xs uppercase tracking-wider font-bold block mb-1">
                                    <span x-show="lang === 'en'">The Challenge</span>
                                    <span x-show="lang === 'id'" x-cloak>Tantangan</span>
                                </span>
                                <span class="text-slate-300 text-sm font-medium">
                                    <span x-show="lang === 'en'">High CPA ($45) and low conversion tracking accuracy.</span>
                                    <span x-show="lang === 'id'" x-cloak>CPA tinggi (Biaya per Akuisisi mahal) dan tracking tidak akurat.</span>
                                </span>
                            </div>
                            <div class="bg-indigo-950/30 p-4 rounded-lg border border-indigo-500/30 flex justify-between items-center group-hover:bg-indigo-900/40 transition">
                                <div>
                                    <span class="text-indigo-400 text-xs uppercase tracking-wider font-bold block mb-1">
                                        <span x-show="lang === 'en'">The Result</span>
                                        <span x-show="lang === 'id'" x-cloak>Hasil Akhir</span>
                                    </span>
                                    <span class="text-white font-bold text-xl">ROAS +250%</span>
                                </div>
                                <div class="text-right">
                                    <span class="text-indigo-400 text-xs uppercase tracking-wider font-bold block mb-1">CPA</span>
                                    <span class="text-white font-bold text-xl">
                                        <span x-show="lang === 'en'">-60%</span>
                                        <span x-show="lang === 'id'" x-cloak>Turun 60%</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div data-aos="fade-left" data-aos-delay="200" class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden group hover:-translate-y-2 transition duration-500 hover:shadow-2xl hover:shadow-cyan-500/20">
                    <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center border-b border-slate-800">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-600/20 to-slate-900 z-0"></div>
                        <svg class="w-16 h-16 text-cyan-500/50 relative z-10 group-hover:scale-110 transition duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <div class="p-8">
                        <div class="flex gap-2 mb-4">
                            <span class="px-3 py-1 bg-cyan-500/10 text-cyan-400 text-xs font-bold rounded-full border border-cyan-500/20">WordPress</span>
                            <span class="px-3 py-1 bg-green-500/10 text-green-400 text-xs font-bold rounded-full border border-green-500/20">Speed</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">
                            <span x-show="lang === 'en'">B2B Landing Page Revamp</span>
                            <span x-show="lang === 'id'" x-cloak>Perombakan Landing Page B2B</span>
                        </h3>
                        <div class="space-y-4 mb-6">
                            <div class="bg-slate-950 p-4 rounded-lg border border-slate-800 group-hover:border-slate-700 transition">
                                <span class="text-slate-500 text-xs uppercase tracking-wider font-bold block mb-1">
                                    <span x-show="lang === 'en'">The Challenge</span>
                                    <span x-show="lang === 'id'" x-cloak>Tantangan</span>
                                </span>
                                <span class="text-slate-300 text-sm font-medium">
                                    <span x-show="lang === 'en'">Bloated theme causing 6s load time & high bounce rate.</span>
                                    <span x-show="lang === 'id'" x-cloak>Theme berat membuat loading 6 detik & bounce rate tinggi.</span>
                                </span>
                            </div>
                            <div class="bg-cyan-950/30 p-4 rounded-lg border border-cyan-500/30 flex justify-between items-center group-hover:bg-cyan-900/40 transition">
                                <div>
                                    <span class="text-cyan-400 text-xs uppercase tracking-wider font-bold block mb-1">Load Time</span>
                                    <span class="text-white font-bold text-xl">1.2s</span>
                                </div>
                                <div class="text-right">
                                    <span class="text-cyan-400 text-xs uppercase tracking-wider font-bold block mb-1">Web Vitals</span>
                                    <span class="text-white font-bold text-xl">
                                        <span x-show="lang === 'en'">100% Pass</span>
                                        <span x-show="lang === 'id'" x-cloak>Lulus 100%</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="absolute left-1/2 -translate-x-1/2 top-0 bottom-0" style="width:2px; background:#334155;"></div>

                <!-- 2010 - Kiri -->
                <div class="flex items-start mb-16 relative">
                    <div class="w-1/2 pr-16 text-right" data-aos="fade-right">
                        <div class="text-indigo-400 font-bold text-base mb-1">2010</div>
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
                    <div class="absolute left-1/2 -translate-x-1/2 top-1 z-10 w-5 h-5 rounded-full bg-indigo-500 border-4 border-slate-900 shadow-[0_0_18px_rgba(99,102,241,0.8)]" data-aos="zoom-in"></div>
                    <div class="w-1/2 pl-16"></div>
                </div>

                <!-- 2021 - Kanan -->
                <div class="flex items-start mb-16 relative">
                    <div class="w-1/2 pr-16"></div>
                    <div class="absolute left-1/2 -translate-x-1/2 top-1 z-10 w-5 h-5 rounded-full bg-cyan-500 border-4 border-slate-900 shadow-[0_0_18px_rgba(6,182,212,0.8)]" data-aos="zoom-in"></div>
                    <div class="w-1/2 pl-16 text-left" data-aos="fade-left">
                        <div class="text-cyan-400 font-bold text-base mb-1">2021</div>
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
                <div class="flex items-start mb-16 relative">
                    <div class="w-1/2 pr-16 text-right" data-aos="fade-right">
                        <div class="text-purple-400 font-bold text-base mb-1">2024</div>
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
                    <div class="absolute left-1/2 -translate-x-1/2 top-1 z-10 w-5 h-5 rounded-full bg-purple-500 border-4 border-slate-900 shadow-[0_0_18px_rgba(168,85,247,0.8)]" data-aos="zoom-in"></div>
                    <div class="w-1/2 pl-16"></div>
                </div>

                <!-- 2026 - Kanan -->
                <div class="flex items-start relative">
                    <div class="w-1/2 pr-16"></div>
                    <div class="absolute left-1/2 -translate-x-1/2 top-1 z-10 w-5 h-5 rounded-full bg-green-500 border-4 border-slate-900 shadow-[0_0_18px_rgba(34,197,94,0.8)]" data-aos="zoom-in"></div>
                    <div class="w-1/2 pl-16 text-left" data-aos="fade-left">
                        <div class="text-green-400 font-bold text-base mb-1">2026</div>
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
            <a href="mailto:emailanda@example.com"
               class="inline-flex items-center gap-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-12 py-5 rounded-full font-bold text-xl shadow-lg hover:shadow-[0_0_35px_rgba(99,102,241,0.6)] transition-all duration-300 hover:-translate-y-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span x-show="lang === 'en'">Email Me Now</span>
                <span x-show="lang === 'id'" x-cloak>Kirim Email Sekarang</span>
            </a>
            <div class="mt-20 text-slate-600 text-sm font-medium">
                &copy; {{ date('Y') }} Angi Permana. Built with Laravel &amp; TailwindCSS.
            </div>
        </div>
    </footer>

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
