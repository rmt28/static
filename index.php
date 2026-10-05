<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumi Metal | Precision Metal Stamping & Fabrication Solutions</title>

    <meta name="title" content="PT Rumi Metal Indonesia | Precision Metal Stamping & Fabrication Solutions">
    <meta name="description"
        content="Manufacturer and supplier of industrial aluminum in Indonesia. Providing billets, flat bars, and custom extruded profiles. Contact us.">

    <meta property="og:type" content="website">
    <meta property="og:title" content="PT Rumi Metal Indonesia | Precision Metal Stamping & Fabrication Solutions">
    <meta property="og:description"
        content="Manufacturer and supplier of industrial aluminum in Indonesia. Providing billets, flat bars, and custom extruded profiles. Contact us.">
    <meta property="og:image" content="public/image/logo/logo.png">

    <!-- Boot awal: jalan sebelum first paint -->
    <script>
        (function () {
            var d = document.documentElement;
            d.classList.add('js');
            // Cegah browser memulihkan scroll (memicu animasi & loncatan saat refresh)
            if ('scrollRestoration' in history) history.scrollRestoration = 'manual';
            // Failsafe: kalau main.js gagal dimuat, jangan biarkan halaman kosong
            setTimeout(function () {
                if (!d.classList.contains('ready')) d.classList.remove('js');
            }, 6000);
        })();
    </script>

    <!-- Critical CSS: wajib inline agar berlaku sebelum JS/Vite memasang CSS -->
    <style>
        [x-cloak] {
            display: none !important;
        }

        /* Wave marquee */
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

        @media (prefers-reduced-motion: reduce) {
            .animate-wave-marquee {
                animation: none;
            }
        }

        /* Sembunyikan body sampai CSS (Vite) + font + Alpine siap -> tidak ada FOUC */
        .js:not(.ready) body {
            opacity: 0;
        }

        /* Matikan transition selama boot agar header/logo tidak "animasi" ke state awal */
        .js:not(.ready) *,
        .js:not(.ready) *::before,
        .js:not(.ready) *::after {
            transition: none !important;
        }

        /* Elemen yang dianimasikan GSAP disembunyikan dari awal (bukan baru saat JS jalan) */
        .js :is([data-gsap], .gsap-hero-label, .gsap-hero-subtitle, .hero-char) {
            opacity: 0;
            visibility: hidden;
        }
    </style>

    <link rel="preload" as="image" href="public/image/section/areapabrik1.webp" fetchpriority="high">
    <link rel="preload" as="image" href="public/image/logo/logo-white.png">

    <!-- module -->
    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/src/main.js"></script>
</head>

