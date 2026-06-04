<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile App Development Company | Hire Mobile App Developers | Ajath Infotech UAE</title>
    <meta name="description" content="Ajathinfotech Technologies LLC is a leading mobile app development company in UAE offering iOS, Android, React Native, Flutter, Hybrid & Enterprise app development. Hire mobile app developers in Dubai.">
    <meta name="keywords" content="Mobile App Development Company, Hire Mobile App Developers, iOS app development, Android app development, Cross-platform app development, React Native, Flutter, Dubai UAE">
    <meta property="og:title" content="Mobile App Development Company | Hire Mobile App Developers">
    <meta property="og:description" content="Ajathinfotech Technologies LLC is leading mobile app development company in UAE offering hire mobile app developers for Hybrid, Native, React Native Platforms.">
    <meta property="og:url" content="https://lp.ajath.ae.org/apps">
    <link rel="canonical" href="https://lp.ajath.ae.org/apps">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4, .font-heading { font-family: 'Outfit', sans-serif; }
        .glass-card { background: rgba(255,255,255,0.75); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(199,196,216,0.3); }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #F8F9FF; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NK097QPKWC"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','G-NK097QPKWC');</script>
</head>
<body class="bg-[#F8F9FF] text-[#464555] antialiased overflow-x-hidden" x-data="{ mobileMenuOpen: false }">

    <!-- Ambient blurs -->
    <div class="fixed top-0 right-0 w-[700px] h-[700px] bg-[#DAE2FD] rounded-full filter blur-[130px] opacity-30 pointer-events-none -z-10 translate-x-1/3 -translate-y-1/3"></div>
    <div class="fixed top-[60vh] left-0 w-[500px] h-[500px] bg-purple-200 rounded-full filter blur-[100px] opacity-20 pointer-events-none -z-10 -translate-x-1/3"></div>

    <!-- Fixed Header -->
    <header class="fixed top-0 inset-x-0 z-50 border-b border-slate-200/50 bg-white/85 backdrop-blur-md transition-all">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="/" class="flex items-center hover:opacity-90 transition-opacity">
                <img src="/logo-dark.png" alt="Ajath Infotech Logo" class="h-10 w-auto">
            </a>
            <nav class="hidden md:flex items-center space-x-8 font-medium text-[#464555]">
                <a href="#services" class="hover:text-[#3525CD] transition-colors">Services</a>
                <a href="#industries" class="hover:text-[#3525CD] transition-colors">Industries</a>
                <a href="#engagement" class="hover:text-[#3525CD] transition-colors">Engagement</a>
                <a href="#about" class="hover:text-[#3525CD] transition-colors">About</a>
                <a href="#contact" class="hover:text-[#3525CD] transition-colors">Contact</a>
            </nav>
            <div class="hidden md:flex items-center">
                <a href="#lead-form" class="inline-flex items-center justify-center px-6 py-3 font-semibold text-white bg-gradient-to-r from-[#4F46E5] to-[#A855F7] rounded-full shadow-lg hover:scale-[1.02] transition-all whitespace-nowrap">
                    Get Free Consultation
                </a>
            </div>
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 rounded-lg text-[#0B1C30] hover:bg-slate-100 transition-all" aria-label="Toggle Menu">
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display:none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        <div x-show="mobileMenuOpen" x-transition class="md:hidden bg-white/95 border-b border-slate-200 shadow-xl" style="display:none;">
            <div class="px-6 py-6 space-y-4 font-semibold text-[#464555]">
                <a @click="mobileMenuOpen=false" href="#services" class="block py-2 hover:text-[#3525CD] border-b border-slate-100">Services</a>
                <a @click="mobileMenuOpen=false" href="#industries" class="block py-2 hover:text-[#3525CD] border-b border-slate-100">Industries</a>
                <a @click="mobileMenuOpen=false" href="#engagement" class="block py-2 hover:text-[#3525CD] border-b border-slate-100">Engagement</a>
                <a @click="mobileMenuOpen=false" href="#about" class="block py-2 hover:text-[#3525CD] border-b border-slate-100">About</a>
                <a @click="mobileMenuOpen=false" href="#contact" class="block py-2 hover:text-[#3525CD] border-b border-slate-100">Contact</a>
                <a @click="mobileMenuOpen=false" href="#lead-form" class="inline-flex w-full items-center justify-center px-6 py-3 font-semibold text-white bg-gradient-to-r from-[#4F46E5] to-[#A855F7] rounded-xl mt-4">Get Free Consultation</a>
            </div>
        </div>
    </header>

    <!-- ═══════ HERO ═══════ -->
    <section id="home" class="relative min-h-screen flex items-center pt-20 overflow-hidden bg-[#0B1C30]">
        <!-- Hero background pattern -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(53,37,205,0.35),transparent_60%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,rgba(107,0,183,0.2),transparent_60%)]"></div>
        <div class="absolute inset-0" style="background-image: radial-gradient(rgba(255,255,255,0.04) 1px,transparent 1px); background-size: 32px 32px;"></div>

        <div class="max-w-7xl mx-auto px-6 py-20 w-full">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Text Content -->
                <div class="space-y-8 text-center lg:text-left">
                    <!-- Award Badges Row -->
                    <div class="flex flex-wrap justify-center lg:justify-start gap-3">
                        <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-2">
                            <div class="flex gap-0.5">
                                @for($i=0;$i<5;$i++)<svg class="w-3 h-3 fill-amber-400" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>@endfor
                            </div>
                            <span class="text-white text-xs font-semibold">Top Developer on Clutch</span>
                        </div>
                        <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-2">
                            <span class="text-white text-xs font-semibold">GoodFirms Top App Dev</span>
                        </div>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight">
                        Top Mobile App<br>
                        <span class="bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Development Company</span>
                    </h1>
                    <p class="text-lg text-indigo-200 font-light leading-relaxed max-w-xl mx-auto lg:mx-0">
                        Hire Mobile App Developers — Custom app solutions designed to empower businesses across UAE & GCC. Our expert team creates innovative and scalable iOS, Android, React Native & AI-powered applications.
                    </p>

                    <!-- Stats Row -->
                    <div class="grid grid-cols-3 gap-4 pt-4">
                        <div class="text-center lg:text-left">
                            <span class="block text-3xl font-black text-white">15+</span>
                            <span class="text-indigo-300 text-xs font-medium">Years of Experience</span>
                        </div>
                        <div class="text-center lg:text-left">
                            <span class="block text-3xl font-black text-white">300+</span>
                            <span class="text-indigo-300 text-xs font-medium">Apps Delivered</span>
                        </div>
                        <div class="text-center lg:text-left">
                            <span class="block text-3xl font-black text-white">200+</span>
                            <span class="text-indigo-300 text-xs font-medium">Happy Clients</span>
                        </div>
                    </div>

                    <!-- Award logos -->
                    <div class="flex flex-wrap justify-center lg:justify-start items-center gap-6 pt-2 opacity-70">
                        <span class="text-white text-xs font-bold uppercase tracking-widest">Mobile App Daily</span>
                        <span class="text-indigo-300">|</span>
                        <span class="text-white text-xs font-bold uppercase tracking-widest">Clutch</span>
                        <span class="text-indigo-300">|</span>
                        <span class="text-white text-xs font-bold uppercase tracking-widest">GoodFirms</span>
                        <span class="text-indigo-300">|</span>
                        <span class="text-white text-xs font-bold uppercase tracking-widest">Software World</span>
                    </div>
                </div>

                <!-- Right: Lead Form -->
                <div id="lead-form" class="glass-card p-8 rounded-3xl shadow-2xl border border-white/20 bg-white/10 backdrop-blur-xl">
                    <h3 class="text-2xl font-bold text-white tracking-tight">Get a Free Quote</h3>
                    <p class="text-sm text-indigo-200 mt-1 mb-6">Detailed proposal within 24 hours.</p>

                    <form class="space-y-4" x-data="{ name:'', email:'', phone:'', message:'', budget:'AED 15,000 - 30,000', loading:false }"
                        @submit.prevent="loading=true; fetch('/contact',{method:'POST',headers:{'Content-Type':'application/json','X-CSRF-TOKEN':'{{ csrf_token() }}'},body:JSON.stringify({name,email,phone,message,budget})}).then(r=>{loading=false;if(r.ok){window.location.href='/thank-you';}else{alert('Please check all fields.');}}).catch(()=>{loading=false;alert('Network error. Please try again.');})">
                        <div>
                            <label class="block text-xs font-bold text-indigo-200 uppercase tracking-wider mb-1">Name</label>
                            <input type="text" x-model="name" placeholder="Your Full Name" required class="w-full px-4 py-3 rounded-lg border border-white/20 bg-white/10 text-white placeholder-indigo-300 text-sm outline-none focus:border-indigo-400 focus:ring-1 focus:ring-indigo-400 transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-indigo-200 uppercase tracking-wider mb-1">Email Address</label>
                            <input type="email" x-model="email" placeholder="name@example.com" required class="w-full px-4 py-3 rounded-lg border border-white/20 bg-white/10 text-white placeholder-indigo-300 text-sm outline-none focus:border-indigo-400 focus:ring-1 focus:ring-indigo-400 transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-indigo-200 uppercase tracking-wider mb-1">Phone Number</label>
                            <input type="tel" x-model="phone" placeholder="+971 50 XXX XXXX" required class="w-full px-4 py-3 rounded-lg border border-white/20 bg-white/10 text-white placeholder-indigo-300 text-sm outline-none focus:border-indigo-400 focus:ring-1 focus:ring-indigo-400 transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-indigo-200 uppercase tracking-wider mb-1">Tell Us Your Industry</label>
                            <textarea x-model="message" rows="3" placeholder="E.g. Retail, Healthcare, Fintech..." class="w-full px-4 py-3 rounded-lg border border-white/20 bg-white/10 text-white placeholder-indigo-300 text-sm outline-none focus:border-indigo-400 focus:ring-1 focus:ring-indigo-400 transition-all resize-none"></textarea>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-indigo-200 uppercase tracking-wider mb-1">Project Budget (AED)</label>
                            <select x-model="budget" class="w-full px-4 py-3 rounded-lg border border-white/20 bg-white/10 text-white text-sm outline-none focus:border-indigo-400 transition-all">
                                <option class="text-[#0B1C30]">AED 15,000 - 30,000</option>
                                <option class="text-[#0B1C30]">AED 30,000 - 50,000</option>
                                <option class="text-[#0B1C30]">AED 50,000 - 100,000</option>
                                <option class="text-[#0B1C30]">AED 100,000+</option>
                            </select>
                        </div>
                        <button type="submit" :disabled="loading" class="w-full py-4 text-center font-bold text-white bg-gradient-to-r from-[#3525CD] to-[#6B00B7] rounded-xl hover:from-[#4F46E5] hover:to-[#A855F7] shadow-lg hover:scale-[1.01] transition-all disabled:opacity-50">
                            <span x-show="!loading">Send Message →</span>
                            <span x-show="loading" style="display:none;">Sending...</span>
                        </button>
                        <p class="text-[11px] text-center text-indigo-300 mt-2">We respect your privacy. All inquiries are covered by NDA.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════ FEATURED INFO STRIP ═══════ -->
    <section class="py-10 bg-white border-b border-slate-200/60">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 text-sm">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-50 flex items-center justify-center text-[#3525CD]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div>
                        <p class="font-bold text-[#0B1C30]">15+ Years of Experience</p>
                        <p class="text-slate-400 text-xs">Development team operates with proven methodologies</p>
                    </div>
                </div>
                <div class="hidden md:block w-px h-10 bg-slate-200"></div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-50 flex items-center justify-center text-[#3525CD]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    </div>
                    <div>
                        <a href="tel:+971504313932" class="font-bold text-[#0B1C30] hover:text-[#3525CD] transition-colors">+971 50 431 3932</a>
                        <p class="text-slate-400 text-xs">Call or WhatsApp us</p>
                    </div>
                </div>
                <div class="hidden md:block w-px h-10 bg-slate-200"></div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-50 flex items-center justify-center text-[#3525CD]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <div>
                        <a href="mailto:info@ajath.ae" class="font-bold text-[#0B1C30] hover:text-[#3525CD] transition-colors">info@ajath.ae</a>
                        <p class="text-slate-400 text-xs">Email us anytime</p>
                    </div>
                </div>
                <div class="hidden md:block w-px h-10 bg-slate-200"></div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-50 flex items-center justify-center text-[#3525CD]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <div>
                        <p class="font-bold text-[#0B1C30]">Dubai, UAE</p>
                        <p class="text-slate-400 text-xs">Office 304, Coastal Building, Al Quasis</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════ SERVICES ═══════ -->
    <section id="services" class="py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-xs font-bold uppercase tracking-widest text-[#3525CD] bg-indigo-50 border border-indigo-100 px-3 py-1 rounded-full">Our Expertise</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0B1C30] tracking-tight">Mobile App Development Services</h2>
                <p class="text-slate-500 font-light">From native iOS & Android to cross-platform and AI-powered solutions — we cover every dimension of mobile engineering.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Android -->
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:shadow-2xl hover:shadow-indigo-600/5 group hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center text-green-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M9 16h6m-3-12a9 9 0 019 9v3a3 3 0 01-3 3H9a3 3 0 01-3-3v-3a9 9 0 019-9z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B1C30] mb-3">Android App Development</h3>
                    <p class="text-sm text-slate-500 font-light leading-relaxed mb-6">Scalable Kotlin-based Android apps optimized for performance across the diverse Android device ecosystem in UAE and GCC.</p>
                    <a href="/android-development" class="inline-flex items-center text-sm font-semibold text-[#3525CD] group-hover:translate-x-1 transition-transform">
                        Explore <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
                <!-- iOS -->
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:shadow-2xl hover:shadow-indigo-600/5 group hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-indigo-50 flex items-center justify-center text-[#3525CD] mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B1C30] mb-3">iOS App Development</h3>
                    <p class="text-sm text-slate-500 font-light leading-relaxed mb-6">Premium Swift & SwiftUI iPhone and iPad applications with sophisticated UX for the elite UAE audience.</p>
                    <a href="/ios-development" class="inline-flex items-center text-sm font-semibold text-[#3525CD] group-hover:translate-x-1 transition-transform">
                        Explore <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
                <!-- React Native -->
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:shadow-2xl hover:shadow-indigo-600/5 group hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-cyan-50 flex items-center justify-center text-cyan-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B1C30] mb-3">React Native Development</h3>
                    <p class="text-sm text-slate-500 font-light leading-relaxed mb-6">Cross-platform apps built with Meta's React Native for 90%+ code reuse across iOS and Android without sacrificing performance.</p>
                    <a href="/cross-platform" class="inline-flex items-center text-sm font-semibold text-[#3525CD] group-hover:translate-x-1 transition-transform">
                        Explore <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
                <!-- Flutter -->
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:shadow-2xl hover:shadow-indigo-600/5 group hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B1C30] mb-3">Flutter Development</h3>
                    <p class="text-sm text-slate-500 font-light leading-relaxed mb-6">Google's Flutter framework for pixel-perfect, natively compiled apps on iOS, Android, web, and desktop from a single codebase.</p>
                    <a href="/cross-platform" class="inline-flex items-center text-sm font-semibold text-[#3525CD] group-hover:translate-x-1 transition-transform">
                        Explore <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
                <!-- Enterprise -->
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:shadow-2xl hover:shadow-indigo-600/5 group hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center text-amber-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B1C30] mb-3">Enterprise Mobile Apps</h3>
                    <p class="text-sm text-slate-500 font-light leading-relaxed mb-6">Custom B2B enterprise solutions with SSO, role-based access, ERP integrations, and enterprise-grade security for UAE corporations.</p>
                    <a href="/#lead-form" class="inline-flex items-center text-sm font-semibold text-[#3525CD] group-hover:translate-x-1 transition-transform">
                        Get Pricing <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
                <!-- AI Apps -->
                <div class="bg-[#0B1C30] text-white p-8 rounded-3xl hover:shadow-2xl group hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
                    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(79,70,229,0.2),transparent_60%)]"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#3525CD] flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform relative z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 relative z-10">AI-Powered Apps</h3>
                    <p class="text-sm text-indigo-200 font-light leading-relaxed mb-6 relative z-10">Generative AI, LLM integrations, predictive analytics and computer vision — built into your mobile ecosystem for the next generation of smart solutions.</p>
                    <a href="/ai-powered-apps" class="inline-flex items-center text-sm font-semibold text-[#A855F7] group-hover:translate-x-1 transition-transform relative z-10">
                        Learn More <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════ ABOUT ═══════ -->
    <section id="about" class="py-20 lg:py-28 bg-white border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-6">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#3525CD] bg-indigo-50 border border-indigo-100 px-3 py-1 rounded-full">About Us</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0B1C30] tracking-tight">Ajathinfotech Technologies LLC</h2>
                    <p class="text-slate-500 font-light leading-relaxed">A technology-driven IT services company delivering scalable web, mobile, and software solutions for startups and enterprises worldwide. Founded in Dubai, we have been at the forefront of mobile innovation for over 15 years.</p>
                    <p class="text-slate-500 font-light leading-relaxed">Our expert mobile app development company in UAE creates innovative and scalable applications to help you grow — from early-stage MVP to enterprise-scale platforms.</p>
                    <div class="grid grid-cols-2 gap-4 pt-4">
                        <div class="bg-slate-50 rounded-2xl p-5 border border-slate-100">
                            <span class="block text-3xl font-black text-[#3525CD]">15+</span>
                            <span class="text-xs text-slate-500 font-medium">Years in Business</span>
                        </div>
                        <div class="bg-slate-50 rounded-2xl p-5 border border-slate-100">
                            <span class="block text-3xl font-black text-[#3525CD]">300+</span>
                            <span class="text-xs text-slate-500 font-medium">Apps Delivered</span>
                        </div>
                        <div class="bg-slate-50 rounded-2xl p-5 border border-slate-100">
                            <span class="block text-3xl font-black text-[#3525CD]">50+</span>
                            <span class="text-xs text-slate-500 font-medium">Countries Served</span>
                        </div>
                        <div class="bg-slate-50 rounded-2xl p-5 border border-slate-100">
                            <span class="block text-3xl font-black text-[#3525CD]">4.8★</span>
                            <span class="text-xs text-slate-500 font-medium">Clutch Rating</span>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-6 bg-slate-50 rounded-2xl border border-slate-100">
                        <div class="w-10 h-10 rounded-full bg-indigo-50 border border-indigo-100 flex items-center justify-center text-[#3525CD] shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#0B1C30]">Arabic & English Expertise</h4>
                            <p class="text-sm text-slate-500 font-light mt-1">Full RTL Arabic and LTR English UI/UX designed for the UAE and GCC markets.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-6 bg-slate-50 rounded-2xl border border-slate-100">
                        <div class="w-10 h-10 rounded-full bg-indigo-50 border border-indigo-100 flex items-center justify-center text-[#3525CD] shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#0B1C30]">Local Payment Gateways</h4>
                            <p class="text-sm text-slate-500 font-light mt-1">Integrated with Telr, Checkout.com, Network International, and Stripe for UAE.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-6 bg-slate-50 rounded-2xl border border-slate-100">
                        <div class="w-10 h-10 rounded-full bg-indigo-50 border border-indigo-100 flex items-center justify-center text-[#3525CD] shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#0B1C30]">NDA & Full IP Ownership</h4>
                            <p class="text-sm text-slate-500 font-light mt-1">All source code and intellectual property is fully transferred to you on project completion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════ INDUSTRIES ═══════ -->
    <section id="industries" class="py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-xs font-bold uppercase tracking-widest text-[#3525CD] bg-indigo-50 border border-indigo-100 px-3 py-1 rounded-full">Industries</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0B1C30] tracking-tight">Industries We Serve</h2>
                <p class="text-slate-500 font-light">We build apps for E-commerce, Games, Lifestyle, Business, Shopping, Travel, Health & Fitness, Music & Events, and more.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
                @php
                $industries = [
                    ['icon'=>'🛒','label'=>'E-Commerce','color'=>'bg-orange-50 text-orange-600'],
                    ['icon'=>'🎮','label'=>'Games','color'=>'bg-purple-50 text-purple-600'],
                    ['icon'=>'✈️','label'=>'Travel','color'=>'bg-blue-50 text-blue-600'],
                    ['icon'=>'❤️','label'=>'Health & Fitness','color'=>'bg-rose-50 text-rose-600'],
                    ['icon'=>'💼','label'=>'Business & ERP','color'=>'bg-indigo-50 text-indigo-600'],
                    ['icon'=>'🛍️','label'=>'Shopping','color'=>'bg-pink-50 text-pink-600'],
                    ['icon'=>'🎵','label'=>'Music & Events','color'=>'bg-violet-50 text-violet-600'],
                    ['icon'=>'📸','label'=>'Photo & Video','color'=>'bg-amber-50 text-amber-600'],
                    ['icon'=>'🏠','label'=>'Real Estate','color'=>'bg-teal-50 text-teal-600'],
                    ['icon'=>'🏥','label'=>'Healthcare','color'=>'bg-emerald-50 text-emerald-600'],
                ];
                @endphp
                @foreach($industries as $industry)
                <div class="bg-white rounded-2xl p-6 border border-slate-100 hover:shadow-lg hover:-translate-y-0.5 transition-all text-center group">
                    <div class="text-3xl mb-3">{{ $industry['icon'] }}</div>
                    <p class="text-sm font-bold text-[#0B1C30]">{{ $industry['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ═══════ ENGAGEMENT MODELS ═══════ -->
    <section id="engagement" class="py-20 lg:py-28 bg-[#F0F2FA]/60 border-y border-slate-200/40">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-xs font-bold uppercase tracking-widest text-[#3525CD] bg-indigo-50 border border-indigo-100 px-3 py-1 rounded-full">Engagement</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0B1C30] tracking-tight">Flexible Engagement Models</h2>
                <p class="text-slate-500 font-light">Choose the hiring model that fits your project scope, budget, and timeline.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Fixed Price -->
                <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm hover:shadow-xl transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-indigo-50 flex items-center justify-center text-[#3525CD] mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B1C30] mb-3">Fixed Price</h3>
                    <p class="text-sm text-slate-500 font-light leading-relaxed mb-6">Best for well-defined projects with clear requirements. You get a fixed cost, fixed timeline, and zero billing surprises.</p>
                    <ul class="space-y-2 text-sm text-slate-500 mb-8">
                        <li class="flex items-center gap-2"><span class="text-[#3525CD]">✓</span>Defined scope & deliverables</li>
                        <li class="flex items-center gap-2"><span class="text-[#3525CD]">✓</span>Fixed budget & timeline</li>
                        <li class="flex items-center gap-2"><span class="text-[#3525CD]">✓</span>3-month free warranty</li>
                    </ul>
                    <a href="#lead-form" class="inline-flex items-center justify-center w-full py-3 font-bold text-[#3525CD] border-2 border-[#3525CD] rounded-xl hover:bg-[#3525CD] hover:text-white transition-all">
                        Get Quote
                    </a>
                </div>
                <!-- Dedicated Team -->
                <div class="bg-[#0B1C30] rounded-3xl p-8 border border-slate-800 shadow-2xl relative overflow-hidden hover:-translate-y-1 transition-all">
                    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(53,37,205,0.3),transparent_60%)]"></div>
                    <div class="absolute top-6 right-6 text-xs font-bold text-indigo-300 bg-indigo-900/50 px-3 py-1 rounded-full border border-indigo-700/50">MOST POPULAR</div>
                    <div class="w-14 h-14 rounded-2xl bg-[#3525CD] flex items-center justify-center text-white mb-6 relative z-10">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 relative z-10">Dedicated Team</h3>
                    <p class="text-sm text-indigo-200 font-light leading-relaxed mb-6 relative z-10">Hire a dedicated team of developers, designers, and QA engineers exclusively working on your project.</p>
                    <ul class="space-y-2 text-sm text-indigo-200 mb-8 relative z-10">
                        <li class="flex items-center gap-2"><span class="text-indigo-400">✓</span>Full-time dedicated resources</li>
                        <li class="flex items-center gap-2"><span class="text-indigo-400">✓</span>Direct team communication</li>
                        <li class="flex items-center gap-2"><span class="text-indigo-400">✓</span>Flexible scaling up/down</li>
                    </ul>
                    <a href="#lead-form" class="inline-flex items-center justify-center w-full py-3 font-bold text-white bg-gradient-to-r from-[#4F46E5] to-[#A855F7] rounded-xl hover:scale-[1.02] transition-all relative z-10">
                        Hire Team
                    </a>
                </div>
                <!-- Time & Material -->
                <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm hover:shadow-xl transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-amber-50 flex items-center justify-center text-amber-600 mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B1C30] mb-3">Time & Material</h3>
                    <p class="text-sm text-slate-500 font-light leading-relaxed mb-6">Ideal for agile projects where requirements evolve. Pay only for actual hours worked with full transparency.</p>
                    <ul class="space-y-2 text-sm text-slate-500 mb-8">
                        <li class="flex items-center gap-2"><span class="text-[#3525CD]">✓</span>Pay per hour / sprint</li>
                        <li class="flex items-center gap-2"><span class="text-[#3525CD]">✓</span>Full flexibility on scope</li>
                        <li class="flex items-center gap-2"><span class="text-[#3525CD]">✓</span>Weekly billing reports</li>
                    </ul>
                    <a href="#lead-form" class="inline-flex items-center justify-center w-full py-3 font-bold text-[#3525CD] border-2 border-[#3525CD] rounded-xl hover:bg-[#3525CD] hover:text-white transition-all">
                        Discuss Rates
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════ PROCESS ═══════ -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-xs font-bold uppercase tracking-widest text-[#3525CD] bg-indigo-50 border border-indigo-100 px-3 py-1 rounded-full">Workflow</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0B1C30] tracking-tight">Our App Development Process</h2>
                <p class="text-slate-500 font-light">A five-stage agile blueprint with complete transparency at every sprint cycle.</p>
            </div>
            <div class="relative grid grid-cols-1 sm:grid-cols-5 gap-8 pt-8">
                <div class="absolute top-[52px] left-[10%] right-[10%] h-0.5 bg-indigo-100 hidden sm:block -z-10"></div>
                @php
                $steps = [
                    ['n'=>'01','t'=>'Discovery','d'=>'Requirements, architecture & NDA signed'],
                    ['n'=>'02','t'=>'UX Design','d'=>'Wireframes, prototype & client approval'],
                    ['n'=>'03','t'=>'Development','d'=>'Agile sprints with weekly builds'],
                    ['n'=>'04','t'=>'QA & Testing','d'=>'Manual + automated testing on real devices'],
                    ['n'=>'05','t'=>'Launch','d'=>'Store submission & 3-month free support'],
                ];
                @endphp
                @foreach($steps as $s)
                <div class="text-center group space-y-4">
                    <div class="w-16 h-16 rounded-full bg-white border-4 border-indigo-100 group-hover:border-[#3525CD] flex items-center justify-center font-bold text-xl text-[#3525CD] shadow-md mx-auto transition-colors duration-300 relative z-10">{{ $s['n'] }}</div>
                    <h4 class="font-bold text-[#0B1C30]">{{ $s['t'] }}</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">{{ $s['d'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ═══════ FINAL CTA ═══════ -->
    <section id="contact" class="py-20 bg-[#0B1C30]">
        <div class="max-w-4xl mx-auto px-6 text-center space-y-6">
            <span class="text-xs font-bold uppercase tracking-widest text-indigo-300 bg-indigo-900/40 border border-indigo-800 px-3 py-1 rounded-full">Contact Us</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">Have an App Idea?</h2>
            <p class="text-indigo-200 max-w-xl mx-auto font-light leading-relaxed">Connect with our consultants in Dubai and let's craft a bespoke proposal within 24 hours. No obligation, full NDA.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#lead-form" class="inline-flex items-center justify-center px-10 py-4 font-bold text-white bg-gradient-to-r from-[#4F46E5] to-[#A855F7] rounded-xl shadow-lg hover:scale-[1.02] transition-all whitespace-nowrap">
                    Start Your Project
                </a>
                <a href="tel:+971504313932" class="inline-flex items-center justify-center px-10 py-4 font-bold text-white border-2 border-white/20 rounded-xl hover:border-white/60 hover:scale-[1.02] transition-all whitespace-nowrap">
                    +971 50 431 3932
                </a>
            </div>
            <!-- Social Links -->
            <div class="flex justify-center gap-4 pt-4">
                <a href="https://www.facebook.com/ajathinfotech/" target="_blank" class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all" aria-label="Facebook">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                </a>
                <a href="https://twitter.com/Ajathinfotech" target="_blank" class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all" aria-label="Twitter">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg>
                </a>
                <a href="https://www.linkedin.com/company/ajath-solutions/" target="_blank" class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all" aria-label="LinkedIn">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                </a>
                <a href="https://www.instagram.com/ajathinfotech/" target="_blank" class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all" aria-label="Instagram">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" fill="none" stroke="currentColor" stroke-width="2"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="currentColor" stroke-width="2"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-10 bg-[#0B1C30] text-slate-400 border-t border-slate-800 text-xs">
        <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <img src="/logo-dark.png" alt="Ajath" class="h-8 w-auto opacity-60">
                <p>&copy; 2026 Ajathinfotech Technologies LLC. All rights reserved.</p>
            </div>
            <div class="flex gap-4">
                <a href="/" class="hover:text-white transition-colors">Home</a>
                <a href="#lead-form" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#lead-form" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>
</html>
