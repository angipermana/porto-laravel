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
                <a href="#store" class="hover:text-white transition">
                    <span x-show="lang === 'en'">Services & Products</span>
                    <span x-show="lang === 'id'" x-cloak>Jasa & Produk</span>
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

    <!-- Services & Products Section -->
    <section id="store" class="py-24 bg-slate-950 relative overflow-hidden border-t border-slate-900">
        <!-- Background light blur -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-indigo-900/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50 -z-10"></div>
        
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">
                    <span x-show="lang === 'en'">Services & Digital Products</span>
                    <span x-show="lang === 'id'" x-cloak>Jasa & Produk Digital</span>
                </h2>
                <p class="text-slate-400 max-w-2xl mx-auto text-sm md:text-base">
                    <span x-show="lang === 'en'">Premium services and digital solutions ready to help scale your business performance.</span>
                    <span x-show="lang === 'id'" x-cloak>Layanan premium dan solusi digital siap pakai untuk membantu meningkatkan performa bisnis Anda.</span>
                </p>
            </div>

            <!-- Grid: 1 col on mobile, 2 cols on tablet, 3 cols on desktop -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1: Jasa SEO (Indigo) -->
                <div data-aos="fade-up" data-aos-delay="100" class="bg-slate-900/60 backdrop-blur-sm border border-slate-800 p-5 md:p-8 rounded-2xl hover:border-indigo-500/50 hover:shadow-lg hover:shadow-indigo-500/10 transition duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded-md bg-indigo-500/10 text-indigo-400 text-xs font-semibold mb-6">
                            <span x-show="lang === 'en'">Organic Growth</span>
                            <span x-show="lang === 'id'" x-cloak>Traffic Organik</span>
                        </div>
                        <div class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-indigo-500/20 transition">
                            <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m4-3H6"></path></svg>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-white mb-2">
                            <span x-show="lang === 'en'">SEO Optimization</span>
                            <span x-show="lang === 'id'" x-cloak>Jasa SEO</span>
                        </h3>
                        <p class="text-slate-400 text-xs md:text-sm leading-relaxed mb-6">
                            <span x-show="lang === 'en'">Improve your organic rank and gain recurring profit-making visitors on search engines.</span>
                            <span x-show="lang === 'id'" x-cloak>Tingkatkan peringkat organik dan datangkan pengunjung potensial secara gratis dari Google.</span>
                        </p>
                        <ul class="text-xs md:text-sm text-slate-500 space-y-2 mb-6">
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">Keyword Research</span><span x-show="lang === 'id'" x-cloak>Riset Kata Kunci</span></li>
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">On-Page & Technical SEO</span><span x-show="lang === 'id'" x-cloak>SEO On-Page & Teknis</span></li>
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">Local Link Building</span><span x-show="lang === 'id'" x-cloak>Link Building Lokal</span></li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281234567890?text=Halo%20Mas%20Angi,%20saya%20tertarik%20dengan%20Jasa%20SEO" target="_blank" class="flex items-center justify-center gap-2 w-full py-2.5 px-4 rounded-xl bg-indigo-500/10 hover:bg-indigo-600 text-indigo-400 hover:text-white border border-indigo-500/20 hover:border-indigo-500 text-xs md:text-sm font-semibold transition duration-300">
                        <span x-show="lang === 'en'">Order / Consult</span>
                        <span x-show="lang === 'id'" x-cloak>Pesan / Konsultasi</span>
                    </a>
                </div>

                <!-- Card 2: Jasa Google Ads (Cyan) -->
                <div data-aos="fade-up" data-aos-delay="200" class="bg-slate-900/60 backdrop-blur-sm border border-slate-800 p-5 md:p-8 rounded-2xl hover:border-cyan-500/50 hover:shadow-lg hover:shadow-cyan-500/10 transition duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded-md bg-cyan-500/10 text-cyan-400 text-xs font-semibold mb-6">
                            <span x-show="lang === 'en'">Instant Leads</span>
                            <span x-show="lang === 'id'" x-cloak>Paling Populer</span>
                        </div>
                        <div class="w-12 h-12 bg-cyan-500/10 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-cyan-500/20 transition">
                            <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path></svg>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-white mb-2">
                            <span x-show="lang === 'en'">Google Ads Campaign</span>
                            <span x-show="lang === 'id'" x-cloak>Jasa Google Ads</span>
                        </h3>
                        <p class="text-slate-400 text-xs md:text-sm leading-relaxed mb-6">
                            <span x-show="lang === 'en'">Get high conversion potential traffic to your site with optimized ad spend.</span>
                            <span x-show="lang === 'id'" x-cloak>Hadirkan prospek bisnis instan dengan target iklan yang presisi dan budget efisien.</span>
                        </p>
                        <ul class="text-xs md:text-sm text-slate-500 space-y-2 mb-6">
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">Search & Performance Max</span><span x-show="lang === 'id'" x-cloak>Iklan Search & PMax</span></li>
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">Conversion Rate Optimization</span><span x-show="lang === 'id'" x-cloak>Optimasi Landing Page</span></li>
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">Weekly Optimization Reports</span><span x-show="lang === 'id'" x-cloak>Laporan & Analisa Mingguan</span></li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281234567890?text=Halo%20Mas%20Angi,%20saya%20tertarik%20dengan%20Jasa%20Google%20Ads" target="_blank" class="flex items-center justify-center gap-2 w-full py-2.5 px-4 rounded-xl bg-cyan-500/10 hover:bg-cyan-600 text-cyan-400 hover:text-white border border-cyan-500/20 hover:border-cyan-500 text-xs md:text-sm font-semibold transition duration-300">
                        <span x-show="lang === 'en'">Order / Consult</span>
                        <span x-show="lang === 'id'" x-cloak>Pesan / Konsultasi</span>
                    </a>
                </div>

                <!-- Card 3: Jasa Web Desain (Purple) -->
                <div data-aos="fade-up" data-aos-delay="300" class="bg-slate-900/60 backdrop-blur-sm border border-slate-800 p-5 md:p-8 rounded-2xl hover:border-purple-500/50 hover:shadow-lg hover:shadow-purple-500/10 transition duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded-md bg-purple-500/10 text-purple-400 text-xs font-semibold mb-6">
                            <span x-show="lang === 'en'">High Conversion</span>
                            <span x-show="lang === 'id'" x-cloak>Premium Design</span>
                        </div>
                        <div class="w-12 h-12 bg-purple-500/10 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-purple-500/20 transition">
                            <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm0 8a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zm10 0a1 1 0 011-1h4a1 1 0 011 1v6a1 1 0 01-1 1h-4a1 1 0 01-1-1v-6z"></path></svg>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-white mb-2">
                            <span x-show="lang === 'en'">Web Design & Dev</span>
                            <span x-show="lang === 'id'" x-cloak>Jasa Web Desain</span>
                        </h3>
                        <p class="text-slate-400 text-xs md:text-sm leading-relaxed mb-6">
                            <span x-show="lang === 'en'">Speedy, gorgeous, and SEO-optimized business websites or landing pages.</span>
                            <span x-show="lang === 'id'" x-cloak>Jasa pembuatan website/landing page premium yang responsif, kencang, & SEO-friendly.</span>
                        </p>
                        <ul class="text-xs md:text-sm text-slate-500 space-y-2 mb-6">
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">High-converting UX/UI</span><span x-show="lang === 'id'" x-cloak>Desain UI/UX Konversi Tinggi</span></li>
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">Mobile-First Layouts</span><span x-show="lang === 'id'" x-cloak>Layout Mobile-First Fast</span></li>
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">Speed Optimized (90+)</span><span x-show="lang === 'id'" x-cloak>Optimasi Pagespeed (Skor 90+)</span></li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281234567890?text=Halo%20Mas%20Angi,%20saya%20tertarik%20dengan%20Jasa%20Web%20Desain" target="_blank" class="flex items-center justify-center gap-2 w-full py-2.5 px-4 rounded-xl bg-purple-500/10 hover:bg-purple-600 text-purple-400 hover:text-white border border-purple-500/20 hover:border-purple-500 text-xs md:text-sm font-semibold transition duration-300">
                        <span x-show="lang === 'en'">Order / Consult</span>
                        <span x-show="lang === 'id'" x-cloak>Pesan / Konsultasi</span>
                    </a>
                </div>

                <!-- Card 4: Jasa Optimasi GMB (Pink) -->
                <div data-aos="fade-up" data-aos-delay="100" class="bg-slate-900/60 backdrop-blur-sm border border-slate-800 p-5 md:p-8 rounded-2xl hover:border-pink-500/50 hover:shadow-lg hover:shadow-pink-500/10 transition duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded-md bg-pink-500/10 text-pink-400 text-xs font-semibold mb-6">
                            <span x-show="lang === 'en'">Local Dominance</span>
                            <span x-show="lang === 'id'" x-cloak>Target Lokal</span>
                        </div>
                        <div class="w-12 h-12 bg-pink-500/10 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-pink-500/20 transition">
                            <svg class="w-6 h-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-white mb-2">
                            <span x-show="lang === 'en'">Google Maps / GMB</span>
                            <span x-show="lang === 'id'" x-cloak>Jasa Optimasi GMB</span>
                        </h3>
                        <p class="text-slate-400 text-xs md:text-sm leading-relaxed mb-6">
                            <span x-show="lang === 'en'">Rank your business higher on local Google Maps listings to draw nearby customers.</span>
                            <span x-show="lang === 'id'" x-cloak>Optimalkan Google Maps & Google Bisnisku Anda agar mudah ditemukan pelanggan sekitar.</span>
                        </p>
                        <ul class="text-xs md:text-sm text-slate-500 space-y-2 mb-6">
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">Local Pack Search Rank</span><span x-show="lang === 'id'" x-cloak>Ranking Peta di Penelusuran</span></li>
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">Review Strategy Setup</span><span x-show="lang === 'id'" x-cloak>Strategi Manajemen Ulasan</span></li>
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">Listing Audit & Optimization</span><span x-show="lang === 'id'" x-cloak>Audit & Posting Rutin Profil</span></li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281234567890?text=Halo%20Mas%20Angi,%20saya%20tertarik%20dengan%20Jasa%20Optimasi%20GMB" target="_blank" class="flex items-center justify-center gap-2 w-full py-2.5 px-4 rounded-xl bg-pink-500/10 hover:bg-pink-600 text-pink-400 hover:text-white border border-pink-500/20 hover:border-pink-500 text-xs md:text-sm font-semibold transition duration-300">
                        <span x-show="lang === 'en'">Order / Consult</span>
                        <span x-show="lang === 'id'" x-cloak>Pesan / Konsultasi</span>
                    </a>
                </div>

                <!-- Card 5: Jasa Web Analytics (Emerald) -->
                <div data-aos="fade-up" data-aos-delay="200" class="bg-slate-900/60 backdrop-blur-sm border border-slate-800 p-5 md:p-8 rounded-2xl hover:border-emerald-500/50 hover:shadow-lg hover:shadow-emerald-500/10 transition duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded-md bg-emerald-500/10 text-emerald-400 text-xs font-semibold mb-6">
                            <span x-show="lang === 'en'">Data Analytics</span>
                            <span x-show="lang === 'id'" x-cloak>Berbasis Data</span>
                        </div>
                        <div class="w-12 h-12 bg-emerald-500/10 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-emerald-500/20 transition">
                            <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-white mb-2">
                            <span x-show="lang === 'en'">Analytics & Tracking</span>
                            <span x-show="lang === 'id'" x-cloak>Jasa Web Analytics</span>
                        </h3>
                        <p class="text-slate-400 text-xs md:text-sm leading-relaxed mb-6">
                            <span x-show="lang === 'en'">Setup precise conversion tracking with GA4 & GTM to make solid business actions.</span>
                            <span x-show="lang === 'id'" x-cloak>Setup integrasi Google Analytics 4, Tag Manager & Pixel Iklan dengan data 100% presisi.</span>
                        </p>
                        <ul class="text-xs md:text-sm text-slate-500 space-y-2 mb-6">
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">GA4 E-commerce Tracking</span><span x-show="lang === 'id'" x-cloak>Tracking Penjualan E-commerce</span></li>
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">Google Tag Manager Setup</span><span x-show="lang === 'id'" x-cloak>Setup Google Tag Manager</span></li>
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">Pixel & API Conversions</span><span x-show="lang === 'id'" x-cloak>Pixel & Conversion API (Meta/Ads)</span></li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281234567890?text=Halo%20Mas%20Angi,%20saya%20tertarik%20dengan%20Jasa%20Web%20Analytics" target="_blank" class="flex items-center justify-center gap-2 w-full py-2.5 px-4 rounded-xl bg-emerald-500/10 hover:bg-emerald-600 text-emerald-400 hover:text-white border border-emerald-500/20 hover:border-emerald-500 text-xs md:text-sm font-semibold transition duration-300">
                        <span x-show="lang === 'en'">Order / Consult</span>
                        <span x-show="lang === 'id'" x-cloak>Pesan / Konsultasi</span>
                    </a>
                </div>

                <!-- Card 6: WP & WA Plugins (Amber) -->
                <div data-aos="fade-up" data-aos-delay="300" class="bg-slate-900/60 backdrop-blur-sm border border-slate-800 p-5 md:p-8 rounded-2xl hover:border-amber-500/50 hover:shadow-lg hover:shadow-amber-500/10 transition duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded-md bg-amber-500/10 text-amber-400 text-xs font-semibold mb-6">
                            <span x-show="lang === 'en'">Digital Products</span>
                            <span x-show="lang === 'id'" x-cloak>Produk Digital</span>
                        </div>
                        <div class="w-12 h-12 bg-amber-500/10 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-amber-500/20 transition">
                            <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.933 12.8a1 1 0 000-1.6L6.6 7.2A1 1 0 005 8v8a1 1 0 001.6.8l5.333-4zm7.6 0a1 1 0 000-1.6l-5.333-4A1 1 0 0012.6 8v8a1 1 0 001.6.8l5.333-4z"></path></svg>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-white mb-2">
                            <span x-show="lang === 'en'">WP & WA Plugins</span>
                            <span x-show="lang === 'id'" x-cloak>WordPress & WA Plugins</span>
                        </h3>
                        <p class="text-slate-400 text-xs md:text-sm leading-relaxed mb-6">
                            <span x-show="lang === 'en'">Ready-to-use WordPress and WhatsApp tools to automate and scale your daily operations.</span>
                            <span x-show="lang === 'id'" x-cloak>Plugin WordPress premium & solusi rotator / integrasi WhatsApp otomatis siap pakai.</span>
                        </p>
                        <ul class="text-xs md:text-sm text-slate-500 space-y-2 mb-6">
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">WhatsApp Rotator System</span><span x-show="lang === 'id'" x-cloak>Sistem Rotator WhatsApp</span></li>
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">Conversion Form Integrations</span><span x-show="lang === 'id'" x-cloak>Integrasi Form Ke WhatsApp</span></li>
                            <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span x-show="lang === 'en'">License & Lifetime Updates</span><span x-show="lang === 'id'" x-cloak>Lisensi & Update Lifetime</span></li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6281234567890?text=Halo%20Mas%20Angi,%20saya%20tertarik%20dengan%20Produk%20Plugins" target="_blank" class="flex items-center justify-center gap-2 w-full py-2.5 px-4 rounded-xl bg-amber-500/10 hover:bg-amber-600 text-amber-400 hover:text-white border border-amber-500/20 hover:border-amber-500 text-xs md:text-sm font-semibold transition duration-300">
                        <span x-show="lang === 'en'">Buy / Inquire</span>
                        <span x-show="lang === 'id'" x-cloak>Beli / Tanya Detail</span>
                    </a>
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

            <!-- Timeline -->
            <div class="block relative">
                <!-- Garis vertikal tengah -->
                <div class="absolute left-1/2 -translate-x-1/2 top-0 bottom-0" style="width:2px; background:#334155;"></div>

                <!-- 2004 - Kiri -->
                <div class="flex items-start mb-16 relative">
                    <div class="w-1/2 pr-16 text-right" data-aos="fade-right">
                        <div class="text-indigo-400 font-bold text-base mb-1">2004</div>
                        <h3 class="text-xl font-bold text-white mb-1">
                            <span x-show="lang === 'en'">Early Career</span>
                            <span x-show="lang === 'id'" x-cloak>Awal Perjalanan</span>
                        </h3>
                        <div class="text-slate-500 text-xs mb-2 uppercase tracking-widest">Perusahaan / Instansi</div>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            <span x-show="lang === 'en'">Describe your role and key achievements here.</span>
                            <span x-show="lang === 'id'" x-cloak>Jelaskan peran dan pencapaian utama Anda di sini.</span>
                        </p>
                    </div>
                    <div class="absolute left-1/2 -translate-x-1/2 top-1 z-10 w-5 h-5 rounded-full bg-indigo-500 border-4 border-slate-900 shadow-[0_0_18px_rgba(99,102,241,0.8)]" data-aos="zoom-in"></div>
                    <div class="w-1/2 pl-16"></div>
                </div>

                <!-- 2018 - Kanan -->
                <div class="flex items-start mb-16 relative">
                    <div class="w-1/2 pr-16"></div>
                    <div class="absolute left-1/2 -translate-x-1/2 top-1 z-10 w-5 h-5 rounded-full bg-cyan-500 border-4 border-slate-900 shadow-[0_0_18px_rgba(6,182,212,0.8)]" data-aos="zoom-in"></div>
                    <div class="w-1/2 pl-16 text-left" data-aos="fade-left">
                        <div class="text-cyan-400 font-bold text-base mb-1">2018</div>
                        <h3 class="text-xl font-bold text-white mb-1">
                            <span x-show="lang === 'en'">Key Milestone</span>
                            <span x-show="lang === 'id'" x-cloak>Pencapaian Penting</span>
                        </h3>
                        <div class="text-slate-500 text-xs mb-2 uppercase tracking-widest">Perusahaan / Instansi</div>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            <span x-show="lang === 'en'">Describe your role and key achievements here.</span>
                            <span x-show="lang === 'id'" x-cloak>Jelaskan peran dan pencapaian utama Anda di sini.</span>
                        </p>
                    </div>
                </div>

                <!-- 2022 - Kiri -->
                <div class="flex items-start mb-16 relative">
                    <div class="w-1/2 pr-16 text-right" data-aos="fade-right">
                        <div class="text-purple-400 font-bold text-base mb-1">2022</div>
                        <h3 class="text-xl font-bold text-white mb-1">
                            <span x-show="lang === 'en'">Career Transition</span>
                            <span x-show="lang === 'id'" x-cloak>Transisi Karir</span>
                        </h3>
                        <div class="text-slate-500 text-xs mb-2 uppercase tracking-widest">Perusahaan / Instansi</div>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            <span x-show="lang === 'en'">Describe your role and key achievements here.</span>
                            <span x-show="lang === 'id'" x-cloak>Jelaskan peran dan pencapaian utama Anda di sini.</span>
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
                        <div class="text-slate-500 text-xs mb-2 uppercase tracking-widest">Freelance / Contract</div>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            <span x-show="lang === 'en'">Describe your role and key achievements here.</span>
                            <span x-show="lang === 'id'" x-cloak>Jelaskan peran dan pencapaian utama Anda di sini.</span>
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
