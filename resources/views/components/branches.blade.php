@php
  $branches = [
    [
      'name' => 'Cabang Teuku Umar',
      'address' => 'Jl. Teuku Umar No. 67 (Depan Superindo) Kadipaten - Bojonegoro',
      'hours' => 'Senin - Minggu: 06.00 - 21.00 WIB',
      'map' => 'https://maps.app.goo.gl/1Lxd81EKswpuevR39',
      'wa' => 'https://wa.me/6281139415777'
    ],
    [
      'name' => 'Cabang Pemuda',
      'address' => 'Jl. Pemuda No. 56A (50 meter Timur Bravo Swalayan) Kadipaten - Bojonegoro',
      'hours' => 'Senin - Minggu: 06.00 - 21.00 WIB',
      'map' => 'https://maps.app.goo.gl/XAftKWaDpooFJXTT6',
      'wa' => 'https://wa.me/6281139415777'
    ],
    [
      'name' => 'Cabang Panglima Polim',
      'address' => 'Jl. Panglima Polim No. 63 Sumbang (Selatan Kolam Renang BWS / Utara Islamic Center) - Bojonegoro',
      'hours' => 'Senin - Minggu: 06.00 - 21.00 WIB',
      'map' => 'https://maps.app.goo.gl/VUboBYpcHPveG8aj6',
      'wa' => 'https://wa.me/6281139415777'
    ],
  ];
@endphp

<section id="cabang" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold tracking-widest text-brand-green uppercase">Jangkauan Lokasi</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark mt-2">3 Cabang Toko di Bojonegoro</h2>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            @foreach($branches as $index => $b)
                <div class="bg-[#F8F9FA] rounded-2xl p-6 border border-gray-200 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="bg-brand-green text-white text-xs font-bold px-3 py-1 rounded-full">Cabang {{ $index + 1 }}</span>
                            <span class="text-xs font-bold text-emerald-600 flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Buka Hari Ini
                            </span>
                        </div>
                        
                        <h3 class="text-xl font-bold text-brand-dark">{{ $b['name'] }}</h3>
                        
                        <p class="text-sm text-gray-600 flex items-start gap-2">
                            <i data-lucide="map-pin" class="w-5 h-5 text-brand-orange flex-shrink-0 mt-0.5"></i>
                            {{ $b['address'] }}
                        </p>

                        <p class="text-xs text-gray-500 flex items-center gap-2">
                            <i data-lucide="clock" class="w-4 h-4 text-gray-400"></i>
                            {{ $b['hours'] }}
                        </p>
                    </div>

                    <div class="pt-6 mt-6 border-t border-gray-200 flex gap-3">
                        <a href="{{ $b['map'] }}" target="_blank" class="flex-1 py-2.5 bg-white border border-gray-300 hover:border-brand-green text-brand-dark text-xs font-bold rounded-xl flex items-center justify-center gap-2 transition-all">
                            <i data-lucide="navigation" class="w-4 h-4 text-brand-green"></i>
                            Petunjuk Arah
                        </a>
                        <a href="{{ $b['wa'] }}" target="_blank" class="flex-1 py-2.5 bg-brand-orange hover:bg-brand-orange-hover text-white text-xs font-bold rounded-xl flex items-center justify-center gap-2 transition-all shadow">
                            <i data-lucide="message-square" class="w-4 h-4"></i>
                            Hubungi WA
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>