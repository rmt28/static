<div x-show="searchOpen" x-cloak x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 -translate-y-full" x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-full" @keydown.escape.window="searchOpen = false"
    class="fixed inset-x-0 top-0 z-60 bg-dark text-white shadow-2xl">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Top: Close Button Only -->
        <div class="flex h-20 items-center justify-end">
            <!-- Close (X) Button -->
            <button type="button" @click="searchOpen = false" aria-label="Close search"
                class="p-2 text-white/70 hover:text-white transition-colors focus:outline-none">
                <i class="fa-solid fa-xmark text-2xl"></i>
            </button>
        </div>

        <!-- Search Input Form Section -->
        <div class="py-12 md:py-20 max-w-4xl mx-auto">
            <form action="#" method="GET" @submit.prevent="/* jalankan pencarian */" class="relative">
                <div
                    class="relative flex items-center border-b-2 border-white/20 focus-within:border-white transition-colors pb-4">
                    <input type="text" x-ref="searchInput"
                        x-init="$watch('searchOpen', value => { if(value) setTimeout(() => $refs.searchInput.focus(), 100) })"
                        placeholder="Type your keywords and press Enter"
                        class="w-full bg-transparent text-xl sm:text-2xl md:text-3xl text-white placeholder-white/50 focus:outline-none pr-12 font-light tracking-wide" />

                    <button type="submit" @click="window.location.href = 'page/searching-output.html'"
                        aria-label="Submit search"
                        class="absolute right-0 text-white/70 hover:text-white transition-colors p-2">
                        <i class="fa-solid fa-magnifying-glass text-xl sm:text-2xl"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>