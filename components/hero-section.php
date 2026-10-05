<!-- Hero Section -->
<section
    class="relative w-full bg-dark pt-28 pb-20 sm:pt-36 sm:pb-28 lg:pt-44 lg:pb-36 overflow-hidden">

    <div class="w-[90%] max-w-[1700px] mx-auto">
        <div class="max-w-6xl">

            <nav
                class="flex items-center gap-2 text-xs sm:text-sm font-sans text-slate-light dark:text-slate-light/50 mb-8 sm:mb-10">

                <a href="../index.php" class="text-slate-light/70 hover:text-slate-light transition-colors">
                    Homepage
                </a>

                <span class="text-slate-light">&rarr;</span>

                <span class="text-slate-light dark:text-slate-light/50">
                    <?= htmlspecialchars($main_breadcrumb ?? '') ?>
                </span>

                <?php if (!empty($sub_breadcrumb)): ?>
                    <span class="text-slate-light">&rarr;</span>

                    <span class="text-slate-light dark:text-slate-light/50">
                        <?= htmlspecialchars($sub_breadcrumb) ?>
                    </span>
                <?php endif; ?>

            </nav>

            <h1 data-gsap="text-words" data-stragger="2"
                class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-normal font-dark tracking-tight leading-[1.05] text-slate-light dark:text-mainBg max-w-5xl">

                <?= htmlspecialchars($hero_title ?? '') ?>

            </h1>

        </div>
    </div>

</section>