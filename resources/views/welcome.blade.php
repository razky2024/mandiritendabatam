<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Mandiri Tenda Batam | Sewa Tenda Pernikahan & Event Equipment</title>
    <meta name="description" content="CV. Mandiri Tenda Project - Penyedia jasa sewa tenda pernikahan, tenda roder VIP, sarnafil, panggung, sound system & AC standing terbaik di Batam.">
    
    <!-- OpenGraph Meta Tags -->
    <meta property="og:title" content="Mandiri Tenda Batam | Sewa Tenda Pernikahan & Event Equipment">
    <meta property="og:description" content="Sewa tenda pernikahan mewah, tenda roder event, sarnafil, panggung & AC standing di Batam. Konsultasi & Estimasi Gratis via WhatsApp!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="https://maps.google.com/maps/api/staticmap?center=1.0428255%2C103.9523799&zoom=17&size=900x900">

    <!-- Fonts & Alpine.js -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Schema.org LocalBusiness Structured Data -->
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => 'CV. Mandiri Tenda Project (Mandiri Tenda Batam)',
        'image' => 'https://maps.google.com/maps/api/staticmap?center=1.0428255%2C103.9523799&zoom=17&size=900x900',
        '@id' => url('/'),
        'url' => url('/'),
        'telephone' => '+6281234567890',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Kios Puri Brata No. 11-12, Kavling Lama / Perumahan Buana Indah 1, Blok C3 No. 1',
            'addressLocality' => 'Batam',
            'addressRegion' => 'Kepulauan Riau',
            'postalCode' => '29432',
            'addressCountry' => 'ID'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => 1.0428255,
            'longitude' => 103.9523799
        ],
        'hasMap' => 'https://maps.app.goo.gl/Z1RxTpPtZ14hGZZo7',
        'openingHoursSpecification' => [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => [
                'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
            ],
            'opens' => '08:00',
            'closes' => '20:00'
        ],
        'priceRange' => '$$'
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
    </script>
