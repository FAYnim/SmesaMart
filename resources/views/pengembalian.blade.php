@extends('layouts.app')

@section('title', 'SmesaMart - Pengembalian')
@section('header_title', 'Pengembalian')
@section('search_placeholder', 'Cari...')
@section('active_nav', 'pengembalian')

@section('header_user_badge')
    <div class="user-avatar-initials">AD</div>
    <div class="top-user-meta d-none d-sm-block">
        <p class="top-user-name">Admin SmesaMart</p>
        <p class="top-user-sub">admin123</p>
    </div>
@endsection

@section('content')
<div class="container-fluid p-0">

    <!-- Header Section -->
    <div class="page-header-wrapper">
        <h1 class="page-main-heading">Pengembalian</h1>
        <p class="page-subheading">Kelola permintaan pengembalian pesanan untuk SmesaMart</p>
    </div>

    <!-- 3 Summary Statistics Cards -->
    <div class="summary-cards-grid">
        
        <!-- Card 1: 1 Permintaan / Menunggu -->
        <div class="stat-summary-card">
            <div class="stat-icon-square icon-box-amber">
                <i class="bi bi-clock"></i>
            </div>
            <div class="stat-info-meta">
                <h3 class="stat-main-number">1 Permintaan</h3>
                <span class="stat-sub-label">Menunggu</span>
            </div>
        </div>

        <!-- Card 2: 1 Sedang Diproses / Diproses -->
        <div class="stat-summary-card">
            <div class="stat-icon-square icon-box-teal">
                <i class="bi bi-arrow-repeat"></i>
            </div>
            <div class="stat-info-meta">
                <h3 class="stat-main-number">1 Sedang Diproses</h3>
                <span class="stat-sub-label">Diproses</span>
            </div>
        </div>

        <!-- Card 3: 1 Selesai / Selesai Minggu Ini -->
        <div class="stat-summary-card">
            <div class="stat-icon-square icon-box-mint">
                <i class="bi bi-check2-circle"></i>
            </div>
            <div class="stat-info-meta">
                <h3 class="stat-main-number">1 Selesai</h3>
                <span class="stat-sub-label">Selesai Minggu Ini</span>
            </div>
        </div>

    </div>

    <!-- Return Cards List -->
    <div class="return-cards-list">

        <!-- 1. #NM202608021 - Rina Putri -->
        <div class="return-card">
            <div class="return-card-top">
                <div class="order-code-group">
                    <i class="bi bi-file-earmark-text"></i>
                    <h2 class="order-code-title">#NM202608021</h2>
                </div>
                <span class="status-badge badge-menunggu">Menunggu</span>
            </div>
            <div class="return-card-bottom">
                <div class="return-col-item">
                    <span class="return-label">PELANGGAN</span>
                    <p class="return-value">Rina Putri</p>
                </div>
                <div class="return-col-item">
                    <span class="return-label">PRODUK</span>
                    <p class="return-value">Susu UHT Coklat 1000ml</p>
                </div>
                <div class="return-col-item">
                    <span class="return-label">ALASAN</span>
                    <p class="return-value">Produk rusak</p>
                </div>
                <div>
                    <a href="#detail" class="btn-lihat-detail">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- 2. #NM202608017 - Dimas Saputra -->
        <div class="return-card">
            <div class="return-card-top">
                <div class="order-code-group">
                    <i class="bi bi-file-earmark-text"></i>
                    <h2 class="order-code-title">#NM202608017</h2>
                </div>
                <span class="status-badge badge-diproses">Diproses</span>
            </div>
            <div class="return-card-bottom">
                <div class="return-col-item">
                    <span class="return-label">PELANGGAN</span>
                    <p class="return-value">Dimas Saputra</p>
                </div>
                <div class="return-col-item">
                    <span class="return-label">PRODUK</span>
                    <p class="return-value">Minyak Goreng 1L</p>
                </div>
                <div class="return-col-item">
                    <span class="return-label">ALASAN</span>
                    <p class="return-value">Produk tidak sesuai</p>
                </div>
                <div>
                    <a href="#detail" class="btn-lihat-detail">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- 3. #NM202608011 - Ayu Lestari -->
        <div class="return-card">
            <div class="return-card-top">
                <div class="order-code-group">
                    <i class="bi bi-file-earmark-text"></i>
                    <h2 class="order-code-title">#NM202608011</h2>
                </div>
                <span class="status-badge badge-selesai">Selesai</span>
            </div>
            <div class="return-card-bottom">
                <div class="return-col-item">
                    <span class="return-label">PELANGGAN</span>
                    <p class="return-value">Ayu Lestari</p>
                </div>
                <div class="return-col-item">
                    <span class="return-label">PRODUK</span>
                    <p class="return-value">Indomie Goreng</p>
                </div>
                <div class="return-col-item">
                    <span class="return-label">ALASAN</span>
                    <p class="return-value">Pesanan salah</p>
                </div>
                <div>
                    <a href="#detail" class="btn-lihat-detail">Lihat Detail</a>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
