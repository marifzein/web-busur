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

<section id="reels" class="py-16 bg-white overflow-hidden border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10">
            <div>
                <span class="text-xs font-bold tracking-widest text-brand-green uppercase">Portofolio Reels</span>
                <h2 class="text-3xl font-extrabold text-brand-dark mt-1">Dokumentasi Hasil Cetak & Produk</h2>
            </div>

            <!-- Scroll Buttons -->
            <div class="hidden md:flex items-center gap-2 mt-4 md:mt-0" x-data>
                <button @click="$refs.slider.scrollBy({ left: -320, behavior: 'smooth' })" class="p-3 rounded-full bg-gray-100 hover:bg-brand-orange hover:text-white transition-all">
                    <i data-lucide="chevron-left" class="w-5 h-5"></i>
                </button>
                <button @click="$refs.slider.scrollBy({ left: 320, behavior: 'smooth' })" class="p-3 rounded-full bg-gray-100 hover:bg-brand-orange hover:text-white transition-all">
                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                </button>
            </div>
        </div>

        <!-- Carousel -->
        <div x-ref="slider" class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-4 scroll-smooth" style="scrollbar-width: none;">
            @foreach($reels as $reel)
                <div class="snap-start flex-shrink-0 w-[270px] sm:w-[300px] bg-white rounded-2xl border border-gray-200 shadow-md overflow-hidden flex flex-col hover:shadow-xl transition-all">
                    <div class="p-3 border-b border-gray-100 flex items-center justify-between">
                        <span class="text-xs font-bold bg-brand-green/10 text-brand-green px-2.5 py-1 rounded-full">
                            {{ $reel['badge'] }}
                        </span>
                    </div>

                    <div class="relative w-full aspect-[9/13] bg-black">
                        <iframe src="{{ $reel['embed'] }}" class="w-full h-full border-none overflow-hidden" scrolling="no" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>

                    <div class="p-4 flex flex-col justify-between flex-grow gap-3">
                        <h3 class="text-sm font-semibold text-gray-800 line-clamp-2">{{ $reel['title'] }}</h3>
                        <a href="https://wa.me/6281139415777?text=Halo%20Cahaya%20Busur,%20saya%20tertarik%20dengan%20produk%20di%20video%20{{ urlencode($reel['title']) }}" 
                           target="_blank"
                           class="w-full py-2.5 bg-brand-orange hover:bg-brand-orange-hover text-white text-xs font-bold rounded-xl flex items-center justify-center gap-2 shadow transition-colors">
                            <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>