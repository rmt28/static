<!DOCTYPE html>
<html lang="id" class="h-full scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumi Metal | <?= $title ?? 'Page Title' ?></title>

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

    <!-- module -->
    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/src/main.js"></script>
</head>

<body class="min-h-screen font-sans text-subtext antialiased bg-secBg selection:bg-heading/20"
    x-data="{ scrolled: false, mobileMenuOpen: false, searchOpen: false }">

    <!-- SEARCH PANEL -->
    <?php include '../components/search.php' ?>

    <!-- Navbar (Fixed White / Always Scrolled Style) -->
    <header class="fixed top-0 left-0 z-50 w-full bg-white text-dark border-b border-slate-light shadow-sm">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 items-center justify-between">

                <!-- Logo -->
                <a href="../index.php" class="flex items-center group">
                    <div class="relative h-14 w-auto flex items-center justify-center scale-90 origin-left">
                        <img src="../public/image/logo/logo.png" alt="Rumi Metal Logo" fetchpriority="high"
                            decoding="async" class="block h-full w-auto object-contain">
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <?php
                // Ambil URL path saat ini untuk mengecek halaman aktif secara presisi
                $currentUri = $_SERVER['REQUEST_URI'];
                ?>

                <nav class="hidden lg:flex items-center gap-7">

                    <!-- HOME -->
                    <?php $isHome = (strpos($currentUri, 'index.php') !== false || $currentUri == '/' || substr($currentUri, -1) == '/'); ?>
                    <a href="/project/company-profile/index.php"
                        class="group relative text-xs font-semibold uppercase tracking-wider pb-1.5 text-dark/80 hover:text-dark">
                        Home
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-dark origin-left transition-transform duration-300 ease-out <?= $isHome ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' ?>"></span>
                    </a>

                    <!-- ABOUT US -->
                    <?php $isAbout = (strpos($currentUri, 'about.php') !== false); ?>
                    <a href="/project/company-profile/page/about.php"
                        class="group relative text-xs font-semibold uppercase tracking-wider pb-1.5 text-dark/80 hover:text-dark">
                        About Us
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-dark origin-left transition-transform duration-300 ease-out <?= $isAbout ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' ?>"></span>
                    </a>

                    <!-- PRODUCTS DROPDOWN -->
                    <?php $isProducts = (strpos($currentUri, 'specifications.php') !== false || strpos($currentUri, 'catalog.php') !== false); ?>
                    <div class="relative flex items-center" x-data="{ open: false }" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <div
                            class="group relative inline-flex items-center gap-1.5 cursor-pointer text-xs font-semibold uppercase tracking-wider pb-1.5 text-dark/80 hover:text-dark">
                            <span>Products</span>
                            <svg class="w-3 h-3 transition-transform duration-300" :class="open ? 'rotate-180' : ''"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                            <span
                                class="absolute bottom-0 left-0 w-full h-0.5 bg-dark origin-left transition-transform duration-300 ease-out <?= $isProducts ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' ?>"></span>
                        </div>

                        <!-- Dropdown Menu -->
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                            x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                            class="absolute left-0 top-full mt-3 w-44 rounded-xl p-2 bg-white border border-blue-gray text-dark shadow-xl z-50"
                            style="display: none;">

                            <div class="flex flex-col gap-1">
                                <a href="/project/company-profile/page/specifications.php"
                                    class="block w-full px-3 py-2 text-xs font-semibold uppercase tracking-wider <?= (strpos($currentUri, 'specifications.php') !== false) ? 'text-dark bg-neutral-100' : 'text-dark/80' ?> hover:text-dark hover:bg-neutral-100 rounded-lg transition-colors duration-200">
                                    Specifications
                                </a>
                                <a href="/project/company-profile/page/catalog.php"
                                    class="block w-full px-3 py-2 text-xs font-semibold uppercase tracking-wider <?= (strpos($currentUri, 'catalog.php') !== false) ? 'text-dark bg-neutral-100' : 'text-dark/80' ?> hover:text-dark hover:bg-neutral-100 rounded-lg transition-colors duration-200">
                                    Catalog
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- FACILITIES -->
                    <?php $isFacilities = (strpos($currentUri, 'facilities.php') !== false); ?>
                    <a href="/project/company-profile/page/facilities.php"
                        class="group relative text-xs font-semibold uppercase tracking-wider pb-1.5 text-dark/80 hover:text-dark">
                        Facilities
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-dark origin-left transition-transform duration-300 ease-out <?= $isFacilities ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' ?>"></span>
                    </a>

                    <!-- PROCESS -->
                    <?php $isProcess = (strpos($currentUri, 'process.php') !== false); ?>
                    <a href="/project/company-profile/page/process.php"
                        class="group relative text-xs font-semibold uppercase tracking-wider pb-1.5 text-dark/80 hover:text-dark">
                        Process
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-dark origin-left transition-transform duration-300 ease-out <?= $isProcess ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' ?>"></span>
                    </a>

                    <!-- QUALITY -->
                    <?php $isQa = (strpos($currentUri, 'qa.php') !== false); ?>
                    <a href="/project/company-profile/page/qa.php"
                        class="group relative text-xs font-semibold uppercase tracking-wider pb-1.5 text-dark/80 hover:text-dark">
                        Quality
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-dark origin-left transition-transform duration-300 ease-out <?= $isQa ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' ?>"></span>
                    </a>

                </nav>

                <!-- Desktop Actions -->
                <div class="hidden lg:flex items-center gap-4">

                    <button type="button" @click="searchOpen = !searchOpen" aria-label="Search"
                        class="p-2.5 rounded-xl text-dark/80 hover:text-dark transition-colors focus:outline-none">

                        <i class="fa-solid fa-magnifying-glass text-lg"></i>

                    </button>


                    <a href="contact.php" class="inline-flex items-center justify-center
                           rounded-full border-2 border-dark
                           px-5 py-2.5 text-xs font-bold uppercase
                           tracking-wider text-dark
                           hover:bg-dark hover:text-white
                           transition focus:outline-none">

                        Contact Us

                    </a>

                </div>


                <!-- Mobile -->
                <div class="flex items-center gap-2 lg:hidden">

                    <button type="button" @click="searchOpen = !searchOpen" aria-label="Search" class="p-2 rounded-xl text-dark/80 hover:text-dark
                           focus:outline-none transition-colors">

                        <i class="fa-solid fa-magnifying-glass text-lg"></i>

                    </button>


                    <button type="button" @click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle menu"
                        :aria-expanded="mobileMenuOpen" class="p-2 rounded-xl text-dark/80 hover:text-dark
                           focus:outline-none transition-colors">

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


        <!-- Mobile Navigation -->
        <div x-show="mobileMenuOpen" x-cloak x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4" class="lg:hidden border-b border-slate-200 bg-white text-dark
               px-4 pt-2 pb-6 space-y-3" style="display: none;">

            <a href="index.php" @click="mobileMenuOpen = false"
                class="block px-3 py-2 text-sm font-semibold hover:text-dark">
                Home
            </a>

            <a href="about.php" @click="mobileMenuOpen = false"
                class="block px-3 py-2 text-sm font-semibold opacity-80 hover:text-dark">
                About Us
            </a>


            <!-- Mobile Products -->
            <div x-data="{ mobileProductsOpen: false }" class="space-y-1">

                <button @click="mobileProductsOpen = !mobileProductsOpen" type="button" class="flex items-center justify-between w-full
                       px-3 py-2 text-sm font-semibold opacity-80
                       transition-colors text-left">

                    <span>Products</span>

                    <svg class="w-4 h-4 transition-transform duration-300"
                        :class="mobileProductsOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />

                    </svg>

                </button>


                <div x-show="mobileProductsOpen" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-1"
                    class="pl-4 pr-2 space-y-1 border-l-2 border-dark/20 my-1" style="display: none;">

                    <a href="specifications.php" @click="mobileMenuOpen = false" class="block px-3 py-2 text-xs font-semibold
                           uppercase tracking-wider opacity-75
                           hover:text-dark transition-colors">
                        Specifications
                    </a>

                    <a href="catalog.php" @click="mobileMenuOpen = false" class="block px-3 py-2 text-xs font-semibold
                           uppercase tracking-wider opacity-75
                           hover:text-dark transition-colors">
                        Catalog
                    </a>

                </div>

            </div>


            <a href="facilities.php" @click="mobileMenuOpen = false"
                class="block px-3 py-2 text-sm font-semibold opacity-80 hover:text-dark">
                Facilities
            </a>

            <a href="process.php" @click="mobileMenuOpen = false"
                class="block px-3 py-2 text-sm font-semibold opacity-80 hover:text-dark">
                Process
            </a>

            <a href="qa.php" @click="mobileMenuOpen = false"
                class="block px-3 py-2 text-sm font-semibold opacity-80 hover:text-dark">
                Quality
            </a>


            <div class="pt-2">

                <a href="contact.php" @click="mobileMenuOpen = false" class="block w-full rounded-xl border-2 border-dark
                       px-5 py-2.5 text-center text-xs font-bold
                       uppercase tracking-wider text-dark
                       hover:bg-dark hover:text-white transition">

                    Contact Us

                </a>

            </div>

        </div>

    </header>