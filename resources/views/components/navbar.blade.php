<style>
  @keyframes marquee-loop {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
  }
  .running-text {
    display: inline-block;
    white-space: nowrap;
    animation: marquee-loop 12s linear infinite;
  }
</style>

{{-- Top Bar Horizontal --}}
<div class="bg-brand-green-bright text-xs py-1 px-4 flex items-center justify-between overflow-hidden">
  <div class="overflow-hidden mr-4 flex-1">
    <div class="running-text font-medium text-gray-900">
      Digital printing, percetakan, finishing terbaik di Bojonegoro &nbsp;&nbsp;&nbsp;&nbsp;
    </div>
  </div>
  <div class="flex-shrink-0 flex items-center gap-1 text-gray-900">
    <span>Follow us</span>
    <!-- Icon Instagram -->
    <a href="https://instagram.com/cahayabusurprint" target="_blank" class="hover:opacity-80">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
      </svg>
    </a>
  </div>
</div>

{{-- <div class="bg-brand-green-bright text-white text-xs py-2 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
        <span class="font-medium tracking-wide text-brand-green-dark">
            Digital printing , percetakan, finishing terbaik di Bojonegoro
        </span>
        <div class="flex items-center gap-2">
            <span class="text-brand-green-dark">Follow us</span>
            <a href="https://instagram.com/cahayabusurprint" target="_blank" class="hover:opacity-80 transition-opacity">
              
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-[#063231]" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>
        </div>
    </div>
</div> --}}

<header x-data="{ open: false }" class="sticky top-0 z-50 bg-brand-green-dark/90 backdrop-blur-xl  text-white shadow-sm">
{{-- <header x-data="{ open: false }" class="sticky top-0 z-50 bg-brand-cream/90 backdrop-blur-md border-b border-gray-200/60 shadow-sm"> --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="#" class="flex items-center">
                <img src="{{ asset('images/cahayabusur.webp') }}" 
                     alt="Cahaya Busur Logo" 
                     class="h-12 w-auto object-contain">
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-8 font-semibold text-sm text-gray-200">
                <a href="#hero" class="hover:text-brand-green-bright transition-colors">Home</a>
                <a href="#layanan" class="hover:text-brand-green-bright transition-colors">Layanan & Jasa</a>
                <a href="#reels" class="hover:text-brand-green-bright transition-colors">Portofolio Video</a>
                <a href="#cabang" class="hover:text-brand-green-bright transition-colors">Lokasi Cabang</a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center">
                {{-- <a href="https://wa.me/6281139415777?text=Halo%20Cahaya%20Busur,%20saya%20ingin%20bertanya%20layanan%20cetak/ATK" 
                   target="_blank"
                   class="bg-brand-green hover:bg-brand-green-dark text-gray-300 px-6 py-2.5 rounded-full font-bold text-sm flex items-center gap-2 shadow-md transition-all">
                    <i data-lucide="message-circle" class="w-4 h-4"></i>
                    Order via WhatsApp
                </a> --}}
            </div>

            <!-- Mobile Menu Toggle -->
            {{-- <button @click="open = !open" class="md:hidden p-2 text-gray-700 focus:outline-none">
                <i data-lucide="menu" x-show="!open" class="w-6 h-6"></i>
                <i data-lucide="x" x-show="open" class="w-6 h-6" x-cloak></i>
            </button> --}}

            <!-- Mobile Menu Toggle (BARU) -->
            <button @click="open = !open" class="md:hidden p-2 text-white hover:text-brand-green-bright focus:outline-none">
                <!-- Icon Hamburger (Buka) -->
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!-- Icon Silang (Tutup) -->
                <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div x-show="open" x-cloak @click.away="open = false" class="md:hidden bg-brand-cream border-b border-gray-200 px-4 pt-2 pb-6 space-y-3">
        <a href="#hero" @click="open = false" class="block py-2 text-gray-800 font-medium">Home</a>
        <a href="#layanan" @click="open = false" class="block py-2 text-gray-800 font-medium">Layanan & Jasa</a>
        <a href="#reels" @click="open = false" class="block py-2 text-gray-800 font-medium">Portofolio Video</a>
        <a href="#cabang" @click="open = false" class="block py-2 text-gray-800 font-medium">Lokasi Cabang</a>
        <a href="https://wa.me/6281139415777" target="_blank" class="block w-full text-center bg-brand-green text-white py-3 rounded-xl font-bold mt-2">
            Order via WhatsApp
        </a>
    </div>
</header>