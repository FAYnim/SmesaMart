<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmesaMart - Checkout</title>

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
    <link rel="stylesheet" href="{{ asset('css/public.css') }}">
</head>
<body class="bg-[#f9fafb] text-gray-800 font-sans antialiased min-h-screen flex flex-col">

    <!-- TOP HEADER -->
    <header class="bg-white border-b border-gray-100 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3.5">
            <div class="flex items-center justify-between gap-4">

                <!-- Brand Logo -->
                <a href="/" class="flex items-center gap-2 shrink-0 group">
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
                            placeholder="Temukan produk favoritmu di sini..."
                            class="w-full bg-transparent text-sm text-gray-700 placeholder-gray-400 focus:outline-none pr-3"
                        />
                        <a href="/" aria-label="Cari Produk" class="w-8 h-8 rounded-full bg-brand-800 hover:bg-brand-900 text-white flex items-center justify-center shrink-0 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Action Icons & Buttons -->
                <div class="flex items-center gap-3 sm:gap-4 shrink-0">
                    <!-- Cart Icon with Badge -->
                    <span class="relative p-2 text-brand-800" aria-label="Keranjang Belanja">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span class="absolute top-0.5 right-0.5 bg-brand-800 text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-xs">3</span>
                    </span>

                    <!-- User Profile Icon -->
                    <button class="p-2 text-gray-700 hover:text-brand-800 transition" aria-label="Profil Akun">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </button>

                    <!-- Auth Links -->
                    <button type="button" class="text-sm font-semibold text-gray-700 hover:text-brand-800 transition hidden sm:inline-block cursor-pointer">Daftar</button>
                    <button type="button" class="text-sm font-semibold text-white bg-brand-800 hover:bg-brand-900 px-5 py-2 rounded-full shadow-xs transition cursor-pointer">Masuk</button>
                </div>
            </div>
        </div>
    </header>

    <!-- BREADCRUMB -->
    <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 pt-5 pb-1">
        <nav class="flex items-center gap-1.5 text-xs font-medium text-gray-400">
            <a href="/" class="hover:text-brand-800 transition">Beranda</a>
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
            <span class="text-gray-700 font-bold">Checkout</span>
        </nav>
        <h1 class="text-2xl font-black text-gray-900 tracking-tight mt-1.5">Checkout</h1>
    </div>

    <!-- MAIN CONTENT -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-4">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">

            <!-- LEFT: Cart Items + Shipping Form (2 Columns) -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Cart Items -->
                <section class="bg-white rounded-2xl border border-gray-100 shadow-xs p-5 sm:p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-base font-extrabold text-gray-900">Keranjang Belanja <span class="text-xs font-bold text-gray-400">(3 produk)</span></h2>
                        <a href="/" class="text-[11px] font-bold text-brand-800 hover:underline">Lanjut Belanja</a>
                    </div>

                    <div class="divide-y divide-gray-50">
                        <!-- Item 1 -->
                        <div class="flex items-center gap-4 py-3.5">
                            <div class="w-16 h-16 bg-gray-50/75 rounded-xl flex items-center justify-center overflow-hidden shrink-0">
                                <img src="https://placehold.co/120x120/f3f4f6/1a5d38?text=Indomilk" alt="Susu UHT Coklat 1000ml" class="w-full h-full object-cover" loading="lazy" />
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-[10px] font-bold text-brand-800 uppercase tracking-wider">INDOMILK</p>
                                <h3 class="text-sm font-semibold text-gray-900 truncate">Susu UHT Coklat 1000ml</h3>
                                <p class="text-xs font-extrabold text-gray-900 mt-0.5">Rp22.500</p>
                            </div>
                            <div class="flex items-center gap-2 shrink-0">
                                <button type="button" class="w-7 h-7 rounded-full border border-gray-200 text-gray-500 hover:border-brand-800 hover:text-brand-800 flex items-center justify-center transition text-sm font-bold">+</button>
                                <span class="text-xs font-bold w-6 text-center">1</span>
                                <button type="button" class="w-7 h-7 rounded-full border border-gray-200 text-gray-500 hover:border-brand-800 hover:text-brand-800 flex items-center justify-center transition text-sm font-bold">−</button>
                            </div>
                            <button type="button" class="text-gray-300 hover:text-red-500 transition" aria-label="Hapus produk">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex items-center gap-4 py-3.5">
                            <div class="w-16 h-16 bg-gray-50/75 rounded-xl flex items-center justify-center overflow-hidden shrink-0">
                                <img src="https://placehold.co/120x120/f3f4f6/1a5d38?text=Indomilk" alt="Susu UHT Coklat 1000ml" class="w-full h-full object-cover" loading="lazy" />
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-[10px] font-bold text-brand-800 uppercase tracking-wider">INDOMILK</p>
                                <h3 class="text-sm font-semibold text-gray-900 truncate">Susu UHT Coklat 1000ml</h3>
                                <p class="text-xs font-extrabold text-gray-900 mt-0.5">Rp22.500</p>
                            </div>
                            <div class="flex items-center gap-2 shrink-0">
                                <button type="button" class="w-7 h-7 rounded-full border border-gray-200 text-gray-500 hover:border-brand-800 hover:text-brand-800 flex items-center justify-center transition text-sm font-bold">+</button>
                                <span class="text-xs font-bold w-6 text-center">1</span>
                                <button type="button" class="w-7 h-7 rounded-full border border-gray-200 text-gray-500 hover:border-brand-800 hover:text-brand-800 flex items-center justify-center transition text-sm font-bold">−</button>
                            </div>
                            <button type="button" class="text-gray-300 hover:text-red-500 transition" aria-label="Hapus produk">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- Item 3 -->
                        <div class="flex items-center gap-4 py-3.5">
                            <div class="w-16 h-16 bg-gray-50/75 rounded-xl flex items-center justify-center overflow-hidden shrink-0">
                                <img src="https://placehold.co/120x120/f3f4f6/1a5d38?text=Indomilk" alt="Susu UHT Coklat 1000ml" class="w-full h-full object-cover" loading="lazy" />
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-[10px] font-bold text-brand-800 uppercase tracking-wider">INDOMILK</p>
                                <h3 class="text-sm font-semibold text-gray-900 truncate">Susu UHT Coklat 1000ml</h3>
                                <p class="text-xs font-extrabold text-gray-900 mt-0.5">Rp22.500</p>
                            </div>
                            <div class="flex items-center gap-2 shrink-0">
                                <button type="button" class="w-7 h-7 rounded-full border border-gray-200 text-gray-500 hover:border-brand-800 hover:text-brand-800 flex items-center justify-center transition text-sm font-bold">+</button>
                                <span class="text-xs font-bold w-6 text-center">1</span>
                                <button type="button" class="w-7 h-7 rounded-full border border-gray-200 text-gray-500 hover:border-brand-800 hover:text-brand-800 flex items-center justify-center transition text-sm font-bold">−</button>
                            </div>
                            <button type="button" class="text-gray-300 hover:text-red-500 transition" aria-label="Hapus produk">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- Shipping Form -->
                <section class="bg-white rounded-2xl border border-gray-100 shadow-xs p-5 sm:p-6">
                    <h2 class="text-base font-extrabold text-gray-900 mb-4">Alamat Pengiriman</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1">NAMA PENERIMA</label>
                            <input
                                type="text"
                                placeholder="Nama penerima pesanan"
                                class="w-full px-3.5 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-xs text-gray-800 placeholder-gray-400 focus:outline-none focus:bg-white focus:border-brand-800 focus:ring-2 focus:ring-brand-100 transition"
                            />
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1">NOMOR HP</label>
                            <input
                                type="tel"
                                placeholder="08xxxxxxxxxx"
                                class="w-full px-3.5 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-xs text-gray-800 placeholder-gray-400 focus:outline-none focus:bg-white focus:border-brand-800 focus:ring-2 focus:ring-brand-100 transition"
                            />
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1">ALAMAT LENGKAP</label>
                            <textarea
                                rows="3"
                                placeholder="Jalan, nomor rumah, kecamatan, kota..."
                                class="w-full px-3.5 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-xs text-gray-800 placeholder-gray-400 focus:outline-none focus:bg-white focus:border-brand-800 focus:ring-2 focus:ring-brand-100 transition resize-none"
                            ></textarea>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1">CATATAN (OPSIONAL)</label>
                            <input
                                type="text"
                                placeholder="Contoh: serahkan ke penjaga sekolah"
                                class="w-full px-3.5 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-xs text-gray-800 placeholder-gray-400 focus:outline-none focus:bg-white focus:border-brand-800 focus:ring-2 focus:ring-brand-100 transition"
                            />
                        </div>
                    </div>
                </section>

                <!-- Payment Method -->
                <section class="bg-white rounded-2xl border border-gray-100 shadow-xs p-5 sm:p-6">
                    <h2 class="text-base font-extrabold text-gray-900 mb-4">Metode Pembayaran</h2>
                    <div class="space-y-3">
                        <label class="flex items-center gap-3 border border-brand-800 bg-brand-50 rounded-xl p-3.5 cursor-pointer transition">
                            <input type="radio" name="payment" class="w-4 h-4 accent-brand-800" checked />
                            <div class="flex-1">
                                <p class="text-xs font-bold text-gray-900">Transfer Bank / Virtual Account</p>
                                <p class="text-[11px] text-gray-500">BCA, Mandiri, BNI — kode VA otomatis</p>
                            </div>
                            <svg class="w-4 h-4 text-brand-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line></svg>
                        </label>
                        <label class="flex items-center gap-3 border border-gray-200 rounded-xl p-3.5 cursor-pointer hover:border-gray-300 transition">
                            <input type="radio" name="payment" class="w-4 h-4 accent-brand-800" />
                            <div class="flex-1">
                                <p class="text-xs font-bold text-gray-900">QRIS</p>
                                <p class="text-[11px] text-gray-500">Scan via GoPay, OVO, DANA, ShopeePay</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                        </label>
                        <label class="flex items-center gap-3 border border-gray-200 rounded-xl p-3.5 cursor-pointer hover:border-gray-300 transition">
                            <input type="radio" name="payment" class="w-4 h-4 accent-brand-800" />
                            <div class="flex-1">
                                <p class="text-xs font-bold text-gray-900">COD (Bayar di Tempat)</p>
                                <p class="text-[11px] text-gray-500">Tunai kepada kurir saat pesanan tiba</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><rect x="2" y="6" width="20" height="12" rx="2"></rect><circle cx="12" cy="12" r="2.5"></circle></svg>
                        </label>
                    </div>
                </section>
            </div>

            <!-- RIGHT: Order Summary -->
            <aside class="bg-white rounded-2xl border border-gray-100 shadow-xs p-5 sm:p-6 lg:sticky lg:top-20">
                <h2 class="text-base font-extrabold text-gray-900 mb-4">Ringkasan Pesanan</h2>

                <div class="space-y-2.5 text-xs">
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500 font-medium">Subtotal (3 produk)</span>
                        <span class="font-bold text-gray-900">Rp67.500</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500 font-medium">Biaya Ongkir</span>
                        <span class="font-bold text-brand-800">Gratis</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500 font-medium">Potongan Promo</span>
                        <span class="font-bold text-red-500">-Rp5.000</span>
                    </div>
                    <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                        <span class="text-sm font-extrabold text-gray-900">Total</span>
                        <span class="text-base font-black text-brand-800">Rp51.000</span>
                    </div>
                </div>

                <!-- Promo Code -->
                <div class="flex items-center gap-2 mt-5">
                    <input
                        type="text"
                        placeholder="Kode promo"
                        class="flex-1 min-w-0 px-3.5 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-xs text-gray-800 placeholder-gray-400 focus:outline-none focus:bg-white focus:border-brand-800 focus:ring-2 focus:ring-brand-100 transition"
                    />
                    <button type="button" class="px-4 py-2.5 text-xs font-bold text-brand-800 border-2 border-brand-800 rounded-xl hover:bg-brand-800 hover:text-white transition">Pakai</button>
                </div>

                <!-- Checkout Button -->
                <button id="checkoutBtn" type="button" class="w-full mt-5 py-3.5 bg-brand-800 hover:bg-brand-900 text-white font-bold text-sm rounded-xl shadow-md flex items-center justify-center gap-2 transition transform active:scale-[0.99]">
                    <span>Selesaikan Pesanan</span>
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>

                <p class="flex items-center gap-1.5 text-[10px] text-gray-400 mt-3">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    Data &amp; transaksi Anda dilindungi enkripsi aman
                </p>
            </aside>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-[#134e32] text-white pt-14 pb-8 mt-12 border-t border-brand-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 mb-12">
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
                <div>
                    <h4 class="font-bold text-sm text-white mb-3.5 tracking-wide">Layanan</h4>
                    <ul class="space-y-2.5 text-xs text-emerald-100/75">
                        <li><a href="/#lacak" class="hover:text-white transition">Lacak Pesanan</a></li>
                        <li><a href="/#pengembalian" class="hover:text-white transition">Pengembalian</a></li>
                        <li><a href="/#bantuan" class="hover:text-white transition">Bantuan</a></li>
                        <li><a href="/#faq" class="hover:text-white transition">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-sm text-white mb-3.5 tracking-wide">Tentang</h4>
                    <ul class="space-y-2.5 text-xs text-emerald-100/75">
                        <li><a href="/#tentang-kami" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="/#karir" class="hover:text-white transition">Karir</a></li>
                        <li><a href="/#blog" class="hover:text-white transition">Blog</a></li>
                        <li><a href="/#privasi" class="hover:text-white transition">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-sm text-white mb-3.5 tracking-wide">Ikuti Kami</h4>
                    <ul class="space-y-2.5 text-xs text-emerald-100/75">
                        <li><a href="#" class="hover:text-white transition">Instagram</a></li>
                        <li><a href="#" class="hover:text-white transition">Facebook</a></li>
                        <li><a href="#" class="hover:text-white transition">Twitter</a></li>
                        <li><a href="#" class="hover:text-white transition">YouTube</a></li>
                    </ul>
                </div>
            </div>
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
        <span id="toastMessage">Pesanan berhasil dibuat!</span>
    </div>

    <!-- Client-side Interactivity Script -->
    <script>
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

        document.getElementById('checkoutBtn').addEventListener('click', () => {
            showToast('Pesanan berhasil dibuat! (demo)');
        });
    </script>
</body>
</html>
