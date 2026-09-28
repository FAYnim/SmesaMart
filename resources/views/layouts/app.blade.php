<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SmesaMart - Dashboard')</title>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- External Modular CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    @stack('styles')
</head>
<body>

    <div class="app-container">
        
        <!-- SIDEBAR NAVIGATION -->
        <aside class="sidebar" id="appSidebar">
            <!-- Brand Logo Header -->
            <a href="/" class="brand-wrapper">
                <div class="brand-icon-box">
                    <i class="bi bi-shop"></i>
                </div>
                <div class="brand-text">
                    <h1>SmesaMart</h1>
                    <span>SMESAMART ECOSYSTEM</span>
                </div>
            </a>

            <!-- Navigation Links -->
            <div class="sidebar-menu">
                
                @php
                    $currentNav = trim($__env->yieldContent('active_nav'));
                @endphp
                <!-- Category: UTAMA -->
                <p class="nav-category">UTAMA</p>
                <a href="{{ url('/dashboard') }}" class="nav-link-custom {{ ($currentNav === 'dashboard') || (!$currentNav && (request()->is('dashboard*') || request()->is('/')) && !request()->is('produk*') && !request()->is('stok*')) ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>

                <!-- Category: TOKO -->
                <p class="nav-category mt-3">TOKO</p>
                <a href="{{ url('/produk') }}" class="nav-link-custom {{ ($currentNav === 'produk') || (!$currentNav && request()->is('produk*')) ? 'active' : '' }}">
                    <i class="bi bi-box-seam"></i>
                    <span>Produk</span>
                </a>
                <a href="{{ url('/stok') }}" class="nav-link-custom {{ ($currentNav === 'stok') || (!$currentNav && request()->is('stok*')) ? 'active' : '' }}">
                    <i class="bi bi-database"></i>
                    <span>Stok</span>
                </a>

                <!-- Category: TRANSAKSI -->
                <p class="nav-category mt-3">TRANSAKSI</p>
                <a href="{{ url('/pesanan') }}" class="nav-link-custom {{ ($currentNav === 'pesanan') || (!$currentNav && request()->is('pesanan*')) ? 'active' : '' }}">
                    <i class="bi bi-bag"></i>
                    <span>Pesanan</span>
                </a>
                <a href="{{ url('/pengembalian') }}" class="nav-link-custom {{ ($currentNav === 'pengembalian') || (!$currentNav && request()->is('pengembalian*')) ? 'active' : '' }}">
                    <i class="bi bi-arrow-left-right"></i>
                    <span>Pengembalian</span>
                </a>

                <!-- Category: LAINNYA -->
                <p class="nav-category mt-3">LAINNYA</p>
                <a href="{{ url('/pengaturan') }}" class="nav-link-custom {{ ($currentNav === 'pengaturan') || (!$currentNav && request()->is('pengaturan*')) ? 'active' : '' }}">
                    <i class="bi bi-gear"></i>
                    <span>Pengaturan</span>
                </a>

            </div>

            <!-- Bottom Profile / Logout -->
            <div class="sidebar-footer">
                <div class="user-profile-widget">
                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=100&auto=format&fit=crop&q=80" alt="Admin Smesa" class="user-profile-img">
                    <div>
                        <p class="user-profile-name">Admin Smesa</p>
                        <p class="user-profile-role">admin123</p>
                    </div>
                </div>
                <button type="button" class="btn-logout" title="Keluar">
                    <i class="bi bi-box-arrow-right"></i>
                </button>
            </div>
        </aside>

        <!-- MAIN WRAPPER -->
        <div class="main-wrapper">
            
            <!-- TOP NAVBAR -->
            <header class="top-navbar">
                <div class="d-flex align-items-center gap-3">
                    <!-- Mobile Hamburger Button -->
                    <button class="btn btn-sm btn-light d-lg-none" id="sidebarToggleBtn" type="button" aria-label="Toggle sidebar">
                        <i class="bi bi-list fs-4"></i>
                    </button>
                    
                    @if(View::hasSection('header_left_custom'))
                        @yield('header_left_custom')
                    @elseif(trim($__env->yieldContent('header_title')))
                        <h2 class="page-title">@yield('header_title')</h2>
                    @else
                        <h2 class="page-title">Dashboard</h2>
                    @endif
                </div>

                <!-- Right Actions: Search, Notifications & Profile -->
                <div class="header-actions">
                    @if(!View::hasSection('header_left_custom'))
                    <!-- Search Box -->
                    <div class="search-container d-none d-md-block">
                        <i class="bi bi-search"></i>
                        <input type="text" class="search-input" placeholder="@yield('search_placeholder', 'Cari sesuatu...')" aria-label="Search">
                    </div>
                    @endif

                    <!-- Bell Notification -->
                    <button type="button" class="notification-btn" aria-label="Notifikasi">
                        <i class="bi bi-bell"></i>
                        <span class="notification-dot"></span>
                    </button>

                    <!-- Admin Profile Badge -->
                    <div class="top-user-profile">
                        @if(View::hasSection('header_user_badge'))
                            @yield('header_user_badge')
                        @else
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&auto=format&fit=crop&q=80" alt="Foto Profil Admin" class="top-user-img">
                            <div class="top-user-meta d-none d-sm-block">
                                <p class="top-user-name">Admin Smesa</p>
                                <p class="top-user-sub">admin123</p>
                            </div>
                        @endif
                    </div>
                </div>
            </header>

            <!-- PAGE CONTENT CONTAINER -->
            <main class="page-content">
                @yield('content')
            </main>

        </div>

    </div>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Mobile Sidebar Toggle Script -->
    <script>
        const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
        const appSidebar = document.getElementById('appSidebar');

        if (sidebarToggleBtn && appSidebar) {
            sidebarToggleBtn.addEventListener('click', () => {
                appSidebar.classList.toggle('show');
            });

            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', (e) => {
                if (window.innerWidth < 992) {
                    if (!appSidebar.contains(e.target) && !sidebarToggleBtn.contains(e.target) && appSidebar.classList.contains('show')) {
                        appSidebar.classList.remove('show');
                    }
                }
            });
        }
    </script>

    @stack('scripts')
</body>
</html>