</head>
<body class="bg-stone-50 text-slate-900 font-sans antialiased selection:bg-amber-500 selection:text-white"
      x-data="mainApp()">

    <!-- Sticky Navigation Header -->
    <header class="fixed top-0 left-0 right-0 z-50 glass-nav-light transition-all duration-300 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="#" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl gold-gradient-bg flex items-center justify-center font-extrabold text-white text-xl shadow-md shadow-amber-500/20 group-hover:scale-105 transition-transform">
                    M
                </div>
                <div class="flex flex-col">
                    <span class="font-extrabold text-lg sm:text-xl tracking-tight text-slate-900 group-hover:text-amber-600 transition-colors">
                        MANDIRI TENDA <span class="gold-gradient-text">BATAM</span>
                    </span>
                    <span class="text-xs text-slate-500 font-medium tracking-widest uppercase">CV. Mandiri Tenda Project</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold">
                <a href="#katalog" class="text-slate-700 hover:text-amber-600 transition-colors">Katalog & Paket</a>
                <a href="#kalkulator" class="text-slate-700 hover:text-amber-600 transition-colors">Estimator Biaya</a>
                <a href="#lokasi" class="text-slate-700 hover:text-amber-600 transition-colors">Lokasi & Kontak</a>
            </nav>

            <div class="flex items-center gap-3">
                <a href="/admin" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-stone-100 hover:bg-stone-200 text-xs font-semibold text-slate-700 border border-stone-300 transition-all">
                    <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    Admin Panel
                </a>
                <button x-on:click="sendWaDirect('Halo Mandiri Tenda Batam, saya ingin konsultasi kebutuhan sewa tenda acara.')" 
                        class="emerald-gradient-bg text-white font-bold px-4 py-2.5 rounded-xl text-sm shadow-md shadow-emerald-600/25 hover:shadow-emerald-600/40 flex items-center gap-2 transition-all transform hover:-translate-y-0.5 active:translate-y-0">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    <span>Hubungi WA</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:pt-44 md:pb-32 overflow-hidden bg-gradient-to-b from-amber-500/5 via-stone-50 to-stone-50">
        <!-- Ambient Light Glows -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-amber-400/15 rounded-full blur-[140px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-100/80 text-amber-800 text-xs sm:text-sm font-bold mb-6 shadow-sm border border-amber-300">
                <span class="w-2.5 h-2.5 rounded-full bg-amber-500 animate-pulse"></span>
                Partner Persewaan Tenda & Peralatan Event Resmi di Batam
            </div>
            
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight leading-tight text-slate-900 mb-8">
                Mewujudkan Pesta & Event Impian <br class="hidden sm:inline"/>
                Dengan <span class="gold-gradient-text">Tenda Dekorasi VIP Terbaik</span>
            </h1>

            <p class="max-w-3xl mx-auto text-base sm:text-xl text-slate-600 font-medium mb-10 leading-relaxed">
                CV. Mandiri Tenda Project melayani sewa tenda pernikahan dekorasi mewah, tenda roder aluminium besar, tenda sarnafil kerucut, panggung rigid, sound system & AC standing di seluruh wilayah Batam.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6 mb-16">
                <a href="#katalog" class="w-full sm:w-auto px-8 py-4 rounded-xl gold-gradient-bg text-white font-extrabold text-base shadow-lg shadow-amber-500/25 hover:shadow-amber-500/40 transition-all transform hover:-translate-y-1">
                    Lihat Paket Katalog Tenda
                </a>
                <a href="#kalkulator" class="w-full sm:w-auto px-8 py-4 rounded-xl glass-panel-light text-slate-800 hover:text-amber-600 font-bold text-base hover:border-amber-400 transition-all transform hover:-translate-y-1 flex items-center justify-center gap-2 shadow-xs">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    Hitung Estimasi Biaya Event
                </a>
            </div>

            <!-- Stats Bar -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto">
                <div class="card-light p-5 rounded-2xl">
                    <div class="text-3xl font-extrabold text-amber-600 mb-1">500+</div>
                    <div class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Event Pernikahan & Perusahaan</div>
                </div>
                <div class="card-light p-5 rounded-2xl">
                    <div class="text-3xl font-extrabold text-amber-600 mb-1">100%</div>
                    <div class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Tepat Waktu Pemasangan</div>
                </div>
                <div class="card-light p-5 rounded-2xl">
                    <div class="text-3xl font-extrabold text-amber-600 mb-1">Clean VIP</div>
                    <div class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Kain & Rangka Bersih Berseri</div>
                </div>
                <div class="card-light p-5 rounded-2xl">
                    <div class="text-3xl font-extrabold text-amber-600 mb-1">Gratis</div>
                    <div class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Survei Lokasi Area Batam</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalog Section with Alpine Tab Filter -->
    <section id="katalog" class="py-24 relative bg-white border-y border-stone-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <h2 class="text-xs uppercase font-extrabold tracking-widest text-amber-600 mb-3">Pilihan Produk & Paket Terbaik</h2>
                <p class="text-3xl sm:text-5xl font-extrabold text-slate-900 tracking-tight">Katalog Persewaan Mandiri Tenda</p>
                <p class="mt-4 text-slate-600 text-sm sm:text-base">Pilih paket tenda pesta fix price atau ajukan custom quote sesuai konsep & anggaran acara Anda.</p>
            </div>

            <!-- Tab Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-12">
                <button x-on:click="activeCategory = 'all'" 
                        :class="activeCategory === 'all' ? 'gold-gradient-bg text-white font-bold shadow-md shadow-amber-500/20' : 'bg-stone-100 text-slate-700 hover:bg-stone-200 border border-stone-200'"
                        class="px-5 py-2.5 rounded-xl text-sm font-semibold transition-all">
                    Semua Produk
                </button>
                @foreach($categories as $cat)
                <button x-on:click="activeCategory = '{{ $cat->id }}'" 
                        :class="activeCategory === '{{ $cat->id }}' ? 'gold-gradient-bg text-white font-bold shadow-md shadow-amber-500/20' : 'bg-stone-100 text-slate-700 hover:bg-stone-200 border border-stone-200'"
                        class="px-5 py-2.5 rounded-xl text-sm font-semibold transition-all">
                    {{ $cat->name }}
                </button>
                @endforeach
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($products as $product)
                <div x-show="activeCategory === 'all' || activeCategory === '{{ $product->category_id }}'"
                     x-transition:enter="transition ease-out duration-300 transform"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="card-light rounded-2xl overflow-hidden flex flex-col justify-between group">
                    <div>
                        <!-- Image Badge & Preview -->
                        <div class="relative h-60 bg-stone-100 overflow-hidden">
                            @if($product->primaryImage || $product->images->first())
                                <img src="{{ asset('storage/' . ($product->primaryImage?->image_path ?? $product->images->first()?->image_path)) }}" 
                                     alt="{{ $product->name }}" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                            @else
                                <div class="w-full h-full flex flex-col items-center justify-center bg-gradient-to-br from-stone-100 to-amber-50 text-slate-400">
                                    <svg class="w-12 h-12 mb-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-500">Mandiri Tenda Batam</span>
                                </div>
                            @endif

                            <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                                <span class="px-3 py-1 rounded-full text-xs font-bold bg-white/90 backdrop-blur-md text-amber-700 border border-amber-300 shadow-xs">
                                    {{ $product->category->name }}
                                </span>
                                @if($product->is_featured)
                                <span class="px-3 py-1 rounded-full text-xs font-extrabold gold-gradient-bg text-white shadow-sm">
                                    ★ Featured
                                </span>
                                @endif
                            </div>
                        </div>

                        <!-- Product Content -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-amber-600 transition-colors">
                                {{ $product->name }}
                            </h3>
                            <p class="text-sm text-slate-600 mb-4 line-clamp-2">
                                {{ $product->short_description }}
                            </p>

                            <!-- Included Items List -->
                            @if(is_array($product->included_items) && count($product->included_items) > 0)
                            <div class="mb-6 border-t border-stone-200 pt-4">
                                <span class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-2 block">Item Termasuk:</span>
                                <ul class="space-y-1.5 text-xs text-slate-700">
                                    @foreach(array_slice($product->included_items, 0, 4) as $item)
                                    <li class="flex items-start gap-2">
                                        <svg class="w-4 h-4 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                        <span>{{ $item }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Card Footer & Pricing -->
                    <div class="p-6 pt-0 border-t border-stone-100 mt-auto">
                        <div class="flex items-baseline justify-between mb-4 pt-4">
                            <span class="text-xs text-slate-500 font-medium">Harga Persewaan:</span>
                            @if($product->price_type === 'fix' && $product->price)
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold gold-gradient-text">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                    @if($product->unit)
                                        <span class="text-xs text-slate-500">/ {{ $product->unit }}</span>
                                    @endif
                                </div>
                            @else
                                <span class="px-3 py-1 rounded-lg bg-amber-100 text-amber-800 text-xs font-extrabold border border-amber-300">
                                    Custom Quote / WA
                                </span>
                            @endif
                        </div>

                        <div class="grid grid-cols-2 gap-3">
                            <button x-on:click="openModal({{ json_encode($product) }})" 
                                    class="w-full py-2.5 rounded-xl bg-stone-100 hover:bg-stone-200 text-slate-800 font-semibold text-xs transition-all flex items-center justify-center gap-1.5 border border-stone-200">
                                <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                Detail Specs
                            </button>

                            <button x-on:click="orderProduct({{ json_encode($product) }})" 
                                    class="w-full py-2.5 rounded-xl emerald-gradient-bg text-white font-extrabold text-xs shadow-md hover:shadow-emerald-600/30 transition-all flex items-center justify-center gap-1.5">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                                Pesan via WA
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Interactive Event Cost Estimator Section -->
    <section id="kalkulator" class="py-24 relative overflow-hidden bg-stone-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="glass-panel-light p-8 sm:p-12 rounded-3xl border border-amber-300 shadow-xl relative">
                <div class="text-center max-w-2xl mx-auto mb-10">
                    <span class="px-4 py-1.5 rounded-full text-xs font-extrabold gold-gradient-bg text-white uppercase tracking-widest mb-3 inline-block shadow-sm">
                        Fitur Instan Evaluasi
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">Kalkulator Estimasi Biaya Event</h2>
                    <p class="text-slate-600 text-sm mt-2">Hitung perkiraan kebutuhan anggaran tenda & perlengkapan berdasarkan estimasi jumlah tamu pesta Anda di Batam.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- Calculator Inputs (7 Cols) -->
                    <div class="lg:col-span-7 space-y-6">
                        <!-- Guest Count Slider -->
                        <div class="bg-white p-5 rounded-2xl border border-stone-200 shadow-xs">
                            <div class="flex items-center justify-between mb-3">
                                <label class="text-sm font-bold text-slate-800 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                    Jumlah Tamu Undangan:
                                </label>
                                <span class="text-2xl font-extrabold gold-gradient-text" x-text="calcGuests + ' Tamu'">500 Tamu</span>
                            </div>
                            <input type="range" min="50" max="1000" step="10" x-model="calcGuests" 
                                   class="w-full h-3 bg-stone-200 rounded-lg appearance-none cursor-pointer accent-amber-500">
                            <div class="flex justify-between text-xs text-slate-500 font-semibold mt-2">
                                <span>50 Tamu</span>
                                <span>500 Tamu</span>
                                <span>1.000 Tamu</span>
                            </div>
                        </div>

                        <!-- Event Type Selector -->
                        <div class="bg-white p-5 rounded-2xl border border-stone-200 shadow-xs">
                            <label class="text-sm font-bold text-slate-800 mb-3 block">Jenis Acara / Event:</label>
                            <div class="grid grid-cols-3 gap-3">
                                <button x-on:click="calcEventType = 'wedding'" 
                                        :class="calcEventType === 'wedding' ? 'border-amber-500 bg-amber-50 text-amber-800 font-bold' : 'border-stone-200 text-slate-600 hover:bg-stone-50'"
                                        class="p-3 rounded-xl border text-xs text-center transition-all">
                                    Resepsi Pernikahan
                                </button>
                                <button x-on:click="calcEventType = 'corporate'" 
                                        :class="calcEventType === 'corporate' ? 'border-amber-500 bg-amber-50 text-amber-800 font-bold' : 'border-stone-200 text-slate-600 hover:bg-stone-50'"
                                        class="p-3 rounded-xl border text-xs text-center transition-all">
                                    Corporate / Peresmian
                                </button>
                                <button x-on:click="calcEventType = 'bazar'" 
                                        :class="calcEventType === 'bazar' ? 'border-amber-500 bg-amber-50 text-amber-800 font-bold' : 'border-stone-200 text-slate-600 hover:bg-stone-50'"
                                        class="p-3 rounded-xl border text-xs text-center transition-all">
                                    Bazar / Pameran
                                </button>
                            </div>
                        </div>

                        <!-- Addon Toggles -->
                        <div class="bg-white p-5 rounded-2xl border border-stone-200 shadow-xs">
                            <label class="text-sm font-bold text-slate-800 mb-3 block">Pilihan Perlengkapan Tambahan (Add-ons):</label>
                            <div class="space-y-3">
                                <label class="flex items-center justify-between p-3 rounded-xl border border-stone-200 cursor-pointer hover:bg-stone-50">
                                    <span class="text-xs text-slate-700 font-medium flex items-center gap-2">
                                        <input type="checkbox" x-model="calcAddons.ac" class="rounded border-stone-300 text-amber-600 focus:ring-amber-500">
                                        Standing AC 5 PK / Cooling Fans (2 Unit)
                                    </span>
                                    <span class="text-xs font-bold text-amber-700">+ Rp 2.500.000</span>
                                </label>
                                <label class="flex items-center justify-between p-3 rounded-xl border border-stone-200 cursor-pointer hover:bg-stone-50">
                                    <span class="text-xs text-slate-700 font-medium flex items-center gap-2">
                                        <input type="checkbox" x-model="calcAddons.stage" class="rounded border-stone-300 text-amber-600 focus:ring-amber-500">
                                        Upgrade Panggung Dekorasi VIP & Red Carpet
                                    </span>
                                    <span class="text-xs font-bold text-amber-700">+ Rp 1.800.000</span>
                                </label>
                                <label class="flex items-center justify-between p-3 rounded-xl border border-stone-200 cursor-pointer hover:bg-stone-50">
                                    <span class="text-xs text-slate-700 font-medium flex items-center gap-2">
                                        <input type="checkbox" x-model="calcAddons.flooring" class="rounded border-stone-300 text-amber-600 focus:ring-amber-500">
                                        Flooring Papan + Karpet VIP Karpet Buana
                                    </span>
                                    <span class="text-xs font-bold text-amber-700">+ Rp 2.000.000</span>
                                </label>
                                <label class="flex items-center justify-between p-3 rounded-xl border border-stone-200 cursor-pointer hover:bg-stone-50">
                                    <span class="text-xs text-slate-700 font-medium flex items-center gap-2">
                                        <input type="checkbox" x-model="calcAddons.sound" class="rounded border-stone-300 text-amber-600 focus:ring-amber-500">
                                        Sound System Pro Audio & Lighting Stage
                                    </span>
                                    <span class="text-xs font-bold text-amber-700">+ Rp 3.500.000</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Output Card (5 Cols) -->
                    <div class="lg:col-span-5 bg-gradient-to-b from-stone-900 to-slate-900 text-white p-6 sm:p-8 rounded-2xl border border-amber-400 shadow-xl flex flex-col justify-between h-full">
                        <div>
                            <div class="text-xs font-extrabold uppercase tracking-widest text-amber-400 mb-2">Perkiraan Biaya</div>
                            <div class="text-3xl sm:text-4xl font-extrabold text-amber-400 mb-6" x-text="formatRupiah(calculateTotalCost())">
                                Rp 0
                            </div>

                            <div class="border-t border-slate-700 pt-4 space-y-3 mb-6">
                                <div class="flex justify-between text-xs text-slate-300">
                                    <span>Kapasitas:</span>
                                    <span class="font-bold text-white" x-text="calcGuests + ' Tamu'">-</span>
                                </div>
                                <div class="flex justify-between text-xs text-slate-300">
                                    <span>Tipe Acara:</span>
                                    <span class="font-bold text-white uppercase" x-text="calcEventType">-</span>
                                </div>
                                <div class="flex justify-between text-xs text-slate-300">
                                    <span>Area Layanan:</span>
                                    <span class="font-bold text-amber-400">Seluruh Kota Batam</span>
                                </div>
                            </div>
                            
                            <p class="text-xs text-slate-400 italic mb-6 leading-relaxed">
                                *Estimasi bersifat indikatif. Tim kami akan melakukan survei lokasi gratis dan menyesuaikan kebutuhan layout persis di lapangan.
                            </p>
                        </div>

                        <button x-on:click="sendCalculatorWa()" 
                                class="w-full py-4 rounded-xl emerald-gradient-bg text-white font-extrabold text-sm shadow-lg shadow-emerald-600/30 hover:shadow-emerald-600/50 transition-all flex items-center justify-center gap-2 transform hover:-translate-y-0.5">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                            Kirim Estimasi ke WhatsApp
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location & Business Details Section -->
    <section id="lokasi" class="py-24 relative bg-white border-t border-stone-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6 space-y-6">
                    <span class="text-xs uppercase font-extrabold tracking-widest text-amber-600">Kontak Resmi & Alamat Usaha</span>
                    <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 tracking-tight">CV. Mandiri Tenda Project</h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Kami adalah penyedia sewa tenda profesional terpercaya di Batam. Berpengalaman menangani event skala kecil hingga besar dengan armada lengkap dan kru terampil.
                    </p>

                    <div class="space-y-4 pt-2">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center shrink-0 border border-amber-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wider text-slate-500 block">Alamat Kantor / Gudang:</span>
                                <p class="text-sm font-semibold text-slate-900 mt-0.5">
                                    Kios Puri Brata No. 11-12, Kavling Lama / Perumahan Buana Indah 1, Blok C3 No. 1, Batam, Kepulauan Riau 29432.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center shrink-0 border border-amber-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h32a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                            </div>
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wider text-slate-500 block">Jam Operasional:</span>
                                <p class="text-sm font-semibold text-slate-900 mt-0.5">Senin - Minggu: 08.00 - 20.00 WIB (Layanan Darurat Event 24 Jam)</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="https://maps.app.goo.gl/Z1RxTpPtZ14hGZZo7" target="_blank" rel="noopener" 
                           class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl glass-panel-light text-amber-700 hover:text-amber-800 font-bold text-sm border border-amber-300 transition-all hover:bg-amber-50">
                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            Buka Petunjuk Arah di Google Maps
                        </a>
                    </div>
                </div>

                <!-- Google Maps Embed / Card -->
                <div class="lg:col-span-6">
                    <div class="card-light p-4 rounded-3xl overflow-hidden shadow-sm">
                        <div class="relative w-full h-80 rounded-2xl overflow-hidden bg-stone-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3989.1574912488536!2d103.9523799!3d1.0428255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMcKwMDInMzQuMiJOIDEwM8KwNTcnMDguNiJF!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                                    class="w-full h-full border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 border-t border-stone-200 bg-stone-100 text-center text-xs text-slate-500">
        <div class="max-w-7xl mx-auto px-4">
            <p>© {{ date('Y') }} Mandiri Tenda Batam (CV. Mandiri Tenda Project). All rights reserved.</p>
        </div>
    </footer>

    <!-- Product Lightbox Modal -->
    <div x-show="modalOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm" x-cloak>
        
        <div x-on:click.away="modalOpen = false" 
             class="bg-white w-full max-w-3xl rounded-3xl overflow-hidden shadow-2xl border border-stone-200 max-h-[90vh] flex flex-col">
            
            <!-- Modal Header -->
            <div class="p-6 border-b border-stone-200 flex items-center justify-between bg-stone-50">
                <div>
                    <span class="text-xs font-bold text-amber-700 uppercase tracking-widest" x-text="selectedProduct?.category?.name">Kategori</span>
                    <h3 class="text-2xl font-extrabold text-slate-900 mt-0.5" x-text="selectedProduct?.name">Nama Produk</h3>
                </div>
                <button x-on:click="modalOpen = false" class="text-slate-400 hover:text-slate-700 p-2 rounded-xl bg-stone-100 border border-stone-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <!-- Modal Content (Scrollable) -->
            <div class="p-6 overflow-y-auto space-y-6 flex-1">
                <p class="text-sm text-slate-700 leading-relaxed" x-text="selectedProduct?.full_description || selectedProduct?.short_description"></p>

                <!-- Included Items list -->
                <template x-if="selectedProduct?.included_items && selectedProduct?.included_items.length > 0">
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-wider text-amber-700 mb-3">Kelengkapan Paket:</h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                            <template x-for="item in selectedProduct.included_items">
                                <div class="flex items-center gap-2 text-xs text-slate-800 bg-stone-50 p-2.5 rounded-xl border border-stone-200">
                                    <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                    <span x-text="item"></span>
                                </div>
                            </template>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Modal Footer -->
            <div class="p-6 border-t border-stone-200 bg-stone-50 flex items-center justify-between">
                <div>
                    <span class="text-xs text-slate-500 block">Estimasi Harga:</span>
                    <span class="text-xl font-extrabold gold-gradient-text" x-text="selectedProduct?.price_type === 'fix' ? 'Rp ' + Number(selectedProduct.price).toLocaleString('id-ID') : 'Custom Quote / WA'"></span>
                </div>
                <button x-on:click="orderProduct(selectedProduct)" 
                        class="px-6 py-3 rounded-xl emerald-gradient-bg text-white font-extrabold text-sm shadow-md hover:shadow-emerald-600/30 flex items-center gap-2 transition-all">
                    <span>Pesan via WhatsApp</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Floating WhatsApp CTA Button (Emerald Green) -->
    <button x-on:click="sendWaDirect('Halo Mandiri Tenda Batam, saya ingin bertanya tentang sewa tenda.')" 
            class="fixed bottom-6 right-6 z-40 w-14 h-14 rounded-full emerald-gradient-bg text-white shadow-2xl shadow-emerald-600/40 flex items-center justify-center hover:scale-110 active:scale-95 transition-all group">
        <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
    </button>

    <script>
    function mainApp() {
        return {
            activeCategory: 'all',
            modalOpen: false,
            selectedProduct: null,
            waNumber: '6281234567890',
            
            // Calculator State
            calcGuests: 250,
            calcEventType: 'wedding',
            calcAddons: {
                ac: true,
                stage: true,
                flooring: false,
                sound: true,
            },

            openModal(product) {
                this.selectedProduct = product;
                this.modalOpen = true;
            },

            calculateTotalCost() {
                let base = 0;
                let perGuest = 0;

                if (this.calcEventType === 'wedding') {
                    base = 3000000;
                    perGuest = 12000;
                } else if (this.calcEventType === 'corporate') {
                    base = 5000000;
                    perGuest = 15000;
                } else {
                    base = 2000000;
                    perGuest = 8000;
                }

                let total = base + (this.calcGuests * perGuest);

                if (this.calcAddons.ac) total += 2500000;
                if (this.calcAddons.stage) total += 1800000;
                if (this.calcAddons.flooring) total += 2000000;
                if (this.calcAddons.sound) total += 3500000;

                return total;
            },

            formatRupiah(num) {
                return 'Rp ' + Number(num).toLocaleString('id-ID');
            },

            logInquiry(payload) {
                fetch('/api/inquiry', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(payload)
                }).catch(err => console.log('Inquiry logging:', err));
            },

            sendWaDirect(msg, productId = null) {
                this.logInquiry({
                    product_id: productId,
                    inquiry_type: 'whatsapp_direct',
                    raw_payload: { message: msg }
                });
                const url = `https://wa.me/${this.waNumber}?text=${encodeURIComponent(msg)}`;
                window.open(url, '_blank');
            },

            orderProduct(product) {
                const priceText = product.price_type === 'fix' ? `seharga ${this.formatRupiah(product.price)}` : 'dengan custom quote';
                const msg = `Halo Mandiri Tenda Batam, saya tertarik dengan paket ${product.name} ${priceText}. Apakah ready untuk konsultasi tanggal acara?`;
                this.sendWaDirect(msg, product.id);
            },

            sendCalculatorWa() {
                const addonsList = [];
                if (this.calcAddons.ac) addonsList.push('Standing AC/Cooling');
                if (this.calcAddons.stage) addonsList.push('Stage Decor VIP');
                if (this.calcAddons.flooring) addonsList.push('Flooring Kayu');
                if (this.calcAddons.sound) addonsList.push('Sound & Lighting');

                const totalStr = this.formatRupiah(this.calculateTotalCost());
                const msg = `Halo Mandiri Tenda Batam, saya telah menghitung estimasi di web:\n- Jumlah Tamu: ${this.calcGuests} Tamu\n- Jenis Acara: ${this.calcEventType.toUpperCase()}\n- Addons: ${addonsList.join(', ') || 'Tanpa Add-on'}\n- Perkiraan Total: ${totalStr}\n\nMohon info kelanjutan dan jadwal survei lokasi.`;

                this.logInquiry({
                    inquiry_type: 'calculator_quote',
                    raw_payload: {
                        guests: this.calcGuests,
                        eventType: this.calcEventType,
                        addons: this.calcAddons,
                        totalCost: totalStr
                    }
                });

                const url = `https://wa.me/${this.waNumber}?text=${encodeURIComponent(msg)}`;
                window.open(url, '_blank');
            }
        }
    }
    </script>
</body>
</html>
