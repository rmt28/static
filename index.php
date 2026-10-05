<!DOCTYPE html>
<html lang="id" class="h-full scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumi Metal | Precision Metal Stamping & Fabrication Solutions</title>

    <!-- module -->
    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/src/main.js"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }

        @keyframes waveMarquee {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-wave-marquee {
            animation: waveMarquee 12s linear infinite;
        }
    </style>
</head>

<body class="min-h-screen font-sans text-slate-gray antialiased bg-white selection:bg-dark/20"
    x-data="{ scrolled: window.scrollY > 20, mobileMenuOpen: false, searchOpen: false }">

    <!-- SEARCH PANEL -->
    <?php include 'components/search.php' ?>

    <!-- Navbar -->
    <header x-cloak @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed top-0 left-0 z-50 w-full transition-all duration-300"
        :class="scrolled ? 'bg-white border-b border-slate-light text-dark shadow-sm' : 'bg-transparent text-white border-b border-transparent'">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 items-center justify-between">

                <!-- Logo Image -->
                <a href="index.html" class="flex items-center group">
                    <div class="h-14 w-auto flex items-center justify-center transition transform scale-90 origin-left">
                        <img :src="scrolled ? 'public/image/logo/logo.png' : 'public/image/logo/logo-white.png'"
                            alt="Rumi Metal Logo" class="h-full w-auto object-contain transition-all duration-300" />
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center gap-7">
                    <a href="index.html"
                        class="relative text-xs font-semibold uppercase tracking-wider pb-1.5 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:origin-left after:scale-x-100 after:transition-transform after:duration-300 after:ease-out after:will-change-transform after:transform-gpu"
                        :class="scrolled ? 'text-dark/80 hover:text-dark after:bg-dark' : 'text-white/80 hover:text-white after:bg-white'">Home</a>

                    <a href="page/about.html"
                        class="relative text-xs font-semibold uppercase tracking-wider pb-1.5 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:origin-left after:scale-x-0 after:transition-transform after:duration-300 after:ease-out hover:after:scale-x-100 after:will-change-transform after:transform-gpu"
                        :class="scrolled ? 'text-dark/80 hover:text-dark after:bg-dark' : 'text-white/80 hover:text-white after:bg-white'">About
                        Us</a>

                    <div class="relative flex items-center" x-data="{ open: false }" @mouseenter="open = true"
                        @mouseleave="open = false">

                        <!-- Main Link Navigasi -->
                        <div class="relative cursor-pointer inline-flex items-center gap-1.5 text-xs font-semibold uppercase tracking-wider pb-1.5 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:origin-left after:scale-x-0 after:transition-transform after:duration-300 after:ease-out hover:after:scale-x-100 after:will-change-transform after:transform-gpu"
                            :class="scrolled ? 'text-dark/80 hover:text-dark after:bg-dark' : 'text-white/80 hover:text-white after:bg-white'">
                            <span>Products</span>
                            <svg class="w-3 h-3 transition-transform duration-300" :class="open ? 'rotate-180' : ''"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>

                        <!-- Floating Dropdown Panel -->
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                            x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                            class="absolute left-0 top-full mt-3 w-44 rounded-xl p-2 shadow-xl bg-white border-blue-gray text-dark border transition-colors duration-300 z-50"
                            style="display: none;">

                            <div class="flex flex-col gap-1">
                                <!-- Dropdown Item 1 -->
                                <a href="page/specifications.html"
                                    class="block w-full px-3 py-2 text-xs font-semibold uppercase tracking-wider text-dark/80 hover:text-dark hover:bg-neutral-100 rounded-lg transition-colors duration-200">
                                    Specifications
                                </a>

                                <!-- Dropdown Item 2 -->
                                <a href="page/catalog.html"
                                    class="block w-full px-3 py-2 text-xs font-semibold uppercase tracking-wider text-dark/80 hover:text-dark hover:bg-neutral-100 rounded-lg transition-colors duration-200">
                                    Catalog
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="page/facilities.html"
                        class="relative text-xs font-semibold uppercase tracking-wider pb-1.5 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:origin-left after:scale-x-0 after:transition-transform after:duration-300 after:ease-out hover:after:scale-x-100 after:will-change-transform after:transform-gpu"
                        :class="scrolled ? 'text-dark/80 hover:text-dark after:bg-dark' : 'text-white/80 hover:text-white after:bg-white'">Facilities</a>

                    <a href="page/process.html"
                        class="relative text-xs font-semibold uppercase tracking-wider pb-1.5 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:origin-left after:scale-x-0 after:transition-transform after:duration-300 after:ease-out hover:after:scale-x-100 after:will-change-transform after:transform-gpu"
                        :class="scrolled ? 'text-dark/80 hover:text-dark after:bg-dark' : 'text-white/80 hover:text-white after:bg-white'">Process</a>

                    <a href="page/qa.html"
                        class="relative text-xs font-semibold uppercase tracking-wider pb-1.5 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:origin-left after:scale-x-0 after:transition-transform after:duration-300 after:ease-out hover:after:scale-x-100 after:will-change-transform after:transform-gpu"
                        :class="scrolled ? 'text-dark/80 hover:text-dark after:bg-dark' : 'text-white/80 hover:text-white after:bg-white'">Quality</a>
                </nav>

                <!-- Search Icon & CTA Button Container -->
                <div class="hidden lg:flex items-center gap-4">
                    <!-- Search Button -->
                    <button type="button" @click="searchOpen = !searchOpen" aria-label="Search"
                        class="p-2.5 rounded-xl transition-colors focus:outline-none"
                        :class="scrolled ? 'text-dark/80 hover:text-dark' : 'text-white/80 hover:text-white'">
                        <i class="fa-solid fa-magnifying-glass text-lg"></i>
                    </button>

                    <!-- CTA Button -->
                    <a href="page/contact.html"
                        class="inline-flex items-center justify-center rounded-full border-2 px-5 py-2.5 text-xs font-bold uppercase tracking-wider transition focus:outline-none"
                        :class="scrolled ? 'text-dark hover:bg-dark border-dark hover:text-white' : 'text-white hover:bg-white border-white hover:text-dark'">
                        Contact Us
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center gap-2 lg:hidden">
                    <!-- Mobile Search Icon -->
                    <button type="button" @click="searchOpen = !searchOpen" aria-label="Search"
                        class="p-2 rounded-xl focus:outline-none transition-colors"
                        :class="scrolled ? 'text-dark/80 hover:text-dark' : 'text-white/80 hover:text-white'">
                        <i class="fa-solid fa-magnifying-glass text-lg"></i>
                    </button>

                    <!-- Mobile Hamburger Button -->
                    <button type="button" @click="mobileMenuOpen = !mobileMenuOpen"
                        class="p-2 rounded-xl focus:outline-none transition-colors"
                        :class="scrolled ? 'text-dark/80 hover:text-dark' : 'text-white/80 hover:text-white'">
                        <i class="fa-solid" :class="mobileMenuOpen ? 'fa-xmark text-xl' : 'fa-bars text-xl'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div x-show="mobileMenuOpen" x-cloak x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="lg:hidden border-b px-4 pt-2 pb-6 space-y-3 transition-colors"
            :class="scrolled ? 'bg-white border-slate-200 text-dark' : 'bg-dark/95 text-white border-white/10'">

            <a href="index.html" @click="mobileMenuOpen = false"
                class="block px-3 py-2 text-sm font-semibold transition-colors"
                :class="scrolled ? 'hover:text-dark' : 'hover:text-white'">Home</a>

            <a href="page/about.html" @click="mobileMenuOpen = false"
                class="block px-3 py-2 text-sm font-semibold opacity-80 transition-colors"
                :class="scrolled ? 'hover:text-dark' : 'hover:text-white'">About Us</a>

            <!-- Mobile Products Accordion -->
            <div x-data="{ mobileProductsOpen: false }" class="space-y-1">
                <button @click="mobileProductsOpen = !mobileProductsOpen" type="button"
                    class="flex items-center justify-between w-full px-3 py-2 text-sm font-semibold opacity-80 transition-colors text-left"
                    :class="scrolled ? 'hover:text-dark' : 'hover:text-white'">
                    <span>Products</span>
                    <svg class="w-4 h-4 transition-transform duration-300"
                        :class="mobileProductsOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Submenu Item (Shape Type & Catalog) -->
                <div x-show="mobileProductsOpen" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-1" class="pl-4 pr-2 space-y-1 border-l-2 my-1"
                    :class="scrolled ? 'border-dark/20' : 'border-white/20'" style="display: none;">

                    <a href="page/specifications.html" @click="mobileMenuOpen = false"
                        class="block px-3 py-2 text-xs font-semibold uppercase tracking-wider opacity-75 transition-colors"
                        :class="scrolled ? 'hover:text-dark' : 'hover:text-white'">
                        Specifications
                    </a>

                    <a href="page/catalog.html" @click="mobileMenuOpen = false"
                        class="block px-3 py-2 text-xs font-semibold uppercase tracking-wider opacity-75 transition-colors"
                        :class="scrolled ? 'hover:text-dark' : 'hover:text-white'">
                        Catalog
                    </a>
                </div>
            </div>

            <a href="page/facilities.html" @click="mobileMenuOpen = false"
                class="block px-3 py-2 text-sm font-semibold opacity-80 transition-colors"
                :class="scrolled ? 'hover:text-dark' : 'hover:text-white'">Facilities</a>

            <a href="page/process.html" @click="mobileMenuOpen = false"
                class="block px-3 py-2 text-sm font-semibold opacity-80 transition-colors"
                :class="scrolled ? 'hover:text-dark' : 'hover:text-white'">Process</a>

            <a href="page/qa.html" @click="mobileMenuOpen = false"
                class="block px-3 py-2 text-sm font-semibold opacity-80 transition-colors"
                :class="scrolled ? 'hover:text-dark' : 'hover:text-white'">Quality</a>

            <div class="pt-2">
                <a href="page/contact.html" @click="mobileMenuOpen = false"
                    class="block text-center w-full rounded-xl border-2 px-5 py-2.5 text-xs font-bold uppercase tracking-wider transition"
                    :class="scrolled ? 'text-dark hover:bg-dark border-dark hover:text-white' : 'text-white hover:bg-white border-white hover:text-dark'">
                    Contact Us
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-dark">

        <!-- Background Image & Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="public/image/section/areapabrik1.webp" alt="Rumi Metal Manufacturing Facility"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-linear-to-t from-dark/90 via-dark/70 to-dark/50"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32 text-center" x-data="{
             text: 'Precision Aluminum Extrusions',
             words: [],
             init() {
                 this.words = this.text.split(' ');
             },
             getCharIndex(wIndex, cIndex) {
                 let count = 0;
                 for (let i = 0; i < wIndex; i++) {
                     count += this.words[i].length;
                 }
                 return count + cIndex;
             }
         }">

            <!-- Company Label -->
            <div class="gsap-hero-label inline-flex items-center gap-2 px-4 py-1.5 mb-4">
                <span class="text-xs font-semibold text-gold uppercase tracking-widest">
                    PT RUMI METAL INDONESIA
                </span>
            </div>

            <!-- Main Heading (Character Entry Animation dengan Alpine.js tetap dipertahankan) -->
            <h1
                class="text-3xl sm:text-5xl lg:text-6xl font-bold leading-tight text-white tracking-tight max-w-4xl mx-auto flex flex-wrap justify-center gap-x-2 sm:gap-x-4">
                <template x-for="(word, wIndex) in words" :key="wIndex">
                    <span class="inline-flex whitespace-nowrap overflow-hidden">
                        <template x-for="(char, cIndex) in word.split('')" :key="cIndex">
                            <span class="inline-block transition-all duration-700 ease-out transform"
                                x-data="{ show: false, idx: 0 }" x-init="
                                  idx = getCharIndex(wIndex, cIndex);
                                  setTimeout(() => show = true, idx * 30 + 100);
                              " :class="show 
                                  ? 'translate-x-0 translate-y-0 opacity-100' 
                                  : (idx % 2 === 0 
                                      ? '-translate-y-6 -translate-x-2 opacity-0' 
                                      : 'translate-y-6 translate-x-2 opacity-0')" x-text="char">
                            </span>
                        </template>
                    </span>
                </template>
            </h1>

            <!-- Subtitle -->
            <p
                class="gsap-hero-subtitle mt-6 text-sm sm:text-base lg:text-lg text-slate-300 leading-relaxed max-w-2xl mx-auto font-light">
                Custom aluminum extrusions built to specification, heat-treated for strength, and tested for demanding
                structural applications.
            </p>

        </div>

        <!-- Bottom Wave Divider -->
        <div class="absolute bottom-0 left-0 right-0 z-20 pointer-events-none">
            <svg class="block w-full h-16 sm:h-24 md:h-32 lg:h-40" viewBox="0 0 1440 300" preserveAspectRatio="none"
                xmlns="http://www.w3.org/2000/svg">
                <!-- Outer Grey Border -->
                <path
                    d="M0 240 H185 C225 240 255 228 292 208 L385 156 C412 140 442 132 477 132 H963 C998 132 1028 140 1055 156 L1148 208 C1185 228 1215 240 1255 240 H1440 V300 H0 Z"
                    fill="#E2E8F0" />
                <!-- Inner White Section -->
                <path
                    d="M0 260 H185 C225 260 255 248 292 228 L385 176 C412 160 442 152 477 152 H963 C998 152 1028 160 1055 176 L1148 228 C1185 248 1215 260 1255 260 H1440 V300 H0 Z"
                    fill="#FFFFFF" />
            </svg>
        </div>

    </section>

    <!-- Products Section -->
    <section class="py-24 sm:py-32 lg:py-40 text-dark relative overflow-hidden">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- MAIN HEADER (Centered) -->
            <div class="text-center max-w-4xl mx-auto mb-16" data-gsap="fade-up" data-duration="2">

                <div class="relative flex items-center justify-center w-full my-8">
                    <div class="grow border-t border-slate-gray/30"></div>
                    <span class="mx-4 shrink-0 text-sm font-bold tracking-widest text-slate-gray uppercase">
                        OUR PRODUCTS
                    </span>
                    <div class="grow border-t border-slate-gray/30"></div>
                </div>

                <!-- Main Heading -->
                <h2
                    class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-dark leading-tight tracking-tight">
                    Custom Aluminum Profiles & Extrusions
                </h2>

                <p
                    class="mt-6 text-slate-gray text-base sm:text-lg leading-relaxed font-sans font-light max-w-3xl mx-auto">
                    PT Rumi Metal Indonesia manufactures custom aluminum extrusions engineered to strict tolerances. We
                    design every profile for high dimensional accuracy, structural strength, and reliable field
                    performance.
                </p>
            </div>

            <div class="relative max-w-5xl mx-auto">

                <!-- Grid 2x2 Gambar Rapat -->
                <div data-gsap="fade-left" data-duration="2"
                    class="grid grid-cols-2 gap-0 max-w-2xl overflow-hidden shadow-sm">

                    <!-- Image 1 -->
                    <div class="w-full aspect-4/3 overflow-hidden group">
                        <img src="public/image/section/rounded1.jpg" alt="img1"
                            class="w-full h-full object-cover transition-transform duration-500" />
                    </div>

                    <!-- Image 2 -->
                    <div class="w-full aspect-4/3 overflow-hidden group">
                        <img src="public/image/section/rounded2.jpg" alt="img2"
                            class="w-full h-full object-cover transition-transform duration-500" />
                    </div>

                    <!-- Image 3 -->
                    <div class="w-full aspect-4/3 overflow-hidden group">
                        <img src="public/image/section/rounded2.jpg" alt="img3"
                            class="w-full h-full object-cover transition-transform duration-500" />
                    </div>

                    <!-- Image 4 -->
                    <div class="w-full aspect-4/3 overflow-hidden group">
                        <img src="public/image/section/rounded1.jpg" alt="img4"
                            class="w-full h-full object-cover transition-transform duration-500" />
                    </div>

                </div>

                <!-- Floating Text Box -->
                <div data-gsap="fade-right" data-duration="2"
                    class="static md:absolute md:top-1/2 md:-translate-y-1/2 md:left-[50%] z-10 bg-white p-6 sm:p-8 lg:p-10 max-w-md mt-4 md:mt-0">

                    <!-- Text Description -->
                    <p class="text-slate-gray text-base sm:text-lg leading-relaxed mb-6 font-sans font-light">
                        We offer a wide range of high-performance products tailored to your needs. You can seamlessly
                        combine different profile types within a single project to match your exact specifications.
                    </p>

                    <!-- Button / Link Box -->
                    <a href="page/specifications.html"
                        class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold uppercase tracking-wider text-gold hover:text-dark transition-colors duration-300 group">
                        <span>Explore Our Products</span>
                        <i
                            class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- About Us Section -->
    <section class="py-24 sm:py-32 lg:py-40 relative overflow-hidden bg-white">

        <!-- Background Image Element -->
        <img src="public/image/section/bg-section.webp" alt="White geometric subtle background"
            class="absolute inset-0 w-full h-full object-cover object-center z-0 opacity-10 pointer-events-none" />

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">

                <!-- LEFT COLUMN: Label & Large Highlighted Title -->
                <div class="lg:col-span-6 gsap-about-left" data-gsap="fade-left" data-duration="2">

                    <div class="relative flex items-center justify-center w-full my-8">
                        <div class="grow border-t border-slate-gray/30"></div>
                        <span class="mx-4 shrink-0 text-sm font-bold tracking-widest text-gray-600 uppercase">
                            WHO WE ARE
                        </span>
                        <div class="grow border-t border-slate-gray/30"></div>
                    </div>

                    <!-- Main Heading with Highlighted Keywords -->
                    <h2
                        class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-dark leading-tight tracking-tight">
                        Your total solution for high-quality <span class="text-gold">aluminum profiles</span> and
                        <span class="text-gold">extrusions</span>
                    </h2>
                </div>

                <!-- RIGHT COLUMN: Narrative Description & Read More Link -->
                <div data-gsap="fade-right" data-duration="2"
                    class="lg:col-span-6 flex flex-col justify-between h-full pt-1 lg:pt-2 gsap-about-right">
                    <div class="space-y-6 text-slate-gray text-base sm:text-lg leading-relaxed font-sans font-light">
                        <p>
                            <strong class="font-semibold text-dark">PT Rumi Metal Indonesia</strong> specializes in
                            the production and supply of high-quality aluminum profiles tailored for demanding
                            industrial and construction applications. We are committed to delivering
                            precision-engineered products that meet rigorous international standards.
                        </p>
                        <p>
                            With facility construction starting in September 2024 and official production launching on
                            16 September 2025, our advanced technology and customer-oriented dedication position us as a
                            trusted partner for structural and architectural projects across Indonesia and beyond.
                        </p>
                    </div>

                    <div class="pt-8">
                        <a href="#about"
                            class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold uppercase tracking-wider text-gold hover:text-dark transition-colors duration-300 group">
                            <span>Read More</span>
                            <i
                                class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- Section: Manufacturing Infrastructure -->
    <section x-data="{ activeMachine: '750mt' }"
        class="relative py-24 sm:py-32 lg:py-40 bg-white text-dark overflow-hidden">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="mb-14 lg:mb-16 gsap-infra-header" data-gsap="fade-up" data-duration="2">

                <div class="relative flex items-center justify-center w-full my-8 max-w-4xl mx-auto mb-16">
                    <div class="grow border-t border-slate-gray/30"></div>
                    <span class="mx-4 shrink-0 text-sm font-bold tracking-widest text-gray-600 uppercase">
                        Infrastructure
                    </span>
                    <div class="grow border-t border-slate-gray/30"></div>
                </div>

                <div
                    class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8 border-b border-blue-gray pb-6">
                    <!-- Main Heading (Kiri) -->
                    <div class="max-w-xl">
                        <h2
                            class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-dark leading-tight tracking-tight">
                            Production Facility
                        </h2>
                    </div>

                    <!-- Supporting Content (Kanan) -->
                    <div class="max-w-md lg:text-right">
                        <p class="text-base sm:text-lg text-slate-gray leading-relaxed font-sans font-light">
                            Extrusion equipment configured for different profile sizes
                            and production requirements.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Equipment Selector -->
            <div class="flex flex-wrap items-center gap-x-8 gap-y-3 mb-10 gsap-infra-selector">

                <button @click="activeMachine = '750mt'" :class="activeMachine === '750mt'
                    ? 'text-dark'
                    : 'text-slate-gray hover:text-dark'"
                    class="group relative pb-2 text-xs sm:text-sm font-mono font-bold uppercase tracking-widest transition-colors duration-200 focus:outline-none">

                    750 MT

                    <span class="absolute left-0 bottom-0 h-0.5 bg-gold transition-all duration-300"
                        :class="activeMachine === '750mt' ? 'w-full' : 'w-0 group-hover:w-full'">
                    </span>

                </button>

                <button @click="activeMachine = '1150mt'" :class="activeMachine === '1150mt'
                    ? 'text-dark'
                    : 'text-slate-gray hover:text-dark'"
                    class="group relative pb-2 text-xs sm:text-sm font-mono font-bold uppercase tracking-widest transition-colors duration-200 focus:outline-none">
                    1150 MT
                    <span class="absolute left-0 bottom-0 h-0.5 bg-gold transition-all duration-300"
                        :class="activeMachine === '1150mt' ? 'w-full' : 'w-0 group-hover:w-full'">
                    </span>

                </button>

            </div>

            <!-- 750 MT -->
            <div x-show="activeMachine === '750mt'" x-cloak x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
                class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-stretch">

                <!-- Machine Image -->
                <div data-gsap="fade-left" data-duration="2"
                    class="lg:col-span-7 relative min-h-90 sm:min-h-115 lg:min-h-140 overflow-hidden bg-black">

                    <img src="public/image/section/areapabrik1.webp" alt="750 MT Aluminum Extrusion Press at Rumi Metal"
                        class="absolute inset-0 w-full h-full object-cover object-center">

                    <div class="absolute inset-0 bg-linear-to-t from-black/45 via-transparent to-transparent"></div>

                    <!-- Image Label -->
                    <div class="absolute left-6 bottom-6 sm:left-8 sm:bottom-8">
                        <div class="mt-2 text-2xl sm:text-3xl font-heading font-semibold text-white">
                            750 MT
                        </div>
                    </div>

                </div>

                <!-- Machine Information -->
                <div data-gsap="fade-right" data-duration="2" class="lg:col-span-5 flex flex-col justify-center">

                    <div>

                        <span
                            class="text-xs sm:text-sm font-bold uppercase tracking-widest text-slate-gray font-mono block mb-2">
                            Aluminum Extrusion Press
                        </span>

                        <h3
                            class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight leading-[1.05] text-dark">
                            750 MT
                        </h3>

                        <p
                            class="mt-5 text-base sm:text-lg text-slate-gray leading-relaxed font-sans font-light max-w-lg">
                            A hydraulic press machine with a pressing force of 750 tons,
                            suitable for producing small to medium-sized aluminum profiles.
                        </p>

                        <!-- Key Specifications -->
                        <div class="mt-10 border-t border-blue-gray">

                            <div class="grid grid-cols-1 sm:grid-cols-3">

                                <div class="py-5 border-b sm:border-b-0 border-blue-gray sm:pr-5">
                                    <span
                                        class="block text-xs font-mono font-bold uppercase tracking-widest text-slate-gray mb-2">
                                        Press Force
                                    </span>

                                    <span class="block text-base sm:text-lg font-semibold text-dark">
                                        750 MT
                                    </span>
                                </div>

                                <div class="py-5 border-b sm:border-b-0 border-blue-gray sm:px-5 sm:border-l">
                                    <span
                                        class="block text-xs font-mono font-bold uppercase tracking-widest text-slate-gray mb-2">
                                        Billet
                                    </span>

                                    <span class="block text-base sm:text-lg font-semibold text-dark">
                                        Φ 100 mm
                                    </span>
                                </div>

                                <div class="py-5 sm:pl-5 sm:border-l border-blue-gray">
                                    <span
                                        class="block text-xs font-mono font-bold uppercase tracking-widest text-slate-gray mb-2">
                                        Motor
                                    </span>

                                    <span class="block text-base sm:text-lg font-semibold text-dark">
                                        90–110 kW
                                    </span>
                                </div>

                            </div>

                        </div>

                        <!-- Application -->
                        <div class="mt-6 pt-5 border-t border-blue-gray">

                            <span
                                class="block text-xs font-mono font-bold uppercase tracking-widest text-slate-gray mb-2">
                                Application
                            </span>

                            <span class="text-base sm:text-lg text-dark font-sans font-light">
                                Small to Medium Precision Profiles
                            </span>

                        </div>

                        <!-- CTA -->
                        <div class="mt-8">

                            <a href="#manufacturing"
                                class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold uppercase tracking-wider text-gold hover:text-dark transition-colors duration-300 group">

                                <span>
                                    View Manufacturing Infrastructure
                                </span>

                                <i
                                    class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- 1150 MT -->
            <div x-show="activeMachine === '1150mt'" x-cloak x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
                class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-stretch">

                <!-- Machine Image -->
                <div data-gsap="fade-left" data-duration="2"
                    class="lg:col-span-7 relative min-h-90 sm:min-h-115 lg:min-h-140 overflow-hidden bg-black">

                    <img src="public/image/section/areapabrik1.webp"
                        alt="1150 MT Aluminum Extrusion Press at Rumi Metal"
                        class="absolute inset-0 w-full h-full object-cover object-center">

                    <div class="absolute inset-0 bg-linear-to-t from-black/45 via-transparent to-transparent"></div>

                    <!-- Image Label -->
                    <div class="absolute left-6 bottom-6 sm:left-8 sm:bottom-8">
                        <div class="mt-2 text-2xl sm:text-3xl font-heading font-semibold text-white">
                            1,150 MT
                        </div>
                    </div>

                </div>

                <!-- Machine Information -->
                <div data-gsap="fade-right" data-duration="2" class="lg:col-span-5 flex flex-col justify-center">

                    <div>

                        <span
                            class="text-xs sm:text-sm font-bold uppercase tracking-widest text-slate-gray font-mono block mb-2">
                            Aluminum Extrusion Press
                        </span>

                        <h3
                            class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading tracking-tight leading-[1.05] text-dark">
                            1,150 MT
                        </h3>

                        <p
                            class="mt-5 text-base sm:text-lg text-slate-gray leading-relaxed font-sans font-light max-w-lg">
                            A hydraulic press machine with a pressing force of 1,150 tons,
                            designed for the production of medium to large-sized aluminum profiles.
                        </p>

                        <!-- Key Specifications -->
                        <div class="mt-10 border-t border-blue-gray">

                            <div class="grid grid-cols-1 sm:grid-cols-3">

                                <div class="py-5 border-b sm:border-b-0 border-blue-gray sm:pr-5">
                                    <span
                                        class="block text-xs font-mono font-bold uppercase tracking-widest text-slate-gray mb-2">
                                        Press Force
                                    </span>

                                    <span class="block text-base sm:text-lg font-semibold text-dark">
                                        1,150 MT
                                    </span>
                                </div>

                                <div class="py-5 border-b sm:border-b-0 border-blue-gray sm:px-5 sm:border-l">
                                    <span
                                        class="block text-xs font-mono font-bold uppercase tracking-widest text-slate-gray mb-2">
                                        Billet
                                    </span>

                                    <span class="block text-base sm:text-lg font-semibold text-dark">
                                        Φ 127 mm
                                    </span>
                                </div>

                                <div class="py-5 sm:pl-5 sm:border-l border-blue-gray">
                                    <span
                                        class="block text-xs font-mono font-bold uppercase tracking-widest text-slate-gray mb-2">
                                        Motor
                                    </span>

                                    <span class="block text-base sm:text-lg font-semibold text-dark">
                                        132-160 kW
                                    </span>
                                </div>

                            </div>

                        </div>

                        <!-- Application -->
                        <div class="mt-6 pt-5 border-t border-blue-gray">

                            <span
                                class="block text-xs font-mono font-bold uppercase tracking-widest text-slate-gray mb-2">
                                Application
                            </span>

                            <span class="text-base sm:text-lg text-dark font-sans font-light">
                                Medium to Large Industrial Profiles
                            </span>

                        </div>

                        <!-- CTA -->
                        <div class="mt-8">
                            <a href="#manufacturing"
                                class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold uppercase tracking-wider text-gold hover:text-dark transition-colors duration-300 group">
                                <span>
                                    View Manufacturing Infrastructure
                                </span>
                                <i
                                    class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- Wave Marquee -->
    <div class="w-full overflow-hidden leading-none py-6 sm:py-8 bg-transparent">
        <div class="flex w-[200%] animate-wave-marquee">
            <!-- SVG 1 -->
            <svg class="w-1/2 h-16 sm:h-24 lg:h-28 shrink-0" viewBox="0 0 1200 200" fill="none"
                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0,100 C300,20 300,180 600,100 C900,20 900,180 1200,100" stroke="currentColor"
                    stroke-width="10" class="text-blue-gray opacity-40" />
                <path d="M0,140 C300,60 300,220 600,140 C900,60 900,220 1200,140" stroke="currentColor"
                    stroke-width="10" class="text-blue-gray opacity-40" />
            </svg>

            <!-- SVG 2 (Duplikat untuk looping seamless) -->
            <svg class="w-1/2 h-16 sm:h-24 lg:h-28 shrink-0" viewBox="0 0 1200 200" fill="none"
                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0,100 C300,20 300,180 600,100 C900,20 900,180 1200,100" stroke="currentColor"
                    stroke-width="10" class="text-blue-gray opacity-40" />
                <path d="M0,140 C300,60 300,220 600,140 C900,60 900,220 1200,140" stroke="currentColor"
                    stroke-width="10" class="text-blue-gray opacity-40" />
            </svg>
        </div>
    </div>

    <!-- Section: Partner & Quality Commitment -->
    <section class="py-24 sm:py-32 bg-white text-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Wrapper Utama Kontainer Gambar & Teks -->
            <div class="relative w-full">

                <!-- Gambar Latar & Dark Overlay -->
                <div data-gsap="fade-down" data-duration="2"
                    class="relative h-95 sm:h-115 lg:h-130 w-full bg-gray-900 overflow-hidden">
                    <img src="public/image/section/section-employee.jpg" alt="Rumi Metal Engineers"
                        class="w-full h-full object-cover object-center opacity-90">
                    <div class="absolute inset-0 bg-black/30"></div>

                    <!-- Judul Utama di Tengah Gambar (Overlay Text) -->
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center px-6 text-center z-10 -translate-y-6 sm:-translate-y-8">
                        <h2 data-gsap="zoom-in" data-duration="2"
                            class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white uppercase tracking-wider font-heading max-w-3xl leading-snug">
                            RELIABLE ALUMINUM COMPONENTS FOR YOUR PROJECT
                        </h2>
                        <!-- Garis Horizontal Putih di Bawah Judul -->
                        <div data-gsap="zoom-out" data-duration="2"
                            class="w-16 h-0.5 bg-white mx-auto mt-4 origin-center"></div>
                    </div>
                </div>

                <!-- Card Putih Deskripsi (Kembali Menumpuk di Bawah Foto) -->
                <div class="relative z-20 max-w-4xl mx-auto -mt-16 sm:-mt-20 px-4 pb-4">
                    <div class="bg-white p-6 sm:p-8 lg:p-10 text-center">
                        <p
                            class="text-base sm:text-lg text-slate-gray leading-relaxed font-sans font-light text-justify sm:text-center">
                            Accurate fabrication and tight tolerances determine how well finished structures perform.
                            Our technical teams assist with project planning, engineering reviews, and quality checks at
                            every step of production. PT Rumi Metal Indonesia provides clear manufacturing
                            specifications and direct support to help our partners build reliable aluminum components.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Section: Pre-Footer Brand Statement -->
    <section
        class="relative w-full min-h-112.5 sm:min-h-125 flex items-center justify-center bg-black overflow-hidden py-24">

        <!-- Background Image dengan Dark Overlay -->
        <img src="public/image/section/section-corporate.png" alt="Rumi Metal"
            class="absolute inset-0 w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Content Container (Centered Text) -->
        <div data-gsap="fade-up" data-duration="3"
            class="gsap-brand-content relative z-10 max-w-5xl mx-auto px-6 text-center text-white font-sans">

            <h2
                class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-white leading-tight tracking-tight max-w-4xl mx-auto mb-10">
                More than just aluminum profiles, we
                forge the foundation of future industry.
            </h2>

            <p
                class="text-base sm:text-lg text-white/90 w-full whitespace-nowrap mx-auto font-sans font-light leading-relaxed">
                Rumi Metal continues to improve quality, advance products, and respond to industrial demands in the new
                era.
            </p>

        </div>

    </section>

    <!-- Section Standards & Certifications -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div data-gsap="fade-up" data-duration="2"
                class="flex flex-col sm:flex-row items-center justify-center gap-6 sm:gap-10 text-center sm:text-left">

                <!-- Logo Sertifikasi -->
                <div class="shrink-0 p-3 flex items-center justify-center">
                    <img src="public/image/logo/logo-iso9001-2015.png" alt="ISO 9001:2015 Certified"
                        class="h-16 sm:h-20 w-auto object-contain">
                </div>

                <div class="hidden sm:block w-px h-16 bg-slate-200"></div>

                <div class="space-y-1">
                    <h3 class="text-xl sm:text-2xl font-bold text-dark tracking-tight font-heading">
                        ISO 9001:2015
                    </h3>
                    <p class="text-base sm:text-lg text-slate-gray font-sans font-light max-w-xl">
                        Our quality management system consistently adheres to international standards for precision
                        manufacturing.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white py-16 border-t border-slate-gray/20 font-sans">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 pb-12">

                <!-- Logo Section (Selalu di Paling Atas Kolom Kiri) -->
                <div class="lg:col-span-6 space-y-6">
                    <!-- Logo Image -->
                    <a href="index.html" class="inline-block">
                        <img src="public/image/logo/logo-white.png" alt="Rumi Metal Indonesia Logo"
                            class="h-16 sm:h-28 w-auto object-contain">
                    </a>

                    <!-- Container Sub-Grid untuk Menyejajarkan Deskripsi dengan Address & Contact -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 pt-2">

                        <!-- Description Area -->
                        <div class="lg:col-span-12 space-y-6">
                            <p class="text-xs sm:text-sm text-slate-gray leading-relaxed max-w-lg font-normal">
                                PT Rumi Metal Indonesia manufactures and supplies aluminum extrusion profiles for
                                industrial and construction projects.
                            </p>

                            <!-- Learn More Link -->
                            <div>
                                <a href="#about"
                                    class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-semibold text-gold hover:opacity-80 transition-opacity">
                                    <span>Learn More</span>
                                    <i class="fa-solid fa-arrow-right text-xs"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Address & Contact Area (Diberi Padding Top di Desktop Agar Sejajar Deskripsi) -->
                <div class="lg:col-span-6 lg:pt-36 grid grid-cols-1 sm:grid-cols-2 gap-8">

                    <!-- Address Column -->
                    <div class="space-y-4">
                        <h3 class="text-sm font-bold text-white tracking-wide">
                            Address
                        </h3>
                        <div class="text-xs sm:text-sm text-slate-gray leading-relaxed space-y-3 font-normal">
                            <p class="text-white">Head Quarter -</p>
                            <p>
                                Kawasan Ngoro Industri Persada Blok J-17A,<br>
                                Ngoro, Kabupaten Mojokerto, Jawa Timur<br>
                                61385
                            </p>
                        </div>
                    </div>

                    <!-- Contact Column -->
                    <div class="space-y-4">
                        <h3 class="text-sm font-bold text-white tracking-wide">
                            Contact
                        </h3>
                        <div class="text-xs sm:text-sm space-y-3 font-normal">
                            <p>
                                <a href="#" class="text-gold hover:underline transition-all">
                                    +62 895-6203-4284
                                </a>
                            </p>
                            <p>
                                <a href="mailto:om@rumimetal.co.id" class="text-gold hover:underline transition-all">
                                    om@rumimetal.co.id
                                </a>
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Bottom Bar / Copyright -->
            <div
                class="pt-8 border-t border-slate-gray/20 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs">
                <a href="#contact" class="font-bold text-gold hover:opacity-80 transition-opacity">
                    Contact Us
                </a>
                <p class="text-slate-gray tracking-wide font-normal">
                    RUMI METAL INDONESIA &copy; 2026. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- GSAP HERO -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            gsap.registerPlugin(ScrollTrigger);

            // Timeline Animasi Hero
            const heroTl = gsap.timeline({
                scrollTrigger: {
                    trigger: '#home',
                    start: 'top 80%',
                    toggleActions: 'play none none reverse'
                }
            });

            // 1. Animasi Company Label (Zoom-in / Scale up)
            heroTl.from('.gsap-hero-label', {
                scale: 0.8,
                opacity: 0,
                duration: 0.6,
                ease: 'back.out(1.7)'
            })
                // 2. Animasi Subtitle (Zoom-in-up / Slide up + Fade in)
                .from('.gsap-hero-subtitle', {
                    y: 30,
                    scale: 0.95,
                    opacity: 0,
                    duration: 0.8,
                    ease: 'power2.out'
                }, '+=0.3'); // Delay 0.3s setelah label agar selaras dengan animasi teks Alpine
        });
    </script>
</body>

</html>