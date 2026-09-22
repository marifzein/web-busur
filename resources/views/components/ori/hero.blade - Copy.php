<section id="hero" class="relative bg-gradient-to-b from-emerald-50/60 via-white to-[#F8F9FA] py-12 lg:py-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            
            {{-- SISI KIRI: TEXT & CTA --}}
            <div class="lg:col-span-6 space-y-6 text-center lg:text-left">
                {{-- Running Status --}}
                <div class="inline-flex items-center gap-2 bg-brand-green/10 text-brand-green px-4 py-2 rounded-full text-xs font-bold tracking-wide border border-brand-green/20 shadow-sm">
                    <span class="w-2.5 h-2.5 rounded-full bg-brand-green animate-ping"></span>
                    <span>BUKA 06.00 - 21.00 WIB (Minggu & Tanggal Merah Tetap Buka)</span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-7xl text-emerald-600 font-black text-brand-dark tracking-tight leading-tight">
                    cahaya busur 
                </h1>
                <h2>
                  <span class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-brand-orange">Pusat Percetakan Digital & ATK</span>
                </h2>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold">Terlengkap & Terbaik di Bojonegoro</h2>

                <p class="text-base sm:text-lg text-gray-600 max-w-xl mx-auto lg:mx-0 font-normal leading-relaxed">
                    Melayani cetak banner, id card, packaging, jilid, cetak buku, hingga kebutuhan kantor dengan pengerjaan cepat & profesional di Bojonegoro.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2">
                    <a href="https://wa.me/6281139415777?text=Halo%20Cahaya%20Busur,%20saya%20mau%20order" 
                       target="_blank"
                       class="bg-brand-orange hover:bg-brand-orange-hover text-white px-8 py-4 rounded-xl font-bold text-base flex items-center justify-center gap-2 shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all">
                        <i data-lucide="message-circle" class="w-5 h-5"></i>
                        Order via WhatsApp
                    </a>
                    <a href="#cabang" 
                       class="bg-white border-2 border-gray-200 hover:border-brand-green text-brand-dark hover:text-brand-green px-7 py-4 rounded-xl font-bold text-base flex items-center justify-center gap-2 transition-all">
                        <i data-lucide="map-pin" class="w-5 h-5 text-brand-green"></i>
                        3 Lokasi Toko
                    </a>
                </div>

                {{-- Feature Badges --}}
                <div class="pt-6 grid grid-cols-3 gap-4 border-t border-gray-200/80 max-w-lg mx-auto lg:mx-0 text-left">
                    <div>
                        <span class="block font-black text-brand-green text-lg">3 Cabang</span>
                        <span class="text-xs text-gray-500 font-medium">Bojonegoro</span>
                    </div>
                    <div>
                        <span class="block font-black text-brand-orange text-lg">Cepat</span>
                        <span class="text-xs text-gray-500 font-medium">Bisa Ditunggu</span>
                    </div>
                    <div>
                        <span class="block font-black text-brand-green text-lg">Lengkap</span>
                        <span class="text-xs text-gray-500 font-medium">Cetak & ATK</span>
                    </div>
                </div>
            </div>

            {{-- SISI KANAN: FOTO TOKO + ANIMASI FLOATING BADGES --}}
            <div class="lg:col-span-6 relative">
                
                {{-- Glow Decor Backing --}}
                <div class="absolute -inset-2 bg-gradient-to-tr from-brand-orange/30 to-brand-green/30 rounded-3xl blur-2xl opacity-60"></div>

                {{-- Main Photo Card Frame --}}
                <div class="relative rounded-3xl overflow-hidden border-4 border-white shadow-2xl bg-gray-900 group">
                    
                    {{-- Foto Toko dengan Smooth Zoom saat Hover --}}
                    <img src="{{ asset('images/hero-busur.webp') }}" 
                         alt="Gedung Toko Cahaya Busur Digital Print" 
                         class="w-full h-[380px] sm:h-[440px] object-cover object-center transform transition-transform duration-700 ease-out group-hover:scale-105">

                    {{-- Gradient Overlay Halus --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/10"></div>

                    {{-- Floating Badge 1: Kiri Atas (Lokasi Toko) --}}
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-4 py-2.5 rounded-2xl shadow-lg border border-white/40 flex items-center gap-3 animate-bounce-slow">
                        {{-- <div class="w-9 h-9 rounded-xl bg-brand-green/10 text-brand-green flex items-center justify-center font-bold">
                            <i data-lucide="store" class="w-5 h-5"></i>
                        </div> --}}
                        <div>
                            <p class="text-xs font-extrabold text-brand-dark">Digital Printing terbaik</p>
                            <p class="text-[10px] text-gray-500 font-medium">di Bojonegoro</p>
                        </div>  
                    </div>

                    {{-- Floating Badge 2: Kanan Bawah (Rating / Kepercayaan) --}}
                    <div class="absolute bottom-4 right-4 bg-brand-dark/85 backdrop-blur-md text-white px-4 py-3 rounded-2xl shadow-xl border border-white/10 flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-brand-orange text-white flex items-center justify-center">
                            <i data-lucide="check" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-white">Layanan Terlengkap</p>
                            <p class="text-[10px] text-gray-300">Digital • Offset • Finishing</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

{{-- Custom Style Tambahan untuk Animasi Halus --}}
<style>
    @keyframes bounceSlow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-6px); }
    }
    .animate-bounce-slow {
        animation: bounceSlow 4s infinite ease-in-out;
    }
</style>