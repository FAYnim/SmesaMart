<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmesaMart - Belanja Kebutuhan Sehari-hari</title>
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            200: '#a7f3d0',
                            300: '#6ee7b7',
                            400: '#34d399',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            800: '#1a5d38', // SmesaMart primary green
                            900: '#134e32', // SmesaMart dark green
                            950: '#0c3522',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom scrollbar hide for categories */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-[#f9fafb] text-gray-800 font-sans antialiased min-h-screen flex flex-col">

    <!-- TOP HEADER -->
    <header class="bg-white border-b border-gray-100 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3.5">
            <div class="flex items-center justify-between gap-4">
                
                <!-- Brand Logo -->
                <a href="/" class="flex items-center gap-2 shrink-0 group">
                    <!-- SmesaMart Logo Icon -->
                    <div class="w-9 h-9 rounded-lg bg-brand-800 flex items-center justify-center shadow-xs group-hover:bg-brand-900 transition">
                        <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <span class="text-xl font-extrabold text-brand-800 tracking-tight">SmesaMart</span>
                </a>

                <!-- Search Input Bar -->
                <div class="flex-1 max-w-xl hidden md:block">
                    <div class="relative flex items-center rounded-full border border-gray-200 bg-white pl-5 pr-1.5 py-1.5 focus-within:border-brand-800 focus-within:ring-2 focus-within:ring-brand-100 transition shadow-xs">
                        <input 
                            type="text" 
                            id="searchInput"
                            placeholder="Temukan produk favoritmu di sini..." 
                            class="w-full bg-transparent text-sm text-gray-700 placeholder-gray-400 focus:outline-none pr-3"
                        />
                        <button 
                            type="button" 
                            aria-label="Cari Produk"
                            class="w-8 h-8 rounded-full bg-brand-800 hover:bg-brand-900 text-white flex items-center justify-center shrink-0 transition"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Right Action Icons & Buttons -->
                <div class="flex items-center gap-3 sm:gap-4 shrink-0">
                    <!-- Cart Icon with Badge -->
                    <button id="cartBtn" class="relative p-2 text-gray-700 hover:text-brand-800 transition" aria-label="Keranjang Belanja">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span id="cartBadge" class="absolute top-0.5 right-0.5 bg-brand-800 text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-xs">3</span>
                    </button>

                    <!-- User Profile Icon -->
                    <button class="p-2 text-gray-700 hover:text-brand-800 transition" aria-label="Profil Akun">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </button>

                    <!-- Auth Links -->
                    <a href="#daftar" class="text-sm font-semibold text-gray-700 hover:text-brand-800 transition hidden sm:inline-block">Daftar</a>
                    <a href="#masuk" class="text-sm font-semibold text-white bg-brand-800 hover:bg-brand-900 px-5 py-2 rounded-full shadow-xs transition">Masuk</a>
                </div>
            </div>

            <!-- Mobile Search Bar (Visible on mobile screens) -->
            <div class="mt-3 md:hidden">
                <div class="relative flex items-center rounded-full border border-gray-200 bg-white pl-4 pr-1.5 py-1.5 focus-within:border-brand-800 focus-within:ring-2 focus-within:ring-brand-100 transition shadow-xs">
                    <input 
                        type="text" 
                        placeholder="Temukan produk favoritmu di sini..." 
                        class="w-full bg-transparent text-sm text-gray-700 placeholder-gray-400 focus:outline-none pr-3"
                    />
                    <button 
                        type="button" 
                        class="w-8 h-8 rounded-full bg-brand-800 text-white flex items-center justify-center shrink-0"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-4">

        <!-- CATEGORY PILLS BAR -->
        <nav class="flex items-center gap-2.5 overflow-x-auto no-scrollbar py-2 mb-4">
            <button class="category-pill active bg-brand-800 text-white text-xs font-semibold px-4 py-2 rounded-full whitespace-nowrap shadow-xs transition">
                Semua
            </button>
            <button class="category-pill border border-red-400 text-red-500 hover:bg-red-50 text-xs font-semibold px-4 py-2 rounded-full whitespace-nowrap transition">
                Flash Sale
            </button>
            <button class="category-pill bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-medium px-4 py-2 rounded-full whitespace-nowrap transition">
                Sembako
            </button>
            <button class="category-pill bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-medium px-4 py-2 rounded-full whitespace-nowrap transition">
                Minuman
            </button>
            <button class="category-pill bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-medium px-4 py-2 rounded-full whitespace-nowrap transition">
                Makanan
            </button>
            <button class="category-pill bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-medium px-4 py-2 rounded-full whitespace-nowrap transition">
                Daging
            </button>
            <button class="category-pill bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-medium px-4 py-2 rounded-full whitespace-nowrap transition">
                Susu
            </button>
            <button class="category-pill bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-medium px-4 py-2 rounded-full whitespace-nowrap transition">
                Kesehatan
            </button>
            <button class="category-pill bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-medium px-4 py-2 rounded-full whitespace-nowrap transition">
                Ibu & Bayi
            </button>
            <button class="category-pill bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-medium px-4 py-2 rounded-full whitespace-nowrap transition">
                Rumah Tangga
            </button>
            <button class="category-pill bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-medium px-4 py-2 rounded-full whitespace-nowrap transition">
                Kecantikan
            </button>
        </nav>

        <!-- HERO PROMO BANNER SECTION -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-8">
            <!-- Left Banner (Main Carousel / Promo Card) - Takes 2 Columns on LG -->
            <div class="lg:col-span-2 relative bg-gradient-to-r from-[#18643b] via-[#1d7445] to-[#155a34] rounded-2xl overflow-hidden shadow-sm flex flex-col md:flex-row justify-between min-h-[260px] p-6 sm:p-8 text-white">
                <!-- Background subtle decorative circles/pattern -->
                <div class="absolute -right-12 -bottom-12 w-64 h-64 rounded-full bg-white/5 pointer-events-none"></div>
                <div class="absolute left-1/3 -top-10 w-48 h-48 rounded-full bg-white/5 pointer-events-none"></div>

                <!-- Text Content -->
                <div class="relative z-10 flex flex-col justify-between max-w-md">
                    <div>
                        <span class="inline-block bg-white/20 backdrop-blur-xs text-white text-[11px] font-semibold px-3 py-1 rounded-full uppercase tracking-wider mb-4">
                            PROMO SPESIAL
                        </span>
                        <h1 class="text-2xl sm:text-3xl font-extrabold leading-tight text-white mb-2">
                            SmesaMart Promo: Diskon Sembako s.d. 50%!
                        </h1>
                        <p class="text-xs sm:text-sm text-emerald-100/90 font-normal leading-relaxed mb-6">
                            Dapatkan Beras, Minyak Goreng, dan Gula Termurah di SmesaMart!
                        </p>
                    </div>

                    <div>
                        <a href="#promo" class="inline-flex items-center justify-center bg-white text-brand-800 hover:bg-emerald-50 text-xs sm:text-sm font-bold px-5 py-2.5 rounded-full shadow-xs transition duration-200">
                            Cek Promo Sekarang
                        </a>
                    </div>
                </div>

                <!-- Product Showcase / Image Content -->
                <div class="relative z-10 mt-6 md:mt-0 flex items-center justify-center shrink-0 md:w-5/12">
                    <div class="relative w-full max-w-[280px] rounded-xl overflow-hidden shadow-md bg-emerald-900/40 p-2 border border-white/10">
                        <img 
                            src="https://images.unsplash.com/photo-1542838132-92c53300491e?w=600&auto=format&fit=crop&q=80" 
                            alt="Promo Sembako SmesaMart" 
                            class="w-full h-44 sm:h-48 object-cover rounded-lg"
                        />
                    </div>
                </div>
            </div>

            <!-- Right Column - 2 Stacked Promo Banners -->
            <div class="flex flex-col gap-4">
                <!-- Top Card: Gratis Ongkir -->
                <div class="relative flex-1 bg-gradient-to-r from-[#1e6b3f] to-[#185834] rounded-2xl p-5 text-white flex items-center justify-between overflow-hidden shadow-sm group">
                    <div class="relative z-10 flex flex-col justify-between h-full max-w-[58%]">
                        <div>
                            <!-- Delivery Icon Badge -->
                            <div class="w-7 h-7 rounded-lg bg-white/15 flex items-center justify-center mb-2.5">
                                <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="1" y="3" width="15" height="13"></rect>
                                    <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                    <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                    <circle cx="18.5" cy="18.5" r="2.5"></circle>
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold leading-snug">Gratis Ongkir</h3>
                            <p class="text-[11px] text-emerald-100/80 mt-0.5 line-clamp-1">Untuk semua produk segar</p>
                        </div>
                        <div class="mt-3">
                            <a href="#gratis-ongkir" class="inline-block bg-white/20 hover:bg-white/30 text-white text-[11px] font-semibold px-3 py-1.5 rounded-full transition">
                                Belanja Sekarang
                            </a>
                        </div>
                    </div>
                    <!-- Right Illustration / Graphic for Delivery Truck -->
                    <div class="relative z-10 w-28 h-24 flex items-center justify-center shrink-0">
                        <div class="w-full h-full bg-emerald-500/20 rounded-xl flex items-center justify-center p-2 border border-emerald-400/20 group-hover:scale-105 transition duration-300">
                            <svg class="w-16 h-16 text-emerald-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="1" y="3" width="15" height="13" rx="1"></rect>
                                <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                <circle cx="18.5" cy="18.5" r="2.5"></circle>
                                <line x1="1" y1="9" x2="16" y2="9"></line>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Bottom Card: Flash Sale Produk Daging -->
                <div class="relative flex-1 bg-gradient-to-r from-[#1e6b3f] to-[#185834] rounded-2xl p-5 text-white flex items-center justify-between overflow-hidden shadow-sm group">
                    <div class="relative z-10 flex flex-col justify-between h-full max-w-[58%]">
                        <div>
                            <!-- Flash / Lightning Badge -->
                            <div class="w-7 h-7 rounded-lg bg-amber-400/20 text-amber-300 flex items-center justify-center mb-2.5 font-bold">
                                <svg class="w-4 h-4 text-amber-400" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold leading-snug">Flash Sale: Produk Daging</h3>
                            <p class="text-[11px] text-emerald-100/80 mt-0.5 line-clamp-1">Diskon hingga 45% hari ini!</p>
                        </div>
                        <div class="mt-3">
                            <a href="#flashsale" class="inline-block bg-white/20 hover:bg-white/30 text-white text-[11px] font-semibold px-3 py-1.5 rounded-full transition">
                                Lihat Flash Sale
                            </a>
                        </div>
                    </div>
                    <!-- Right Image for Meat / Products -->
                    <div class="relative z-10 w-28 h-24 shrink-0 rounded-xl overflow-hidden shadow-inner border border-white/10 group-hover:scale-105 transition duration-300">
                        <img 
                            src="https://images.unsplash.com/photo-1607623814075-e51df1bdc82f?w=300&auto=format&fit=crop&q=80" 
                            alt="Flash Sale Produk Daging" 
                            class="w-full h-full object-cover"
                        />
                    </div>
                </div>
            </div>
        </div>

        <!-- FLASH SALE SECTION HEADER -->
        <div class="flex items-center justify-between flex-wrap gap-4 mb-6">
            <div class="flex items-center flex-wrap gap-2 sm:gap-3">
                <!-- Flash Sale Title & Icon -->
                <div class="flex items-center gap-1.5">
                    <span class="text-amber-500 text-xl animate-pulse">⚡</span>
                    <h2 class="text-xl sm:text-2xl font-black text-gray-900 tracking-tight">Flash Sale</h2>
                </div>
                
                <!-- Countdown Label -->
                <span class="text-xs sm:text-sm font-medium text-gray-500 ml-1 sm:ml-2">Berakhir dalam</span>

                <!-- Countdown Timer Badges -->
                <div class="flex items-center gap-1.5 ml-1">
                    <div id="hours" class="bg-brand-800 text-white font-bold text-xs px-2.5 py-1 rounded-md min-w-[28px] text-center shadow-xs">
                        02
                    </div>
                    <span class="font-bold text-gray-700 text-xs">:</span>
                    <div id="minutes" class="bg-brand-800 text-white font-bold text-xs px-2.5 py-1 rounded-md min-w-[28px] text-center shadow-xs">
                        45
                    </div>
                    <span class="font-bold text-gray-700 text-xs">:</span>
                    <div id="seconds" class="bg-brand-800 text-white font-bold text-xs px-2.5 py-1 rounded-md min-w-[28px] text-center shadow-xs">
                        48
                    </div>
                </div>
            </div>

            <!-- "Lihat Semua" Link -->
            <a href="#flashsale" class="text-xs sm:text-sm font-bold text-brand-800 hover:text-brand-900 flex items-center gap-1 transition group">
                Lihat Semua
                <svg class="w-4 h-4 group-hover:translate-x-0.5 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </a>
        </div>

        <!-- PRODUCT CARDS GRID (3 Columns x 3 Rows = 9 Cards) -->
        <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Card 1 -->
            <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-xs hover:shadow-md hover:-translate-y-0.5 transition duration-200 flex flex-col justify-between group">
                <div>
                    <!-- Product Image Container -->
                    <div class="w-full h-52 bg-gray-50/75 rounded-xl flex items-center justify-center p-3 mb-3 overflow-hidden">
                        <img 
                            src="https://placehold.co/360x360/f3f4f6/1a5d38?text=Indomilk+Coklat" 
                            alt="Indomilk Susu UHT Coklat 1000ml" 
                            class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition duration-300"
                            loading="lazy"
                        />
                    </div>
                    <!-- Brand -->
                    <p class="text-[10px] font-bold text-brand-800 uppercase tracking-wider mb-1">INDOMILK</p>
                    <!-- Title -->
                    <h3 class="text-sm font-semibold text-gray-900 group-hover:text-brand-800 transition line-clamp-2 leading-snug">
                        Susu UHT Coklat 1000ml
                    </h3>
                    <!-- Rating & Sales -->
                    <div class="flex items-center gap-1 mt-2 text-xs">
                        <span class="text-amber-400">★</span>
                        <span class="font-bold text-gray-800">4.8</span>
                        <span class="text-gray-400">(12k terjual)</span>
                    </div>
                </div>
                <!-- Price & Add Button -->
                <div class="flex items-end justify-between mt-4 pt-2 border-t border-gray-50">
                    <div>
                        <div class="text-base font-extrabold text-gray-900">Rp22.500</div>
                        <div class="text-xs text-gray-400 line-through -mt-0.5">Rp26.000</div>
                    </div>
                    <button class="add-to-cart-btn w-9 h-9 rounded-full bg-brand-800 hover:bg-brand-900 text-white flex items-center justify-center shadow-xs active:scale-95 transition" aria-label="Tambah ke keranjang">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-xs hover:shadow-md hover:-translate-y-0.5 transition duration-200 flex flex-col justify-between group">
                <div>
                    <div class="w-full h-52 bg-gray-50/75 rounded-xl flex items-center justify-center p-3 mb-3 overflow-hidden">
                        <img 
                            src="https://placehold.co/360x360/f3f4f6/1a5d38?text=Indomilk+Coklat" 
                            alt="Indomilk Susu UHT Coklat 1000ml" 
                            class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition duration-300"
                            loading="lazy"
                        />
                    </div>
                    <p class="text-[10px] font-bold text-brand-800 uppercase tracking-wider mb-1">INDOMILK</p>
                    <h3 class="text-sm font-semibold text-gray-900 group-hover:text-brand-800 transition line-clamp-2 leading-snug">
                        Susu UHT Coklat 1000ml
                    </h3>
                    <div class="flex items-center gap-1 mt-2 text-xs">
                        <span class="text-amber-400">★</span>
                        <span class="font-bold text-gray-800">4.8</span>
                        <span class="text-gray-400">(12k terjual)</span>
                    </div>
                </div>
                <div class="flex items-end justify-between mt-4 pt-2 border-t border-gray-50">
                    <div>
                        <div class="text-base font-extrabold text-gray-900">Rp22.500</div>
                        <div class="text-xs text-gray-400 line-through -mt-0.5">Rp26.000</div>
                    </div>
                    <button class="add-to-cart-btn w-9 h-9 rounded-full bg-brand-800 hover:bg-brand-900 text-white flex items-center justify-center shadow-xs active:scale-95 transition" aria-label="Tambah ke keranjang">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-xs hover:shadow-md hover:-translate-y-0.5 transition duration-200 flex flex-col justify-between group">
                <div>
                    <div class="w-full h-52 bg-gray-50/75 rounded-xl flex items-center justify-center p-3 mb-3 overflow-hidden">
                        <img 
                            src="https://placehold.co/360x360/f3f4f6/1a5d38?text=Indomilk+Coklat" 
                            alt="Indomilk Susu UHT Coklat 1000ml" 
                            class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition duration-300"
                            loading="lazy"
                        />
                    </div>
                    <p class="text-[10px] font-bold text-brand-800 uppercase tracking-wider mb-1">INDOMILK</p>
                    <h3 class="text-sm font-semibold text-gray-900 group-hover:text-brand-800 transition line-clamp-2 leading-snug">
                        Susu UHT Coklat 1000ml
                    </h3>
                    <div class="flex items-center gap-1 mt-2 text-xs">
                        <span class="text-amber-400">★</span>
                        <span class="font-bold text-gray-800">4.8</span>
                        <span class="text-gray-400">(12k terjual)</span>
                    </div>
                </div>
                <div class="flex items-end justify-between mt-4 pt-2 border-t border-gray-50">
                    <div>
                        <div class="text-base font-extrabold text-gray-900">Rp22.500</div>
                        <div class="text-xs text-gray-400 line-through -mt-0.5">Rp26.000</div>
                    </div>
                    <button class="add-to-cart-btn w-9 h-9 rounded-full bg-brand-800 hover:bg-brand-900 text-white flex items-center justify-center shadow-xs active:scale-95 transition" aria-label="Tambah ke keranjang">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-xs hover:shadow-md hover:-translate-y-0.5 transition duration-200 flex flex-col justify-between group">
                <div>
                    <div class="w-full h-52 bg-gray-50/75 rounded-xl flex items-center justify-center p-3 mb-3 overflow-hidden">
                        <img 
                            src="https://placehold.co/360x360/f3f4f6/1a5d38?text=Indomilk+Coklat" 
                            alt="Indomilk Susu UHT Coklat 1000ml" 
                            class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition duration-300"
                            loading="lazy"
                        />
                    </div>
                    <p class="text-[10px] font-bold text-brand-800 uppercase tracking-wider mb-1">INDOMILK</p>
                    <h3 class="text-sm font-semibold text-gray-900 group-hover:text-brand-800 transition line-clamp-2 leading-snug">
                        Susu UHT Coklat 1000ml
                    </h3>
                    <div class="flex items-center gap-1 mt-2 text-xs">
                        <span class="text-amber-400">★</span>
                        <span class="font-bold text-gray-800">4.8</span>
                        <span class="text-gray-400">(12k terjual)</span>
                    </div>
                </div>
                <div class="flex items-end justify-between mt-4 pt-2 border-t border-gray-50">
                    <div>
                        <div class="text-base font-extrabold text-gray-900">Rp22.500</div>
                        <div class="text-xs text-gray-400 line-through -mt-0.5">Rp26.000</div>
                    </div>
                    <button class="add-to-cart-btn w-9 h-9 rounded-full bg-brand-800 hover:bg-brand-900 text-white flex items-center justify-center shadow-xs active:scale-95 transition" aria-label="Tambah ke keranjang">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-xs hover:shadow-md hover:-translate-y-0.5 transition duration-200 flex flex-col justify-between group">
                <div>
                    <div class="w-full h-52 bg-gray-50/75 rounded-xl flex items-center justify-center p-3 mb-3 overflow-hidden">
                        <img 
                            src="https://placehold.co/360x360/f3f4f6/1a5d38?text=Indomilk+Coklat" 
                            alt="Indomilk Susu UHT Coklat 1000ml" 
                            class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition duration-300"
                            loading="lazy"
                        />
                    </div>
                    <p class="text-[10px] font-bold text-brand-800 uppercase tracking-wider mb-1">INDOMILK</p>
                    <h3 class="text-sm font-semibold text-gray-900 group-hover:text-brand-800 transition line-clamp-2 leading-snug">
                        Susu UHT Coklat 1000ml
                    </h3>
                    <div class="flex items-center gap-1 mt-2 text-xs">
                        <span class="text-amber-400">★</span>
                        <span class="font-bold text-gray-800">4.8</span>
                        <span class="text-gray-400">(12k terjual)</span>
                    </div>
                </div>
                <div class="flex items-end justify-between mt-4 pt-2 border-t border-gray-50">
                    <div>
                        <div class="text-base font-extrabold text-gray-900">Rp22.500</div>
                        <div class="text-xs text-gray-400 line-through -mt-0.5">Rp26.000</div>
                    </div>
                    <button class="add-to-cart-btn w-9 h-9 rounded-full bg-brand-800 hover:bg-brand-900 text-white flex items-center justify-center shadow-xs active:scale-95 transition" aria-label="Tambah ke keranjang">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-xs hover:shadow-md hover:-translate-y-0.5 transition duration-200 flex flex-col justify-between group">
                <div>
                    <div class="w-full h-52 bg-gray-50/75 rounded-xl flex items-center justify-center p-3 mb-3 overflow-hidden">
                        <img 
                            src="https://placehold.co/360x360/f3f4f6/1a5d38?text=Indomilk+Coklat" 
                            alt="Indomilk Susu UHT Coklat 1000ml" 
                            class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition duration-300"
                            loading="lazy"
                        />
                    </div>
                    <p class="text-[10px] font-bold text-brand-800 uppercase tracking-wider mb-1">INDOMILK</p>
                    <h3 class="text-sm font-semibold text-gray-900 group-hover:text-brand-800 transition line-clamp-2 leading-snug">
                        Susu UHT Coklat 1000ml
                    </h3>
                    <div class="flex items-center gap-1 mt-2 text-xs">
                        <span class="text-amber-400">★</span>
                        <span class="font-bold text-gray-800">4.8</span>
                        <span class="text-gray-400">(12k terjual)</span>
                    </div>
                </div>
                <div class="flex items-end justify-between mt-4 pt-2 border-t border-gray-50">
                    <div>
                        <div class="text-base font-extrabold text-gray-900">Rp22.500</div>
                        <div class="text-xs text-gray-400 line-through -mt-0.5">Rp26.000</div>
                    </div>
                    <button class="add-to-cart-btn w-9 h-9 rounded-full bg-brand-800 hover:bg-brand-900 text-white flex items-center justify-center shadow-xs active:scale-95 transition" aria-label="Tambah ke keranjang">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-xs hover:shadow-md hover:-translate-y-0.5 transition duration-200 flex flex-col justify-between group">
                <div>
                    <div class="w-full h-52 bg-gray-50/75 rounded-xl flex items-center justify-center p-3 mb-3 overflow-hidden">
                        <img 
                            src="https://placehold.co/360x360/f3f4f6/1a5d38?text=Indomilk+Coklat" 
                            alt="Indomilk Susu UHT Coklat 1000ml" 
                            class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition duration-300"
                            loading="lazy"
                        />
                    </div>
                    <p class="text-[10px] font-bold text-brand-800 uppercase tracking-wider mb-1">INDOMILK</p>
                    <h3 class="text-sm font-semibold text-gray-900 group-hover:text-brand-800 transition line-clamp-2 leading-snug">
                        Susu UHT Coklat 1000ml
                    </h3>
                    <div class="flex items-center gap-1 mt-2 text-xs">
                        <span class="text-amber-400">★</span>
                        <span class="font-bold text-gray-800">4.8</span>
                        <span class="text-gray-400">(12k terjual)</span>
                    </div>
                </div>
                <div class="flex items-end justify-between mt-4 pt-2 border-t border-gray-50">
                    <div>
                        <div class="text-base font-extrabold text-gray-900">Rp22.500</div>
                        <div class="text-xs text-gray-400 line-through -mt-0.5">Rp26.000</div>
                    </div>
                    <button class="add-to-cart-btn w-9 h-9 rounded-full bg-brand-800 hover:bg-brand-900 text-white flex items-center justify-center shadow-xs active:scale-95 transition" aria-label="Tambah ke keranjang">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-xs hover:shadow-md hover:-translate-y-0.5 transition duration-200 flex flex-col justify-between group">
                <div>
                    <div class="w-full h-52 bg-gray-50/75 rounded-xl flex items-center justify-center p-3 mb-3 overflow-hidden">
                        <img 
                            src="https://placehold.co/360x360/f3f4f6/1a5d38?text=Indomilk+Coklat" 
                            alt="Indomilk Susu UHT Coklat 1000ml" 
                            class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition duration-300"
                            loading="lazy"
                        />
                    </div>
                    <p class="text-[10px] font-bold text-brand-800 uppercase tracking-wider mb-1">INDOMILK</p>
                    <h3 class="text-sm font-semibold text-gray-900 group-hover:text-brand-800 transition line-clamp-2 leading-snug">
                        Susu UHT Coklat 1000ml
                    </h3>
                    <div class="flex items-center gap-1 mt-2 text-xs">
                        <span class="text-amber-400">★</span>
                        <span class="font-bold text-gray-800">4.8</span>
                        <span class="text-gray-400">(12k terjual)</span>
                    </div>
                </div>
                <div class="flex items-end justify-between mt-4 pt-2 border-t border-gray-50">
                    <div>
                        <div class="text-base font-extrabold text-gray-900">Rp22.500</div>
                        <div class="text-xs text-gray-400 line-through -mt-0.5">Rp26.000</div>
                    </div>
                    <button class="add-to-cart-btn w-9 h-9 rounded-full bg-brand-800 hover:bg-brand-900 text-white flex items-center justify-center shadow-xs active:scale-95 transition" aria-label="Tambah ke keranjang">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 9 -->
            <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-xs hover:shadow-md hover:-translate-y-0.5 transition duration-200 flex flex-col justify-between group">
                <div>
                    <div class="w-full h-52 bg-gray-50/75 rounded-xl flex items-center justify-center p-3 mb-3 overflow-hidden">
                        <img 
                            src="https://placehold.co/360x360/f3f4f6/1a5d38?text=Indomilk+Coklat" 
                            alt="Indomilk Susu UHT Coklat 1000ml" 
                            class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition duration-300"
                            loading="lazy"
                        />
                    </div>
                    <p class="text-[10px] font-bold text-brand-800 uppercase tracking-wider mb-1">INDOMILK</p>
                    <h3 class="text-sm font-semibold text-gray-900 group-hover:text-brand-800 transition line-clamp-2 leading-snug">
                        Susu UHT Coklat 1000ml
                    </h3>
                    <div class="flex items-center gap-1 mt-2 text-xs">
                        <span class="text-amber-400">★</span>
                        <span class="font-bold text-gray-800">4.8</span>
                        <span class="text-gray-400">(12k terjual)</span>
                    </div>
                </div>
                <div class="flex items-end justify-between mt-4 pt-2 border-t border-gray-50">
                    <div>
                        <div class="text-base font-extrabold text-gray-900">Rp22.500</div>
                        <div class="text-xs text-gray-400 line-through -mt-0.5">Rp26.000</div>
                    </div>
                    <button class="add-to-cart-btn w-9 h-9 rounded-full bg-brand-800 hover:bg-brand-900 text-white flex items-center justify-center shadow-xs active:scale-95 transition" aria-label="Tambah ke keranjang">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </div>
            </div>

        </div>

        <!-- LOAD MORE BUTTON -->
        <div class="flex justify-center my-10">
            <button 
                id="loadMoreBtn" 
                class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border-2 border-brand-800 text-brand-800 hover:bg-brand-800 hover:text-white font-semibold text-xs transition duration-200 shadow-xs"
            >
                <span>Muat 8 Produk Lagi</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </button>
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="bg-[#134e32] text-white pt-14 pb-8 mt-12 border-t border-brand-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 mb-12">
                
                <!-- Column 1: Brand & Tagline -->
                <div>
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-white text-brand-900 flex items-center justify-center shadow-xs">
                            <svg class="w-5 h-5 text-brand-900" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                        </div>
                        <span class="text-xl font-black tracking-tight text-white">SmesaMart</span>
                    </div>
                    <p class="text-emerald-100/75 text-xs mt-3.5 leading-relaxed max-w-xs">
                        Belanja kebutuhan sehari-hari dengan mudah, cepat, dan hemat.
                    </p>
                </div>

                <!-- Column 2: Layanan -->
                <div>
                    <h4 class="font-bold text-sm text-white mb-3.5 tracking-wide">Layanan</h4>
                    <ul class="space-y-2.5 text-xs text-emerald-100/75">
                        <li><a href="#lacak" class="hover:text-white transition">Lacak Pesanan</a></li>
                        <li><a href="#pengembalian" class="hover:text-white transition">Pengembalian</a></li>
                        <li><a href="#bantuan" class="hover:text-white transition">Bantuan</a></li>
                        <li><a href="#faq" class="hover:text-white transition">FAQ</a></li>
                    </ul>
                </div>

                <!-- Column 3: Tentang -->
                <div>
                    <h4 class="font-bold text-sm text-white mb-3.5 tracking-wide">Tentang</h4>
                    <ul class="space-y-2.5 text-xs text-emerald-100/75">
                        <li><a href="#tentang-kami" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#karir" class="hover:text-white transition">Karir</a></li>
                        <li><a href="#blog" class="hover:text-white transition">Blog</a></li>
                        <li><a href="#privasi" class="hover:text-white transition">Kebijakan Privasi</a></li>
                    </ul>
                </div>

                <!-- Column 4: Ikuti Kami -->
                <div>
                    <h4 class="font-bold text-sm text-white mb-3.5 tracking-wide">Ikuti Kami</h4>
                    <ul class="space-y-2.5 text-xs text-emerald-100/75">
                        <li><a href="#instagram" class="hover:text-white transition">Instagram</a></li>
                        <li><a href="#facebook" class="hover:text-white transition">Facebook</a></li>
                        <li><a href="#twitter" class="hover:text-white transition">Twitter</a></li>
                        <li><a href="#youtube" class="hover:text-white transition">YouTube</a></li>
                    </ul>
                </div>

            </div>

            <!-- Divider & Copyright -->
            <div class="border-t border-emerald-800/80 pt-6 text-center">
                <p class="text-emerald-200/60 text-xs">
                    &copy; 2026 SmesaMart. Hak cipta dilindungi undang-undang.
                </p>
            </div>
        </div>
    </footer>

    <!-- Toast Notification -->
    <div id="toast" class="fixed bottom-5 right-5 bg-gray-900 text-white text-xs px-4 py-3 rounded-xl shadow-lg transform translate-y-20 opacity-0 transition duration-300 pointer-events-none flex items-center gap-2 z-50">
        <span class="text-emerald-400 font-bold">✓</span>
        <span id="toastMessage">Produk ditambahkan ke keranjang!</span>
    </div>

    <!-- Client-side Interactivity Script -->
    <script>
        // 1. Live Flash Sale Countdown Timer
        let totalSeconds = (2 * 3600) + (45 * 60) + 48; // 02:45:48
        const hoursEl = document.getElementById('hours');
        const minutesEl = document.getElementById('minutes');
        const secondsEl = document.getElementById('seconds');

        function updateCountdown() {
            if (totalSeconds <= 0) {
                totalSeconds = 3 * 3600; // Reset loop if reached 0
            }
            totalSeconds--;

            const h = Math.floor(totalSeconds / 3600);
            const m = Math.floor((totalSeconds % 3600) / 60);
            const s = totalSeconds % 60;

            if (hoursEl) hoursEl.textContent = String(h).padStart(2, '0');
            if (minutesEl) minutesEl.textContent = String(m).padStart(2, '0');
            if (secondsEl) secondsEl.textContent = String(s).padStart(2, '0');
        }
        setInterval(updateCountdown, 1000);

        // 2. Interactive Category Pills
        const categoryPills = document.querySelectorAll('.category-pill');
        categoryPills.forEach(pill => {
            pill.addEventListener('click', () => {
                categoryPills.forEach(p => {
                    if (p.textContent.trim() === 'Flash Sale') {
                        p.className = 'category-pill border border-red-400 text-red-500 hover:bg-red-50 text-xs font-semibold px-4 py-2 rounded-full whitespace-nowrap transition';
                    } else {
                        p.className = 'category-pill bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-medium px-4 py-2 rounded-full whitespace-nowrap transition';
                    }
                });
                pill.className = 'category-pill active bg-brand-800 text-white text-xs font-semibold px-4 py-2 rounded-full whitespace-nowrap shadow-xs transition';
            });
        });

        // 3. Cart Badge & Add to Cart
        let cartCount = 3;
        const cartBadge = document.getElementById('cartBadge');
        const toast = document.getElementById('toast');
        const toastMessage = document.getElementById('toastMessage');

        function showToast(msg) {
            toastMessage.textContent = msg;
            toast.classList.remove('translate-y-20', 'opacity-0');
            toast.classList.add('translate-y-0', 'opacity-100');
            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');
                toast.classList.remove('translate-y-0', 'opacity-100');
            }, 2000);
        }

        document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                cartCount++;
                if (cartBadge) {
                    cartBadge.textContent = cartCount;
                    cartBadge.classList.add('scale-125');
                    setTimeout(() => cartBadge.classList.remove('scale-125'), 200);
                }
                showToast('1x Susu UHT Coklat 1000ml ditambahkan ke keranjang!');
            });
        });

        // 4. Load More Simulation
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        const productGrid = document.getElementById('productGrid');
        
        if (loadMoreBtn && productGrid) {
            loadMoreBtn.addEventListener('click', () => {
                loadMoreBtn.disabled = true;
                loadMoreBtn.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-brand-800" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                    </svg>
                    <span>Memuat...</span>
                `;

                setTimeout(() => {
                    // Clone first 3 cards to append
                    const cards = Array.from(productGrid.children).slice(0, 3);
                    cards.forEach(card => {
                        const clone = card.cloneNode(true);
                        // Reattach listener to clone's add button
                        const addBtn = clone.querySelector('.add-to-cart-btn');
                        if (addBtn) {
                            addBtn.addEventListener('click', (e) => {
                                e.stopPropagation();
                                cartCount++;
                                if (cartBadge) cartBadge.textContent = cartCount;
                                showToast('1x Susu UHT Coklat 1000ml ditambahkan ke keranjang!');
                            });
                        }
                        productGrid.appendChild(clone);
                    });

                    loadMoreBtn.disabled = false;
                    loadMoreBtn.innerHTML = `
                        <span>Muat 8 Produk Lagi</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    `;
                    showToast('3 produk tambahan berhasil dimuat!');
                }, 600);
            });
        }
    </script>
</body>
</html>