<header x-data="{ open: false }" class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo Gambar WebP -->
            <a href="#" class="flex items-center">
                <img src="{{ asset('images/cahayabusur.webp') }}" 
                     alt="Cahaya Busur Logo" 
                     class="h-12 w-auto object-contain">
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-8 font-semibold text-sm text-gray-700">
                <a href="#hero" class="hover:text-brand-orange transition-colors">Home</a>
                <a href="#layanan" class="hover:text-brand-orange transition-colors">Layanan & Jasa</a>
                <a href="#reels" class="hover:text-brand-orange transition-colors">Portofolio Video</a>
                <a href="#cabang" class="hover:text-brand-orange transition-colors">Lokasi Cabang</a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center">
                <a href="https://wa.me/6281139415777?text=Halo%20Cahaya%20Busur,%20saya%20ingin%20bertanya%20layanan%20cetak/ATK" 
                   target="_blank"
                   class="bg-brand-orange hover:bg-brand-orange-hover text-white px-5 py-2.5 rounded-full font-bold text-sm flex items-center gap-2 shadow-md hover:shadow-lg transition-all duration-200">
                    <i data-lucide="message-circle" class="w-4 h-4"></i>
                    Order via WhatsApp
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button @click="open = !open" class="md:hidden p-2 text-gray-600 focus:outline-none">
                <i data-lucide="menu" x-show="!open" class="w-6 h-6"></i>
                <i data-lucide="x" x-show="open" class="w-6 h-6" x-cloak></i>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div x-show="open" x-cloak @click.away="open = false" class="md:hidden bg-white border-b border-gray-100 px-4 pt-2 pb-6 space-y-3">
        <a href="#hero" @click="open = false" class="block py-2 text-gray-700 font-medium">Home</a>
        <a href="#layanan" @click="open = false" class="block py-2 text-gray-700 font-medium">Layanan & Jasa</a>
        <a href="#reels" @click="open = false" class="block py-2 text-gray-700 font-medium">Portofolio Video</a>
        <a href="#cabang" @click="open = false" class="block py-2 text-gray-700 font-medium">Lokasi Cabang</a>
        <a href="https://wa.me/6281139415777" target="_blank" class="block w-full text-center bg-brand-orange text-white py-3 rounded-xl font-bold mt-2">
            Order via WhatsApp
        </a>
    </div>
</header>