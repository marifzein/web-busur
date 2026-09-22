@php
  $services = [
    [
      'icon' => 'file-text', 
      'image' => 'ketik-sm.jpg', 
      'name' => 'Pengetikan', 
      'desc' => 'Jasa ketik kilat, rapi, dan sesuai format tugas/kantor.'
    ],
    [
      'icon' => 'copy', 
      'image' => 'ftcopy-ketik.jpg', 
      'name' => 'Foto Copy & Scan', 
      'desc' => 'Fotocopy hitam putih / warna high resolution.'
    ],
    [
      'icon' => 'book-open', 
      'image' => 'jilid.webp', 
      'name' => 'Jilid & Cetak Buku', 
      'desc' => 'Softcover, Hardcover, Spiral, dan Laminasi Doff/Glossy.'
    ],
    [
      'icon' => 'printer', 
      'image' => 'dig-print.webp', 
      'name' => 'Digital Printing', 
      'desc' => 'Banner Outdoor, Banner Indoor, Print A3+, Print Foto.'
    ],
    [
      'icon' => 'badge-check', 
      'image' => 'merchandise.webp', 
      'name' => 'Merchandise & ID', 
      'desc' => 'Name Tag, ID Card, Tali Lanyard, Pin, Mug, & Ganci.'
    ],
    [
      'icon' => 'layers', 
      'image' => 'undangan.jpg', 
      'name' => 'Offset Printing', 
      'desc' => 'Undangan, Brosur, Leaflet, Nota, & Spanduk Kain.'
    ],
    [
      'icon' => 'palette', 
      'image' => 'design.webp', 
      'name' => 'Desain Grafis', 
      'desc' => 'Jasa desain profesional untuk banner, logo, & promosi.'
    ],
    [
      'icon' => 'sliders', 
      'image' => 'brosur.webp', 
      'name' => 'Finishing Dokumen', 
      'desc' => 'Laminasi Doff, Laminasi Glossy, & Laminating Plastik.'
    ],
    [
      'icon' => 'pen-tool', 
      'image' => 'atk.jpg', 
      'name' => 'Alat Tulis Kantor (ATK)', 
      'desc' => 'Pena, kertas, map, dan perlengkapan sekolah & kantor.'
    ],
  ];
@endphp

<section id="layanan" class="py-20 bg-[#F8F9FA]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold tracking-widest text-brand-green uppercase">Layanan Lengkap</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark mt-2">Segala Kebutuhan Cetak & ATK Anda</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $item)
                <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        {{-- Cek jika ada file gambar --}}
                        @if(!empty($item['image']))
                            <div class="w-full h-48 overflow-hidden bg-gray-100">
                                <img src="{{ asset('images/' . $item['image']) }}" 
                                     alt="{{ $item['name'] }}" 
                                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                            </div>
                        @else
                            {{-- Tampilan Ikon default jika belum ada foto --}}
                            <div class="p-6 pb-0">
                                <div class="w-12 h-12 rounded-xl bg-brand-orange/10 text-brand-orange flex items-center justify-center">
                                    <i data-lucide="{{ $item['icon'] }}" class="w-6 h-6"></i>
                                </div>
                            </div>
                        @endif

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-brand-dark mb-2">{{ $item['name'] }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    </div>

                    <div class="px-6 pb-6 pt-0">
                        <a href="https://wa.me/6281139415777?text=Halo%20Cahaya%20Busur,%20saya%20mau%20pesan%20jasa%20{{ urlencode($item['name']) }}" 
                           target="_blank"
                           class="inline-flex items-center justify-between w-full pt-4 border-t border-gray-100 text-brand-green font-bold text-sm hover:text-brand-orange transition-colors">
                            Pesan Jasa Ini
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>