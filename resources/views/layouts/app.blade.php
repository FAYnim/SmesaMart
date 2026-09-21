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

    <!-- Custom CSS replicating exact design -->
    <style>
        :root {
            --brand-green: #00593b;
            --brand-green-hover: #03482f;
            --brand-green-light: #e6f4ea;
            --brand-green-active-text: #00593b;
            --bg-body: #f8fafc;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --text-light-muted: #94a3b8;
            --card-border: #f1f5f9;
            --card-radius: 18px;
            --sidebar-width: 260px;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-main);
            overflow-x: hidden;
        }

        /* Layout wrapper */
        .app-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styling */
        .sidebar {
            width: var(--sidebar-width);
            min-width: var(--sidebar-width);
            background-color: #ffffff;
            border-right: 1px solid #f1f5f9;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            z-index: 1020;
            transition: transform 0.3s ease;
        }

        .sidebar::-webkit-scrollbar {
            width: 4px;
        }
        .sidebar::-webkit-scrollbar-thumb {
            background: #e2e8f0;
            border-radius: 4px;
        }

        /* Brand Logo Header */
        .brand-wrapper {
            padding: 1.5rem 1.25rem 1.25rem;
            display: flex;
            align-items: center;
            gap: 0.85rem;
            text-decoration: none;
        }

        .brand-icon-box {
            width: 42px;
            height: 42px;
            background-color: var(--brand-green);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 1.25rem;
            box-shadow: 0 4px 10px rgba(0, 89, 59, 0.15);
        }

        .brand-text h1 {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
            line-height: 1.2;
        }

        .brand-text span {
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 0.8px;
            color: var(--text-light-muted);
            text-transform: uppercase;
        }

        /* Sidebar Navigation */
        .sidebar-menu {
            padding: 0.75rem 1rem;
            flex-grow: 1;
        }

        .nav-category {
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 1px;
            color: var(--text-light-muted);
            text-transform: uppercase;
            padding: 0.85rem 0.75rem 0.35rem;
            margin: 0;
        }

        .nav-link-custom {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            padding: 0.72rem 1rem;
            color: #334155;
            text-decoration: none;
            font-size: 0.925rem;
            font-weight: 500;
            border-radius: 12px;
            margin-bottom: 0.25rem;
            transition: all 0.2s ease;
        }

        .nav-link-custom i {
            font-size: 1.15rem;
            width: 22px;
            text-align: center;
            color: #64748b;
            transition: color 0.2s ease;
        }

        .nav-link-custom:hover {
            color: var(--brand-green);
            background-color: #f8fafc;
        }

        .nav-link-custom:hover i {
            color: var(--brand-green);
        }

        /* Active navigation item */
        .nav-link-custom.active {
            background-color: #e6f4ea;
            color: #00593b;
            font-weight: 700;
        }

        .nav-link-custom.active i {
            color: #00593b;
        }

        /* Bottom Profile in Sidebar */
        .sidebar-footer {
            padding: 1rem 1.25rem;
            border-top: 1px solid #f8fafc;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .user-profile-widget {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .user-profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .user-profile-name {
            font-size: 0.875rem;
            font-weight: 600;
            color: #0f172a;
            line-height: 1.2;
            margin: 0;
        }

        .user-profile-role {
            font-size: 0.75rem;
            color: var(--text-light-muted);
            margin: 0;
        }

        .btn-logout {
            color: var(--text-light-muted);
            font-size: 1.2rem;
            background: none;
            border: none;
            padding: 4px;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .btn-logout:hover {
            color: #ef4444;
        }

        /* Main Content Container */
        .main-wrapper {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            min-width: 0;
        }

        /* Top Header Navbar */
        .top-navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #f1f5f9;
            padding: 1.25rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1010;
        }

        .page-title {
            font-size: 1.45rem;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
        }

        /* Search Bar */
        .search-container {
            position: relative;
            width: 280px;
            max-width: 100%;
        }

        .search-container i {
            position: absolute;
            left: 1.1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 0.95rem;
        }

        .search-input {
            width: 100%;
            padding: 0.5rem 1rem 0.5rem 2.6rem;
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            font-size: 0.85rem;
            color: #0f172a;
            outline: none;
            transition: all 0.2s ease;
        }

        .search-input::placeholder {
            color: #94a3b8;
        }

        .search-input:focus {
            background-color: #ffffff;
            border-color: var(--brand-green);
            box-shadow: 0 0 0 3px rgba(0, 89, 59, 0.08);
        }

        /* Top Right Profile & Notifications */
        .header-actions {
            display: flex;
            align-items: center;
            gap: 1.25rem;
        }

        .notification-btn {
            position: relative;
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            color: #475569;
            font-size: 1.15rem;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .notification-btn:hover {
            background-color: #f1f5f9;
            color: #0f172a;
        }

        .notification-dot {
            position: absolute;
            top: 8px;
            right: 9px;
            width: 7px;
            height: 7px;
            background-color: #f59e0b;
            border-radius: 50%;
        }

        .top-user-profile {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .top-user-meta {
            text-align: left;
            line-height: 1.2;
        }

        .top-user-name {
            font-size: 0.875rem;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
        }

        .top-user-sub {
            font-size: 0.75rem;
            color: var(--text-light-muted);
            margin: 0;
        }

        .top-user-img {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Page Content Padding */
        .page-content {
            padding: 2rem;
            flex-grow: 1;
        }

        /* Custom Cards */
        .dash-card {
            background-color: #ffffff;
            border: 1px solid var(--card-border);
            border-radius: var(--card-radius);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        /* Responsive Mobile Drawer */
        @media (max-width: 991.98px) {
            .sidebar {
                position: fixed;
                left: -260px;
                top: 0;
                bottom: 0;
                box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
            }

            .sidebar.show {
                left: 0;
            }

            .search-container {
                display: none;
            }

            .page-content {
                padding: 1.25rem;
            }

            .top-navbar {
                padding: 1rem 1.25rem;
            }
        }
    </style>

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
                <a href="#pengembalian" class="nav-link-custom">
                    <i class="bi bi-arrow-left-right"></i>
                    <span>Pengembalian</span>
                </a>

                <!-- Category: LAINNYA -->
                <p class="nav-category mt-3">LAINNYA</p>
                <a href="#pengaturan" class="nav-link-custom">
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
                    
                    <h2 class="page-title">@yield('header_title', 'Dashboard')</h2>
                </div>

                <!-- Right Actions: Search, Notifications & Profile -->
                <div class="header-actions">
                    <!-- Search Box -->
                    <div class="search-container d-none d-md-block">
                        <i class="bi bi-search"></i>
                        <input type="text" class="search-input" placeholder="@yield('search_placeholder', 'Cari sesuatu...')" aria-label="Search">
                    </div>

                    <!-- Bell Notification -->
                    <button type="button" class="notification-btn" aria-label="Notifikasi">
                        <i class="bi bi-bell"></i>
                        <span class="notification-dot"></span>
                    </button>

                    <!-- Admin Profile Badge -->
                    <div class="top-user-profile">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&auto=format&fit=crop&q=80" alt="Foto Profil Admin" class="top-user-img">
                        <div class="top-user-meta d-none d-sm-block">
                            <p class="top-user-name">Admin Smesa</p>
                            <p class="top-user-sub">admin123</p>
                        </div>
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