<body class="min-h-screen font-sans text-slate-gray antialiased bg-white selection:bg-dark/20"
    x-data="{ scrolled: window.scrollY > 20, mobileMenuOpen: false, searchOpen: false }">

    <!-- SEARCH PANEL -->
    <?php include 'components/search.php' ?>

    <!-- Navbar -->
    <header @scroll.window.passive="scrolled = (window.pageYOffset > 20)"
        class="fixed top-0 left-0 z-50 w-full transition-all duration-300 bg-transparent text-white border-b border-transparent"
        :class="scrolled ? 'bg-white border-b border-slate-light text-dark shadow-sm' : 'bg-transparent text-white border-b border-transparent'">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 items-center justify-between">

                <!-- Logo Image -->
                <a href="index.php" class="flex items-center group">
                    <div class="relative h-14 w-auto flex items-center justify-center scale-90 origin-left">
                        <img src="public/image/logo/logo-white.png" alt="Rumi Metal Logo" fetchpriority="high"
                            decoding="async" class="h-full w-auto object-contain transition-opacity duration-300"
                            :class="scrolled ? 'opacity-0' : 'opacity-100'" />
                        <img src="public/image/logo/logo.png" alt="" aria-hidden="true" decoding="async"
                            class="absolute inset-0 h-full w-full object-contain transition-opacity duration-300"
                            :class="scrolled ? 'opacity-100' : 'opacity-0'" />
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center gap-7">
                    <a href="index.php"
                        class="relative text-xs font-semibold uppercase tracking-wider pb-1.5 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:origin-left after:scale-x-100 after:transition-transform after:duration-300 after:ease-out after:will-change-transform after:transform-gpu"
                        :class="scrolled ? 'text-dark/80 hover:text-dark after:bg-dark' : 'text-white/80 hover:text-white after:bg-white'">Home</a>

                    <a href="page/about.php"
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
                                <a href="page/specifications.php"
                                    class="block w-full px-3 py-2 text-xs font-semibold uppercase tracking-wider text-dark/80 hover:text-dark hover:bg-neutral-100 rounded-lg transition-colors duration-200">
                                    Specifications
                                </a>

                                <!-- Dropdown Item 2 -->
                                <a href="page/catalog.php"
                                    class="block w-full px-3 py-2 text-xs font-semibold uppercase tracking-wider text-dark/80 hover:text-dark hover:bg-neutral-100 rounded-lg transition-colors duration-200">
                                    Catalog
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="page/facilities.php"
                        class="relative text-xs font-semibold uppercase tracking-wider pb-1.5 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:origin-left after:scale-x-0 after:transition-transform after:duration-300 after:ease-out hover:after:scale-x-100 after:will-change-transform after:transform-gpu"
                        :class="scrolled ? 'text-dark/80 hover:text-dark after:bg-dark' : 'text-white/80 hover:text-white after:bg-white'">Facilities</a>

                    <a href="page/process.php"
                        class="relative text-xs font-semibold uppercase tracking-wider pb-1.5 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:origin-left after:scale-x-0 after:transition-transform after:duration-300 after:ease-out hover:after:scale-x-100 after:will-change-transform after:transform-gpu"
                        :class="scrolled ? 'text-dark/80 hover:text-dark after:bg-dark' : 'text-white/80 hover:text-white after:bg-white'">Process</a>

                    <a href="page/qa.php"
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
                    <a href="page/contact.php"
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
                    <button type="button" @click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle menu"
                        :aria-expanded="mobileMenuOpen" class="p-2 rounded-xl focus:outline-none transition-colors"
                        :class="scrolled ? 'text-dark/80 hover:text-dark' : 'text-white/80 hover:text-white'">
                        <svg x-show="!mobileMenuOpen" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="mobileMenuOpen" x-cloak class="h-5 w-5" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M18 6L6 18" />
                        </svg>
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

            <a href="index.php" @click="mobileMenuOpen = false"
                class="block px-3 py-2 text-sm font-semibold transition-colors"
                :class="scrolled ? 'hover:text-dark' : 'hover:text-white'">Home</a>

            <a href="page/about.php" @click="mobileMenuOpen = false"
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

                    <a href="page/specifications.php" @click="mobileMenuOpen = false"
                        class="block px-3 py-2 text-xs font-semibold uppercase tracking-wider opacity-75 transition-colors"
                        :class="scrolled ? 'hover:text-dark' : 'hover:text-white'">
                        Specifications
                    </a>

                    <a href="page/catalog.php" @click="mobileMenuOpen = false"
                        class="block px-3 py-2 text-xs font-semibold uppercase tracking-wider opacity-75 transition-colors"
                        :class="scrolled ? 'hover:text-dark' : 'hover:text-white'">
                        Catalog
                    </a>
                </div>
            </div>

            <a href="page/facilities.php" @click="mobileMenuOpen = false"
                class="block px-3 py-2 text-sm font-semibold opacity-80 transition-colors"
                :class="scrolled ? 'hover:text-dark' : 'hover:text-white'">Facilities</a>

            <a href="page/process.php" @click="mobileMenuOpen = false"
                class="block px-3 py-2 text-sm font-semibold opacity-80 transition-colors"
                :class="scrolled ? 'hover:text-dark' : 'hover:text-white'">Process</a>

            <a href="page/qa.php" @click="mobileMenuOpen = false"
                class="block px-3 py-2 text-sm font-semibold opacity-80 transition-colors"
                :class="scrolled ? 'hover:text-dark' : 'hover:text-white'">Quality</a>

            <div class="pt-2">
                <a href="page/contact.php" @click="mobileMenuOpen = false"
                    class="block text-center w-full rounded-xl border-2 px-5 py-2.5 text-xs font-bold uppercase tracking-wider transition"
                    :class="scrolled ? 'text-dark hover:bg-dark border-dark hover:text-white' : 'text-white hover:bg-white border-white hover:text-dark'">
                    Contact Us
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative min-h-svh flex items-center justify-center overflow-hidden bg-dark">

        <!-- Background Image & Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="public/image/section/areapabrik1.webp" alt="Rumi Metal Manufacturing Facility"
                class="w-full h-full object-cover hero-media" fetchpriority="high" decoding="async">
            <div class="absolute inset-0 bg-linear-to-t from-dark/90 via-dark/70 to-dark/50"></div>
        </div>

        <!-- Hero Content -->
        <?php $heroTitle = 'Precision Aluminum Extrusions'; ?>
        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32 text-center">

            <!-- Company Label -->
            <div class="gsap-hero-label inline-flex items-center gap-2 px-4 py-1.5 mb-4">
                <span class="text-xs font-semibold text-gold uppercase tracking-widest">
                    PT RUMI METAL INDONESIA
                </span>
            </div>

            <!-- Main Heading: dipecah per huruf di server (PHP), dianimasikan GSAP.
                 Teks sudah ada di HTML sejak awal -> tinggi h1 tetap, tidak ada layout shift -->
            <h1 aria-label="<?= htmlspecialchars($heroTitle) ?>"
                class="text-3xl sm:text-5xl lg:text-6xl font-bold leading-tight text-white tracking-tight max-w-4xl mx-auto flex flex-wrap justify-center gap-x-2 sm:gap-x-4">
                <?php foreach (explode(' ', $heroTitle) as $word): ?>
                    <span class="inline-flex whitespace-nowrap overflow-hidden"
                        aria-hidden="true"><?php foreach (mb_str_split($word) as $char): ?><span
                                class="hero-char inline-block"><?= htmlspecialchars($char) ?></span><?php endforeach; ?></span>
                <?php endforeach; ?>
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
    <section class="relative overflow-hidden py-24 text-dark sm:py-32 lg:py-40">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <!-- MAIN HEADER -->
            <div class="mx-auto mb-16 max-w-4xl text-center" data-gsap="fade-up" data-duration="2">

                <div class="relative my-8 flex w-full items-center justify-center">
                    <div class="grow border-t border-slate-gray/30"></div>

                    <span class="mx-4 shrink-0 text-sm font-bold uppercase tracking-widest text-slate-gray">
                        OUR PRODUCTS
                    </span>

                    <div class="grow border-t border-slate-gray/30"></div>
                </div>

                <h2
                    class="font-heading text-3xl font-bold leading-tight tracking-tight text-dark sm:text-4xl lg:text-5xl">
                    Custom Aluminum Profiles & Extrusions
                </h2>

                <p
                    class="mx-auto mt-6 max-w-3xl font-sans text-base font-light leading-relaxed text-slate-gray sm:text-lg">
                    PT Rumi Metal Indonesia manufactures custom aluminum extrusions engineered to strict tolerances. We
                    design every profile for high dimensional accuracy, structural strength, and reliable field
                    performance.
                </p>

            </div>


            <div class="relative mx-auto max-w-5xl">

                <!-- PRODUCT IMAGE GRID -->
                <div class="grid max-w-2xl grid-cols-2 gap-0 overflow-hidden shadow-sm" data-gsap="fade-left"
                    data-duration="2">

                    <!-- Image 1 -->
                    <div class="group aspect-4/3 w-full overflow-hidden">
                        <img src="public/image/section/rounded1.jpg" alt="Aluminum profile manufacturing" loading="lazy"
                            decoding="async" class="block h-full w-full object-cover transition-transform duration-500">
                    </div>

                    <!-- Image 2 -->
                    <div class="group aspect-4/3 w-full overflow-hidden">
                        <img src="public/image/section/rounded2.jpg" alt="Aluminum extrusion profile" loading="lazy"
                            decoding="async" class="block h-full w-full object-cover transition-transform duration-500">
                    </div>

                    <!-- Image 3 -->
                    <div class="group aspect-4/3 w-full overflow-hidden">
                        <img src="public/image/section/rounded2.jpg" alt="Aluminum extrusion profile" loading="lazy"
                            decoding="async" class="block h-full w-full object-cover transition-transform duration-500">
                    </div>

                    <!-- Image 4 -->
                    <div class="group aspect-4/3 w-full overflow-hidden">
                        <img src="public/image/section/rounded1.jpg" alt="Aluminum profile manufacturing" loading="lazy"
                            decoding="async" class="block h-full w-full object-cover transition-transform duration-500">
                    </div>

                </div>


                <!-- FLOATING TEXT BOX -->
                <div class="static z-10 mt-4 max-w-md bg-white p-6 md:absolute md:left-[50%] md:top-1/2 md:mt-0 md:-translate-y-1/2 sm:p-8 lg:p-10"
                    data-gsap="fade-right" data-duration="2">

                    <p class="mb-6 font-sans text-base font-light leading-relaxed text-slate-gray sm:text-lg">
                        We offer a wide range of high-performance products tailored to your needs. You can seamlessly
                        combine different profile types within a single project to match your exact specifications.
                    </p>

                    <a href="page/specifications.php"
                        class="group inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-gold transition-colors duration-300 hover:text-dark sm:text-sm">
                        <span>Explore Our Products</span>

                        <i
                            class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- About Us Section -->
    <section class="relative overflow-hidden bg-white py-24 sm:py-32 lg:py-40">
        <!-- Background Image -->
        <img src="public/image/section/bg-section.webp" alt="" aria-hidden="true" loading="lazy" decoding="async"
            class="pointer-events-none absolute inset-0 z-0 h-full w-full object-cover object-center opacity-10" />

        <div class="relative z-10 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-12 lg:gap-16">
                <!-- LEFT COLUMN -->
                <div class="lg:col-span-6 gsap-about-left" data-gsap="fade-left" data-duration="2">
                    <div class="relative my-8 flex w-full items-center justify-center">
                        <div class="grow border-t border-slate-gray/30"></div>
                        <span class="mx-4 shrink-0 text-sm font-bold uppercase tracking-widest text-gray-600">
                            WHO WE ARE
                        </span>
                        <div class="grow border-t border-slate-gray/30"></div>
                    </div>
                    <h2
                        class="font-heading text-3xl font-bold leading-tight tracking-tight text-dark sm:text-4xl lg:text-5xl">
                        Your total solution for high-quality
                        <span class="text-gold">aluminum profiles</span>
                        and
                        <span class="text-gold">extrusions</span>
                    </h2>
                </div>

                <!-- RIGHT COLUMN -->
                <div class="flex h-full flex-col justify-between pt-1 lg:col-span-6 lg:pt-2 gsap-about-right"
                    data-gsap="fade-right" data-duration="2">
                    <div class="space-y-6 font-sans text-base font-light leading-relaxed text-slate-gray sm:text-lg">
                        <p>
                            <strong class="font-semibold text-dark">
                                PT Rumi Metal Indonesia
                            </strong>
                            specializes in the production and supply of high-quality aluminum profiles tailored for
                            demanding industrial and construction applications. We are committed to delivering
                            precision-engineered products that meet rigorous international standards.
                        </p>
                        <p>
                            With facility construction starting in September 2024 and official production launching on
                            16 September 2025, our advanced technology and customer-oriented dedication position us as a
                            trusted partner for structural and architectural projects across Indonesia and beyond.
                        </p>
                    </div>
                    <div class="pt-8">
                        <a href="page/about.php"
                            class="group inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-gold transition-colors duration-300 hover:text-dark sm:text-sm">
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

                    <!-- Main Heading -->
                    <div class="max-w-xl">
                        <h2
                            class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-dark leading-tight tracking-tight">
                            Production Facility
                        </h2>
                    </div>

                    <!-- Supporting Content -->
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
                    <span class="absolute left-0 bottom-0 h-0.5 bg-gold transition-all duration-300" :class="activeMachine === '750mt'
                        ? 'w-full'
                        : 'w-0 group-hover:w-full'">
                    </span>

                </button>


                <button @click="activeMachine = '1150mt'" :class="activeMachine === '1150mt'
                    ? 'text-dark'
                    : 'text-slate-gray hover:text-dark'"
                    class="group relative pb-2 text-xs sm:text-sm font-mono font-bold uppercase tracking-widest transition-colors duration-200 focus:outline-none">

                    1150 MT

                    <span class="absolute left-0 bottom-0 h-0.5 bg-gold transition-all duration-300" :class="activeMachine === '1150mt'
                        ? 'w-full'
                        : 'w-0 group-hover:w-full'">
                    </span>

                </button>

            </div>


            <!-- 750 MT -->
            <div x-show="activeMachine === '750mt'"
                class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-stretch">

                <!-- Machine Image -->
                <div data-gsap="fade-left" data-duration="2"
                    class="lg:col-span-7 relative min-h-90 sm:min-h-115 lg:min-h-140 overflow-hidden bg-black">

                    <img src="public/image/section/areapabrik1.webp" alt="750 MT Aluminum Extrusion Press at Rumi Metal"
                        loading="lazy" decoding="async"
                        class="absolute inset-0 w-full h-full object-cover object-center">

                    <div class="absolute inset-0 bg-linear-to-t from-black/45 via-transparent to-transparent">
                    </div>

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

                            <a href="page/facilities.php"
                                class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold uppercase tracking-wider text-gold hover:text-dark transition-colors duration-300 group">

                                <span>
                                    View Manufacturing Infrastructure
                                </span>

                                <i
                                    class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1">
                                </i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>


            <!-- 1150 MT -->
            <div x-show="activeMachine === '1150mt'" style="display: none;"
                class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-stretch">

                <!-- Machine Image -->
                <div data-gsap="fade-left" data-duration="2"
                    class="lg:col-span-7 relative min-h-90 sm:min-h-115 lg:min-h-140 overflow-hidden bg-black">

                    <img src="public/image/section/areapabrik1.webp"
                        alt="1150 MT Aluminum Extrusion Press at Rumi Metal" loading="lazy" decoding="async"
                        class="absolute inset-0 w-full h-full object-cover object-center">

                    <div class="absolute inset-0 bg-linear-to-t from-black/45 via-transparent to-transparent">
                    </div>

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

                            <a href="page/facilities.php"
                                class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold uppercase tracking-wider text-gold hover:text-dark transition-colors duration-300 group">

                                <span>
                                    View Manufacturing Infrastructure
                                </span>

                                <i
                                    class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1">
                                </i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Wave Marquee -->
    <div class="w-full overflow-hidden leading-none py-6 sm:py-8 bg-transparent">
        <div class="flex w-[200%] animate-wave-marquee will-change-transform" aria-hidden="true">

            <!-- SVG 1 -->
            <svg class="w-1/2 h-16 sm:h-24 lg:h-28 shrink-0 block" viewBox="0 0 1200 200" fill="none"
                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0,100 C300,20 300,180 600,100 C900,20 900,180 1200,100" stroke="currentColor"
                    stroke-width="10" class="text-blue-gray opacity-40" />
                <path d="M0,140 C300,60 300,220 600,140 C900,60 900,220 1200,140" stroke="currentColor"
                    stroke-width="10" class="text-blue-gray opacity-40" />
            </svg>


            <!-- SVG 2 -->
            <svg class="w-1/2 h-16 sm:h-24 lg:h-28 shrink-0 block" viewBox="0 0 1200 200" fill="none"
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

            <div class="relative w-full">

                <!-- Image + Overlay -->
                <div data-gsap="fade-down" data-duration="2"
                    class="relative h-95 sm:h-115 lg:h-130 w-full bg-gray-900 overflow-hidden">

                    <img src="public/image/section/section-employee.jpg" alt="Rumi Metal Engineers" loading="lazy"
                        decoding="async" class="block w-full h-full object-cover object-center opacity-90">

                    <div class="absolute inset-0 bg-black/30 pointer-events-none">
                    </div>


                    <!-- Overlay Heading -->
                    <div class="absolute inset-0 z-10 flex flex-col items-center justify-center px-6 text-center">

                        <h2 data-gsap="zoom-in" data-duration="2"
                            class="max-w-3xl text-2xl sm:text-3xl lg:text-4xl font-bold text-white uppercase tracking-wider font-heading leading-snug">

                            RELIABLE ALUMINUM COMPONENTS FOR YOUR PROJECT

                        </h2>


                        <!-- Divider -->
                        <div data-gsap="zoom-out" data-duration="2"
                            class="w-16 h-0.5 bg-white mx-auto mt-4 origin-center">
                        </div>

                    </div>

                </div>


                <!-- Description -->
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
        class="relative flex min-h-112.5 sm:min-h-125 w-full items-center justify-center overflow-hidden bg-black py-24">

        <!-- Background Image -->
        <img src="public/image/section/section-corporate.png" alt="Rumi Metal corporate environment" loading="lazy"
            decoding="async" class="absolute inset-0 block h-full w-full object-cover object-center">

        <!-- Dark Overlay -->
        <div class="pointer-events-none absolute inset-0 bg-black/40">
        </div>

        <!-- Content -->
        <div data-gsap="fade-up" data-duration="3"
            class="gsap-brand-content relative z-10 mx-auto max-w-5xl px-6 text-center font-sans text-white">
            <h2
                class="mx-auto mb-10 max-w-4xl text-3xl font-bold leading-tight tracking-tight text-white font-heading sm:text-4xl lg:text-5xl">
                More than just aluminum profiles, we
                forge the foundation of future industry.
            </h2>

            <p class="mx-auto w-full text-base font-sans font-light leading-relaxed text-white/90 sm:text-lg">
                Rumi Metal continues to improve quality, advance products, and respond to industrial demands in the new
                era.
            </p>
        </div>

    </section>

    <!-- Section Standards & Certifications -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div data-gsap="fade-up" data-duration="2"
                class="flex flex-col items-center justify-center gap-6 text-center sm:flex-row sm:gap-10 sm:text-left">

                <!-- Certification Logo -->
                <div class="flex shrink-0 items-center justify-center p-3">
                    <img src="public/image/logo/logo-iso9001-2015.png" alt="ISO 9001:2015 Certified" loading="lazy"
                        decoding="async" class="block h-16 w-auto object-contain sm:h-20">
                </div>


                <!-- Divider -->
                <div class="hidden h-16 w-px bg-slate-200 sm:block"></div>


                <!-- Certification Information -->
                <div class="space-y-1">

                    <h3 class="text-xl font-bold tracking-tight text-dark font-heading sm:text-2xl">
                        ISO 9001:2015
                    </h3>

                    <p class="max-w-xl text-base font-sans font-light text-slate-gray sm:text-lg">
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
                    <a href="index.php" class="inline-block">
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

</body>

</html>