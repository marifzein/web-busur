<section id="hero" class="relative min-h-[520px] lg:min-h-[600px] flex items-center bg-gray-900 text-white overflow-hidden">
    {{-- Background Image Foto Toko + Dark Overlay --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero-busur.webp') }}" 
             alt="Toko Cahaya Busur Digital Print" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/55 to-black/0"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-16">
        <div class="grid lg:grid-cols-12 gap-8 items-end">
            
            {{-- SISI KIRI: TEXT & STATS --}}
            <div class="lg:col-span-8 space-y-6">
                <div>
                    <h1 class="text-4xl sm:text-6xl lg:text-8xl font-black text-brand-green-bright tracking-tight leading-none mb-3">
                        cahaya busur
                    </h1>
                    <p class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-200">
                        Pusat Digital Printing & ATK
                    </p>
                    <p class="text-base sm:text-2xl text-orange-400 font-bold mt-1 tracking-widest">
                        Terlengkap & Terbaik di Bojonegoro
                    </p>
                </div>

                <p class="text-base sm:text-lg text-gray-300 max-w-2xl leading-relaxed">
                    Melayani cetak banner, id card, packaging, jilid, cetak buku, hingga kebutuhan kantor dengan pengerjaan cepat, rapi & profesional.
                </p>

                {{-- Badges Ringkas --}}
                <div class="pt-4 grid grid-cols-3 gap-6 max-w-md border-t border-white/20">
                    <div>
                        <span class="block font-black text-white text-xl sm:text-2xl">3 Cabang</span>
                        <span class="text-sm text-gray-300">Bojonegoro</span>
                    </div>
                    <div>
                        <span class="block font-black text-white text-xl sm:text-2xl">Cepat</span>
                        <span class="text-sm text-gray-300">Bisa ditunggu</span>
                    </div>
                    <div>
                        <span class="block font-black text-white text-xl sm:text-2xl">Lengkap</span>
                        <span class="text-sm text-gray-300">Cetak & ATK</span>
                    </div>
                </div>
            </div>

            {{-- SISI KANAN: FLOATING CTA BUTTONS (DITURUNKAN KE BOWAH) --}}
            <div class="lg:col-span-4 flex flex-col gap-3 justify-end items-stretch sm:items-end lg:pt-24">
                <a href="https://wa.me/6281139415777?text=Halo%20Cahaya%20Busur,%20saya%20mau%20order" 
                   target="_blank"
                   class="bg-brand-green-bright hover:bg-emerald-400 text-brand-green-dark px-6 py-3.5 rounded-full font-bold text-lg flex items-center justify-start gap-2 shadow-lg transition-all w-full sm:w-64">
                    <i data-lucide="message-circle" class="w-5 h-5"></i>
                    Order via Whatsapp
                </a>

                <a href="#cabang" 
                class="bg-white/90 hover:bg-white text-brand-dark px-6 py-3.5 rounded-full font-bold text-lg flex items-center justify-start gap-2 shadow-md transition-all w-full sm:w-64">
                    <i data-lucide="map-pin" class="w-5 h-5 text-brand-black"></i>
                    Lokasi Cabang
                </a>
            </div>

        </div>
    </div>
</section>