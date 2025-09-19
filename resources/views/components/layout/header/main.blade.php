<header x-data="{
        desktopMenuOpen: false,
        desktopMenu: '',
        desktopMenuCloseDelay: 200,
        desktopMenuCloseTimeout: null,
        desktopMenuLeave() {
            this.desktopMenuCloseTimeout = setTimeout(() => this.desktopMenuClose(), this.desktopMenuCloseDelay);
        },
        desktopMenuReposition(navElement) {
            this.desktopMenuClearCloseTimeout();
            if (this.$refs.navigationDropdown) {
                this.$refs.navigationDropdown.style.left = navElement.offsetLeft + 'px';
                this.$refs.navigationDropdown.style.marginLeft = (navElement.offsetWidth / 2) + 'px';
            }
        },
        desktopMenuClearCloseTimeout() { clearTimeout(this.desktopMenuCloseTimeout); },
        desktopMenuClose() { this.desktopMenuOpen = false; this.desktopMenu = ''; },

        mobileMenuOpen: false,
        mobileSubMenuOpen: null
    }"
    @keydown.escape.window="mobileMenuOpen = false; desktopMenuClose()"
    class="sticky top-0 inset-x-0 z-50 bg-bg-dark/80 backdrop-blur-lg border-b border-glass-border"
>
    <nav class="relative flex items-center justify-between max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-2 text-xl font-bold text-primary-light">
   
            <span>HOPn</span>
        </a>

        <!-- Desktop Navigation -->
        <x-layout.header.desktop-nav />

        <!-- Right Aligned Items -->
        <div class="flex items-center gap-4 flex-shrink-0">
            <x-langSwitcherButton />
            <!-- Mobile Menu Toggle -->
            <div class="lg:hidden">
                <button @click="mobileMenuOpen = true" type="button" class="p-2 inline-flex justify-center items-center rounded-lg border border-glass-border bg-glass-bg text-text-secondary shadow-sm hover:bg-primary-indigo hover:text-white">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Navigation -->
    <x-layout.header.mobile-nav />
</header>