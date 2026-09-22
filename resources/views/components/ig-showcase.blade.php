@php
  $reels = [
    [
      'title' => 'Suasana Toko & Pelayanan',
      'badge' => 'Cahaya Busur',
      'embed' => 'https://www.instagram.com/reel/C97c6ZISkHs/embed',
    ],
    [
      'title' => 'Cetak Paperbag Custom',
      'badge' => 'Packaging',
      'embed' => 'https://www.instagram.com/reel/Cypgr5SrM8e/embed',
    ],
    [
      'title' => 'Cetak Banner & High Res Print',
      'badge' => 'Digital Printing',
      'embed' => 'https://www.instagram.com/p/DaX9erVAdAK/embed',
    ],
    [
      'title' => 'Packaging Standing Pouch',
      'badge' => 'Standing Pouch',
      'embed' => 'https://www.instagram.com/reel/C523q21RGNk/embed',
    ],
    [
      'title' => 'Aneka Penjilidan Buku',
      'badge' => 'Jilid Buku',
      'embed' => 'https://www.instagram.com/reel/C0BDMtJrpk6/embed',
    ],
    [
      'title' => 'Undangan Aesthetic Spesial',
      'badge' => 'Undangan',
      'embed' => 'https://www.instagram.com/reel/Ct0Dd6bP0IE/embed',
    ],
  ];
@endphp

<section id="reels" class="py-16 bg-brand-cream overflow-hidden border-y border-gray-200/50" x-data>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8">
            <div>
                <span class="text-base font-bold tracking-widest text-gray-500 uppercase">Portofolio Reels</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-brand-green-dark mt-1">Showcase Produk & Hasil Cetak</h2>
            </div>

            <!-- Scroll Navigation Buttons -->
            <div class="hidden md:flex items-center gap-2 mt-4 md:mt-0">
                <button @click="$refs.slider.scrollBy({ left: -320, behavior: 'smooth' })" 
                        class="p-2.5 rounded-full bg-white hover:bg-brand-green hover:text-white border border-gray-200 shadow-sm transition-all text-gray-700">
                    <i data-lucide="chevron-left" class="w-5 h-5"></i>
                </button>
                <button @click="$refs.slider.scrollBy({ left: 320, behavior: 'smooth' })" 
                        class="p-2.5 rounded-full bg-white hover:bg-brand-green hover:text-white border border-gray-200 shadow-sm transition-all text-gray-700">
                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                </button>
            </div>
        </div>

        <!-- Carousel Container -->
        <div x-ref="slider" class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-6 scroll-smooth" style="scrollbar-width: none;">
            @foreach($reels as $reel)
                <div class="snap-start flex-shrink-0 w-[270px] sm:w-[290px] bg-white rounded-2xl border border-gray-200/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col p-3.5">
                    
                    {{-- Badge Kategori --}}
                    <div class="mb-2.5">
                        <span class="inline-block bg-emerald-50 text-brand-green text-[11px] font-bold px-3 py-0.5 rounded-full">
                            {{ $reel['badge'] }}
                        </span>
                    </div>

                    {{-- Custom Header Profil Kita --}}
                    <div class="flex items-center justify-between mb-2.5 px-0.5">
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full bg-brand-green-dark text-brand-green-bright flex items-center justify-center text-[10px] font-black border border-brand-green-bright">
                                CB
                            </div>
                            <div class="leading-none">
                                <p class="text-xs font-bold text-gray-800">cahayabusur...</p>
                                <p class="text-[10px] text-gray-400 mt-0.5">Original audio</p>
                            </div>
                        </div>
                        <a href="https://instagram.com/cahayabusurprint" 
                           target="_blank" 
                           class="bg-rose-500 hover:bg-rose-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-md transition-colors">
                            View Profile
                        </a>
                    </div>

                    {{-- Reel Video Embed (Header Bawaan IG Dipotong Ke Atas) --}}
                    <div class="relative w-full aspect-[9/13] bg-black rounded-xl overflow-hidden mb-3">
                        <iframe src="{{ $reel['embed'] }}" 
                                class="w-full h-[calc(100%+56px)] -mt-[56px] border-none overflow-hidden" 
                                scrolling="no" 
                                allowtransparency="true" 
                                allow="encrypted-media">
                        </iframe>
                    </div>

                    {{-- Footer & Call To Action --}}
                    <div class="flex flex-col justify-between flex-grow gap-3 pt-1">
                        <h3 class="text-xs font-bold text-gray-800 line-clamp-1" title="{{ $reel['title'] }}">
                            {{ $reel['title'] }}
                        </h3>
                        
                        <a href="https://wa.me/6281139415777?text=Halo%20Cahaya%20Busur,%20saya%20tertarik%20dengan%20produk%20di%20video%20{{ urlencode($reel['title']) }}" 
                           target="_blank"
                           class="w-full py-2.5 bg-brand-green-bright hover:bg-emerald-400 text-brand-green-dark text-xs font-extrabold rounded-xl flex items-center justify-center gap-2 shadow-sm transition-all transform hover:-translate-y-0.5">
                            <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                            Pesan Sekarang
                        </a>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>